# Event Driven Architeture
So far we talked about ways 3rd parties can get data from your system but how do you notify them when an event occurs on your system. They cant be constantly querying your system, that would waste a lot of valuable resources.

You need to find a way to push out notifications to other services you build and 3rd party applications.

##Callbacks:
Callbacks are similar to Restful API calls except they go the opposite direction. In stead of the services querying your core, your core posts out an HTTP or HTTPS request to the services to let them know that an event has been triggered.

###Example Events:
What kinds of evens are we talking about.
* A new user has signed up
* A user updates their profile
* A user invites another user to join

Typically there is an interface where the services are registered with the core application. Each registered service would have a place to put in a 'callback url'. That is the URL that relivant data is posted to.

###Foursquare:
Foursquare uses this method to post out checkins and interactions with their service.
[https://developer.foursquare.com/overview/realtime](https://developer.foursquare.com/overview/realtime)


###Streaming APIs:
Streaming API's allow the services and 3rd party applications to open a persistant connection to the core service.

Streaming API's are not as common as callbacks, mostlikely because maintaing those persistant connections takes a lot of infrastructure and processing power.

####Twitter:
Twitter has a service where they stream out tweets to 3rd parties. Check it out here:
[https://dev.twitter.com/streaming/overview](https://dev.twitter.com/streaming/overview).


##Conclusion:
Pushing data out can be as important as allowing users to query data. Using callbacks can be a powerful tool to help launch your innovation platform.
