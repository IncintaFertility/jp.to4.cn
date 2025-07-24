<?php
$pageTitle = 'Our Difference';
$metaDescription = 'Discover what makes Incinta Fertility Center different - personalized care, advanced technology, and compassionate support';

$db = Database::getInstance();
$page = $db->fetchOne('SELECT * FROM pages WHERE slug = ?', array('our-difference'));

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.difference-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.difference-content {
    font-size: 1.1rem;
    line-height: 1.8;
}
.difference-content h3 {
    color: var(--primary-color);
    margin-top: 2rem;
    margin-bottom: 1rem;
}
</style>

<!-- Our Difference Hero -->
<section class="difference-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4"><?php echo $page['title'] ?? 'Our Difference'; ?></h1>
                <p class="lead">What sets Incinta Fertility Center apart in reproductive medicine</p>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="difference-content">
                    <?php if ($page): ?>
                        <?php echo $page['content']; ?>
                    <?php else: ?>
                        <h2>What Sets Incinta Apart</h2>
                        <p>At Incinta Fertility Center, we believe that every patient deserves personalized care that addresses their unique needs and circumstances. Our patient-first approach combines cutting-edge reproductive technology with compassionate, individualized treatment plans.</p>
                        
                        <h3>Personalized Treatment Plans</h3>
                        <p>No two fertility journeys are alike. Our experienced team creates customized treatment protocols based on your specific diagnosis, medical history, and personal preferences. We take the time to understand your goals and develop a plan that gives you the best chance of success.</p>
                        
                        <h3>Advanced Laboratory Technology</h3>
                        <p>Our state-of-the-art IVF laboratory features the latest equipment and techniques, including time-lapse embryo monitoring, advanced genetic testing capabilities, and optimal culture conditions that maximize embryo development.</p>
                        
                        <h3>Multilingual Support</h3>
                        <p>Our team speaks multiple languages including English, Spanish, Chinese, and Korean. We understand the cultural nuances that can impact your fertility care experience and provide culturally sensitive support throughout your journey.</p>
                        
                        <h3>Comprehensive Care Coordination</h3>
                        <p>From your first consultation through pregnancy and beyond, our dedicated fertility coordinators ensure seamless care coordination. We handle insurance approvals, medication management, and appointment scheduling so you can focus on what matters most.</p>
                        
                        <h3>Emotional Support</h3>
                        <p>We recognize that fertility treatment can be emotionally challenging. Our team includes counselors and support staff who provide guidance and emotional support throughout your journey, helping you navigate both the medical and emotional aspects of treatment.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Why Patients Choose Us</h2>
                <p class="lead text-muted">Our commitment to excellence shows in our results</p>
            </div>
        </div>
        
        <div class="row text-center g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="display-4 fw-bold text-primary mb-2">85%</div>
                        <h6 class="text-uppercase small">Success Rate</h6>
                        <p class="text-muted small">Above national average IVF success rates</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="display-4 fw-bold text-primary mb-2">5000+</div>
                        <h6 class="text-uppercase small">Families Helped</h6>
                        <p class="text-muted small">Successful pregnancies achieved</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="display-4 fw-bold text-primary mb-2">15+</div>
                        <h6 class="text-uppercase small">Years Experience</h6>
                        <p class="text-muted small">Dedicated to reproductive medicine</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="display-4 fw-bold text-primary mb-2">5</div>
                        <h6 class="text-uppercase small">California Locations</h6>
                        <p class="text-muted small">Convenient access across the state</p>
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
                <h2 class="display-5 fw-bold mb-3">Experience the Incinta Difference</h2>
                <p class="lead text-muted mb-4">Join thousands of families who have trusted us with their fertility journey.</p>
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