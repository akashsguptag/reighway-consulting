<?php
/**
 * Head Include File
 * Contains all head section elements including SEO meta tags
 */

// Get page name from current file
$current_page = basename($_SERVER['PHP_SELF'], '.php');
if ($current_page === 'index') {
    $current_page = 'index';
}

// Load SEO configuration
require_once __DIR__ . '/../config/seo.php';
$seo = get_seo_data($current_page);

// Get current URL for canonical
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!----------------------------------------
    meta tags
    ---------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----------------------------------------
    SEO Meta Tags
    ---------------------------------------->
    <title><?php echo htmlspecialchars($seo['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($seo['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo['keywords']); ?>">
    <meta name="author" content="Reighway Consulting">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!----------------------------------------
    Canonical URL
    ---------------------------------------->
    <link rel="canonical" href="<?php echo htmlspecialchars($seo['canonical']); ?>">
    
    <!----------------------------------------
    Open Graph Meta Tags
    ---------------------------------------->
    <meta property="og:type" content="<?php echo htmlspecialchars($seo['og_type']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($seo['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo['description']); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($seo['site_image']); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($seo['canonical']); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($seo['site_name']); ?>">
    <meta property="og:locale" content="en_US">
    
    <!----------------------------------------
    Twitter Card Meta Tags
    ---------------------------------------->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seo['title']); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seo['description']); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($seo['site_image']); ?>">
    <?php if (!empty($seo['twitter_handle'])): ?>
    <meta name="twitter:site" content="<?php echo htmlspecialchars($seo['twitter_handle']); ?>">
    <meta name="twitter:creator" content="<?php echo htmlspecialchars($seo['twitter_handle']); ?>">
    <?php endif; ?>
    
    <!----------------------------------------
    Additional SEO Meta Tags
    ---------------------------------------->
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="application-name" content="<?php echo htmlspecialchars($seo['site_name']); ?>">
    
    <!----------------------------------------
    Favicon
    ---------------------------------------->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favi.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favi.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    
    <!----------------------------------------
    Stylesheets
    ---------------------------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/overlay-scrollbars.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!----------------------------------------
    Structured Data (JSON-LD)
    ---------------------------------------->
    <?php if (!empty($seo['structured_data'])): ?>
    <script type="application/ld+json">
    <?php echo json_encode($seo['structured_data'], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    </script>
    <?php endif; ?>
</head>

