@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What is Laracarte ?</h2>
        <p>Laracarte is a clone app of <a href="Laramap.com" target="_blank">laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong>
                        <i class="fa fa-exclamation-tringle" aria-hidden="true"></i>
                        this app has been built by <a href="http://twitter.com/RNzouda">@RNZOUDA</a> for learning purpose
                    </strong>
                </p>
            </div>
        </div>
        <p>
            Feel free to help to improve the <a href="https://github.com/nzouda777/laracarte-la-app.git"><code>source code</code></a>
        </p>
        <hr>
        <h2>What is laramap ?</h2>
        <p>Laramap is the website by whych LAracarte was inspired :).</p>
        <hr>
        <h2>Which tools and services are used in Laracarte ?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But theres a bunch of services used for email and other sections</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon s3</li>
            <li>Mandrili</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>HEroku</li>
        </ul>
    </div>
@endsection
