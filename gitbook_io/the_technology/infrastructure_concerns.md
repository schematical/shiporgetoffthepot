# Infrastructure Concerns
There are a million ways to set up your servers. I mainly want to outline some architectural concerns you will want to keep in mind.

##A little history:
When the internet started out the computers that made up the internet, servers, were hosted in colleges and by the government. Eventually hobbyist started turning their home computers into servers. Once people started to realize there was money to be made hosting companies started to emerge. Typically there were two types of hosting at first.

###Shared Hosting:
This is when multiple customers would have their websites hosted on a single server. This means the servers resources are shared among multiple people. Its fine for hobby websites but if one website being hosted on that server gets a lot of traffic it eats up all of the resources. The other websites will slow down to a crawl.

###Dedicated Hosting:
Another option is dedicated hosting. This means that the hosting company actually sets up and installs a peace of physical hardware that is leased by you. This is great because you're not sharing resources. The problem is that the hardware is expensive and costly to scale up.

###Welcome to the cloud:
Eventually companies like Amazon that had invested in a surplus of server infrastructure wanted a better way to resell that server space to customers looking to host a website.

They started using virtualization. This is the process where a host operating system boots up and runs several child 'instances'. These instances are basically their own running computers with their own operating system, dedicated memory, etc.

It is just like running your own dedicated server as described above but without any of the hardware setup costs because they are merely processes running on a much larger computer. The bottom line is virtualization is much cheaper and can be scaled up much faster than the other hosting options.

Look [http://en.wikipedia.org/wiki/Virtualization](http://en.wikipedia.org/wiki/Virtualization) for more information on virtulization.

###Hosting your services:
Earlier we talked about how to split your product up into services that can be focused on by dedicated cross functional teams. As you build your services you will find that each service will have different needs. Some high traffic services will have a lot of computing power. Other services may need to maintain a lot of persistent state connections such as chat services.

Since booting up new servers is easy and cost efficient I recommend running your production services their own virtualized servers.

##DNS:
I typically run each service on its own subdomain. You can run them on their own domain and sometimes you will but that can get expensive because domains cost money to acquire. Setting up subdomains is free.

Here is an example of how we are setting things up for 100x global:

* The core app at `100xglobal.com`.
* The Membership Application and Payment services are at `members.100xglobal.com`.
* The email servers are at `email.100xglobal.com`
* The socket server for real time notificaitons are at `socket.100xglobal.com`
* Someday in my or one of my teams 20% time I hope we will build out an events managment system that will most likely live at `events.100xglobal.com`


##Multiple environments:
There is a delicate art to building a quality tech product. As you develop your product it goes through an interesting life cycle. Developer don't just build tech products on their laptops then push a button and its live... some do but typically there is some type of quality assurance process.

This is where the concept of an 'environment' comes in to play. An environment is a running copy of your product. Each environment runs on their own virtual server with their own databases. The purpose of this is to insulate the end result from all of the changes that could cause bugs. Change is good, it means new features, but it needs to be controlled.

Also note not all development lifecycles are the same. Big dev shops have many layers. This adds to much complexity for me. I like to keep it simple; A, B, C, Done.

Here is an example lifecycle similar to the one I use to build tech products:

###Local/Dev Environment:
The developers need their own copy to work on and build new technology. Each developer on my team runs a copy of the application on their laptops that they can edit without affecting others on the team.

###Alpha Environment:
Since developers are almost constantly changing the app breaking and fixing things as they build them you will need a separate running copy of the app for your internal testers and decision makers to preview and test in. The alpha environment is raw filled with the newest features the developers just hammered out.

###Beta Environment:
Once the app has gone through througal internal QA then your team will want to deploy the solidified version of the code to a beta environment. The beta environment is where your early adopters can go to see the latest features that you are going to release long before everyone else. This helps you get customer feedback at an early stage and polish out any remaining bugs.

If your curious what a beta enviroment would look like Facebook keeps a running beta up for their early adaptors and 3rd party developers at [https://beta.facebook.com/](https://beta.facebook.com/).

###Production Environment:
Once you are absolutely sure that you have a working version of your product you deploy it to the production environment. The production environment is the real running version of your site that the majority of your customers will interact with on a daily basis.

###Other Types of Environments:
Staging environments are common. This is where developers test their changes against the existing production environment to see if there are going to be any complications when they go to deploy their code. Often times a change can break something and this lets them find and fix that change before it takes down your production environment.


##An environment for each service:
I have talked a lot about the advantages of breaking down your product into services. Part of the advantage of this is that each service can move at its own pace and not be slowed down by the core. This wouldn't be true if you had to redeploy all services at the same time.

This means I suggest keeping separate alpha, beta, and production environments for each service. This may sound like a hassle but since you have broken your workforce down into cross functional teams the effort of maintaining these environments is distributed equally among your teams making this much less exhausting.


##Conclusion:
Using a simple development lifecycle that allows you to crowdsource testing from your early adopters will help you create a quality end product.







_NOTE: These are just notes on bonus content_
##Technical Tip:
//Bonus stuff or blog post...
Keep this in mind
###Load balancing

####Databases:

####CDN- S3:



##Pratical Tip:
Hiring an infrastructure guy




