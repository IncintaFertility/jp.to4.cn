<?php
$pageTitle = 'Fertility Services';
$metaDescription = 'Comprehensive fertility treatments including IVF, IUI, genetic testing, and egg preservation at Incinta Fertility Center';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.services-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.service-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    overflow: hidden;
}
.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}
.service-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}
</style>

<!-- Services Hero -->
<section class="services-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Our Fertility Services</h1>
                <p class="lead">Comprehensive reproductive care tailored to your unique journey to parenthood</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Services -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Advanced Fertility Treatments</h2>
                <p class="lead text-muted">State-of-the-art reproductive technologies with personalized care</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- IVF -->
            <div class="col-lg-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-baby text-white fa-2x"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">In Vitro Fertilization (IVF)</h4>
                        <p class="card-text">Our advanced IVF program offers the highest success rates using cutting-edge laboratory techniques and personalized treatment protocols. We combine science with compassionate care to maximize your chances of conception.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Personalized stimulation protocols</li>
                            <li><i class="fas fa-check text-success me-2"></i>Advanced embryo culture techniques</li>
                            <li><i class="fas fa-check text-success me-2"></i>Single embryo transfer optimization</li>
                            <li><i class="fas fa-check text-success me-2"></i>Comprehensive monitoring and support</li>
                        </ul>
                        <a href="/services/ivf" class="btn btn-primary">Learn More About IVF</a>
                    </div>
                </div>
            </div>
            
            <!-- IUI -->
            <div class="col-lg-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-syringe text-white fa-2x"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Intrauterine Insemination (IUI)</h4>
                        <p class="card-text">A less invasive fertility treatment option that places sperm directly into the uterus during ovulation. IUI is often recommended as a first-line treatment for unexplained infertility and mild male factor issues.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Ovulation monitoring and timing</li>
                            <li><i class="fas fa-check text-success me-2"></i>Sperm washing and preparation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Fertility medication coordination</li>
                            <li><i class="fas fa-check text-success me-2"></i>Minimal discomfort procedure</li>
                        </ul>
                        <a href="/services/iui" class="btn btn-primary">Learn More About IUI</a>
                    </div>
                </div>
            </div>
            
            <!-- Genetic Testing -->
            <div class="col-lg-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-dna text-white fa-2x"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Genetic Testing</h4>
                        <p class="card-text">Comprehensive genetic screening services to ensure the healthiest possible pregnancy outcomes. Our testing includes preimplantation genetic screening and diagnostic testing for inherited conditions.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Preimplantation Genetic Testing (PGT)</li>
                            <li><i class="fas fa-check text-success me-2"></i>Carrier screening for both partners</li>
                            <li><i class="fas fa-check text-success me-2"></i>Chromosomal analysis</li>
                            <li><i class="fas fa-check text-success me-2"></i>Genetic counseling services</li>
                        </ul>
                        <a href="/services/genetic-testing" class="btn btn-primary">Learn More About Genetic Testing</a>
                    </div>
                </div>
            </div>
            
            <!-- Egg Preservation -->
            <div class="col-lg-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-snowflake text-white fa-2x"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Egg Preservation</h4>
                        <p class="card-text">Preserve your fertility for the future with our advanced egg freezing program. Whether for medical reasons or personal choice, we help you maintain your reproductive options.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Vitrification (flash-freezing) technology</li>
                            <li><i class="fas fa-check text-success me-2"></i>Comprehensive fertility assessment</li>
                            <li><i class="fas fa-check text-success me-2"></i>Long-term storage options</li>
                            <li><i class="fas fa-check text-success me-2"></i>Future use consultation</li>
                        </ul>
                        <a href="/services/egg-preservation" class="btn btn-primary">Learn More About Egg Preservation</a>
                    </div>
                </div>
            </div>
            
            <!-- Frozen Embryo Transfer -->
            <div class="col-lg-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-flask text-white fa-2x"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Frozen Embryo Transfer (FET)</h4>
                        <p class="card-text">Transfer of previously frozen embryos using optimized protocols for maximum implantation success. FET allows for better timing and preparation of the uterine lining.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Natural and medicated cycles</li>
                            <li><i class="fas fa-check text-success me-2"></i>Endometrial preparation protocols</li>
                            <li><i class="fas fa-check text-success me-2"></i>Embryo thawing expertise</li>
                            <li><i class="fas fa-check text-success me-2"></i>High success rates</li>
                        </ul>
                        <a href="/services/frozen-embryo-transfer" class="btn btn-primary">Learn More About FET</a>
                    </div>
                </div>
            </div>
            
            <!-- LGBTQ+ Family Building -->
            <div class="col-lg-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-heart text-white fa-2x"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">LGBTQ+ Family Building</h4>
                        <p class="card-text">Inclusive fertility care for LGBTQ+ individuals and couples. We provide comprehensive family building options with sensitivity to your unique needs and circumstances.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Donor sperm and egg programs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Gestational surrogacy coordination</li>
                            <li><i class="fas fa-check text-success me-2"></i>Reciprocal IVF for female couples</li>
                            <li><i class="fas fa-check text-success me-2"></i>Inclusive and supportive care</li>
                        </ul>
                        <a href="/services/lgbtq-family-building" class="btn btn-primary">Learn More About LGBTQ+ Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Comprehensive Care Services</h2>
                <p class="lead text-muted">Supporting services to complete your fertility journey</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-stethoscope text-primary fa-2x"></i>
                        </div>
                        <h5>Fertility Assessment</h5>
                        <p class="text-muted">Comprehensive evaluation to determine the best treatment approach for your specific situation.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-male text-primary fa-2x"></i>
                        </div>
                        <h5>Male Factor Treatment</h5>
                        <p class="text-muted">Specialized care for male fertility issues including sperm analysis and treatment options.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-scissors text-primary fa-2x"></i>
                        </div>
                        <h5>Reproductive Surgery</h5>
                        <p class="text-muted">Minimally invasive surgical procedures to correct anatomical issues affecting fertility.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-pills text-primary fa-2x"></i>
                        </div>
                        <h5>Fertility Medications</h5>
                        <p class="text-muted">Access to all necessary fertility medications with guidance on proper administration.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-chart-line text-primary fa-2x"></i>
                        </div>
                        <h5>Fertility Monitoring</h5>
                        <p class="text-muted">Regular monitoring through blood tests and ultrasounds to optimize treatment outcomes.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-hands-helping text-primary fa-2x"></i>
                        </div>
                        <h5>Emotional Support</h5>
                        <p class="text-muted">Counseling and support services to help you navigate the emotional aspects of fertility treatment.</p>
                    </div>
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
                <p class="lead text-muted mb-4">Our fertility specialists are here to help you choose the right treatment path and support you every step of the way.</p>
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