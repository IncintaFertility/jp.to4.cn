<?php
$pageTitle = 'Patient Resources';
$metaDescription = 'Access patient resources, treatment guides, and support materials at Incinta Fertility Center';

$db = Database::getInstance();
$page = $db->fetchOne('SELECT * FROM pages WHERE slug = ?', array('resources'));
$faqs = getFAQs();

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.resources-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.faq-item {
    border: 1px solid #e9ecef;
    border-radius: 10px;
    margin-bottom: 1rem;
    overflow: hidden;
}
.faq-question {
    background: #f8f9fa;
    padding: 1rem;
    cursor: pointer;
    margin: 0;
    border: none;
    width: 100%;
    text-align: left;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.faq-question:hover {
    background: #e9ecef;
}
.faq-answer {
    padding: 1rem;
    display: none;
}
.faq-item.active .faq-answer {
    display: block;
}
.faq-item.active .faq-icon {
    transform: rotate(180deg);
}
.faq-icon {
    transition: transform 0.3s ease;
}
</style>

<!-- Resources Hero -->
<section class="resources-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Patient Resources</h1>
                <p class="lead">Educational materials and support to guide you through your fertility journey</p>
            </div>
        </div>
    </div>
</section>

<!-- Resource Categories -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-book text-primary fa-2x"></i>
                        </div>
                        <h5>Treatment Guides</h5>
                        <p class="text-muted">Comprehensive guides explaining each fertility treatment, preparation steps, and what to expect.</p>
                        <a href="#treatment-guides" class="btn btn-outline-primary">View Guides</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-heart text-primary fa-2x"></i>
                        </div>
                        <h5>Success Stories</h5>
                        <p class="text-muted">Read inspiring stories from our patients who have successfully built their families with our help.</p>
                        <a href="#success-stories" class="btn btn-outline-primary">Read Stories</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-users text-primary fa-2x"></i>
                        </div>
                        <h5>Support Groups</h5>
                        <p class="text-muted">Connect with other patients going through similar experiences in our support groups.</p>
                        <a href="#support-groups" class="btn btn-outline-primary">Join Groups</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-file-download text-primary fa-2x"></i>
                        </div>
                        <h5>Downloadable Forms</h5>
                        <p class="text-muted">Access patient forms, insurance documents, and preparation checklists.</p>
                        <a href="#forms" class="btn btn-outline-primary">Download Forms</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-video text-primary fa-2x"></i>
                        </div>
                        <h5>Educational Videos</h5>
                        <p class="text-muted">Watch informative videos about fertility treatments and procedures.</p>
                        <a href="#videos" class="btn btn-outline-primary">Watch Videos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-question-circle text-primary fa-2x"></i>
                        </div>
                        <h5>FAQs</h5>
                        <p class="text-muted">Find answers to frequently asked questions about fertility treatments.</p>
                        <a href="#faqs" class="btn btn-outline-primary">View FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-5 bg-light" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                    <p class="lead text-muted">Common questions about fertility treatments and our services</p>
                </div>
                
                <div class="faqs-container">
                    <?php foreach ($faqs as $faq): ?>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <?php echo htmlspecialchars($faq['question']); ?>
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p><?php echo htmlspecialchars($faq['answer']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Resources -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Additional Support</h2>
                <p class="lead text-muted">We're here to support you every step of the way</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">
                            <i class="fas fa-phone text-primary me-2"></i>24/7 Support Line
                        </h5>
                        <p class="card-text">Our patient coordinators are available around the clock to answer your questions and provide support.</p>
                        <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-primary">
                            Call <?php echo SITE_PHONE; ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">
                            <i class="fas fa-envelope text-primary me-2"></i>Patient Portal
                        </h5>
                        <p class="card-text">Access your test results, treatment schedules, and communicate with your care team online.</p>
                        <a href="#" class="btn btn-primary">Access Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-3">Still Have Questions?</h2>
                <p class="lead text-muted mb-4">Our fertility specialists are here to help you understand your options and create a personalized treatment plan.</p>
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