@extends('layouts.lang')

@section('title-block')
SSH
@endsection

@section('contents')
    <img src="{{url('/images/ssh1.png')}}" width="100%" height="500px"/>
    <h3>What is SSH?</h3>
    <p>SSH, also known as Secure Shell or Secure Socket Shell, is a network protocol that gives users, particularly system administrators, a secure way to access a computer over an unsecured network.</p>

    <p>SSH also refers to the suite of utilities that implement the SSH protocol. Secure Shell provides strong password authentication and public key authentication, as well as encrypted data communications between two computers connecting over an open network, such as the internet.</p>

    <p>In addition to providing strong encryption, SSH is widely used by network administrators to manage systems and applications remotely, enabling them to log in to another computer over a network, execute commands and move files from one computer to another.</p>

    <p>SSH refers both to the cryptographic network protocol and to the suite of utilities that implement that protocol. SSH uses the client-server model, connecting a Secure Shell client application, which is the end where the session is displayed, with an SSH server, which is the end where the session runs. SSH implementations often include support for application protocols used for terminal emulation or file transfers.</p>

    <p>SSH can also be used to create secure tunnels for other application protocols, for example, to securely run X Window System graphical sessions remotely. An SSH server, by default, listens on the standard Transmission Control Protocol (TCP) port 22.</p>

    <h3>How does SSH work?</h3>

    <p>Secure Shell was created to replace insecure terminal emulation or login programs, such as Telnet, rlogin (remote login) and rsh (remote shell). SSH enables the same functions -- logging in to and running terminal sessions on remote systems. SSH also replaces file transfer programs, such as File Transfer Protocol (FTP) and rcp (remote copy).</p>

    <p>The most basic use of SSH is to connect to a remote host for a terminal session. The form of that command is the following:</p>

    <pre>ssh UserName@SSHserver.example.com</pre>

    <p>This command will cause the client to attempt to connect to the server named server.example.com, using the user ID UserName. If this is the first time negotiating a connection between the local host and the server, the user will be prompted with the remote host's public key fingerprint and prompted to connect, despite there having been no prior connection:</p>

    <pre>The authenticity of host 'sample.ssh.com' cannot be established.<br> DSA key fingerprint is 01:23:45:67:89:ab:cd:ef:ff:fe:dc:ba:98:76:54:32:10.<br> Are you sure you want to continue connecting (yes/no)?</pre>

    <p>Answering yes to the prompt will cause the session to continue, and the host key is stored in the local system's known_hosts file. This is a hidden file, stored by default in a hidden directory, called /.ssh/known_hosts, in the user's home directory. Once the host key has been stored in the known_hosts file, the client system can connect directly to that server again without need for any approvals; the host key authenticates the connection.</p>

    <h3>What is SSH used for?</h3>

    <p>Present in all data centers, SSH ships by default with every Unix, Linux and Mac server. SSH connections have been used to secure many different types of communications between a local machine and a remote host, including secure remote access to resources, remote execution of commands, delivery of software patches, and updates and other administrative or management tasks.</p>

        <p>In addition to creating a secure channel between local and remote computers, SSH is used to manage routers, server hardware, virtualization platforms, operating systems (OSes), and inside systems management and file transfer applications.</p>
        
        <p>Secure Shell is used to connect to servers, make changes, perform uploads and exit, either using tools or directly through the terminal. SSH keys can be employed to automate access to servers and often are used in scripts, backup systems and configuration management tools.</p>
        
        <p>Designed to be convenient and work across organizational boundaries, SSH keys provide single sign-on (SSO) so that users can move between their accounts without typing a password each time.</p>
        
        <p>While playing pivotal roles in identity management and access management, SSH does more than authenticate over an encrypted connection. All SSH traffic is encrypted. Whether users are transferring a file, browsing the web or running a command, their actions are private.</p>
        
        <p>While it is possible to use SSH with an ordinary user ID and password as credentials, SSH relies more often on public key pairs to authenticate hosts to each other. Individual users must still employ their user ID and password -- or other authentication methods -- to connect to the remote host itself, but the local machine and the remote machine authenticate separately to each other. This is accomplished by generating a unique public key pair for each host in the communication. A single session requires two public key pairs: one public key pair to authenticate the remote machine to the local machine and a second public key pair to authenticate the local machine to the remote machine.</p>

        <h3>Secure Shell capabilities</h3>

        <p>Functions that SSH enables include the following:</p>

        <ul>
            <li>secure remote access to SSH-enabled network systems or devices for users, as well as automated processes;</li>
            <li>secure and interactive file transfer sessions;</li>
            <li>automated and secured file transfers;</li>
            <li>secure issuance of commands on remote devices or systems; and</li>
            <li>secure management of network infrastructure components.</li>
        </ul>

        <p>SSH can be used interactively to enable terminal sessions and should be used instead of the less secure Telnet program. SSH is also commonly used in scripts and other software to enable programs and systems to remotely and securely access data and other resources.</p>

        <h3>The History of SSH</h3>

        <p>The first version of SSH appeared in 1995 and was designed by Tatu Ylönen, who was, at the time, a researcher at Helsinki University of Technology and later started SSH Communications Security, a cybersecurity vendor based in Finland.</p>

        <p>Over time, various flaws were found in SSH-1. That version is now considered to be deprecated and not safe to use.</p>
            
        <p>SSH-2, the current version of Secure Shell protocols, was adopted as a Standards Track specification by the Internet Engineering Task Force (IETF) in 2006. SSH-2 is not compatible with SSH-1 and uses a Diffie-Hellman key exchange and a stronger integrity check that uses message authentication codes to improve security.</p>
            
        <p>SSH clients and servers can use a number of encryption methods, the mostly widely used being Advanced Encryption Standard (AES) and Blowfish.</p>
            
        <p>There are no known exploitable vulnerabilities in SSH-2, though information leaked by Edward Snowden in 2013 suggested the National Security Agency (NSA) may be able to decrypt some SSH traffic.</p>

        <h3>Secure Shell security issues</h3>

        <p>Enterprises using SSH should consider finding ways to manage host keys stored on client systems. These keys can accumulate over time, especially for information technology (IT) staff that needs to be able to access remote hosts for management purposes.</p>

        <p>Because the data stored in an SSH known_hosts file can be used to gain authenticated access to remote systems, organizations should be aware of the existence of these files and should have a standard process for retaining control over the files, even after a system is taken out of commission, as the hard drives may have this data stored in plaintext.</p>
            
        <p>Developers should be careful when incorporating SSH commands or functions in a script or other type of program. While it is possible to issue an SSH command that includes a user ID and password to authenticate the user of the local machine to an account on the remote host, doing so may expose the credentials to an attacker with access to the source code.</p>
            
        <p>Shellshock, a security hole in the Bash command processor, can be executed over SSH but is a vulnerability in Bash, not in SSH.</p>
            
        <p>The biggest threat to SSH is poor key management. Without the proper centralized creation, rotation and removal of SSH keys, organizations can lose control over who has access to which resources and when, particularly when SSH is used in automated application-to-application processes.</p>
@endsection