#Services
Splitting up your workforce into small cross functional dedicated teams will help your business survive and innovate. Now I am going to talk about how to do the same thing with your technology so you can build your own innovation platform.


##Innovation Platform:


###Enter 100X:
100X is the platform I am architecting as I write this book. Throughout this section I will be using 100X as a case study.

100X is a community managment technology. It started out of 100State, a collabrative commuity/coworking space in Madison Wisconsin. 100State has had increadibly rapid growth since is started in late 2012. Due to the rapid growth we began to expirence difficulty managing such a large and diverse group of people.

To assist us we searched for a technology that could achive 3 goals:
1. Manage our membership
2. Facilitate a feeling of commuity
3. Foster colaboration between our members

We found no solution that achived these to our satisfaction. This revieled a hole in the market that we could fill. So we started to build our own community managment software.

###How we started:
We started out by brain vomitting every single idea we had onto a white board. You put enough dreamers in a room and you will have no shortage of ideas. This was the easy part.

The next part, focusing in on our core value, what made us unique and valuable to the customer, was the tough part. **What you are not building is as important as what you are building**; at least in the early stages. Down the line I don't want to limit your creativity but in the early stages focus is key.

With 100x we decided to focus on "curated communities".

##Identifying Services:
The next thing I, as the architect, had to do was identify the various services we would need to build 100x. Services are a grouping of functionality. There are a couple of factors I use to determine where a service starts and stops.

* Does this functionality asolutly have to be there at launch?
* Are we sure this functionality is valuable to our customers?
* Would this functionality be a good thing to assign a team to soley focus on someday?
* Will this functionality likely change at a different pace from the other services we have identified. Either because of development timelines or user feedback?
* Can I run this functionality on a different server to take the load off of?

###Feature Services:
Feature services are the most obvious. They are specific peaces of functionality that can be sectioned off and pointed to.

For 100X we wanted to add 3 big peaces of functionality:
1. A job board
2. A phyiscal resource managament tool
3. An event tool.

None of these are core to our business but would be nice to haves down the line.

On the other hand there was the membership application process which helps our community and coworking space managers ensure only quality members are allowed to join. This was essential but not necissarily core for two reasons.

1. We could easily run the membership process on another server removing the load from the core.
2. It was not neccisary to launch with this as we already have memebers so they did not need to re-apply.
3. I could tell the application process would mostlikely change rapidly as we brough on new communities.


###Bridge Services:
Bridge services are services that bridge your core technology with other SaaS's and PaaS's. For example we wanted to provide some project managment functionality to our customers but we didn't want to enter the realm of project managment tools. Building that functionality our selfs would be to costly and time consuming.

Luckily there are project managment PaaS's out there such as Asana an Basecamp. We could build a **Bridge Service** that allows our customers to use functionality on the forementioned 3rd party services.

###Utility Services:
Utility services are those services that run behind the scenes, most people never really think about them but they are their. Email is the most common one sending out email notifications when various events happen.

Content Delivery Networks(CDN) are another common utility service. CDN's serve up binary assets such as images and videos. This helps takes the load off of your web servers. More on this in the [Infrastructure Concerns Section](//TODO: properly link this).

###3rd Party Services:
We can't exactly plan these out but if all goes as plan and you offer something of value it will only be a matter of time before 3rd parties begin to build their own innovations off of your services.

##Tie it all together with the core:
The next step is deciding on what exactly goes into your core.

Not everyone uses this archeture, the truth is I cannot 100% be sure what the tech giants use as I have not had the luxury of peaking behind the curtins. Even if I did I am sure I would have to sign an NDA that would frm writing a book about it.

My concept of the Core is a single service that runs as the heart of your platform. It serves several functions:

###Who has access to what:
It knows who everyone is and it know what they have access to. It also knows all of the registered services and which users have opted to use those services.

This is key becuase all other services will look to the core to know who they should be giving access to the data that have stored in regards to their functionality.

Using 100X as an example the core knows who is a member of each community. So when a member posts in their community the core tells the email service which users to send emails to.

When a potential new member fills out the member application form the member application service quries the core to see who the administrators of that community ara. Then the member application service tells the email service to notify the community administrators.

###The core doesn't go down:
I will say it again the core doesn't get to go down. Only your most responsible team members will work on it. 20% time ideas don't go into the core. The maximum amount of redundancy needs to be put into the core. I will talk more in the [Infrastructure Concerns](//TODO: link this) section. Just know that the core doesn't go down.

##What is next:
In the following chaptors we will discuss the multiple ways in which you can build your innovation platform.






