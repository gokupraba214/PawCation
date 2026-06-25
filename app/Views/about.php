<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold mb-4">About PawCation</h1>
                <p class="lead">Where Every Pet Treated Like Family</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="pet-pattern rounded-3 p-5 text-center position-relative">
                    <i class="bi bi-heart-fill paw-decoration" style="top: 20px; left: 20px;"></i>
                    <i class="bi bi-paw-fill paw-decoration" style="bottom: 20px; right: 20px;"></i>
                    <div class="bg-white rounded-3 p-4 shadow-lg">
                        <i class="bi bi-house-heart" style="font-size: 8rem; background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Our Story</h2>
                <div class="card p-4 shadow-lg border-0">
                    <div class="card-body">
                        <p class="fw-bold lead mb-3">PawCation was born from a simple belief: every pet deserves the same love, care, and attention they receive at home.</p>
                        <p class="mb-2">Founded in 2024, we recognized the growing need for a premium pet care platform that combines convenience with compassion. Traditional boarding facilities often left pet parents anxious and disconnected from their furry family members.</p>
                        <p class="mb-2">Our mission is to revolutionize pet care by providing transparent, verified, and loving care through technology. We connect pet parents with certified caretakers who treat every pet as if they were their own.</p>
                        <p class="mb-2">With features like live webcams, real-time activity logs, and digital health passports, we've created a platform where pet parents can travel with complete peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Vision -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card p-5 h-100 border-0 shadow-lg">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="bi bi-bullseye feature-icon"></i>
                        </div>
                        <h3 class="fw-bold mb-4">Our Mission</h3>
                        <p class="lead">To provide exceptional pet care services that prioritize the health, happiness, and safety of every pet while giving pet parents complete transparency and peace of mind.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card p-5 h-100 border-0 shadow-lg">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="bi bi-stars feature-icon"></i>
                        </div>
                        <h3 class="fw-bold mb-4">Our Vision</h3>
                        <p class="lead">To become Malaysia's leading pet care platform, setting the standard for premium, transparent, and technology-driven pet services that pets and parents love.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Core Values</h2>
        <div class="row g-4">
            <div class="col-md-3 col-6 text-center">
                <div class="card p-4 h-100 border-0 shadow">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-shield-check feature-icon"></i>
                        </div>
                        <h5 class="fw-bold">Trust & Safety</h5>
                        <p class="card-text small">Verified caretakers, secure facilities, and complete transparency</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="card p-4 h-100 border-0 shadow">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-heart feature-icon"></i>
                        </div>
                        <h5 class="fw-bold">Compassion</h5>
                        <p class="card-text small">Every pet treated with love, patience, and individual attention</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="card p-4 h-100 border-0 shadow">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-lightning feature-icon"></i>
                        </div>
                        <h5 class="fw-bold">Innovation</h5>
                        <p class="card-text small">Leveraging technology for better pet care experiences</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="card p-4 h-100 border-0 shadow">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-people feature-icon"></i>
                        </div>
                        <h5 class="fw-bold">Community</h5>
                        <p class="card-text small">Building a network of caring pet parents and professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Why Pet Parents Choose Us</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-camera-video" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Live Monitoring</h5>
                            </div>
                        </div>
                        <p class="card-text">Watch your pet anytime with our 24/7 live webcam feature. Never miss a moment of your pet's day.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-clipboard-check" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Real-Time Updates</h5>
                            </div>
                        </div>
                        <p class="card-text">Get instant notifications about feeding, walking, medication, and activities throughout the day.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-award" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Verified Caretakers</h5>
                            </div>
                        </div>
                        <p class="card-text">All caretakers undergo rigorous background checks and facility certifications for your peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card p-4 border-0 shadow">
                    <div class="card-body">
                        <h2 class="display-4 fw-bold" style="color: var(--primary-color);">500+</h2>
                        <p class="text-muted mb-0">Happy Pets</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card p-4 border-0 shadow">
                    <div class="card-body">
                        <h2 class="display-4 fw-bold" style="color: var(--primary-color);">50+</h2>
                        <p class="text-muted mb-0">Verified Caretakers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card p-4 border-0 shadow">
                    <div class="card-body">
                        <h2 class="display-4 fw-bold" style="color: var(--primary-color);">98%</h2>
                        <p class="text-muted mb-0">Satisfaction Rate</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card p-4 border-0 shadow">
                    <div class="card-body">
                        <h2 class="display-4 fw-bold" style="color: var(--primary-color);">24/7</h2>
                        <p class="text-muted mb-0">Support Available</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Ready to Experience the PawCation Difference?</h2>
                <p class="lead mb-4">Join hundreds of pet parents who trust us with their furry family members.</p>
                <a href="/features" class="btn btn-primary btn-lg me-2">Explore Our Services</a>
                <a href="/pricing" class="btn btn-outline-primary btn-lg">View Pricing</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
