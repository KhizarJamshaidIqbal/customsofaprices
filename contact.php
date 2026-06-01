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
    <title>Contact Us – Custom Sofa Prices Pakistan | Get a Free Quote</title>
    <meta name="description" content="Contact Custom Sofa Prices in Gujrat, Punjab, Pakistan. Call 0300 7131249 or email info@cutomsofaprices.com for custom sofa orders, price quotes & inquiries. Visit our showroom Mon-Sat 10AM-8PM.">
    <meta name="keywords" content="contact custom sofa prices, sofa shop Gujrat Pakistan, custom sofa order, sofa price quote Pakistan, furniture shop Punjab">
    <meta name="author" content="Custom Sofa Prices Pakistan">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://cutomsofaprices.com/contact">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="alternate" type="application/ld+json" href="knowledge-graph.jsonld">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.webp">
    <link rel="apple-touch-icon" href="images/favicon.webp">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cutomsofaprices.com/contact">
    <meta property="og:title" content="Contact Us – Custom Sofa Prices Pakistan">
    <meta property="og:description" content="Get in touch for custom sofa orders, price quotes & inquiries. Call 0300 7131249 or visit our showroom in Gujrat, Punjab.">
    <meta property="og:image" content="https://cutomsofaprices.com/images/hero-banner.webp">
    <meta property="og:locale" content="en_PK">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Us – Custom Sofa Prices Pakistan">
    <meta name="twitter:description" content="Contact us for premium sofa sets at best prices. Call, email or visit our showroom.">

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
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.78) 0%, rgba(45, 45, 45, 0.55) 50%, rgba(201, 169, 110, 0.22) 100%);
        }

        /* Card Hover */
        .card-hover {
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px -12px rgba(0, 0, 0, 0.12);
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

        /* Scroll Reveal Animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Glassmorphism Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid rgba(201, 169, 110, 0.18);
        }

        /* Form Input Focus */
        .form-input {
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-input:focus {
            border-color: #C9A96E;
            box-shadow: 0 0 0 3px rgba(201, 169, 110, 0.15);
            outline: none;
        }

        /* Social Icon Hover */
        .social-icon {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }
        .social-icon:hover {
            transform: translateY(-4px) scale(1.08);
            box-shadow: 0 12px 30px -8px rgba(0, 0, 0, 0.18);
        }

        /* Success Alert Animation */
        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .success-alert {
            animation: slideDown 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F0EDE5; }
        ::-webkit-scrollbar-thumb { background: #C9A96E; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #A68942; }

        /* Contact Card Icon Pulse */
        @keyframes iconFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }
        .icon-float:hover .card-icon {
            animation: iconFloat 1.2s ease-in-out infinite;
        }
    </style>

    <!-- JSON-LD: LocalBusiness Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FurnitureStore",
        "name": "Custom Sofa Prices Pakistan",
        "description": "Pakistan's premier destination for luxury and affordable custom sofa sets. Contact us for price quotes, custom orders and inquiries.",
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
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+923007131249",
            "contactType": "customer service",
            "availableLanguage": ["English", "Urdu"],
            "areaServed": "PK"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1000"
        }
    }
    </script>
