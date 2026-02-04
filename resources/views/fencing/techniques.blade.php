@extends('layouts.app')

@section('title', 'HEMA Techniques')

@section('content')
<div class="container">
    <div class="content">
        <h2>HEMA Techniques</h2>
        <p>Historical European Martial Arts encompasses diverse fighting systems with techniques preserved in historical treatises. Here we explore key concepts, primarily from the German longsword tradition, though similar principles appear across many systems.</p>

        <h3>Fundamental Guards (Huten)</h3>
        <p>Guards are defensive positions from which you can both defend and attack. The German longsword tradition features four primary guards:</p>
        
        <div class="grid">
            <div class="card">
                <h3>Vom Tag (From the Roof)</h3>
                <p>A high guard with the sword held above or behind the head, point up or back. An aggressive position that threatens powerful descending cuts.</p>
            </div>

            <div class="card">
                <h3>Ochs (Ox)</h3>
                <p>A high guard with the hilt near the head and point threatening the opponent's face. Named for the resemblance to ox horns. Excellent for thrusting.</p>
            </div>

            <div class="card">
                <h3>Pflug (Plow)</h3>
                <p>A low guard with the hilt at the hip and point aimed at the opponent's face or chest. Protects the lower openings while threatening a thrust.</p>
            </div>

            <div class="card">
                <h3>Alber (Fool)</h3>
                <p>A low guard with the point aimed at the ground. Appears weak but invites attacks that can be countered. Tests the opponent's intentions.</p>
            </div>
        </div>

        <h3>The Five Master Cuts (Meisterhaue)</h3>
        <p>These are the signature techniques of the German longsword tradition, designed to counter specific guards and situations:</p>
        <ul>
            <li><strong>Zornhau (Wrath Cut):</strong> A powerful diagonal descending cut that breaks Vom Tag. Can transition into the Zornhau-Ort thrust.</li>
            <li><strong>Krumphau (Crooked Cut):</strong> A cut with crossed hands that targets the hands or sword of an opponent in Ochs.</li>
            <li><strong>Zwerchhau (Thwart Cut):</strong> A horizontal cut delivered with the short edge, excellent against cuts from above.</li>
            <li><strong>Schielhau (Squinting Cut):</strong> A deceptive cut that appears to go one way but strikes another, effective against Pflug.</li>
            <li><strong>Scheitelhau (Scalp Cut):</strong> A vertical descending cut aimed at the top of the head, counters Alber.</li>
        </ul>

        <h3>Core Concepts</h3>
        <ul>
            <li><strong>Vor (Before):</strong> Having the initiative, attacking first and forcing your opponent to react</li>
            <li><strong>Nach (After):</strong> When you must respond to your opponent's action, working to regain the Vor</li>
            <li><strong>Indes (Meanwhile):</strong> Acting in the moment of contact, feeling your opponent's pressure and responding instantly</li>
            <li><strong>Fühlen (Feeling):</strong> Sensing your opponent's pressure and intention through blade contact</li>
            <li><strong>Winden (Winding):</strong> Rotating the blade while in contact to find an opening</li>
        </ul>

        <h3>Defensive Concepts</h3>
        <div class="content">
            <p><strong>Versetzen (Parrying):</strong> Displacing an incoming attack with your blade, ideally while simultaneously threatening with a counter-attack (this is "setting aside").</p>
            
            <p><strong>Absetzen (Setting Off):</strong> A combined parry and thrust in one motion, intercepting the attack while simultaneously striking.</p>
            
            <p><strong>Nachreissen (Chasing):</strong> Following a withdrawing opponent with attacks, maintaining pressure.</p>
            
            <p><strong>Zufechten (Approach):</strong> The initial exchange when fighters come into distance, often the most dangerous phase.</p>
        </div>

        <h3>Training Tips</h3>
        <ul>
            <li>Study the historical sources — read translations of Ringeck, Meyer, or Fiore</li>
            <li>Practice solo drills for cutting mechanics and footwork</li>
            <li>Work partnered drills to develop timing and distance</li>
            <li>Spar regularly with protective equipment to test techniques under pressure</li>
            <li>Film your sparring and review to identify areas for improvement</li>
            <li>Cross-train in different weapons to broaden your understanding</li>
            <li>Attend seminars and workshops with experienced instructors</li>
        </ul>
    </div>
</div>
@endsection
