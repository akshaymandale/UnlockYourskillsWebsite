<?php
// Base URL for all links - standalone website
$baseUrl = '/UnlockYourSkillsWebsite/index.php';
$basePath = '/UnlockYourSkillsWebsite';
?>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 style="display: flex; align-items: center; gap: 10px;">
                        <img src="<?php echo $basePath; ?>/assets/images/UYSlogo copy.png" alt="Unlock Your Skills" class="footer-logo">
                        <span>Unlock Your Skills</span>
                    </h3>
                    <p>AI-powered enterprise learning management system for modern organizations.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="<?php echo $baseUrl; ?>/features">Features</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/pricing">Pricing</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/demo">Request Demo</a></li>
                        <li><a href="<?php echo $basePath; ?>/unlock-your-skills-brochure.html">Brochure</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="<?php echo $baseUrl; ?>/about">About Us</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">API Reference</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">GDPR Compliance</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Deeplaxmi Communications. All Rights Reserved.</p>
                <p>Enterprise Learning Management System | AI-Powered eLearning Platform</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="<?php echo $basePath; ?>/assets/js/main.js"></script>
</body>
</html>
