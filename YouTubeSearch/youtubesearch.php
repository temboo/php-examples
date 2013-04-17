<?php

/**
 * Temboo PHP SDK example usage: Search for videos on YouTube.
 *
 * Demonstrates how to use the Temboo PHP SDK.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage Examples
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */

/*
 * Use this "require" statement to define the location of the Temboo SDK 
 * relative to this file; if this file resides in the same directory as the 
 * "php-sdk" folder, this should not need to be modified.
 */

// require 'php-sdk/src/temboo.php'

/*****************************************************************************
* Update these constants to create your Temboo session.
*****************************************************************************/
define('TEMBOO_ACCOUNT_NAME', 'YOUR ACCOUNT NAME');
define('TEMBOO_APPLICATIONKEY_NAME', 'YOU KEY NAME');
define('TEMBOO_APPLICATIONKEY', 'YOUR KEY');

/*
 * To run the video details choreo, you need to have YouTube credentials. You
 * may provide the name of a valid YouTube credential, or the values for the
 * client ID, secret, and refresh token for your account. If you do not have a
 * credential, be sure to leave the YOUTUBE_CREDENTIAL constant null.
 */
define('YOUTUBE_CREDENTIAL', null);
define('YOUTUBE_CLIENT_ID', null);
define('YOUTUBE_CLIENT_SECRET', null);
define('YOUTUBE_REFRESH_TOKEN', null);

/*
This is a bare-bones version (free of external dependencies beyond the Temboo
PHP SDK) of the YouTube Search example from the Temboo examples page. It
searches for a specified string, returns the first 6 results.
*/

/**
 * Search YouTube videos and return results as a JSON array.
 * @param queryString What kind of videos we want.
 * @return JSON encoded array of the first 6 videos corresponding to your 
  *        search.
 */
function ytsearch($queryString, $temboo_session = null) {
    if (is_null($temboo_session)) {
        $temboo_session = createSession();
    }
    $ytSearch = new YouTube_Search_ListSearchResults($temboo_session);
    $ytSearchInputs = $ytSearch->newInputs();
        
    // The basic search choreo will use a default Temboo credential.
    $ytSearchInputs->setType("video");
    $ytSearchInputs->setMaxResults("6");
    $ytSearchInputs->setQuery($queryString);
    $ytSearchInputs->setVideoEmbeddable("true");
    $ytSearchInputs->setPart("id");
    $ytSearchInputs->setFields("items/id/videoId");

    $ytSearchResults = $ytSearch->execute($ytSearchInputs)->getResults();
    $ytSearchResponse = json_decode($ytSearchResults->getResponse());

    if (count($ytSearchResponse->items)) {
        $idList = array();
        foreach ($ytSearchResponse->items as $target) {
            $idList[] = $target->id->videoId;
        }

        $ytDetails = new YouTube_Videos_ListVideosByID($temboo_session);
        $ytDetailsInputs = $ytDetails->newInputs();

        if (is_null(YOUTUBE_CREDENTIAL)) {
            // If you have not defined a credential, use this.
            $ytDetailsInputs->setClientID(YOUTUBE_CLIENT_ID);
            $ytDetailsInputs->setClientSecret(YOUTUBE_CLIENT_SECRET);
            $ytDetailsInputs->setRefreshToken(YOUTUBE_REFRESH_TOKEN);
        } else {
            // Otherwise, simply refer to the credential name.
            $ytDetailsInputs->setCredential(YOUTUBE_CREDENTIAL);
        }
        // $ytDetailsInputs->setCredential("YouTubeCredential");
        // Convert array of ids to a string.
        $ytDetailsInputs->setVideoID(implode(",", $idList));
        // Specify what information we want.
        $ytDetailsInputs->setPart("contentDetails,statistics,snippet");

        $ytDetailsResults = $ytDetails->execute($ytDetailsInputs)->getResults();
        $ytDetailsResponse = json_decode($ytDetailsResults->getResponse());

        // What we'll be sending back to build the page.
        $details = array();
        
        // Get information about each video.
        foreach ($ytDetailsResponse->items as $video) {
            $currDetails = array("title" => $video->snippet->title,
                                 "link" => "http://www.youtube.com/watch?v=" . $video->id,
                                 "thumbnail" => $video->snippet->thumbnails->default->url,
                                 "time" => durationString($video->contentDetails->duration),
                                 "views" => $video->statistics->viewCount,
                                 "age" => ageString($video->snippet->publishedAt),
                                 "embedsrc" => "https://www.youtube.com/embed/" . $video->id);
            array_push($details, $currDetails);
        }

        return json_encode(array("result" => "success",
                                 "payload" => $details));
    } else {
        // Our query returned no results.
        return json_encode(array("result" => "failure",
                                 "payload" => "empty"));
    }
}

