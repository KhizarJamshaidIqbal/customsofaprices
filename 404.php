<?php
require __DIR__ . '/embed/lib.php';
$cd = embed_load();
$H = embed_sanitize($cd['header_html'], (bool)$cd['allow_scripts']);
$F = embed_sanitize($cd['footer_html'], (bool)$cd['allow_scripts']);

// Send 404 Status Code for proper Search Crawler alignment
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary SEO Meta Tags -->
    <title>404 Page Not Found | Custom Sofa Prices Pakistan</title>
    <meta name="description" content="The page you are looking for does not exist. Explore our wide range of premium custom sofa sets, L-shape corner sofas, and Chinyoti designs at factory prices.">
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://cutomsofaprices.com/404">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.webp">
    <link rel="apple-touch-icon" href="images/favicon.webp">

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
        }

        .font-display { font-family: 'Playfair Display', Georgia, serif; }

        .hero-overlay {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.88) 0%, rgba(45, 45, 45, 0.75) 50%, rgba(201, 169, 110, 0.22) 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(201, 169, 110, 0.15);
        }

        .collection-btn {
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .collection-btn:hover {
            border-color: #C9A96E;
            background-color: rgba(201, 169, 110, 0.08);
            transform: translateY(-2px);
        }

        /* Pulse animation for WhatsApp */
        @keyframes gentle-pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        .pulse-gentle { animation: gentle-pulse 3s ease-in-out infinite; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F0EDE5; }
        ::-webkit-scrollbar-thumb { background: #C9A96E; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #A68942; }
    </style>
</head>
<body class="bg-cream font-body antialiased flex flex-col min-h-screen justify-between">

    <!-- TOP BAR (HEADER) -->
    <?= $H ?>

    <main class="flex-grow flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Decorative subtle background pattern -->
        <div class="absolute inset-0 opacity-[0.01] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23C9A96E&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="max-w-4xl w-full text-center relative z-10">
            <!-- Large Gold 404 Marker -->
            <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-gold/10 border border-gold/20 text-gold text-5xl font-display font-bold mb-8">
                404
            </div>

            <!-- Heading -->
            <h1 class="font-display text-4xl sm:text-5xl font-bold text-charcoal leading-tight mb-4">
                Page Not Found<br>
                <span class="text-gold">Kuch Ghalat Ho Gaya Hai</span>
            </h1>

            <p class="text-gray-500 text-lg max-w-xl mx-auto mb-10 leading-relaxed">
                The link you followed may be broken, or the page has been removed. Don't worry, you can easily find your way back. Explore our custom sofa categories below.
            </p>

            <!-- Recovery Grid: Sofa Categories -->
            <div class="glass-card rounded-3xl p-6 sm:p-8 mb-10 shadow-lg text-left">
                <h2 class="font-display text-lg font-bold text-charcoal mb-4 flex items-center gap-2">
                    <i class="fas fa-couch text-gold text-sm"></i> Explore Sofa Collections
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                    <a href="/collection?id=lshape" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">L-Shape Sofa</a>
                    <a href="/collection?id=chinyoti" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Chinyoti Carved</a>
                    <a href="/collection?id=velvet" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Velvet & Leather</a>
                    <a href="/collection?id=wooden" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Wooden Frames</a>
                    <a href="/collection?id=turkish" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Turkish Sets</a>
                    <a href="/collection?id=victorian" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Victorian Sets</a>
                    <a href="/collection?id=modular" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Modular Sofas</a>
                    <a href="/collection?id=dewan" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Dewan / Diwan</a>
                    <a href="/collection?id=drawingroom" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Drawing Room</a>
                    <a href="/collection?id=accent" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Accent Chairs</a>
                    <a href="/collection?id=office" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Office Sofas</a>
                    <a href="/collection?id=chaise" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Chaise Lounge</a>
                    <a href="/collection?id=ottoman" class="collection-btn px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-charcoal hover:text-gold-dark text-center">Ottoman & Pouf</a>
                </div>
            </div>

            <!-- Recovery Actions -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="/" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-semibold px-8 py-3.5 rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all duration-300">
                    <i class="fas fa-home"></i> Back to Homepage
                </a>
                <a href="https://wa.me/923007131249?text=Hi!%20I%20got%20lost%20on%20your%20site.%20I%20am%20looking%20for%20sofa%20designs." class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-green-500 text-white font-semibold px-8 py-3.5 rounded-xl shadow-lg hover:bg-green-600 hover:scale-[1.03] transition-all duration-300" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp text-lg"></i> Direct WhatsApp Help
                </a>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?= $F ?>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/923007131249?text=Hi!%20I%20want%20to%20know%20about%20sofa%20prices." id="whatsapp-float" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 hover:scale-110 hover:shadow-xl transition-all duration-300" aria-label="Chat with us on WhatsApp" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
        <span class="absolute w-full h-full rounded-full bg-green-500/40 animate-ping"></span>
    </a>

<!-- RoomCanvas — "Try in your place" AI sofa visualizer -->
<script src="https://roomcanvas-worker.epsoldev.workers.dev/rc/widget.js" data-rc-key="rcpk_02ad3bf359949d9d4ca57d5eaab1ffa5"></script>
</body>
</html>
