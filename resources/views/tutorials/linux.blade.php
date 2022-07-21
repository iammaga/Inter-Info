@extends('layouts.lang')

@section('title-block')
Linux
@endsection

@section('contents')
    <img src="{{url('/images/linux.jpg')}}" width="100%" height="500px"/>
    <h3>What is Linux?</h3>
    <p>Looking to get started in Linux? Develop a good working knowledge of Linux using both the graphical interface and command line across the major Linux distribution families with The Linux Foundation’s Intro to Linux online course. Enroll for free here. (Este curso también está disponible en español. Haga clic aquí para Introducción a Linux.)</p>

    <p>From smartphones to cars, supercomputers and home appliances, home desktops to enterprise servers, the Linux operating system is everywhere</p>

    <p>Linux has been around since the mid-1990s and has since reached a user-base that spans the globe. Linux is actually everywhere: It’s in your phones, your thermostats, in your cars, refrigerators, Roku devices, and televisions. It also runs most of the Internet, all of the world’s top 500 supercomputers, and the world’s stock exchanges.</p>

    <p>But besides being the platform of choice to run desktops, servers, and embedded systems across the globe, Linux is one of the most reliable, secure and worry-free operating systems available.</p>

    <p>Here is all the information you need to get up to speed on the Linux platform.</p>

    <h3>Why use Linux?</h3>

    <p>This is the one question that most people ask. Why bother learning a completely different computing environment, when the operating system that ships with most desktops, laptops, and servers works just fine?</p>

    <p>To answer that question, I would pose another question. Does that operating system you’re currently using really work “just fine”? Or, do you find yourself battling obstacles like viruses, malware, slow downs, crashes, costly repairs, and licensing fees? If you struggle with the above, Linux might be the perfect platform for you. Linux has evolved into one of the most reliable computer ecosystems on the planet. Combine that reliability with zero cost of entry and you have the perfect solution for a desktop platform.</p>

    <p>That’s right, zero cost of entry… as in free. You can install Linux on as many computers as you like without paying a cent for software or server licensing.</p>

    <p>Let’s take a look at the cost of a Linux server in comparison to Windows Server 2016. The price of the Windows Server 2016 Standard edition is $882.00 USD (purchased directly from Microsoft). That doesn’t include Client Access License (CALs) and licenses for other software you may need to run (such as a database, a web server, mail server, etc.). For example, a single user CAL, for Windows Server 2016, costs $38.00. If you need to add 10 users, for example, that’s $388.00 more dollars for server software licensing.  With the Linux server, it’s all free and easy to install. In fact, installing a full-blown web server (that includes a database server), is just a few clicks or commands away (take a look at Easy LAMP Server Installation to get an idea how simple it can be).</p>

    <p>If zero cost isn’t enough to win you over–what about having an operating system that will work, trouble free, for as long as you use it? I’ve used Linux for nearly 20 years (as both a desktop and server platform) and have not had any issues with ransomware, malware, or viruses. Linux is generally far less vulnerable to such attacks. As for server reboots, they’re only necessary if the kernel is updated. It is not out of the ordinary for a Linux server to go years without being rebooted. If you follow the regular recommended updates, stability and dependability are practically assured.</p>

    <h3>Open source</h3>

    <p>Linux is also distributed under an open source license. Open source follows these key tenants:</p>

    <ul>
        <li>The freedom to run the program, for any purpose.</li>
        <li>The freedom to study how the program works, and change it to make it do what you wish.</li>
        <li>The freedom to redistribute copies so you can help your neighbor.</li>
        <li>The freedom to distribute copies of your modified versions to others.</li>
    </ul>

    <p>These points are crucial to understanding the community that works together to create the Linux platform. Without a doubt, Linux is an operating system that is “by the people, for the people”. These tenants are also a main factor in why many people choose Linux. It’s about freedom and freedom of use and freedom of choice.</p>

    <h3>Installing Linux</h3>

    <p>For many people, the idea of installing an operating system might seem like a very daunting task. Believe it or not, Linux offers one of the easiest installations of all operating systems. In fact, most versions of Linux offer what is called a Live distribution, which means you run the operating system from either a CD/DVD or USB flash drive without making any changes to your hard drive. You get the full functionality without having to commit to the installation. Once you’ve tried it out, and decided you wanted to use it, you simply double-click the “Install” icon and walk through the simple installation wizard.</p>

    <p>Typically, the installation wizards walk you through the process with the following steps (We’ll illustrate the installation of Ubuntu Linux): </p>

    <ul>
        <li>Preparation: Make sure your machine meets the requirements for installation. This also may ask you if you want to install third-party software (such as plugins for MP3 playback, video codecs, and more).</li>

        <li>Wireless setup (if necessary): If you are using a laptop (or machine with wireless), you’ll need to connect to the network, in order to download third-party software and updates.</li>

        <li>Hard drive allocation (Figure 4): This step allows you to select how you want the operating system to be installed. Are you going to install Linux alongside another operating system (called “dual booting”), use the entire hard drive, upgrade an existing Linux installation, or install over an existing version of Linux.</li>

        <li>Location: Select your location from the map.</li>

        <li>Keyboard layout: Select the keyboard for your system.</li>

        <li>User setup: Set up your username and password.</li>
    </ul>

    <p>That’s it. Once the system has completed the installation, reboot and you’re ready to go. For a more in-depth guide to installing Linux, take a look at “How to Install and Try Linux the Absolutely Easiest and Safest Way” or download the Linux Foundation’s PDF guide for Linux installation.</p>

    <h3>Installing software on Linux</h3>

    <p>Just as the operating system itself is easy to install, so too are applications. Most modern Linux distributions include what most would consider an app store. This is a centralized location where software can be searched and installed. Ubuntu Linux (and many other distributions) rely on GNOME Software, Elementary OS has the AppCenter, Deepin has the Deepin Software Center, openSUSE has their AppStore, and some distributions rely on Synaptic.</p>

    <p>Regardless of the name, each of these tools do the same thing: a central place to search for and install Linux software. Of course, these pieces of software depend upon the presence of a GUI. For GUI-less servers, you will have to depend upon the command-line interface for installation.</p>

    <p>Let’s look at two different tools to illustrate how easy even the command line installation can be. Our examples are for Debian-based distributions and Fedora-based distributions. The Debian-based distros will use the apt-get tool for installing software and Fedora-based distros will require the use of the yum tool. Both work very similarly. We’ll illustrate using the apt-get command. Let’s say you want to install the wget tool (which is a handy tool used to download files from the command line). To install this using apt-get, the command would like like this:</p>

    <pre>sudo apt-get install wget</pre>

    <p>The sudo command is added because you need super user privileges in order to install software. Similarly, to install the same software on a Fedora-based distribution, you would first su to the super user (literally issue the command su and enter the root password), and issue this command:</p>

    <pre>yum install wget</pre>

    <p>That’s all there is to installing software on a Linux machine. It’s not nearly as challenging as you might think. Still in doubt? Recall the Easy Lamp Server Installation from earlier. With a single command:</p>

    <pre>sudo taskel</pre>

    <p>You can install a complete LAMP (Linux Apache MySQL PHP) server on either a server or desktop distribution. It really is that easy.</p>

    <h3>More resources</h3>

    <p>If you’re looking for one of the most reliable, secure, and dependable platforms for both the desktop and the server, look no further than one of the many Linux distributions. With Linux you can assure your desktops will be free of trouble, your servers up, and your support requests minimal.</p>

    <ul>
        <li><a href="https://www.linux.com/">Linux.com</a> Everything you need to know about Linux (news, tutorials and more)</li>
        <li><a href="https://www.howtoforge.com/">Howtoforge</a> Linux tutorials</li>
        <li><a href="https://tldp.org/">Linux Documentation Project</a> How-tos, guides, and FAQs</li>
        <li><a href="http://www.linux-tutorial.info/">Linux Knowledge Base and Tutorial</a> Plenty of tutorials and in-depth guides</li>
        <li><a href="https://lwn.net/">LWN.net</a> Linux kernel news and more</li>
    </ul>
@endsection