#3.1. Single Sign On:
Google started off with just a search engine but in order to track who was searching for what then needed to create a service that users would want to log into. One of the original services was GMail but their suite of services quickly grew.

If they have so many services that you can log into with your google account GMail, Google Drive, Google Plus, your Android devices do you let your user create different accounts for each of these services? No, that would be a nightmare.

Google provides a Single Sign On service that allows users to have a single username and password for all of their google services. This is great for the user; less passwords to remember.

This has several benefits to google as well:

Users are more likely to use a new product or service because they do not have to re-signup. They can just start using the new service.

Each new service they build doesn't have to reinvent the wheel with authentication and security. They can just build off of the existing Google SSO service.

Google can track user behavior across a wide variety of services. If you receive emails on a certain topic, browse Google maps for a specific location, and search for a certain phrase then they can predict that serving you an ad related to those 3 variables will most likely get you to click through earning them their fee from advertisers.


Google can even track you when you are not on their web pages or services. For more on the insane amount of data Google has on you in the bonus chapter on data plays.
//TODO: Insert real link to this

##Logging onto 3rd party stuff:
Google goes beyond allowing you to sign on to their services. They also allow 3rd party applications to use their Single Sign On service to track user identities and access user information from their various services.

Have you ever been prompted to "Login with your Google Account?" on a site that is not Google? That is their SSO in action. Facebook, Twitter, Github and many others are doing the same. T


##Why I advocate SSO for your PaaS:
People may not ever want to loggin to a 3rd party service with your login. That might not be something you want them to do anyway. Why is SSO still important?

If you took my advice about running multiple services for your various groups of functionality then you will not want users to have to create new logins for each new feature service. This will require a SSO services of some kind.

##OAuth:
OAuth is a protocol for securely sharing user data with 3rd party sites. It is an authentication process that allows you to decide what data your SSO Service exposes to which 3rd party services. Chances are you have been through this process a handful of times your self and never noticed.

For a more technically detailed look check out [http://oauth.net/2/](http://oauth.net/2/).


##Scope/Permissions:
Typically during the OAuth process the user will see a list of things the 3rd party application wants access to. Some examples that you might see in 100x in the future are as follows:

* Ability to read the list of communities the logged in user is associated with
* Ability to join community projects on the users behalf
* Ability to create comments on the users behalf

This is access to any data you are storing **Communities, Projects, Comments etc** and then specifically if the 3rd party service can **read** or **read and write** data on your behalf to the specific record set.

###When not to ask for user permission:
If you are just building an SSO service for your own internal uses and not for use by 3rd parties then you will not want to make users go through the OAuth process gain access to each feature service. You will want to just grant the feature service access to your users information.

I call these applications "SUPER" level applications. They don't have to jump through the hoops other applications have too to get your information because they are internal production services. In the core service where I register all other services there is a field I can set to indicate that a service is a "SUPER" level service.

####"Lab" level services:
In later chapters I talk about building a "Lab" level service. The Lab level allows your workforce to build innovations and test them in a safe way where there is little risk to damaging your image in the customers mind. More on this in later chapters.

##Conclusion:
Single Sign On is an important tool to help you tie everything linked to your innovation platform into a nice clean package.
