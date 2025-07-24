<?php
$pageTitle = 'Our Team';
$metaDescription = 'Meet the experienced fertility specialists and medical team at Incinta Fertility Center';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.team-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.team-member {
    margin-bottom: 3rem;
}
.team-member img {
    width: 250px;
    height: 250px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
}
.team-member img:hover {
    transform: scale(1.05);
}
.team-member h4 {
    color: var(--primary-color);
    margin-top: 1.5rem;
}
</style>

<!-- Team Hero -->
<section class="team-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Our Expert Team</h1>
                <p class="lead">Board-certified fertility specialists dedicated to helping you build your family</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Members -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                
                <!-- Dr. James Lin -->
                <div class="row team-member align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="/assets/images/team/dr-james-lin.jpg" alt="Dr. James Lin" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h4>Dr. James Lin, MD</h4>
                        <h6 class="text-primary mb-3">Medical Director, Reproductive Endocrinologist</h6>
                        <p>Dr. Lin is a board-certified reproductive endocrinologist with over 15 years of experience in fertility medicine. He completed his fellowship in Reproductive Endocrinology and Infertility at UCLA and has been instrumental in developing innovative IVF protocols that have helped thousands of couples achieve their dream of parenthood.</p>
                        <p><strong>Education:</strong></p>
                        <ul>
                            <li>MD - UCLA School of Medicine</li>
                            <li>Residency in Obstetrics & Gynecology - Cedars-Sinai Medical Center</li>
                            <li>Fellowship in Reproductive Endocrinology - UCLA</li>
                        </ul>
                        <p><strong>Specializations:</strong> IVF, ICSI, Genetic Testing, Male Factor Infertility</p>
                    </div>
                </div>
                
                <hr class="my-5">
                
                <!-- Dr. Daniel Williams -->
                <div class="row team-member align-items-center">
                    <div class="col-md-4 text-center order-md-2">
                        <img src="/assets/images/team/dr-daniel-williams.jpg" alt="Dr. Daniel Williams" class="img-fluid">
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4>Dr. Daniel Williams, MD</h4>
                        <h6 class="text-primary mb-3">Medical Director, Reproductive Endocrinologist</h6>
                        <p>Dr. Williams brings exceptional expertise in reproductive surgery and advanced fertility treatments. With a focus on minimally invasive techniques, he has helped patients overcome complex fertility challenges including endometriosis, fibroids, and recurrent pregnancy loss.</p>
                        <p><strong>Education:</strong></p>
                        <ul>
                            <li>MD - Stanford University School of Medicine</li>
                            <li>Residency in Obstetrics & Gynecology - USC</li>
                            <li>Fellowship in Reproductive Endocrinology - UCSF</li>
                        </ul>
                        <p><strong>Specializations:</strong> Reproductive Surgery, Endometriosis, Recurrent Pregnancy Loss</p>
                    </div>
                </div>
                
                <hr class="my-5">
                
                <!-- Dr. Susan Nasab -->
                <div class="row team-member align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="/assets/images/team/dr-susan-nasab.jpg" alt="Dr. Susan Nasab" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h4>Dr. Susan Nasab, MD</h4>
                        <h6 class="text-primary mb-3">Fertility Preservation Specialist</h6>
                        <p>Dr. Nasab is a leading expert in fertility preservation, helping women and men preserve their fertility for future family building. She has pioneered techniques in egg and embryo freezing and has extensive experience working with cancer patients and individuals pursuing career or educational goals.</p>
                        <p><strong>Education:</strong></p>
                        <ul>
                            <li>MD - Harvard Medical School</li>
                            <li>Residency in Obstetrics & Gynecology - Massachusetts General Hospital</li>
                            <li>Fellowship in Reproductive Endocrinology - Johns Hopkins</li>
                        </ul>
                        <p><strong>Specializations:</strong> Egg Preservation, Oncofertility, LGBTQ+ Family Building</p>
                    </div>
                </div>
                
                <hr class="my-5">
                
                <!-- Yufen Xie -->
                <div class="row team-member align-items-center">
                    <div class="col-md-4 text-center order-md-2">
                        <img src="/assets/images/team/yufen-xie.jpg" alt="Yufen Xie" class="img-fluid">
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4>Yufen Xie, PhD</h4>
                        <h6 class="text-primary mb-3">IVF Laboratory Director</h6>
                        <p>Yufen Xie oversees our state-of-the-art IVF laboratory with over 12 years of experience in embryology. She ensures the highest standards of care for embryo culture, cryopreservation, and genetic testing procedures. Her expertise has contributed to our excellent success rates.</p>
                        <p><strong>Education:</strong></p>
                        <ul>
                            <li>PhD in Reproductive Biology - University of California, Davis</li>
                            <li>MS in Molecular Biology - Beijing University</li>
                            <li>Certification in High Complexity Laboratory Testing</li>
                        </ul>
                        <p><strong>Specializations:</strong> Embryology, Genetic Testing, Laboratory Quality Control</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Support Team -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Support Team</h2>
                <p class="lead text-muted">Dedicated professionals who make your journey smoother</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-user-nurse text-primary fa-2x"></i>
                        </div>
                        <h5>Fertility Coordinators</h5>
                        <p class="text-muted">Guide you through every step of your treatment journey with personalized support and coordination.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-clipboard-list text-primary fa-2x"></i>
                        </div>
                        <h5>Financial Counselors</h5>
                        <p class="text-muted">Help navigate insurance coverage and payment options to make treatment accessible and affordable.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-heart text-primary fa-2x"></i>
                        </div>
                        <h5>Patient Care Team</h5>
                        <p class="text-muted">Provide emotional support and counseling throughout your fertility journey with compassion and understanding.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-microscope text-primary fa-2x"></i>
                        </div>
                        <h5>Laboratory Technicians</h5>
                        <p class="text-muted">Skilled professionals ensuring the highest quality care for your eggs, sperm, and embryos.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-language text-primary fa-2x"></i>
                        </div>
                        <h5>Multilingual Staff</h5>
                        <p class="text-muted">Communicate in your preferred language with staff fluent in English, Spanish, Chinese, and Korean.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-calendar-check text-primary fa-2x"></i>
                        </div>
                        <h5>Scheduling Team</h5>
                        <p class="text-muted">Flexible appointment scheduling to accommodate your busy lifestyle and treatment timeline.</p>
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
                <h2 class="display-5 fw-bold mb-3">Meet Our Team</h2>
                <p class="lead text-muted mb-4">Schedule a consultation to discuss your fertility goals with our experienced specialists.</p>
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