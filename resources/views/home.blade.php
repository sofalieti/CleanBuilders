@extends('layouts.gothic')

@section('title', 'Gothic - Architecture Bootstrap 5 HTML Template')

@section('home_active', 'active')

@section('content')
    {{-- Hero Section --}}
    @include('sections.hero')

    {{-- How We Work Section --}}
    @include('sections.how-we-work')

    {{-- Sticky CTA Bar --}}
    @include('sections.sticky-cta')

    {{-- Why CleanBuilders Section --}}
    @include('sections.why-cleanbuilders')

    {{-- Red Flags Warning Section --}}
    @include('sections.red-flags')

    {{-- Before/After Transformations Section --}}
    @include('sections.before-after')

    {{-- Services Section --}}
    @include('sections.services')

    {{-- YouTube Shorts Section --}}
    @include('sections.youtube-shorts')

    {{-- Client Testimonials Section --}}
    @include('sections.testimonials')

    {{-- Brand Logos Section --}}
    @include('sections.brands')

    {{-- Map and Contact Form Section --}}
    @include('sections.map-contact')

    {{-- Video Modal --}}
    @include('sections.video-modal')

    {{-- Custom Styles and Scripts --}}
    @include('sections.styles-scripts')

@endsection  