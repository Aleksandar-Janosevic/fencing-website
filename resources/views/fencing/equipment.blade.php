@extends('layouts.app')

@section('title', 'Fencing Equipment')

@section('content')
<div class="container">
    <div class="content">
        <h2>Fencing Equipment</h2>
        <p>Fencing requires specialized equipment to ensure safety and fair competition. Here's a comprehensive guide to the essential gear.</p>

        <h3>Weapons</h3>
        <div class="grid">
            <div class="card">
                <span class="weapon-type">Foil</span>
                <h3>Foil</h3>
                <p><strong>Weight:</strong> ~350g</p>
                <p><strong>Length:</strong> Max 110cm</p>
                <p><strong>Blade:</strong> Rectangular cross-section, flexible</p>
                <p>Features a small circular guard (bell) and a spring-loaded tip that activates the electronic scoring system.</p>
            </div>

            <div class="card">
                <span class="weapon-type">Épée</span>
                <h3>Épée</h3>
                <p><strong>Weight:</strong> ~770g</p>
                <p><strong>Length:</strong> Max 110cm</p>
                <p><strong>Blade:</strong> Triangular cross-section, stiff</p>
                <p>The heaviest weapon with the largest bell guard. The entire blade is stiffer than foil for more precise point control.</p>
            </div>

            <div class="card">
                <span class="weapon-type">Sabre</span>
                <h3>Sabre</h3>
                <p><strong>Weight:</strong> ~500g</p>
                <p><strong>Length:</strong> Max 105cm</p>
                <p><strong>Blade:</strong> Flat cross-section, flexible</p>
                <p>Features a curved hand guard and cutting edges. The entire blade can score touches, not just the tip.</p>
            </div>
        </div>

        <h3>Protective Gear</h3>
        <p>Safety is paramount in fencing. All equipment must meet FIE (Fédération Internationale d'Escrime) standards.</p>

        <h3>Essential Protective Equipment</h3>
        <ul>
            <li><strong>Mask:</strong> Wire mesh face protection with padded bib covering the neck and throat. Must withstand 12kg of penetration force.</li>
            <li><strong>Jacket:</strong> Heavy-duty protective jacket made from Kevlar or similar materials. The fencing arm is reinforced.</li>
            <li><strong>Plastron (Underarm Protector):</strong> Worn under the jacket for extra protection on the weapon-arm side.</li>
            <li><strong>Glove:</strong> Padded glove for the weapon hand with a gauntlet extending over the jacket cuff.</li>
            <li><strong>Knickers/Breeches:</strong> Protective pants that extend just below the knee.</li>
            <li><strong>Long Socks:</strong> Must cover the knee and overlap with the knickers.</li>
            <li><strong>Chest Protector:</strong> Mandatory for women, optional for men. Provides additional protection for the chest area.</li>
        </ul>

        <h3>Electronic Scoring Equipment</h3>
        <p>Modern fencing uses electronic systems to register valid touches:</p>
        <ul>
            <li><strong>Body Cord:</strong> Connects the weapon to the scoring system via the reel</li>
            <li><strong>Lamé (Metallic Vest):</strong> Required for foil and sabre. Covers the valid target area and conducts electricity</li>
            <li><strong>Metallic Mask Overlay:</strong> Required for sabre fencing to register head touches</li>
            <li><strong>Scoring Box:</strong> Central unit that registers touches and displays scores with colored lights</li>
        </ul>

        <h3>Additional Equipment</h3>
        <ul>
            <li><strong>Fencing Shoes:</strong> Lightweight shoes with reinforced toes and good lateral support</li>
            <li><strong>Weapon Bag:</strong> Long bag to transport weapons and equipment</li>
            <li><strong>Tools:</strong> Screwdrivers, Allen keys, and multimeter for weapon maintenance</li>
            <li><strong>Spare Parts:</strong> Tips, springs, body cords, and other replaceable components</li>
        </ul>

        <h3>Cost Considerations</h3>
        <div class="content">
            <p><strong>Beginner Set:</strong> $200-$400 - Basic equipment including one weapon, mask, jacket, glove, and knickers.</p>
            
            <p><strong>Intermediate Set:</strong> $600-$1,200 - Higher quality protective gear, multiple weapons, and electronic equipment.</p>
            
            <p><strong>Competition Set:</strong> $1,500-$3,000+ - FIE-certified equipment, premium weapons, and professional-grade gear.</p>
            
            <p>Most clubs offer equipment rental or loaner gear for beginners, allowing you to try the sport before making a significant investment.</p>
        </div>

        <h3>Maintenance</h3>
        <p>Proper care extends equipment life and ensures safety:</p>
        <ul>
            <li>Inspect weapons before each use for cracks or damage</li>
            <li>Clean and test electronic components regularly</li>
            <li>Wash protective clothing after use to prevent odor and wear</li>
            <li>Store equipment in a cool, dry place</li>
            <li>Replace worn parts promptly - never fence with damaged equipment</li>
        </ul>
    </div>
</div>
@endsection
