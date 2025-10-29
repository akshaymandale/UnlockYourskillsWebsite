<?php
$pageTitle = "Request Demo - Try UnlockYourSkills LMS Free | Schedule Your Demo Today";
$pageDescription = "Request a free demo of UnlockYourSkills enterprise LMS platform. See AI-powered content generation, SCORM compliance, and multi-client features in action. No credit card required.";
$request = 'demo';
include __DIR__ . '/../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Request a Free Demo</h1>
        <p>See UnlockYourSkills in action with a personalized demonstration tailored to your needs</p>
    </div>
</section>

<!-- Demo Request Section -->
<section class="section">
    <div class="container">
        <div class="two-column">
            <div>
                <h2>Experience the Power of AI-Driven Learning</h2>
                <p style="color: var(--text-gray); margin: 20px 0;">
                    Schedule a personalized demo and discover how UnlockYourSkills can transform your training programs. 
                    Our experts will guide you through:
                </p>
                
                <div class="feature-card" style="margin: 20px 0;">
                    <ul>
                        <li>AI-powered content generation capabilities</li>
                        <li>Multi-client architecture and white-label options</li>
                        <li>SCORM compliance and content management</li>
                        <li>Advanced reporting and analytics</li>
                        <li>Custom branding and integration options</li>
                        <li>Security features and compliance standards</li>
                    </ul>
                </div>
                
                <div class="feature-card" style="background: linear-gradient(135deg, #f5f7fa, #c3cfe2);">
                    <h4 style="color: var(--primary-color); margin-bottom: 15px;">What to Expect:</h4>
                    <p style="margin-bottom: 10px;">✓ 30-45 minute personalized walkthrough</p>
                    <p style="margin-bottom: 10px;">✓ Live Q&A with product experts</p>
                    <p style="margin-bottom: 10px;">✓ Custom pricing and implementation plan</p>
                    <p>✓ No obligation or credit card required</p>
                </div>
            </div>
            
            <div>
                <div class="feature-card">
                    <h3 style="text-align: center; color: var(--primary-color); margin-bottom: 30px;">Schedule Your Demo</h3>
                    
                    <form id="demoForm" method="POST" action="">
                        <div class="form-group">
                            <label for="full_name">Full Name *</label>
                            <input type="text" id="full_name" name="full_name" class="form-control" required placeholder="John Doe">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Work Email *</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="john@company.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required placeholder="+1 (555) 123-4567">
                        </div>
                        
                        <div class="form-group">
                            <label for="company">Company Name *</label>
                            <input type="text" id="company" name="company" class="form-control" required placeholder="Company Inc.">
                        </div>
                        
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" id="job_title" name="job_title" class="form-control" placeholder="Training Manager">
                        </div>
                        
                        <div class="form-group">
                            <label for="company_size">Company Size *</label>
                            <select id="company_size" name="company_size" class="form-control" required>
                                <option value="">Select company size</option>
                                <option value="1-50">1-50 employees</option>
                                <option value="51-200">51-200 employees</option>
                                <option value="201-500">201-500 employees</option>
                                <option value="501-1000">501-1,000 employees</option>
                                <option value="1001-5000">1,001-5,000 employees</option>
                                <option value="5001+">5,001+ employees</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="industry">Industry *</label>
                            <select id="industry" name="industry" class="form-control" required>
                                <option value="">Select industry</option>
                                <option value="education">Education & Training</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="technology">Technology</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="finance">Finance & Banking</option>
                                <option value="retail">Retail</option>
                                <option value="government">Government</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="use_case">What are you looking to achieve? *</label>
                            <textarea id="use_case" name="use_case" class="form-control" required placeholder="Tell us about your training needs and goals..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="preferred_date">Preferred Demo Date</label>
                            <input type="date" id="preferred_date" name="preferred_date" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="agree_terms" required>
                                I agree to receive communications from UnlockYourSkills *
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Request Demo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center">
            <h2>Trusted by Leading Organizations</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Join hundreds of organizations worldwide that trust UnlockYourSkills for their learning management needs.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🏆</span>
                <h3>Industry Recognition</h3>
                <p>Award-winning LMS platform recognized for innovation in eLearning and enterprise training.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🔒</span>
                <h3>Enterprise Security</h3>
                <p>SOC 2 Type II compliant with enterprise-grade security and data protection standards.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">💯</span>
                <h3>99.9% Uptime SLA</h3>
                <p>Reliable platform with guaranteed uptime and 24/7 technical support for mission-critical training.</p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🌍</span>
                <h3>Global Reach</h3>
                <p>Supporting organizations in 50+ countries with multi-language and multi-timezone capabilities.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Frequently Asked Questions</h2>
        </div>
        
        <div style="max-width: 800px; margin: 40px auto;">
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">How long is the demo?</h4>
                <p>Our typical demo lasts 30-45 minutes, depending on your specific interests and questions. We can adjust the duration to fit your schedule.</p>
            </div>
            
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">Is there a free trial available?</h4>
                <p>Yes! After the demo, we can set up a free trial environment tailored to your organization's needs, typically for 14-30 days.</p>
            </div>
            
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">Can I see my own content during the demo?</h4>
                <p>Absolutely! If you share sample content in advance, we can upload it to a demo environment to show you exactly how it would work.</p>
            </div>
            
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">What happens after the demo?</h4>
                <p>After the demo, we'll provide a custom proposal including pricing, implementation timeline, and next steps. There's no obligation to purchase.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

