@extends('layouts.app')

@section('title', 'About Fencing')

@section('content')
<div class="container">
    <div class="content">
        <h2>About Fencing</h2>
        <p>Fencing is one of the oldest Olympic sports, with roots dating back to ancient sword fighting. Modern fencing has evolved into a refined sport that combines physical prowess with mental strategy.</p>

        <h3>History of Fencing</h3>
        <p>Fencing has been practiced for thousands of years, initially as a combat skill. It became a sport in the 15th century and has been part of the modern Olympic Games since their inception in 1896.</p>

        <h3>The Three Disciplines</h3>
        <p>Olympic fencing consists of three weapon disciplines, each with unique rules and characteristics:</p>

        <div class="grid">
            <div class="card">
                <span class="weapon-type">Foil</span>
                <h3>Foil</h3>
                <p><strong>Target Area:</strong> Torso only</p>
                <p><strong>Scoring:</strong> Point (tip) only</p>
                <p><strong>Right of Way:</strong> Yes</p>
                <p>The foil is a light, flexible weapon emphasizing finesse and precision. It's often the first weapon beginners learn.</p>
            </div>

            <div class="card">
                <span class="weapon-type">Épée</span>
                <h3>Épée</h3>
                <p><strong>Target Area:</strong> Entire body</p>
                <p><strong>Scoring:</strong> Point (tip) only</p>
                <p><strong>Right of Way:</strong> No</p>
                <p>The épée is the heaviest weapon with the largest bell guard. Both fencers can score simultaneously, making it a game of patience and strategy.</p>
            </div>

            <div class="card">
                <span class="weapon-type">Sabre</span>
                <h3>Sabre</h3>
                <p><strong>Target Area:</strong> Upper body (above waist)</p>
                <p><strong>Scoring:</strong> Point and edge</p>
                <p><strong>Right of Way:</strong> Yes</p>
                <p>The sabre is the fastest weapon in fencing. Cuts and slashes with the edge are allowed, making for dynamic and aggressive bouts.</p>
            </div>
        </div>

        <h3>Scoring and Rules</h3>
        <p>Fencing bouts are fought on a 14-meter strip called a piste. In modern competitive fencing:</p>
        <ul>
            <li>Bouts are fought to 15 touches or for a maximum of 9 minutes (three 3-minute periods)</li>
            <li>Electronic scoring systems register valid touches</li>
            <li>Fencers wear metallic lames (vests) to register touches on valid target areas</li>
            <li>Right of way (priority) applies in foil and sabre but not épée</li>
        </ul>

        <h3>Getting Started</h3>
        <p>Most fencing clubs welcome beginners of all ages. You'll typically start with basic footwork and blade work before progressing to bouting. Many clubs offer equipment rentals for newcomers.</p>
    </div>
</div>
@endsection
