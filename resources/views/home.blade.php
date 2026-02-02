@extends('layouts.app')

@section('title', 'Fencing Hub - Home')

@section('content')
<div class="container">
    <div class="hero">
        <h1>Welcome to Fencing Hub</h1>
        <p>Discover the art and sport of Olympic fencing</p>
    </div>

    <div class="grid">
        <div class="card">
            <h3>⚔️ About Fencing</h3>
            <p>Learn about the history, rules, and disciplines of this elegant Olympic sport that combines athleticism, strategy, and precision.</p>
            <a href="{{ route('fencing.about') }}" class="btn">Learn More</a>
        </div>

        <div class="card">
            <h3>🎯 Techniques</h3>
            <p>Explore fundamental fencing techniques, footwork, and tactical strategies used by fencers worldwide.</p>
            <a href="{{ route('fencing.techniques') }}" class="btn">Explore Techniques</a>
        </div>

        <div class="card">
            <h3>🛡️ Equipment</h3>
            <p>Discover the essential equipment needed for fencing, from weapons to protective gear and competition attire.</p>
            <a href="{{ route('fencing.equipment') }}" class="btn">View Equipment</a>
        </div>
    </div>

    <div class="content">
        <h2>Why Choose Fencing?</h2>
        <p>Fencing is a unique sport that offers numerous benefits:</p>
        <ul>
            <li><strong>Physical Fitness:</strong> Improves cardiovascular health, flexibility, and coordination</li>
            <li><strong>Mental Agility:</strong> Develops strategic thinking and quick decision-making skills</li>
            <li><strong>Discipline:</strong> Teaches respect, sportsmanship, and self-control</li>
            <li><strong>Competition:</strong> Participate in local, national, and international tournaments</li>
            <li><strong>Community:</strong> Join a welcoming community of fencers of all ages and skill levels</li>
        </ul>
    </div>
</div>
@endsection
