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
This is a bare-bones version (free of external dependencies beyond the Temboo
PHP SDK) of the YouTube Search example from the Temboo examples page. It
searches for a specified string, returns the first 6 results.
*/

/**
 * Search YouTube videos and return results as a JSON array.
 * 
 * @param queryString - Search terms to send to YouTube.
 * @param session - Temboo session. If null, one will be created for you using
 *                  the constants you specified above.
 */
function ytsearch($queryString, $session = null) {
    // If a session has not been provided, create one.
    if (is_null($session)) {
        $session = createSession();
    }

    // Initialize the search choreo.
    $youtubeSearch = new YouTube_SearchVideos($session);

    // Configure your search inputs.
    $youtubeSearchInputs = $youtubeSearch->newInputs();
    $youtubeSearchInputs->setQuery('Query', $queryString);
    $youtubeSearchInputs->setMaxResults('6');
    $youtubeSearchInputs->setResponseFormat('json');
    
    // Get JSON response and parse it into a PHP array.
    $videoArray = json_decode($youtubeSearch->execute(
            $youtubeSearchInputs)->getResults()->getResponse(), true);
    
    // Get rid of query-wide metadata.
    $videoArray = $videoArray['feed']['entry'];
    
    $details = array();
    // Extract the details in which you are interested.
    foreach ($videoArray as $video) {
        $currDetails = array('title' => $video['title']['$t'],
                'link' => $video['content']['src'],
                'thumbnail' => str_replace('http', 'https',
                    $video['media$group']['media$thumbnail'][0]['url']),
                'time' => durationString($video['media$group']['yt$duration']
                                         ['seconds']),
                'views' => $video['yt$statistics']['viewCount'],
                'age' => ageString($video['published']['$t']));
        array_push($details, $currDetails);
    }
    return json_encode($details);
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
 * @param duration - Seconds of runtime for video.
 *
 * @return String showing minutes:seconds.
 */
function durationString($duration) {
    $seconds = $duration % 60;
    $minutes = floor($duration / 60);
    return (string) $minutes . ':' . (string) $seconds;
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
        <form action="" method="get">
            <input type="text" name="queryString" />
            <input type="submit" />
        </form>
    </div>
    <div>
        <?php
        if (is_null($_GET['queryString'])) {
            $queryString = 'dogs driving cars';
        } else {
            $queryString = $_GET['queryString'];
        }
        $videos = json_decode(ytsearch($queryString), true);

        foreach ($videos as $video) {
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
