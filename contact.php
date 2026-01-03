<?php
require_once 'includes/head.php';
require_once 'includes/header.php';
?>

    <!----------------------------------------
    page header - start
    ---------------------------------------->
    <div class="page-header">
        <div class="page-header-wrapper" style="background-image: url('assets/images/page-header-img.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-header-content">
                            <h1 class="c-dark">Get in Touch</h1>
                            <p class="small ln-ht-auto c-dark"> <a href="service.php" class="link link-inherit"><span>Discover Our Services</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    page header - end
    ---------------------------------------->

    <!----------------------------------------
    contact - start
    ---------------------------------------->
    <div class="contact">
        <div class="contact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="contact-header">
                            <h2 class="ln-ht-44">Let's Architect Your Operational Future.</h2>
                            <p class="large c-grey">Ready to reduce overheads and increase output? Our consultants are ready to design a bespoke talent or technology solution for your firm.</p>  

                            <p class="large c-grey">Whether you're seeking to enhance your legal support capabilities, strengthen your IT infrastructure, or take the next step in your professional career, we're here to help you succeed. </p>

                            <p class="large c-grey">Our team is ready to discuss how we can become your trusted partner for global talent solutions and consulting services. Let's explore how Reighway Consulting can support your specific needs and objectives. </p> 
                        </div>
                    </div>
                </div>
                <div class="row contact-detail-row">
                    <div class="col-lg-3 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="assets/images/icons/icon-15.png" alt="Business Inquiries Icon">
                            </div>
                            <div>
                                <h6 class=" c-primary">For business inquiries, partnerships, or service engagements</h6>
                                <a href="mailto:info@reighway.com" class="link  link-grey link-lg"><span>info@reighway.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="assets/images/icons/icon-16.png" alt="Careers Icon">
                            </div>
                            <div>
                                <h6 class=" c-primary">For career opportunities or recruitment-related questions</h6>
                                <a href="mailto:careers@reighway.com" class="link  link-grey link-lg"><span>contact@reighway.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="assets/images/icons/icon-16.png" alt="careers Icon">
                            </div>
                            <div>
                                <h6 class=" c-primary">Privacy Matters: For data protection inquiries or privacy-related requests: </h6>
                                <a href="mailto:privacy@reighway.com" class="link  link-grey link-lg"><span>info@reighway.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="assets/images/icons/icon-18.png" alt="Social Media Icon">
                            </div>
                            <div>
                                <h6 class=" c-primary">social</h6>
                                <ul class="social">
                                    <li>
                                        <a href="#" aria-label="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Facebook">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="YouTube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="LinkedIn">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    contact - end
    ---------------------------------------->

    <!----------------------------------------
    contact form - start
    ---------------------------------------->
    <div class="contact-form pattern-bg">
        <div class="contact-form-wrapper">
            <div class="container pattern-bg-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-form-header">
                            <h2 class="ln-ht-44">Write Us A Message</h2>
                            <p class="large c-grey">Message us below and we'll get back to you in a jiffy. You can also chat with us below if that's more your fancy.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="first_name" placeholder="First name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="last_name" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email address" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="tel" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="inquiry_type" placeholder="Inquiry Type">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="button button-3 txt-upper" type="submit">
                                        <div>
                                            <i class="far fa-comment"></i>
                                            <span>send message</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    contact form - end
    ---------------------------------------->

    <!----------------------------------------
    cta - start
    ---------------------------------------->
    <div class="cta-section b-primary">
        <div class="cta-section-wrapper section-wrapper" style="background-image: url('assets/images/patterns/pattern.png');">
            <div class="container">
                <div class="row">
                    <div class="cta-section-content txt-center">
                        <div class="button-group">
                            <a href="career.php" class="button button-1 txt-upper">
                                <div>
                                    <i class="far fa-envelope"></i>
                                    <span>Join Our Global Team </span>
                                </div>
                            </a>
                            <a href="contact.php" class="button button-2 txt-upper">
                                <div>
                                    <i class="fas fa-headphones"></i>
                                    <span>Partner With Us </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    cta - end
    ---------------------------------------->

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>

