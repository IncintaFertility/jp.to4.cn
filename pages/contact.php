<?php
$pageTitle = 'Contact Us';
$metaDescription = 'Contact Incinta Fertility Center to schedule your consultation. Multiple locations in California.';

// Handle form submission
if ($_POST) {
    $name = sanitizeInput(isset($_POST['name']) ? $_POST['name'] : '');
    $email = sanitizeInput(isset($_POST['email']) ? $_POST['email'] : '');
    $phone = sanitizeInput(isset($_POST['phone']) ? $_POST['phone'] : '');
    $subject = sanitizeInput(isset($_POST['subject']) ? $_POST['subject'] : '');
    $message = sanitizeInput(isset($_POST['message']) ? $_POST['message'] : '');
    $preferredContact = sanitizeInput(isset($_POST['preferred_contact']) ? $_POST['preferred_contact'] : 'email');
    
    if ($name && $email && $message) {
        $db = Database::getInstance();
        
        $contactData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
            'preferred_contact' => $preferredContact
        ];
        
        try {
            $db->insert('contact_inquiries', $contactData);
            sendContactEmail($contactData);
            $success = true;
        } catch (Exception $e) {
            $error = 'There was an error sending your message. Please try again.';
        }
    } else {
        $error = 'Please fill in all required fields.';
    }
}

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
.contact-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 80px 0;
}
.contact-form {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-top: -50px;
    position: relative;
    z-index: 2;
}
.location-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.location-card:hover {
    transform: translateY(-5px);
}
</style>

<!-- Contact Hero -->
<section class="contact-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                <p class="lead">Ready to start your fertility journey? Get in touch with our caring team today.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="contact-form">
                    <?php if (isset($success)): ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong>Thank you!</strong> Your message has been sent successfully. We'll get back to you within 24 hours.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <strong>Error:</strong> <?php echo $error; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <h3 class="mb-4">Send Us a Message</h3>
                    
                    <form method="POST" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" name="subject">
                                    <option value="">Select a subject</option>
                                    <option value="New Patient Consultation" <?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') === 'New Patient Consultation' ? 'selected' : ''; ?>>New Patient Consultation</option>
                                    <option value="IVF Information" <?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') === 'IVF Information' ? 'selected' : ''; ?>>IVF Information</option>
                                    <option value="Insurance Questions" <?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') === 'Insurance Questions' ? 'selected' : ''; ?>>Insurance Questions</option>
                                    <option value="Second Opinion" <?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') === 'Second Opinion' ? 'selected' : ''; ?>>Second Opinion</option>
                                    <option value="General Questions" <?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') === 'General Questions' ? 'selected' : ''; ?>>General Questions</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tell us about your fertility goals and any questions you have..."><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Preferred Contact Method</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="preferred_contact" id="contact_email" value="email" <?php echo (isset($_POST['preferred_contact']) ? $_POST['preferred_contact'] : 'email') === 'email' ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="contact_email">Email</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="preferred_contact" id="contact_phone" value="phone" <?php echo (isset($_POST['preferred_contact']) ? $_POST['preferred_contact'] : '') === 'phone' ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="contact_phone">Phone</label>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Get In Touch</h2>
                <p class="lead text-muted">Multiple ways to reach our fertility specialists</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-phone text-white fa-2x"></i>
                    </div>
                    <h5>Call Us</h5>
                    <p class="text-muted mb-2">Speak with a fertility coordinator</p>
                    <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-outline-primary">
                        <?php echo SITE_PHONE; ?>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-envelope text-white fa-2x"></i>
                    </div>
                    <h5>Email Us</h5>
                    <p class="text-muted mb-2">Send us your questions</p>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" class="btn btn-outline-primary">
                        <?php echo SITE_EMAIL; ?>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-calendar text-white fa-2x"></i>
                    </div>
                    <h5>Schedule Online</h5>
                    <p class="text-muted mb-2">Book your consultation</p>
                    <a href="#" class="btn btn-outline-primary">
                        Schedule Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Locations Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Locations</h2>
                <p class="lead text-muted">Convenient fertility care across California</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card location-card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">Torrance</h5>
                        <p class="text-muted mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Main Location & Laboratory
                        </p>
                        <p>3440 Lomita Blvd, Suite 800<br>Torrance, CA 90505</p>
                        <div class="d-flex gap-2">
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-sm btn-outline-primary">Call</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card location-card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">Alhambra</h5>
                        <p class="text-muted mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Full Service Location
                        </p>
                        <p>100 W Main St, Suite 200<br>Alhambra, CA 91801</p>
                        <div class="d-flex gap-2">
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-sm btn-outline-primary">Call</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card location-card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">Beverly Hills</h5>
                        <p class="text-muted mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Consultation & Treatment
                        </p>
                        <p>9201 Sunset Blvd, Suite 300<br>West Hollywood, CA 90069</p>
                        <div class="d-flex gap-2">
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-sm btn-outline-primary">Call</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card location-card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">Corona</h5>
                        <p class="text-muted mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Satellite Office
                        </p>
                        <p>1400 E Sixth St, Suite 400<br>Corona, CA 92879</p>
                        <div class="d-flex gap-2">
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-sm btn-outline-primary">Call</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card location-card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title">Irvine</h5>
                        <p class="text-muted mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Orange County Location
                        </p>
                        <p>16300 Sand Canyon Ave, Suite 500<br>Irvine, CA 92618</p>
                        <div class="d-flex gap-2">
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-sm btn-outline-primary">Call</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>