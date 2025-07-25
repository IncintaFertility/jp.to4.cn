    </main>

    <footer class="bg-dark text-light py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-3"><?php echo SITE_NAME; ?></h5>
                    <p class="text-muted"><?php echo SITE_TAGLINE; ?></p>
                    <p class="text-muted">Leading fertility clinic offering comprehensive reproductive services with a patient-first approach.</p>
                    
                    <div class="social-links mt-3">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="/services/ivf" class="text-muted text-decoration-none">IVF</a></li>
                        <li><a href="/services/iui" class="text-muted text-decoration-none">IUI</a></li>
                        <li><a href="/services/genetic-testing" class="text-muted text-decoration-none">Genetic Testing</a></li>
                        <li><a href="/services/egg-preservation" class="text-muted text-decoration-none">Egg Preservation</a></li>
                        <li><a href="/services" class="text-muted text-decoration-none">All Services</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="mb-3">About</h6>
                    <ul class="list-unstyled">
                        <li><a href="/team" class="text-muted text-decoration-none">Our Team</a></li>
                        <li><a href="/our-difference" class="text-muted text-decoration-none">Our Difference</a></li>
                        <li><a href="/about" class="text-muted text-decoration-none">About Us</a></li>
                        <li><a href="/resources" class="text-muted text-decoration-none">Resources</a></li>
                        <li><a href="/financing" class="text-muted text-decoration-none">Financing</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h6 class="mb-3">Contact Information</h6>
                    <div class="contact-info">
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="text-light text-decoration-none">
                                <?php echo SITE_PHONE; ?>
                            </a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-light text-decoration-none">
                                <?php echo SITE_EMAIL; ?>
                            </a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Multiple locations in California
                        </p>
                    </div>
                    
                    <div class="mt-3">
                        <h6 class="mb-2">Our Locations</h6>
                        <div class="small text-muted">
                            Torrance • Alhambra • Beverly Hills • Corona • Irvine
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="/privacy" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                    <a href="/terms" class="text-muted text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/image-fallback.js"></script>
</body>
</html>