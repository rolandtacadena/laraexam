@extends('layouts.app')

@section('content')
    <div class="row column">
        <header class="home-hero">
            <div class="row homepage">
                <div class="small-8 medium-5 medium-offset-1 large-offset-2 end columns">
                    <h1 class="hero-main-header">LaravelExam</h1>
                    <h2 class="hero-subheader">Test your knowledge on different aspects of Web Development</h2>
                    <br>
                    <a href="http://foundation.zurb.com/sites/download.html" class="small button sites-button hide-for-small-only">I am Instructor</a>
                    <a href="http://foundation.zurb.com/sites/download.html" class="small button sites-button show-for-small-only">I am Instructor</a>
                    <a href="http://foundation.zurb.com/sites/download.html" class="small button sites-button hide-for-small-only">I am Student</a>
                    <a href="http://foundation.zurb.com/sites/download.html" class="small button sites-button show-for-small-only">I am Student</a>
                </div>
            </div>
        </header>
        <div class="row features">
            <div class="medium-3 large-3 columns">
                <img src="img/code.svg">
                <h3 class="feature-block-header">Semantic</h3>
                <p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
            </div>
            <div class="medium-3 large-3 columns">
                <img src="img/code.svg">
                <h3 class="feature-block-header">Mobile First</h3>
                <p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>
            </div>
            <div class="medium-3 large-3 columns">
                <img src="img/code.svg">
                <h3 class="feature-block-header">Customizable</h3>
                <p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>
            </div>
            <div class="medium-3 large-3 columns">
                <img src="img/code.svg">
                <h3 class="feature-block-header">Professional</h3>
                <p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
            </div>
        </div>
        <section class="subject-list">
            <div class="row column text-center">
                <h2 class="section-header">Brands using Foundation:</h2>
            </div>
            <a href="learn/brands.html">
                <div class="row small-up-4 medium-up-5 large-up-6 centered-text">
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                    <div class="column"><img src="img/subj.png"></div>
                </div>
            </a>
        </section>
    </div>
@endsection
