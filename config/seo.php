<?php
/**
 * SEO Configuration File
 * Contains SEO settings for all pages
 */

// Base URL - Update this to your actual domain
$base_url = 'https://www.reighway.consulting';

// Default SEO settings
$default_seo = [
    'site_name' => 'Reighway Consulting',
    'site_description' => 'Reighway Consulting — for Legal Support and Technical Service Delivery. Global consulting and specialist talent solutions for legal and technical operations.',
    'site_keywords' => 'legal support, legal process outsourcing, LPO, IT infrastructure, paralegal services, legal consulting, technical support, UK legal services, remote legal support',
    'site_author' => 'Reighway Consulting',
    'site_image' => $base_url . '/assets/images/logo.png',
    'twitter_handle' => '@reighway',
    'facebook_page' => 'https://www.facebook.com/reighway',
    'linkedin_page' => 'https://www.linkedin.com/company/reighway',
    'contact_phone' => '+123 456 789',
    'contact_email' => 'info@reighway.consulting',
    'address' => '596 Random Street Rd, London, UK'
];

// Page-specific SEO configurations
$page_seo = [
    'index' => [
        'title' => 'Reighway Consulting | Global Legal Support & Technical Service Delivery',
        'description' => 'Reighway Consulting provides global consulting and specialist talent solutions for legal and technical operations. We bridge the gap between world-class talent and global organizations.',
        'keywords' => 'legal support, legal process outsourcing, IT infrastructure, paralegal services, UK legal services, remote legal support, technical consulting',
        'og_type' => 'website',
        'canonical' => $base_url . '/',
        'structured_data' => [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Reighway Consulting',
            'url' => $base_url,
            'logo' => $base_url . '/assets/images/logo.png',
            'description' => 'Global consulting and specialist talent solutions for legal and technical operations',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+123-456-789',
                'contactType' => 'customer service',
                'email' => 'info@reighway.consulting'
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '596 Random Street Rd',
                'addressLocality' => 'London',
                'addressCountry' => 'UK'
            ],
            'sameAs' => [
                'https://www.facebook.com/reighway',
                'https://www.linkedin.com/company/reighway',
                'https://twitter.com/reighway'
            ]
        ]
    ],
    'about' => [
        'title' => 'About Us | Reighway Consulting - Your Strategic Operational Partner',
        'description' => 'Reighway Consulting was founded on a clear belief: exceptional talent knows no borders. We connect global organizations with specialized expertise in legal support and IT infrastructure.',
        'keywords' => 'about reighway consulting, legal support company, IT infrastructure services, global consulting, legal process outsourcing',
        'og_type' => 'website',
        'canonical' => $base_url . '/about.php',
        'structured_data' => [
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'mainEntity' => [
                '@type' => 'Organization',
                'name' => 'Reighway Consulting',
                'description' => 'Strategic operational partner specializing in legal support and IT infrastructure'
            ]
        ]
    ],
    'service' => [
        'title' => 'Services | Legal Support & IT Infrastructure | Reighway Consulting',
        'description' => 'We provide legal support services (LPO) for overseas firms and managed IT infrastructure for legal and professional services. Secure, compliant, and scalable solutions.',
        'keywords' => 'legal support services, LPO, legal process outsourcing, IT infrastructure, paralegal support, case management, compliance audit, managed IT services',
        'og_type' => 'website',
        'canonical' => $base_url . '/service.php',
        'structured_data' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Legal Support and IT Infrastructure Services',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Reighway Consulting'
            ],
            'areaServed' => 'Worldwide',
            'availableChannel' => [
                '@type' => 'ServiceChannel',
                'serviceUrl' => $base_url . '/contact.php'
            ]
        ]
    ],
    'contact' => [
        'title' => 'Contact Us | Get in Touch | Reighway Consulting',
        'description' => 'Contact Reighway Consulting for business inquiries, partnerships, or service engagements. Reach out to our team for legal support and IT infrastructure solutions.',
        'keywords' => 'contact reighway consulting, legal support contact, IT services contact, business inquiry',
        'og_type' => 'website',
        'canonical' => $base_url . '/contact.php',
        'structured_data' => [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'mainEntity' => [
                '@type' => 'Organization',
                'name' => 'Reighway Consulting',
                'email' => 'info@reighway.consulting',
                'telephone' => '+123-456-789',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '596 Random Street Rd',
                    'addressLocality' => 'London',
                    'addressCountry' => 'UK'
                ]
            ]
        ]
    ],
    'career' => [
        'title' => 'Careers | Join Our Global Team | Reighway Consulting',
        'description' => 'Build a global career from anywhere. Join Reighway Consulting and work on high-profile international cases and projects. Remote and hybrid opportunities available.',
        'keywords' => 'careers at reighway, paralegal jobs, IT support jobs, remote legal jobs, legal careers, technical support careers',
        'og_type' => 'website',
        'canonical' => $base_url . '/career.php',
        'structured_data' => [
            '@context' => 'https://schema.org',
            '@type' => 'JobPosting',
            'hiringOrganization' => [
                '@type' => 'Organization',
                'name' => 'Reighway Consulting',
                'sameAs' => $base_url
            ],
            'jobLocation' => [
                '@type' => 'Place',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Remote',
                    'addressCountry' => 'Worldwide'
                ]
            ],
            'employmentType' => ['FULL_TIME', 'PART_TIME', 'CONTRACTOR']
        ]
    ],
    'privacy-policy' => [
        'title' => 'Privacy Policy | Reighway Consulting',
        'description' => 'Reighway Consulting privacy policy. We respect your privacy and are committed to protecting your personal data in compliance with GDPR and international standards.',
        'keywords' => 'privacy policy, data protection, GDPR compliance, privacy statement',
        'og_type' => 'website',
        'canonical' => $base_url . '/privacy-policy.php',
        'structured_data' => [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'Privacy Policy',
            'description' => 'Privacy policy and data protection information'
        ]
    ]
];

// Function to get SEO data for a page
function get_seo_data($page_name) {
    global $default_seo, $page_seo, $base_url;
    
    if (isset($page_seo[$page_name])) {
        $page_data = $page_seo[$page_name];
        return [
            'title' => $page_data['title'],
            'description' => $page_data['description'],
            'keywords' => $page_data['keywords'],
            'og_type' => $page_data['og_type'],
            'canonical' => $page_data['canonical'],
            'structured_data' => $page_data['structured_data'],
            'site_name' => $default_seo['site_name'],
            'site_image' => $default_seo['site_image'],
            'twitter_handle' => $default_seo['twitter_handle']
        ];
    }
    
    // Return default if page not found
    return [
        'title' => $default_seo['site_name'],
        'description' => $default_seo['site_description'],
        'keywords' => $default_seo['site_keywords'],
        'og_type' => 'website',
        'canonical' => $base_url,
        'structured_data' => [],
        'site_name' => $default_seo['site_name'],
        'site_image' => $default_seo['site_image'],
        'twitter_handle' => $default_seo['twitter_handle']
    ];
}
?>

