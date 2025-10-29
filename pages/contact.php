<?php
$pageTitle = "Contact Us - Get in Touch | UnlockYourSkills Support";
$pageDescription = "Contact UnlockYourSkills for sales inquiries, product support, or partnership opportunities. Our team is ready to help you with your LMS needs. Email, phone, and live chat support available.";
$request = 'contact';
include __DIR__ . '/../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Get in Touch</h1>
        <p>We're here to help with your learning management needs</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="two-column">
            <div>
                <h2>Contact Information</h2>
                <p style="color: var(--text-gray); margin: 20px 0;">
                    Have questions about UnlockYourSkills? Our team is ready to assist you with 
                    product information, technical support, or partnership opportunities.
                </p>
                
                <div class="feature-card" style="margin: 30px 0;">
                    <h4 style="color: var(--primary-color); margin-bottom: 20px;"><i class="fas fa-envelope"></i> Email</h4>
                    <p><strong>Sales Inquiries:</strong><br>unlockyourskills.online@gmail.com</p>
                    <p><strong>Technical Support:</strong><br>unlockyourskills.online@gmail.com</p>
                    <p><strong>General Inquiries:</strong><br>unlockyourskills.online@gmail.com</p>
                </div>
                
                <div class="feature-card" style="margin: 30px 0;">
                    <h4 style="color: var(--primary-color); margin-bottom: 20px;"><i class="fas fa-phone"></i> Phone</h4>
                    <p><strong>Sales:</strong> +919665514330</p>
                    <p><strong>Support:</strong> +919665514330</p>
                    <p style="font-size: 0.9rem; color: var(--text-light);">Monday - Friday: 9:00 AM - 6:00 PM (IST)<br>24/7 Emergency Support Available</p>
                </div>
                
                <div class="feature-card" style="margin: 30px 0;">
                    <h4 style="color: var(--primary-color); margin-bottom: 20px;"><i class="fas fa-map-marker-alt"></i> Office</h4>
                    <p><strong>Deeplaxmi Communications</strong></p>
                    <p>123 Business Street<br>
                    Suite 456<br>
                    City, State 12345<br>
                    United States</p>
                </div>
                
                <div class="feature-card" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                    <h4 style="margin-bottom: 15px;"><i class="fas fa-clock"></i> Business Hours</h4>
                    <p><strong>Sales & Support:</strong></p>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM EST<br>
                    Saturday: 10:00 AM - 4:00 PM EST<br>
                    Sunday: Closed</p>
                    <p style="margin-top: 15px; padding-top: 15px; border-top: 1px solid rgba(255,255,255,0.3);">
                        <strong>Emergency Support:</strong> 24/7 for Enterprise customers
                    </p>
                </div>
            </div>
            
            <div>
                <div class="feature-card">
                    <h3 style="text-align: center; color: var(--primary-color); margin-bottom: 30px;">Send Us a Message</h3>
                    
                    <form id="contactForm" method="POST" action="">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control" required placeholder="John Doe">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="john@company.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="+919665514330">
                        </div>
                        
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" name="company" class="form-control" placeholder="Company Inc.">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="">Select a subject</option>
                                <option value="sales">Sales Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="demo">Request Demo</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="feedback">Product Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" class="form-control" required placeholder="How can we help you?" style="min-height: 150px;"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="newsletter" checked>
                                Subscribe to our newsletter for product updates
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Options -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center">
            <h2>More Ways to Get Help</h2>
            <p style="max-width: 800px; margin: 20px auto; color: var(--text-gray);">
                Choose the support option that works best for you
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">📚</span>
                <h3>Documentation</h3>
                <p>Access our comprehensive knowledge base with guides, tutorials, and best practices for getting the most out of UnlockYourSkills.</p>
                <a href="#" class="btn btn-outline" style="margin-top: 15px;">View Documentation</a>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">💬</span>
                <h3>Live Chat</h3>
                <p>Get instant answers from our support team. Available Monday-Friday, 9 AM - 6 PM EST. Enterprise customers have 24/7 access.</p>
                <a href="#" class="btn btn-outline" style="margin-top: 15px;">Start Chat</a>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🎓</span>
                <h3>Training Resources</h3>
                <p>Join our webinars, watch video tutorials, and access training materials to master the platform and optimize your training programs.</p>
                <a href="#" class="btn btn-outline" style="margin-top: 15px;">Browse Resources</a>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🤝</span>
                <h3>Community Forum</h3>
                <p>Connect with other UnlockYourSkills users, share best practices, and learn from the collective wisdom of our community.</p>
                <a href="#" class="btn btn-outline" style="margin-top: 15px;">Join Community</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to See UnlockYourSkills in Action?</h2>
        <p>Schedule a personalized demo and discover how we can transform your training programs.</p>
        <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-lg">Request Free Demo</a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

