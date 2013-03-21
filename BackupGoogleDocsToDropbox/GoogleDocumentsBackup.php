<?php

/**
 * Temboo PHP SDK example usage: Backup Google Documents to Dropbox
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
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */

/*
This is a simple PHP command-line application that demonstrates how to use the Temboo
SDK to backup a set of Google Documents files to Dropbox. To run the demo,
you'll need a Temboo account, and of course Dropbox and Google Docs accounts.
The demo uses Temboo SDK functions to create a new folder to hold your backups
of Dropbox, then retrieves a list of Google Documents files for the specified
account, downloads each file and then uploads it to the Dropbox folder.

@author Jimmy Huey
*/

 	/**********************************************************************************************
	 * UPDATE THE VALUES OF THESE CONSTANTS WITH YOUR OWN CREDENTIALS
	 *********************************************************************************************/

	// Use these constants to define the set of oAuth credentials that will be used to access Dropbox. 
	// (Replace with your own Dropbox oAuth credentials.)
	$DROPBOX_APP_KEY = "YOUR KEY";
	$DROPBOX_APP_SECRET = "YOUR SECRET";
	$DROPBOX_ACCESS_TOKEN = "YOUR TOKEN";
	$DROPBOX_ACCESS_TOKEN_SECRET = "YOUR TOKEN SECRET";

	// Use this constant to define the name of the folder that will be created on Dropbox, and that will hold
	// the set of uploaded documents. (Note that another folder with the same name can't already exist on Dropbox.)
	$DROPBOX_BACKUP_FOLDERNAME = "Google_Doc_Backups";

	// Use these constants to define the set of credentials that will be used to access Google Documents.
	// (Replace with your own Google Docs credentials.)
	$GOOGLEDOCS_USERNAME = "YOUR USERNAME";
	$GOOGLEDOCS_PASSWORD = "YOUR PASSWORD";

	// Use these constants to define the set of credentials that will be used to connect with Temboo.
	// (Replace with your own Temboo Account Name and Application Key.)
	$TEMBOO_ACCOUNT_NAME = "YOUR ACCOUNT NAME";
	$TEMBOO_APPLICATIONKEY_NAME = "YOUR APPKEY NAME";
	$TEMBOO_APPLICATIONKEY = "YOUR APPKEY";


	// Require the Temboo SDK
	// (Edit this directive to point to the location of your copy of the Temboo SDK)
	require '../php-sdk/src/temboo.php';

	try {
		echo "Peforming backup of Google Docs to Dropbox...\r\n";

		// Instantiate a Temboo session with valid Temboo Account name and app key credentials
		$session = new Temboo_Session($TEMBOO_ACCOUNT_NAME, $TEMBOO_APPLICATIONKEY_NAME, $TEMBOO_APPLICATIONKEY);
	
		// Instantiate the Dropbox.CreateFolder choreo, using the Temboo session object
		// See https://live.temboo.com/library/Library/Dropbox/CreateFolder for detailed documentation
		$createFolder = new Dropbox_CreateFolder($session);

		// Get an InputSet object for the CreateFolder choreo, and populate the inputs. This choreo takes inputs
		// specifying the name of the folder to create, and Dropbox oAuth credentials
		$createFolderInput = $createFolder->newInputs();

		$createFolderInput->setNewFolderName($DROPBOX_BACKUP_FOLDERNAME);	

		$createFolderInput->setAppKey($DROPBOX_APP_KEY);
		$createFolderInput->setAPPSecret($DROPBOX_APP_SECRET);
		$createFolderInput->setAccessToken($DROPBOX_ACCESS_TOKEN);
		$createFolderInput->setAccessTokenSecret($DROPBOX_ACCESS_TOKEN_SECRET);

		// Run the "create folder" choreo, to create the new backups folder on Dropbox. (Note that in this case,
		// we don't worry about the results that the choreo returns.)
		$createFolder->execute($createFolderInput);

		// Do a bit of debug logging, so we know what's going on
		echo "Dropbox folder created successfully!\r\n";
		
		// Instantiate the Library.Google.Documents.GetAllDocuments choreo.
		// This choreo retrieves all documents (text, spreadsheet and pdf) in the specified Google Documents account
		// See https://live-eng.temboo.com/library/Library/Google/Documents/GetAllDocuments for detailed documentation
		$getAllDocuments = new Google_Documents_GetAllDocuments($session);

		// Get an InputSet object for GetAllDocuments, and configure the inputs. This choreo takes inputs 
		// specifying the Google Docs credentials to use, and a flag specifying whether we want to get deleted documents in the list 
		$getAllDocumentsInput = $getAllDocuments->newInputs();
		$getAllDocumentsInput->setUsername($GOOGLEDOCS_USERNAME);
		$getAllDocumentsInput->setPassword($GOOGLEDOCS_PASSWORD);
		$getAllDocumentsInput->setDeleted("false");	

		// Get the list of all documents from Google Docs
		$getAllDocumentsResults = $getAllDocuments->execute($getAllDocumentsInput)->getResults();
		
		// Parse the XML response from Google	
		$googleDocsList = new DOMDocument;
		
		$googleDocsList->loadXML($getAllDocumentsResults->getResponse());
				
		// Extract the set of "entry" and "content" from the result XML; each pair of entry/content elements
		// represents a single Google Document, that we'll want to upload
		$entry = $googleDocsList->getElementsByTagName('entry');
		$links = $googleDocsList->getElementsByTagName("content");
		
		
		echo "Retrieved a list of " . $entry->length . " items from Google Docs.\r\n";
		
		for ($i=0; $i<$entry->length; $i++){
			$entryResult = $entry->item($i);

			// extract the title of the document, from the XML retrieved by the GetAllDocuments choreo
			$titles = $entryResult->getElementsByTagName("title");
			$title = $titles->item(0)->nodeValue;
			
			// get the corresponding <content> element that contains data for this document
			$link = $links->item($i);

			// extract the <src> element for each document retrieved by the GetAllDocuments choreo.
			// the <src> will contain a URL that can be used for access to the document content; this URL includes
			// information about the document type, eg:
			// https://docs.google.com/feeds/download/spreadsheets/Export?key=0AkO-My_cBuHFdEJ5bF9IVVA1NzNvU1VrZ2RZ34NWblE
			$linkSrc = $link->getAttribute("src");
			
			// do a bit of debug logging, so we know what's going on
			echo "Now processing document: " . $title . "\r\n";
			
			// Based on the type of the current document, we'll need to do something slightly different...
			if (strpos($linkSrc, "spreadsheet")) {
        		
				// If it's a spreadsheet, download the document with the DownloadBase64EncodedSpreadsheet choreo.
				// See https://live.temboo.com/library/Library/Google/Spreadsheets/DownloadBase64EncodedSpreadsheet for detailed documentation
				$downloadSpreadsheet = new Google_Spreadsheets_DownloadBase64EncodedSpreadsheet($session);

				// This choreo takes inputs that specify the Google Documents credentials, and the URL of the document to download
				$downloadSpreadsheetInput = $downloadSpreadsheet->newInputs();

				$downloadSpreadsheetInput->setLink($linkSrc);	// here we specify the retrieved URL for the document to download
				$downloadSpreadsheetInput->setUsername($GOOGLEDOCS_USERNAME);
				$downloadSpreadsheetInput->setPassword($GOOGLEDOCS_PASSWORD);
				$downloadSpreadsheetInput->setTitle("");

				// Run the choreo to download the spreadsheet document 
				$getDownloadSpreadsheetResults = $downloadSpreadsheet->execute($downloadSpreadsheetInput)->getResults();

				// Upload the file to Dropbox (by calling the uploadFileToDropbox method, below)
				uploadFileToDropbox($session, $getDownloadSpreadsheetResults->getFileContents(), $title);     	
        		
			} else if (strpos($linkSrc, "documents")) {
        		
				// If it's a document, download the file with the DownloadBase64EncodedDocument choreo 
				// See https://live.temboo.com/library/Library/Google/Documents/DownloadBase64EncodedDocument for detailed documentation
				$downloadDocument = new Google_Documents_DownloadBase64EncodedDocument($session);

				// This choreo takes inputs that specify the Google Documents credentials, and the URL of the document to download
				$downloadDocumentInput = $downloadDocument->newInputs();

				$downloadDocumentInput->setFormat("doc");
				$downloadDocumentInput->setLink($linkSrc);
				$downloadDocumentInput->setUsername($GOOGLEDOCS_USERNAME);
				$downloadDocumentInput->setPassword($GOOGLEDOCS_PASSWORD);
				$downloadDocumentInput->setTitle("");

				// Run the choreo to download the document
				$getDownloadDocumentResults = $downloadDocument->execute($downloadDocumentInput)->getResults();	

				// Upload the file to Dropbox (by calling the uploadFileToDropbox method, below)
				uploadFileToDropbox($session, $getDownloadDocumentResults->getFileContents(), $title);

			} else if (strpos($linkSrc, "securesc")) {	// "securesc" means that this is a PDF document, in Google-speak
        		
				// Use the DownloadBase64EncodedDocument choreo to download the PDF
				$downloadPDFDocument = new Google_Documents_DownloadBase64EncodedDocument($session);

				// This choreo takes inputs that specify the Google Documents credentials, and the URL of the document to download
				$downloadDocumentInput = $downloadPDFDocument->newInputs();

				$downloadDocumentInput->setFormat("pdf");
				$downloadDocumentInput->setLink($linkSrc);
				$downloadDocumentInput->setUsername($GOOGLEDOCS_USERNAME);
				$downloadDocumentInput->setPassword($GOOGLEDOCS_PASSWORD);
				$downloadDocumentInput->setTitle("");

				// Run the choreo to download the PDF file
				$getDownloadDocumentResults = $downloadPDFDocument->execute($downloadDocumentInput)->getResults();

				// Upload the file to Dropbox (by calling the uploadFileToDropbox method, below)
				uploadFileToDropbox($session, $getDownloadDocumentResults->getFileContents(), $title);
			}
			
			// do a bit of debug logging, so we know what's going on
			echo "Finished copying Google Documents to Dropbox!\r\n";
		}
	}
	catch(Temboo_Exception_Authentication $e) {
	    echo "Temboo authentication exception caught: " . $e->getMessage() . "\n";
	    //echo "Debug info:\r\n";
	    //print_r($e->getDetails());
	}
	catch(Temboo_Exception_Execution $e) {
	    echo "Temboo execution exception caught: " . $e->getMessage() . "\n";
	    //echo "Debug info:\r\n";
	    //print_r($e->getDetails());
	}
	catch(Temboo_Exception $e) {
	    echo "Temboo general exception caught: " . $e->getMessage() . "\n";
	    //echo "Debug info:\r\n";
	    //print_r($e->getDetails());
	}
	catch(Exception $e) {
	    echo "Something else went wrong! " . $e->getMessage() . "\n\n";
	}

	/**
	 * This convenience function is used to upload a file to Dropbox (using a Temboo SDK choreo).
	 * 
	 * @param session - A valid Temboo Session object
	 * @param fileContents - The Base64 encoded contents of the file to upload
	 * @param fileTitle - The title of the file to create on Dropbox
	 * @throws TembooException
	 */
	function uploadFileToDropbox($session, $fileContents, $fileTitle)
	{
		global $DROPBOX_BACKUP_FOLDERNAME;
		global $DROPBOX_OAUTH_CONSUMER_KEY;
		global $DROPBOX_OAUTH_CONSUMER_SECRET;
		global $DROPBOX_OAUTH_TOKEN;
		global $DROPBOX_OAUTH_TOKEN_SECRET;
		
		// Create a Dropbox.UploadFile choreo, that will be used to send the data to Dropbox, using the session object (as always)
		// See https://live.temboo.com/library/Library/Dropbox/UploadFile for detailed documentation
		$upload = new Dropbox_UploadFile($session);

		// Get an InputSet object for Dropbox.UploadFile, and configure it
		$uploadInput = $upload->newInputs();
		$uploadInput->setFolder($DROPBOX_BACKUP_FOLDERNAME);
		$uploadInput->setAppKey($DROPBOX_APP_KEY);
		$uploadInput->setAppSecret($DROPBOX_APP_SECRET);
		$uploadInput->setAccessToken($DROPBOX_ACCESS_TOKEN);
		$uploadInput->setAccessTokenSecret($DROPBOX_ACCESS_TOKEN_SECRET);

		$uploadInput->setFileContents($fileContents);	// set the file contents
		$uploadInput->setFileName($fileTitle);		// set the file title
    	
		try {
			// Run the choreo to upload the file (Note that in this case, we don't care about the results returned by the choreo)
			$upload->execute($uploadInput);
    		
			echo "Successfully uploaded file to Dropbox: " . $fileTitle . "\r\n";
		} catch(Exception $e) {
			echo "Uh-oh! Something went wrong uploading the file to Dropbox. The error from the choreo was: " . $e->getMessage();
		}
	}
?>


</body>
</html>
