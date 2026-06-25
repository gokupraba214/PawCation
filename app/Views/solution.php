<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold mb-4">The Problem & The Solution</h1>
                <p class="lead">Transforming pet care from anxiety to assurance</p>
            </div>
        </div>
    </div>
</section>

<!-- The Problem Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="problem-visual position-relative">
                    <img src="https://images.unsplash.com/photo-1534361960057-19889db9621e?w=600&h=400&fit=crop" alt="Stressed Pet in Kennel" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 start-0 bg-danger text-white rounded-3 p-3 m-3 shadow">
                        <i class="bi bi-exclamation-triangle-fill"></i> The Problem
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title text-danger">The Problem</h2>
                <div class="card p-4 shadow-sm border-danger">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                <strong>Overcrowded Facilities:</strong> Standard pet boarding facilities are often overcrowded, leading to stressed pets and reduced individual attention.
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                <strong>Lack of Transparency:</strong> Owners receive minimal or no daily updates about their pet's well-being, causing intense anxiety during travel.
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                <strong>Messy Paperwork:</strong> Vaccine verification and medical records rely on physical paperwork that can be lost, damaged, or difficult to verify.
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                <strong>Specialized Care Challenges:</strong> Caretakers struggle to manage specialized medical or dietary needs without proper documentation systems.
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                <strong>Owner Anxiety:</strong> Pet parents face intense anxiety leaving their beloved companions in unknown conditions with no visibility.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Solution Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="solution-visual position-relative">
                    <img src="https://images.unsplash.com/photo-1601979031925-424e53b6caaa?w=600&h=400&fit=crop" alt="Happy Pet with Caretaker" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 start-0 bg-success text-white rounded-3 p-3 m-3 shadow">
                        <i class="bi bi-check-circle-fill"></i> The Solution
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <h2 class="section-title text-success">The Solution</h2>
                <div class="card p-4 shadow-sm border-success">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Centralized Digital Booking Engine:</strong> PawCation provides a streamlined online platform for seamless booking and management.
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Validated Caretaker Profiles:</strong> Owners can view detailed, verified caretaker profiles with ratings, certifications, and facility photos.
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Digital Pet Health Passports:</strong> Upload and manage digital vaccination records, medical history, and dietary requirements securely.
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Live Digital Updates:</strong> Receive real-time notifications, photos, and activity logs throughout your pet's stay.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Peace of Mind:</strong> Complete transparency and visibility into your pet's care, eliminating travel anxiety.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- USP Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card p-5 shadow-lg border-primary" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); color: white;">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="bi bi-stars" style="font-size: 4rem;"></i>
                        </div>
                        <h2 class="fw-bold mb-4">Unique Selling Point</h2>
                        <h3 class="display-5 fw-bold mb-4">Live Paws-Cam & Activity Log Tracker</h3>
                        <p class="lead mb-4">Our revolutionary feature allows pet owners to monitor their furry friends in real-time. Track feeding schedules, walking sessions, and medication milestones with live updates and photo documentation.</p>
                        <div class="row g-4 mt-4">
                            <div class="col-md-4">
                                <div class="p-3 bg-white bg-opacity-25 rounded">
                                    <i class="bi bi-camera-video" style="font-size: 2rem;"></i>
                                    <h5 class="fw-bold mt-2">24/7 Live Webcam</h5>
                                    <p class="small mb-0">Watch your pet anytime, anywhere</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white bg-opacity-25 rounded">
                                    <i class="bi bi-clipboard-check" style="font-size: 2rem;"></i>
                                    <h5 class="fw-bold mt-2">Activity Logs</h5>
                                    <p class="small mb-0">Detailed feeding, walking, and medication tracking</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white bg-opacity-25 rounded">
                                    <i class="bi bi-images" style="font-size: 2rem;"></i>
                                    <h5 class="fw-bold mt-2">Photo Updates</h5>
                                    <p class="small mb-0">Regular photo documentation of your pet's stay</p>
                                </div>
                            </div>
                        </div>
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
                <h2 class="fw-bold mb-4">Experience the PawCation Difference</h2>
                <p class="lead mb-4">See how our solution transforms pet care from stressful to seamless.</p>
                <a href="/features" class="btn btn-primary btn-lg me-2">Explore Features</a>
                <a href="/pricing" class="btn btn-outline-primary btn-lg">View Pricing</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
