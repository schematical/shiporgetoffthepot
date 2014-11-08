#Services
Splitting up your workforce into small cross functional dedicated teams will help your business survive and innovate. Now I am going to talk about how to do the same thing with your technology so you can build your own innovation platform.

##A quick history lesson:
Lets go back to the year 1998 when software like Quicken, Vizo, or Windows was released on a yearly schedule. Let's say you had a team of 1000 developers and designers all working furiously to pump out next years software release.

Even if you split them into functional teams, which often times was not the case, what are the chances they would all be done at the same time? Almost impossible. So you have 50% of your workforce scrambling to cram in their undertested featureset and 50% sitting on their butts. Maybe you plan better and make sure the former 50% didn't bite off more then they can chew and so they are finished on time.

Why not put them to work on next years software? Should they start building software that will sit on the shelve with zero user feedback for the next 12+ months?

##The problem:
The issue with thie model is that massive delay in feedback combined with the completely ineffecent way of managing resources made these companies fall behind the curve.

##And then came SaaS:
Software as a Service(SaaS) or 'Cloud Services' paved the way for a the way new model. If you offer a SaaS product you host the software on your servers. Users go to your website, signup, and interact with the software through their browser. No instilation, no saving info to the users computer.

###Smaller Changes, Faster Iterations:
Since the software is running on your servers you can change it anytime you like. There is no need to wait until a certain release date. This allows you to release in smaller iterations. You could release one new change a month instead of a bunch of big changes once a year.

###Faster Feedback:
You then could monitor user feedback each month to help guide your product design and prioritize new features. Since these releases are more frequent you can make key decisions much faster. This makes you more adaptable to market change and increases your chance of success.

This is one of the reasons why startups building SaaS products were out pacing the tech giants releasing on a yearly schedule. Because they could see market change and get user feedback at such a rapid pace. This made it easy to out run the giants.

##Moving to fast can be dangerious too:
Every successfuly startup has to grow and inevitably they will add more on to their software. What happens when you move to fast once you have so many moving peaces?

Keeping your team in small focused groups can fix some of this. Team A's sole purpose is the managing the event planning portion of the app. Team B's sole purpose is managing the messaging system. This helps alot but it is still not perfect.

What if team A's peace of software is dependant on team B's peace of the software and team B's peace of software isn't quite ready to get released yet? Do you hold up the entire release forcing all other features and teams to wait delaying valuable feedback.

###Branching:
Many tech shops use an overly complex form of Branching. Branching is the art of creating multiple versions of your codebase. This allows your workforce to build out new features with out stepping on each others toes. Though branching is essential, overly complex branching systems can cause serious issues and delays.

If you branch you have to merge. Merging is when you take code from those various versions of your codebase and combine them back to gether to make the code that will go in your finnal product. It is as complected as it sounds.

Merging typically occurs when a large feature is completed and needs to go into the main deployment. It is not unusual for a company to hire a 'build master' that is incharge of merging these changes into one main relase that can go live to your users. Below are some of the issues that I find occur when you have an overly complex branching system.

####Workforce Spegetti:
Imagine a work force of 100 continusly on the same code base, things get messy real quick. Even if each team has its own dedicated section of the code you end up needing to merge in changes from other teams into your code and you may have no idea how their code works. Messes get made and fires end up needing to get put out.

####Bringing in new blood:
What happens when a 3rd party builds something innovative off your technology and you decide to aquire their tech. Do you then spend the extensive time and effort to rewrite their code into your system? Or do you let them continue to run on their own?

####No testing ground for innovations:
If you use 20% time how do you decide what projects get merged and go live? If you do the 20% time and a developer dreams up a new feature then you have no real way of getting user feedback before it goes live with all of the rest of the code.

