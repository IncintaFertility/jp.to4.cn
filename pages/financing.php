<?php
$pageTitle = 'Financing Options';
$metaDescription = 'Learn about financing options and insurance coverage for fertility treatments at Incinta Fertility Center';

$db = Database::getInstance();
$page = $db->fetchOne('SELECT * FROM pages WHERE slug = ?', array('financing'));

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.financing-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.pricing-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.pricing-card:hover {
    transform: translateY(-5px);
}
.pricing-header {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 2rem;
    border-radius: 15px 15px 0 0;
}
</style>

<!-- Financing Hero -->
<section class="financing-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Financing Your Fertility Journey</h1>
                <p class="lead">Making fertility treatments accessible with flexible payment options and insurance support</p>
            </div>
        </div>
    </div>
</section>

<!-- Financing Options -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Payment Options</h2>
                <p class="lead text-muted">We offer various ways to make fertility treatment more affordable</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card pricing-card h-100">
                    <div class="pricing-header text-center">
                        <h4 class="mb-0">Insurance Coverage</h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Many plans now cover fertility treatments</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Pre-authorization assistance</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Claims processing support</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Benefit verification</li>
                        </ul>
                        <a href="#insurance" class="btn btn-primary w-100">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card pricing-card h-100">
                    <div class="pricing-header text-center">
                        <h4 class="mb-0">Payment Plans</h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>0% interest financing available</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Flexible payment schedules</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Extended payment terms</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>No prepayment penalties</li>
                        </ul>
                        <a href="#payment-plans" class="btn btn-primary w-100">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card pricing-card h-100">
                    <div class="pricing-header text-center">
                        <h4 class="mb-0">Third-Party Financing</h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Specialized fertility loans</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Competitive interest rates</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Quick approval process</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Loan amounts up to $100,000</li>
                        </ul>
                        <a href="#financing-partners" class="btn btn-primary w-100">View Partners</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance Information -->
<section class="py-5 bg-light" id="insurance">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Insurance Coverage</h2>
                <p class="lead text-muted mb-4">Many insurance plans now provide coverage for fertility treatments. Our financial counselors work with you to maximize your benefits.</p>
                
                <h5>Common Covered Services:</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Fertility diagnostic testing</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>IVF treatments (varies by plan)</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>IUI procedures</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Fertility medications</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Genetic testing</li>
                </ul>
                
                <h5 class="mt-4">We Accept:</h5>
                <div class="row mt-3">
                    <div class="col-6 col-md-4 mb-2">Blue Cross Blue Shield</div>
                    <div class="col-6 col-md-4 mb-2">Aetna</div>
                    <div class="col-6 col-md-4 mb-2">Cigna</div>
                    <div class="col-6 col-md-4 mb-2">Kaiser Permanente</div>
                    <div class="col-6 col-md-4 mb-2">UnitedHealthcare</div>
                    <div class="col-6 col-md-4 mb-2">And many more</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h5 class="card-title">Insurance Verification</h5>
                        <p class="card-text">Let us check your benefits and help you understand your coverage.</p>
                        <form>
                            <div class="mb-3">
                                <label for="insurance-name" class="form-label">Insurance Provider</label>
                                <input type="text" class="form-control" id="insurance-name" placeholder="e.g., Blue Cross Blue Shield">
                            </div>
                            <div class="mb-3">
                                <label for="member-id" class="form-label">Member ID</label>
                                <input type="text" class="form-control" id="member-id" placeholder="Your member ID">
                            </div>
                            <div class="mb-3">
                                <label for="group-number" class="form-label">Group Number</label>
                                <input type="text" class="form-control" id="group-number" placeholder="Group number (if applicable)">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Check My Benefits</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Financing Partners -->
<section class="py-5" id="financing-partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Financing Partners</h2>
                <p class="lead text-muted">We work with specialized fertility financing companies to offer competitive rates</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">CapexMD</h5>
                        <p class="card-text">Specialized medical financing with:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Loans up to $100,000</li>
                            <li><i class="fas fa-check text-success me-2"></i>Terms up to 84 months</li>
                            <li><i class="fas fa-check text-success me-2"></i>No prepayment penalties</li>
                            <li><i class="fas fa-check text-success me-2"></i>Same-day approval available</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Apply with CapexMD</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">Prosper Healthcare Lending</h5>
                        <p class="card-text">Healthcare-focused lending with:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>0% interest options</li>
                            <li><i class="fas fa-check text-success me-2"></i>Fixed monthly payments</li>
                            <li><i class="fas fa-check text-success me-2"></i>No hidden fees</li>
                            <li><i class="fas fa-check text-success me-2"></i>Online account management</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Apply with Prosper</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost Information -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Treatment Costs</h2>
                    <p class="lead text-muted">Transparent pricing for our fertility services</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 class="card-title">IVF Treatment</h5>
                                <div class="display-6 fw-bold text-primary mb-2">$12,000 - $15,000</div>
                                <p class="text-muted">Per cycle, includes monitoring and retrieval</p>
                                <small class="text-muted">*Medications and genetic testing separate</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 class="card-title">IUI Treatment</h5>
                                <div class="display-6 fw-bold text-primary mb-2">$800 - $1,200</div>
                                <p class="text-muted">Per cycle, includes monitoring</p>
                                <small class="text-muted">*Medications separate</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <p class="text-muted">Costs may vary based on individual treatment needs. We'll provide a detailed cost estimate during your consultation.</p>
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
                <h2 class="display-5 fw-bold mb-3">Get Started Today</h2>
                <p class="lead text-muted mb-4">Our financial counselors are here to help you understand your options and create a payment plan that works for you.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="/contact" class="btn btn-primary btn-lg">Schedule Financial Consultation</a>
                    <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-phone me-2"></i><?php echo SITE_PHONE; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>