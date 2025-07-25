<?php
$pageTitle = 'Page Not Found';
$metaDescription = 'The page you are looking for could not be found';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.error-section {
    padding: 100px 0;
    text-align: center;
}
.error-code {
    font-size: 8rem;
    font-weight: bold;
    color: var(--primary-color);
    line-height: 1;
}
</style>

<section class="error-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="error-code">404</div>
                <h1 class="display-4 fw-bold mb-4">Page Not Found</h1>
                <p class="lead text-muted mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mb-5">
                    <a href="/" class="btn btn-primary btn-lg">Go Home</a>
                    <a href="/contact" class="btn btn-outline-primary btn-lg">Contact Us</a>
                </div>
                
                <div class="row g-4 mt-5">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-home text-primary fa-2x mb-3"></i>
                                <h5>Home</h5>
                                <p class="text-muted">Return to our homepage</p>
                                <a href="/" class="btn btn-outline-primary">Go Home</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-stethoscope text-primary fa-2x mb-3"></i>
                                <h5>Services</h5>
                                <p class="text-muted">View our fertility services</p>
                                <a href="/services" class="btn btn-outline-primary">Our Services</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-phone text-primary fa-2x mb-3"></i>
                                <h5>Contact</h5>
                                <p class="text-muted">Get in touch with us</p>
                                <a href="/contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>