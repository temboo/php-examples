###YouTube Search

A pair of Choreos can be a very powerful thing.

This example shows how a few lines of code can give your app access to the wonderful world of YouTube. 

And remember, you don't even have to write the code yourself. You can generate Temboo SDK code for the YouTube API, in the language of your choice, right [here](https://live.temboo.com/library/Library/YouTube/). 

See this example in action at [temboo.com/examples](https://temboo.com/examples)

###Details

This PHP micro-application displays a page containing the top six YouTube videos for a particular search term. The search term defaults to "data visualization." Use the search box provided to try your own favorite YouTube search. 

The interaction with YouTube is handled via Temboo's `YouTube.Search.ListSearchResults` and `YouTube.Videos.ListVideosByID` choreos. In addition to handling the search request, the Choreos translates YouTube's XML response to JSON for simpler deserialization.

While the example creates a session for you, the `ytsearch` function can accept a Temboo session as an argument, making this example easy to drop into a larger Temboo-based application. 

###Run the Example

* [Sign up](https://www.temboo.com) for a free Temboo account and download the Temboo PHP SDK.
* Add the Temboo SDK as a library to your PHP project. You can find instructions on how to do this [here](https://www.temboo.com/public/support/getting-started).
* Set up your YouTube credentials. Instructions may be found on Temboo's [YouTube library page](https://www.temboo.com/library/Library/YouTube/)
* Edit the PHP code to include your Temboo and YouTube credentials.
* Run it!

###About Temboo
Temboo lets developers focus on what makes their software unique. 

We do this by normalizing access to 100+ APIs, databases and more. Our SDKs connect you to 1500+ reusable, cloud-based code components that take care of all the low-level details to do with working with remote data and services. Spend less time wrestling with API specifics and more time building what matters to you.   

Learn more, and get the Temboo SDK in your favorite language, at [temboo.com](https://temboo.com).

###Copyright and License
Copyright 2013, Temboo Inc.