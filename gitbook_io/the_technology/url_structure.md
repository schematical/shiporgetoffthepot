#Mini Chapter: URL Structure
I am a stickler for how URL structure for a web application or platform is laid out. There are several reasons this is super important.

##Logical URLs:
Every page, every comment, every post needs to have its own unique url. Further more if the comment is on a specific entity like a community then it should include the communities url in front of it.


Here are some examples of logical URL's we are using in 100x global.


###A listing of communities on 100x:
`/communities`

###The details for a specific community on 100x:
`/communities/100state`

_NOTE: As 100x global is in development at the moment these are subject to change. We are going to get fancy with DNS and using the host name to identfy the community so chances are if you visit the site the host name will be used to identify the community. This meanse the first 2 URLs will get shaved off but that is more of an advanced topic. For now just understand the principal of what I am talking about._
###A listing of members of the 100state community:
`/commuities/100state/members`

###The details of my 100state member profile
`/commuities/100state/members/schematical`

###A listing of my projects related to 100state:
`/commuities/100state/members/schematical/projects`

###The details of the project related to this book:
`/commuities/100state/members/schematical/projects/shiporgetoffthepot`

###A listing of comments on that project:
`/commuities/100state/members/schematical/projects/shiporgetoffthepot/comments`

###The details of one specific comment made on my book:
`/commuities/100state/members/schematical/projects/shiporgetoffthepot/comments/1920012`


##Easy to bookmark and share:
Have you ever been looking at a page or search results then book marked it so you could come back to it quickly? What happens if you come back to it later and you cant see the same results? Your pissed off.

What happens if you want to share that URL with a friend or colluege and when they open it up it doesn't show the same results? People stop trying to share your content.

Make each entity have its own url so it is easy to reference and come back to. Its that simple.

##Easy for developers to build off of:
If you want others to build off of your API's make them logical. Don't use weird urls like '/r/_a/?someObscureThing=obscureOtherThing'. Make it easy to remember. This will speed up your developers, as well as 3rd parties.

My API URLs almost directly reflect the URLs of the human readable version of the site. Try it some time:

First go to [http://100xglobal.com/schematical](http://100xglobal.com/schematical); the human readable webpage of my 100x profile.

Then go to[http://api.100xglobal.com/schematical](http://api.100xglobal.com/schematical); the JSON version of my 100x profile.

##Essential for SEO:
I cant express how important this is for SEO as well. Of course the content on the home page and root of your site might change daily basis each post in your news feed needs to have a unique URL that never changes the bots can index over and over again.

Though I do not know exactly what Google's algorythems I do have extensive expirence with bots changes in content drop your SEO ranking. This is because a search engine doesnt want to link to a search phrase that might not be on the page anymore.

Additionally servers like Apache and many others by default serve up files as they exist on the servers actual file structure.

Just like people assume files grouped in a folder together are related; Bots often are programmed to assume web pages that share similar URL's are related and group them accordingly.

###Example:
Lets say a phrase exaists in several comments made on one of your projects. The bot can safely assume since they share the same base url, the url for the project, that the project should show up higher in the search results as related that phrase.

####Comment 1:
**/commuities/100state/members/schematical/projects/shiporgetoffthepot**/comments/1`

####Comment 2:
**/commuities/100state/members/schematical/projects/shiporgetoffthepot**/comments/2

##Conclusion:
Make your URLs logical and simple to gain the benfits of user happyness, 3rd party innovations, and SEO value. If you want to see SEO value in action search for a code library and see how often Github shows up first.
