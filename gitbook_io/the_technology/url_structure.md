#URL Structure
I am a stickler for how URL structure for a web application or platform is laid out. There are several reasons this is extremely important which I will go into in this chapter.

##Logical URLs:
Every page, every comment, every post needs to have its own unique url. Further more if the comment is on a specific entity like a community then it should include the communities url in front of it.

Here are some examples of logical URL's we are using in 100x global.


###A listing of communities on 100x:
`/communities`

###The details for a specific community on 100x:
`/communities/100state`

_NOTE: As 100x global is in development at the moment these are subject to change. We are going to get fancy with DNS and using the host name to identify the community so chances are if you visit the site the host name will be used to identify the community. This means the first 2 URLs will get shaved off but that is more of an advanced topic. For now just understand the principle of what I am talking about._
###A listing of members of the 100state community:
`/communities/100state/members`

###The details of my 100state member profile
`/communities/100state/members/schematical`

###A listing of my projects related to 100state:
`/communities/100state/members/schematical/projects`

###The details of the project related to this book:
`/communities/100state/members/schematical/projects/shiporgetoffthepot`

###A listing of comments on that project:
`/communities/100state/members/schematical/projects/shiporgetoffthepot/comments`

###The details of one specific comment made on my book:
`/communities/100state/members/schematical/projects/shiporgetoffthepot/comments/1920012`


##Easy to bookmark and share:
Have you ever been looking at a page or search results then book marked it so you could come back to it quickly? What happens if you come back to it later and you can't see the same results? Your pissed off.

What happens if you want to share that URL with a friend or colleague and when they open it up it doesn't show the same results? People stop trying to share your content.

Make each entity have its own url so it is easy to reference and come back to. Its that simple.

##Easy for developers to build off of:
If you want others to build off of your API's make them logical. Don't use weird urls like '/r/_a/blah?someObscureThing=obscureOtherThing'. Make it easy to remember. This will speed up your developers, as well as 3rd parties.

My API URLs almost directly reflect the URLs of the human readable version of the site. Try it some time:

First go to [http://100xglobal.com/schematical](http://100xglobal.com/schematical); the human readable webpage of my 100x profile.

Then go to[http://api.100xglobal.com/schematical](http://api.100xglobal.com/schematical); the JSON version of my 100x profile.

##Essential for SEO:
I can’t express how important this is for SEO. The content on the homepage and root of your site will change on a daily basis. Each post in your news feed needs to have a unique URL that never changes. This allows the bots can index over and over again.

Though I do not know exactly what Google's algorithms I do have extensive experience with bots. Changes in content drop your SEO ranking. This is because a search engine doesnt want to link to a search phrase that might not be on the page anymore.

Additionally servers like Apache and many others by default serve up files as they exist on the servers actual file structure.

Just like people assume files grouped in a directory together are related; Bots often are programmed to assume web pages that share similar URL's are related and group them accordingly.

###Example:
Lets say a phrase exists in several comments made on one of your projects. Since the projects share the same base URL, the URL for the project,  the bot can safely assume that the project should show up higher in the search results as related that phrase.

####Comment 1:
**/communities/100state/members/schematical/projects/shiporgetoffthepot**/comments/1`

####Comment 2:
**/communities/100state/members/schematical/projects/shiporgetoffthepot**/comments/2

##Conclusion:
Make your URLs logical and simple to gain the benefits of user happiness, 3rd party innovations, and SEO value. If you want to see SEO value in action search for a code library and see how often Github shows up first.



