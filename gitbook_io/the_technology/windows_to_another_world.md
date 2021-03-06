#Embedding - Windows to Another World:
Users using your technology while on your site is cool. When your technology starts getting embedded across other peoples websites then you really have something powerful.

###What is Embedding?
Imagine you are a blogger with little technical know how. You want to add comments to your website. You can go to a service like [disqus.com](https://disqus.com) or [Facebook's plugin section](https://developers.facebook.com/docs/plugins/comments/) to get a snippit of HTML you can copy and paste into your blog.

Now when users go to the page they see a nice commenting system served up by the 3rd party platform. The user has a better user experience due to the additional functionality but no knowledge that the commenting system is not part of the core blog.

###How embedding services is useful to 3rd parties:
It allows people with either a lack of development skills or often times just a plain lack of time to quickly and easily place your functionality on to their own web pages and products.

Sometimes its not even a technical thing, building a user base and a vast amount of content is a daunting tasks. Think of twitter and how they allow you to embed a feed of tweets matching a hash tag or search term. See it in action here [https://dev.twitter.com/web/embedded-tweets](https://dev.twitter.com/web/embedded-tweets).


###How it is useful to you:
The same way it is useful for twitter. While the majority of online marketers are paying 3rd parties to place links to their site via banner ads twitter has thousands of people sharing and promoting their embeddable content. Embeddable content that contains direct links back to Twitter driving valuable traffic to their site.

This often times works even better thank banner ads because the content being placed on the page has been carefully thought out by the website owner. It is in the website owner's best interest to select the content best suited for their audience.

##Technical Stuff:
Lets get into the nuts and bolts of it.

###iFrame: Youtube
Youtube is one of the best examples of iFrames. iFrames are basically web pages inside of web pages. The are small isolated windows to another website. The parent page, owned by the 3rd party, has one line of code defining the iframe and its source. When the users browser sees this line it opens up a window to the child page, a web page owned by the platform(you, youtube, or any other embeddable content).

Youtube's Iframe code looks something like this:

```
<iframe width="1280" height="720" src="//www.youtube.com/embed/rHr0kNF225Y" frameborder="0" allowfullscreen></iframe>
```

###Embedding via JavaScript SDK:
Embedding via iFrame is simple but you are limited to touching just what is inside of your little window. If you need full access to the page you will need to use a JavaScript SDK.

Most web pages use some type of JavaScript to run. Javascript has full access to manipulate everything on the page. If they include your JavaScript SDK you will have access to the exact same things.

Here is an example of what embedding the SDK for 100x looks like in code:

```<script src='http://100xglobal.com/sdk.js'></script>```

This just includes a reference to your code. From there the 3rd party will need to specify exactly what they want the SDK to do on the page.

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

Your users need to trust you or they won't embed your tech into their pages and products. The basic rule is don't be a jerk, it will come back to bite you.


###Reverse Embedding:
Facebook also did something amazing when they reversed the embedding scenario and started letting 3rd parties embed their content on Facebook using **Facebook Page Tabs**. When you go to a facebook page and it has a tab(not the newsfeed or any of the default tabs) that content is most likely being served up directly from the 3rd parties web servers.

I made my living in my early twenties building iFrame based Facebook apps. I was one of those passionate young developers eagerly building innovations that would drive users to Facebook. With the help of the advertising agencies I built these apps for I did drive literally hundreds of thousands of users to Facebook again and again.

###Another Benefit to Embedding: Lots of Data
Do you know what a hotdog is? Its the byproduct of what is left over from the butchers finest cuts. The chef salad is similar, take whatever is left over from your primary product and see how you can create value with it.

A nice byproduct of having your technology embedded in thousands of sites across the internet is that you now have eyes and ears on the users that use these sites. This may seem trivial but once you see how the big guys are using this to their advantage you won't want to miss out on it.

//TODO: Some how lead into bonus chapter

##Conclusion:
Don't fear people stealing your content. Give them the tools to embed your content and reap all of the benefits.
