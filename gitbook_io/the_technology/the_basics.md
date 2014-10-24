# API Basics
For those of you more expirenced engineers and developers out there this will seem like childs play for you. For those of you on the non techincal side this may serve as an extreamly valuable guide.

Remember earlier when I talked about Facebook opening up so 3rd party developers could build apps and use their data? This was done using their API's.

##Application Programming Interface(API):
An application programming interface can be pretty widely defined. It is basically any interface that lets others build applications off of their technology. Here I will go into some specific API types and use cases.

##Software Development Kit(SDK):
An SDK is code that is ment to make it easier for developers to access the APIs. Often times developers will release an SDK for many languages. There will be a Ruby SDK, a Java SDK, a Node SDK, a PHP SDK and so on.

A good SDK you can just drop into your code, plug in your credentials, write a couple of lines of code and it just works as if you were talking to your own system.

##Restful APIs:
A restful api typically means an web service that recives a single http or https request and responds with the data you were looking for. Typically some sort of credentials are posted in similar to a username and password with each request. Any query information or if you are creating a record the record data will be included in this request.

The response is not a webpage or anything that would render in your browser. It typically is one of the following:
###XML:
Extendable Markup Language(XML) which looks a lot like HTML because HTML started out as a form of XML(Now days not so much).

###SOAP:
Simple Object Access protocol(SOAP) is a very ridged form of XML. It has clearly defined schemas. It is a little old school.

###JSON:
JavaScript Object Notation(JSON) is probablly the most common one now days. It looks like this:

```
{
    community:{
        name:"100State",
        type:"OPEN",
        desc:"A collaborative commuity of dreamers and doers"
        ...
    }
}

```
JSON is nice because it is really simple and in is easy to parse. Obviously it works well with Javascript and can be pulled into the browserquickly.

Recently they have even been making Databases that store your data in this format instead of the old fashion spreadsheet format with rows.

##Conclusion?


