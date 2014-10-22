#Services
I have spent countless hours talking about how splitting up your workforce into small cross functional dedicated teams will help your business survive and innovate. Now I am going to talk about how to do the same thing with your technology so you can build your own innovation platform.

##A quick history lesson:
Lets go back to the year 1998 when software like Quicken, Vizo, or Windows were released on a yearly schedule. Lets say you had a team of 1000 developers and designers(though it could be argued that no one back then put any thought into design) all working furiously to pump out next years software release.
Even if you split them into functional teams, which often times was not the case, what are the chances they would all be done at the same time? Almost impossible. So you have 50% of your workforce scrambling to cramb in their undertested featureset and 50% sitting on their butts. Maybe you plan better and make sure the former 50% didn't bit off more then they can chew and so they are finished so then you have 100% sitting on their butts.

If they are resting on their lorals why not put them to work on next years software? That is great(sarcasim), lets start building software that will sit on the shelve with zero user feedback for the next 12+ months?

That massive delay in feedback combined with the completely ineffecent way of managing resources made these companies fall behind the curve.

##And then came SaaS:
Software as a Service(SaaS) or 'Cloud Services' paved the way for a the way new model. In SaaS you, the business, host the software on your servers. Users go to your website, signup, and interact with e software still running on your servers through their browser. No instilation, no saving info to the users computer.

Since the software is running on your servers you can change it anytime you like. There is no need to wait until a certain release date. This allows you to release in smaller iterations. You could release one new change a month instead of a bunch of big changes. You then could monitor user feedback each month to help guide your product design and prioritize new features. Since these releases are monthly you can make key decisions much faster which makes you more adaptable to market change and increases your chance of success.

This is one of the reasons why startups working building a SaaS product were out pacing the tech giants releasing on a yearly schedule. Because they could see market change and get user feedback at such a rapid pace. This made it easy to out run the giants.

##Moving to fast can be dangerious too:
Every successfuly startup has to grow and inevitably they will add more on to their software. What happens when you move to fast and start growing bigger then communication becomes tougher. Software that depends on each other will break if changes are introduced and not properly communicatied. Obviuolsy this causes bugs.

Keepiung your small focused groups can fix some of this. Team A's sole purpose is the managing the event planning portion of the app. Team B's sole purpose is managing the messaging system. This helps alot but it is still not perfect.

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

The next part, focusing in on our core value; what made us unique and valuable to the customer, was the tough part. 


##Identifying Services:
Running on many servers/removes risk from the core

PS: I sometimes refer to services as as applications.

###Feature Services:

###Bridge Services:

###Utility Services:
####Content Delivery Networks CDN:
//Amazon S3s

##Tie it all together with the core:
//What you are not building is as important as what you are building. Focus...
//Core's main responsibility

//Who

//What?

