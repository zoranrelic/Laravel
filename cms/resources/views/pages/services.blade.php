@extends('layouts.blog')

@section('title')
    Services
@endsection


@section('header')

        @include('partials.header')

    
@endsection

@section('content')


    <!-- Main Content -->
    <main class="main-content">

      @include('partials.paralax-hero-section')
      @include('partials.page-title-selection')
      @include('partials.feature-box-item')
      @include('partials.start-tabs')
      @include('partials.information-section')
      @include('partials.pricing')

      
    </main>
    
@endsection

@section('footer')

 @include('partials.footer')
    
@endsection
