<?php
$serviceSlug = isset($segments[1]) ? $segments[1] : '';
$db = Database::getInstance();
$service = $db->fetchOne('SELECT * FROM services WHERE slug = ?', array($serviceSlug));

if (!$service) {
    http_response_code(404);
    include 'pages/404.php';
    exit;
}

$pageTitle = $service['name'];
$metaDescription = $service['description'];

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.service-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.service-content {
    font-size: 1.1rem;
    line-height: 1.8;
}
.service-content h2 {
    color: var(--primary-color);
    margin-top: 2rem;
    margin-bottom: 1rem;
}
.service-content h3 {
    color: var(--secondary-color);
    margin-top: 1.5rem;
    margin-bottom: 1rem;
}
</style>

<!-- Service Hero -->
<section class="service-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4"><?php echo htmlspecialchars($service['name']); ?></h1>
                <p class="lead"><?php echo htmlspecialchars($service['description']); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Service Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <?php if ($service['full_content']): ?>
                        <?php echo $service['full_content']; ?>
                    <?php else: ?>
                        <h2>About <?php echo htmlspecialchars($service['name']); ?></h2>
                        <p><?php echo htmlspecialchars($service['description']); ?></p>
                        
                        <h3>What to Expect</h3>
                        <p>Our experienced team will guide you through every step of your treatment, ensuring you understand the process and feel comfortable with your care plan.</p>
                        
                        <h3>Success Rates</h3>
                        <p>We maintain success rates that are consistently above national averages. During your consultation, we'll discuss success rates specific to your situation and age group.</p>
                        
                        <h3>Next Steps</h3>
                        <p>Ready to learn more about <?php echo htmlspecialchars($service['name']); ?>? Contact us to schedule a consultation with one of our fertility specialists.</p>
                    <?php endif; ?>
                </div>
                
                <div class="mt-5 p-4 bg-light rounded">
                    <h4>Ready to Get Started?</h4>
                    <p class="mb-3">Take the first step toward building your family with our expert fertility team.</p>
                    <div class="d-flex gap-3">
                        <a href="/contact" class="btn btn-primary">Schedule Consultation</a>
                        <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-outline-primary">Call Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title">Contact Information</h5>
                        <p class="card-text mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="text-decoration-none">
                                <?php echo SITE_PHONE; ?>
                            </a>
                        </p>
                        <p class="card-text mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-decoration-none">
                                <?php echo SITE_EMAIL; ?>
                            </a>
                        </p>
                        <a href="/contact" class="btn btn-primary w-100">Schedule Consultation</a>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title">Related Services</h5>
                        <?php
                        $relatedServices = $db->fetchAll('SELECT name, slug FROM services WHERE slug != ? ORDER BY sort_order LIMIT 4', array($serviceSlug));
                        foreach ($relatedServices as $relatedService):
                        ?>
                        <div class="mb-2">
                            <a href="/services/<?php echo $relatedService['slug']; ?>" class="text-decoration-none">
                                <i class="fas fa-arrow-right text-primary me-2"></i>
                                <?php echo htmlspecialchars($relatedService['name']); ?>
                            </a>
                        </div>
                        <?php endforeach; ?>
                        
                        <div class="mt-3">
                            <a href="/services" class="btn btn-outline-primary btn-sm">View All Services</a>
                        </div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title">Our Locations</h5>
                        <p class="text-muted small mb-3">Convenient fertility care across California</p>
                        <div class="small">
                            <div class="mb-2"><strong>Torrance</strong> - Main Location</div>
                            <div class="mb-2"><strong>Alhambra</strong> - Full Service</div>
                            <div class="mb-2"><strong>Beverly Hills</strong> - Consultation</div>
                            <div class="mb-2"><strong>Corona</strong> - Satellite Office</div>
                            <div class="mb-2"><strong>Irvine</strong> - Orange County</div>
                        </div>
                        <a href="/contact" class="btn btn-outline-primary btn-sm mt-2">Find Locations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>