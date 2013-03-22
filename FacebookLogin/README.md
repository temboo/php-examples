###Facebook Login
Implementing Facebook Login is often the first step towards building the next great app. Facebook uses OAuth 2.0 for authentication and authorization, and working with OAuth can be a real pain.

But fear not! Temboo makes it a breeze to generate access tokens for you and your users. This example shows our Facebook Choreos in action, they'll log you in and display your most recent public Likes.

See this example in action at [temboo.com/examples](https://temboo.com/examples)

###Setup
####Establish Credentials
 1. Sign up for a free account at [temboo.com](https://temboo.com).
 2. Sign in to the [Facebook Developers dashboard](https://developers.facebook.com/apps) and create a new app.
 3. Set your Facebook App's `App Domain` to `temboolive.com`, and the `Site URL` to `https://temboolive.com`.
 4. Under the [Facebook OAuth section of the Temboo Library](https://live.temboo.com/library/Library/Facebook/OAuth/), choose `+ Add new` from the Credentials sidebar and create a new credential. You can get the `AppId` and `AppSecret` from the Facebook app you just created, and the `AppKeyName` and `AppKeyValue` from the Temboo [My Account](https://live.temboo.com/account) page.

####Install the Example
 1. Clone this repo: `git clone git@github.com:temboo/php-examples.git`
 2. Download the [Temboo PHP SDK](https://temboo.com/download) and unzip it into the `FacebookLogin` directory.
 3. Edit the constants defined at the top of `index.php` with your Temboo credentials.
 4. Upload the `FacebookLogin` directory to your web host and visit `index.php` in your browser.

###About Temboo
Temboo lets developers focus on what makes their software unique. 

We do this by normalizing access to 100+ APIs, databases and more. Our SDKs connect you to 1500+ reusable, cloud-based code components that take care of all the low-level details to do with working with remote data and services. Spend less time wrestling with API specifics and more time building what matters to you.   

Learn more, and get the Temboo SDK in your favorite language, at [temboo.com](https://temboo.com).

###Copyright and License
Copyright 2013, Temboo Inc.

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.