Other developers can test it but your customers can only see it if the freature gets merged in to the live release. So it is all or nothing. Using an analogy from [Crossing the Chasm by Geoffrey Moore](http://www.amazon.com/Crossing-Chasm-Marketing-High-Tech-Mainstream/dp/0060517123) your early adaptors that want to see new features and don't need extream polish have no way of getting their hands on the feature without exposing it to everyone on the other side of the chasim. The customers that are afraid of change and might ditch your product for a more stable one at the first sign of rough edges.

You have 3 options:

1. You remove the atonomy you gave your workforce to expirment and innovate with their 20% time
2. You constantly expose raw and rough 20% features so you can get user feedback on them but risk losing customers that get freaked out by how raw the new features are.
3. You pick and chose which 20% features get the resources to clean them up basically making gambles based on your gut, not real user feeback. Lots of good ideas will never see the day.

There is actually a fourth option which I recomend. Which I will get to a little later in the chapter.

##PaaS:
There is another model called Platform as a Service(PaaS). This is where you offer an interface for other developers to build their own SaaS's or Applications off of your systems.

###Examples of PaaS:
####Google Geocode:
Google offers numerious services such as the ability to geocode. That serveric along with many others are used by thousands of developers to power their applications.

For a more complete listing of Google's services check out [https://console.developers.google.com](https://console.developers.google.com)


####Amazon Web Services:
Amazon's Web Services is another example though almost to litteral as they are actually hosting your servers so when I say build off of I mean it.

For a more complete listing of all of the things offered by Amazon Web Services check out [http://aws.amazon.com/](http://aws.amazon.com/)


####Twillio:
Twillio sends text messages as a service for thousands of applications. You would be amazed at what a pain in the ass sending text can be but with a simple call to twillio it is no problem.


###Validate before building a platform:
If you are thinking about building a Platform before you have users paying for your existing SaaS products then you will want to jump back to Chapter 3.1(//TODO: This might change) and read more about validation.

##Innovation Platform:


###Enter 100X:
100X is the platform I am architecting right now so throughout this section I will be using examples from 100X as case studies.

100X is a community managment technology. It started out of 100State, a collabrative commuity/coworking space in Madison Wisconsin that has grown increadibly fast.  With rapid growth comes difficulty managing such a large and diverse group of people.

To assist us we searched for a technology that could help us manage our membership as well as facilitate a feeling of commuity and foster colaboration. We found non so seeing that coworking spaces are quickly becoming a staple of the startup world we all know and love we have decided to build our own community managment software.

###How we started:
We started out by brain vomitting every single idea we had onto a white board. You put enough dreamers in a room and you will have no shortage of ideas, that was the easy part.

The next part, focusing in on our core value; what made us unique and valuable to the customer, was the tough part. **What you are not building is as important as what you are building**; at least in the early stages. Down the line I don't want to limit your creativity but in the early stages focus is key.

With 100x we decided to focus on "curated communities".

##Identifying Services:
The next thing I as the architect had to do was identify the various services we would need to build 100x. Services are a grouping of functionality. There are a couple of factors I use to determine where a service starts and stops.

* Does this functionality asolutly have to be there at launch?
* Are we sure this functionality is valuable to our customers?
* Would this functionality be a good thing to assign a team to soley focus on someday?
* Will this functionality likely change at a different pace from the other services we have identified. Either because of development timelines or user feedback?
* Can I run this functionality on a different server to take the load off of?

_NOTE: I sometimes refer to services as 'applications'._



###Feature Services:
Feature services are the most obvious. They are specific

For 100X we wanted to add a job board, a phyiscal resource managament tool, and an event tool. None of these are core to our business but would be nice to haves down the line.

On the other hand there was the membership application process which helps our community and coworking space managers ensure only quality members are allowed to join. This was essential but not necissarily core for two reasons.

1. We could easily run the membership process on another server removing the load from the core.
2. It was not neccisary to launch with this as we already have memebers so they did not need to apply.
3. I could tell the application process would mostlikely change rapidly as we brough on new communities.


###Bridge Services:
Bridge services are services that bridge your core technology with other SaaS's and PaaS's. For example one idea we played with because we didn't want to enter the realm of project managment tools is to build a bridge to Basecamp and Asana. This basically would allow you to quickly invite members from your coworking space on into your project managment software of choice.

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






