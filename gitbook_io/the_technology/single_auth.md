#3.1. Single Auth:
How google, Facebook and Twitter(and a huge amount of other people) are using Single Sign On to allow their data to be shared intellegently across the web.

###Google:
Earlier we talked about how Google started off with just a search engine but in order to track who was searching for what then needed to create a service that users would want to log into. One of the original services was GMail but their sweat of services quickly grew.

If they have so many services that you can log into with your google account GMail, Google Drive, Google Plus, your Android devices do you let your user create different accounts for each of these services? No, that would be a nightmare.

Google provides a Single Sign On service that allows users to have a single username and password for all of their google services. This is great for the user; less passwords to remember.

This has several benifits to google as well:

Users are more likely to use a new product or service because they do not have to signup. They can just start using the new service.

Each new service they build doesn't have to reinvent the wheel with authentication and security. They can just build off of the existing Google SSO service.

Google can track user behavior across a wide variety of servces. If you recive emails on a certain topic, browse Google maps for a specific location, and search for a certain phrase then they can perdict that serving you an add related to the 3 variables will most likely get you to click on it earning them their fee from advertisors.

Google can even track you when you are not on their web pages or services. More on the insane amount of data Google has on you in the chaptor on Data Plays(//TODO: Maybe move Data Plays to a bonus chaptor)?

##Logging onto 3rd party stuff:
Google goes beyond allowing you to sign on to their services. They also allow 3rd party services to use their Signle Sign On service to track user identities and access user information from their various services.

Facebook, Twitter, Github and many others are doing the same. This helps strongly encourage those 3rd parties //Instagram?


##Why I advocate SSO for your innovation platfrom:
People may not ever want to loggin to a 3rd party service with your login and that might not be something you want them to do anyway. If you took my advice from chapter 3.2(//TODO: Double check) about running multile services for your various groups of functionality then you will not want users to have to create new logins for each service.

This will require a SSO services of some kind.


##OAuth:
OAuth is a protocal for securly sharing user data with 3rd party sites. Basically it is a fancy exchange between your SSO Serivce and 3rd party services. For a more technically detailed look check out [http://oauth.net/2/](http://oauth.net/2/).


##Scope/Permissions:
Typically during the OAuth process the user will see a list of things the 3rd party application wants. Some examples that you might see in 100x in the future are as follows:

* Ability to read the list of communites the logged in user is associated with
* Ability to join community projects on the users behalf
* Ability to create comments on the users behalf

Basically this is access to any data you are storing **Communities, Projects, Comments etc** and then specifically if the 3rd party service can **read** or **read and write** data on your behalf to the specific entity.

###When not to ask for user permission:
If you are just building a SSO service for your own internal uses and not for use by 3rd parties then you will not want to make each user go through the OAuth process to use each feature. You will want to just grant the feature service access to your users information.

I call these applicaitons SUPER level applications. They don't have to jump through the hoops the other applications hav to do to get your information because they are internal production services. In the core service where I register all other services there is a field I can set to indicate that a service is a "SUPER" level service.

####"Lab" level services:
In later chapters I talk about building a "Lab" level service you can use to better allow your workforce to build innovations and test them in a safe way where there is little risk to damaging your image in the customers mind.


##Conclusion:
Single Sign On is an important tool to help you tie everything linked to your innovation platform into a nice clean package.





