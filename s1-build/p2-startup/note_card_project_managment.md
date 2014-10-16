##Note Card Project Managment System:
Over the years I have been exposed to a number of Agile and sadly Waterfall project managment systems. Learning from each of these I have cobbled together my own system which I have had great success using to scope out, estimate, exicute, learn and iterate. I will explain the steps I use to break down monumential projects into managable peaces.

###In a nut shell:
My system is a visual system that allows you and your team to plan out your development timeline and account for uncertanty. It starts out with a whiteboard and notecards with each of the features you want added into your product. You then draw a line along the y axis labeled "Priority" and a line along the x axis labeled "Time". Your team then place cards in order of priority, higher cards are higher priority and lower cards are lower priority. Some discussion typically occurs. From there you technical talent helps figure out where on the y-axis, the timeline, things sit by determining which features are dependant on other features.




###Benifits of the Note Card System:
There is no such thing as a perfect system, and this is no excetption, but here are just a few of the benifits of using this systems.

####Its simple:
Simplicity is key. This system is an analog system as in you could do it with just a white board and sticky notes. On less thing that could go wrong.
####Its visible:
You can leave it up on the wall of your office for everyone to see everyday you walk in the door. If you have read any of my posts on behavior you will know that posting it up on the wall for all to see helps hold you accountable. Its tough to explain to people that come into your office why feature x isn't launched when it is clearly posted on the wall.

####Its tangagle:
This is important when someone wants to prioritize up a feature. You litterally have to take a card from down the line a long with any dependancies and move it up on the timeline. Then you have to push everything else that is on the list down the line to a later date. It makes seeing the reprecushions of moving _"one tiny little feature"_ up the line will do.

####It encourages team participation:
It discourages the waterfall approch where some guy with no development or design expirence writes the scope and sets the deadline then expects it to be done on time. The same people that are doing the work will be doing the estimation.

####It accounts for uncertanty:
Uncertanty is difficult if not impossible to plan for. This system helps managing risk and identify any potential barriers a head of time.

####It helps to raise the level of junior developers:
By using an aprentenceship system you can help educated your junior team members while simotaniously freeing up your senior team members to get working on the more difficult tasks.

####It encourages independance and the euntripinural spirit:
This system is designed to encourage your team to chose what to takle without waiting for the project managers okay on each and every little task allowing them to be much more effecent and independant.


###What you will need:
* A giant white board(or a huge glass window).
* 8x4 notecards(preferably in different colors)
* Scotch Tape
* As many colors of dry earase markers as possible


###Step 1:
Break out your product into services. A service is a collection of features. For example

More can be read on how to break down a large project into services in the chapter on the [Platform/Application architeture](..) -->//TODO: Link to this

###Step 2:
Prioritize your feature set

//Along the Y axes

###Step 3: Identify Dependant Services

For Example: For example if you have a website where users are going to login and create profiles then you will need a way for users to login commonly called an authentication service. I cannot imagine a platform that does not have some form of Authentication.

You will also want to create an email service to communicate with the users.

Geolocation services are common when working with location based applications.

CDN's are common services that will be needed to deliver large amounts of binary data such as images and videos.

//Along the X axis



###Step 4: Break down large services into smaller peaces
For example if you are building a product where users post pictures to be voted on you can split that up into the functionalty related to the picture and the functionality related to voting. 

Furthermore you may want to break down the picture side into the following functionality:
* browse through a list of pictures
* View a picture in detail
* upload a picture
* remove a picture

For the voting side:
* Adding a vote 
* Tallying votes and assigning a score

Additionally since the images are binary components you will most likely need a CDN of some type to serve up the images.

Keep them grouped together when you do this exercise. Circle them with a marker, color code the note cards, or just write a little note in the corner referencing which overall service it is part of. We keep them grouped together for two reasons:

####You want to know what service they belong to so you know who should be doing the work:
For effecency's sake you may want to structure a team around a perticular service. As you build out a large platform you may want to split out services into seperate running applications that can be deployed independantly of the core platform. If this is the case chances are you will want to dedicate a team to work on this service apart from the core team. Keeping their tasks grouped to gether seperate from the core and other tasks will help you beter plan their workflow.

####You want to denote the minimum ammount of functionality the service needs to have in order for it to launch:
You wouldn't want to build out the ability to cast a vote then launch it to your users and confuse them by letting them search your site for an 'order by score' button that doesnt exist on your site yet.


