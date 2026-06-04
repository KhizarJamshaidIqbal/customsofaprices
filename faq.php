<?php
require __DIR__ . '/embed/lib.php';
$cd = embed_load();
$H = embed_sanitize($cd['header_html'], (bool)$cd['allow_scripts']);
$F = embed_sanitize($cd['footer_html'], (bool)$cd['allow_scripts']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary SEO Meta Tags -->
    <title>FAQ - Sofa Set Questions | Custom Sofa Prices Pakistan</title>
    <meta name="description" content="Find answers to frequently asked questions about sofa set prices in Pakistan, delivery, warranty, customization, payment methods, and more. Get expert guidance on 7 seater sofas, L shape sofas, Chinyoti designs & velvet sofa sets.">
    <meta name="keywords" content="sofa set FAQ, sofa price Pakistan FAQ, sofa delivery Pakistan, sofa warranty, custom sofa questions, 7 seater sofa set price, L shape sofa price, Chinyoti sofa set, velvet sofa set, sofa poshish design">
    <meta name="author" content="Custom Sofa Prices Pakistan">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://cutomsofaprices.com/faq">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="alternate" type="application/ld+json" href="knowledge-graph.jsonld">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.webp">
    <link rel="apple-touch-icon" href="images/favicon.webp">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cutomsofaprices.com/faq">
    <meta property="og:title" content="FAQ - Sofa Set Questions | Custom Sofa Prices Pakistan">
    <meta property="og:description" content="Find answers to frequently asked questions about sofa set prices, delivery, warranty, customization, and payment methods in Pakistan.">
    <meta property="og:image" content="https://cutomsofaprices.com/images/hero-banner.webp">
    <meta property="og:locale" content="en_PK">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FAQ - Sofa Set Questions | Custom Sofa Prices Pakistan">
    <meta name="twitter:description" content="Get answers about sofa prices, delivery, warranty & customization in Pakistan.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'display': ['"Playfair Display"', 'Georgia', 'serif'],
                        'body': ['"Inter"', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#fdf8f0',
                            100: '#f9eed9',
                            200: '#f2dbb2',
                            300: '#e8c17f',
                            400: '#dea54e',
                            500: '#d4902e',
                            600: '#c07623',
                            700: '#9f5b1f',
                            800: '#814a20',
                            900: '#6a3e1e',
                        },
                        gold: {
                            DEFAULT: '#C9A96E',
                            light: '#DFC9A0',
                            dark: '#A68942',
                        },
                        charcoal: {
                            DEFAULT: '#2D2D2D',
                            light: '#4A4A4A',
                            dark: '#1A1A1A',
                        },
                        cream: {
                            DEFAULT: '#FAFAF6',
                            dark: '#F0EDE5',
                        }
                    },
                }
            }
        }
    </script>

    <!-- Progressive Enhancement for Animations -->
    <script>
        if (typeof IntersectionObserver !== 'undefined') {
            document.documentElement.classList.add('js-reveal');
        }
    </script>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Styles -->
    <style>
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: #FAFAF6;
            color: #2D2D2D;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .font-display { font-family: 'Playfair Display', Georgia, serif; }

        /* Hero Overlay Gradient */
        .hero-overlay {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.82) 0%, rgba(45, 45, 45, 0.65) 50%, rgba(201, 169, 110, 0.22) 100%);
        }

        /* Gold Underline Animation */
        .gold-line {
            position: relative;
            display: inline-block;
        }
        .gold-line::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #C9A96E, #DFC9A0);
            border-radius: 2px;
        }

        /* FAQ Accordion */
        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), padding 0.3s ease;
        }
        .faq-content.open {
            max-height: 600px;
        }
        .faq-icon {
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }
        .faq-item.active {
            border-color: #C9A96E;
            box-shadow: 0 4px 24px -4px rgba(201, 169, 110, 0.18);
        }

        /* Category Tab Active */
        .tab-btn {
            position: relative;
            transition: all 0.3s ease;
        }
        .tab-btn::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #C9A96E, #A68942);
            border-radius: 2px;
            transition: width 0.3s ease;
        }
        .tab-btn.active::after {
            width: 60%;
        }
        .tab-btn.active {
            color: #A68942;
            background-color: rgba(201, 169, 110, 0.08);
        }

        /* Search Input Focus */
        .search-input:focus {
            border-color: #C9A96E;
            box-shadow: 0 0 0 4px rgba(201, 169, 110, 0.15);
        }

        /* CTA Shine Effect */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        .btn-shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        .btn-shine:hover::before {
            left: 100%;
        }

        /* Scroll Reveal Animations — Progressively Enhanced */
        .js-reveal .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .js-reveal .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* FAQ item hidden by search */
        .faq-item.hidden-by-search {
            display: none;
        }

        /* Category section hidden by tab */
        .faq-category.hidden-by-tab {
            display: none;
        }

        /* Pulse animation for WhatsApp */
        @keyframes gentle-pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .pulse-gentle { animation: gentle-pulse 3s ease-in-out infinite; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F0EDE5; }
        ::-webkit-scrollbar-thumb { background: #C9A96E; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #A68942; }

        /* No results message */
        .no-results {
            display: none;
        }
        .no-results.visible {
            display: block;
        }

        /* Breadcrumb separator */
        .breadcrumb-sep {
            color: rgba(255, 255, 255, 0.4);
        }
    </style>

    <!-- JSON-LD: LocalBusiness Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FurnitureStore",
        "name": "Custom Sofa Prices Pakistan",
        "description": "Pakistan's premier destination for luxury and affordable custom sofa sets. Find detailed pricing, customization guides, and expert answers about our handcrafted sofas.",
        "url": "https://cutomsofaprices.com",
        "telephone": "+923007131249",
        "email": "info@cutomsofaprices.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "GT Road",
            "addressLocality": "Gujrat",
            "addressRegion": "Punjab",
            "postalCode": "50700",
            "addressCountry": "PK"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 32.5048799,
            "longitude": 74.5254195
        },
        "image": "https://cutomsofaprices.com/images/hero-banner.webp",
        "priceRange": "PKR 17,000 - 415,000",
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
                "opens": "10:00",
                "closes": "20:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Sunday",
                "opens": "12:00",
                "closes": "18:00"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/share/18cs6gZryW/",
            "https://www.instagram.com/customsofamaker",
            "https://pin.it/2FKxBiazu",
            "https://youtube.com/@customsofamaker",
            "https://www.facebook.com/profile.php?id=61590109367846",
            "https://www.tiktok.com/@custom.sofa"
        ]
    }
    </script>

    <!-- JSON-LD: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the 7 seater sofa set price in Pakistan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The 7 seater sofa set price in Pakistan typically ranges from PKR 45,000 to PKR 2,50,000 depending on the material, design, and craftsmanship. At Custom Sofa Prices, our factory-direct pricing ensures you get premium 7 seater sofa sets starting from just PKR 55,000 with free delivery across major cities."
                }
            },
            {
                "@type": "Question",
                "name": "What is the L shape sofa price in Pakistan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "L shape sofa prices in Pakistan range from PKR 60,000 to PKR 3,50,000. Our L-shape and corner sofa designs are available in fabric, velvet, and leather options. We offer custom sizing to perfectly fit your drawing room or living room space."
                }
            },
            {
                "@type": "Question",
                "name": "Which is the best sofa cum bed design for small spaces?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For small spaces, a modern sofa cum bed design with storage compartments is ideal. Our convertible sofa beds start from PKR 35,000 and are available in multiple sizes. They feature easy-pull mechanisms and high-density foam for comfortable sleeping. Perfect for apartments and guest rooms."
                }
            },
            {
                "@type": "Question",
                "name": "Where can I find the best furniture showrooms near me in Pakistan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our central direct-factory showroom is located at GT Road, Gujrat, Punjab, Pakistan. We invite all customers to visit our workshop and showroom to see our premium craftsmanship firsthand. For nationwide customers, we offer online consultations, free fabric samples, and secure direct home delivery across Lahore, Karachi, Islamabad, and all other cities in Pakistan."
                }
            },
            {
                "@type": "Question",
                "name": "What Chinyoti sofa set designs do you offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer a wide range of Chinyoti sofa set designs featuring hand-carved Sheesham and Rosewood frames. Our Chinyoti collection includes traditional jali work, floral carving, and modern fusion designs. Chinyoti sofa set prices start from PKR 80,000 for a 5-seater set with premium poshish (upholstery)."
                }
            },
            {
                "@type": "Question",
                "name": "Sofa poshish ke design kaunse available hain?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Humare paas sofa poshish ke design mein velvet, leatherette, suede, linen, aur premium jacquard fabric available hain. Aap apni pasand ka colour aur design choose kar sakte hain. Poshish ki warranty 2 saal tak di jati hai."
                }
            },
            {
                "@type": "Question",
                "name": "What velvet sofa set designs do you offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our velvet sofa set design collection includes over 50 premium designs. We offer Italian velvet, Turkish velvet, and imported crush velvet in more than 40 color options. From classic tufted designs to sleek modern silhouettes, our velvet sofas add a touch of luxury to any living room. Prices start from PKR 70,000 for a 5-seater set."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer free delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer free delivery across Pakistan for orders above PKR 50,000. Our delivery team ensures safe and careful transportation of your furniture with full packaging protection."
                }
            },
            {
                "@type": "Question",
                "name": "What payment methods do you accept?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We accept Cash on Delivery (COD), bank transfer, JazzCash, EasyPaisa, and installment plans through selected banks. We offer flexible payment options to make your purchase convenient."
                }
            },
            {
                "@type": "Question",
                "name": "How long does delivery take?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard delivery takes 7-15 business days across Pakistan. For Lahore and Gujrat, we offer express delivery in 3-5 business days. Custom orders may take 15-25 business days depending on the design complexity."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer warranty?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide a 2-year warranty on the sofa frame and structure, and a 1-year warranty on upholstery and cushioning. Our warranty covers manufacturing defects and structural issues."
                }
            },
            {
                "@type": "Question",
                "name": "Can I customize the sofa color and fabric?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer 100+ fabric options including velvet, leather, linen, suede, and jacquard in a wide range of colors. We provide free fabric samples so you can see and feel the material before placing your order."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer installment plans?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer 0% markup installment plans for up to 6 months through selected partner banks and payment services. This makes it easy to furnish your home without financial burden."
                }
            },
            {
                "@type": "Question",
                "name": "What is your return/exchange policy?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer a 7-day return policy if there is any manufacturing defect. If you receive a damaged or defective product, we will replace or repair it at no additional cost. Customer satisfaction is our top priority."
                }
            },
            {
                "@type": "Question",
                "name": "Can I visit your workshop?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, factory visits are welcome at our workshop in Gujrat, Punjab. You can see the craftsmanship firsthand, choose materials, and discuss custom designs directly with our master craftsmen. Please call ahead to schedule a visit."
                }
            }
        ]
    }
    </script>
