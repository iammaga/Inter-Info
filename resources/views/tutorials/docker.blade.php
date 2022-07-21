@extends('layouts.lang')

@section('title-block')
Docker
@endsection

@section('contents')
    <img src="{{url('/images/docker1.png')}}" width="100%" height="500px"/>
    <h3>What is Docker?</h3>
    <section class="section"><h3 id="title">Docker overview</h3><p><em class="reading-time">Estimated reading time: 8 minutes</em></p><p>Docker is an open platform for developing, shipping, and running applications.
        Docker enables you to separate your applications from your infrastructure so
        you can deliver software quickly. With Docker, you can manage your infrastructure
        in the same ways you manage your applications. By taking advantage of Docker’s
        methodologies for shipping, testing, and deploying code quickly, you can
        significantly reduce the delay between writing code and running it in production.</p>
        
        <h2 id="the-docker-platform">The Docker platform<a href="#the-docker-platform" class="anchorLink"> </a></h2>
        
        <p>Docker provides the ability to package and run an application in a loosely isolated
        environment called a container. The isolation and security allows you to run many
        containers simultaneously on a given host. Containers are lightweight and contain
        everything needed to run the application, so you do not need to rely on what is
        currently installed on the host. You can easily share containers while you work,
        and be sure that everyone you share with gets the same container that works in the
        same way.</p>
        
        <p>Docker provides tooling and a platform to manage the lifecycle of your containers:</p>
        
        <ul>
          <li>Develop your application and its supporting components using containers.</li>
          <li>The container becomes the unit for distributing and testing your application.</li>
          <li>When you’re ready, deploy your application into your production environment,
        as a container or an orchestrated service. This works the same whether your
        production environment is a local data center, a cloud provider, or a hybrid
        of the two.</li>
        </ul>
        
        <h2 id="what-can-i-use-docker-for">What can I use Docker for?<a href="#what-can-i-use-docker-for" class="anchorLink"> </a></h2>
        
        <p><strong>Fast, consistent delivery of your applications</strong></p>
        
        <p>Docker streamlines the development lifecycle by allowing developers to work in
        standardized environments using local containers which provide your applications
        and services. Containers are great for continuous integration and continuous
        delivery (CI/CD) workflows.</p>
        
        <p>Consider the following example scenario:</p>
        
        <ul>
          <li>Your developers write code locally and share their work with their colleagues
        using Docker containers.</li>
          <li>They use Docker to push their applications into a test environment and execute
        automated and manual tests.</li>
          <li>When developers find bugs, they can fix them in the development environment
        and redeploy them to the test environment for testing and validation.</li>
          <li>When testing is complete, getting the fix to the customer is as simple as
        pushing the updated image to the production environment.</li>
        </ul>
        
        <p><strong>Responsive deployment and scaling</strong></p>
        
        <p>Docker’s container-based platform allows for highly portable workloads. Docker
        containers can run on a developer’s local laptop, on physical or virtual
        machines in a data center, on cloud providers, or in a mixture of environments.</p>
        
        <p>Docker’s portability and lightweight nature also make it easy to dynamically
        manage workloads, scaling up or tearing down applications and services as
        business needs dictate, in near real time.</p>
        
        <p><strong>Running more workloads on the same hardware</strong></p>
        
        <p>Docker is lightweight and fast. It provides a viable, cost-effective alternative
        to hypervisor-based virtual machines, so you can use more of your compute
        capacity to achieve your business goals. Docker is perfect for high density
        environments and for small and medium deployments where you need to do more with
        fewer resources.</p>
        
        <h2 id="docker-architecture">Docker architecture<a href="#docker-architecture" class="anchorLink"> </a></h2>
        
        <p>Docker uses a client-server architecture. The Docker <em>client</em> talks to the
        Docker <em>daemon</em>, which does the heavy lifting of building, running, and
        distributing your Docker containers. The Docker client and daemon <em>can</em>
        run on the same system, or you can connect a Docker client to a remote Docker
        daemon. The Docker client and daemon communicate using a REST API, over UNIX
        sockets or a network interface. Another Docker client is Docker Compose,
        that lets you work with applications consisting of a set of containers.</p>
        
        <p><img src="/engine/images/architecture.svg" alt="Docker Architecture Diagram"></p>
        
        <h3 id="the-docker-daemon">The Docker daemon<a href="#the-docker-daemon" class="anchorLink"> </a></h3>
        
        <p>The Docker daemon (<code class="language-plaintext highlighter-rouge">dockerd</code>) listens for Docker API requests and manages Docker
        objects such as images, containers, networks, and volumes. A daemon can also
        communicate with other daemons to manage Docker services.</p>
        
        <h3 id="the-docker-client">The Docker client<a href="#the-docker-client" class="anchorLink"> </a></h3>
        
        <p>The Docker client (<code class="language-plaintext highlighter-rouge">docker</code>) is the primary way that many Docker users interact
        with Docker. When you use commands such as <code class="language-plaintext highlighter-rouge">docker run</code>, the client sends these
        commands to <code class="language-plaintext highlighter-rouge">dockerd</code>, which carries them out. The <code class="language-plaintext highlighter-rouge">docker</code> command uses the
        Docker API. The Docker client can communicate with more than one daemon.</p>
        
        <h3 id="docker-desktop">Docker Desktop<a href="#docker-desktop" class="anchorLink"> </a></h3>
        
        <p>Docker Desktop is an easy-to-install application for your Mac or Windows environment that enables you to build and share containerized applications and microservices. Docker Desktop includes the Docker daemon (<code class="language-plaintext highlighter-rouge">dockerd</code>), the Docker client (<code class="language-plaintext highlighter-rouge">docker</code>), Docker Compose, Docker Content Trust, Kubernetes, and Credential Helper. For more information, see <a href="/desktop/">Docker Desktop</a>.</p>
        
        <h3 id="docker-registries">Docker registries<a href="#docker-registries" class="anchorLink"> </a></h3>
        
        <p>A Docker <em>registry</em> stores Docker images. Docker Hub is a public
        registry that anyone can use, and Docker is configured to look for images on
        Docker Hub by default. You can even run your own private registry.</p>
        
        <p>When you use the <code class="language-plaintext highlighter-rouge">docker pull</code> or <code class="language-plaintext highlighter-rouge">docker run</code> commands, the required images are
        pulled from your configured registry. When you use the <code class="language-plaintext highlighter-rouge">docker push</code> command,
        your image is pushed to your configured registry.</p>
        
        <h3 id="docker-objects">Docker objects<a href="#docker-objects" class="anchorLink"> </a></h3>
        
        <p>When you use Docker, you are creating and using images, containers, networks,
        volumes, plugins, and other objects. This section is a brief overview of some
        of those objects.</p>
        
        <h4 id="images">Images</h4>
        
        <p>An <em>image</em> is a read-only template with instructions for creating a Docker
        container. Often, an image is <em>based on</em> another image, with some additional
        customization. For example, you may build an image which is based on the <code class="language-plaintext highlighter-rouge">ubuntu</code>
        image, but installs the Apache web server and your application, as well as the
        configuration details needed to make your application run.</p>
        
        <p>You might create your own images or you might only use those created by others
        and published in a registry. To build your own image, you create a <em>Dockerfile</em>
        with a simple syntax for defining the steps needed to create the image and run
        it. Each instruction in a Dockerfile creates a layer in the image. When you
        change the Dockerfile and rebuild the image, only those layers which have
        changed are rebuilt. This is part of what makes images so lightweight, small,
        and fast, when compared to other virtualization technologies.</p>
        
        <h4 id="containers">Containers</h4>
        
        <p>A container is a runnable instance of an image. You can create, start, stop,
        move, or delete a container using the Docker API or CLI. You can connect a
        container to one or more networks, attach storage to it, or even create a new
        image based on its current state.</p>
        
        <p>By default, a container is relatively well isolated from other containers and
        its host machine. You can control how isolated a container’s network, storage,
        or other underlying subsystems are from other containers or from the host
        machine.</p>
        
        <p>A container is defined by its image as well as any configuration options you
        provide to it when you create or start it. When a container is removed, any changes to
        its state that are not stored in persistent storage disappear.</p>
        
        <h5 id="example-docker-run-command">Example <code class="language-plaintext highlighter-rouge">docker run</code> command</h5>
        
        <p>The following command runs an <code class="language-plaintext highlighter-rouge">ubuntu</code> container, attaches interactively to your
        local command-line session, and runs <code class="language-plaintext highlighter-rouge">/bin/bash</code>.</p>
        
        <div class="language-console highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="gp">$</span><span class="w"> </span>docker run <span class="nt">-i</span> <span class="nt">-t</span> ubuntu /bin/bash
        </code></pre></div></div>
        
        <p>When you run this command, the following happens (assuming you are using
        the default registry configuration):</p>
        
        <ol>
          <li>
            <p>If you do not have the <code class="language-plaintext highlighter-rouge">ubuntu</code> image locally, Docker pulls it from your
        configured registry, as though you had run <code class="language-plaintext highlighter-rouge">docker pull ubuntu</code> manually.</p>
          </li>
          <li>
            <p>Docker creates a new container, as though you had run a <code class="language-plaintext highlighter-rouge">docker container create</code>
        command manually.</p>
          </li>
          <li>
            <p>Docker allocates a read-write filesystem to the container, as its final
        layer. This allows a running container to create or modify files and
        directories in its local filesystem.</p>
          </li>
          <li>
            <p>Docker creates a network interface to connect the container to the default
        network, since you did not specify any networking options. This includes
        assigning an IP address to the container. By default, containers can
        connect to external networks using the host machine’s network connection.</p>
          </li>
          <li>
            <p>Docker starts the container and executes <code class="language-plaintext highlighter-rouge">/bin/bash</code>. Because the container
        is running interactively and attached to your terminal (due to the <code class="language-plaintext highlighter-rouge">-i</code> and <code class="language-plaintext highlighter-rouge">-t</code>
        flags), you can provide input using your keyboard while the output is logged to
        your terminal.</p>
          </li>
          <li>
            <p>When you type <code class="language-plaintext highlighter-rouge">exit</code> to terminate the <code class="language-plaintext highlighter-rouge">/bin/bash</code> command, the container
        stops but is not removed. You can start it again or remove it.</p>
          </li>
        </ol>
        
        <h2 id="the-underlying-technology">The underlying technology<a href="#the-underlying-technology" class="anchorLink"> </a></h2>
        <p>Docker is written in the <a href="https://golang.org/">Go programming language</a> and takes
        advantage of several features of the Linux kernel to deliver its functionality.
        Docker uses a technology called <code class="language-plaintext highlighter-rouge">namespaces</code> to provide the isolated workspace
        called the <em>container</em>. When you run a container, Docker creates a set of
        <em>namespaces</em> for that container.</p>
        
        <p>These namespaces provide a layer of isolation. Each aspect of a container runs
        in a separate namespace and its access is limited to that namespace.</p>
        
        <h2 id="next-steps">Next steps<a href="#next-steps" class="anchorLink"> </a></h2>
        <ul>
          <li>Read about <a href="/get-docker/">installing Docker</a>.</li>
          <li>Get hands-on experience with the <a href="/get-started/">Getting started with Docker</a>
          tutorial.</li>
        </ul>
        </section>
@endsection