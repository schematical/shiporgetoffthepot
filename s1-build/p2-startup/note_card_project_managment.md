

The aprentenceship system


###Step 1:
Break out your product into services. A service is a collection of features.

###Step 2:
Prioritize your feature set

###Step 3: Identify Dependant Services

For Example: For example if you have a website where users are going to login and create profiles then you will need a way for users to login commonly called an authentication service. I cannot imagine a platform that does not have some form of Authentication.

You will also want to create an email service to communicate with the users.

??GEO Location

CDN's are common services that will be needed to deliver large amounts of binary data such as images and videos.

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

###Difficulty:
Typically I start with difficulty so I know if I a senior team member should be doing the task or a junior team member, or even the intern. I assign it a value of 1 - 10. 

* 10 or 9 means that an architect level team member should be working on it.  
* 8 - 5 means a senior level team member should be working on it.
* 4 - 2 means a junior level team member should be on it.
* 1 means let the intern have a shot at it.

Now this doesn't mean this is who 100% has to do the work. No, its more of a guidence system to allow team members to be more self sufficient. If the intern runs out of things todo I want them to be able to just run up to the board and look for more one tasks to hammer out. When they find one bring it to the project manager and let them know they are going to take it on. I wouldn't want them to touch a 10 though and this system is an easy way of communicating this. 

What if the junior developer hammers out every task on the board 4 and below. They should be able to start looking for 5's that they can tackle with the permission and underneith the supervision of the a senior developer. This system really promotes that self starter mentality that I love having in my team and you should too.

###Duration:
How long will the task take? Now that we know if the task is a designer or a front end developer or a backend developer task and the level of skill required to take on the task we can now start to estimate how long it would take. More senior team members will lay down time estimates on the high tasks. 

Junior team members can estimate how long lower tasks will take, but a senior team members might chime in and ask "Why do you think it will take that long?" The junior team member should be able to come up with a good answer. If they cant and won't budge then you may need to rethink their position on your team.

Also note that if a task is longer than a couple of days then you may want to break it down further into smaller tasks.

###Risk:
How does the project manager know how confidant the estimates are made by the team? Mananging customer expectations in a consulting company is extreamly important. Coordinating your launches with marketing in a product or SaaS company is equally important. The project manager needs to beable to convay how confidant the team is that they will hit certain deadlines so marketing can adjust accordinly or additional resources to tackle can be gathered.

Risk is variable an can be adjusted. Sometimes a task is high risk because a large peace of information is missing. Perhaps a partnership has not been locked down or documentation on a private 3rd party API has not been sent over. 

Other times when I was consulting it was high because scope was not clear and I anticipated client change




