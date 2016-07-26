@extends('layouts.app')

@section('page.title')
    How It Works
@endsection

@section('content')
    <div class="general-container">
        <div class="how-it-works row column">
            <article class="page-content">
                <div class="row">
                    <div class="medium-9 medium-centered columns">
                        <h4 class="page-intro">Foundation for Sites 6 has been designed to get your project from prototype to production more efficiently than ever before! It includes a wide range of modular and flexible components that are easily styled. These versatile and lightweight building blocks make it easy to bring your ideas to life. And if all that wasn’t cool enough, fire up <a href="develop/yeti-launch.html">Yeti Launch</a> - our new companion app, spins up powerful Sass projects with just a click of your mouse!</h4>
                    </div>
                </div>

                <div class="row column"><hr class="dotted"></div>
                <div class="row">
                    <div class="medium-9 medium-centered columns">
                        <div class="large-feature">
                            <div class="row">
                                <div class="medium-5 columns">
                                    <img src="{{ URL::asset('img/hiw1.svg') }}">
                                </div>
                                <div class="medium-6 columns code-reduction">
                                    <h2 class="large-feature-header">50% Code Reduction</h2>
                                    <h4 class="csubheader">Half the size of Foundation 5</h4>
                                    <p>Total filesize of every component and class now weighs in at 60KB CSS &amp; 84KB JS, with plenty of room to make them even smaller when selectively removing unused components.</p>
                                </div>
                            </div>
                        </div>
                        <div class="large-feature">
                            <div class="row">
                                <div class="medium-5 medium-push-7 columns">
                                    <img src="{{ URL::asset('img/hiw3.svg') }}">
                                </div>
                                <div class="medium-6 medium-pull-6 columns a11y">
                                    <h2 class="large-feature-header">A11y Friendly</h2>
                                    <h4 class="subheader">The Base for Fully Accessible Sites</h4>
                                    <p>All code snippets come with ARIA attributes and roles along with instructions on how to properly use these components. This helps ensure that every website built on Foundation 6 can be used anywhere, on any device, by anyone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row vertical-feature-block">
                    <div class="medium-4 columns">
                        <img src="{{ URL::asset('img/collab1.svg') }}">
                        <h3 class="feature-block-header">Share Responsive Prototypes</h3>
                        <h4 class="subheader">Design the Code</h4>
                        <p class="text-left">Upload your responsive design web pages to get contextual feedback on any breakpoint. Stakeholders and collaborators can annotate and review coded web pages on any device. Take your Foundation projects from prototype to production using <a href="upload.html">Notable Code</a>.</p>
                    </div>
                    <div class="medium-4 columns">
                        <img src="{{ URL::asset('img/collab2.svg') }}">
                        <h3 class="feature-block-header">Flexible Navigation Patterns</h3>
                        <h4 class="subheader">Customizable and Modular Navigation</h4>
                        <p class="text-left">We’ve created a menu system that is completely customizable and modular. The new Menu component is a huge leap forward because it combines several components, saves many lines of code, and makes a modular navigation you can use on most every project.</p>
                    </div>
                    <div class="medium-4 columns">
                        <img src="{{ URL::asset('img/collab3.svg') }}">
                        <h3 class="feature-block-header">Modular JavaScript Utilities</h3>
                        <h4 class="subheader">Create Your Own JS Plugins</h4>
                        <p class="text-left">We reduced the amount of code in our JS plugins significantly by making each plugin smaller and creating more shared utility libraries. The utility libraries are publicly accessible so you can make your own amazing plugins. </p>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="medium-9 medium-centered columns">
                        <div class="large-feature">
                            <div class="row">
                                <div class="medium-5 columns">
                                    <img src="{{ URL::asset('img/hiw1.svg') }}">
                                </div>
                                <div class="medium-6 columns fewer-styles">
                                    <h2 class="large-feature-header">Fewer Base Styles</h2>
                                    <h4 class="subheader">The Styles You Need, None That You Don’t</h4>
                                    <p>The base styles act as a coded wireframe rather than a final design. Simpler CSS styles allow you to more easily modify them to fit your brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="large-feature">
                            <div class="row">
                                <div class="medium-5 medium-push-7 columns">
                                    <img src="{{ URL::asset('img/hiw3.svg') }}">
                                </div>
                                <div class="medium-6 medium-pull-6 columns mui">
                                    <h2 class="large-feature-header">Motion UI</h2>
                                    <h4 class="subheader">Easily Create Custom Animations and Transitions</h4>
                                    <p>Motion UI is our Sass based animation library, will help you add meaningful motion to your websites. This Sass library includes more than two dozen built-in transition and animation classes. It's very customizable and super easy to create your own with the Sass mixins.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-9 medium-centered columns">
                        <a style="color: #fff !important;" href="http://foundation.zurb.com/sites/download.html" class="large button exam-btn">Get Started</a>
                    </div>
                </div>
                <br>
            </article>
        </div>
    </div>
@endsection