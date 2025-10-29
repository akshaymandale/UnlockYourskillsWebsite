<?php
$pageTitle = "Features - AI-Powered LMS | UnlockYourSkills Learning Management System";
$pageDescription = "Explore UnlockYourSkills comprehensive features: AI content generation, SCORM compliance, multi-client architecture, 13+ content types, advanced analytics, and more. Perfect for enterprise eLearning.";
$request = 'features';
include __DIR__ . '/../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Comprehensive LMS Features</h1>
        <p>Everything you need to deliver exceptional learning experiences, all in one powerful platform</p>
    </div>
</section>

<!-- AI Features -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>🤖 AI-Powered Innovation</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Leverage cutting-edge artificial intelligence to automate content creation, 
                personalize learning paths, and enhance training effectiveness.
            </p>
        </div>
        
        <div class="screenshot-showcase" style="margin: 40px 0;">
            <img src="<?php echo $basePath; ?>/screenshots/ai-content-creation.png" alt="AI Content Generation - Automated eLearning Content Creation" loading="lazy">
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">✨</span>
                <h3>AI Content Generation</h3>
                <ul>
                    <li>Automated course creation using Ollama/Llama models</li>
                    <li>Support for multiple AI models</li>
                    <li>Generate documents, presentations, audio scripts</li>
                    <li>Create video scripts and storyboards</li>
                    <li>Background processing for large content</li>
                    <li>Real-time generation status tracking</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎨</span>
                <h3>DALL-E 3 Image Generation</h3>
                <ul>
                    <li>AI-powered image creation for courses</li>
                    <li>Custom prompts for branded visuals</li>
                    <li>Multiple image styles and formats</li>
                    <li>Automatic image optimization</li>
                    <li>Batch image generation</li>
                    <li>Content library integration</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📦</span>
                <h3>Enhanced SCORM Generation</h3>
                <ul>
                    <li>AI-powered SCORM 1.2 & 2004 packages</li>
                    <li>Modular content structure</li>
                    <li>Auto-generated assessments</li>
                    <li>Interactive learning modules</li>
                    <li>Mobile-responsive design</li>
                    <li>Progress tracking integration</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">💡</span>
                <h3>Interactive AI Content</h3>
                <ul>
                    <li>Dynamic learning experiences</li>
                    <li>Personalized content delivery</li>
                    <li>Time-limited learning sessions</li>
                    <li>Progress validation tracking</li>
                    <li>Adaptive learning paths</li>
                    <li>Real-time content adaptation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Multi-Client Features -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center">
            <h2>🏢 Enterprise Multi-Client Architecture</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Built from the ground up to support multiple organizations with complete data isolation, 
                customization, and white-label capabilities.
            </p>
        </div>
        
        <div class="screenshot-showcase" style="margin: 40px 0;">
            <img src="<?php echo $basePath; ?>/screenshots/client-management.png" alt="Multi-Client Management - LMS Client Administration" loading="lazy">
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🔐</span>
                <h3>Complete Client Isolation</h3>
                <p>Each client organization operates independently with isolated data, users, and configurations. Ensure data privacy and security compliance.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎨</span>
                <h3>Custom Branding</h3>
                <p>White-label the platform with client-specific logos, themes, colors, and custom domains. Create unique brand experiences.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📊</span>
                <h3>Unlimited Custom Fields</h3>
                <p>Create dynamic custom fields per client for user profiles, courses, and content with flexible field types and validation.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">👥</span>
                <h3>Client User Management</h3>
                <p>Manage client-specific user pools with role limits, maximum user quotas, and hierarchical organization structures.</p>
            </div>
        </div>
    </div>
</section>

