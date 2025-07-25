<?php
$pageTitle = 'Privacy Policy';
$metaDescription = 'Privacy Policy for Incinta Fertility Center - How we protect your personal information';

include 'templates/header.php';
?>

<style>
body { padding-top: 76px; }
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1>Privacy Policy</h1>
            <p class="text-muted">Last updated: <?php echo date('F j, Y'); ?></p>
            
            <h2>Information We Collect</h2>
            <p>We collect information you provide directly to us, such as when you create an account, schedule appointments, or contact us.</p>
            
            <h2>How We Use Your Information</h2>
            <p>We use the information we collect to provide, maintain, and improve our services, communicate with you, and comply with legal obligations.</p>
            
            <h2>Information Sharing</h2>
            <p>We do not sell, trade, or otherwise transfer your personal information to outside parties except as described in this policy.</p>
            
            <h2>Data Security</h2>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h2>Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</p>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>