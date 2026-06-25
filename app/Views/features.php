<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold mb-4">Services & Features</h1>
                <p class="lead">Explore our comprehensive pet care platform modules</p>
            </div>
        </div>
    </div>
</section>

<!-- Module 1: Interactive Search & Booking -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h2 class="section-title"><i class="bi bi-search me-2"></i>Module 1: Interactive Search & Booking</h2>
                <p class="text-muted">A clean UI grid allowing pet owners to filter caretakers by location, rating, and service tiers.</p>
            </div>
        </div>
        
        <div class="dashboard-mockup">
            <!-- Search Filters -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <label class="form-label fw-bold">Location</label>
                    <select class="form-select">
                        <option selected>All Locations</option>
                        <option>Penang</option>
                        <option>Kuala Lumpur</option>
                        <option>Johor Bahru</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Rating</label>
                    <select class="form-select">
                        <option selected>All Ratings</option>
                        <option>5 Stars</option>
                        <option>4+ Stars</option>
                        <option>3+ Stars</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Service Tier</label>
                    <select class="form-select">
                        <option selected>All Tiers</option>
                        <option>Essential Daycare</option>
                        <option>Overnight Deluxe</option>
                        <option>Elite VIP & Medical</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">&nbsp;</label>
                    <button class="btn btn-primary w-100">Search Caretakers</button>
                </div>
            </div>
            
            <!-- Caretaker Cards Grid -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-person-fill" style="font-size: 1.2rem; color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Sarah Chen</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="text-muted small">(5.0)</span>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text small"><strong>Location:</strong> Penang</p>
                            <p class="card-text small"><strong>Services:</strong> Daycare, Overnight</p>
                            <p class="card-text small"><strong>Experience:</strong> 5 years</p>
                            <button class="btn btn-outline-primary btn-sm w-100">View Profile</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-person-fill" style="font-size: 1.2rem; color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Ahmad Razak</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-muted small">(4.5)</span>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text small"><strong>Location:</strong> Kuala Lumpur</p>
                            <p class="card-text small"><strong>Services:</strong> Medical Care, VIP</p>
                            <p class="card-text small"><strong>Experience:</strong> 8 years</p>
                            <button class="btn btn-outline-primary btn-sm w-100">View Profile</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-person-fill" style="font-size: 1.2rem; color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Mei Ling Tan</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="text-muted small">(5.0)</span>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text small"><strong>Location:</strong> Johor Bahru</p>
                            <p class="card-text small"><strong>Services:</strong> Daycare, Overnight</p>
                            <p class="card-text small"><strong>Experience:</strong> 3 years</p>
                            <button class="btn btn-outline-primary btn-sm w-100">View Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Module 2: Live Activity Log Dashboard -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h2 class="section-title"><i class="bi bi-clipboard-data me-2"></i>Module 2: Live Activity Log Dashboard</h2>
                <p class="text-muted">A visual checklist detailing when a pet was fed, walked, or given medication, accompanied by image placeholders for recent photos.</p>
            </div>
        </div>
        
        <div class="dashboard-mockup">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 fw-bold"><i class="bi bi-list-check me-2"></i>Today's Activity Log - Max (Golden Retriever)</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Activity</th>
                                            <th>Status</th>
                                            <th>Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>08:00 AM</td>
                                            <td><i class="bi bi-egg-fried me-2"></i>Morning Feeding</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>Ate 1 cup premium kibble</td>
                                        </tr>
                                        <tr>
                                            <td>09:30 AM</td>
                                            <td><i class="bi bi-person-walking me-2"></i>Morning Walk</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>30 min walk around park</td>
                                        </tr>
                                        <tr>
                                            <td>12:00 PM</td>
                                            <td><i class="bi bi-capsule me-2"></i>Medication</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>Joint supplement due</td>
                                        </tr>
                                        <tr>
                                            <td>02:00 PM</td>
                                            <td><i class="bi bi-egg-fried me-2"></i>Afternoon Snack</td>
                                            <td><span class="badge bg-secondary">Scheduled</span></td>
                                            <td>Healthy treats</td>
                                        </tr>
                                        <tr>
                                            <td>05:00 PM</td>
                                            <td><i class="bi bi-person-walking me-2"></i>Evening Walk</td>
                                            <td><span class="badge bg-secondary">Scheduled</span></td>
                                            <td>45 min walk planned</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 fw-bold"><i class="bi bi-images me-2"></i>Recent Photos</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=200&h=150&fit=crop" alt="Morning Walk" class="img-fluid rounded" style="height: 100px; object-fit: cover; width: 100%;">
                                    <p class="small text-muted mt-1 mb-0 text-center">Morning Walk</p>
                                </div>
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1561037404-61cd46aa615b?w=200&h=150&fit=crop" alt="Breakfast" class="img-fluid rounded" style="height: 100px; object-fit: cover; width: 100%;">
                                    <p class="small text-muted mt-1 mb-0 text-center">Breakfast</p>
                                </div>
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=200&h=150&fit=crop" alt="Nap Time" class="img-fluid rounded" style="height: 100px; object-fit: cover; width: 100%;">
                                    <p class="small text-muted mt-1 mb-0 text-center">Nap Time</p>
                                </div>
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=200&h=150&fit=crop" alt="Play Time" class="img-fluid rounded" style="height: 100px; object-fit: cover; width: 100%;">
                                    <p class="small text-muted mt-1 mb-0 text-center">Play Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Module 3: Caretaker Application Portal -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h2 class="section-title"><i class="bi bi-person-plus me-2"></i>Module 3: Caretaker Application Portal</h2>
                <p class="text-muted">A clean form interface showing where sitters upload background checks and facility certifications for validation.</p>
            </div>
        </div>
        
        <div class="dashboard-mockup">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 fw-bold">Caretaker Application Form</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter your email">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Enter your phone number">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Location</label>
                                        <input type="text" class="form-control" placeholder="City, State">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Background Check Document</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="backgroundCheck">
                                            <label class="input-group-text" for="backgroundCheck">Upload</label>
                                        </div>
                                        <small class="text-muted">Accepted formats: PDF, JPG, PNG (Max 5MB)</small>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Facility Certification</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="facilityCert">
                                            <label class="input-group-text" for="facilityCert">Upload</label>
                                        </div>
                                        <small class="text-muted">Accepted formats: PDF, JPG, PNG (Max 5MB)</small>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Pet Care Experience</label>
                                        <textarea class="form-control" rows="3" placeholder="Describe your experience with pet care..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Services Offered</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="daycare">
                                                    <label class="form-check-label" for="daycare">Daycare</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="overnight">
                                                    <label class="form-check-label" for="overnight">Overnight Stay</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="medical">
                                                    <label class="form-check-label" for="medical">Medical Care</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms">
                                            <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                                    </div>
                                </div>
                            </form>
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
                <h2 class="fw-bold mb-4">Ready to Get Started?</h2>
                <p class="lead mb-4">Explore our pricing plans or return to the home page.</p>
                <a href="/pricing" class="btn btn-primary btn-lg me-2">View Pricing</a>
                <a href="/home" class="btn btn-outline-primary btn-lg">Back to Home</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
