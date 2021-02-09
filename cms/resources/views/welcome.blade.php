@extends('layouts.blog')

@section('title')
    Zorland
@endsection


@section('header')

        @include('partials.header')

    
@endsection

@section('content')


    <!-- Main Content -->
    <main class="main-content">

        @include('partials.paralax-hero-section')

        @include('partials.feature-box-section')

        @include('partials.services-section')

        @include('partials.clients-section')

        @include('partials.portfolio-section')

        @include('partials.parallax-with-video')

        @include('partials.contact')


    </main>
    
@endsection

@section('footer')

 @include('partials.footer')
    
@endsection
