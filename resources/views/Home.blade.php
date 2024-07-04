@extends('Layout.app')

@section('content')

{{-- hero section --}}
@include('Component.hero')


{{-- Operation section --}}

@include('Component.howWeDo')



{{-- Pricing --}}
@include('Component.pricing')


{{-- Team member section --}}
@include('Component.team')


@endsection