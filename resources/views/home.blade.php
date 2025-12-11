@extends('layouts.app')

@section('content')
<main class="min-h-screen bg-background overflow-x-hidden">
    @include('components.navbar')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.focus')
    @include('sections.participants')
    @include('sections.services')
    @include('sections.testimonials')
    @include('sections.contact')
    @include('components.footer')
</main>
@endsection
