
###USING THE TEMBOO SDK: GOOGLE DOCUMENTS BACKUP EXAMPLE (PHP)

This example is a working PHP web application that uses the Temboo SDK to back up a set of 
files from Google Documents to a folder on Dropbox. The application:

 * Connects to Dropbox and creates a new folder, to contain your backups
 * Downloads a list of documents from Google Docs
 * Iterates over the list of documents, and retrieves each one, then uploads it to Dropbox

###TO RUN THIS EXAMPLE:

 * Sign up for a free Temboo account (if you don't already have one) and Download the Temboo PHP SDK
at https://www.temboo.com/download. Add the SDK as a library to your PHP project. You can find instructions
for this process on the Temboo site, under "getting started" (https://www.temboo.com/public/support/getting-started).

 * Create a Google Documents account and a Dropbox account (if you don't already have one). 
In the PHP code, you'll need to supply your Google credentials, and oAuth tokens for Dropbox.
You can find more information on how to obtain Dropbox oAuth credentials on the Dropbox site.

 * Edit the PHP code to contain your Temboo, Google Docs, and Dropbox credentials. 

 * Run it! (Note that if you have a large number of documents to back up, you may need to increase the PHP script 
 timeout: see http://php.net/manual/en/function.set-time-limit.php)

###ABOUT TEMBOO

The Temboo SDK Library allows you to implement complex interactions with 3rd party services 
without worrying about the specific syntax of a 3rd-party API, by providing simple, 
native-language functions that trigger Temboo choreos. Temboo choreos are reusable
code snippets that can do almost anything, from updating your status on Facebook, to creating
a new Amazon RDS DB instance, to checking the weather in your neighborhood. 