###Step 5: Further break down tasks by who should be working on them
An example of this would be the emailing system. This may seem simple but this can actully be broken down into 4 parts.

####Senior Developer/Architect:
Build the actual mecanisim that takes an email template and sends out the email.

####Designer:
Create a stylish email template.

####Copywriter:
Draft a well written email to inform the user that their picture has been voted to the top of the list.

####Junior Developer:
Using the email system developed by the senior developer wire all of the components together.

These are only a few of the team members. Other tasks might call for a frontend developer, network admins, ect.


###Step 6: Assign Risk, Duration, and Difficulty to each
This is where the people actually doing the work get a chance to examine the individual tasks and decide how long the task will take.

####Difficulty:
Typically I start with difficulty so I know if I a senior team member should be doing the task or a junior team member, or even the intern. I assign it a value of 1 - 10. 

* 10 or 9 means that an architect level team member should be working on it.  
* 8 - 5 means a senior level team member should be working on it.
* 4 - 2 means a junior level team member should be on it.
* 1 means let the intern have a shot at it.

Now this doesn't mean this is who 100% has to do the work. No, its more of a guidence system to allow team members to be more self sufficient. If the intern runs out of things todo I want them to be able to just run up to the board and look for more one tasks to hammer out. When they find one bring it to the project manager and let them know they are going to take it on. I wouldn't want them to touch a 10 though and this system is an easy way of communicating this. 

What if the junior developer hammers out every task on the board 4 and below. They should be able to start looking for 5's that they can tackle with the permission and underneith the supervision of the a senior developer. This system really promotes that self starter mentality that I love having in my team and you should too.

####Duration:
How long will the task take? Now that we know if the task is a designer or a front end developer or a backend developer task and the level of skill required to take on the task we can now start to estimate how long it would take. More senior team members will lay down time estimates on the high tasks. 

Junior team members can estimate how long lower tasks will take, but a senior team members might chime in and ask "Why do you think it will take that long?" The junior team member should be able to come up with a good answer. If they cant and won't budge then you may need to rethink their position on your team.

Also note that if a task is longer than a couple of days then you may want to break it down further into smaller tasks.

####Risk:
How does the project manager know how confidant the estimates are made by the team? Mananging customer expectations in a consulting company is extreamly important. Coordinating your launches with marketing in a product or SaaS company is equally important. The project manager needs to beable to convay how confidant the team is that they will hit certain deadlines so marketing can adjust accordinly or additional resources to tackle can be gathered.

Risk is variable an can be adjusted. Sometimes a task is high risk because a large peace of information is missing. Perhaps a partnership has not been locked down or documentation on a private 3rd party API has not been sent over. 

Other times when I was consulting it was high because scope was not clear and I anticipated client change. My rule is to take **.5 X Risk X Duration** to get the maximum amount of time that the task could be expecetd to take.

If you are doing in-trepinureship in a larger orginization another large risk maybe that you require something from another division and cannot be sure of if or when the will deliver.

###Step 7: Build the timeline
From there based on your available resources and team you should be able to start determining a timeline. Start at the begining and work your way out. 

Start by looking at the duration this should give you a baseline for how long something should take. Then add about 20% of that time for alpha testing and bug fixes. If a task has a high risk score then add more time for that. If a task has a 9 or 10 risk you probablly should fix that by gathering the proper resources or if it is a high technical risk having a developer build out a proof of concept before estimating the time.

I typically break it down into two week iterations
###Step 8: 

###Stratigies to make it simpler:
####Break out into teams:
Earlier I talked about building teams around a service. This has a couple of added benifits:

* It allows your team members to get focused
* Giving a smaller group of people ownership over a small peace of the puzzle helps hold that team accountable. No passing the buck.
* It flattens out the orginization. Forget this hiarchy B.S. Allowing the teams to act like small startups them selves encourages innovation and keeps your teams motivated. More on this later in the ....????!?!? //TODO: Add this section


The danger here is when a team only has a single developer. If this developer __gets hit by a bus__ metiphorically then you are in a lot of trouble. Make sure no team is made up of only a single develper. Pair together a junior and senior this way one learns from other and you have redundancy. If this is not possible the senior architect or a senior developer from another team should have time deligated for frequently reviewing and getting into the team with a single developer's code.


###Conclusion:
//TODO: Write this




