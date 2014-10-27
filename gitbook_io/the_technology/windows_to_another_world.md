#Embedding - Windows to Another World:
Users using your technology while on your site is cool. When your technology starts getting embedded across other peoples websites then you really have something powerful.

###How embedding services is useful to 3rd parties:
It allows people with either a lack of development skills or often times just a plain lack of time to quickly and easily place your functionality on to their own web pages and products.

Sometimes its not even a technical thing, building a userbase and a vast amount of content is a daunting tasks. Think of twitter and how they allow you to embed a feed of tweets matching a hash tag or search term.


###How it is useful to you:
The same way it is useful for twitter. While the majority of online marketers are paying 3rd parties to place links to their site via banner ads twitter has thousands of people puttling up their embedable content. Embeddable content that is full on links back to Twitter driving valuable traffic back to their site.

This often times works even better thank banner ads because the content being delivered from Twitter has been carifully thought out by the website owner to be the best suited for their audience.

##Technical Stuff:
Lets get into the nuts and bolts of it.

###IFrame: Youtube
Youtube is one of the best examples of iFrames. iFrames are basically web pages inside of web pages. The are small isolated windows to another website. The parent page, owned by the 3rd party, copies one line of code onto their page. This opens up a window to the child page, a web page owned by the platform(you, youtube, or anyother embedable content.

Youtube's Iframe code looks something like this:

```
<iframe width="1280" height="720" src="//www.youtube.com/embed/rHr0kNF225Y" frameborder="0" allowfullscreen></iframe>
```

//TODO: What the hell was this about ->Storing that much data - Hat tip to Amazon's S3


###Embedding via JavaScript SDK:
Embedding via iFrame is simple but you are limited to touching just what is inside of your little window. If you want full access to the page you will need to use something with a little more kick to it.

Most webpages use sometype of JavaScript to run. Javascript has full access to manipulate everything on the page. If they include your javascript you will have access to the exact same things.

Here is an example of what embedding the SDK for 100x looks like:

```<script src='http://100xglobal.com/sdk.js'></script>```

This just includes a reference to your code. From there depending on the complexity of the functionality you allow them the 3rd party will need to specify exactly what they want the SDK to do on the page.

At this point 100x's JS SDK is in its early stages of being developed so I will use some Facebook Examples form their developer site [https://developers.facebook.com/docs/javascript/quickstart/v2.1](https://developers.facebook.com/docs/javascript/quickstart/v2.1)

Here is a bit of User Interface(ui) code that puts up a share dialog in the middle of your page.
```
FB.ui(
 {
  method: 'share',
  href: 'https://yourdomain.com/your_page'
}, function(response){});
```

This following code helps the 3rd party site identify if the user if the users has gone through the OAuth process outlined in the Single Sign On chapter.

```
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log('Logged in.');
  }
  else {
    FB.login();
  }
});
```

####Security Concerns:
For the user this obviously could be a big security risk. I have used some services that I later found were injecting ads into my pages. Obviously I was livid.

Your users need to trust you or they won't embed your tech into their pages and products. The basic rule is don't be a jerk.


###Reverse Embeding:
Facebook also did something amazing when they reversed the embedding scenerio and started letting 3rd parties embed their content on Facebook. They are doing this using Facebook Page tabs. When you go to a facebook page and it has a tab(not the news feed or any of the default tabs) that content is most liekly being served up directly from the 3rd parties web servers.

I made my living in my early twenties building iFrame based Facebook apps. I was one of those passionate young developers eagerly building innovations that would drive users to Facebook. And with the help of the advertising agencies I built these apps for I did drive litterally hundreds of thousands of users to their site again and again.

###Another Benifit to Embedding: Lots of Data
Do you know what a hotdog is? Its the byproduct of what is left over from the butchuers finest cuts. The chef salid is similar, take whatever is left over from your primary product and see how you can create value with it.

A nice byproduct of having your technology embeded in thousands of sites across the internet is that you now have eyes and ears on the users that use these sites. This may seem trivial but once you see how the big guys are using this to their advantage you won't want to miss out on it.

//TODO: Some how lead into bonus chapter

##Conclusion:
Don't fear people steeling your content. Give them the tools to embed your content and reap all of the benifits. 