<!-- Course Management Features -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>📚 Comprehensive Course Management</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Create, organize, and deliver training with powerful course management tools 
                designed for complex learning programs.
            </p>
        </div>
        
        <div class="screenshot-showcase" style="margin: 40px 0;">
            <img src="<?php echo $basePath; ?>/screenshots/course-management.png" alt="Course Management System - LMS Course Creation" loading="lazy">
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">📖</span>
                <h3>Multi-Format Courses</h3>
                <ul>
                    <li>Support for 13+ content types</li>
                    <li>SCORM packages (1.2 & 2004)</li>
                    <li>Video and audio content</li>
                    <li>Documents and presentations</li>
                    <li>Interactive modules</li>
                    <li>External resources</li>
                    <li>Assessment packages</li>
                    <li>Surveys and feedback forms</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎯</span>
                <h3>Learning Paths</h3>
                <ul>
                    <li>Prerequisites & post-requisites</li>
                    <li>Sequential learning paths</li>
                    <li>Skill-based progression</li>
                    <li>Modular course structure</li>
                    <li>Adaptive learning support</li>
                    <li>Completion tracking</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">✅</span>
                <h3>Assessments & Testing</h3>
                <ul>
                    <li>Multiple question types (MCQ, True/False, Essay)</li>
                    <li>Randomized question banks</li>
                    <li>Time-limited assessments</li>
                    <li>Pass/fail criteria</li>
                    <li>Attempt management</li>
                    <li>Automated grading</li>
                    <li>Detailed result analytics</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎓</span>
                <h3>Enrollment Management</h3>
                <ul>
                    <li>Self-enrollment options</li>
                    <li>Admin-based enrollment</li>
                    <li>Approval workflows</li>
                    <li>Automatic enrollment rules</li>
                    <li>Course applicability</li>
                    <li>Waitlist management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Analytics & Reporting -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center">
            <h2>📊 Advanced Analytics & Reporting</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Make data-driven decisions with comprehensive analytics, customizable reports, 
                and real-time insights into learner performance.
            </p>
        </div>
        
        <div class="screenshot-showcase" style="margin: 40px 0;">
            <img src="<?php echo $basePath; ?>/screenshots/reports-dashboard.png" alt="Analytics Dashboard - LMS Reporting and Analytics" loading="lazy">
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">📈</span>
                <h3>6+ Report Types</h3>
                <ul>
                    <li>User Progress Report</li>
                    <li>Course Completion Report</li>
                    <li>Assessment Results Report</li>
                    <li>User Activity Report</li>
                    <li>Learning Analytics</li>
                    <li>Engagement Metrics</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📅</span>
                <h3>Flexible Reporting</h3>
                <ul>
                    <li>Custom date ranges</li>
                    <li>Advanced filters</li>
                    <li>Multi-criteria filtering</li>
                    <li>Custom field filtering</li>
                    <li>Export to PDF/Excel</li>
                    <li>Scheduled reports</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📊</span>
                <h3>Real-Time Dashboards</h3>
                <ul>
                    <li>Live progress tracking</li>
                    <li>Visual charts and graphs</li>
                    <li>Customizable widgets</li>
                    <li>Role-based dashboards</li>
                    <li>KPI monitoring</li>
                    <li>Trend analysis</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎯</span>
                <h3>Learning Analytics</h3>
                <ul>
                    <li>Completion rates</li>
                    <li>Time spent analysis</li>
                    <li>Assessment performance</li>
                    <li>Engagement patterns</li>
                    <li>Drop-off identification</li>
                    <li>Predictive insights</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Additional Features -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>✨ Additional Features</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Discover more powerful features that make UnlockYourSkills the complete 
                learning management solution for your organization.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">💬</span>
                <h3>Social Learning</h3>
                <p>Engage learners with social feed, announcements, opinion polls, events, and interactive discussions.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🌐</span>
                <h3>Multi-Language</h3>
                <p>Complete localization framework supporting multiple languages with RTL support and custom translations.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📱</span>
                <h3>Mobile Responsive</h3>
                <p>Fully responsive design that works seamlessly on desktop, tablet, and mobile devices.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🔒</span>
                <h3>Enterprise Security</h3>
                <p>Role-based access control, data encryption, SQL injection prevention, and XSS protection.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🔄</span>
                <h3>API Integration</h3>
                <p>RESTful APIs for third-party integrations, SSO support, and custom extensions.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">⚡</span>
                <h3>High Performance</h3>
                <p>Optimized database queries, caching mechanisms, and efficient resource management.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Experience All Features Today</h2>
        <p>See how UnlockYourSkills can transform your training programs with a personalized demo.</p>
        <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-lg">Request Free Demo</a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

