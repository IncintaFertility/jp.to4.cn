<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo getPageTitle(isset($pageTitle) ? $pageTitle : ''); ?></title>
    <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Leading fertility clinic offering comprehensive reproductive services with a patient-first approach'; ?>">
    <meta name="keywords" content="<?php echo isset($metaKeywords) ? $metaKeywords : 'fertility, IVF, reproductive health, fertility clinic, pregnancy, fertility treatment'; ?>">
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.svg" alt="<?php echo SITE_NAME; ?>" class="d-inline-block align-top">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('') ? 'active' : ''; ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('team') ? 'active' : ''; ?>" href="/team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('our-difference') ? 'active' : ''; ?>" href="/our-difference">Our Difference</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/services/ivf">In Vitro Fertilization (IVF)</a></li>
                            <li><a class="dropdown-item" href="/services/iui">Intrauterine Insemination (IUI)</a></li>
                            <li><a class="dropdown-item" href="/services/genetic-testing">Genetic Testing</a></li>
                            <li><a class="dropdown-item" href="/services/egg-preservation">Egg Preservation</a></li>
                            <li><a class="dropdown-item" href="/services/frozen-embryo-transfer">Frozen Embryo Transfer</a></li>
                            <li><a class="dropdown-item" href="/services/lgbtq-family-building">LGBTQ+ Family Building</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/services">All Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('resources') ? 'active' : ''; ?>" href="/resources">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('financing') ? 'active' : ''; ?>" href="/financing">Financing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('about') ? 'active' : ''; ?>" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage('contact') ? 'active' : ''; ?>" href="/contact">Contact</a>
                    </li>
                </ul>
                
                <div class="ms-3">
                    <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-primary">
                        <i class="fas fa-phone me-1"></i> <?php echo SITE_PHONE; ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="main-content"><?php // Add padding-top for fixed navbar ?>