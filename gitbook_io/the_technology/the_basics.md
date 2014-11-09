# API Basics
For those of you more experienced engineers and developers out there this will seem like child's play. For those of you on the non technical side this may serve as an extremely valuable guide.

Remember earlier when I talked about Facebook opening up so 3rd party developers could build apps and use Facebook's data? This was done using their API's.

##Application Programming Interface(API):
An application programming interface can be pretty widely defined. It is basically any interface that lets others build software applications off of a company's existing technology. Here I will go into some specific API types and use cases.

##Software Development Kit(SDK):
An SDK is code that is meant to make it easier for developers to access the APIs. Often times developers will release an SDK for many languages. There would be a Ruby SDK, a Java SDK, a Node SDK, a PHP SDK and so on.

A good SDK you can just install into your new application, plug in your credentials, write a couple of lines of code and it just works as if you were talking to your own system.

##Restful APIs:
A restful API typically means an web service that receives a single HTTP or HTTPS request and responds with the data you were looking for. Typically some sort of credentials are posted in similar to a username and password with each request. Any query information or if you are creating a record the record data will be included in this request.

The response is not a web page or anything that would render in your browser. It typically is one of the following:

###XML:
Extendable Markup Language(XML) which looks a lot like HTML because HTML started out as a form of XML(Nowadays not so much).

###SOAP:
Simple Object Access Protocol(SOAP), while a little old school, is a very rigid form of XML. It has clearly defined data structures that make it rigid than other formats. This has its benefits and drawbacks. The benefits are that it ensures data integrity. The drawbacks are that you are less agile due to the effort it takes to update a data structure and release those changes to all of the SDKs.

###JSON:
JavaScript Object Notation(JSON) is probably the most common one nowadays. It looks like this:

```
{
    community:{
        name:"100State",
        type:"OPEN",
        desc:"A collaborative community of dreamers and doers"
        ...
    }
}

```
JSON is nice because it is really simple and it is easy to parse. Obviously it works well with Javascript and can be pulled into the browser quickly.

Recently they have even been making Databases that store your data in this format instead of the old fashion spreadsheet format with rows.

###Seeing it in action:
Here are a couple of queries on various apis you can run just by opening them up in your browser.

####A listing of 100X Members:
[http://api.100xglobal.com/members](http://api.100xglobal.com/members)

####Github’s API Root:
[https://api.github.com/](https://api.github.com/)

####Mark Zuckerburg’s Facebook Profile:
[http://graph.facebook.com/4](http://graph.facebook.com/4)

###Tip:
Sometimes the data comes out unformatted and all squished together. Use a JSON parser to foramt it like the one found at [http://json.parser.online.fr/](http://json.parser.online.fr/). You can just copy and paste in the result from the above query into it.

###What kind of functionality can you access via API?
There is no limit to what you can release. Create a project. Update your profile. Send a message to another user on the system. There is no limit.

##Conclusion
Hopefully this give you a basic understanding of how a platform would open up for other applications to interact with its core functionality.