/**
 * Compares upload date to current date and returns a string describing the
 * video's approximate age.
 * 
 * @param dateString - String of upload date provided by Youtube.
 *
 * @return String describing age.
 */
function ageString($dateString) {
    // Remove extra characters.
    $formattedDate = str_replace("T", " ", $dateString);
    $formattedDate = str_replace("Z", "", $formattedDate);

    // Create DateTime instance based on upload date.
    $uploadDate = new DateTime($formattedDate);
    // Create DateTime instance based on current date.
    $now = new DateTime();
    // Calculate difference between two dates.
    $diff = $now->diff($uploadDate);
    // Get number of years, months and day in difference.
    $years = $diff->format('%y');
    $months = $diff->format('%m');
    $days = $diff->format('%d');

    // Decide which value is most salient.
    if ($years > 0) {
        if ($years == 1) {
            return "One year ago";
        } else {
            return $years . " years ago";
        }
    } elseif ($months > 0) {
        if ($months == 1) {
            return "One month ago";
        } else {
            return $months . " months ago";
        }
    } elseif ($days > 0) {
        if ($days == 1) {
            return "One day ago";
        } else {
            return $days . " days ago";
        }
    } else {
        return "Less than a day ago";
    }
}

/**
 * Convert seconds into minutes:seconds.
 * 
 * @param duration - YouTube formatted duration string.
 *
 * @return String showing hours(if salient):minutes:seconds.
 */
function durationString($duration) {
    if(preg_match('/^PT((?P<hours>\d+)H)?((?P<minutes>\d+)M)?((?P<seconds>\d+)S)?$/', $duration, $matches)) {
        $hours = isset($matches['hours']) && intval($matches['hours']) > 0 ?  sprintf('%02d', $matches['hours']) . ':' : '';
        $minutes = isset($matches['minutes']) ?  sprintf('%02d', $matches['minutes']) : '00';
        $seconds = isset($matches['seconds']) ?  sprintf('%02d', $matches['seconds']) : '00';
        return $hours . $minutes . ':' . $seconds;
    } else {
        return '00:00';
    }
}

/**
 * Create a session based on the constants in this file.
 * 
 * @return Configured Temboo session.
 */
function createSession() {
    $session = new Temboo_Session(TEMBOO_ACCOUNT_NAME, 
                                  TEMBOO_APPLICATIONKEY_NAME,
                                  TEMBOO_APPLICATIONKEY);
    return $session;
}

?>

<html>
<head>
    <title>Temboo YouTube Search Example</title>
</head>
<body>
    <div>
        <!-- Form for updating the results being shown. -->
        <form action="" method="post">
            <input type="text" name="queryString" />
            <input type="submit" />
        </form>
    </div>
    <div>
        <?php
        if (is_null($_POST['queryString'])) {
            $queryString = 'dogs driving cars';
        } else {
            $queryString = $_POST['queryString'];
        }
        $videos = json_decode(ytsearch($queryString), true);

        foreach ($videos['payload'] as $video) {
            $divConent = array('<div><a class="ytlink" href="', 
                           $video['link'], 
                           '">',
                           '<img src="', 
                           $video['thumbnail'], 
                           '"/>',
                           '</div></a>',
                           '<div class="yttitle">', 
                           $video['title'], 
                           '</div>',
                           '<div id="info"><div class="ytviews">',
                           $video['views'],
                           ' views</div><div class="ytage">',
                           $video['age'],
                           '</div></div></div>');
            echo implode("", $divConent);
        }
        ?>
    </div>
</body>
