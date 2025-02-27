@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>About Us</h1>
        <div>
            <img src="{{ asset('images/about1.png') }}" alt="About Us" class="rounded shadow-md h-64">
        </div>
        <div class="box">
            <h2>The Kookee Story</h2>
            <p>Pauline's love of baking started from a very early age and her years working within food manufacturing has given her a valuable inside knowledge of how to run a successful artisan bakery.</p>
            <p>She gave up work to become a carer for her eldest son, who was diagnosed with a form of autism. Saturdays then became a ritual baking day to involve all the children in a fun family task.</p>
        </div>
        <div>
            <img src="{{ asset('images/about2.png') }}" alt="About Us" class="rounded shadow-md h-64">
        </div>
        <div class="box">
            <h2>Growing Since '09</h2>
            <p>Our products range from freshly baked cookies, frozen uncooked dough for restaurants and deli counters and an easy make retail dry mix so you can create your own cookies at home.</p>
            <p>Our ingredients are locally sourced, and are of the highest quality. We continuously try our own recipes and ensure that each and every cookie delivers a taste sensation.</p>
        </div>
    </div>
@endsection