<?php
/**
 * Footer Include File
 * Contains footer content
 */

// Determine base path for links - all files are in root, so use empty string
$base_path = '';
?>
    <!----------------------------------------
    footer - start
    ---------------------------------------->
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">contact</h6>
                            <ul class="txt-sm-1 c-grey number-list">
                                <li>
                                    P
                                    <a href="tel:123.456.7890" class="link  link-md link-grey">
                                        <span>123.456.7890</span>
                                    </a>
                                </li>
                                <li>
                                    F
                                    <a href="tel:123.456.7890" class="link  link-md link-grey">
                                        <span>123.456.7890</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">location</h6>
                            <p class="c-grey ln-ht-3">596 Random Street Rd,<br>London, UK</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">company</h6>
                            <ul class="txt-sm-1 c-grey">
                                <li>
                                    <a href="<?php echo $base_path; ?>about.php" class="link  link-md link-grey">
                                        <span>About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>service.php" class="link  link-md link-grey">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>career.php" class="link  link-md link-grey">
                                        <span>Careers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>contact.php" class="link  link-md link-grey">
                                        <span>Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>privacy-policy.php" class="link  link-md link-grey">
                                        <span>Privacy</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">social</h6>
                            <ul class="txt-sm-1 c-grey social-list">
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-twitter-square c-light"></i>
                                    <span>
                                        <span>Twitter</span>
                                    </span>
                                </a></li>
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-facebook-square c-light"></i>
                                    <span>
                                        <span>Facebook</span>
                                    </span>
                                </a></li>
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-youtube c-light"></i>
                                    <span>
                                        <span>Youtube</span>
                                    </span>
                                </a></li>
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-linkedin c-light"></i>
                                    <span>
                                        <span>Linkedin</span>
                                    </span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="copyright txt-sm c-grey">&copy; <?php echo date('Y'); ?> Reighway Consulting</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!----------------------------------------
    footer - end
    ---------------------------------------->

    </div>

