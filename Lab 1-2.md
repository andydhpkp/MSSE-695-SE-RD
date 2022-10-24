---
\usepackage[nottoc]{tocbibind}
---

# Table of Contents
  [🥼 The Full-stack Lab Series - (*Classic-stack*) 🦄](#-the-full-stack-lab-series---classic-stack-)
- [Table of Contents](#table-of-contents)
- [<img src="icons8-swiss-army-knife-64.png" alt="Swiss Army Knife" /> The Full-stack Lab Series - *'Classic-stack'*](#-the-full-stack-lab-series---classic-stack)
- [Introduction](#introduction)
- [Lab Series Organization & Structure](#lab-series-organization--structure)
  - [Overview of labs](#overview-of-labs)
  - [Recipes 📒](#recipes-)
  - [Field-book 📓](#field-book-)
  - [Full Stack Architecture](#full-stack-architecture)
    - [Early Developments](#early-developments)
      - [Extensibility](#extensibility)
      - [PHP](#php)
      - [Java Script](#java-script)
    - [3-Tier Architecture](#3-tier-architecture)
    - [Stacks](#stacks)
    - [IaaS, SaaS,](#iaas-saas)
  - [Continuous Integration and Delivery (CI/CD)](#continuous-integration-and-delivery-cicd)
- [Lab I - Linux Server Virtual Install 🔬](#lab-i---linux-server-virtual-install-)
  - [Introduction](#introduction-1)
  - [Purpose](#purpose)
  - [Objectives](#objectives)
  - [<div style="page-break-after: always;"></div>](#div-stylepage-break-after-alwaysdiv)
  - [## Recipe 1.0: 📒 Installing Ubuntu Server on Virtual Machine 📒](#-recipe-10--installing-ubuntu-server-on-virtual-machine-)
    - [Overview](#overview)
    - [9 Steps](#9-steps)
    - [Important Commands](#important-commands)
      - [Restart Server](#restart-server)
- [Lab II - Linux Server Install and Configuration 🔬](#lab-ii---linux-server-install-and-configuration-)
  - [Introduction](#introduction-2)
  - [Purpose](#purpose-1)
  - [Objectives](#objectives-1)
  - [**_NOTE._** *For full-stack development, we follow three stages of configuration management: Planning, Building, Testing.  Repeat.*](#note-for-full-stack-development-we-follow-three-stages-of-configuration-management-planning-building-testing--repeat)
  - [## Recipe 2.0: 📒 Installing Ubuntu Server on Metal 📒](#-recipe-20--installing-ubuntu-server-on-metal-)
  - [Overview](#overview-1)
  - [15 Steps](#15-steps)
    - [Important Commands](#important-commands-1)
      - [Restart Server](#restart-server-1)
  - [## Recipe 2.1: 📒 Server - Network Configurations 📒](#-recipe-21--server---network-configurations-)
  - [Overview](#overview-2)
  - [6 Steps](#6-steps)
    - [Important Commands](#important-commands-2)
      - [Access netplan configuration file](#access-netplan-configuration-file)
  - [3. <https://yaml.org/>](#3-httpsyamlorg)
  - [## Recipe 2.2: 📒 Server Security, Hardening & SSH Configuration 📒](#-recipe-22--server-security-hardening--ssh-configuration-)
  - [Overview](#overview-3)
  - [17 Steps](#17-steps)
    - [SSH Configuration and Hardening](#ssh-configuration-and-hardening)
      - [Access SSH Configuration files.](#access-ssh-configuration-files)
      - [Create non-root user with sudo privileges.](#create-non-root-user-with-sudo-privileges)
    - [Uncomplicated Firewall (UFW) Configuration](#uncomplicated-firewall-ufw-configuration)
      - [Configure Authentication Key pair.](#configure-authentication-key-pair)
      - [Logon to Server using SSH Keys.](#logon-to-server-using-ssh-keys)
    - [Disabling SSH Password Authentication](#disabling-ssh-password-authentication)
  - [Summary](#summary)
    - [Important Commands](#important-commands-3)
      - [Access netplan configuration file](#access-netplan-configuration-file-1)
  - [## Recipe 2.3: 📒 Ubuntu Server - Security Hardening (Cont'd.): Fail2ban, Whitelisting, Security Banner](#-recipe-23--ubuntu-server---security-hardening-contd-fail2ban-whitelisting-security-banner)
  - [Overview](#overview-4)
  - [?? Steps](#-steps)
    - [Installing and Configuring Fail2Ban](#installing-and-configuring-fail2ban)
    - [Whitelisting IP Addresses](#whitelisting-ip-addresses)
    - [Installing Security Banner](#installing-security-banner)
    - [and ...](#and-)
    - [and ...](#and--1)
  - [10. **_End of Recipe_**](#10-end-of-recipe)
  - [## Recipe 2.4: 📒 Server - Security Hardening (Cont'd.): Virtual Private Network (VPN)](#-recipe-24--server---security-hardening-contd-virtual-private-network-vpn)
  - [Overview](#overview-5)
  - [14 Steps](#14-steps)
    - [Before installation](#before-installation)
    - [Installation](#installation)
    - [Important Commands](#important-commands-4)
      - [Start/Stop/Restart/Status](#startstoprestartstatus)
      - [Secure Copy Protocol (SCP)](#secure-copy-protocol-scp)
    - [Definitions](#definitions)
    - [Resources](#resources)
  - [Recipe: 📒 Server - 'Never Finished' - Security Hardening 📒](#recipe--server---never-finished---security-hardening-)
  - [Recipe: 📒 Ubuntu Server - LAMP 📒](#recipe--ubuntu-server---lamp-)
- [Lab III - Linux Server - Services, Webservers and Databases 🔬](#lab-iii---linux-server---services-webservers-and-databases-)
- [Lab IV - Application Design & Development 🔬](#lab-iv---application-design--development-)
- [Lab V - Applications Design and Development🔬](#lab-v---applications-design-and-development)
- [Lab VI - UI/UX 🔬](#lab-vi---uiux-)
- [Lab VII - UI/UX 🔬](#lab-vii---uiux-)
- [Appendices](#appendices)
      - [Volumetric Analysis](#volumetric-analysis)
      - [Gravimetric Analysis](#gravimetric-analysis)
- [References](#references)
  - [| 9    |     |    |](#-9-------------)
  
  - [Recipe: 📒 Ubuntu Server - SSH Configuration 📒](#recipe--ubuntu-server---ssh-configuration-)
  - [Recipe: 📒 Ubuntu Server - Security Hardening 📒](#recipe--ubuntu-server---security-hardening-)
  - [Recipe: 📒 Ubuntu Server - VPN Configuration](#recipe--ubuntu-server---vpn-configuration)
  - [Recipe: 📒 Ubuntu Server - LAMP 📒](#recipe--ubuntu-server---lamp-)
- [Lab III - Linux Srver - Services, Webservers and Databases 🔬](#lab-iii---linux-srver---services-webservers-and-databases-)
- [Lab IV - Application Design & Development 🔬](#lab-iv---application-design--development-)
- [Lab V - Applications Design and Development🔬](#lab-v---applications-design-and-development)
- [Lab VI - UI/UX 🔬](#lab-vi---uiux-)
- [Lab VII - UI/UX 🔬](#lab-vii---uiux-)
- [Appendices](#appendices)
      - [Volumetric Analysis](#volumetric-analysis)
      - [Gravimetric Analysis](#gravimetric-analysis)
- [References](#references)














1.  Appendices](#Appendices-1)
   - [Lab-report Write-up Instructions](#subsection-a)
   - [Field-book Build Build Instructions](#subsection-a)
   - [Linux for Software Engineers Handbook](#subsection-a)


<div style="page-break-after: always;"></div>

# <img src="icons8-swiss-army-knife-64.png" alt="Swiss Army Knife" /> The Full-stack Lab Series - *'Classic-stack'* 
<!--🦄 --> 
<!-- <figure>
  <img src="icons8-swiss-army-knife-64.png" alt="Swiss Army Knife" />
   <figcaption>Fig: Swiss Army Knife</figcaption>
</figure> --> 

# Introduction
The *full-stack* lab series *classic-stack* is a sequence of ten laboratory investigations I created to teach and demonstrate the design, building, and deployment of full-stack architectures. The first architecture in this series is the *LAMP/LEMP* stack; what will be refered to here as *classic full-stack* or simply *classic-stack*. It is *classic* because it is mature, has: ample documentation; publically-availalbe components; examples and code base; and a large community of users who support its use.\
**_NOTE._** *This is not to say that other architectures do not meet these similar definitions, just that the *classic-stack* we will study here is *classic* for at least these reasons.*

# Lab Series Organization & Structure
 This is where you say things like ...we are going to first explore linux server administration. Specifically, we will ...

- Stage I - Linux Server Admin & Security
  - Webservers
  - Database Servers 
- Stage II - Building and Managing Multi-server Environments
  - Implementing Enterprise Software Services
  - Cloud Architecture
- Stage III - Web-based Software applications
  - Design
  - Development
  - Testing
  - Deploying
- Stage IV - 
Web-application Development and Deployment

## Overview of labs

## Recipes 📒
The recipes that are presented in the full-stack lab series are an authoritative set of instructions for *real* full-stack engineering *builds*. The builds encountered in the recipes will span the full-stack spectrum. The four domains we study in this series are Linux server administration and security; webserver and database integration and deployemnt; and front-end components and frameworks. The recipes have been tested and are specific problem-based, hands-on endeavors which have a declared build and test outcome. The recipes have are not easy, per se, they are desinged to be challenging. The recipes are a sub-sets of *Lab Investigations* and are used as a guide. Just like recipes you might follow for cooking, the recipes used here include specific instructions, build times, materials, equipment, and environment details. And, just like how recipes might be followed for cooking in the kitchen, the final product, in this case - build, is not always identical to what was described in the recipe. And, just like recipes followed in the kitchen, it may take several iterations to arrive at the final build of your liking.This is the nature of any craft. In other words, there will likely be modifications made or deviations from the exact instructions as you prepare your build. Take good notes in your field-book and be ready to someday soon write your own recipes!\
**_NOTE._** *The recipes have been written and *tested*. You can assume to a high level of certainty that the information and instructions are authoritative.*\
**_NOTE._** *The icon used to symbolize recipes is an image of a spiral-bound, not bound, book.*  

## Field-book 📓
(refer to field book instructions and videos)


## Full Stack Architecture
### Early Developments
Modern day web software is based on a series of technologies which have evolved over decades and includes a progression in technological development and innovation. And while there were major developoments over the last twenty years in computing and networking technolgies which are commonplace today, I am going to provide a brief history of web-software architecture in an effort to explain the emergence of and future of full stack as we know it today. In part, the web-software we experience today originated from developments in network and internet technologies, databases, as well as server-side and client-side technologies. For instance, in the early part of the twenty first century, most software was being developed to be installed on a client machine. While there was an early form of internet, including websites and portals which could be accessed via web-browser, these services were largely decoupled from the client-side application. The underlying language behind web-applications of that time were based on HTML (i.e., hypertext markup language), for which extensible variants emerged.  
#### Extensibility
In the early part of this century, extensible language variants emerged like XHTML (i.e., extensible hypertext markup language), and now XML. These developments allowed for web-pages to be broken into smaller components, and these components could interact with a webserver independently and asynchronously. The underlying technology became known as (AJAX) (i.e., asynchronous Java Script and XML). Extensbility, therefore allowed for an evolution in architecture where the *states* of elements of a given webpage could change based on user interaction. As we will see in a moment, the *view* layer in full stack architectures is based on this. 
#### PHP
Parallel to this was the development of scripting languages, like PHP. Before PHP, there were SQL (i.e., structured query language) databases and (RDMS) (i.e., relational database management servers). However, they were largely designed to be either server-side or client-side, and were not largely accessible through web applications. This changed, however with development of scripting languages like PHP. These scripting languages allowed web application to interact with the SQL database (server-side). This meant the application could interact with the database in ways that allowed customizability which not possible before. This progression allowed for the evolution of what is now known as *database-driven* web applications. With respect to full stack architectures, the *model* and *controller* are based on this progression. It should be noted, that while PHP scrips are used in conjunction with HTML, their function is largely server-side. Therefore, PHP is categorized as a server-side scripting language.
#### Java Script
Java Script, on the other hand is a client-side scripting language. The evolution of Java Script also took place during the early part of this century and has a history worth studying. However, the focus of this work here is on how full-stack architectures and the underlying technolgies and methods which support them. JavaScript is a dominant client-side scripting language and an essential technology for full-stack applications because of its utilities to control and manage interfaces, user interactions and experiences(UI/UX). In most full-stack applications, JavaScript represents the majority of the code-base for what is referred to as the *front-end* of the application. The *front-end* consists of more than just JavaScript, yet the client-side scripting is largely handled by JavaScript implementations. 

### 3-Tier Architecture
The exact form the evolution from HTML to XML and scripting languages took place is not essential here. What is important, however, is the dominant architecture that emerged from this progression. Most contemporary web applications are based on a *3-Tier architecture* or *MVC* (Model, View, Controller) pattern.
<figure>
  <img src="3TierMVC.png" alt="3-Tier Architecture and MVC Pattern" />
  <figcaption>Fig: 3-Tier Architecture and MVC Pattern</figcaption>
</figure>

As is shown in the figure above, a 3-Tier architecture is comprised of client, business logic, and database tiers. The client tier is considered the *front-end* and consists of the UI/UX components which are represented by HTML, CSS and JS. This tier is accessible to the user through a browser. This tier sends HTTP requests to the business logic layer and receives instructions for HTML pages to be built and viewed.The business-logic tier represents the *back-end* of the applciation. It is comprised of the webserver and application server. For our purposes in the *classic* full-stack series, the webserver will be either *Apache2* or *NGinx* (pronounced "engine-X"). Furthermore, the server on which the web-server and application server will be built will be Linux, either *metal* or *VPS* (virtual private server). The database tier is comprised of a database and a database server. For our purposes, the database will be of SQL (structured query language), in the form of MySQL or MariaDB. The database and database server are also considered part of the *back-end* of the application. For our study here, the database and database server will also be installed and configured on Linux server(s). The database tier can also be though to be part of the *back-end* of the application. For a more detailed account of software architectures, refer to *(Pyatt, 2018) Software Architecture Essentials*.     
**_NOTE._** The application server and the web-server may be the same in some designs. 
### Stacks
Collectively, the client tier, business logic tier and databse tier comprise what is referred to as the *stack*. Here we will be designing, building and deploying *LAMP* and *LEMP* stacks (Linux, Apache2, MySQL, PHP) and (Linux, NGinx, MySQL, PHP), respectively. There are other stacks which are available, like MEAN (Mongo, Express, AngularJS, NodeJS) and MERN (Mongo, Express, React, NodeJS). Our focus here will be *classic* stack development. The rationale for this is that a great many web-applications, over 80% as of this writing, are based on LAMP. Therefore, we will first build applications using a well known and establised architecture.

### IaaS, SaaS,

## Continuous Integration and Delivery (CI/CD)

<div style="page-break-after: always;"></div>


# Lab I - Linux Server Virtual Install 🔬

## Introduction
The *classic* full-stack architecture is referred to as a *LAMP stack*. This is a Linux server environment with an Apache2 webserver, a MySQL database, and a PHP backend. Due the the ubiquitous nature of PHP and MySQL, this remains an essential stack to master. Whether the server(s) are your *metal* or *metal* you are licensing  (i.e., VPS - virtual private servers) we will design, build and test Linux servers in the following lab. The classic full-stack is omnipresent. As of this writing, approximately 80% of web applications are runnning PHP (https://w3techs.com/technologies/details/pl-php), and over 75% of databases used for web applications are MySQL. Furthermore, over 96% of servers in the world are running Linux OS in some form, either Debian (Ubuntu) or Fedora (CentOS). There are other *flavors* as well but we are focusing on Ubuntu Server here. I could make the case further for the importance of this stack, however, I will turn my focus on the design and build of this architecture, including how to build, deploy and test applications running in it.

Modern equivalents of this stack use MariaDB, in place of MySQL (they are equivalent for our purpose here), and NGinx, (pronounced "engine-X"), a load-balancing technology, as the webserver. In which case the stack is referred to as *LEMP*. For our purposes, we will be exploring the LAMP/LEMP stack as our system architecture. We will develop database-driven web applications using one or more Linux servers. In these cases, the LAMP/LEMP will be comprised, at a minimum, of a *Linux server*; *Webservers* (Apache2 and NGinx), *SQL Database servers*, and *Front-end components* (HTML, CSS, JS. 

In this lab, we will begin exploring how to configure and deploy a Linux server as an environment to host database-driven web applications. We will first begin by installing and configuring Linux server, specifically Ubuntu Server, on a virtual machine.  

[^2]: insert architecture image from pyatt & lotfy]. In this lab, we are going to investigate how to install and configure a Linux server  (Ubuntu Server) to run on a virtual machine. This is prerequisite knowledge for the next lab where we will investigate how to install and configure a Linux server on *metal*.

[^1]: In the software engineering community there is concern that MySQL may eventually be licensed and no longer "free". As such, MariaDB, which is a *fork* of MySQL has also become popular as an SQL database. Both MySQL and MariaDB install in similar fashion on Linux OS. 
[^2]: Linux systems are based on one of two varieties. Debian is the kernel architecture for variants like Debian, while Fedora is akin to variants like Cent OS. 

## Purpose
The purpose of this lab is to investigate and explore how to install, configure, and deploy Linux OS on a virtual machine. Through this you will gain familiarity with this environment so you can begin designing and developing software in a Full-stack environment.
## Objectives
1. Complete a 1-page design sketch. 
2. Successfully complete installation of Linux server along with preliminary configurations: 
- Partitioning drives with LVM; 
- Network Configurations (netplan, static ip, dns); 
- Remote access (ssh, vpn); 
- User management; 
- Security (fail2ban; migrating from ssh to VPN; LAMP). 
2. Record progress and observations in fieldbook 📓.
3. Begin preparations for Lab-report which will be completed after *Lab II*.\
**_NOTE._** *For full-stack development, we follow three stages of configuration management: Planning, Building, Testing, Repeat. Consider the work for this lab to be in planning and building stages.*
<div style="page-break-after: always;"></div>
---
## Recipe 1.0: 📒 Installing Ubuntu Server on Virtual Machine 📒
---
*Date:* Jan 15, 2020\
*Author:* Kevin Pyatt\
*Category:* VM, Ubuntu Server Installation\
*Keywords:* server installation, virtual machine, ubuntu server\
*Hardware:* Desktop/Laptop PC, Mac or Pi\
*Software:* Linux, Windows or Mac OS, Virtual Box\
*Preliminary:* Review the following authoritative materials in preparation for Lab.
1. Installation guide for Ubuntu Server OS: https://help.ubuntu.com/lts/serverguide/index.html\
and/OR\
b. https://www.ubuntufree.com/ubuntu-18-04-server-guide/
2. Installation guide for Virtual box: https://www.virtualbox.org/manual/

### Overview
A great way to learn about Ubuntu Server is to build a virtual machine that can be configured to meet the design goals of a prototypical system. Prior to deploying Ubuntu Server onto metal a first step is to configure the OS in a Virtual Machine (VM) environment. In this recipe I show how to install Ubuntu Server on a VM.

### 9 Steps
1. Install and configure a virtual machine on your local development machine[^3]. In this recipe we are using Virtual Box.
2. Download *.iso* for Ubuntu Server. In this recipe we are using Ubuntu Server 18.04 LTS, although as of this writing LTS 20 is also avaialble. Pay attention to the directory in which this install is saved to. On a Linux machine it will be:
   ``` $/Downloads ```
3. Create a virtual machine and name it. Complete steps using defaults, unless there are specifications you need to follow which are different from default settings.\
**_NOTE._**  When prompted for partition type, choose LVM. We choose this option because this allows flexibility to resize partitions after install if need be.
4. Start Virtual Machine that you created. When prompted to select OS, choose the *.iso* for Ubuntu Server you saved previously.
5. Follow steps for install of Ubuntu Server. Use defaults, unless specifications for your project declare otherwise. Take good notes on settings and configurations you used for installation.
6. Complete installation and restart machine. ```$sudo shutdown now -r```
7. Continue to review installation guide for Ubuntu Server OS which is referenced above.
8. Explore, configure, test, document.
9.  **_End_ of recipe.**

---------------------------------------------------------------------------

[^3]: Development machine - the development machine you use for full-stack development should be a Linux environment, preferably Ubuntu, as the examples used in these labs are of this variety. While it is possible to configure your development environment to run a dual-boot configuration where one of the two OS is Linux, I highly recommend having one dedicated environment to run Linux.

### Important Commands
#### Restart Server
```$sudo shutdown now -r <--- restart server```

**Definitions:**\
LTS
: Long term support is a phrase used to describe the future support and continued research and development in and for a given operating system. In this case, Ubuntu. LTS versions are considered stable, are *patched*, which enhances security, and have a component and driver library that is frequently updated and maintained.\
VPS
: Virtual Private Server - this is a server that you pay a fee to access, control and configure. 

**Resources:**

1. https://help.ubuntu.com/lts/serverguide/index.html
2. https://www.ubuntufree.com/ubuntu-18-04-server-guide
3. https://www.virtualbox.org/manual

# Lab II - Linux Server Install and Configuration 🔬
## Introduction

As we saw previously, the *classic* full-stack architecture is referred to as a *LAMP stack*. This is a Linux server environment with an Apache2 webserver, a MySQL database, and a PHP backend. Modern equivalents of this stack use MariaDB, in place of MySQL (they are equivalent for our purpose here), and NGinx, (pronounced "engine-X"), a load-balancing technology, as the webserver. In which case the stack is referred to as *LEMP*. For our purposes, we will be exploring the LAMP/LEMP stack as our system architecture. We will build database-driven web applications on these systems. For our purposes, the LAMP/LEMP will be comprised, at a minimum, of a *Linux server*; *Webservers* (Apache2 and NGinx), *SQL Database servers*, and *Front-end components* (i.e., HTML, CSS, JS).\
In this lab, we will begin exploring how to configure and deploy a Linux server as an environment to host database-driven web applications. We will continue this investigation further by installing and configuring Linux server, specifically Ubuntu Server, on *metal*.  

## Purpose 
The purpose of this lab is to explore and gain mastery of the process neded to install and configure a Linux server.

## Objectives
1. Successfully complete installation of Linux server along with preliminary configurations: 
- Partitioning drives with LVM;
- Network Configurations (netplan, static ip, dns);
- Remote access (ssh, vpn);
- User management;
- Security (fail2ban; migrating from ssh to VPN; LAMP).
2. Record progress and observations in field-book📓.
3. Complete, present and submit for review a lab report.\
**_NOTE._** *For full-stack development, we follow three stages of configuration management: Planning, Building, Testing.  Repeat.*
---
## Recipe 2.0: 📒 Installing Ubuntu Server on Metal 📒
---
*Date:* Nov 27, 2020\
*Author:* Kevin Pyatt\
*Category:* VM, Ubuntu Server Installation\
*Keywords:* server installation, Infrastructure as a service (IaaS), ubuntu server\
*Hardware:* Desktop/Laptop PC, Mac or Pi, modem and router conected to internet\
*Software:* Linux\
*Preliminary:* 
- Review the following authoritative materials in preparation for Lab.\
1. Installation guide for Ubuntu Server OS: 
  - https://help.ubuntu.com/lts/serverguide/index.html
and/or
  - https://www.ubuntufree.com/ubuntu-18-04-server-guide
2. Installation guide for Virtual box: https://www.virtualbox.org/manual
- Successfully complete installation of Ubuntu Server on Virtual Machine as described in Recipe: "Installing Ubuntu Server on Virtual Machine"[insert hyperlink to this document].

## Overview
We are now ready to begin an installation of Ubuntu Server on *metal*. In the following recipe we are going to go through the steps to install and configure Ubuntu Server on a server we have access to and can configure to our liking. This recipe just handles the installation of Ubuntu Server OS.\
**_NOTE._** *Depending on the full-stack architecture you are building, it may also be appropriate to, instead of using your own *metal*, use a Virtual Private Server (VPS). However, in the first examples used in this guide, we are going to configure on our own *metal*.* 

## 15 Steps
1) Download .iso for Ubuntu OS; see: (https://releases.ubuntu.com/20.04/). Create USB installation drive. **_NOTE._** *If you are already using a Linux environment, you can simply download the .iso to your Linux development machine and use the *startup disk creator* tool which is likely already installed. If not, you can install this tool from the repository specific to your OS. If you are using Windows or Mac OS you can use a similar tool to create startup disk for .iso.*
2) Select language. If prompted for new installer, select install now or later.
3) Select keyboard layout.
4) Configure interface for server (i.e., enp0s3). Record this value for later.
5) Proxy configuration - skip this step.
6) Ubuntu archive mirror configuration - leave default mirror address unless otherwise specified.
7) Guided storage configuration - use entire disk, set-up LVM group. We will not encrypt storage on this install.
8) Storage configuration , review summary and continue.
9) Confirm destructive action.
10) Profile Setup - username; servername; password.
11) SSH Setup - select option to install OpenSSH server.
12) Featured Server Snaps - we are going to skip this step.
13) Installing system - this will take a bit of time. You can view log files to study what is happening on the server. Once complete reboot. You will be prompted to remove installation media. Do so, and continue with reboot.\
**_NOTE._** If not prompted for rebot, simply issue the folloing terminal command: ```$sudo shutdown now -r``` 
14) Login to server.
15) **_End_ of recipe.**

### Important Commands
#### Restart Server
```$sudo shutdown now -r <--- restart server```

**Definitions:**\
LVM - Logical volume management is a technology for partitioning and configuring kernels and drives on servers which allows for dynamic state changes where the volume sizes which are initially partiioned can be mdified over time. This type of partitioning management is preferred as it enhances sustainiability of server system. \
SSH - Secure shell is a server-side technology which allows for remote access from clients to server. SSH is configured through a series of steps which can enable allowing client-access to the server through a dedicated port, typically port:22. While allowing access to servers through SSH poses security risks, there are steps which can be taken to limit access, and enhance security. These include, changing port number, enabling password-less access, enabling end-to-end encryption and white-listing known ip addresses.  

LTS - Long term support is a phrase used to describe the future support and continued research and development in and for a given operating system. In this case, Ubuntu. LTS versions are considered stable, are *patched*, which enhances security, and have a component and driver library that is frequently updated and maintained.\
VPS - Virtual Private Server - this is a server that you pay a fee to access, control and configure. 

**Resources:**

1. https://help.ubuntu.com/lts/serverguide/index.html
2. https://www.ubuntufree.com/ubuntu-18-04-server-guide

---
## Recipe 2.1: 📒 Server - Network Configurations 📒
---
*Date:* Nov 28, 2020\
*Author:* Kevin Pyatt\
*Category:* Ubuntu Server Installation, Network Configurations\
*Keywords:* server installation, ubuntu server, network configurations, static ip\
*Hardware:* Desktop/Laptop PC, Mac or Pi, modem and router conected to internet\\
*Software:* Linux\
*Preliminary:* Review the following authoritative materials in preparation for Lab.\

1. Installation guide for Ubuntu Server OS: <https://help.ubuntu.com/lts/serverguide/index.html>
- Before starting this recipe, complete Ubuntu Server installation as described in Recipe: "Installing Ubuntu Server on Metal".

## Overview
At this point we are ready to set-up and configure networking for our Ubuntu Server. Specifically, we will be setting up a *static ip* configuration so that our server can be accessed for services we anticipate to build out in our full-stack environment. This recipe describes how to setup and configure netplan for static ip on our Ubuntu Server.

## 6 Steps
1) Configure static IP address using Netplan.
- Get the ethernet name of network device used on our server
``` $ip a```
In the example used here our ethernet name is *enp2s0*.
2) Access and list the contents of the netplan directory:
```$cd /etc/netplan```
```$ls```
- You should see the output resembling something similar to: ``` 00-installer-config.yaml ```. We can view the contents of this file in its default form:
```$sudo nano 00-installer-config.yaml```\
**_NOTE._** *Netplan is the 'new' configuration method for Linux server editions after 2018. The configuration files for netplan are .yaml extension. For more on .yaml, which actually stands for *"YAML Ain't Markup Language"* see https://yaml.org/.*
3) We are going to create a *new* configuration file called *99-config.yaml*. We do this as follows from the /etc/netplan directory:
```$sudo nano 99-config.yaml ```
- We will be prompted to enter information into this new file. We will enter the information shown below.\
**_NOTE._** *Use the ethernet name specific to the server you are configuring. The same is true with the addresses, gateways, and nameservers.* 
``` 
network:
  version: 2
  renderer: networkd
  ethernets:
    enp0s25:
     dhcp4: no
     dhcp6: no
     addresses: [96.88.85.241/24]
     gateway4: 96.88.85.246
     nameservers:
       search: [pyattcloud.net]
       addresses: [96.88.85.241, 1.1.1.1]
```
- Save the configuration and exit.
4) Restarting/testing networking. We are now going to test our netplan configuration using the this command:
```$sudo netplan apply```
- There should be no output after issuing this. If there is, then there is likely an error in the configuration. If this happens, issue the following command to debug: ```$sudo netplan --debug apply```\
**_NOTE._** The most common error that happens here is with spacing (i.e., two space indent for version, four spaces for interface name, etc...). 

5) We have successfully completed network configuration for static ip on our Ubuntu server.
6) **_End_ of recipe.**

### Important Commands
#### Access netplan configuration file
```$sudo nano 99-config.yaml ```

**Definitions:**\
YAML - this is a python extension in the form of .yaml that is used in Netplan configuration files in Linux. It stands for 'Ain't Markup Language' see https://yaml.org/.

**Resources:**
1. <https://help.ubuntu.com/lts/serverguide/index.html>
2. <https://www.ubuntufree.com/ubuntu-18-04-server-guide/>
3. <https://yaml.org/>
---

## Recipe 2.2: 📒 Server Security, Hardening & SSH Configuration 📒
---
*Date:* Nov 28, 2020\
*Author:* Kevin Pyatt\
*Category:* Ubuntu Server Installation, Security Configurations\
*Keywords:* server installation, ubuntu server, security configurations, ssl, sever hardening\
*Hardware:* Desktop/Laptop PC, Mac or Pi, modem and router conected to internet\\
*Software:* Linux\
*Preliminary:* Review the following authoritative materials in preparation for Lab.

1. Installation guide for Ubuntu Server OS: <https://help.ubuntu.com/lts/serverguide/index.html>
2. How to Harden your Ubuntu 18.04 Server <https://medium.com/@BaneBiddix/how-to-harden-your-ubuntu-18-04-server-ffc4b6658fe7>
- Before starting this recipe, complete Ubuntu Server installation as described in Recipe: "Installing Ubuntu Server Network Configurations".

## Overview
At this point we now have an Ubuntu Server that is configured for static ip. And, this server also has OpenSSH installed, which will be the first way we will provide remote access to our server. In this recipe we will be setting up SSH access so that we can begin accessing our server remotely. Before we do, however, there are some preliminary security configurations we want to do before we make it *live*. In its current form, our server is vulnerable. If we go live now, our ip address will be discoverable and accessible from most any address in the world. Consequently it will be prone to *brute-force* attacks in a matter of minutes. Our server, therefore, is in what I refer to this as 🕸️ *white Spider* state *(see definition)*. And while there are a great many steps we can take to secure our server, there are *five* essential steps we are going to do right away, before we go live. This is our preliminary *hardening* or securing of our server. We will go into more depth on server security in later labs. **_NOTE._** *In the near future, we will disable SSH, but we will want VPN set-up before we do this. So, we are going to setup SSH access, then VPN, then turn off SSH. In this recipe, however, we are only handling SSH.*

## 17 Steps

### SSH Configuration and Hardening
#### Access SSH Configuration files. 
1) The SSH configuration files that are installed on our initial server install are in /etc/ssh. Go ahead and list this directory to view contents.
```$cd /etc/ssh ```
```$ls```\
**_NOTE._** If for some reason OpenSSH was not installed, you can do so now by issuing the following command:\
``$sudo apt-get install openssh-server``
- You will see several files listed in the ssh directory. One in particular called: *sshd_config*. We are going to make a backup of this file in its original form by issuing the following command:\
```$sudo cp /etc/ssh/sshd_config /etc/ssh/backup.ssh_config ```
- We are now ready to access the original *sshd_config* for modification using the following command from the /etc/ssh directory:\
```$sudo nano sshd_config```
- Review the information in this file as there is pertient information about SSH configurations to pay attention to.\
**_NOTE._** *Information in this file following *#* is commented out. So, for instance, as it shows now, *#Port 22* is commented out.*
2) Change default port from 22 to something obscure, in this case, *6022*. This is an arbitrary number.\
**_NOTE._** *It is important to change the default SSH port. Potential hackers can easily scan servers for open ports, like 22. By changing this port it adds another layer of security, albeit minor.*
- Delete the *#* sign to make the port active. Save changes and exit.\
**_NOTE._** *In later steps we will need to configure our firewall to allow access to this port.* 
#### Create non-root user with sudo privileges.
The reason for this is that the user *root* can easily be used upon which passwords could be guessed and access could be gained. We are going to remove password authentication in later steps to provide further protection.

3) Issue the following commands in terminal to add user and modify provileges to superuser (i.e., sudo).\
   ``$sudo adduser <username>``\
   ``$sudo usermod -aG sudo <username>``\
   ``$su — <username>``\
**_NOTE._** *Username should be uncommon. For a list of commonly hacked user names you can easily perform a web-search to get an idea. Use strong password here as well. Specifically, your password should meet the requirements for strength of 16 characters,including a variety of symbols, numbers, and upper and lower case letters. Here is an example of a strong password:  *@xd926A#vXLU&a\f*. Consider using a password generator for this, here is one for example: https://passwordsgenerator.net/*

### Uncomplicated Firewall (UFW) Configuration
UFW is a firewall technology that comes built in most Linux systems, including Ubuntu Server. The main function of UFW is to monitor access to our server via open ports. There are a great many other functions for which  UFW is responsible. Our main focus here will be port management. If you have followed the steps to this point, then the Ubuntu Server you are configuring does not currently have any open *ports*. It has a static ip configured, but the ports are likely blocked. This is because the default state of our server begins with *ports* closed. We have to open them. This will give us remote access. This is analagous to when you install a faucet in a sink, or a switch in a room, the default states are *off*, as in no water, or no electricity. The same is true with server ports, their default state is *off*, as in *no flow of electrons*. We want the *water* of our server to flow at this point.\
**_NOTE._** From a security architecture perspective, it is not good practice to open ports for SSH. It woud be prefered to use Virtual Private Network instead.\
**_NOTE._** The configuration directory for UFW is ```$etc/ufw```. You can access this directory for further information regarding UFW configurations.

4) Check state of UFW. ```$sudo systemclt status ufw```\
**_NOTE._** One of the services that should have been installed when we installed our Ubuntu OS is UFW. 

<!---<img src="SystemCtlScreenDump.png"
     alt="Screen shot of terminal output for UFW satus"
     style="float: left; margin-right: 10px;" />
-->

<figure>
  <img src="SystemCtlScreenDump.png" alt="Screen shot of terminal output for UFW satus" />
  <figcaption>Fig 1: Output of UFW Status</figcaption>
</figure>

5) Enable UFW. The output in the previous step showed UFW is active. Now we are going to see the default status of UFW with respect to ports. ```$ufw status```\
If the output is *inactive*, then you will need to issue *enable* command. ```$sudo ufw enable```
- Generally speaking, after UFW is enabled, it does not restart until system restart. Therefore, we should also reload UFW for these changes to take effect. Here is how: ```$sudo ufw reload  ```.

6) Open SSH port. Now we are going to open up our SSH port. The default port for SSH is *port 22*. Based on our work in the previous recipe, we changed this port to *6022*. So, we are going to need to enable this port for SSH access. We do this with the following command: ```$sudo ufw allow 6022```. You should see an output similar to what is shown here.\
**_NOTE._** As is shown below, port 6022 is open, as is Apache. Port 80 is closed. If you do not have these same configurations at this point, that is ok, we will configure Apache and HTTP (i.e., port 80) in later recipe when we configure LAMP.

<figure>
  <img src="UFWPortStatus.png" alt="Screen shot of terminal UFW port status" />
  <figcaption>Fig 1: Output of UFW Status</figcaption>
</figure>

#### Configure Authentication Key pair. 
We are going to want to set up our SSH access to be password-less, but we will use an end-to-end (E2E) encryption key for access. This will prevent brute-force password attacks. The concept behind this is that we will have a key pair where one key is stored on the client machine and the other is stored on the server. Here is how we go about this.

7) First, determine if there are keys on client machine. ```$ls -l ~/.ssh/id_*.pub``` . If the response is 'there are no keys', then we will have to generate them as follows: \
  ```$ssh-keygen -t rsa -b 4096 -C "your_email@domain.com``` \
  This will generate a key pair. The output will show the default directory:
  ``` 
  Output
  Enter file in which to save the key (/home/username/.ssh/id_rsa):
  ```
8) Select this directory and hit enter. You will be prompted to enter a password associated with this. **_NOTE._** *Adding this password provides another layer of security in case someone were to gain access to client or server, they would need password to obtain key pair.*
- The key should now be installed on client machine. We can check this by issuing: ```$ls -l ~/.ssh/id_*.pub```. You should see the key file:``` /home/username/.ssh/id_rsa.pub```
9) Copy public key to server. Now all we need to do is copy this file to the server we want to access. We will use a utility ```called ssh-copy-id```.
- Here is the command we issue to copy key file from client to server:\
```$ssh-copy-id remote_username@server_ip_address```
10) Enter remote username when prompted.
- The user will then be authenticated.\
**_NOTE._** *The public key *~/.ssh/id_rsa.pub* will be appended to the remote user *~/.ssh/authorized_keys* file and connection will be closed.*\
**_NOTE._** *If the copy utility is not available, you can use the following command for this action:* 
  ```
  $cat ~/.ssh/id_rsa.pub | ssh remote_username@server_ip_address "mkdir -p ~/.ssh && chmod 700 ~/.ssh && cat >> ~/.ssh/authorized_keys && chmod 600 ~/.ssh/authorized_keys"
  ```
#### Logon to Server using SSH Keys. 
Now that we have our ssh keys configured for client access to server, we can login with SSH.

11) Login to server with SSH by issuing the following command:\
  ```$ssh remote_username@server_ip_address```\
  **_NOTE._** *If you have not entered a password for access, you will be prompted to do so. Once this is entered, the next time you login you will no longer be prompted for this.*
### Disabling SSH Password Authentication
Now we are going to revisit our SSH configuration file on our server to take some preliminary actions to increase security. In its current form, any would-be hacker could attempt to access our server via SSH through our SSH port (i.e., 6022). While the hacker would need to correctly guess username and password, given enough time, this is one way servers are compromised. To prevent this, we are going to disable password authentication. This won't close the port, but it will make it so that someone would need our key pair to access our server through SSH.\
12) Login to server via SSH: ```$ssh username@server_ip - p 6022```\
13)  Now we are going to access the configuration file: ```$sudo nano /etc/ssh/sshd_config```\
14)  Find the following sections and make the changes seen here: 
  ```
  PasswordAuthentication no
  ChallengeResponseAuthentication no
  UsePAM no
  ```
15) Exit and save file. Restart ssh service with:
```$sudo systemctl restart ssh```
16)  Test access once more to server via SSH by logging off and logging in via SSH without password authentication.
17)  **_End_ of recipe.**

## Summary
In this recipe we configured UFW and SSH access to our server which involved setting the port for SSH access, as well as generating and storing key pairs on our client and server machines. Following this, we tested access through SSH and password authentication, and then disabled password authentication and tested this once more. At this point we have taken preliminary steps to harden our server and increase the security of our server. In the next recipe, we are going to continue with security hardening by installing fail2ban and whitelisting ips that are accessing our server and installing a virtual private network (VPN).

### Important Commands
#### Access netplan configuration file
```$sudo nano 99-config.yaml ```

**Definitions:**\
**_E2E_** - End-to-end encryption is a server technology where a key pair is generated and only shared between client machine and server. If the client attempts to connect to the server without the key or, if the client connects with a server that is 'spoofed' (i.e., a different server than the origial, as is used in man-in-the-middle attacks) then access will be denied.

**_SSH_** - Secure shell is a server-side technology which allows for remote access from clients to server. SSH is configured through a series of steps which can enable allowing client access to the server through a dedicated port, typically port 22. While allowing access to servers through SSH poses security risks, there are steps which can be taken to limit access, and enhance security. These include, changing port number, enabling password-less access, enabling end-to-end encryption and white-listing known ip addresses.

UFW - Uncomplicated firewall is a firewall technology that comes built in most Linux systems, including Ubuntu Server. The main function of UFW is to monitor and control access to our server via open ports. There are a great many other functions for which  UFW is responsible.
YAML - this is a python extension in the form of .yaml that is used in Netplan configuration files in Linux. It stands for 'Ain't Markup Language' see https://yaml.org/.

White Spider 🕸️ - This is a phrase used to describe the state of a server before it is *hardened*, and when it is vulnerable to security breaches. A server is typically in a *white spider* state the moments approaching, moments of, and moments after -  a server goes *live*. This is the most vulnerable stage of a server's lifecycle. This is similar to a spider. The most vulnerable stage of its life is right after it molts when it's shell is soft and it is white in color. In this stage it is largely defenseless and offenseless - prone to harm. As such, spiders molt at night. The same principle can be applied to server deployment - the moment a server goes live. So *hardening* the server is akin to the spider's shell hardening and camoflauging. So, we are *hardening* the *white spider* in this case.

**Resources:**
1. <https://help.ubuntu.com/lts/serverguide/index.html>
2. <https://www.ubuntufree.com/ubuntu-18-04-server-guide/>

---
## Recipe 2.3: 📒 Ubuntu Server - Security Hardening (Cont'd.): Fail2ban, Whitelisting, Security Banner
---
*Date:* Nov 28, 2020\
*Author:* Kevin Pyatt\
*Category:* Ubuntu Server Installation, Security Configurations, Server Hardening\
*Keywords:* server installation, ubuntu server, security configurations, whitelisting, fail2ban, VPN\
*Hardware:* Desktop/Laptop PC, Mac or Pi, modem and router conected to internet\\
*Software:* Linux\
*Preliminary:* Review the following authoritative materials in preparation for Lab.

1. Installation guide for Ubuntu Server OS: <https://help.ubuntu.com/lts/serverguide/index.html>
2. How to Harden your Ubuntu 18.04 Server <https://medium.com/@BaneBiddix/how-to-harden-your-ubuntu-18-04-server-ffc4b6658fe7>
- Before starting this recipe, complete preliminary security hardening as described in Recipe: "Preliminary Security Hardening & SSH Configuration".

## Overview
At this point we now have completed the preliminary security hardening steps for our Server. As we discussed earlier, security for our server takes place in three stages: *preliminary*, *continued*, and *ongoing*. We are going to continue hardening our server in this recipe by installing a service called *fail2ban*. This service logs attempted access to our server by storing ip address, access points attempted, and number of attempts, as well as other pertinent information. With fail2ban, we specify the number of failed attempts allowed, and then block the ip for future login attempts. We are also going to *whitelist* the IPs of known users who will be accessing this server. This will make it so any ip not whitelisted will be blocked. Lastly, we are going to install a virtual private network (VPN) and configure this in place of SSH access. VPN is more secure than SSH because the access port is not easily visible to potential hackers like our "open" SSH port. 

## ?? Steps
### Installing and Configuring Fail2Ban
1) We will first begin by checking if fail2ban is installed and installing it if it is not.\
```$systemctl status fail2ban```
- If the service is not installed, then go ahead and do so by issuing:\
```$sudo apt-get install fail2ban```
- Now if we run staus we should see service is installed and running.
2) Access the directory for fail2ban config files at: ```$cd/etc/fail2ban```. The output will look something similar to what is shown in the figure below.
<figure>
  <img src="Fail2banDir.png" alt="Fail2ban directory" />
  <figcaption>Fig ?: Output of Fail2ban Directory</figcaption>
</figure>

- Here we see ten files, two of which are configuration files we will not modify: *fail2ban.d*, and *fail2ban.conf*. These files can be modified on system updates, so we are going to leave them as is. 
- We will now turn our attention to the files we can modify. The precedence for modifications will follow the order shown here:
  - /etc/fail2ban/jail.conf
  - /etc/fail2ban/jail.d/*.conf
  - /etc/fail2ban/jail.local
  - /etc/fail2ban/jail.d/*.local

- For our basic configuration, we will work on the first one shown above. Issue the following command to read this file: ```$sudo nano /etc/fail2ban/jail.conf```. We are only going to study the information here and then close. 

3) Make copy of *jail.conf*. We are next going to copy this file to jail.local by issuing the following command: ```$sudo cp jail.conf jail.local```

### Whitelisting IP Addresses
4) Now we are going to modify *jail.local*. Type ```$sudo nano jail.local```. 
   
<figure>
  <img src="Whitelisting.png" alt="ignoreip" />
  <figcaption>Fig ?: Fail2ban Whitelising with ignoreip</figcaption>
</figure>

- Specifically, we are going to find *ignoreip* and uncomment the # in front of it. We can then add known ip addresses for which we want to give access to our server. Simply add these addresses and then save and exit.
- We have now completed essential steps to harden our server. We can monitor access to our server through a variety of ways. We can monitor the jail.log file to identify banned ips which have attempted to access our server. We can also monitor the access logs. To do this, issue the following command:\
``` $ grep "Failed password" /var/log/auth.log```
- The output of this will give you the ip addresses of systems which have attempted to access your server.

### Installing Security Banner
### and ...
### and ...

10. **_End of Recipe_**
---
## Recipe 2.4: 📒 Server - Security Hardening (Cont'd.): Virtual Private Network (VPN)
---
*Date:* Dec 03, 2020\
*Author:* Kevin Pyatt\
*Category:* Ubuntu Server Installation, Security Configurations, Server Hardening, Virtual Private Network\
*Keywords:* server installation, ubuntu server, security configurations, VPN\
*Hardware:* Desktop/Laptop PC, Mac or Pi, modem and router conected to internet\
*Software:* Linux\
*Preliminary:* Review the following authoritative materials in preparation for Lab.

1. Installation guide for Ubuntu Server OS: <https://help.ubuntu.com/lts/serverguide/index.html>
2. How to Harden your Ubuntu 18.04 Server <https://medium.com/@BaneBiddix/how-to-harden-your-ubuntu-18-04-server-ffc4b6658fe7>
3. https://www.cyberciti.biz/faq/ubuntu-18-04-lts-set-up-openvpn-server-in-5-minutes
- Before starting this recipe, complete preliminary security hardening as described in Recipe: "Preliminary Security Hardening & SSH Configuration".

## Overview
One vulnerability that exists on our current server system is access through SSH. While we have changed the default port, created encrypted keys for access through non-password accounts, we still have an open port that can be easily found through simple networking scans which most hackers are well equipped. We are going to setup a Virtual Private Network (VPN) which will allow us to access the server through an even more secure means, and we will then shutdown SSH after we configure VPN. We are going to use SSH access while we are setting up and configuring VPN, however.

A Virtual Private Network (VPN) is a technology that allows for connection of a client machine to a server through a dedicated and encrypted port. This is an essential technology that ensures a highly secure environment for you to access the internet and online resources. Any time we access the internet form our client machine over a public connection can result in data and internet traffic being intercepted. VPN helps with this and is an essential tool for protecting your data, privacy and internet usage in a way that is diccicult to intercept or track. 

## 14 Steps
### Before installation
1) Update and upgrade your machine: ```$sudo apt update | apt upgrade```
2) Identify your IP using ```$ip a```
3) Review information for file transfer from server to local machine. Specifically, using SCP or SMTP.
### Installation
1) Download and Install *openvpn* as follows: ```$wget https://git.io/vpn -O openvpn-install.sh```
2) Change permissions with chmod: ```$chmod +x openvpn-install.sh```\
**_NOTE._** *The directory for this installation is* ```/etc/openvpn```.
3) Run openvpn-install.sh: ```$sudo ./openvpn-install.sh```  
**_NOTE._** *During this time you will specify IP address, NAT (if there is one), protocol, port (default is 1194), DNS (use 1.1.1.1), DNS [1-5], Client Name.*\
**_NOTE_.** *At this stage, on the server, there should be a file called "~/desktop.ovpn". You will need to get this copied over to the client machine as shown in next step.*
4) Transfer deskktop.ovpn from server to client machine:\
	```$sftp kevin@173.8.254.145:'desktop.ovpn' Desktop/```\
**_NOTE_.** *In this example I used *sftp* for the file transfer, although *scp* should also work. I also used *aquarius.ovpn* as the file name instead. I changed the name in preparation for multiple VPNs.* *Specifically:* ```$sftp kevin@173.8.254.145:'aquarius.ovpn' Desktop/```
5) Install openvpn on Linux Client: ```$sudo apt install openvpn```\
**_NOTE_.** *There are other clients you can install and run using Android, Windows or iOS. See lab reference below for instructions.*
6) Copy desktop.ovpn to openvpn directory on client machine:\
	```$sudo cp desktop.ovpn /etc/openvpn/client.conf```
7) Test Connectivity: ```$sudo openvpn --client --config /etc/openvpn/desktop.conf```	
8) Connect Client to VPN on server:```$sudo systemctl start openvpn@client # <--- start client service```
<!-- this needs to be fixed --->
9) Verify/test Connectivity. Ping to the OpenVPN server gateway:\
```$ping 10.8.0.1```
10) Debugging: ```$journalctl --identifier ovpn-server```
11) **_End of recipe_.**

### Important Commands
#### Start/Stop/Restart/Status
```$sudo systemctl stop openvpn@server # <--- stop server```\
```$sudo systemctl start openvpn@server # <--- start server```\
```$sudo systemctl restart openvpn@server # <--- restart server```\
```$sudo systemctl status openvpn@server # <--- get server status```

#### Secure Copy Protocol (SCP)
```$scp remote_username@10.10.0.2:/remote/file.txt /local/directory```

### Definitions

### Resources
1) https://help.ubuntu.com/lts/serverguide/index.html
2) https://www.ubuntufree.com/ubuntu-18-04-server-guide/
3) https://www.cyberciti.biz/faq/ubuntu-18-04-lts-set-up-openvpn-server-in-5-minutes/

---

## Recipe: 📒 Server - 'Never Finished' - Security Hardening 📒
- for this section, review security hardening techniques in field book. Consider renaming this recipe, or adding another recipe called advanced security for Full Stack Arcitectures.

## Recipe: 📒 Ubuntu Server - LAMP 📒

# Lab III - Linux Server - Services, Webservers and Databases 🔬
- in this section, you are going to build out services. review presentation documentation. examples of services include: email, rocketchat?, moodle, canvas, wordpress framework. 
# Lab IV - Application Design & Development 🔬
- have students build-out their own full-stack r&d site.
- reaction master
- continuing build on ecosystem
# Lab V - Applications Design and Development🔬

# Lab VI - UI/UX 🔬

# Lab VII - UI/UX 🔬

# Appendices

Chemical Equations
#### Volumetric Analysis
1. H<sub>2</sub>SO<sub>4 </sub><sub> *(aq)*</sub> + 2NaOH<sub> *(aq)*</sub> &rarr; 2H<sub>2</sub>O<sub> *(l)*</sub> + 2Na<sup>+</sup><sub> *(aq)*</sub> + SO<sub>4</sub><sup>2-</sup><sub> *(aq)*</sub>

#### Gravimetric Analysis
1. 2Mg<sub> *(s)*</sub> + O<sub>2</sub><sub> *(g)*</sub> &rarr; 2MgO<sub> *(s)*

Miscellaneous links and images
<img src="./BunsenBurner.svg" alt="Bunsen Burner" style="width:75px;"/>


<script src="//yihui.org/js/math-code.js"></script>
<!-- Just one possible MathJax CDN below. You may use others. -->
<script async
  src="//mathjax.rstudio.com/latest/MathJax.js?config=TeX-MML-AM_CHTML">

</script>

\frac{\frac{1}{x}+\frac{1}{y}}{y-z}

Recipes for Security Testing Linux Server

``` $ grep "Failed password" /var/log/auth.log```


# References
- add bibliograpic references here

\listoffigures

| Time |Mon  |Tue |Wed| 
| :--- | :---|:---|:---|
| 8    |     |    |
| 9    |     |    |
| 9    |     |    |
| 9    |     |    |
---

|Day            |Availability
| :--- 		| :---                    |
|Tue Dec 8	|available after 2 pm EST |
|Wed Dec 9 	|not available            |
|Thu Dec 10 	|available between 3-4 EST|
|Fri Dec 11	|available                |
|Mon Dec 14	|not available                  |
|Tue Dec 15	|available                      |
|Wed Dec 16 	|not available                  |
|Thu Dec 17 	|available between 8am - 2pm EST|
|Fri Dec 18	|available between 10-12 EST    |