</head>
<body class="bg-cream font-body antialiased">

    <!-- ============================================ -->
    <!-- TOP BAR -->
    <!-- ============================================ -->
    <?= $H ?>

    <main id="main-content">

        <!-- ============================================ -->
        <!-- HERO SECTION -->
        <!-- ============================================ -->
        <section id="faq-hero" class="relative py-24 lg:py-32 overflow-hidden">
            <!-- Background -->
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-charcoal-dark"></div>
                <div class="hero-overlay absolute inset-0"></div>
                <!-- Decorative gold accents -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 bg-gold/8 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
                <!-- Subtle pattern overlay -->
                <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23C9A96E&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <!-- Breadcrumb -->
                <nav class="flex justify-center items-center gap-2 text-sm text-white/60 mb-8" aria-label="Breadcrumb">
                    <a href="/" class="hover:text-gold transition-colors duration-200">
                        <i class="fas fa-home text-xs mr-1"></i> Home
                    </a>
                    <span class="breadcrumb-sep"><i class="fas fa-chevron-right text-[10px]"></i></span>
                    <span class="text-gold font-medium">FAQ</span>
                </nav>

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white/90 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/15">
                    <i class="fas fa-question-circle text-gold text-xs"></i>
                    Got Questions? We Have Answers
                </div>

                <!-- H1 -->
                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-[1.1] mb-6">
                    Frequently Asked<br>
                    <span class="text-gold-light">Questions</span>
                </h1>

                <p class="text-lg sm:text-xl text-white/75 leading-relaxed max-w-2xl mx-auto">
                    Everything you need to know about our sofa sets, pricing, delivery, customization, and warranty — all in one place.
                </p>

                <!-- Decorative gold line -->
                <div class="flex justify-center mt-8">
                    <div class="w-24 h-1 bg-gradient-to-r from-transparent via-gold to-transparent rounded-full"></div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- SEARCH & FILTER BAR -->
        <!-- ============================================ -->
        <section class="relative -mt-8 z-20 mb-4">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 reveal">
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gold/60 text-lg"></i>
                        <input
                            type="text"
                            id="faq-search"
                            class="search-input w-full pl-12 pr-12 py-4 bg-cream rounded-xl border-2 border-gray-200 text-charcoal placeholder-gray-400 text-base font-medium outline-none transition-all duration-300"
                            placeholder="Search for a question... e.g. delivery, price, warranty"
                            aria-label="Search frequently asked questions"
                        >
                        <button id="faq-search-clear" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-charcoal transition-colors duration-200 hidden" aria-label="Clear search">
                            <i class="fas fa-times-circle text-lg"></i>
                        </button>
                    </div>
                    <!-- Search result count -->
                    <div id="faq-search-info" class="mt-3 text-sm text-gray-400 text-center hidden">
                        <span id="faq-search-count"></span> results found
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- CATEGORY TABS -->
        <!-- ============================================ -->
        <section class="py-6">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center gap-2 sm:gap-3 reveal" id="faq-tabs">
                    <button class="tab-btn active px-5 py-3 rounded-xl text-sm font-semibold text-charcoal-light bg-white border border-gray-200 hover:border-gold/40 transition-all duration-300" data-tab="all">
                        <i class="fas fa-th-large mr-1.5 text-xs"></i> All Questions
                    </button>
                    <button class="tab-btn px-5 py-3 rounded-xl text-sm font-semibold text-charcoal-light bg-white border border-gray-200 hover:border-gold/40 transition-all duration-300" data-tab="pricing">
                        <i class="fas fa-tags mr-1.5 text-xs"></i> Pricing & Products
                    </button>
                    <button class="tab-btn px-5 py-3 rounded-xl text-sm font-semibold text-charcoal-light bg-white border border-gray-200 hover:border-gold/40 transition-all duration-300" data-tab="ordering">
                        <i class="fas fa-palette mr-1.5 text-xs"></i> Ordering & Customization
                    </button>
                    <button class="tab-btn px-5 py-3 rounded-xl text-sm font-semibold text-charcoal-light bg-white border border-gray-200 hover:border-gold/40 transition-all duration-300" data-tab="delivery">
                        <i class="fas fa-truck mr-1.5 text-xs"></i> Delivery & Warranty
                    </button>
                    <button class="tab-btn px-5 py-3 rounded-xl text-sm font-semibold text-charcoal-light bg-white border border-gray-200 hover:border-gold/40 transition-all duration-300" data-tab="general">
                        <i class="fas fa-info-circle mr-1.5 text-xs"></i> General
                    </button>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- FAQ ACCORDION SECTIONS -->
        <!-- ============================================ -->
        <section id="faq-main" class="py-8 lg:py-12" aria-labelledby="faq-heading">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- ===== PRICING & PRODUCTS ===== -->
                <div class="faq-category mb-12 reveal" data-category="pricing">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold/20 to-gold/5 flex items-center justify-center">
                            <i class="fas fa-tags text-gold-dark text-sm"></i>
                        </div>
                        <h2 class="font-display text-2xl font-bold text-charcoal">Pricing <span class="text-gold-dark">&</span> Products</h2>
                    </div>
                    <div class="space-y-4" id="faq-accordion-pricing">

                        <!-- FAQ 1: 7 seater sofa set price (existing) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-1">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-1">
                                <span class="font-semibold text-charcoal text-base pr-4">What is the 7 seater sofa set price in Pakistan?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-1" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>The <strong class="text-charcoal">7 seater sofa set price</strong> in Pakistan typically ranges from <strong>PKR 45,000 to PKR 2,50,000</strong> depending on the material, design, and level of craftsmanship. At Custom Sofa Prices, our factory-direct pricing ensures you get premium 7 seater sofa sets starting from just <strong>PKR 55,000</strong> with free delivery across Lahore, Karachi, Islamabad, and other major cities. Yeh sofa sets drawing room ke liye perfect hain.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2: L shape sofa price (existing) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-2">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-2">
                                <span class="font-semibold text-charcoal text-base pr-4">What is the L shape sofa price in Pakistan?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-2" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p><strong class="text-charcoal">L shape sofa price</strong> in Pakistan ranges from <strong>PKR 60,000 to PKR 3,50,000</strong>. Our L-shape and <strong>corner sofa designs</strong> are available in fabric, velvet, and leather options. We offer custom sizing to perfectly fit your drawing room or living room space. L-shape sofas are ideal for maximizing seating without taking up too much floor space.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3: Sofa cum bed (existing) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-3">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-3">
                                <span class="font-semibold text-charcoal text-base pr-4">Which is the best sofa cum bed design for small spaces?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-3" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>For small spaces, a <strong class="text-charcoal">modern sofa cum bed design</strong> with built-in storage compartments is ideal. Our convertible sofa beds start from <strong>PKR 35,000</strong> and are available in multiple sizes. They feature easy-pull mechanisms and high-density foam for comfortable sleeping — perfect for apartments and guest rooms. Chotay kamron ke liye yeh best option hai.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Chinyoti sofa set price (existing FAQ 5, fits pricing) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-5">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-5">
                                <span class="font-semibold text-charcoal text-base pr-4">Chinyoti sofa set price aur designs kaunse available hain?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-5" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Humare paas <strong class="text-charcoal">Chinyoti sofa set designs</strong> ki bohat bari range maujood hai — jis mein hand-carved Sheesham aur Rosewood frames shamil hain. <strong>Chinyoti sofa set price</strong> 5-seater set ke liye <strong>PKR 80,000</strong> se shuru hoti hai premium poshish ke saath. Traditional jali work, floral carving, aur modern fusion designs available hain.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Velvet sofa set (existing FAQ 7, fits pricing) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-7">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-7">
                                <span class="font-semibold text-charcoal text-base pr-4">What velvet sofa set designs do you offer?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-7" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Our <strong class="text-charcoal">velvet sofa set design</strong> collection includes over 50 premium designs. We offer Italian velvet, Turkish velvet, and imported crush velvet in more than 40 color options. From classic tufted designs to sleek modern silhouettes, our velvet sofas add a touch of luxury to any living room. Prices start from <strong>PKR 70,000</strong> for a 5-seater set.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ===== ORDERING & CUSTOMIZATION ===== -->
                <div class="faq-category mb-12 reveal" data-category="ordering" style="transition-delay: 0.1s;">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold/20 to-gold/5 flex items-center justify-center">
                            <i class="fas fa-palette text-gold-dark text-sm"></i>
                        </div>
                        <h2 class="font-display text-2xl font-bold text-charcoal">Ordering <span class="text-gold-dark">&</span> Customization</h2>
                    </div>
                    <div class="space-y-4" id="faq-accordion-ordering">

                        <!-- FAQ (new): Can I customize color and fabric? -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-8">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-8">
                                <span class="font-semibold text-charcoal text-base pr-4">Can I customize the sofa color and fabric?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-8" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Yes, absolutely! We offer <strong class="text-charcoal">100+ fabric options</strong> including velvet, leather, linen, suede, and premium jacquard in a wide range of colors and patterns. You can choose your preferred material, color, and design to create a truly personalized sofa. We also provide <strong>free fabric samples</strong> delivered to your doorstep so you can see and feel the material before placing your order. Our design consultants can help you select the perfect combination for your space.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Sofa poshish ke design (existing FAQ 6, fits ordering/customization) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-6">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-6">
                                <span class="font-semibold text-charcoal text-base pr-4">Sofa poshish ke design kaunse available hain?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-6" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Humare paas <strong class="text-charcoal">sofa poshish ke design</strong> mein velvet, leatherette, suede, linen, aur premium jacquard fabric available hain. Aap apni pasand ka colour aur design choose kar sakte hain. Poshish ki warranty 2 saal tak di jati hai. <strong>Drawing room ke liye sofa</strong> poshish mein se aap koi bhi design select kar sakte hain — hum free fabric samples bhi bhejte hain.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Payment methods -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-9">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-9">
                                <span class="font-semibold text-charcoal text-base pr-4">What payment methods do you accept?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-9" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>We offer multiple convenient payment options to suit your needs. You can pay via <strong class="text-charcoal">Cash on Delivery (COD)</strong>, <strong>bank transfer</strong>, <strong>JazzCash</strong>, <strong>EasyPaisa</strong>, or take advantage of our <strong>installment plans</strong> through selected partner banks. For large orders, we also accept partial advance payments with the remaining balance on delivery. Our goal is to make your purchase as convenient as possible.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Installment plans -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-10">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-10">
                                <span class="font-semibold text-charcoal text-base pr-4">Do you offer installment plans?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-10" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Yes! We offer <strong class="text-charcoal">0% markup installment plans for up to 6 months</strong> through selected partner banks and payment services. This makes it easy to furnish your home with premium quality furniture without any financial burden. Simply choose your sofa, select the installment option at checkout, and enjoy easy monthly payments. Contact our sales team via WhatsApp for installment details specific to your order.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ===== DELIVERY & WARRANTY ===== -->
                <div class="faq-category mb-12 reveal" data-category="delivery" style="transition-delay: 0.15s;">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold/20 to-gold/5 flex items-center justify-center">
                            <i class="fas fa-truck text-gold-dark text-sm"></i>
                        </div>
                        <h2 class="font-display text-2xl font-bold text-charcoal">Delivery <span class="text-gold-dark">&</span> Warranty</h2>
                    </div>
                    <div class="space-y-4" id="faq-accordion-delivery">

                        <!-- FAQ (new): Free delivery -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-11">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-11">
                                <span class="font-semibold text-charcoal text-base pr-4">Do you offer free delivery?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-11" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Yes, we offer <strong class="text-charcoal">free delivery across Pakistan</strong> for all orders above <strong>PKR 50,000</strong>. Our dedicated delivery team ensures safe and careful transportation of your furniture with full protective packaging. For orders below PKR 50,000, a nominal delivery fee applies based on your location. We deliver to all major cities including Lahore, Karachi, Islamabad, Rawalpindi, Faisalabad, Multan, Peshawar, and Gujrat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): How long does delivery take? -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-12">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-12">
                                <span class="font-semibold text-charcoal text-base pr-4">How long does delivery take?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-12" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Standard delivery across Pakistan takes <strong class="text-charcoal">7-15 business days</strong>. For customers in <strong>Lahore and Gujrat</strong>, we offer express delivery in just <strong>3-5 business days</strong>. Custom-made orders may take 15-25 business days depending on the complexity of the design and materials chosen. You will receive tracking updates via WhatsApp throughout the delivery process so you always know the status of your order.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Warranty -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-13">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-13">
                                <span class="font-semibold text-charcoal text-base pr-4">Do you offer warranty on your sofas?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-13" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Yes, we stand behind the quality of our furniture. We provide a <strong class="text-charcoal">2-year warranty on the sofa frame and structure</strong>, and a <strong>1-year warranty on upholstery and cushioning</strong>. Our warranty covers all manufacturing defects and structural issues. If you encounter any problem, our service team will repair or replace the affected parts at no additional cost. We also offer extended warranty packages for an additional fee.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Return/exchange policy -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-14">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-14">
                                <span class="font-semibold text-charcoal text-base pr-4">What is your return/exchange policy?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-14" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>We offer a <strong class="text-charcoal">7-day return policy</strong> if there is any manufacturing defect found upon delivery. If you receive a damaged or defective product, we will replace or repair it at absolutely no additional cost. Please inspect your furniture upon delivery and report any issues within 7 days. For custom-made orders, exchanges are available for manufacturing defects only. Customer satisfaction is our top priority, and we work hard to resolve any concerns promptly.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ===== GENERAL ===== -->
                <div class="faq-category mb-12 reveal" data-category="general" style="transition-delay: 0.2s;">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold/20 to-gold/5 flex items-center justify-center">
                            <i class="fas fa-info-circle text-gold-dark text-sm"></i>
                        </div>
                        <h2 class="font-display text-2xl font-bold text-charcoal">General <span class="text-gold-dark">Questions</span></h2>
                    </div>
                    <div class="space-y-4" id="faq-accordion-general">

                        <!-- FAQ 4: Furniture showrooms (existing) -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-4">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-4">
                                <span class="font-semibold text-charcoal text-base pr-4">Where can I find the best furniture showrooms near me?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-4" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Our central direct-factory showroom is located at <strong class="text-charcoal">GT Road, Gujrat, Punjab, Pakistan</strong>. We invite all customers to visit our factory workshop to see our premium craftsmanship firsthand. For nationwide customers, we offer online design consultations, free fabric sample delivery, and highly secure direct-to-home delivery across <strong class="text-charcoal">Lahore</strong>, <strong class="text-charcoal">Karachi</strong>, <strong class="text-charcoal">Islamabad</strong>, and all other cities in Pakistan. Humare paas <strong>sofa ke naye design</strong> aur <strong>lakri ka sofa design</strong> direct factory price par available hain.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ (new): Can I visit your workshop? -->
                        <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300" id="faq-15">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-cream/50 transition-colors duration-200" aria-expanded="false" aria-controls="faq-answer-15">
                                <span class="font-semibold text-charcoal text-base pr-4">Can I visit your workshop?</span>
                                <i class="fas fa-chevron-down faq-icon text-gold text-sm flex-shrink-0"></i>
                            </button>
                            <div class="faq-content px-6" id="faq-answer-15" role="region">
                                <div class="pb-6 text-gray-500 leading-relaxed">
                                    <p>Yes, <strong class="text-charcoal">factory visits are welcome</strong> at our workshop in <strong>Gujrat, Punjab</strong>. You can see the craftsmanship firsthand, choose materials in person, and discuss custom designs directly with our master craftsmen. Many of our satisfied customers have visited us to personally oversee the creation of their dream furniture. Please call ahead at <strong>0300-7131249</strong> to schedule a visit so we can ensure our team is ready to assist you.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- No Results Message -->
                <div id="faq-no-results" class="no-results text-center py-16">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-cream-dark flex items-center justify-center">
                        <i class="fas fa-search text-gold text-2xl"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold text-charcoal mb-2">No results found</h3>
                    <p class="text-gray-500 max-w-md mx-auto">We couldn't find any questions matching your search. Try a different keyword or <a href="https://wa.me/923007131249?text=Hi!%20I%20have%20a%20question%20about%20sofas." class="text-gold-dark font-semibold hover:underline" target="_blank" rel="noopener noreferrer">ask us directly on WhatsApp</a>.</p>
                </div>

            </div>
        </section>

        <!-- ============================================ -->
        <!-- CTA SECTION -->
        <!-- ============================================ -->
        <section id="faq-cta" class="py-20 lg:py-28 bg-charcoal-dark relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-72 h-72 bg-gold/5 rounded-full blur-3xl -translate-x-1/3 -translate-y-1/3"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-gold/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23C9A96E&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

            <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
                <!-- Icon -->
                <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-gold/20 to-gold/5 border border-gold/20 flex items-center justify-center">
                    <i class="fas fa-comments text-gold text-2xl"></i>
                </div>

                <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-5">
                    Still Have <span class="text-gold-light">Questions?</span>
                </h2>
                <p class="text-lg text-white/70 max-w-2xl mx-auto mb-10 leading-relaxed">
                    Can't find the answer you're looking for? Our friendly team is here to help. Reach out to us and we'll get back to you as soon as possible.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact.php" id="cta-contact" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-semibold text-base px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all duration-300 btn-shine">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                    <a href="https://wa.me/923007131249?text=Hi!%20I%20have%20a%20question%20about%20sofa%20prices." id="cta-whatsapp" class="inline-flex items-center justify-center gap-2 bg-green-500 text-white font-semibold text-base px-8 py-4 rounded-xl shadow-lg hover:bg-green-600 hover:shadow-xl hover:scale-[1.03] transition-all duration-300" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp text-xl"></i>
                        Chat on WhatsApp
                    </a>
                    <a href="tel:+923007131249" id="cta-call" class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-sm border-2 border-white/20 text-white font-semibold text-base px-8 py-4 rounded-xl hover:bg-white/20 hover:border-white/40 transition-all duration-300">
                        <i class="fas fa-phone"></i>
                        Call: 0300-7131249
                    </a>
                </div>

                <!-- Trust Signals -->
                <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-white/50 text-sm">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-gold"></i>
                        <span>Response within 1 hour</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-headset text-gold"></i>
                        <span>Available 7 days a week</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-star text-gold"></i>
                        <span>4.9/5 Customer Rating</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ============================================ -->
    <!-- FOOTER -->
    <!-- ============================================ -->
    <?= $F ?>

    <!-- ============================================ -->
    <!-- FLOATING WHATSAPP BUTTON -->
    <!-- ============================================ -->
    <a href="https://wa.me/923007131249?text=Hi!%20I%20want%20to%20know%20about%20sofa%20prices." id="whatsapp-float" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 hover:scale-110 hover:shadow-xl transition-all duration-300" aria-label="Chat with us on WhatsApp" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
        <!-- Pulse Ring -->
        <span class="absolute w-full h-full rounded-full bg-green-500/40 animate-ping"></span>
    </a>

    <!-- ============================================ -->
    <!-- JAVASCRIPT -->
    <!-- ============================================ -->
    <script>
        // ===== FAQ Accordion =====
        const faqToggles = document.querySelectorAll('.faq-toggle');

        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const item = toggle.parentElement;
                const content = toggle.nextElementSibling;
                const isOpen = item.classList.contains('active');

                // Close all other items
                document.querySelectorAll('.faq-item').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.faq-content').classList.remove('open');
                        otherItem.querySelector('.faq-toggle').setAttribute('aria-expanded', 'false');
                    }
                });

                // Toggle current item
                if (isOpen) {
                    item.classList.remove('active');
                    content.classList.remove('open');
                    toggle.setAttribute('aria-expanded', 'false');
                } else {
                    item.classList.add('active');
                    content.classList.add('open');
                    toggle.setAttribute('aria-expanded', 'true');
                }
            });
        });

        // ===== Search / Filter =====
        const searchInput = document.getElementById('faq-search');
        const searchClear = document.getElementById('faq-search-clear');
        const searchInfo = document.getElementById('faq-search-info');
        const searchCount = document.getElementById('faq-search-count');
        const noResults = document.getElementById('faq-no-results');
        const allFaqItems = document.querySelectorAll('.faq-item');
        const allCategories = document.querySelectorAll('.faq-category');

        searchInput.addEventListener('input', () => {
            const query = searchInput.value.trim().toLowerCase();

            if (query.length === 0) {
                // Reset everything
                searchClear.classList.add('hidden');
                searchInfo.classList.add('hidden');
                noResults.classList.remove('visible');
                allFaqItems.forEach(item => item.classList.remove('hidden-by-search'));
                allCategories.forEach(cat => cat.style.display = '');
                updateCategoryVisibility();
                return;
            }

            searchClear.classList.remove('hidden');

            let matchCount = 0;

            allFaqItems.forEach(item => {
                const question = item.querySelector('.faq-toggle span').textContent.toLowerCase();
                const answer = item.querySelector('.faq-content').textContent.toLowerCase();

                if (question.includes(query) || answer.includes(query)) {
                    item.classList.remove('hidden-by-search');
                    matchCount++;
                } else {
                    item.classList.add('hidden-by-search');
                    // Close if hidden
                    item.classList.remove('active');
                    item.querySelector('.faq-content').classList.remove('open');
                    item.querySelector('.faq-toggle').setAttribute('aria-expanded', 'false');
                }
            });

            // Show/hide categories that have no visible items
            allCategories.forEach(cat => {
                const visibleItems = cat.querySelectorAll('.faq-item:not(.hidden-by-search)');
                cat.style.display = visibleItems.length === 0 ? 'none' : '';
            });

            // Update count
            searchCount.textContent = matchCount;
            searchInfo.classList.remove('hidden');

            // Show no results
            if (matchCount === 0) {
                noResults.classList.add('visible');
            } else {
                noResults.classList.remove('visible');
            }
        });

        searchClear.addEventListener('click', () => {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('input'));
            searchInput.focus();
        });

        // ===== Category Tabs =====
        const tabButtons = document.querySelectorAll('.tab-btn');

        function updateCategoryVisibility() {
            const activeTab = document.querySelector('.tab-btn.active');
            if (!activeTab) return;

            const tab = activeTab.getAttribute('data-tab');

            allCategories.forEach(cat => {
                if (tab === 'all') {
                    cat.classList.remove('hidden-by-tab');
                } else {
                    if (cat.getAttribute('data-category') === tab) {
                        cat.classList.remove('hidden-by-tab');
                    } else {
                        cat.classList.add('hidden-by-tab');
                    }
                }
            });
        }

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                tabButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Clear search when switching tabs
                searchInput.value = '';
                searchClear.classList.add('hidden');
                searchInfo.classList.add('hidden');
                noResults.classList.remove('visible');
                allFaqItems.forEach(item => item.classList.remove('hidden-by-search'));

                updateCategoryVisibility();
            });
        });

        // ===== Scroll Reveal Animation =====
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));

        // ===== Smooth Scroll for Anchor Links =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    const offset = 80;
                    const targetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

</body>
</html>
