<?php
require __DIR__ . '/embed/lib.php';
$H = embed_sanitize(file_get_contents(__DIR__ . '/embed/defaults/header.html'), false);
$F = embed_sanitize(file_get_contents(__DIR__ . '/embed/defaults/footer.html'), false);

$tables = [
    [
        'id' => 'greek-key-table',
        'title' => 'Greek-Key Gold & Black Center Table',
        'badge' => 'Best Seller',
        'badge_color' => 'bg-gold/90 text-white',
        'badge_icon' => 'fa-crown',
        'image' => 'images/workshop/greek-key-gold-table.webp',
        'price_text' => 'Starts from PKR 38,000',
        'dimensions' => 'Standard: 48" L × 24" W × 18" H (Customizable)',
        'description' => 'A royal dual-tone statement table featuring an antique gold brass surface with an ornate black Greek-key meander border and a classical filigree center medallion under clear tempered glass, paired with a sleek piano-black lacquer cabinet.',
        'features' => [
            'Antique gold brass platform with black Greek-key border',
            'Clear shatter-resistant tempered glass with center medallion',
            'High-gloss piano-black lacquer body with open display niche',
            'Storage drawer with antique gold front & custom handle',
            'Heavy-duty stepped dark plinth pedestal base'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Greek-Key Gold and Black Center Table shown on your website. Please share price and delivery details.'
    ],
    [
        'id' => 'cantilever-table',
        'title' => 'Multi-Tier Cantilever Center Table',
        'badge' => 'Statement Piece',
        'badge_color' => 'bg-charcoal/85 text-white',
        'badge_icon' => 'fa-layer-group',
        'image' => 'images/workshop/cantilever-glass-table.webp',
        'price_text' => 'Starts from PKR 48,000',
        'dimensions' => 'Standard: 40" × 40" Square × 16" H (Customizable)',
        'description' => 'Architectural Italian-inspired modern coffee table crafted with a 100% solid black wood box base and two bi-level cantilevered thick solid dark walnut slabs topped with reflective bronze glass mirror surfaces.',
        'features' => [
            '100% solid wood square box base in matte black lacquer',
            'Thick solid walnut slabs with rich exposed natural wood grain',
            'Inset ultra-reflective bronze-tinted glass mirror tops',
            'Staggered bi-level cantilevered architectural layout',
            'Spacious recessed central wooden storage well'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Multi-Tier Cantilever Center Table shown on your website. Please share price and delivery details.'
    ],
    [
        'id' => 'faceted-walnut-table',
        'title' => 'Faceted Walnut & Glass Center Table',
        'badge' => 'Sculptural Masterpiece',
        'badge_color' => 'bg-gold-dark/90 text-white',
        'badge_icon' => 'fa-gem',
        'image' => 'images/workshop/faceted-walnut-table.webp',
        'price_text' => 'Starts from PKR 45,000',
        'dimensions' => 'Standard: 46" L × 28" W × 17" H (Customizable)',
        'description' => 'Sculptural boat-prism coffee table with bold chamfered geometric angles in rich dark walnut, an all-around floating shadow reveal channel, flush dark smoked glass top, and a center storage drawer.',
        'features' => [
            'Chamfered faceted geometric angled body in seasoned walnut',
            'Flush reflective dark smoked tempered glass top with wood lip',
            'Continuous deep recessed shadow reveal creating a floating effect',
            'Center pull-out drawer with matte black face & brass knob',
            'Tapered dark solid wooden feet with floor protectors'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Faceted Walnut Center Table shown on your website. Please share price and delivery details.'
    ],
    [
        'id' => 'floating-glass-table',
        'title' => 'Floating Glass & Walnut Capsule Table',
        'badge' => 'Bespoke Luxury',
        'badge_color' => 'bg-gold/90 text-white',
        'badge_icon' => 'fa-sparkles',
        'image' => 'images/workshop/floating-center-table.webp',
        'price_text' => 'Starts from PKR 42,000',
        'dimensions' => 'Standard: 44" L × 24" W × 18" H (Customizable)',
        'description' => 'A sophisticated modern centerpiece with a floating tempered smoked bronze glass deck elevated above a curved cream capsule body, equipped with dual dark walnut drawers and brushed champagne gold trim.',
        'features' => [
            'Floating tempered smoked bronze glass top with raised walnut lip',
            'Curved capsule rounded body wrapped in matte warm-cream casing',
            'Dual soft-close drawers with textured dark walnut wood grain',
            'Sleek horizontal brushed gold bar handles',
            'Continuous brushed champagne gold perimeter reveal strip'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Floating Smoked Glass Center Table shown on your website. Please share price and delivery details.'
    ],
    [
        'id' => 'dual-tone-table',
        'title' => 'Dual-Tone Architectural Coffee Table',
        'badge' => 'Smart Storage',
        'badge_color' => 'bg-charcoal/85 text-white',
        'badge_icon' => 'fa-book-open',
        'image' => 'images/workshop/dual-tone-center-table.webp',
        'price_text' => 'Starts from PKR 36,000',
        'dimensions' => 'Standard: 48" L × 24" W × 18" H (Customizable)',
        'description' => 'A functional contemporary coffee table featuring reflective glossy black tempered glass with radius rounded corners, warm teak wood frame, enclosed charcoal side cabinet, pull-out drawer, and open magazine tier.',
        'features' => [
            'High-gloss reflective black tempered glass top with radius edges',
            'Seasoned warm reddish-brown teak wood frame and partitions',
            'Enclosed side cupboard with polished chrome round knob',
            'Deep storage drawer with horizontal chrome bar pull',
            'Open center display tier & polished chrome cylinder legs'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Dual-Tone Teak and Black Glass Center Table shown on your website. Please share price and delivery details.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4TCQG0L7EQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-4TCQG0L7EQ');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary SEO Meta Tags -->
    <title>Center Tables Price in Pakistan | Modern & Luxury Coffee Table Designs</title>
    <meta name="description" content="Explore handcrafted luxury center tables and modern coffee tables in Pakistan. Floating smoked glass, Greek-key gold designs, multi-tier cantilever tables & solid wood builds direct from Gujrat factory. Free delivery across Pakistan.">
    <meta name="keywords" content="center table price in Pakistan, coffee table design Pakistan, luxury center table, glass center table, wooden coffee table design, modern center table living room, tea table price Pakistan, custom center tables Gujrat">
    <meta name="author" content="Custom Sofa Prices Pakistan">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://cutomsofaprices.com/tables">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="alternate" type="application/ld+json" href="knowledge-graph.jsonld">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/favicon.webp">
    <link rel="apple-touch-icon" href="images/favicon.webp">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cutomsofaprices.com/tables">
    <meta property="og:title" content="Bespoke Center Tables & Luxury Coffee Table Designs — Custom Sofa Prices Pakistan">
    <meta property="og:description" content="Shop factory-direct handcrafted center tables in Pakistan. Floating glass, solid walnut, Greek-key brass & multi-storage designs made to complement your sofa set.">
    <meta property="og:image" content="https://cutomsofaprices.com/images/workshop/greek-key-gold-table.webp">
    <meta property="og:locale" content="en_PK">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bespoke Center Tables & Luxury Coffee Table Designs">
    <meta name="twitter:description" content="Factory-direct center tables in Pakistan. Solid wood, tempered glass, custom dimensions.">

    <!-- Inlined Production CSS -->
    <style><?= @file_get_contents(__DIR__ . '/style.min.css') ?></style>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </noscript>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- JSON-LD: Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://cutomsofaprices.com/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Center Tables",
                        "item": "https://cutomsofaprices.com/tables"
                    }
                ]
            },
            {
                "@type": "CollectionPage",
                "@id": "https://cutomsofaprices.com/tables#webpage",
                "url": "https://cutomsofaprices.com/tables",
                "name": "Bespoke Center Tables & Luxury Coffee Table Designs in Pakistan",
                "description": "Handcrafted luxury center tables and modern coffee tables made in Gujrat, Pakistan. Factory direct prices with nationwide delivery.",
                "isPartOf": {
                    "@type": "WebSite",
                    "@id": "https://cutomsofaprices.com/#website",
                    "url": "https://cutomsofaprices.com/",
                    "name": "Custom Sofa Prices Pakistan"
                }
            },
            {
                "@type": "ItemList",
                "name": "Handcrafted Center Table Models",
                "itemListElement": [
                    <?php 
                    $jsonItems = [];
                    foreach ($tables as $index => $t) {
                        $jsonItems[] = json_encode([
                            '@type' => 'Product',
                            'position' => $index + 1,
                            'name' => $t['title'],
                            'image' => 'https://cutomsofaprices.com/' . $t['image'],
                            'description' => $t['description'],
                            'brand' => [
                                '@type' => 'Brand',
                                'name' => 'Custom Sofa Prices Pakistan'
                            ],
                            'offers' => [
                                '@type' => 'Offer',
                                'priceCurrency' => 'PKR',
                                'availability' => 'https://schema.org/InStock',
                                'url' => 'https://cutomsofaprices.com/tables#' . $t['id']
                            ]
                        ], JSON_UNESCAPED_SLASHES);
                    }
                    echo implode(',', $jsonItems);
                    ?>
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What is the average center table price in Pakistan?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Center table prices in Pakistan generally range from PKR 25,000 to PKR 90,000 depending on materials, tempered glass thickness, wood species, and custom carving or metalwork. At Custom Sofa Prices, our factory-direct builds start from PKR 36,000."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can you customize the center table to match my sofa set?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes! Every center table is customized to match your sofa height, length, wood finish, and fabric or leather accents. You can also bring your own photo from Pinterest or Instagram and our craftsmen will replicate it."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What type of glass is used for coffee table tops?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We strictly use 8mm to 12mm heavy-duty tempered safety glass in smoked bronze, reflective black, or ultra-clear options with bevelled polished edges."
                        }
                    }
                ]
            }
        ]
    }
    </script>
