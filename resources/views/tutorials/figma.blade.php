@extends('layouts.lang')

@section('title-block')
Figma
@endsection

@section('contents')
    <img src="{{url('/images/figma.jpg')}}" width="100%" height="500px"/>
    <h3>What is Figma? (And How to Use Figma for Beginners)</h3>
    <p>Figma is an interface design application that runs in the browser—but it’s actually much more than that. I would go so far as to say it’s probably the best application for team-based collaborative design projects. Let’s take a look!</p>

    <p>Figma gives you all the tools you need for the design phase of the project, including vector tools which are capable of fully-fledged illustration, as well as prototyping capabilities, and code generation for hand-off.</p>

    <p><b>Note: </b>this is part of our regularly updated learning guide The Designer’s Guide to Figma. To learn more about this powerful app, try our free Figma design tool tutorial.</p>

    <h3>Figma Runs Online</h3>

    <p>Even though Figma is browser-based there are desktop version for both Windows and Mac OS. Presumably these are wrap applications which are running a browser inside them, but whether that’s the case or not, Figma is always running online within those apps. </p>

    <p><b>Note: </b>If you do lose connectivity you can still keep working on any document you already had open. The Figma design tool will store your changes in your browser, then sync itself when you're reconnected.</p>

    <h3>Collaboration</h3>

    <p>The “always online” nature of Figma actually provides some of the greatest strengths of the tool. One of those strengths is that Figma allows for live, real-time collaboration. You and your team members can all log into a design at once, simultaneously making changes to it.</p>

    <p>The fact that these designs are all saved online means that you never have to worry about any team members falling out of sync with the project. The latest changes are always right then in the file, and you needn’t worry about transferring files between team members, or pushing files to and from any third-party storage platform.</p>

    <p>This also means you can jump into a design at the same time as a client. So even if you’re in a separate location from your client you can still have a sit-down meeting where you’re both looking at the same thing. The client can make suggestions, and you can implement it right there and then.</p>

    <p>On top of all these live collaboration tools you can also leave comments directly on the canvas.</p>

    <h3>Component Libraries</h3>

    <p>Figma allows you to build up libraries of reusable components which the whole team has access to. Components give designers a head start on any existing design systems, and when a component is updated in the central library those changes are made across all designs for everyone.</p>

    <h3>Prototyping and Code Output</h3>

    <p>For prototyping you can create connections and hotspots on your design so you can simulate how a user would flow through that interface. For the coding phase Figma can generate SVG code, CSS, and iOS and Android code.</p>

@endsection