@extends('layouts.app')

@section('title', 'HEMA for Dummies - Home')

@section('content')
<div class="container">
    <div class="hero">
        <h1>Welcome to HEMA for Dummies</h1>
        <p>Discover the art and science of Historical European Martial Arts</p>
    </div>

    <div class="grid">
        <div class="card">
            <h3>⚔️ About HEMA</h3>
            <p>Learn about the history, traditions, and disciplines of Historical European Martial Arts — reviving combat techniques from medieval and Renaissance treatises.</p>
            <a href="{{ route('fencing.about') }}" class="btn">Learn More</a>
        </div>

        <div class="card">
            <h3>🎯 Techniques</h3>
            <p>Explore historical combat techniques from masters like Liechtenauer, Fiore dei Liberi, and Meyer, including longsword, rapier, and more.</p>
            <a href="{{ route('fencing.techniques') }}" class="btn">Explore Techniques</a>
        </div>

        <div class="card">
            <h3>🛡️ Equipment</h3>
            <p>Discover the essential equipment for HEMA practice, from synthetic and steel trainers to protective gear designed for full-contact sparring.</p>
            <a href="{{ route('fencing.equipment') }}" class="btn">View Equipment</a>
        </div>
    </div>

    <div class="content">
        <h2>Why Choose HEMA?</h2>
        <p>Historical European Martial Arts offers a unique combination of history, athleticism, and martial skill:</p>
        <ul>
            <li><strong>Historical Connection:</strong> Study and practice authentic fighting techniques from surviving medieval and Renaissance manuals</li>
            <li><strong>Physical Fitness:</strong> Full-body workout that builds strength, endurance, and coordination</li>
            <li><strong>Mental Challenge:</strong> Interpret historical sources and apply tactical thinking in combat</li>
            <li><strong>Diverse Weapons:</strong> Train with longsword, rapier, sword and buckler, messer, dagger, polearms, and more</li>
            <li><strong>Competition:</strong> Participate in tournaments with rulesets designed to reward historical technique</li>
            <li><strong>Community:</strong> Join a global community of passionate martial artists and historians</li>
        </ul>
    </div>
</div>
@endsection
