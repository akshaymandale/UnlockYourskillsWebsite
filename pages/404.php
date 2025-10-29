<?php
$pageTitle = "Page Not Found - UnlockYourSkills";
$pageDescription = "The page you're looking for doesn't exist.";
$request = '404';
include __DIR__ . '/../includes/header.php';
?>

<section class="section">
    <div class="container" style="text-align: center; padding: 100px 0;">
        <h1 style="font-size: 6rem; color: var(--primary-color); margin-bottom: 20px;">404</h1>
        <h2 style="margin-bottom: 20px;">Page Not Found</h2>
        <p style="color: var(--text-gray); margin-bottom: 40px; font-size: 1.1rem;">
            Oops! The page you're looking for doesn't exist.
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="/UnlockYourSkillsWebsite/index.php" class="btn btn-primary btn-lg">Go to Homepage</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-outline btn-lg">Contact Support</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

