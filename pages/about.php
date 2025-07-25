<?php
$pageTitle = 'About Us';
$metaDescription = 'Learn about Incinta Fertility Center - our mission, values, and commitment to helping families achieve their dreams';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.about-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.milestone-item {
    text-align: center;
    margin-bottom: 2rem;
}
.milestone-year {
    font-size: 2rem;
    font-weight: bold;
    color: var(--primary-color);
}
</style>

<!-- About Hero -->
<section class="about-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">About Incinta Fertility Center</h1>
                <p class="lead">Science * ART * Life - Our commitment to excellence in reproductive medicine</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                <p class="lead text-muted mb-4">Founded with a vision to bring hope and advanced reproductive technology to families throughout California, Incinta Fertility Center has been at the forefront of fertility medicine for over 15 years.</p>
                <p>Our name "Incinta" means "expecting" in Italian, reflecting our core mission of helping individuals and couples achieve their dreams of parenthood. We combine cutting-edge science with the artistry of personalized medicine to create life - hence our motto "Science * ART * Life."</p>
                <p>From our first IVF baby in 2008 to pioneering genetic testing protocols, we have continuously evolved to offer the most advanced fertility treatments available. Our patient-first approach ensures that every individual receives compassionate, personalized care tailored to their unique circumstances.</p>
            </div>
            <div class="col-lg-6">
                <img src="/assets/images/about-story.jpg" alt="Incinta Fertility Center" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Mission & Values</h2>
                <p class="lead text-muted">Guiding principles that drive everything we do</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-heart text-primary fa-2x"></i>
                        </div>
                        <h5>Compassionate Care</h5>
                        <p class="text-muted">We understand the emotional journey of fertility treatment and provide support every step of the way.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-microscope text-primary fa-2x"></i>
                        </div>
                        <h5>Scientific Excellence</h5>
                        <p class="text-muted">We stay at the forefront of reproductive medicine through continuous research and innovation.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-users text-primary fa-2x"></i>
                        </div>
                        <h5>Inclusive Care</h5>
                        <p class="text-muted">We welcome all individuals and couples regardless of sexual orientation, gender identity, or family structure.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-shield-alt text-primary fa-2x"></i>
                        </div>
                        <h5>Safety First</h5>
                        <p class="text-muted">Patient safety and well-being are our top priorities in every procedure and treatment.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-handshake text-primary fa-2x"></i>
                        </div>
                        <h5>Transparency</h5>
                        <p class="text-muted">We believe in honest communication about treatment options, success rates, and costs.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-globe text-primary fa-2x"></i>
                        </div>
                        <h5>Cultural Sensitivity</h5>
                        <p class="text-muted">Our multilingual team respects and honors diverse cultural backgrounds and beliefs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Milestones -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Journey</h2>
                <p class="lead text-muted">Key milestones in our commitment to fertility excellence</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 milestone-item">
                <div class="milestone-year">2008</div>
                <h6>Founded</h6>
                <p class="text-muted">Incinta Fertility Center opens its doors in Torrance, California</p>
            </div>
            
            <div class="col-lg-3 col-md-6 milestone-item">
                <div class="milestone-year">2012</div>
                <h6>Expansion</h6>
                <p class="text-muted">Opened additional locations in Alhambra and Beverly Hills</p>
            </div>
            
            <div class="col-lg-3 col-md-6 milestone-item">
                <div class="milestone-year">2018</div>
                <h6>Innovation</h6>
                <p class="text-muted">Introduced advanced genetic testing and time-lapse embryo monitoring</p>
            </div>
            
            <div class="col-lg-3 col-md-6 milestone-item">
                <div class="milestone-year">2023</div>
                <h6>Recognition</h6>
                <p class="text-muted">Achieved 5000+ successful pregnancies and multiple awards for excellence</p>
            </div>
        </div>
    </div>
</section>

<!-- Accreditations -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Accreditations & Certifications</h2>
                <p class="lead text-muted">Recognized standards of excellence in reproductive medicine</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                    <i class="fas fa-certificate text-primary fa-3x mb-3"></i>
                    <h6>CAP Accredited Laboratory</h6>
                    <p class="text-muted small">College of American Pathologists certification for our IVF laboratory</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                    <i class="fas fa-award text-primary fa-3x mb-3"></i>
                    <h6>ASRM Member</h6>
                    <p class="text-muted small">American Society for Reproductive Medicine membership and guidelines</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                    <i class="fas fa-star text-primary fa-3x mb-3"></i>
                    <h6>SART Reporting</h6>
                    <p class="text-muted small">Society for Assisted Reproductive Technology data reporting</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                    <i class="fas fa-shield-alt text-primary fa-3x mb-3"></i>
                    <h6>Joint Commission</h6>
                    <p class="text-muted small">Gold Seal of Approval for quality and safety standards</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-3">Experience the Incinta Difference</h2>
                <p class="lead text-muted mb-4">Join thousands of families who have trusted us with their fertility journey.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="/contact" class="btn btn-primary btn-lg">Schedule Consultation</a>
                    <a href="/our-difference" class="btn btn-outline-primary btn-lg">Learn Our Approach</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>