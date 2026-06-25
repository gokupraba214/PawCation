<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-4 fw-bold mb-4">Premium Boarding & Loving Pet Care, Tracked in Real-Time</h1>
                <p class="lead mb-4">PawCation is an elite pet care marketplace connecting busy pet parents with verified caretakers and luxury host homes. We eliminate the anxiety of travel by providing upfront pricing, validated pet medical histories, and interactive daily logs.</p>
                <a href="/features" class="btn btn-light btn-lg fw-bold">Explore Our Services</a>
            </div>
            <div class="col-lg-5 text-center">
                <div class="hero-image position-relative">
                    <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=500&h=500&fit=crop" alt="Happy Dog" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px; object-fit: cover;">
                    <div class="position-absolute bottom-0 end-0 bg-white rounded-3 p-3 shadow m-3">
                        <i class="bi bi-heart-fill text-danger"></i> 500+ Happy Pets
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Overview -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Why Choose PawCation?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=250&fit=crop" alt="Verified Caretaker" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h4 class="card-title fw-bold">Verified Caretakers</h4>
                        <p class="card-text">All caretakers undergo rigorous background checks and facility certifications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=250&fit=crop" alt="Live Paws-Cam" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-camera-video feature-icon"></i>
                        <h4 class="card-title fw-bold">Live Paws-Cam</h4>
                        <p class="card-text">Watch your pet in real-time with our live webcam monitoring system.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <img src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=250&fit=crop" alt="Activity Tracking" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-clipboard-data feature-icon"></i>
                        <h4 class="card-title fw-bold">Activity Tracking</h4>
                        <p class="card-text">Daily logs of feeding, walking, and medication milestones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">How It Works</h2>
        <div class="row g-4">
            <div class="col-md-3 text-center">
                <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: bold;">1</div>
                <h5 class="fw-bold">Search & Filter</h5>
                <p>Browse verified caretakers by location, rating, and service tier.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: bold;">2</div>
                <h5 class="fw-bold">Book Online</h5>
                <p>Secure your booking with upfront pricing and digital passport verification.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: bold;">3</div>
                <h5 class="fw-bold">Track Live</h5>
                <p>Monitor your pet's activities through real-time updates and photos.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: bold;">4</div>
                <h5 class="fw-bold">Relax & Return</h5>
                <p>Enjoy your trip knowing your pet is in safe, loving hands.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Ready to Give Your Pet the Care They Deserve?</h2>
                <p class="lead mb-4">Join thousands of pet parents who trust PawCation for their pet care needs.</p>
                <a href="/features" class="btn btn-primary btn-lg">Get Started Today</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
