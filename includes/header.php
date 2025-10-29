<?php
// Base URL for all links - standalone website
$baseUrl = '/UnlockYourSkillsWebsite/index.php';
$basePath = '/UnlockYourSkillsWebsite';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <title><?php echo $pageTitle ?? 'UnlockYourSkills - AI-Powered Enterprise Learning Management System | LMS'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'UnlockYourSkills is an AI-powered enterprise LMS platform for eLearning, training, and learning management. Features SCORM compliance, multi-client architecture, and advanced analytics.'; ?>">
    <meta name="keywords" content="LMS, learning management system, eLearning platform, online training, corporate training, SCORM, AI-powered learning, enterprise LMS, learning and development, employee training, course management, virtual learning, training software, learning platform, educational technology, EdTech, online courses, training management, skill development, multi-tenant LMS">
    <meta name="author" content="Deeplaxmi Communications">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $baseUrl; ?>">
    <meta property="og:title" content="<?php echo $pageTitle ?? 'UnlockYourSkills - AI-Powered Enterprise LMS'; ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? 'Transform your organization with our AI-powered learning management system. SCORM compliant, multi-client, feature-rich.'; ?>">
    <meta property="og:image" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $basePath . '/screenshots/dashboard.png'; ?>">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $baseUrl; ?>">
    <meta name="twitter:title" content="<?php echo $pageTitle ?? 'UnlockYourSkills - AI-Powered Enterprise LMS'; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'Transform your organization with our AI-powered learning management system.'; ?>">
    <meta name="twitter:image" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $basePath . '/screenshots/dashboard.png'; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $baseUrl; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $basePath; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="<?php echo $basePath; ?>/assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $basePath; ?>/assets/images/favicon.png">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>/assets/css/style.css">
    
    <!-- Schema.org Markup for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "UnlockYourSkills",
      "applicationCategory": "EducationalApplication",
      "operatingSystem": "Web",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "ratingCount": "250"
      },
      "description": "AI-powered enterprise learning management system with SCORM compliance, multi-client architecture, and comprehensive training features."
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Deeplaxmi Communications",
      "url": "<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $baseUrl; ?>",
      "logo": "<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $basePath . '/screenshots/dashboard.png'; ?>",
      "description": "Provider of enterprise learning management solutions",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Sales",
        "email": "unlockyourskills.online@gmail.com"
      }
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <a href="<?php echo $baseUrl; ?>">
                        <img src="<?php echo $basePath; ?>/assets/images/UYSlogo copy.png" alt="Unlock Your Skills Logo" class="logo-img">
                        <span>Unlock Your Skills</span>
                    </a>
                </div>
                
                <div class="nav-menu" id="navMenu">
                    <ul class="nav-links">
                        <li><a href="<?php echo $baseUrl; ?>" class="<?php echo ($request ?? 'home') === 'home' || empty($request) ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/features" class="<?php echo ($request ?? '') === 'features' ? 'active' : ''; ?>">Features</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/pricing" class="<?php echo ($request ?? '') === 'pricing' ? 'active' : ''; ?>">Pricing</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/about" class="<?php echo ($request ?? '') === 'about' ? 'active' : ''; ?>">About</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact" class="<?php echo ($request ?? '') === 'contact' ? 'active' : ''; ?>">Contact</a></li>
                    </ul>
                    
                    <div class="nav-actions">
                        <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-outline">Request Demo</a>
                        <a href="#" class="btn btn-primary">Login</a>
                    </div>
                </div>
                
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>
