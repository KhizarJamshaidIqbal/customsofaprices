<?php
require __DIR__ . '/embed/lib.php';
$H = embed_sanitize(file_get_contents(__DIR__ . '/embed/defaults/header.html'), false);
$F = embed_sanitize(file_get_contents(__DIR__ . '/embed/defaults/footer.html'), false);

$tables = [
    [
        'id' => 'greek-key-table',
        'category' => 'gold',
        'title' => 'Greek-Key Gold & Black Table',
        'subtitle' => 'Royal Dual-Tone Statement Piece with Filigree Center Medallion',
        'badge' => 'Best Seller',
        'badge_color' => 'bg-amber-500 text-white',
        'badge_icon' => 'fa-crown',
        'image' => 'images/workshop/greek-key-gold-table.webp',
        'price_num' => 38000,
        'price_text' => 'PKR 38,000',
        'retail_compare' => 'PKR 62,000',
        'dimensions' => '48" L × 24" W × 18" H',
        'wood' => 'Solid Hardwood & Piano Lacquer',
        'glass' => '8mm Clear Tempered Glass',
        'storage' => 'Gold Soft Drawer + Display Niche',
        'description' => 'Antique gold brass platform with black Greek-key border and filigree center medallion under clear tempered glass, paired with high-gloss piano black cabinet.',
        'features' => [
            'Antique gold deck with black Greek-key meander border',
            'Clear shatter-resistant tempered glass with center medallion',
            'Storage drawer with antique gold front & custom handle'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Greek-Key Gold & Black Center Table (PKR 38,000) shown on your website. Please share delivery timeline and details.'
    ],
    [
        'id' => 'cantilever-table',
        'category' => 'walnut',
        'title' => 'Multi-Tier Cantilever Table',
        'subtitle' => 'Architectural Italian-Inspired Bi-Level Walnut & Bronze Mirror Table',
        'badge' => 'Statement Piece',
        'badge_color' => 'bg-neutral-800 text-white',
        'badge_icon' => 'fa-layer-group',
        'image' => 'images/workshop/cantilever-glass-table.webp',
        'price_num' => 48000,
        'price_text' => 'PKR 48,000',
        'retail_compare' => 'PKR 78,000',
        'dimensions' => '40" × 40" Square × 16" H',
        'wood' => '100% Solid Seasoned Dark Walnut',
        'glass' => 'Bronze-Tinted Reflective Mirror',
        'storage' => 'Bi-Level Tiers + Recessed Wood Well',
        'description' => 'Architectural modern coffee table with a 100% solid black wood box base and two bi-level cantilevered thick solid dark walnut slabs with reflective bronze mirror surfaces.',
        'features' => [
            '100% solid seasoned walnut slabs with rich natural grain',
            'Inset ultra-reflective bronze-tinted glass mirror tops',
            'Heavy solid wood square box base in matte black finish'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Multi-Tier Cantilever Center Table (PKR 48,000) shown on your website. Please share delivery timeline and details.'
    ],
    [
        'id' => 'faceted-walnut-table',
        'category' => 'walnut',
        'title' => 'Faceted Walnut & Glass Table',
        'subtitle' => 'Sculptural Chamfered Boat-Prism Table with Floating Shadow Gap',
        'badge' => 'Sculptural',
        'badge_color' => 'bg-amber-700 text-white',
        'badge_icon' => 'fa-gem',
        'image' => 'images/workshop/faceted-walnut-table.webp',
        'price_num' => 45000,
        'price_text' => 'PKR 45,000',
        'retail_compare' => 'PKR 72,000',
        'dimensions' => '46" L × 28" W × 17" H',
        'wood' => 'Seasoned Dark Walnut Veneer & Core',
        'glass' => 'Flush Smoked Tempered Safety Glass',
        'storage' => 'Concealed Center Drawer with Black Face',
        'description' => 'Sculptural boat-prism coffee table with bold chamfered geometric angles in rich dark walnut, an all-around floating shadow reveal channel, and smoked glass top.',
        'features' => [
            'Chamfered faceted geometric angled body in seasoned walnut',
            'Flush reflective dark smoked tempered glass top',
            'Continuous shadow reveal channel creating a floating look'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Faceted Walnut & Glass Center Table (PKR 45,000) shown on your website. Please share delivery timeline and details.'
    ],
    [
        'id' => 'floating-glass-table',
        'category' => 'glass',
        'title' => 'Floating Glass & Walnut Capsule',
        'subtitle' => 'Minimalist Curved Capsule Deck with Elevated Bronze Glass Platform',
        'badge' => 'Bespoke Luxury',
        'badge_color' => 'bg-amber-600 text-white',
        'badge_icon' => 'fa-sparkles',
        'image' => 'images/workshop/floating-center-table.webp',
        'price_num' => 42000,
        'price_text' => 'PKR 42,000',
        'retail_compare' => 'PKR 68,000',
        'dimensions' => '44" L × 24" W × 18" H',
        'wood' => 'Warm Cream Casing & Walnut Fronts',
        'glass' => 'Elevated 10mm Smoked Bronze Glass',
        'storage' => 'Dual Soft-Close Drawers + Gold Handles',
        'description' => 'Curved warm-cream capsule body with floating tempered smoked bronze glass deck, textured dark walnut drawer fronts, and brushed champagne gold accents.',
        'features' => [
            'Floating tempered smoked bronze glass deck with walnut lip',
            'Dual soft-close drawers with textured dark walnut grain',
            'Curved capsule body with brushed champagne gold trim'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Floating Glass & Walnut Capsule Table (PKR 42,000) shown on your website. Please share delivery timeline and details.'
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
        'wood' => 'Seasoned Warm Teak Wood Core',
        'glass' => 'High-Gloss Reflective Black Glass',
        'storage' => 'Side Cupboard + Pull-Out Drawer + Shelf',
        'description' => 'Contemporary coffee table with high-gloss black tempered glass, warm teak wood partitions, enclosed side cupboard, drawer, open shelf, and chrome cylinder feet.',
        'features' => [
            'Reflective glossy black tempered glass top with radius corners',
            'Enclosed side cupboard with round polished chrome knob',
            'Deep drawer + open middle shelf for books and remotes'
        ],
        'whatsapp_msg' => 'Hi, I want to order the Dual-Tone Architectural Coffee Table (PKR 36,000) shown on your website. Please share delivery timeline and details.'
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

    <!-- Bulletproof Scoped Responsive CSS for 3-Column Cards Grid -->
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

        /* Container */
        .tables-grid-container {
            width: 100%;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        @media (min-width: 640px) {
            .tables-grid-container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        @media (min-width: 1024px) {
            .tables-grid-container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* 3-Cards Per Row Desktop Grid */
        .three-cards-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        @media (min-width: 640px) {
            .three-cards-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }
        @media (min-width: 1024px) {
            .three-cards-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 2rem;
            }
        }

        /* Individual Card Box */
        .table-vertical-card {
            background: #ffffff;
            border-radius: 1.25rem;
            border: 1px solid rgba(201, 169, 110, 0.22);
            box-shadow: 0 8px 24px -8px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.4s ease;
            height: 100%;
        }
        .table-vertical-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.12);
            border-color: rgba(201, 169, 110, 0.6);
        }

        /* Image Box */
        .table-card-img-box {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            background-color: #f3f4f6;
            overflow: hidden;
            cursor: pointer;
        }
        .table-card-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
        }
        .table-vertical-card:hover .table-card-img-box img {
            transform: scale(1.06);
        }

        /* Card Content Area */
        .table-card-body {
            padding: 1.25rem 1.5rem 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        /* Spec Badges Matrix */
        .compact-spec-matrix {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.375rem;
            margin-top: 0.75rem;
            margin-bottom: 0.875rem;
        }
        .compact-spec-chip {
            background: #fbfbf9;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 0.625rem;
            padding: 0.45rem 0.55rem;
            font-size: 0.75rem;
            line-height: 1.25;
            display: flex;
            align-items: flex-start;
            gap: 0.375rem;
        }
        .compact-spec-chip i {
            color: var(--gold-dark);
            margin-top: 0.12rem;
            flex-shrink: 0;
            font-size: 0.75rem;
        }
        .compact-spec-chip div {
            min-width: 0;
        }
        .compact-spec-chip strong {
            display: block;
            font-size: 0.625rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: #888888;
        }
        .compact-spec-chip span {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #374151;
            font-weight: 500;
        }

        /* Buttons */
        .btn-card-whatsapp {
            background: linear-gradient(135deg, var(--whatsapp-green), var(--whatsapp-dark));
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.875rem;
            padding: 0.75rem 1rem;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            box-shadow: 0 6px 16px -3px rgba(37, 211, 102, 0.35);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-card-whatsapp:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px -3px rgba(37, 211, 102, 0.5);
            background: linear-gradient(135deg, #2ae06d, var(--whatsapp-green));
            color: #ffffff !important;
        }

        /* Filter Tab Buttons */
        .table-filter-btn {
            background: #ffffff;
            color: #4b5563;
            border: 1px solid rgba(0, 0, 0, 0.08);
            font-size: 0.8125rem;
            font-weight: 600;
            padding: 0.5rem 1.125rem;
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

        /* Fullscreen Lightbox Modal */
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
            <div class="tables-grid-container">
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
        <section class="relative bg-charcoal-dark text-white py-12 lg:py-16 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative tables-grid-container text-center">
                <span class="inline-flex items-center gap-2 text-gold-light font-semibold text-xs sm:text-sm uppercase tracking-[0.2em] mb-3 bg-white/10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                    <i class="fas fa-gem text-gold"></i> Live From Our Gujrat Workshop
                </span>
                <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight mb-3">
                    Bespoke <span class="text-gold-light">Center Tables</span> Collection
                </h1>
                <p class="text-gray-300 text-xs sm:text-sm lg:text-base max-w-2xl mx-auto leading-relaxed mb-6">
                    Handcrafted in Gujrat to anchor your drawing room. Seasoned solid hardwoods, shatter-resistant tempered safety glass, and luxury metallic accents at direct workshop prices.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-2.5 text-xs text-gray-300">
                    <span class="flex items-center gap-1.5 bg-white/5 px-3 py-1 rounded-full border border-white/10"><i class="fas fa-check-circle text-gold text-xs"></i> 100% Seasoned Hardwood</span>
                    <span class="flex items-center gap-1.5 bg-white/5 px-3 py-1 rounded-full border border-white/10"><i class="fas fa-shield-alt text-gold text-xs"></i> Tempered Safety Glass</span>
                    <span class="flex items-center gap-1.5 bg-white/5 px-3 py-1 rounded-full border border-white/10"><i class="fas fa-ruler-combined text-gold text-xs"></i> Custom Sizes Available</span>
                    <span class="flex items-center gap-1.5 bg-white/5 px-3 py-1 rounded-full border border-white/10"><i class="fas fa-truck text-gold text-xs"></i> Wooden Crate Delivery Nationwide</span>
                </div>
            </div>
        </section>

        <!-- 3-Cards Per Row Section -->
        <section class="py-12 lg:py-16 bg-cream">
            <div class="tables-grid-container">
                
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-xs uppercase tracking-[0.2em] mb-2">
                        <span class="w-8 h-px bg-gold"></span>
                        Our Most Ordered Builds
                        <span class="w-8 h-px bg-gold"></span>
                    </span>
                    <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-charcoal mb-2">
                        Master Center Tables Collection
                    </h2>
                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                        Every model below is crafted in our Gujrat workshop on regular order. Click any table photo to inspect full details, or click Order on WhatsApp to inquire.
                    </p>
                </div>

                <!-- Interactive Filter Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-10">
                    <button type="button" class="table-filter-btn active" data-filter="all">All Models (5)</button>
                    <button type="button" class="table-filter-btn" data-filter="walnut">Solid Walnut &amp; Wood</button>
                    <button type="button" class="table-filter-btn" data-filter="glass">Tempered Glass &amp; Smoked</button>
                    <button type="button" class="table-filter-btn" data-filter="gold">Royal Gold &amp; Brass</button>
                </div>

                <!-- 3-Columns Grid on Desktop -->
                <div id="table-cards-list" class="three-cards-grid">
                    <?php foreach ($tables as $idx => $t): ?>
                    <article id="<?= htmlspecialchars($t['id']) ?>" 
                             class="table-vertical-card" 
                             data-category="<?= htmlspecialchars($t['category']) ?>">
                        
                        <!-- Top Image Box (4:3 ratio) -->
                        <div class="table-card-img-box group" onclick="openLightbox('<?= htmlspecialchars($t['image']) ?>', '<?= htmlspecialchars(addslashes($t['title'])) ?>')">
                            <img src="<?= htmlspecialchars($t['image']) ?>"
                                 alt="<?= htmlspecialchars($t['title']) ?> — Bespoke Center Table Pakistan"
                                 loading="lazy" width="800" height="600">
                            
                            <!-- Floating Badge -->
                            <span class="absolute top-3 left-3 <?= htmlspecialchars($t['badge_color']) ?> text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full shadow-md flex items-center gap-1 z-10">
                                <i class="fas <?= htmlspecialchars($t['badge_icon']) ?>"></i> <?= htmlspecialchars($t['badge']) ?>
                            </span>

                            <!-- Zoom Hint -->
                            <span class="absolute bottom-3 right-3 bg-black/60 hover:bg-black/80 text-white text-[11px] px-2.5 py-1 rounded-full backdrop-blur-md flex items-center gap-1 transition-all opacity-80 group-hover:opacity-100 z-10">
                                <i class="fas fa-search-plus text-xs"></i> Inspect
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="table-card-body">
                            <div>
                                <!-- Origin & Price Header -->
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <span class="text-gold-dark text-[11px] font-bold uppercase tracking-wider flex items-center gap-1">
                                        <i class="fas fa-hammer text-[10px]"></i> Gujrat Workshop
                                    </span>
                                    <div>
                                        <span class="text-charcoal font-bold text-sm sm:text-base"><?= htmlspecialchars($t['price_text']) ?></span>
                                        <span class="text-gray-400 text-[11px] line-through ml-1"><?= htmlspecialchars($t['retail_compare']) ?></span>
                                    </div>
                                </div>

                                <!-- Title -->
                                <h3 class="font-display text-lg sm:text-xl font-bold text-charcoal mb-1 leading-snug">
                                    <?= htmlspecialchars($t['title']) ?>
                                </h3>

                                <!-- Subtitle -->
                                <p class="text-gold-dark text-xs font-semibold mb-2">
                                    <?= htmlspecialchars($t['subtitle']) ?>
                                </p>

                                <!-- Short Description -->
                                <p class="text-gray-600 text-xs leading-relaxed mb-3">
                                    <?= htmlspecialchars($t['description']) ?>
                                </p>

                                <!-- 4-Pill Compact Specs Grid -->
                                <div class="compact-spec-matrix">
                                    <div class="compact-spec-chip">
                                        <i class="fas fa-ruler-combined"></i>
                                        <div>
                                            <strong>Size</strong>
                                            <span><?= htmlspecialchars($t['dimensions']) ?></span>
                                        </div>
                                    </div>
                                    <div class="compact-spec-chip">
                                        <i class="fas fa-tree"></i>
                                        <div>
                                            <strong>Core</strong>
                                            <span><?= htmlspecialchars($t['wood']) ?></span>
                                        </div>
                                    </div>
                                    <div class="compact-spec-chip">
                                        <i class="fas fa-shield-alt"></i>
                                        <div>
                                            <strong>Surface</strong>
                                            <span><?= htmlspecialchars($t['glass']) ?></span>
                                        </div>
                                    </div>
                                    <div class="compact-spec-chip">
                                        <i class="fas fa-box"></i>
                                        <div>
                                            <strong>Storage</strong>
                                            <span><?= htmlspecialchars($t['storage']) ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Build Highlights Checklist -->
                                <ul class="space-y-1 text-xs text-gray-600 mb-4 pt-1">
                                    <?php foreach ($t['features'] as $f): ?>
                                    <li class="flex items-start gap-1.5">
                                        <i class="fas fa-check text-gold text-[10px] mt-0.5 flex-shrink-0"></i>
                                        <span><?= htmlspecialchars($f) ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="pt-3 border-t border-gray-100 flex flex-col gap-2">
                                <a href="https://wa.me/923007131249?text=<?= urlencode($t['whatsapp_msg']) ?>"
                                   class="btn-card-whatsapp"
                                   target="_blank" rel="noopener">
                                    <i class="fab fa-whatsapp text-base"></i> Order on WhatsApp
                                </a>
                                <a href="tel:+923007131249"
                                   class="inline-flex items-center justify-center gap-1.5 text-gray-600 hover:text-gold-dark text-xs font-semibold py-1.5 rounded-full hover:bg-gray-50 transition-colors">
                                    <i class="fas fa-phone-alt text-gold text-[10px]"></i> 0300 7131249
                                </a>
                            </div>

                        </div>

                    </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- Sizing & Placement Guide: How to Match with Your Sofa -->
        <section class="py-12 lg:py-16 bg-white border-y border-gray-100">
            <div class="tables-grid-container">
                <div class="text-center max-w-2xl mx-auto mb-10">
                    <span class="text-gold-dark text-xs font-bold uppercase tracking-[0.2em] mb-2 block">
                        Expert Workshop Advice
                    </span>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-charcoal mb-2">
                        How to Choose the Right Center Table Size
                    </h2>
                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                        To achieve that balanced interior look, follow our master carpenter golden rules when choosing dimensions:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center hover:border-gold/40 transition-colors">
                        <div class="w-12 h-12 mx-auto mb-3 bg-gold/15 rounded-xl flex items-center justify-center text-gold-dark text-xl">
                            <i class="fas fa-arrows-alt-v"></i>
                        </div>
                        <h3 class="font-display text-base font-bold text-charcoal mb-1.5">1. The Height Rule</h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Your center table should sit <strong>1 to 2 inches below</strong> or level with your sofa seat cushions (16" to 18" high) for effortless reach.
                        </p>
                    </div>

                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center hover:border-gold/40 transition-colors">
                        <div class="w-12 h-12 mx-auto mb-3 bg-gold/15 rounded-xl flex items-center justify-center text-gold-dark text-xl">
                            <i class="fas fa-arrows-alt-h"></i>
                        </div>
                        <h3 class="font-display text-base font-bold text-charcoal mb-1.5">2. The 2/3 Length Ratio</h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            A balanced coffee table measures roughly <strong>two-thirds the length</strong> of your main sofa. For a 7-foot sofa, a 48" table is ideal.
                        </p>
                    </div>

                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center hover:border-gold/40 transition-colors">
                        <div class="w-12 h-12 mx-auto mb-3 bg-gold/15 rounded-xl flex items-center justify-center text-gold-dark text-xl">
                            <i class="fas fa-walking"></i>
                        </div>
                        <h3 class="font-display text-base font-bold text-charcoal mb-1.5">3. 16" Legroom Clearance</h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Maintain <strong>14 to 18 inches</strong> between your sofa and the table perimeter to allow comfortable legroom and smooth walking flow.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Bring Your Own Design / Custom Order Banner -->
        <section class="py-12 lg:py-16 bg-cream">
            <div class="tables-grid-container">
                <div class="bg-gradient-to-br from-charcoal-dark to-charcoal text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-xl">
                    <div class="absolute -right-20 -bottom-20 w-72 h-72 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="relative z-10 max-w-2xl">
                        <span class="text-gold-light text-xs font-bold uppercase tracking-[0.2em] mb-2 block">
                            Have a Specific Design in Mind?
                        </span>
                        <h2 class="font-display text-2xl sm:text-3xl font-bold mb-3">
                            Send Us Any Pinterest or Instagram Table Photo
                        </h2>
                        <p class="text-gray-300 text-xs sm:text-sm leading-relaxed mb-6">
                            Seen a center table online you love? Share the photo with us. Our master carpenters in Gujrat will replicate it with your exact dimensions, wood choice, and finishes at direct factory rates.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://wa.me/923007131249?text=Hi%2C%20I%20have%20a%20photo%20of%20a%20center%20table%20I%20want%20to%20get%20custom%20made.%20Can%20I%20share%20it%20for%20a%20price%20quote%3F"
                               class="btn-card-whatsapp w-auto px-6 py-3 text-sm"
                               target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp text-lg"></i> Share Photo on WhatsApp
                            </a>
                            <a href="https://cutomsofaprices.com/contact" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-semibold text-xs sm:text-sm px-5 py-3 rounded-full transition-colors border border-white/20">
                                <i class="fas fa-map-marker-alt text-gold"></i> Visit Gujrat Workshop
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-12 lg:py-16 bg-white">
            <div class="tables-grid-container max-w-3xl">
                <div class="text-center mb-8">
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-charcoal mb-2">Frequently Asked Questions</h2>
                    <p class="text-gray-500 text-xs sm:text-sm">Everything you need to know about our custom center table orders.</p>
                </div>
                <div class="space-y-3">
                    <details class="group bg-gray-50 rounded-xl p-5 transition-colors duration-200" open>
                        <summary class="font-semibold text-charcoal text-sm sm:text-base cursor-pointer flex items-center justify-between list-none">
                            <span>What is the price of center tables in Pakistan?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-xs sm:text-sm mt-2.5 leading-relaxed">
                            Our bespoke center tables start from PKR 36,000 for contemporary dual-tone teak designs up to PKR 48,000 for solid walnut cantilever units. Because you buy directly from our Gujrat workshop, you save 30% to 50% compared to luxury showroom retail prices.
                        </p>
                    </details>
                    <details class="group bg-gray-50 rounded-xl p-5 transition-colors duration-200">
                        <summary class="font-semibold text-charcoal text-sm sm:text-base cursor-pointer flex items-center justify-between list-none">
                            <span>Can I customize the size and polish color?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-xs sm:text-sm mt-2.5 leading-relaxed">
                            Yes! Standard sizes are usually 48"×24" for rectangles and 36"×36" or 40"×40" for squares. You can provide your exact sofa measurements and room size, and we will adjust the dimensions and wood finish (dark walnut, teak, high-gloss black, or natural oak).
                        </p>
                    </details>
                    <details class="group bg-gray-50 rounded-xl p-5 transition-colors duration-200">
                        <summary class="font-semibold text-charcoal text-sm sm:text-base cursor-pointer flex items-center justify-between list-none">
                            <span>How do you handle shipping for glass tables safely?</span>
                            <span class="text-gold group-open:rotate-180 transition-transform duration-300"><i class="fas fa-chevron-down"></i></span>
                        </summary>
                        <p class="text-gray-600 text-xs sm:text-sm mt-2.5 leading-relaxed">
                            All glass tops use 8mm to 12mm shatter-resistant tempered safety glass, wrapped in bubble wrap and foam, then packed inside a reinforced wooden crate for zero-breakage doorstep delivery across Pakistan.
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
           class="btn-card-whatsapp text-xs py-2 px-3.5 shadow-sm w-auto"
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
            const tableCards = document.querySelectorAll('.table-vertical-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filter = btn.getAttribute('data-filter');
                    tableCards.forEach(card => {
                        const cat = card.getAttribute('data-category');
                        if (filter === 'all' || cat === filter) {
                            card.style.display = 'flex';
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
