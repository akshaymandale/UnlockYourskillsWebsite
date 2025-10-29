<?php
$pageTitle = "Pricing - Affordable LMS Solutions | UnlockYourSkills Plans & Packages";
$pageDescription = "Explore UnlockYourSkills pricing plans for enterprise LMS. Flexible packages for organizations of all sizes. Custom pricing for multi-client deployments. Contact for quote.";
$request = 'pricing';
include __DIR__ . '/../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Simple, Transparent Pricing</h1>
        <p>Choose the plan that fits your organization's needs</p>
    </div>
</section>

<!-- Pricing Cards -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;">
            <p style="max-width: 800px; margin: 0 auto; color: var(--text-gray); font-size: 1.1rem;">
                All plans include core features, 24/7 support, and regular updates. 
                No hidden fees. Cancel anytime.
            </p>
        </div>
        
        <div class="features-grid">
            <!-- Starter Plan -->
            <div class="feature-card" style="border-top: 4px solid var(--text-light);">
                <h3 style="text-align: center; margin-bottom: 10px;">Starter</h3>
                <p style="text-align: center; color: var(--text-gray); margin-bottom: 30px;">Perfect for small teams</p>
                <div style="text-align: center; margin-bottom: 30px;">
                    <div style="font-size: 3rem; font-weight: 700; color: var(--primary-color);">
                        $499
                    </div>
                    <div style="color: var(--text-gray);">per month</div>
                </div>
                <ul style="margin-bottom: 30px;">
                    <li>Up to 100 active users</li>
                    <li>10 GB storage</li>
                    <li>Basic course management</li>
                    <li>SCORM 1.2 & 2004 support</li>
                    <li>5 content types</li>
                    <li>Basic reporting</li>
                    <li>Email support</li>
                    <li>Mobile responsive</li>
                </ul>
                <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-outline" style="width: 100%;">Get Started</a>
            </div>
            
            <!-- Professional Plan (Featured) -->
            <div class="feature-card" style="border-top: 4px solid var(--primary-color); box-shadow: 0 10px 40px rgba(102, 126, 234, 0.2);">
                <div style="background: var(--primary-color); color: white; text-align: center; padding: 8px; margin: -40px -40px 20px; border-radius: 12px 12px 0 0;">
                    <strong>MOST POPULAR</strong>
                </div>
                <h3 style="text-align: center; margin-bottom: 10px;">Professional</h3>
                <p style="text-align: center; color: var(--text-gray); margin-bottom: 30px;">Ideal for growing organizations</p>
                <div style="text-align: center; margin-bottom: 30px;">
                    <div style="font-size: 3rem; font-weight: 700; color: var(--primary-color);">
                        $999
                    </div>
                    <div style="color: var(--text-gray);">per month</div>
                </div>
                <ul style="margin-bottom: 30px;">
                    <li>Up to 500 active users</li>
                    <li>50 GB storage</li>
                    <li>Advanced course management</li>
                    <li>All content types (13+)</li>
                    <li>AI content generation (100 credits/month)</li>
                    <li>Advanced reporting & analytics</li>
                    <li>Custom branding (1 client)</li>
                    <li>Priority email & chat support</li>
                    <li>API access</li>
                    <li>SSO integration</li>
                </ul>
                <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-primary" style="width: 100%;">Get Started</a>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="feature-card" style="border-top: 4px solid var(--secondary-color);">
                <h3 style="text-align: center; margin-bottom: 10px;">Enterprise</h3>
                <p style="text-align: center; color: var(--text-gray); margin-bottom: 30px;">For large organizations</p>
                <div style="text-align: center; margin-bottom: 30px;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary-color);">
                        Custom
                    </div>
                    <div style="color: var(--text-gray);">contact for pricing</div>
                </div>
                <ul style="margin-bottom: 30px;">
                    <li>Unlimited users</li>
                    <li>Unlimited storage</li>
                    <li>Multi-client architecture</li>
                    <li>Unlimited custom branding</li>
                    <li>AI content generation (unlimited)</li>
                    <li>White-label options</li>
                    <li>Custom integrations</li>
                    <li>Dedicated account manager</li>
                    <li>24/7 phone & email support</li>
                    <li>On-premise deployment option</li>
                    <li>SLA guarantee (99.9% uptime)</li>
                    <li>Training & onboarding included</li>
                </ul>
                <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-outline" style="width: 100%;">Contact Sales</a>
            </div>
        </div>
    </div>
</section>

