<?php
$pageTitle = "UnlockYourSkills - AI-Powered Enterprise Learning Management System | Best LMS Platform";
$pageDescription = "Transform your organization with UnlockYourSkills, the leading AI-powered LMS for eLearning, corporate training, and employee development. SCORM compliant, multi-client architecture, 13+ content types. Request a demo today!";
$request = 'home';
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Transform Learning with AI-Powered LMS</h1>
                <p class="subtitle">Next-Generation Enterprise Learning Management System</p>
                <p>Empower your organization with intelligent, scalable eLearning solutions. Features AI content generation, SCORM compliance, multi-client architecture, and comprehensive analytics.</p>
                <div class="hero-actions">
                    <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-primary btn-lg">Request Free Demo</a>
                    <a href="<?php echo $baseUrl; ?>/features" class="btn btn-outline btn-lg">Explore Features</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="<?php echo $basePath; ?>/screenshots/dashboard.png" alt="UnlockYourSkills Dashboard - Enterprise LMS Interface" loading="eager">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>13+</h3>
                <p>Content Types Supported</p>
            </div>
            <div class="stat-item">
                <h3>∞</h3>
                <p>Unlimited Clients</p>
            </div>
            <div class="stat-item">
                <h3>99.9%</h3>
                <p>Uptime Guarantee</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Expert Support</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Why Choose UnlockYourSkills?</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                The most comprehensive, AI-powered learning management system designed for modern enterprises, 
                training providers, and educational institutions.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🤖</span>
                <h3>AI-Powered Content Generation</h3>
                <p>Leverage artificial intelligence to automatically create engaging learning materials, assessments, and interactive content. Save time and reduce costs.</p>
                <ul>
                    <li>Automated course creation</li>
                    <li>DALL-E 3 image generation</li>
                    <li>AI-generated assessments</li>
                    <li>Smart content recommendations</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🏢</span>
                <h3>Multi-Client Architecture</h3>
                <p>Perfect for training providers serving multiple organizations. Complete data isolation, custom branding, and independent management for each client.</p>
                <ul>
                    <li>Unlimited client organizations</li>
                    <li>White-label capabilities</li>
                    <li>Custom branding per client</li>
                    <li>Isolated data and analytics</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📦</span>
                <h3>SCORM Compliance</h3>
                <p>Full support for SCORM 1.2 and SCORM 2004 standards. Import existing courses or create new ones with our advanced SCORM package builder.</p>
                <ul>
                    <li>SCORM 1.2 & 2004 support</li>
                    <li>Progress tracking</li>
                    <li>Resume functionality</li>
                    <li>Detailed analytics</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📚</span>
                <h3>13+ Content Types</h3>
                <p>Support for diverse learning materials including videos, documents, audio, interactive content, assessments, surveys, and more.</p>
                <ul>
                    <li>Video & audio content</li>
                    <li>Documents & presentations</li>
                    <li>Interactive modules</li>
                    <li>Assessments & surveys</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📊</span>
                <h3>Advanced Analytics</h3>
                <p>Comprehensive reporting and analytics to track learner progress, engagement, and performance with exportable reports.</p>
                <ul>
                    <li>6+ report types</li>
                    <li>Real-time dashboards</li>
                    <li>Custom date ranges</li>
                    <li>PDF/Excel exports</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🌐</span>
                <h3>Multi-Language Support</h3>
                <p>Deliver training in multiple languages with our complete localization framework. Perfect for global organizations.</p>
                <ul>
                    <li>Multiple language packs</li>
                    <li>User language preferences</li>
                    <li>RTL language support</li>
                    <li>Custom translations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Product Screenshots Section -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center">
            <h2>See Our Platform in Action</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Explore the intuitive interface and powerful features that make UnlockYourSkills the preferred choice 
                for enterprise learning management.
            </p>
        </div>
        
        <div class="screenshot-grid">
            <div class="screenshot-item">
                <img src="<?php echo $basePath; ?>/screenshots/ai-content-creation.png" alt="AI Content Generation Interface - Create eLearning Content with AI" loading="lazy">
                <p class="screenshot-caption">AI-Powered Content Creation</p>
            </div>
            <div class="screenshot-item">
                <img src="<?php echo $basePath; ?>/screenshots/course-management.png" alt="Course Management Dashboard - LMS Course Administration" loading="lazy">
                <p class="screenshot-caption">Course Management</p>
            </div>
            <div class="screenshot-item">
                <img src="<?php echo $basePath; ?>/screenshots/user-management.png" alt="User Management System - Enterprise User Administration" loading="lazy">
                <p class="screenshot-caption">User Management</p>
            </div>
            <div class="screenshot-item">
                <img src="<?php echo $basePath; ?>/screenshots/my-courses.png" alt="Learner Dashboard - Student Course View" loading="lazy">
                <p class="screenshot-caption">Learner Dashboard</p>
            </div>
            <div class="screenshot-item">
                <img src="<?php echo $basePath; ?>/screenshots/reports-dashboard.png" alt="Analytics Dashboard - Learning Analytics and Reports" loading="lazy">
                <p class="screenshot-caption">Advanced Reports</p>
            </div>
            <div class="screenshot-item">
                <img src="<?php echo $basePath; ?>/screenshots/vlr-repository.png" alt="Virtual Learning Repository - Content Library Management" loading="lazy">
                <p class="screenshot-caption">Content Repository</p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Perfect for Every Organization</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Whether you're a training provider, educational institution, or enterprise organization, 
                UnlockYourSkills scales to meet your needs.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🏢</span>
                <h3>Training Providers</h3>
                <p>Manage multiple client organizations with isolated data, custom branding, and independent user bases. Perfect for training companies serving diverse clients.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎓</span>
                <h3>Educational Institutions</h3>
                <p>Support multiple departments or campuses with unified management, custom workflows, and comprehensive tracking.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🏭</span>
                <h3>Enterprise Organizations</h3>
                <p>Deploy across multiple business units or subsidiaries with centralized control and decentralized operations.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">💼</span>
                <h3>Corporate Training</h3>
                <p>Streamline employee onboarding, compliance training, and skill development programs with powerful automation.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Transform Your Training?</h2>
        <p>Join hundreds of organizations using UnlockYourSkills to deliver exceptional learning experiences.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-lg">Request Free Demo</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-outline btn-lg" style="border-color: white;">Contact Sales</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

