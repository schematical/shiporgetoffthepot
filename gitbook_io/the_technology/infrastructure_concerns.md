# Infrastructure Concerns
This chapter gets kinda technical and there are a million ways to set up your servers. I mainly want to outline some architectual concerns you will want to keep in mind.

##A little history:
When the internet started out the computers that made up the internet, servers, were hosted in colleges and by the goverment. Eventually hobbiest started turning their home computers into servers. Once people started to realize there was money to be made hosting companies started to emerge. Typically there were two types of hosting at first.

###Shared Hosting:
This is when multiple customers would have their websites hosted on a single server. This means the servers resources are shared among multiple people. Its fine for hoby websites but if one website being hosted on that server gets a lot of traffic it eats up all of the resources.  The other websites will slow down to a crawl.

###Dedicated Hosting:
Another option is dedicated hosting. This means that the hosting company actually sets up and installs a peace of phyical hardware that is yours. This is great because your not sharing resources. The problem is that the hardware is expensive and costly to scale up.

###Welcome to the cloud:
Eventually companies like Amazon that had invested in a surplus of server infrastructure wanted a better way to resell that serverspace to customers looking to host a website. They started using virtulization. This is the process where a host operating system boots up and runs several child instances. These instances are basically their own running computers with their own operating system, dedicated memory, etc.

It is just like running your own dedicated server as described above but with out any of the hardware setup costs because they are meirly processes running on a much larger computer. The bottom line is virtulization is much cheaper and can be scaled up much faster then the other hosting options.

Look [http://en.wikipedia.org/wiki/Virtualization](http://en.wikipedia.org/wiki/Virtualization) for more information on virtulization.

###Hosting your services:
Earlier we talked about how to split your product up into services that can be focused on by dedicated cross functional teams. As you build your services you will find that each service will have different needs. Some high traffic services will have a lot of computing power. Other services may need to maintain a lot of persistant state connections; for example chat services.

Since booting up new servers is easy and cost effecent I recomend running your production services their own virtulized servers.

##DNS:
I typically run each service on its own subdomain. You can run them on their own domain and sometimes you will but that can get expensive because domains cost money to aquire.

Here is an example of how we are setting things up for 100x global:

* The core app at `100xglobal.com`.
* The Membership Application and Payment services are at `members.100xglobal.com`.
* The email servers are at `email.100xglobal.com`
* The socket server for real time notificaitons are at `socket.100xglobal.com`
* Someday in my or one of my teams 20% time I hope we will build out an events managment system that will most likely live at `events.100xglobal.com`


###Load balencing

####Databases:

####CDN- S3:


###Multiple enviroments:





##Pratical Tip:
Hiring an infrastructure guy


