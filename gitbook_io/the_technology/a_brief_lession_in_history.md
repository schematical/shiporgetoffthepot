# A brief lession in history:
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

###Version Control and Branching:
Many tech shops use an overly complex form of Version Control. For those of you non tech people Version Control is like Google Docs for code. It tracks every change and helps coordinate code between a huge amount of people.

Branching is the art of creating multiple versions of your codebase. This allows your workforce to build out new features without stepping on each others toes. Though branching is essential, overly complex branching systems can cause serious issues and delays.

If you branch you have to merge. Merging is when you take code from those various versions of your codebase and combine them back together to make the code that will go in your finnal product. Merging typically occurs when a large feature is completed and needs to go into the main build.

It is as complected as it sounds. It is not unusual for a company to hire a 'build master'. This person is incharge of merging these changes into one main relase that can go live to your users. Below are some of the issues that occur when you have an overly complex branching system.

####Workforce Spegetti:
Imagine a work force of 100 continusly on the same code base, things get messy real quick. Even if each team has its own dedicated section of the code you end up needing to merge in changes from other teams into your code. You may have no idea how their code works. Messes get made and fires end up needing to get put out.

####No testing ground for innovations:
If you use 20% time how do you decide what projects get merged and go live? If you do the 20% time and a developer dreams up a new feature then you have no real way of getting user feedback before it goes live. Other developers can test it but your customers can only see it if the freature gets merged in to the live build.

 So it is all or nothing. Using an analogy from [Crossing the Chasm by Geoffrey Moore](http://www.amazon.com/Crossing-Chasm-Marketing-High-Tech-Mainstream/dp/0060517123) your early adaptors that want to see new features and don't need extream polish have no way of getting their hands on the feature without exposing it to everyone on the other side of the chasim. I mean the customers that are afraid of change and might ditch your product for a more stable one at the first sign of rough edges.

This leaves you with 3 options:

1. You remove the atonomy you gave your workforce to expirment and innovate with their 20% time.
2. You constantly expose raw and rough 20% features so you can get user feedback on them but risk losing customers that get freaked out by how raw the new features are.
3. You pick and chose which 20% features get the resources to clean them up basically making gambles based on your gut, not real user feeback. Lots of good ideas will never see the day.

There is actually a fourth option which I recomend. I will get to a little later in the chapter.

##PaaS:
There is another model called Platform as a Service(PaaS). This is where you offer an interface for other developers to build their own SaaS's or Applications off of your systems.

###Examples of PaaS:
####Google Geocode:
Google offers numerious services such as the ability to convert addresses into latitued and longitude. This serveric along with many others are used by thousands of developers to power their applications.

For a more complete listing of Google's services check out [https://console.developers.google.com](https://console.developers.google.com)


####Amazon Web Services:
Amazon's Web Services is another example though almost to litteral as they are actually hosting your servers so when I say build off of their platform I mean it.

For a more complete listing of all of the things offered by Amazon Web Services check out [http://aws.amazon.com/](http://aws.amazon.com/)


####Twillio:
Twillio sends text messages as a service for thousands of applications. You would be amazed at what a pain in the ass sending text can be but with a simple ping to twillio it is no problem.


###Validate before building a platform:
If you are thinking about building a Platform before you have users paying for your existing SaaS products then you will want to make sure you have solid market validation before jumping in. For more information on validation the check out the [Eric Rise's The Lean Startup](http://theleanstartup.com/) or my posts on [ShipOrGetOffThePot.com](http://shiporgetoffthepot.com)
