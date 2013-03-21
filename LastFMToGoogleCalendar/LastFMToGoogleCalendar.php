<?php

/**
Copyright 2012, Temboo Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

PHP version 5

This simple PHP command-line (CLI) application demonstrates how to get started building apps that integrate Last.fm and Google Calendar. 
To run the demo, you'll need a Temboo account, a Last.fm API Key, and oAuth 2.0 credentials for Google Calendar.

The demo uses Temboo SDK functions to retrieve an XML list of Last.fm "events" associated with a list of your favorite bands, 
extracts the artist name, venue, city, and date for each event item, and adds an event to your Google Calendar if the event 
occurs in the city that you specify.

@author matthewflaming
*/



	/**********************************************************************************************
	 * BEGIN CONSTANTS: MODIFY THESE VALUES WITH YOUR LAST.FM, GOOGLE, AND TEMBOO CREDENTIALS
	 *********************************************************************************************/


 	// Use this "require" statement to define the location of the Temboo SDK relative to this file;
 	// if this file resides in the same directory as the "php-sdk" folder, this should not need to be modified.
	require '../php-sdk/src/temboo.php';
	
	// Use this constant to specify your city. If events are found in this city, it will be added to your Google Calendar.
	define("MY_CITY", "New York");
	
	// For this constant, specify the band name that may have events on Last.fm that you want to add to Google Calendar.
	define("BAND_NAME", "Beach House");	

	// Use this constant to define your Last.fm API KEY.
	// You can apply for an API Key by going here: http://www.last.fm/api/account.
	// (Replace with your own Last.fm API Key.)
	define("LAST_FM_API_KEY", "YOUR LAST.FM API KEY");

	// Use this constant to define your Google oAuth 2.0 credentials.
	// If you don't already have the oAuth credentials associated with your Google account, login to your Google account, 
	// create a project and generate your oAuth 2.0 ClientID and ClientSecret here https://code.google.com/apis/console/.
	// After doing that, use Google's oAuth playground to generate your AccessToken and RefreshToken here: https://code.google.com/oauthplayground/.
	define("GOOGLE_CLIENT_ID", "YOUR GOOGLE CLIENT ID");
	define("GOOGLE_CLIENT_SECRET", "YOUR GOOGLE CLIENT SECRET");
	define("GOOGLE_ACCESS_TOKEN", "YOUR GOOGLE ACCESS TOKEN");
	define("GOOGLE_REFRESH_TOKEN", "YOUR GOOGLE REFRESH TOKEN");

	// Set your calendar name here. Make sure you provide the name of an existing Google calendar.
	// Note, if there are multiple calendars with the same name, the first one returned will be used.
	define("GOOGLE_CALENDAR_NAME","MyConcerts");
	
	// Use these constants to define the set of credentials that will be used to connect with Temboo.
	// (Replace with your own Temboo Account Name and Application Key.)
	define("TEMBOO_ACCOUNT_NAME", "YOUR TEMBOO ACCOUNT NAME);
	define("TEMBOO_APPLICATIONKEY_NAME", "YOUR TEMBOO APP KEY NAME");
	define("TEMBOO_APPLICATIONKEY", "YOUR TEMBOO APP KEY");

	/**********************************************************************************************
	 * END CONSTANTS: NOTHING BELOW THIS POINT SHOULD NEED TO BE CHANGED
	 *********************************************************************************************/
	
	 
	// Print some status information
	print("Here we go...\r\n");
	
	try {
		// Instantiate a Temboo session with valid Temboo Account name and app key credentials
		$session = new Temboo_Session(TEMBOO_ACCOUNT_NAME, TEMBOO_APPLICATIONKEY_NAME, TEMBOO_APPLICATIONKEY);
	
		// To create a calendar event, we need the id of the calendar to which it should be added. Execute the SearchCalendarsByName choreo to get this id.
		// Instantiate the Google.Calendar.SearchCalendarsByName Choreo, using the session object
		// See https://live.temboo.com/library/Library/Google/Calendar/SearchCalendarsByName for detailed documentation
		$searchCalendars = new Google_Calendar_SearchCalendarsByName($session);
	
				
		// Get an InputSet object for the SearchCalendarsByName, and populate the inputs. This choreo takes inputs
		// specifying a calendar name and your oAuth 2.0 credentials.
		$searchCalendarsInputs = $searchCalendars->newInputs();	
	
		$searchCalendarsInputs->setAccessToken(GOOGLE_ACCESS_TOKEN)->setClientID(GOOGLE_CLIENT_ID)->setClientSecret(GOOGLE_CLIENT_SECRET);
		$searchCalendarsInputs->setRefreshToken(GOOGLE_REFRESH_TOKEN);
		$searchCalendarsInputs->setCalendarName(GOOGLE_CALENDAR_NAME);
	
	
		// Execute SearchCalendarsByName and retrieve the results from Google Calendar.
		$searchCalendarsResults = $searchCalendars->execute($searchCalendarsInputs)->getResults();
	
		$calendarID = $searchCalendarsResults->getCalendarId();
		
		// Print some status info with the calendar id that was returned.
		print("Retrieved Google calendar ID: $calendarID \r\n");
	
		// Instantiate the LastFM.Artists.GetEvents Choreo, using the session object.
		// See https://live.temboo.com/library/Library/LastFm/Artist/GetEvents for detailed documentation
		$getEvents = new LastFm_Artist_GetEvents($session);
	
		// Get an InputSet object for GetEvents, and populate the inputs. This choreo takes inputs
		// specifying a band name, a limit of events to return, and your Last.fm API Key.
		$getEventsInputs = $getEvents->newInputs();
		$getEventsInputs->setAPIKey(LAST_FM_API_KEY)->setArtist(BAND_NAME)->setLimit(50);
	
		// Execute GetEvents, and retrieve event results from Last.fm.
		$getEventsResults = $getEvents->execute($getEventsInputs)->getResults();
	
		$lastFMResult = $getEventsResults->getResponse();
		
		// Parse the XML response   
		$eventList = new DOMDocument;
		$eventList->loadXML($lastFMResult);
		 
		// Print some status info with the calendar id that was returned.
		print("Successfully retrieved events from Last.fm\r\n");
		
		// Use this boolean to flag whether we found any matching events to add to Google Calendar
		$eventsAdded = false;
		
		$events = $eventList->getElementsByTagName("event");
		
		// Loop over the set of <event> elements, and extract startDate, artist, city, and venue name from each event.
		for ($i=0; $i < $events->length; $i++){
			$event = $events->item($i);
	
			$eventDates = $event->getElementsByTagName("startDate");
			$startDate = $eventDates->item(0)->nodeValue;
	
			$artists = $event->getElementsByTagName("artist");
			$artist = $artists->item(0)->nodeValue;
			
			$cities = $event->getElementsByTagName("city");
			$city = $cities->item(0)->nodeValue;
	
			$venues = $event->getElementsByTagName("name");
			$venue = $venues->item(0)->nodeValue;
	
			// If the value of <city> = _MY_CITY (i.e. New York) then retrieve the calendar id by searching calendars by name and create a new Google Calendar event.
			if (stripos($city, MY_CITY) !== false) {
	
				// Parse the date; Google Calendar wants to get the date and time separately
				$date =  new DateTime($startDate, new DateTimeZone("UTC"));
				$dateForCalendar = date_format($date, "Y-m-d");
				$timeForCalendar = date_format($date, "H:i:s");
				
				// Print some debugging information
				print("Found event on " . $dateForCalendar . " at " .$venue . " in " .$city . " on " . $startDate . "\r\n");
	
				// Now we're ready to create the event in the Google Calendar.
				// Instantiate the Google.Calendar.CreateEvent Choreo, using the session object.
				// See https://live.temboo.com/library/Library/Google/Calendar/CreateEvent for detailed documentation
				$createEvent = new Google_Calendar_CreateEvent($session);
				
				// Get an InputSet object for the CreateEvent, and populate the inputs. This choreo takes inputs
				// specifying calendar id (which we retrieved already), start/end dates and times, event description, event title, and your oAuth 2.0 credentials.
				// Note that we'll just pass in the same date and time for start and end dates because we don't really know how long the concert will last.
				$createEventInput = $createEvent->newInputs();
				$createEventInput->setAccessToken(GOOGLE_ACCESS_TOKEN)->setClientID(GOOGLE_CLIENT_ID);
				$createEventInput->setClientSecret(GOOGLE_CLIENT_SECRET)->setRefreshToken(GOOGLE_REFRESH_TOKEN);
				$createEventInput->setCalendarID($calendarID);
				$createEventInput->setEventTitle($artist)->setEventDescription($venue);
				$createEventInput->setStartDate($dateForCalendar)->setStartTime($timeForCalendar);
				$createEventInput->setEndDate($dateForCalendar)->setEndTime($timeForCalendar);
				
				// Execute CreateEvent (Note that in this case, we don't care about the results returned by the choreo).
				$createEvent->execute($createEventInput);
				
				print("Added event to Google Calendar\r\n");
				
				$eventsAdded = true;
			}
		}
	
	
		if($eventsAdded === false) {
			print("No events for " . BAND_NAME . " in " . MY_CITY . " found; nothing was added to Google Calendar.\r\n");
		} else {
			print("Finished adding events for " . BAND_NAME . " in " . MY_CITY . " to Google Calendar.\r\n");
		}
		
		exit(1);
	}
	catch(Temboo_Exception_Authentication $e) {
		print("A Temboo authentication exception occured. Make sure your Temboo App Key name and value are correct.\r\n");
		print("Exception details: " .  $e->getMessage() . "\r\n");
	}
	catch(Temboo_Exception_Execution $e) {
		print("An error occurred while running a Temboo choreo. The error was: " . $e->getMessage() . "\r\n");
		//print("Debug info:\r\n");
		//Œprint_r($e->getDetails());
	}
	catch(Temboo_Exception $e) {
		print("Temboo general exception occurred. The error was: " . $e->getMessage() . "\r\n");
		//print("Debug info:\r\n");
		//print_r($e->getDetails());
	}
	catch(Exception $e) {
	    print("Something else went wrong! " . $e->getMessage() . "\r\n");
	}
	 
?>
