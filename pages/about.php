<?php
$pageTitle = "About Us - UnlockYourSkills | Leading LMS Provider";
$pageDescription = "Learn about UnlockYourSkills and Deeplaxmi Communications. We're dedicated to transforming corporate training and education with innovative AI-powered LMS solutions.";
$request = 'about';
include __DIR__ . '/../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>About UnlockYourSkills</h1>
        <p>Transforming learning with innovative technology</p>
    </div>
</section>

<!-- Mission Section -->
<section class="section">
    <div class="container">
        <div class="two-column">
            <div>
                <h2>Our Mission</h2>
                <p style="color: var(--text-gray); font-size: 1.1rem; line-height: 1.8; margin: 20px 0;">
                    At UnlockYourSkills, we believe that powerful learning technology should be accessible 
                    to organizations of all sizes. Our mission is to empower businesses, training providers, 
                    and educational institutions with an intelligent, scalable LMS platform that makes 
                    creating and delivering exceptional learning experiences effortless.
                </p>
                <p style="color: var(--text-gray); font-size: 1.1rem; line-height: 1.8; margin: 20px 0;">
                    Founded by a team of eLearning experts and technology innovators, we've built a 
                    platform that combines cutting-edge AI capabilities with enterprise-grade reliability 
                    and multi-client architecture.
                </p>
            </div>
            <div>
                <img src="<?php echo $basePath; ?>/screenshots/dashboard.png" alt="UnlockYourSkills Platform" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;">
            <h2>Our Core Values</h2>
            <p style="color: var(--text-gray);">The principles that guide everything we do</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🎯</span>
                <h3>Innovation First</h3>
                <p>We continuously push the boundaries of what's possible in learning technology, 
                integrating AI and emerging technologies to stay ahead of the curve.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🤝</span>
                <h3>Customer Success</h3>
                <p>Your success is our success. We're committed to providing exceptional support 
                and ensuring you get maximum value from our platform.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🔒</span>
                <h3>Security & Privacy</h3>
                <p>We take data security seriously, implementing enterprise-grade security measures 
                and maintaining strict compliance with industry standards.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🌟</span>
                <h3>Quality Excellence</h3>
                <p>We're obsessed with quality, from our code to our customer service. Every detail 
                matters in creating the best LMS experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;">
            <h2>UnlockYourSkills by the Numbers</h2>
            <p style="color: var(--text-gray);">Our impact in the eLearning industry</p>
        </div>
        
        <div class="stats-grid" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); padding: 60px; border-radius: 20px; color: white;">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Organizations Served</p>
            </div>
            <div class="stat-item">
                <h3>100K+</h3>
                <p>Active Learners</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Countries Worldwide</p>
            </div>
            <div class="stat-item">
                <h3>99.9%</h3>
                <p>Customer Satisfaction</p>
            </div>
            <div class="stat-item">
                <h3>1M+</h3>
                <p>Courses Delivered</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Support Available</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;">
            <h2>Built with Modern Technology</h2>
            <p style="color: var(--text-gray);">Enterprise-grade technology stack for reliability and performance</p>
        </div>
        
        <div class="two-column">
            <div class="feature-card">
                <h3 style="color: var(--primary-color); margin-bottom: 20px;">Technical Excellence</h3>
                <ul>
                    <li>PHP 7.4+ with MVC architecture</li>
                    <li>MySQL/MariaDB database</li>
                    <li>RESTful API design</li>
                    <li>SCORM 1.2 & 2004 compliance</li>
                    <li>AI integration (Ollama, DALL-E 3)</li>
                    <li>Mobile-first responsive design</li>
                    <li>Enterprise security standards</li>
                    <li>Scalable cloud infrastructure</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <h3 style="color: var(--primary-color); margin-bottom: 20px;">AI & Innovation</h3>
                <ul>
                    <li>Automated content generation</li>
                    <li>AI-powered image creation</li>
                    <li>Smart learning recommendations</li>
                    <li>Predictive analytics</li>
                    <li>Natural language processing</li>
                    <li>Machine learning algorithms</li>
                    <li>Adaptive learning paths</li>
                    <li>Continuous platform evolution</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;">
            <h2>Why Choose Us?</h2>
            <p style="color: var(--text-gray);">What makes UnlockYourSkills different</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🏆</span>
                <h3>Industry Expertise</h3>
                <p>Decades of combined experience in eLearning, corporate training, and educational technology.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">⚡</span>
                <h3>Rapid Implementation</h3>
                <p>Get up and running in days, not months. Our streamlined onboarding process ensures quick deployment.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">💰</span>
                <h3>Cost-Effective</h3>
                <p>Enterprise features at a fraction of the cost of traditional LMS platforms. No per-user fees.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">📈</span>
                <h3>Proven Results</h3>
                <p>Our customers report 40% faster training delivery and 60% reduction in content creation costs.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🔄</span>
                <h3>Continuous Innovation</h3>
                <p>Regular updates and new features based on customer feedback and industry trends.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🛡️</span>
                <h3>Reliability You Can Trust</h3>
                <p>99.9% uptime SLA, enterprise-grade security, and 24/7 monitoring for peace of mind.</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Info -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center">
            <h2>Deeplaxmi Communications</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray); font-size: 1.1rem;">
                UnlockYourSkills is proudly developed and maintained by Deeplaxmi Communications, 
                a technology company specializing in enterprise software solutions and digital transformation.
            </p>
        </div>
        
        <div class="feature-card" style="max-width: 800px; margin: 40px auto; text-align: center; background: white;">
            <h3 style="color: var(--primary-color); margin-bottom: 20px;">Our Commitment</h3>
            <p style="color: var(--text-gray); line-height: 1.8;">
                We're committed to helping organizations unlock their potential through innovative 
                learning technology. Our team works tirelessly to ensure that UnlockYourSkills remains 
                at the forefront of LMS innovation, delivering value to our customers every single day.
            </p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Join hundreds of organizations transforming their training with UnlockYourSkills</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-lg">Request Free Demo</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Contact Us</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

