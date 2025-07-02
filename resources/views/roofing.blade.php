@extends('layouts.gothic')

@section('title', 'Professional Roofing Services in Bay Area - CleanBuilders')

@section('roofing_active', 'active')

@push('body_class')
roofing-page
@endpush

@section('content')
    {{-- Hero Section --}}
    @include('sections.hero-roofing')

    {{-- Roofing Brands Section --}}
    @include('sections.roofing-brands')

    {{-- Work Gallery Section --}}
    @include('sections.work-gallery')

    {{-- Residential & Commercial Services Section --}}
    @include('sections.residential-commercial')

    <!-- Roofing Process Section -->
    @include('sections.roofing-process')

    {{-- Why Roofing Section --}}
    @include('sections.why-roofing')

    {{-- Video Modal --}}
    @include('sections.video-modal')

    {{-- Custom Styles and Scripts --}}
    @include('sections.styles-scripts')

@endsection 