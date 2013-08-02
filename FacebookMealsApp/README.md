Tumptious
=========

Tumptious is a simple PHP example that demonstrates using the Temboo SDK to create applications that interact with the Facebook API. It is based on Facebook's [Scrumptious](http://facebooksampleapp.com/scrumptious/) example app. Our example illustrates how the Temboo SDK can easily:

  - Perform Facebook OAuth authentication
  - Retrieve Facebook user information
  - Post status updates to Facebook
  - Query Facebook for friends and location data

Quickstart
-----------

 1. Sign up for a free account at [temboo.com](https://temboo.com)

 2. Clone the repo: `git clone git@github.com:temboo/php-examples.git`

 3. Register an app on Facebook at [https://developers.facebook.com/apps/](https://developers.facebook.com/apps/). 
  - Configure the app as a "website with Facebook login"
  - Specify the site where you will host the app as the Site URL
  - Specify the domain of that site as the App Domain
  - In the Advanced tab of your app settings, scroll down to Security and specify `https://YOUR_TEMBOO_ACCOUNT_NAME.temboolive.com/` for Valid OAuth redirect URIs

  
 4. Edit `config.php` to contain the Application ID and Application Secret obtained after registering your app on Facebook. Update the Base URI and Static Base URI to reflect the location where you're hosting this app.
 5. Edit `tumptious-config.php` to contain your Temboo account name, App Key name, and App Key. You can find your Temboo App Key information on the Temboo website, under My Account &gt; Application Keys.


###Contact Information
Have a question or see a bug? We'd love to hear from you at support@temboo.com.

###Copyright and License
Copyright 2013, Temboo Inc.

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
