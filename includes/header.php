<?php
/**
 * Header Include File
 * Contains preloader, top menu, and navigation
 */

// Determine base path for links - all files are in root, so use empty string
$base_path = '';
?>
<body>

    <div class="main-wrapper">

    <!----------------------------------------
    preloader - start
    ---------------------------------------->
    <div class="preloader">
        <div class='sk-folding-cube'>
            <div class='sk-cube sk-cube-1'></div>
            <div class='sk-cube sk-cube-2'></div>
            <div class='sk-cube sk-cube-4'></div>
            <div class='sk-cube sk-cube-3'></div>
          </div>
    </div>
    <!----------------------------------------
    preloader - end
    ---------------------------------------->

    <!----------------------------------------
    top menu - start
    ---------------------------------------->
    <div class="top-menu">
        <div class="top-menu-wrapper">
            <div class="tagline">
                <p>Reighway Consulting — for Legal Support and Technical Service Delivery.</p>
            </div>
            <div class="menu">
                <ul>
                    <li class="phone lt-1">
                        <a href="tel:123456789" class="link link-sm">
                            <i class="fas fa-phone-alt c-primary"></i>
                            <span>123 456 789</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!----------------------------------------
    top menu - end
    ---------------------------------------->

    <!----------------------------------------
    navigation - start
    ---------------------------------------->
    <div class="navigation">
        <div class="navigation-wrapper">
            <div class="navigation-inner">
                <div class="navigation-logo">
                    <a href="<?php echo $base_path; ?>index.php">
                        <img src="<?php echo $base_path; ?>assets/images/logo.png" alt="Reighway Consulting Logo">
                    </a>
                </div>
                <div class="navigation-menu">
                    <div class="mobile-header">
                        <div class="logo">
                            <a href="<?php echo $base_path; ?>index.php">
                                <img src="<?php echo $base_path; ?>assets/images/logo-white.png" alt="Reighway Consulting">
                            </a>
                        </div>
                        <ul>
                            <li class="close-button">
                                <i class="fas fa-times"></i>
                            </li>
                        </ul>
                    </div>
                    <ul class="parent">
                        <li>
                            <a href="<?php echo $base_path; ?>index.php">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base_path; ?>about.php">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base_path; ?>service.php">
                                <span>Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base_path; ?>career.php">
                                <span>Careers</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base_path; ?>contact.php">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                    <p class="tagline">Reighway Consulting — for Legal Support and Technical Service Delivery.</p>
                </div>
                <div class="navigation-bar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    navigation - end
    ---------------------------------------->