</head>
<body class="bg-gray-50 font-body text-charcoal antialiased selection:bg-gold selection:text-white">

    <?= $H ?>

    <main id="main-content">

        <!-- Breadcrumbs -->
        <nav class="bg-white border-b border-gray-100 py-3" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <ol class="flex items-center gap-2 text-xs sm:text-sm text-gray-500">
                    <li>
                        <a href="https://cutomsofaprices.com/" class="hover:text-gold-dark transition-colors">
                            <i class="fas fa-home text-xs mr-1"></i> Home
                        </a>
                    </li>
                    <li><i class="fas fa-chevron-right text-[10px] text-gray-300"></i></li>
                    <li class="text-gold-dark font-semibold">Center Tables</li>
                </ol>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative bg-charcoal-dark text-white py-16 lg:py-24 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-flex items-center gap-2 text-gold-light font-semibold text-xs sm:text-sm uppercase tracking-[0.2em] mb-4 bg-white/10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                    <i class="fas fa-gem text-gold"></i> Live From Our Gujrat Workshop
                </span>
                <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl font-bold tracking-tight mb-6">
                    Bespoke <span class="text-gold-light">Center Tables</span> &amp; Coffee Designs
                </h1>
                <p class="text-gray-300 text-base sm:text-lg max-w-3xl mx-auto leading-relaxed mb-8">
                    Handcrafted center tables engineered to anchor your drawing room. Built from seasoned solid wood, high-density tempered glass, and luxury brass hardware — factory direct with zero retail middlemen.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 text-xs sm:text-sm text-gray-300">
                    <span class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10"><i class="fas fa-check-circle text-gold"></i> 100% Seasoned Wood</span>
                    <span class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10"><i class="fas fa-shield-alt text-gold"></i> 8-12mm Tempered Safety Glass</span>
                    <span class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10"><i class="fas fa-ruler-combined text-gold"></i> Custom Sizes Made to Match</span>
                    <span class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10"><i class="fas fa-truck text-gold"></i> Nationwide Safe Delivery</span>
                </div>
            </div>
        </section>

        <!-- Signature Tables Showcase Grid -->
        <section class="py-16 lg:py-24 bg-cream">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-sm uppercase tracking-[0.2em] mb-3">
                        <span class="w-8 h-px bg-gold"></span>
                        Our Most Ordered Builds
                        <span class="w-8 h-px bg-gold"></span>
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-charcoal mb-4">
                        Master Center Tables Collection
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        Every model below is manufactured in our Gujrat workshop on regular order. Click any table to get exact factory pricing or customize dimensions to fit your space.
                    </p>
                </div>

                <div class="space-y-12 lg:space-y-16">
                    <?php foreach ($tables as $idx => $t): ?>
                    <article id="<?= htmlspecialchars($t['id']) ?>" class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
                            
                            <!-- Image Column (6 Cols) -->
                            <div class="lg:col-span-6 relative aspect-[4/3] lg:aspect-auto overflow-hidden bg-gray-100 min-h-[320px] lg:min-h-[420px]">
                                <img src="<?= htmlspecialchars($t['image']) ?>"
                                     alt="<?= htmlspecialchars($t['title']) ?> — Custom Sofa Prices Pakistan"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                     loading="lazy" width="800" height="600">
                                <span class="absolute top-5 left-5 <?= htmlspecialchars($t['badge_color']) ?> text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full backdrop-blur-sm shadow-sm flex items-center gap-1.5">
                                    <i class="fas <?= htmlspecialchars($t['badge_icon']) ?>"></i> <?= htmlspecialchars($t['badge']) ?>
                                </span>
                            </div>

                            <!-- Content Column (6 Cols) -->
                            <div class="lg:col-span-6 p-8 lg:p-12 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-4 mb-2">
                                        <span class="text-gold-dark text-xs font-bold uppercase tracking-widest">Gujrat Workshop Build</span>
                                        <span class="bg-gray-100 text-charcoal text-xs font-semibold px-3 py-1 rounded-full"><?= htmlspecialchars($t['price_text']) ?></span>
                                    </div>
                                    <h3 class="font-display text-2xl lg:text-3xl font-bold text-charcoal mb-3">
                                        <?= htmlspecialchars($t['title']) ?>
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                        <?= htmlspecialchars($t['description']) ?>
                                    </p>

                                    <!-- Dimensions & Customization Badge -->
                                    <div class="bg-gray-50 border border-gray-100 rounded-xl p-3.5 mb-6 text-xs text-gray-600 flex items-center gap-2.5">
                                        <i class="fas fa-ruler-combined text-gold text-sm flex-shrink-0"></i>
                                        <span><strong>Dimensions:</strong> <?= htmlspecialchars($t['dimensions']) ?></span>
                                    </div>

                                    <!-- Feature Highlights -->
                                    <h4 class="text-xs font-bold uppercase tracking-wider text-charcoal mb-3">Craftsmanship Highlights:</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 mb-8">
                                        <?php foreach ($t['features'] as $f): ?>
                                        <li class="flex items-start gap-2.5">
                                            <i class="fas fa-check text-gold text-xs mt-1 flex-shrink-0"></i>
                                            <span><?= htmlspecialchars($f) ?></span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- CTAs -->
                                <div class="flex flex-wrap items-center gap-4 pt-4 border-t border-gray-100">
                                    <a href="https://wa.me/923007131249?text=<?= urlencode($t['whatsapp_msg']) ?>"
                                       class="inline-flex items-center gap-2.5 bg-gold hover:bg-gold-dark text-white font-semibold text-sm px-6 py-3.5 rounded-full shadow-md hover:shadow-lg hover:scale-[1.02] transition-all duration-300"
                                       target="_blank" rel="noopener">
                                        <i class="fab fa-whatsapp text-lg"></i> Order via WhatsApp
                                    </a>
                                    <a href="tel:+923007131249" class="inline-flex items-center gap-2 text-charcoal hover:text-gold-dark text-sm font-semibold px-4 py-3 rounded-full hover:bg-gray-100 transition-colors">
                                        <i class="fas fa-phone-alt text-gold text-xs"></i> 0300 7131249
                                    </a>
                                </div>

                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- Bring Your Own Design / Customization Banner -->
        <section class="py-16 bg-white border-y border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gradient-to-br from-charcoal-dark to-charcoal text-white rounded-3xl p-8 sm:p-12 lg:p-16 relative overflow-hidden shadow-xl">
                    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="relative z-10 max-w-3xl">
                        <span class="text-gold-light text-xs font-bold uppercase tracking-[0.2em] mb-2 block">
                            Have a Specific Design in Mind?
                        </span>
                        <h2 class="font-display text-2xl sm:text-4xl font-bold mb-4">
                            Send Us Any Pinterest or Instagram Table Design
                        </h2>
                        <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-8">
                            Found a center table photo you love? Our master carpenters in Gujrat can craft it from scratch with your preferred dimensions, wood species, and glass finishes at authentic factory-direct rates.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://wa.me/923007131249?text=Hi%2C%20I%20have%20a%20photo%20of%20a%20center%20table%20I%20want%20to%20get%20custom%20made.%20Can%20I%20share%20it%20for%20a%20price%20quote%3F"
                               class="inline-flex items-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-semibold text-sm sm:text-base px-8 py-4 rounded-full shadow-lg hover:scale-105 transition-all duration-300"
                               target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp text-xl"></i> Share Your Design on WhatsApp
                            </a>
                            <a href="https://cutomsofaprices.com/contact" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-semibold text-sm sm:text-base px-6 py-4 rounded-full transition-colors">
                                <i class="fas fa-map-marker-alt text-gold"></i> Visit Gujrat Workshop
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us / Guarantees -->
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="w-12 h-12 bg-gold/10 text-gold-dark rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h4 class="font-display text-lg font-bold text-charcoal mb-2">100% Seasoned Wood</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Termite-treated solid Sheesham, Walnut, and Teak frame guarantee no warping or cracking.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="w-12 h-12 bg-gold/10 text-gold-dark rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h4 class="font-display text-lg font-bold text-charcoal mb-2">Tempered Safety Glass</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">8mm to 12mm shatter-resistant smoked bronze, reflective black, or clear glass tops.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="w-12 h-12 bg-gold/10 text-gold-dark rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <h4 class="font-display text-lg font-bold text-charcoal mb-2">Exact Match Sizing</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Tailored height and length so your center table aligns seamlessly with your sofa seating height.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="w-12 h-12 bg-gold/10 text-gold-dark rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h4 class="font-display text-lg font-bold text-charcoal mb-2">Safe Doorstep Delivery</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Multi-layer wooden crate packing ensuring zero transit damage across all cities in Pakistan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl font-bold text-charcoal mb-3">Frequently Asked Questions</h2>
                    <p class="text-gray-500 text-sm">Everything you need to know about our custom center table orders.</p>
                </div>
                <div class="space-y-4">
                    <details class="group bg-gray-50 rounded-2xl p-6 transition-colors duration-200" open>
                        <summary class="font-semibold text-charcoal text-base cursor-pointer flex items-center justify-between list-none">
                            <span>What is the price of center tables in Pakistan?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                            Our bespoke center tables start from PKR 36,000 for modern multi-storage dual-tone designs, ranging up to PKR 48,000 for heavy multi-tier solid walnut cantilever units. Because you order directly from our Gujrat factory, you save 30% to 50% compared to luxury showroom retail prices.
                        </p>
                    </details>
                    <details class="group bg-gray-50 rounded-2xl p-6 transition-colors duration-200">
                        <summary class="font-semibold text-charcoal text-base cursor-pointer flex items-center justify-between list-none">
                            <span>Can I customize the size of my center table?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                            Yes! Standard rectangular tables are usually 48"×24", and squares are 36"×36" or 40"×40". However, you can give us your exact room measurements or sofa dimensions and we will adjust the length, width, and height accordingly.
                        </p>
                    </details>
                    <details class="group bg-gray-50 rounded-2xl p-6 transition-colors duration-200">
                        <summary class="font-semibold text-charcoal text-base cursor-pointer flex items-center justify-between list-none">
                            <span>How do you handle shipping for glass tables safely?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                            All glass coffee tables are wrapped in high-density bubble wrap, corner-protected with foam, and packed inside a reinforced solid wooden crate. We provide doorstep delivery across Lahore, Karachi, Islamabad, Rawalpindi, Faisalabad, Multan, and all other cities.
                        </p>
                    </details>
                </div>
            </div>
        </section>

    </main>

    <?= $F ?>

    <!-- Sticky Header Shadow & Smooth Scroll Script -->
    <script>
        const header = document.getElementById('main-header');
        if (header) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            }, { passive: true });
        }
    </script>
</body>
</html>
