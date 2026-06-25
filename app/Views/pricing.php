<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold mb-4">Pricing & Revenue Model</h1>
                <p class="lead">Transparent pricing for premium pet care services</p>
            </div>
        </div>
    </div>
</section>

<!-- Revenue Strategy Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card p-5 shadow-sm">
                    <div class="card-body text-center">
                        <h2 class="section-title mb-4"><i class="bi bi-cash-stack me-2"></i>Revenue Strategy</h2>
                        <p class="lead mb-4">PawCation generates revenue through a sustainable marketplace model that benefits both pet owners and caretakers.</p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="p-4 bg-light rounded">
                                    <i class="bi bi-percent feature-icon"></i>
                                    <h4 class="fw-bold">15% Commission</h4>
                                    <p class="mb-0">Platform takes a 15% marketplace commission from caretakers' total earnings per booking.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 bg-light rounded">
                                    <i class="bi bi-shield-check feature-icon"></i>
                                    <h4 class="fw-bold">Transparent Pricing</h4>
                                    <p class="mb-0">Upfront pricing with no hidden fees for pet owners. Caretakers keep 85% of their earnings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Matrix Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Service Tiers</h2>
                <p class="text-muted">Choose the perfect care plan for your beloved pet</p>
            </div>
        </div>
        
        <div class="row g-4 align-items-center">
            <!-- Tier 1: Essential Daycare -->
            <div class="col-lg-4">
                <div class="card pricing-card h-100 p-4">
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-3">Essential Daycare</h4>
                        <div class="price mb-3">RM 35<span class="fs-5 text-muted">/day</span></div>
                        <p class="text-muted mb-4">Perfect for busy pet parents needing daytime care</p>
                        <hr class="my-4">
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>8-hour supervision</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>1 standard meal</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Digital passport verification</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Basic first-aid</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>1 daily photo update</li>
                        </ul>
                        <button class="btn btn-outline-primary w-100">Select Plan</button>
                    </div>
                </div>
            </div>
            
            <!-- Tier 2: Overnight Deluxe (Most Popular) -->
            <div class="col-lg-4">
                <div class="card pricing-card popular h-100 p-4 position-relative">
                    <span class="badge-popular">Most Popular</span>
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-3">Overnight Deluxe</h4>
                        <div class="price mb-3">RM 75<span class="fs-5 text-muted">/night</span></div>
                        <p class="text-muted mb-4">Ideal for extended stays with premium care</p>
                        <hr class="my-4">
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Overnight host stay</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>2 premium meals</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Oral medication administration</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Full bath (stays > 3 nights)</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>3 photo/video logs daily</li>
                        </ul>
                        <button class="btn btn-primary w-100">Select Plan</button>
                    </div>
                </div>
            </div>
            
            <!-- Tier 3: Elite VIP & Medical -->
            <div class="col-lg-4">
                <div class="card pricing-card h-100 p-4">
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-3">Elite VIP & Medical</h4>
                        <div class="price mb-3">RM 130<span class="fs-5 text-muted">/night</span></div>
                        <p class="text-muted mb-4">Ultimate care for pets with special needs</p>
                        <hr class="my-4">
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Dedicated 1-on-1 attention</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Custom diet prep</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Daily vitals logging</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Injections/24-7 vet on-call</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>24/7 live webcam access</li>
                        </ul>
                        <button class="btn btn-outline-primary w-100">Select Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h2 class="section-title text-center">Feature Comparison</h2>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Feature</th>
                        <th>Essential Daycare</th>
                        <th>Overnight Deluxe</th>
                        <th>Elite VIP & Medical</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Duration</strong></td>
                        <td>8 hours</td>
                        <td>Overnight</td>
                        <td>24/7</td>
                    </tr>
                    <tr>
                        <td><strong>Meals</strong></td>
                        <td>1 standard meal</td>
                        <td>2 premium meals</td>
                        <td>Custom diet prep</td>
                    </tr>
                    <tr>
                        <td><strong>Medication</strong></td>
                        <td>Basic first-aid</td>
                        <td>Oral medication</td>
                        <td>Injections/Vet on-call</td>
                    </tr>
                    <tr>
                        <td><strong>Photo Updates</strong></td>
                        <td>1 daily photo</td>
                        <td>3 photo/video logs</td>
                        <td>Unlimited + Live Webcam</td>
                    </tr>
                    <tr>
                        <td><strong>Health Monitoring</strong></td>
                        <td>Basic supervision</td>
                        <td>Activity tracking</td>
                        <td>Daily vitals logging</td>
                    </tr>
                    <tr>
                        <td><strong>Personal Attention</strong></td>
                        <td>Group care</td>
                        <td>Small group</td>
                        <td>1-on-1 dedicated</td>
                    </tr>
                    <tr>
                        <td><strong>Grooming</strong></td>
                        <td>-</td>
                        <td>Full bath (>3 nights)</td>
                        <td>Included</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Ready to Book?</h2>
                <p class="lead mb-4">Choose the perfect care plan for your pet and enjoy peace of mind.</p>
                <a href="/features" class="btn btn-primary btn-lg me-2">Explore Features</a>
                <a href="/home" class="btn btn-outline-primary btn-lg">Back to Home</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
