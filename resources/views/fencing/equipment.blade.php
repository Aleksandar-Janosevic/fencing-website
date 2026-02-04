@extends('layouts.app')

@section('title', 'HEMA Equipment')

@section('content')
<div class="container">
    <div class="content">
        <h2>HEMA Equipment</h2>
        <p>Historical European Martial Arts requires specialized equipment designed to allow full-contact sparring while protecting practitioners. Here's a comprehensive guide to the essential gear.</p>

        <h3>Training Weapons</h3>
        <div class="grid">
            <div class="card">
                <span class="weapon-type">Longsword</span>
                <h3>Longsword</h3>
                <p><strong>Length:</strong> 115-140cm overall</p>
                <p><strong>Blade Length:</strong> 85-105cm</p>
                <p><strong>Weight:</strong> 1.3-1.8kg (steel feders)</p>
                <p>The most popular HEMA weapon. Steel training swords (feders) have widened, flexible blades and rounded tips. Synthetic trainers are available for beginners.</p>
            </div>

            <div class="card">
                <span class="weapon-type">Rapier</span>
                <h3>Rapier</h3>
                <p><strong>Length:</strong> 100-130cm overall</p>
                <p><strong>Blade Length:</strong> 90-110cm</p>
                <p><strong>Weight:</strong> 1.0-1.4kg</p>
                <p>Training rapiers feature flexible blades with blunted tips. Complex hilts provide hand protection. Often paired with a dagger, buckler, or cloak.</p>
            </div>

            <div class="card">
                <span class="weapon-type">Sword & Buckler</span>
                <h3>Sword & Buckler</h3>
                <p><strong>Sword Length:</strong> 75-90cm</p>
                <p><strong>Buckler Diameter:</strong> 20-40cm</p>
                <p><strong>Combined Weight:</strong> ~1.5kg</p>
                <p>A one-handed sword paired with a small round shield (buckler). Popular in medieval sources like I.33. Synthetic and steel options available.</p>
            </div>
        </div>

        <h3>Protective Gear</h3>
        <p>Safety is paramount in HEMA. Equipment must protect against cuts, thrusts, and impacts from steel or synthetic weapons at full speed.</p>

        <h3>Essential Protective Equipment</h3>
        <ul>
            <li><strong>Mask:</strong> HEMA-rated mask with reinforced bib (back-of-head protection often required). Must handle heavier impacts than sport fencing masks (1600N+ rated).</li>
            <li><strong>Jacket:</strong> Heavy padded jacket (350N-800N rated) designed for HEMA. Must allow mobility while absorbing weapon impacts.</li>
            <li><strong>Gorget:</strong> Rigid throat and neck protector — essential for thrust-heavy weapons like rapier.</li>
            <li><strong>Gloves:</strong> Heavy padded gloves specifically designed for HEMA (e.g., Sparring Gloves, SPES Heavies, or similar). Must protect fingers and back of hand from cuts.</li>
            <li><strong>Elbow & Knee Pads:</strong> Hard-shell protectors to absorb impacts to joints.</li>
            <li><strong>Forearm & Shin Protection:</strong> Rigid protectors for the forearms and shins.</li>
            <li><strong>Chest Protector:</strong> Rigid or heavily padded protection for the torso, especially important for thrust-heavy sparring.</li>
            <li><strong>Groin Protection:</strong> Athletic cup/box is mandatory for all practitioners.</li>
        </ul>

        <h3>Additional Protective Options</h3>
        <ul>
            <li><strong>Overlay/Back-of-Head Protector:</strong> Additional protection for the back of the skull</li>
            <li><strong>Gambeson:</strong> Quilted jacket worn under or instead of a HEMA jacket for additional padding</li>
            <li><strong>Fencing Pants:</strong> Padded pants designed for HEMA, some with integrated hip and thigh protection</li>
            <li><strong>Red Dragon/Padded Mask Overlay:</strong> Extra padding for the top and sides of the mask</li>
        </ul>

        <h3>Other Weapons</h3>
        <ul>
            <li><strong>Messer:</strong> Single-edged training sword for German tradition</li>
            <li><strong>Dagger:</strong> Steel or synthetic training daggers</li>
            <li><strong>Sabre/Military Sabre:</strong> Curved cutting sword trainers</li>
            <li><strong>Polearms:</strong> Training spears, halberds, and pollaxes</li>
            <li><strong>Synthetic Trainers:</strong> Nylon/plastic weapons for beginners or drilling</li>
        </ul>

        <h3>Cost Considerations</h3>
        <div class="content">
            <p><strong>Beginner Set (Synthetic):</strong> $200-$400 - Synthetic trainer, basic mask, padded jacket, gloves, and basic protection.</p>
            
            <p><strong>Intermediate Set (Steel):</strong> $800-$1,500 - Steel feder, HEMA-rated mask, quality jacket, proper HEMA gloves, and full protective kit.</p>
            
            <p><strong>Competition Set:</strong> $1,500-$3,000+ - Premium steel weapons, top-tier protective equipment, multiple weapon systems.</p>
            
            <p>Most clubs have loaner gear for beginners. Start with synthetic weapons and basic protection, then invest in quality equipment as you progress.</p>
        </div>

        <h3>Maintenance</h3>
        <p>Proper care extends equipment life and ensures safety:</p>
        <ul>
            <li>Inspect steel weapons for burrs, cracks, and excessive bending before each session</li>
            <li>File down any burrs that develop on blade edges</li>
            <li>Oil steel blades to prevent rust, especially after sweaty sessions</li>
            <li>Air out protective equipment after use to prevent mold and odor</li>
            <li>Check stitching and padding integrity on gloves and jackets regularly</li>
            <li>Replace any equipment that shows significant wear or damage</li>
        </ul>
    </div>
</div>
@endsection
