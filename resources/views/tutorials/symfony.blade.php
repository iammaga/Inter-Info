@extends('layouts.lang')

@section('title-block')
Symfony
@endsection

@section('contents')
    <img src="{{url('/images/symfony.png')}}" width="100%" height="500px"/>
    <h3>What is Symfony?</h3>
    <p>Symfony is a PHP framework for web and console applications and a set of reusable PHP components. Symfony is used by thousands of web applications and most of the popular PHP projects.</p>
    
    <h3>Installation</h3>

    <ul>
        <li>Install Symfony with Composer (see requirements details).</li>
        <li>Symfony follows the semantic versioning strictly, publishes "Long Term Support" (LTS) versions and has a release process that is predictable and business-friendly.</li>
    </ul>

    <h3>Sponsor</h3>

    <p>Symfony 6.2 is backed by Les-Tilleuls.coop and Sulu.</p>

    <p>Les-Tilleuls.coop is a team of 50+ Symfony experts who can help you design, develop and fix your projects. We provide a wide range of professional services including development, consulting, coaching, training and audits. We also are highly skilled in JS, Go and DevOps. We are a worker cooperative!</p>

    <p>Sulu is the CMS for Symfony developers. It provides pre-built content-management features while giving developers the freedom to build, deploy, and maintain custom solutions using full-stack Symfony. Sulu is ideal for creating complex websites, integrating external tools, and building custom-built solutions.</p>

    <p>Help Symfony by sponsoring its development!</p>

    <h3>Documentation</h3>

    <ul>
        <li>Read the Getting Started guide if you are new to Symfony.</li>
        <li>Try the Symfony Demo application to learn Symfony in practice.</li>
        <li>Discover Symfony ecosystem in detail with Symfony The Fast Track.</li>
        <li>Master Symfony with the Guides and Tutorials, the Components docs and the Best Practices reference.</li>
    </ul>

    <h3>Community</h3>

    <ul>
        <li>Join the Symfony Community and meet other members at the Symfony events.</li>
        <li>Get Symfony support on Stack Overflow, Slack, IRC, etc.</li>
        <li>Follow us on GitHub, Twitter and Facebook.</li>
        <li>Read our Code of Conduct and meet the CARE Team.</li>
    </ul>

    <h3>Contributing</h3>

    <p>Symfony is an Open Source, community-driven project with thousands of contributors. Join them contributing code or contributing documentation.</p>

    <h3>Security Issues</h3>

    <p>If you discover a security vulnerability within Symfony, please follow our disclosure procedure.</p>

    <h3>About Us</h3>

    <p>Symfony development is led by the Symfony Core Team and supported by Symfony contributors.</p>
    
@endsection