<?php
$pageTitle = '';
$metaDescription = 'Leading fertility clinic offering comprehensive reproductive services with a patient-first approach in California';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.hero-section {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 100px 0;
    position: relative;
}
.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: url('/assets/images/hero-family.jpg') center/cover;
    opacity: 0.15;
    z-index: 0;
}
.hero-section .container {
    position: relative;
    z-index: 1;
}
.service-card {
    transition: transform 0.3s ease;
    border: none;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    border-left: 4px solid var(--secondary-color);
}
.service-card:hover {
    transform: translateY(-5px);
    border-left-color: var(--primary-color);
}
.stats-section {
    background: var(--warm-bg);
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Science * ART * Life</h1>
                <p class="lead mb-4">Building families through advanced reproductive technology with compassionate, personalized care. Our patient-first approach combines cutting-edge science with the artistry of medicine to help you achieve your dream of parenthood.</p>
                <div class="d-flex gap-3">
                    <a href="/contact" class="btn btn-light btn-lg">Schedule Consultation</a>
                    <a href="/services" class="btn btn-outline-light btn-lg">Our Services</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/assets/images/hero-family.jpg" alt="Happy family" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Why Choose Incinta Fertility Center?</h2>
                <p class="lead text-muted">Our commitment to excellence and personalized care sets us apart</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-heart text-white fa-2x"></i>
                    </div>
                    <h4>Patient-First Approach</h4>
                    <p class="text-muted">Every treatment plan is personalized to your unique needs and circumstances, ensuring the best possible outcomes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-microscope text-white fa-2x"></i>
                    </div>
                    <h4>Advanced Technology</h4>
                    <p class="text-muted">State-of-the-art laboratory facilities and cutting-edge reproductive technologies for optimal success rates.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-users text-white fa-2x"></i>
                    </div>
                    <h4>Expert Team</h4>
                    <p class="text-muted">Board-certified reproductive endocrinologists and experienced fertility specialists dedicated to your success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Fertility Services</h2>
                <p class="lead text-muted">Comprehensive reproductive care tailored to your journey</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex p-3 mb-3">
                            <i class="fas fa-baby text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">In Vitro Fertilization (IVF)</h5>
                        <p class="card-text">Advanced IVF treatments with personalized protocols to maximize your chances of conception.</p>
                        <a href="/services/ivf" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex p-3 mb-3">
                            <i class="fas fa-syringe text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Intrauterine Insemination (IUI)</h5>
                        <p class="card-text">Less invasive fertility treatment option with carefully timed insemination procedures.</p>
                        <a href="/services/iui" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex p-3 mb-3">
                            <i class="fas fa-dna text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Genetic Testing</h5>
                        <p class="card-text">Comprehensive genetic screening to ensure healthy embryo selection and family planning.</p>
                        <a href="/services/genetic-testing" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex p-3 mb-3">
                            <i class="fas fa-snowflake text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Egg Preservation</h5>
                        <p class="card-text">Fertility preservation options for women who want to delay childbearing.</p>
                        <a href="/services/egg-preservation" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex p-3 mb-3">
                            <i class="fas fa-heart text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">LGBTQ+ Family Building</h5>
                        <p class="card-text">Inclusive fertility care and family building options for LGBTQ+ individuals and couples.</p>
                        <a href="/services/lgbtq-family-building" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex p-3 mb-3">
                            <i class="fas fa-flask text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Frozen Embryo Transfer</h5>
                        <p class="card-text">Safe and effective transfer of previously frozen embryos with high success rates.</p>
                        <a href="/services/frozen-embryo-transfer" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="/services" class="btn btn-primary btn-lg">View All Services</a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold text-primary">85%</h3>
                    <p class="text-muted">Success Rate</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold text-primary">5000+</h3>
                    <p class="text-muted">Families Helped</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold text-primary">15+</h3>
                    <p class="text-muted">Years Experience</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold text-primary">5</h3>
                    <p class="text-muted">California Locations</p>
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
                <h2 class="display-5 fw-bold mb-3">Ready to Start Your Journey?</h2>
                <p class="lead text-muted mb-4">Take the first step toward building your family with our expert fertility team.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="/contact" class="btn btn-primary btn-lg">Schedule Consultation</a>
                    <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-phone me-2"></i><?php echo SITE_PHONE; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>