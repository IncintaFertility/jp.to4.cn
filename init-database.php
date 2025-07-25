<?php
require_once 'config/config.php';

try {
    $db = Database::getInstance();
    echo "Database initialized successfully!\n";
    
    // Insert sample data
    $samplePages = [
        [
            'slug' => 'our-difference',
            'title' => 'Our Difference',
            'content' => '<h2>What Sets Incinta Apart</h2><p>At Incinta Fertility Center, we believe that every patient deserves personalized care that addresses their unique needs and circumstances. Our patient-first approach combines cutting-edge reproductive technology with compassionate, individualized treatment plans.</p><h3>Personalized Treatment Plans</h3><p>No two fertility journeys are alike. Our experienced team creates customized treatment protocols based on your specific diagnosis, medical history, and personal preferences.</p><h3>Advanced Laboratory Technology</h3><p>Our state-of-the-art IVF laboratory features the latest equipment and techniques, including time-lapse embryo monitoring and advanced genetic testing capabilities.</p><h3>Multilingual Support</h3><p>Our team speaks multiple languages and understands the cultural nuances that can impact your fertility care experience.</p>',
            'meta_description' => 'Discover what makes Incinta Fertility Center different - personalized care, advanced technology, and compassionate support',
            'meta_keywords' => 'fertility center difference, personalized care, advanced IVF laboratory'
        ],
        [
            'slug' => 'financing',
            'title' => 'Financing Options',
            'content' => '<h2>Making Fertility Treatment Affordable</h2><p>We understand that fertility treatments represent a significant investment in your future family. That\'s why we offer various financing options and work with insurance providers to make treatment as accessible as possible.</p><h3>Insurance Coverage</h3><p>Many insurance plans now cover fertility treatments. Our financial counselors will help you understand your benefits and maximize your coverage.</p><h3>Payment Plans</h3><p>We offer flexible payment plans and financing options through third-party providers to help spread the cost of treatment over time.</p><h3>Financing Partners</h3><p>We work with specialized fertility financing companies that offer competitive rates and flexible terms for qualified patients.</p>',
            'meta_description' => 'Learn about financing options and insurance coverage for fertility treatments at Incinta Fertility Center',
            'meta_keywords' => 'fertility financing, insurance coverage, payment plans, IVF costs'
        ],
        [
            'slug' => 'resources',
            'title' => 'Patient Resources',
            'content' => '<h2>Educational Resources</h2><p>Knowledge is power on your fertility journey. We provide comprehensive educational resources to help you understand your treatment options and make informed decisions.</p><h3>Treatment Guides</h3><p>Detailed guides explaining each fertility treatment, what to expect, and how to prepare.</p><h3>Success Stories</h3><p>Read inspiring stories from our patients who have successfully built their families with our help.</p><h3>Support Groups</h3><p>Connect with other patients going through similar experiences in our support groups and online community.</p>',
            'meta_description' => 'Access patient resources, treatment guides, and support materials at Incinta Fertility Center',
            'meta_keywords' => 'fertility resources, patient education, support groups, treatment guides'
        ]
    ];
    
    foreach ($samplePages as $page) {
        $db->insert('pages', $page);
    }
    
    // Insert sample services
    $sampleServices = [
        [
            'name' => 'In Vitro Fertilization (IVF)',
            'slug' => 'ivf',
            'description' => 'Advanced IVF treatments with personalized protocols to maximize your chances of conception.',
            'full_content' => '<h2>IVF Treatment at Incinta</h2><p>Our IVF program combines the latest reproductive technologies with personalized care to give you the best chance of success.</p><h3>What is IVF?</h3><p>In Vitro Fertilization (IVF) is a fertility treatment where eggs are retrieved from the ovaries and fertilized with sperm in our laboratory. The resulting embryos are then transferred to the uterus.</p><h3>Our IVF Process</h3><p>1. Ovarian stimulation with fertility medications<br>2. Egg retrieval procedure<br>3. Fertilization in our laboratory<br>4. Embryo culture and monitoring<br>5. Embryo transfer<br>6. Pregnancy test and monitoring</p>',
            'is_featured' => 1,
            'sort_order' => 1
        ],
        [
            'name' => 'Intrauterine Insemination (IUI)',
            'slug' => 'iui',
            'description' => 'Less invasive fertility treatment option with carefully timed insemination procedures.',
            'full_content' => '<h2>IUI Treatment</h2><p>Intrauterine Insemination (IUI) is a fertility treatment that involves placing sperm directly into the uterus around the time of ovulation.</p><h3>When is IUI Recommended?</h3><p>IUI may be recommended for unexplained infertility, mild male factor infertility, cervical factor infertility, or as a first-line treatment.</p>',
            'is_featured' => 1,
            'sort_order' => 2
        ],
        [
            'name' => 'Genetic Testing',
            'slug' => 'genetic-testing',
            'description' => 'Comprehensive genetic screening to ensure healthy embryo selection and family planning.',
            'full_content' => '<h2>Genetic Testing Services</h2><p>Our comprehensive genetic testing services help ensure the healthiest possible outcomes for you and your future children.</p>',
            'is_featured' => 1,
            'sort_order' => 3
        ],
        [
            'name' => 'Egg Preservation',
            'slug' => 'egg-preservation',
            'description' => 'Fertility preservation options for women who want to delay childbearing.',
            'full_content' => '<h2>Egg Preservation</h2><p>Preserve your fertility for the future with our advanced egg freezing program.</p>',
            'is_featured' => 1,
            'sort_order' => 4
        ],
        [
            'name' => 'Frozen Embryo Transfer',
            'slug' => 'frozen-embryo-transfer',
            'description' => 'Safe and effective transfer of previously frozen embryos with high success rates.',
            'full_content' => '<h2>Frozen Embryo Transfer (FET)</h2><p>Transfer of previously frozen embryos using optimized protocols for maximum implantation success.</p>',
            'is_featured' => 1,
            'sort_order' => 5
        ],
        [
            'name' => 'LGBTQ+ Family Building',
            'slug' => 'lgbtq-family-building',
            'description' => 'Inclusive fertility care and family building options for LGBTQ+ individuals and couples.',
            'full_content' => '<h2>LGBTQ+ Family Building</h2><p>Inclusive fertility care for LGBTQ+ individuals and couples with comprehensive family building options.</p>',
            'is_featured' => 1,
            'sort_order' => 6
        ]
    ];
    
    foreach ($sampleServices as $service) {
        $db->insert('services', $service);
    }
    
    // Insert team members
    $teamMembers = [
        [
            'name' => 'Dr. James Lin',
            'title' => 'Medical Director, Reproductive Endocrinologist',
            'specialization' => 'IVF, ICSI, Genetic Testing, Male Factor Infertility',
            'bio' => 'Dr. Lin is a board-certified reproductive endocrinologist with over 15 years of experience in fertility medicine. He completed his fellowship in Reproductive Endocrinology and Infertility at UCLA and has been instrumental in developing innovative IVF protocols.',
            'education' => 'MD - UCLA School of Medicine, Residency - Cedars-Sinai Medical Center, Fellowship - UCLA',
            'sort_order' => 1
        ],
        [
            'name' => 'Dr. Daniel Williams',
            'title' => 'Medical Director, Reproductive Endocrinologist',
            'specialization' => 'Reproductive Surgery, Endometriosis, Recurrent Pregnancy Loss',
            'bio' => 'Dr. Williams brings exceptional expertise in reproductive surgery and advanced fertility treatments. With a focus on minimally invasive techniques, he has helped patients overcome complex fertility challenges.',
            'education' => 'MD - Stanford University School of Medicine, Residency - USC, Fellowship - UCSF',
            'sort_order' => 2
        ],
        [
            'name' => 'Dr. Susan Nasab',
            'title' => 'Fertility Preservation Specialist',
            'specialization' => 'Egg Preservation, Oncofertility, LGBTQ+ Family Building',
            'bio' => 'Dr. Nasab is a leading expert in fertility preservation, helping women and men preserve their fertility for future family building. She has pioneered techniques in egg and embryo freezing.',
            'education' => 'MD - Harvard Medical School, Residency - Massachusetts General Hospital, Fellowship - Johns Hopkins',
            'sort_order' => 3
        ],
        [
            'name' => 'Yufen Xie',
            'title' => 'IVF Laboratory Director',
            'specialization' => 'Embryology, Genetic Testing, Laboratory Quality Control',
            'bio' => 'Yufen Xie oversees our state-of-the-art IVF laboratory with over 12 years of experience in embryology. She ensures the highest standards of care for embryo culture and cryopreservation.',
            'education' => 'PhD in Reproductive Biology - UC Davis, MS in Molecular Biology - Beijing University',
            'sort_order' => 4
        ]
    ];
    
    foreach ($teamMembers as $member) {
        $db->insert('team_members', $member);
    }
    
    // Insert locations
    $locations = [
        [
            'name' => 'Torrance - Main Location',
            'address' => '3440 Lomita Blvd, Suite 800, Torrance, CA 90505',
            'phone' => '+1 (424) 212-4087',
            'email' => 'torrance@incintafertility.com',
            'hours' => 'Mon-Fri: 7:00 AM - 5:00 PM, Sat: 7:00 AM - 12:00 PM',
            'sort_order' => 1
        ],
        [
            'name' => 'Alhambra',
            'address' => '100 W Main St, Suite 200, Alhambra, CA 91801',
            'phone' => '+1 (424) 212-4087',
            'email' => 'alhambra@incintafertility.com',
            'hours' => 'Mon-Fri: 8:00 AM - 5:00 PM',
            'sort_order' => 2
        ],
        [
            'name' => 'Beverly Hills',
            'address' => '9201 Sunset Blvd, Suite 300, West Hollywood, CA 90069',
            'phone' => '+1 (424) 212-4087',
            'email' => 'beverlyhills@incintafertility.com',
            'hours' => 'Mon-Fri: 8:00 AM - 5:00 PM',
            'sort_order' => 3
        ],
        [
            'name' => 'Corona',
            'address' => '1400 E Sixth St, Suite 400, Corona, CA 92879',
            'phone' => '+1 (424) 212-4087',
            'email' => 'corona@incintafertility.com',
            'hours' => 'Tue, Thu: 8:00 AM - 2:00 PM',
            'sort_order' => 4
        ],
        [
            'name' => 'Irvine',
            'address' => '16300 Sand Canyon Ave, Suite 500, Irvine, CA 92618',
            'phone' => '+1 (424) 212-4087',
            'email' => 'irvine@incintafertility.com',
            'hours' => 'Mon-Fri: 8:00 AM - 5:00 PM',
            'sort_order' => 5
        ]
    ];
    
    foreach ($locations as $location) {
        $db->insert('locations', $location);
    }
    
    // Insert sample FAQs
    $faqs = [
        [
            'question' => 'What is the success rate for IVF at Incinta Fertility Center?',
            'answer' => 'Our success rates vary based on age and specific circumstances, but we consistently achieve above-national-average success rates. During your consultation, we will discuss success rates specific to your situation.',
            'category' => 'IVF',
            'sort_order' => 1
        ],
        [
            'question' => 'Does insurance cover fertility treatments?',
            'answer' => 'Many insurance plans now cover fertility treatments. Our financial counselors will help you understand your specific coverage and work with your insurance provider to maximize benefits.',
            'category' => 'Insurance',
            'sort_order' => 2
        ],
        [
            'question' => 'How long does an IVF cycle take?',
            'answer' => 'A typical IVF cycle takes about 4-6 weeks from the start of medications to pregnancy test. This includes ovarian stimulation (10-14 days), egg retrieval, embryo culture (3-6 days), and embryo transfer.',
            'category' => 'IVF',
            'sort_order' => 3
        ],
        [
            'question' => 'What should I expect during my first consultation?',
            'answer' => 'During your first visit, we will review your medical history, discuss your fertility goals, perform necessary examinations, and create a personalized treatment plan. Please bring any previous fertility records.',
            'category' => 'General',
            'sort_order' => 4
        ]
    ];
    
    foreach ($faqs as $faq) {
        $db->insert('faqs', $faq);
    }
    
    echo "Sample data inserted successfully!\n";
    echo "Database setup complete.\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}