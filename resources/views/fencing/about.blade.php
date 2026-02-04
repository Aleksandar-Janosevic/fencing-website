@extends('layouts.app')

@section('title', 'About HEMA')

@section('content')
<div class="container">
    <div class="content">
        <h2>About HEMA</h2>
        <p>Historical European Martial Arts (HEMA) is the study and practice of historical fighting systems from Europe, based on surviving treatises, manuals, and other historical sources. HEMA practitioners aim to reconstruct and revive these martial traditions through scholarly research and practical application.</p>

        <h3>History of HEMA</h3>
        <p>While Europeans practiced martial arts for centuries, much of this knowledge was nearly lost over time. The modern HEMA movement began in the 1990s when practitioners started systematically studying surviving fight books (Fechtbücher) and treatises. Today, HEMA has grown into a worldwide community with thousands of practitioners, clubs, and tournaments.</p>

        <h3>Major Traditions</h3>
        <p>HEMA encompasses many weapon systems and fighting traditions from different eras and regions:</p>

        <div class="grid">
            <div class="card">
                <span class="weapon-type">German</span>
                <h3>German Longsword</h3>
                <p><strong>Era:</strong> 14th–16th century</p>
                <p><strong>Key Masters:</strong> Johannes Liechtenauer, Sigmund Ringeck, Hans Talhoffer</p>
                <p><strong>Weapon:</strong> Two-handed longsword</p>
                <p>The German tradition is built around the teachings of Johannes Liechtenauer, encoded in cryptic verses. It emphasizes the concepts of Vor (before), Nach (after), Indes (meanwhile), and the five master cuts (Meisterhaue).</p>
            </div>

            <div class="card">
                <span class="weapon-type">Italian</span>
                <h3>Italian Traditions</h3>
                <p><strong>Era:</strong> 14th–17th century</p>
                <p><strong>Key Masters:</strong> Fiore dei Liberi, Filippo Vadi, Ridolfo Capoferro</p>
                <p><strong>Weapons:</strong> Longsword, rapier, dagger</p>
                <p>Italian traditions range from Fiore's armored combat system to the elegant rapier fencing of the Renaissance. Fiore's "Flower of Battle" covers unarmed combat, dagger, sword, polearms, and mounted combat.</p>
            </div>

            <div class="card">
                <span class="weapon-type">English</span>
                <h3>English Martial Arts</h3>
                <p><strong>Era:</strong> 15th–18th century</p>
                <p><strong>Key Masters:</strong> George Silver, Joseph Swetnam, Donald McBane</p>
                <p><strong>Weapons:</strong> Sword and buckler, backsword, quarterstaff</p>
                <p>English traditions include medieval sword and buckler fighting, Renaissance backsword, and later smallsword. George Silver's works champion the "true fight" against Italian rapier innovations.</p>
            </div>
        </div>

        <h3>Common Weapons in HEMA</h3>
        <p>HEMA practitioners study a wide variety of historical weapons:</p>
        <ul>
            <li><strong>Longsword:</strong> The most popular HEMA weapon, a two-handed sword used for cutting and thrusting</li>
            <li><strong>Rapier:</strong> A long thrusting sword popular in the 16th and 17th centuries</li>
            <li><strong>Sword and Buckler:</strong> A one-handed sword paired with a small shield</li>
            <li><strong>Messer:</strong> A single-edged German sword or large knife</li>
            <li><strong>Sabre:</strong> A curved cutting sword with military applications</li>
            <li><strong>Dagger:</strong> Often studied as a standalone system or alongside other weapons</li>
            <li><strong>Polearms:</strong> Spears, halberds, pollaxes, and other staff weapons</li>
            <li><strong>Wrestling (Ringen):</strong> Unarmed grappling, often integrated with armed combat</li>
        </ul>

        <h3>Getting Started</h3>
        <p>Many HEMA clubs welcome beginners with no prior experience. Most clubs start new members with synthetic (nylon) training weapons before progressing to steel. You'll learn fundamental concepts, guards, cuts, and thrusts before moving to partnered drills and eventually sparring. Research local clubs and attend an introductory class to see if HEMA is right for you!</p>
    </div>
</div>
@endsection