<!-- Feature Comparison -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center" style="margin-bottom: 40px;">
            <h2>Compare Plans</h2>
            <p style="color: var(--text-gray);">See what's included in each plan</p>
        </div>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; background: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                <thead>
                    <tr style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <th style="padding: 20px; text-align: left;">Feature</th>
                        <th style="padding: 20px; text-align: center;">Starter</th>
                        <th style="padding: 20px; text-align: center;">Professional</th>
                        <th style="padding: 20px; text-align: center;">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">Active Users</td>
                        <td style="padding: 15px; text-align: center;">100</td>
                        <td style="padding: 15px; text-align: center;">500</td>
                        <td style="padding: 15px; text-align: center;">Unlimited</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">Storage</td>
                        <td style="padding: 15px; text-align: center;">10 GB</td>
                        <td style="padding: 15px; text-align: center;">50 GB</td>
                        <td style="padding: 15px; text-align: center;">Unlimited</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">Content Types</td>
                        <td style="padding: 15px; text-align: center;">5</td>
                        <td style="padding: 15px; text-align: center;">13+</td>
                        <td style="padding: 15px; text-align: center;">13+</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">AI Content Generation</td>
                        <td style="padding: 15px; text-align: center;">—</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                        <td style="padding: 15px; text-align: center;">✓ Unlimited</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">Multi-Client Support</td>
                        <td style="padding: 15px; text-align: center;">—</td>
                        <td style="padding: 15px; text-align: center;">1</td>
                        <td style="padding: 15px; text-align: center;">Unlimited</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">Custom Branding</td>
                        <td style="padding: 15px; text-align: center;">—</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">Advanced Reporting</td>
                        <td style="padding: 15px; text-align: center;">Basic</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                        <td style="padding: 15px; text-align: center;">✓ Custom</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">API Access</td>
                        <td style="padding: 15px; text-align: center;">—</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 15px; font-weight: 600;">SSO Integration</td>
                        <td style="padding: 15px; text-align: center;">—</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                        <td style="padding: 15px; text-align: center;">✓</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px; font-weight: 600;">Support</td>
                        <td style="padding: 15px; text-align: center;">Email</td>
                        <td style="padding: 15px; text-align: center;">Email & Chat</td>
                        <td style="padding: 15px; text-align: center;">24/7 Phone</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Add-ons -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 40px;">
            <h2>Available Add-ons</h2>
            <p style="color: var(--text-gray);">Enhance your plan with additional features</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <h3 style="color: var(--primary-color); margin-bottom: 15px;">Additional Storage</h3>
                <p><strong>$50/month</strong> per 10 GB</p>
                <p style="font-size: 0.9rem; color: var(--text-gray); margin-top: 10px;">
                    Need more space for your learning content? Add storage in 10 GB increments.
                </p>
            </div>
            
            <div class="feature-card">
                <h3 style="color: var(--primary-color); margin-bottom: 15px;">Extra AI Credits</h3>
                <p><strong>$199/month</strong> for 500 credits</p>
                <p style="font-size: 0.9rem; color: var(--text-gray); margin-top: 10px;">
                    Generate more content with additional AI generation credits.
                </p>
            </div>
            
            <div class="feature-card">
                <h3 style="color: var(--primary-color); margin-bottom: 15px;">Custom Development</h3>
                <p><strong>Starting at $5,000</strong></p>
                <p style="font-size: 0.9rem; color: var(--text-gray); margin-top: 10px;">
                    Need custom features or integrations? Our team can build tailored solutions.
                </p>
            </div>
            
            <div class="feature-card">
                <h3 style="color: var(--primary-color); margin-bottom: 15px;">Training & Support</h3>
                <p><strong>$2,500</strong> one-time</p>
                <p style="font-size: 0.9rem; color: var(--text-gray); margin-top: 10px;">
                    Comprehensive training package including onboarding and best practices.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center" style="margin-bottom: 40px;">
            <h2>Pricing FAQs</h2>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">Can I switch plans later?</h4>
                <p>Yes! You can upgrade or downgrade your plan at any time. Changes take effect immediately with prorated billing.</p>
            </div>
            
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">What payment methods do you accept?</h4>
                <p>We accept all major credit cards, ACH transfers, and purchase orders for Enterprise customers.</p>
            </div>
            
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">Is there a setup fee?</h4>
                <p>No setup fees for Starter and Professional plans. Enterprise plans may have a one-time implementation fee depending on customization requirements.</p>
            </div>
            
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">What if I need more than 500 users?</h4>
                <p>For organizations with more than 500 users, we recommend our Enterprise plan with custom pricing based on your exact needs.</p>
            </div>
            
            <div class="feature-card">
                <h4 style="color: var(--primary-color); margin-bottom: 10px;">Do you offer annual discounts?</h4>
                <p>Yes! Save 15% with annual billing. Contact our sales team for volume discounts on multi-year contracts.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Still Have Questions?</h2>
        <p>Schedule a call with our team to discuss your specific needs and get a custom quote.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo $baseUrl; ?>/demo" class="btn btn-lg">Request Demo</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Talk to Sales</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

