#Event Driven Architecture
So far we talked about ways 3rd parties can get data from your system but how do you notify them when an event occurs on your system? They can't be constantly querying your system, that would waste a lot of valuable resources on both their end and yours.

You need to find a way to push out notifications to other services you build and 3rd party applications.

##Webhooks:
Webhooks are similar to Restful API calls except they go the opposite direction. Instead of the services querying your core, your core posts out an HTTP or HTTPS request to the services to let them know that an event has been triggered.

###Example Events:
What kinds of events are we talking about?
* A new user has signed up
* A user updates their profile
* A user invites another user to join

Typically there is an interface where the services are registered with the core application. Each registered service would have a place to put in a 'webhook url'. That is the URL that relevant data is posted to when the event occurs.

####Foursquare:
Foursquare uses this method to post out when a user checks in or interacts with their service.
[https://developer.foursquare.com/overview/realtime](https://developer.foursquare.com/overview/realtime)


###Streaming APIs:
Streaming API's allow the services and 3rd party applications to open a persistent connection to the core service.

Streaming API's are not as common as webhooks, most likely because maintaining those persistent connections takes a lot of infrastructure and processing power.

####Twitter:
Twitter has a service where they stream out tweets to 3rd parties in real time. Check it out here:
[https://dev.twitter.com/streaming/overview](https://dev.twitter.com/streaming/overview).


##Conclusion:
Pushing data out can be as important as allowing users to query data. Using webhooks creates a two way street of data that allows others to build more interactive applications that create a seamless user experience.
