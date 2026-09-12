<?php
require __DIR__ . '/embed/lib.php';
$H = embed_sanitize(file_get_contents(__DIR__ . '/embed/defaults/header.html'), false);
$F = embed_sanitize(file_get_contents(__DIR__ . '/embed/defaults/footer.html'), false);

$tables = [
    [
        'id' => 'greek-key-table',
        'category' => 'gold',
        'title' => 'Greek-Key Gold & Black Center Table',
        'subtitle' => 'Royal Dual-Tone Statement Piece with Filigree Center Medallion',
        'badge' => 'Best Seller',
        'badge_color' => 'bg-amber-500 text-white',
        'badge_icon' => 'fa-crown',
        'image' => 'images/workshop/greek-key-gold-table.webp',
        'price_num' => 38000,
        'price_text' => 'PKR 38,000',
        'retail_compare' => 'PKR 62,000',
        'dimensions' => '48" L × 24" W × 18" H',
        'wood' => 'Solid Seasoned Hardwood & High-Gloss Piano Lacquer',
        'glass' => '8mm Bevelled Clear Tempered Safety Glass',
        'storage' => 'Gold-Faced Soft Drawer + Open Display Niche',
        'description' => 'A royal statement center table featuring an antique gold brass deck with an intricate black Greek-key meander border and classical filigree center medallion beneath heavy tempered glass, anchored by a deep piano-black lacquer cabinet.',
        'features' => [
            'Antique gold brass platform with black Greek-key border',
            'Clear shatter-resistant tempered glass with center medallion',
            'High-gloss piano-black lacquer body with open display niche',
            'Storage drawer with antique gold front & custom handle',
            'Heavy-duty stepped dark plinth pedestal base'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Greek-Key Gold & Black Center Table (PKR 38,000) shown on your website. Please share delivery timeline and payment details.'
    ],
    [
        'id' => 'cantilever-table',
        'category' => 'walnut',
        'title' => 'Multi-Tier Cantilever Center Table',
        'subtitle' => 'Architectural Italian-Inspired Bi-Level Walnut & Bronze Mirror Coffee Table',
        'badge' => 'Statement Piece',
        'badge_color' => 'bg-neutral-800 text-white',
        'badge_icon' => 'fa-layer-group',
        'image' => 'images/workshop/cantilever-glass-table.webp',
        'price_num' => 48000,
        'price_text' => 'PKR 48,000',
        'retail_compare' => 'PKR 78,000',
        'dimensions' => '40" × 40" Square × 16" H',
        'wood' => '100% Solid Seasoned Dark Walnut & Matte Black Box Plinth',
        'glass' => 'Inset Bronze-Tinted Reflective Mirror Surfaces',
        'storage' => 'Staggered Bi-Level Tiers + Recessed Wood Well',
        'description' => 'Architectural Italian-inspired modern coffee table crafted with a 100% solid black wood box base and two bi-level cantilevered thick solid dark walnut slabs topped with reflective bronze glass mirror surfaces.',
        'features' => [
            '100% solid wood square box base in matte black lacquer',
            'Thick solid walnut slabs with rich exposed natural wood grain',
            'Inset ultra-reflective bronze-tinted glass mirror tops',
            'Staggered bi-level cantilevered architectural layout',
            'Spacious recessed central wooden storage well'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Multi-Tier Cantilever Center Table (PKR 48,000) shown on your website. Please share delivery timeline and payment details.'
    ],
    [
        'id' => 'faceted-walnut-table',
        'category' => 'walnut',
        'title' => 'Faceted Walnut & Glass Center Table',
        'subtitle' => 'Sculptural Chamfered Boat-Prism Table with Floating Shadow Channel',
        'badge' => 'Sculptural Masterpiece',
        'badge_color' => 'bg-amber-700 text-white',
        'badge_icon' => 'fa-gem',
        'image' => 'images/workshop/faceted-walnut-table.webp',
        'price_num' => 45000,
        'price_text' => 'PKR 45,000',
        'retail_compare' => 'PKR 72,000',
        'dimensions' => '46" L × 28" W × 17" H',
        'wood' => 'Kiln-Dried Walnut Veneer Core & Seasoned Solid Wood Subframe',
        'glass' => 'Flush Dark Smoked Tempered Safety Glass Top',
        'storage' => 'Concealed Center Drawer with Matte Black Face',
        'description' => 'Sculptural boat-prism coffee table with bold chamfered geometric angles in rich dark walnut, an all-around floating shadow reveal channel, flush dark smoked glass top, and a center storage drawer.',
        'features' => [
            'Chamfered faceted geometric angled body in seasoned walnut',
            'Flush reflective dark smoked tempered glass top with wood lip',
            'Continuous deep recessed shadow reveal creating a floating effect',
            'Center pull-out drawer with matte black face & brass knob',
            'Tapered dark solid wooden feet with floor protectors'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Faceted Walnut & Glass Center Table (PKR 45,000) shown on your website. Please share delivery timeline and payment details.'
    ],
    [
        'id' => 'floating-glass-table',
        'category' => 'glass',
        'title' => 'Floating Glass & Walnut Capsule Table',
        'subtitle' => 'Minimalist Curved Capsule Deck with Elevated Bronze Glass Platform',
        'badge' => 'Bespoke Luxury',
        'badge_color' => 'bg-amber-600 text-white',
        'badge_icon' => 'fa-sparkles',
        'image' => 'images/workshop/floating-center-table.webp',
        'price_num' => 42000,
        'price_text' => 'PKR 42,000',
        'retail_compare' => 'PKR 68,000',
        'dimensions' => '44" L × 24" W × 18" H',
        'wood' => 'Warm Cream Casing & Textured Dark Walnut Grain Drawer Fronts',
        'glass' => 'Elevated 10mm Smoked Bronze Tempered Glass Top',
        'storage' => 'Dual Soft-Close Wooden Drawers with Brushed Gold Handles',
        'description' => 'A sophisticated modern centerpiece with a floating tempered smoked bronze glass deck elevated above a curved cream capsule body, equipped with dual dark walnut drawers and brushed champagne gold trim.',
        'features' => [
            'Floating tempered smoked bronze glass top with raised walnut lip',
            'Curved capsule rounded body wrapped in matte warm-cream casing',
            'Dual soft-close drawers with textured dark walnut wood grain',
            'Sleek horizontal brushed gold bar handles',
            'Continuous brushed champagne gold perimeter reveal strip'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Floating Glass & Walnut Capsule Table (PKR 42,000) shown on your website. Please share delivery timeline and payment details.'
    ],
    [
        'id' => 'dual-tone-table',
        'category' => 'glass',
        'title' => 'Dual-Tone Architectural Coffee Table',
        'subtitle' => 'Multi-Storage Centerpiece with Black Glass, Teak Frame & Chrome Accents',
        'badge' => 'Smart Storage',
        'badge_color' => 'bg-slate-800 text-white',
        'badge_icon' => 'fa-book-open',
        'image' => 'images/workshop/dual-tone-center-table.webp',
        'price_num' => 36000,
        'price_text' => 'PKR 36,000',
        'retail_compare' => 'PKR 58,000',
        'dimensions' => '48" L × 24" W × 18" H',
        'wood' => 'Seasoned Warm Teak Wood Core & Enclosed Charcoal Cabinet',
        'glass' => 'High-Gloss Reflective Black Tempered Glass with Rounded Corners',
        'storage' => 'Enclosed Cupboard + Deep Pull-Out Drawer + Open Magazine Shelf',
        'description' => 'A functional contemporary coffee table featuring reflective glossy black tempered glass with radius rounded corners, warm teak wood frame, enclosed charcoal side cabinet, pull-out drawer, and open magazine tier.',
        'features' => [
            'High-gloss reflective black tempered glass top with radius edges',
            'Seasoned warm reddish-brown teak wood frame and partitions',
            'Enclosed side cupboard with polished chrome round knob',
            'Deep storage drawer with horizontal chrome bar pull',
            'Open center display tier & polished chrome cylinder legs'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Dual-Tone Architectural Coffee Table (PKR 36,000) shown on your website. Please share delivery timeline and payment details.'
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
    <meta property="og:site_name" content="Custom Sofa Prices Pakistan">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Site CSS -->
    <link rel="stylesheet" href="style.min.css">

    <!-- Scoped Bulletproof Responsive Tables CSS -->
    <style>
        :root {
            --gold-primary: #c9a96e;
            --gold-dark: #8a6a1e;
            --gold-light: #dfc9a0;
            --charcoal: #2d2d2d;
            --charcoal-dark: #1a1a1a;
            --cream: #fafaf6;
            --whatsapp-green: #25D366;
            --whatsapp-dark: #1ea952;
        }

        /* Responsive Layout Architecture */
        .table-showcase-container {
            width: 100%;
            max-width: 1240px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        @media (min-width: 640px) {
            .table-showcase-container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        @media (min-width: 1024px) {
            .table-showcase-container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* Modern Table Card */
        .modern-table-card {
            background: #ffffff;
            border-radius: 1.75rem;
            border: 1px solid rgba(201, 169, 110, 0.22);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.4s ease;
            margin-bottom: 2.5rem;
        }
        @media (min-width: 1024px) {
            .modern-table-card {
                margin-bottom: 3.5rem;
            }
        }
        .modern-table-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 50px -15px rgba(0, 0, 0, 0.12);
            border-color: rgba(201, 169, 110, 0.5);
        }

        /* Card Split Row */
        .card-split-row {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        @media (min-width: 1024px) {
            .card-split-row {
                flex-direction: row;
                align-items: stretch;
            }
            .card-split-row.row-reverse {
                flex-direction: row-reverse;
            }
        }

        /* Image Half */
        .card-img-half {
            width: 100%;
            position: relative;
            background-color: #f3f4f6;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @media (max-width: 1023px) {
            .card-img-half {
                aspect-ratio: 16 / 10;
                min-height: 260px;
                max-height: 400px;
            }
        }
        @media (min-width: 1024px) {
            .card-img-half {
                width: 50%;
                flex: 0 0 50%;
                min-height: 480px;
            }
        }
        .card-img-half img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
        }
        .modern-table-card:hover .card-img-half img {
            transform: scale(1.05);
        }

        /* Details Half */
        .card-details-half {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1.5rem;
        }
        @media (min-width: 640px) {
            .card-details-half {
                padding: 2rem;
            }
        }
        @media (min-width: 1024px) {
            .card-details-half {
                width: 50%;
                flex: 0 0 50%;
                padding: 2.75rem 3rem;
            }
        }

        /* Spec Pills Grid */
        .spec-pills-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.625rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }
        @media (min-width: 640px) {
            .spec-pills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        .spec-pill-item {
            background: #fbfbf9;
            border: 1px solid rgba(0, 0, 0, 0.06);
            border-radius: 0.875rem;
            padding: 0.625rem 0.875rem;
            display: flex;
            align-items: flex-start;
            gap: 0.625rem;
            font-size: 0.8125rem;
            line-height: 1.35;
        }
        .spec-pill-item i {
            color: var(--gold-dark);
            margin-top: 0.15rem;
            flex-shrink: 0;
            font-size: 0.875rem;
        }
        .spec-pill-item strong {
            display: block;
            font-size: 0.6875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #888888;
            margin-bottom: 0.1rem;
        }

        /* WhatsApp Button */
        .btn-whatsapp-order {
            background: linear-gradient(135deg, var(--whatsapp-green), var(--whatsapp-dark));
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.9375rem;
            padding: 0.875rem 1.5rem;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.625rem;
            box-shadow: 0 10px 20px -5px rgba(37, 211, 102, 0.38);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-whatsapp-order:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -5px rgba(37, 211, 102, 0.5);
            background: linear-gradient(135deg, #2ae06d, var(--whatsapp-green));
            color: #ffffff !important;
        }

        /* Filter Tab Buttons */
        .table-filter-btn {
            background: #ffffff;
            color: #4b5563;
            border: 1px solid rgba(0, 0, 0, 0.08);
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.625rem 1.25rem;
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .table-filter-btn:hover {
            border-color: var(--gold-primary);
            color: var(--gold-dark);
        }
        .table-filter-btn.active {
            background: var(--charcoal);
            color: #ffffff;
            border-color: var(--charcoal);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Lightbox Image Preview Modal */
        .table-lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.88);
            backdrop-filter: blur(8px);
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }
        .table-lightbox.active {
            display: flex;
        }
        .table-lightbox img {
            max-width: 92vw;
            max-height: 85vh;
            border-radius: 1rem;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
            object-fit: contain;
        }

        /* Sticky Mobile WhatsApp Bar */
        @media (max-width: 767px) {
            .mobile-bottom-bar {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 45;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(12px);
                border-top: 1px solid rgba(0, 0, 0, 0.08);
                padding: 0.625rem 1rem;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.08);
            }
            body {
                padding-bottom: 70px;
            }
        }
        @media (min-width: 768px) {
            .mobile-bottom-bar {
                display: none !important;
            }
        }
    </style>

    <!-- Schema.org Product & Breadcrumb JSON-LD -->
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
                "@type": "ItemList",
                "name": "Bespoke Center Tables & Luxury Coffee Table Designs in Pakistan",
                "description": "Factory-direct bespoke center tables crafted in Gujrat workshop. Tempered smoked glass, solid dark walnut, and Greek-key gold finishes.",
                "numberOfItems": <?= count($tables) ?>,
                "itemListElement": [
                    <?php 
                    $jsonItems = [];
                    foreach ($tables as $i => $t) {
                        $jsonItems[] = json_encode([
                            '@type' => 'Product',
                            'position' => $i + 1,
                            'name' => $t['title'],
                            'description' => $t['description'],
                            'image' => 'https://cutomsofaprices.com/' . $t['image'],
                            'brand' => [
                                '@type' => 'Brand',
                                'name' => 'Custom Sofa Prices Pakistan'
                            ],
                            'offers' => [
                                '@type' => 'Offer',
                                'priceCurrency' => 'PKR',
                                'price' => $t['price_num'],
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
                        "name": "What is the price of center tables in Pakistan?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Center table prices at Custom Sofa Prices range from PKR 36,000 for contemporary dual-tone teak designs up to PKR 48,000 for heavy multi-tier solid walnut cantilever units. Because you buy directly from our Gujrat workshop, you save 35% to 50% compared to luxury furniture showroom retail prices."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can you customize the center table size to match my sofa set?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, 100%! Every center table is tailor-made to match your sofa height, length, wood polish, and interior room theme. You can also share any photo from Pinterest or Instagram and our master craftsmen will replicate it with precision."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How is glass delivered safely across Pakistani cities?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "All glass tops use 8mm to 12mm shatter-resistant tempered safety glass. They are packed in high-density foam wrapping inside a solid custom wooden crate. We guarantee zero breakage doorstep delivery across Lahore, Karachi, Islamabad, Rawalpindi, Faisalabad, and nationwide."
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
            <div class="table-showcase-container">
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
        <section class="relative bg-charcoal-dark text-white py-14 lg:py-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative table-showcase-container text-center">
                <span class="inline-flex items-center gap-2 text-gold-light font-semibold text-xs sm:text-sm uppercase tracking-[0.2em] mb-4 bg-white/10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                    <i class="fas fa-gem text-gold"></i> Live From Our Gujrat Workshop
                </span>
                <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl font-bold tracking-tight mb-4">
                    Bespoke <span class="text-gold-light">Center Tables</span> &amp; Coffee Designs
                </h1>
                <p class="text-gray-300 text-sm sm:text-base lg:text-lg max-w-3xl mx-auto leading-relaxed mb-8">
                    Engineered to anchor your drawing room. Handcrafted from seasoned solid hardwoods, shatter-resistant tempered safety glass, and brushed luxury metallic trims — direct from our factory with zero showroom markup.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-3 text-xs sm:text-sm text-gray-300">
                    <span class="flex items-center gap-2 bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10"><i class="fas fa-check-circle text-gold"></i> 100% Seasoned Hardwood</span>
                    <span class="flex items-center gap-2 bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10"><i class="fas fa-shield-alt text-gold"></i> 8-12mm Tempered Safety Glass</span>
                    <span class="flex items-center gap-2 bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10"><i class="fas fa-ruler-combined text-gold"></i> Custom Sizes Made to Match</span>
                    <span class="flex items-center gap-2 bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10"><i class="fas fa-truck text-gold"></i> Wooden Crate Delivery Nationwide</span>
                </div>
            </div>
        </section>

        <!-- Signature Tables Showcase Section -->
        <section class="py-12 lg:py-20 bg-cream">
            <div class="table-showcase-container">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-xs uppercase tracking-[0.2em] mb-2">
                        <span class="w-8 h-px bg-gold"></span>
                        Our Most Ordered Builds
                        <span class="w-8 h-px bg-gold"></span>
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-charcoal mb-3">
                        Master Center Tables Collection
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        Every model below is manufactured in our Gujrat workshop on regular order. Click any table to inspect specs, request custom dimensions, or order directly on WhatsApp.
                    </p>
                </div>

                <!-- Interactive Filter Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
                    <button type="button" class="table-filter-btn active" data-filter="all">All Models (5)</button>
                    <button type="button" class="table-filter-btn" data-filter="walnut">Solid Walnut &amp; Wood</button>
                    <button type="button" class="table-filter-btn" data-filter="glass">Tempered Glass &amp; Smoked</button>
                    <button type="button" class="table-filter-btn" data-filter="gold">Royal Gold &amp; Brass</button>
                </div>

                <!-- Cards Stream with Alternating Desktop Layout -->
                <div id="table-cards-list">
                    <?php foreach ($tables as $idx => $t): 
                        $isReverse = ($idx % 2 === 1);
                    ?>
                    <article id="<?= htmlspecialchars($t['id']) ?>" 
                             class="modern-table-card" 
                             data-category="<?= htmlspecialchars($t['category']) ?>">
                        
                        <div class="card-split-row <?= $isReverse ? 'row-reverse' : '' ?>">
                            
                            <!-- Image Half -->
                            <div class="card-img-half group cursor-pointer" onclick="openLightbox('<?= htmlspecialchars($t['image']) ?>', '<?= htmlspecialchars(addslashes($t['title'])) ?>')">
                                <img src="<?= htmlspecialchars($t['image']) ?>"
                                     alt="<?= htmlspecialchars($t['title']) ?> — Bespoke Center Table Pakistan"
                                     loading="lazy" width="800" height="600">
                                
                                <!-- Floating Badge -->
                                <span class="absolute top-4 left-4 <?= htmlspecialchars($t['badge_color']) ?> text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-md flex items-center gap-1.5 z-10">
                                    <i class="fas <?= htmlspecialchars($t['badge_icon']) ?>"></i> <?= htmlspecialchars($t['badge']) ?>
                                </span>

                                <!-- Zoom Icon Hint -->
                                <span class="absolute bottom-4 right-4 bg-black/60 hover:bg-black/80 text-white text-xs px-3 py-1.5 rounded-full backdrop-blur-md flex items-center gap-1.5 transition-all opacity-80 group-hover:opacity-100 z-10">
                                    <i class="fas fa-search-plus"></i> <span class="hidden sm:inline">Tap to Inspect</span>
                                </span>
                            </div>

                            <!-- Details Half -->
                            <div class="card-details-half">
                                <div>
                                    
                                    <!-- Tag & Price Header -->
                                    <div class="flex items-center justify-between gap-3 mb-2">
                                        <span class="text-gold-dark text-xs font-bold uppercase tracking-widest flex items-center gap-1">
                                            <i class="fas fa-hammer text-[10px]"></i> Gujrat Workshop
                                        </span>
                                        <div class="text-right">
                                            <span class="text-charcoal font-bold text-base sm:text-lg"><?= htmlspecialchars($t['price_text']) ?></span>
                                            <span class="text-gray-400 text-xs line-through ml-1.5"><?= htmlspecialchars($t['retail_compare']) ?></span>
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h3 class="font-display text-2xl sm:text-3xl font-bold text-charcoal mb-2 leading-tight">
                                        <?= htmlspecialchars($t['title']) ?>
                                    </h3>
                                    
                                    <!-- Subtitle -->
                                    <p class="text-gold-dark text-xs sm:text-sm font-semibold mb-3">
                                        <?= htmlspecialchars($t['subtitle']) ?>
                                    </p>

                                    <!-- Description -->
                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-4">
                                        <?= htmlspecialchars($t['description']) ?>
                                    </p>

                                    <!-- 4-Pill Specs Matrix -->
                                    <div class="spec-pills-grid">
                                        <div class="spec-pill-item">
                                            <i class="fas fa-ruler-combined"></i>
                                            <div>
                                                <strong>Standard Size</strong>
                                                <span><?= htmlspecialchars($t['dimensions']) ?></span>
                                            </div>
                                        </div>
                                        <div class="spec-pill-item">
                                            <i class="fas fa-tree"></i>
                                            <div>
                                                <strong>Core Material</strong>
                                                <span><?= htmlspecialchars($t['wood']) ?></span>
                                            </div>
                                        </div>
                                        <div class="spec-pill-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <div>
                                                <strong>Table Surface</strong>
                                                <span><?= htmlspecialchars($t['glass']) ?></span>
                                            </div>
                                        </div>
                                        <div class="spec-pill-item">
                                            <i class="fas fa-box"></i>
                                            <div>
                                                <strong>Storage Utility</strong>
                                                <span><?= htmlspecialchars($t['storage']) ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Craftsmanship Bullet Points -->
                                    <div class="mb-6 pt-1">
                                        <span class="text-[11px] font-bold uppercase tracking-wider text-charcoal block mb-2">Signature Build Highlights:</span>
                                        <ul class="space-y-1.5 text-xs sm:text-sm text-gray-600">
                                            <?php foreach ($t['features'] as $f): ?>
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-check text-gold text-xs mt-0.5 flex-shrink-0"></i>
                                                <span><?= htmlspecialchars($f) ?></span>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                </div>

                                <!-- Action Buttons -->
                                <div class="flex flex-wrap items-center gap-3 pt-4 border-t border-gray-100">
                                    <a href="https://wa.me/923007131249?text=<?= urlencode($t['whatsapp_msg']) ?>"
                                       class="btn-whatsapp-order flex-1 sm:flex-initial"
                                       target="_blank" rel="noopener">
                                        <i class="fab fa-whatsapp text-lg"></i> Order on WhatsApp
                                    </a>
                                    <a href="tel:+923007131249" 
                                       class="inline-flex items-center justify-center gap-2 text-charcoal hover:text-gold-dark text-xs sm:text-sm font-semibold px-4 py-3 rounded-full hover:bg-gray-100 transition-colors border border-gray-200">
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

        <!-- Sizing & Placement Guide: How to Match with Your Sofa -->
        <section class="py-14 lg:py-20 bg-white border-y border-gray-100">
            <div class="table-showcase-container">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-gold-dark text-xs font-bold uppercase tracking-[0.2em] mb-2 block">
                        Expert Workshop Advice
                    </span>
                    <h2 class="font-display text-2xl sm:text-4xl font-bold text-charcoal mb-3">
                        How to Choose the Right Center Table Size
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        To achieve that balanced interior look, follow our master carpenter golden rules when picking dimensions:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    
                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 sm:p-8 text-center hover:border-gold/40 transition-colors">
                        <div class="w-14 h-14 mx-auto mb-4 bg-gold/15 rounded-2xl flex items-center justify-center text-gold-dark text-2xl">
                            <i class="fas fa-arrows-alt-v"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">1. The Height Rule</h3>
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                            Your center table should sit <strong>1 to 2 inches below</strong> or level with your sofa seat cushions (typically 16" to 18" high) for effortless reach of cups and books.
                        </p>
                    </div>

                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 sm:p-8 text-center hover:border-gold/40 transition-colors">
                        <div class="w-14 h-14 mx-auto mb-4 bg-gold/15 rounded-2xl flex items-center justify-center text-gold-dark text-2xl">
                            <i class="fas fa-arrows-alt-h"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">2. The 2/3 Length Ratio</h3>
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                            A balanced coffee table measures roughly <strong>two-thirds the length</strong> of your main sofa. For standard 7-8 foot sofas, a 48" to 52" table is ideal.
                        </p>
                    </div>

                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 sm:p-8 text-center hover:border-gold/40 transition-colors">
                        <div class="w-14 h-14 mx-auto mb-4 bg-gold/15 rounded-2xl flex items-center justify-center text-gold-dark text-2xl">
                            <i class="fas fa-walking"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-charcoal mb-2">3. The 16" Legroom Clearance</h3>
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                            Maintain <strong>14 to 18 inches</strong> between your sofa and the table perimeter to allow natural walking flow and comfortable stretch room.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Bring Your Own Design / Custom Order Banner -->
        <section class="py-14 lg:py-20 bg-cream">
            <div class="table-showcase-container">
                <div class="bg-gradient-to-br from-charcoal-dark to-charcoal text-white rounded-3xl p-8 sm:p-12 lg:p-16 relative overflow-hidden shadow-2xl">
                    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="relative z-10 max-w-3xl">
                        <span class="text-gold-light text-xs font-bold uppercase tracking-[0.2em] mb-2 block">
                            Have a Specific Design in Mind?
                        </span>
                        <h2 class="font-display text-2xl sm:text-4xl font-bold mb-4">
                            Send Us Any Pinterest or Instagram Table Photo
                        </h2>
                        <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-8">
                            Seen a coffee table design online that you want tailored to your drawing room? Share the photo with us. Our Gujrat workshop can craft it from seasoned hardwoods, marble tops, or tempered glass at authentic factory rates.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://wa.me/923007131249?text=Hi%2C%20I%20have%20a%20photo%20of%20a%20center%20table%20I%20want%20to%20get%20custom%20made.%20Can%20I%20share%20it%20for%20a%20price%20quote%3F"
                               class="btn-whatsapp-order"
                               target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp text-xl"></i> Share Photo on WhatsApp
                            </a>
                            <a href="https://cutomsofaprices.com/contact" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-semibold text-sm sm:text-base px-6 py-3.5 rounded-full transition-colors border border-white/20">
                                <i class="fas fa-map-marker-alt text-gold"></i> Visit Gujrat Workshop
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-14 lg:py-20 bg-white">
            <div class="table-showcase-container max-w-4xl">
                <div class="text-center mb-10">
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
                            Our bespoke center tables start from PKR 36,000 for contemporary multi-storage dual-tone designs, up to PKR 48,000 for solid walnut cantilever units. Because you order directly from our Gujrat factory, you save 30% to 50% compared to luxury showroom retail prices.
                        </p>
                    </details>
                    <details class="group bg-gray-50 rounded-2xl p-6 transition-colors duration-200">
                        <summary class="font-semibold text-charcoal text-base cursor-pointer flex items-center justify-between list-none">
                            <span>Can I customize the size and polish color?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                            Yes! Standard rectangular tables are usually 48"×24", and squares are 36"×36" or 40"×40". However, you can provide your exact room measurements or sofa dimensions and we will adjust length, width, and height accordingly. Wood finish can also be matched to dark walnut, teak, natural oak, or high-gloss black.
                        </p>
                    </details>
                    <details class="group bg-gray-50 rounded-2xl p-6 transition-colors duration-200">
                        <summary class="font-semibold text-charcoal text-base cursor-pointer flex items-center justify-between list-none">
                            <span>How do you handle shipping for glass tables safely?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                            All glass coffee tables are wrapped in high-density bubble wrap, corner-protected with heavy foam, and packed inside a reinforced solid wooden crate. We provide doorstep delivery across Lahore, Karachi, Islamabad, Rawalpindi, Faisalabad, Multan, and all other cities.
                        </p>
                    </details>
                </div>
            </div>
        </section>

    </main>

    <!-- Sticky Mobile WhatsApp Action Bar -->
    <div class="mobile-bottom-bar">
        <div class="flex-1">
            <span class="text-[11px] text-gray-500 block leading-tight">Need Custom Dimensions?</span>
            <span class="font-bold text-xs text-charcoal">Chat with Gujrat Workshop</span>
        </div>
        <a href="https://wa.me/923007131249?text=Hi%2C%20I%20am%20browsing%20your%20Center%20Tables%20collection%20and%20want%20to%20discuss%20pricing%20and%20custom%20sizes."
           class="btn-whatsapp-order text-xs py-2.5 px-4 shadow-sm"
           target="_blank" rel="noopener">
            <i class="fab fa-whatsapp text-base"></i> WhatsApp
        </a>
    </div>

    <!-- Fullscreen Lightbox Modal -->
    <div id="tableLightbox" class="table-lightbox" onclick="closeLightbox(event)">
        <div class="relative max-w-4xl mx-auto flex flex-col items-center">
            <button type="button" class="absolute -top-10 right-0 text-white text-2xl hover:text-gold" onclick="closeLightbox(event)">
                <i class="fas fa-times"></i>
            </button>
            <img id="lightboxImg" src="" alt="Enlarged Center Table View">
            <p id="lightboxCaption" class="text-white text-sm font-semibold mt-3 text-center"></p>
        </div>
    </div>

    <?= $F ?>

    <!-- Interactive Scripts: Filter Tabs, Lightbox & Active Nav -->
    <script>
        // Set Header active link for Tables
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('header nav a, #mobile-menu a');
            navLinks.forEach(link => {
                if (link.getAttribute('href') && link.getAttribute('href').includes('/tables')) {
                    link.classList.add('text-gold-dark', 'font-bold');
                }
            });

            // Filter Tabs logic
            const filterBtns = document.querySelectorAll('.table-filter-btn');
            const tableCards = document.querySelectorAll('.modern-table-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filter = btn.getAttribute('data-filter');
                    tableCards.forEach(card => {
                        const cat = card.getAttribute('data-category');
                        if (filter === 'all' || cat === filter) {
                            card.style.display = '';
                            card.style.opacity = '1';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });

        // Lightbox Functions
        function openLightbox(src, title) {
            const lb = document.getElementById('tableLightbox');
            const img = document.getElementById('lightboxImg');
            const caption = document.getElementById('lightboxCaption');
            if (lb && img) {
                img.src = src;
                caption.textContent = title;
                lb.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeLightbox(e) {
            if (e.target.id === 'tableLightbox' || e.target.closest('button')) {
                const lb = document.getElementById('tableLightbox');
                if (lb) {
                    lb.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        }
    </script>
</body>
</html>