</head>
<body class="bg-cream font-body antialiased">

    <!-- ============================================ -->
    <!-- TOP BAR -->
    <!-- ============================================ -->
    <?= $H ?>

    <!-- ============================================ -->
    <!-- SUCCESS MESSAGE -->
    <!-- ============================================ -->
    <?php if (isset($_GET['sent']) && $_GET['sent'] == '1'): ?>
    <div id="success-alert" class="success-alert fixed top-0 left-0 right-0 z-[100] bg-gradient-to-r from-green-500 to-emerald-600 text-white py-4 px-6 shadow-2xl">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <i class="fas fa-check-circle text-xl"></i>
                </div>
                <div>
                    <p class="font-semibold text-lg">Message Sent Successfully!</p>
                    <p class="text-white/90 text-sm">Your message has been sent! We will get back to you soon.</p>
                </div>
            </div>
            <button onclick="document.getElementById('success-alert').remove()" class="text-white/80 hover:text-white transition-colors p-2" aria-label="Close alert">
                <i class="fas fa-times text-lg"></i>
            </button>
        </div>
    </div>
    <?php endif; ?>

    <main id="main-content">

        <!-- ============================================ -->
        <!-- HERO SECTION -->
        <!-- ============================================ -->
        <section id="hero-contact" class="relative min-h-[40vh] lg:min-h-[45vh] flex items-center overflow-hidden">
            <!-- Background -->
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-charcoal-dark"></div>
                <div class="absolute inset-0 opacity-30" style="background-image: url('images/hero-banner.webp'); background-size: cover; background-position: center;"></div>
                <div class="hero-overlay absolute inset-0"></div>
                <!-- Decorative Gold Elements -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold/8 rounded-full blur-3xl translate-y-1/2 -translate-x-1/4"></div>
            </div>

            <!-- Hero Content -->
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center w-full">
                <!-- Breadcrumb -->
                <nav aria-label="Breadcrumb" class="mb-8">
                    <ol class="inline-flex items-center gap-2 text-sm text-white/60">
                        <li><a href="/" class="hover:text-gold transition-colors duration-300"><i class="fas fa-home mr-1"></i>Home</a></li>
                        <li><i class="fas fa-chevron-right text-[10px] text-gold/60"></i></li>
                        <li class="text-gold font-medium">Contact Us</li>
                    </ol>
                </nav>

                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-[1.1] mb-6">
                    Contact <span class="text-gold-light">Us</span>
                </h1>
                <p class="text-lg sm:text-xl text-white/75 max-w-2xl mx-auto leading-relaxed">
                    We'd love to hear from you. Reach out for custom sofa orders, price quotes, or any inquiries.
                </p>

                <!-- Decorative Line -->
                <div class="flex justify-center mt-8">
                    <div class="w-20 h-1 bg-gradient-to-r from-transparent via-gold to-transparent rounded-full"></div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- CONTACT INFO CARDS -->
        <!-- ============================================ -->
        <section id="contact-info" class="py-16 lg:py-24 bg-cream">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-14 reveal">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-sm uppercase tracking-[0.2em] mb-4">
                        <span class="w-8 h-px bg-gold"></span>
                        Get In Touch
                        <span class="w-8 h-px bg-gold"></span>
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-charcoal mb-4">
                        How to <span class="text-gold-dark">Reach Us</span>
                    </h2>
                    <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed">
                        Whether you want a custom quote, have a question, or wish to visit our showroom — we're here to help.
                    </p>
                </div>

                <!-- Info Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                    <!-- Card: Address -->
                    <div class="glass-card card-hover icon-float rounded-2xl p-7 text-center reveal" style="transition-delay: 0s;">
                        <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-gold/20 to-gold/5 rounded-2xl flex items-center justify-center border border-gold/20">
                            <i class="fas fa-map-marker-alt text-2xl text-gold-dark card-icon"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">Our Location</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Custom Sofa Prices,<br>Gujrat, Punjab, Pakistan</p>
                    </div>

                    <!-- Card: Phone -->
                    <div class="glass-card card-hover icon-float rounded-2xl p-7 text-center reveal" style="transition-delay: 0.1s;">
                        <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-gold/20 to-gold/5 rounded-2xl flex items-center justify-center border border-gold/20">
                            <i class="fas fa-phone-alt text-2xl text-gold-dark card-icon"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">Phone / WhatsApp</h3>
                        <a href="tel:03007131249" class="block text-gray-500 text-sm hover:text-gold-dark transition-colors">0300 7131249</a>
                        <a href="tel:03117131249" class="block text-gray-500 text-sm hover:text-gold-dark transition-colors mt-1">0311 7131249</a>
                    </div>

                    <!-- Card: Email -->
                    <div class="glass-card card-hover icon-float rounded-2xl p-7 text-center reveal" style="transition-delay: 0.2s;">
                        <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-gold/20 to-gold/5 rounded-2xl flex items-center justify-center border border-gold/20">
                            <i class="fas fa-envelope text-2xl text-gold-dark card-icon"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">Email Us</h3>
                        <a href="mailto:info@cutomsofaprices.com" class="block text-gray-500 text-sm hover:text-gold-dark transition-colors">info@cutomsofaprices.com</a>
                        <a href="mailto:customsofaprice@gmail.com" class="block text-gray-500 text-sm hover:text-gold-dark transition-colors mt-1">customsofaprice@gmail.com</a>
                    </div>

                    <!-- Card: Working Hours -->
                    <div class="glass-card card-hover icon-float rounded-2xl p-7 text-center reveal" style="transition-delay: 0.1s;">
                        <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-gold/20 to-gold/5 rounded-2xl flex items-center justify-center border border-gold/20">
                            <i class="fas fa-clock text-2xl text-gold-dark card-icon"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">Working Hours</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Mon – Sat: 10:00 AM – 8:00 PM</p>
                        <p class="text-gray-500 text-sm leading-relaxed mt-1">Sunday: 12:00 PM – 6:00 PM</p>
                    </div>

                    <!-- Card: Google Business -->
                    <div class="glass-card card-hover icon-float rounded-2xl p-7 text-center reveal" style="transition-delay: 0.2s;">
                        <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-gold/20 to-gold/5 rounded-2xl flex items-center justify-center border border-gold/20">
                            <i class="fab fa-google text-2xl text-gold-dark card-icon"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">Google Business</h3>
                        <a href="https://share.google/vWTLTD6slemi5nnGT" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-gold-dark font-semibold text-sm hover:text-gold transition-colors mt-1">
                            <i class="fas fa-external-link-alt text-xs"></i>
                            View on Google
                        </a>
                    </div>

                    <!-- Card: Quick WhatsApp -->
                    <div class="glass-card card-hover icon-float rounded-2xl p-7 text-center reveal" style="transition-delay: 0.3s;">
                        <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-green-500/20 to-green-500/5 rounded-2xl flex items-center justify-center border border-green-500/20">
                            <i class="fab fa-whatsapp text-2xl text-green-600 card-icon"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">WhatsApp Chat</h3>
                        <a href="https://wa.me/923007131249?text=Hi!%20I%20want%20to%20know%20about%20sofa%20prices." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-green-600 font-semibold text-sm hover:text-green-700 transition-colors mt-1">
                            <i class="fas fa-comment-dots text-xs"></i>
                            Start Chat Now
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- CONTACT FORM + GOOGLE MAPS -->
        <!-- ============================================ -->
        <section id="contact-form" class="py-16 lg:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-14 reveal">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-sm uppercase tracking-[0.2em] mb-4">
                        <span class="w-8 h-px bg-gold"></span>
                        Send a Message
                        <span class="w-8 h-px bg-gold"></span>
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-charcoal mb-4">
                        Let's <span class="text-gold-dark">Talk</span>
                    </h2>
                    <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed">
                        Fill out the form below and we'll get back to you within 24 hours.
                    </p>
                </div>

                <!-- Two Column Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 reveal">

                    <!-- LEFT: Contact Form -->
                    <div class="glass-card rounded-2xl p-8 sm:p-10 shadow-lg border border-gray-100/80">
                        <form action="https://formsubmit.co/info@cutomsofaprices.com" method="POST" id="contact-form-el">
                            <!-- Hidden fields -->
                            <input type="hidden" name="_subject" value="New Contact from Custom Sofa Prices">
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_next" value="https://cutomsofaprices.com/contact.php?sent=1">

                            <!-- Name -->
                            <div class="mb-5">
                                <label for="name" class="block text-sm font-semibold text-charcoal mb-2">
                                    <i class="fas fa-user text-gold mr-2 text-xs"></i>Full Name <span class="text-red-400">*</span>
                                </label>
                                <input type="text" name="name" id="name" required placeholder="Your full name"
                                    class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white/80 text-charcoal placeholder-gray-400 text-sm">
                            </div>

                            <!-- Phone -->
                            <div class="mb-5">
                                <label for="phone" class="block text-sm font-semibold text-charcoal mb-2">
                                    <i class="fas fa-phone text-gold mr-2 text-xs"></i>Phone Number <span class="text-red-400">*</span>
                                </label>
                                <input type="tel" name="phone" id="phone" required placeholder="e.g. 0300 1234567"
                                    class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white/80 text-charcoal placeholder-gray-400 text-sm">
                            </div>

                            <!-- Email -->
                            <div class="mb-5">
                                <label for="email" class="block text-sm font-semibold text-charcoal mb-2">
                                    <i class="fas fa-envelope text-gold mr-2 text-xs"></i>Email Address <span class="text-red-400">*</span>
                                </label>
                                <input type="email" name="email" id="email" required placeholder="you@example.com"
                                    class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white/80 text-charcoal placeholder-gray-400 text-sm">
                            </div>

                            <!-- Subject Dropdown -->
                            <div class="mb-5">
                                <label for="subject" class="block text-sm font-semibold text-charcoal mb-2">
                                    <i class="fas fa-tag text-gold mr-2 text-xs"></i>Subject
                                </label>
                                <select name="subject" id="subject"
                                    class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white/80 text-charcoal text-sm appearance-none cursor-pointer"
                                    style="background-image: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%23C9A96E%22 stroke-width=%222%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22%3E%3Cpolyline points=%226 9 12 15 18 9%22/%3E%3C/svg%3E'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.2rem;">
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Price Quote">Price Quote</option>
                                    <option value="Custom Order">Custom Order</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="mb-7">
                                <label for="message" class="block text-sm font-semibold text-charcoal mb-2">
                                    <i class="fas fa-comment-dots text-gold mr-2 text-xs"></i>Your Message <span class="text-red-400">*</span>
                                </label>
                                <textarea name="message" id="message" rows="5" required placeholder="Tell us about your requirements..."
                                    class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white/80 text-charcoal placeholder-gray-400 text-sm resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" id="contact-submit-btn"
                                class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-semibold text-base px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300 btn-shine">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- RIGHT: Google Maps -->
                    <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100/80 min-h-[430px]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.796047531272!2d74.5254195!3d32.5048799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebd5c957bb31%3A0xb604d6e70f7e3df7!2scustom%20sofa%20price!5e0!3m2!1sen!2s!4v1780327643004!5m2!1sen!2s" width="100%" height="100%" style="border:0; border-radius: 1.25rem; min-height: 430px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Custom Sofa Prices Pakistan - Location"></iframe>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- SOCIAL MEDIA SECTION -->
        <!-- ============================================ -->
        <section id="social-media" class="py-16 lg:py-24 bg-cream">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-12 reveal">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-sm uppercase tracking-[0.2em] mb-4">
                        <span class="w-8 h-px bg-gold"></span>
                        Follow Us
                        <span class="w-8 h-px bg-gold"></span>
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-charcoal mb-4">
                        Connect on <span class="text-gold-dark">Social Media</span>
                    </h2>
                    <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
                        Stay updated with our latest sofa designs, offers, and behind-the-scenes content.
                    </p>
                </div>

                <!-- Social Icons Grid -->
                <div class="flex flex-wrap justify-center gap-5 lg:gap-7 reveal">

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/share/18cs6gZryW/" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook"
                       class="social-icon w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-2xl shadow-md border border-gray-100 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 group">
                        <i class="fab fa-facebook-f text-2xl sm:text-3xl text-blue-600 group-hover:text-white transition-colors"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/customsofamaker" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram"
                       class="social-icon w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-2xl shadow-md border border-gray-100 flex items-center justify-center hover:bg-gradient-to-br hover:from-purple-600 hover:via-pink-500 hover:to-orange-400 hover:border-pink-500 group">
                        <i class="fab fa-instagram text-2xl sm:text-3xl text-pink-500 group-hover:text-white transition-colors"></i>
                    </a>

                    <!-- Pinterest -->
                    <a href="https://pin.it/2FKxBiazu" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Pinterest"
                       class="social-icon w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-2xl shadow-md border border-gray-100 flex items-center justify-center hover:bg-red-600 hover:border-red-600 group">
                        <i class="fab fa-pinterest-p text-2xl sm:text-3xl text-red-600 group-hover:text-white transition-colors"></i>
                    </a>

                    <!-- YouTube -->
                    <a href="https://youtube.com/@customsofamaker" target="_blank" rel="noopener noreferrer" aria-label="Subscribe on YouTube"
                       class="social-icon w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-2xl shadow-md border border-gray-100 flex items-center justify-center hover:bg-red-500 hover:border-red-500 group">
                        <i class="fab fa-youtube text-2xl sm:text-3xl text-red-500 group-hover:text-white transition-colors"></i>
                    </a>

                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@custom.sofa" target="_blank" rel="noopener noreferrer" aria-label="Follow us on TikTok"
                       class="social-icon w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-2xl shadow-md border border-gray-100 flex items-center justify-center hover:bg-charcoal hover:border-charcoal group">
                        <i class="fab fa-tiktok text-2xl sm:text-3xl text-charcoal group-hover:text-white transition-colors"></i>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/923007131249" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"
                       class="social-icon w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-2xl shadow-md border border-gray-100 flex items-center justify-center hover:bg-green-500 hover:border-green-500 group">
                        <i class="fab fa-whatsapp text-2xl sm:text-3xl text-green-500 group-hover:text-white transition-colors"></i>
                    </a>

                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- WHATSAPP CTA SECTION -->
        <!-- ============================================ -->
        <section id="whatsapp-cta" class="py-16 lg:py-20 bg-gradient-to-br from-charcoal-dark via-charcoal to-charcoal-light relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-80 h-80 bg-gold/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-500/5 rounded-full blur-3xl"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
                <div class="w-20 h-20 mx-auto mb-6 bg-green-500/15 rounded-3xl flex items-center justify-center border border-green-500/20">
                    <i class="fab fa-whatsapp text-5xl text-green-400"></i>
                </div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-4">
                    Prefer WhatsApp? <span class="text-green-400">Chat Instantly!</span>
                </h2>
                <p class="text-white/70 text-lg max-w-xl mx-auto leading-relaxed mb-8">
                    Get instant replies, share sofa design images, and receive personalized price quotes on WhatsApp.
                </p>
                <a href="https://wa.me/923007131249?text=Hi!%20I%20want%20to%20know%20about%20sofa%20prices." target="_blank" rel="noopener noreferrer" id="whatsapp-cta-btn"
                   class="inline-flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white font-bold text-lg px-10 py-5 rounded-2xl shadow-xl hover:shadow-2xl hover:scale-[1.03] transition-all duration-300 btn-shine">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Chat on WhatsApp Now
                </a>
                <p class="text-white/40 text-sm mt-5">
                    <i class="fas fa-bolt mr-1"></i> Average response time: under 5 minutes
                </p>
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

        // ===== Auto-dismiss success alert after 8 seconds =====
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            setTimeout(() => {
                successAlert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                successAlert.style.opacity = '0';
                successAlert.style.transform = 'translateY(-100%)';
                setTimeout(() => successAlert.remove(), 500);
            }, 8000);
        }
    </script>

</body>
</html>
