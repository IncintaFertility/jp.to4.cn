<?php
$pageTitle = 'Terms of Service';
$metaDescription = 'Terms of Service for Incinta Fertility Center website';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1>Terms of Service</h1>
            <p class="text-muted">Last updated: <?php echo date('F j, Y'); ?></p>
            
            <h2>Acceptance of Terms</h2>
            <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h2>Medical Disclaimer</h2>
            <p>The information on this website is for educational purposes only and should not be considered as medical advice. Always consult with a qualified healthcare provider.</p>
            
            <h2>Website Use</h2>
            <p>You may use our website for lawful purposes only. You agree not to use the site in any way that could damage, disable, or impair the site.</p>
            
            <h2>Intellectual Property</h2>
            <p>The content on this website is owned by Incinta Fertility Center and is protected by copyright and other intellectual property laws.</p>
            
            <h2>Contact Us</h2>
            <p>If you have any questions about these Terms of Service, please contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</p>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>