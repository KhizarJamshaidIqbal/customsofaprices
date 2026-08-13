<?php
require __DIR__ . '/embed/lib.php';
$cd = embed_load();
$H = embed_sanitize($cd['header_html'], (bool)$cd['allow_scripts']);
$F = embed_sanitize($cd['footer_html'], (bool)$cd['allow_scripts']);

// All 13 collections in Our Collections section
$collections = [
    'lshape' => [
        'title' => 'L-Shape & Corner Sofas',
        'price_text' => 'Starts from PKR 65,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/lshape-sofa.webp',
        'images' => [
            'images/lshape-sofa.webp',
            'images/lshape-angle1.webp',
            'images/lshape-angle2.webp'
        ],
        'tagline' => 'Maximize your living space with modern custom alignments',
        'badge' => 'Trending',
        'desc' => 'Our L-Shape & Corner Sofas are specifically designed to optimize your living space without compromising on luxury. These modular configurations can be set up in left-hand or right-hand alignments. Perfectly suited for contemporary Pakistani homes, they are available in premium velvet, high-durability fabrics, and premium imported leathers. The high-density Master MoltyFoam core ensures that your sofa retains its shape and unmatched comfort for years to come.',
        'features' => [
            'Flexible modular alignment (L-shape / U-shape configurations)',
            'High-density Master MoltyFoam core for sagging prevention',
            'Available in 100+ premium velvet, linen, and leather fabrics',
            'Solid seasoned wood internal frame with a 10-year warranty',
            'Sleek modern aesthetics with optional brushed gold or chrome metal legs'
        ],
        'rec' => 'Highly recommended for medium to large living rooms and open-concept TV lounges. Choose a 5-seater L-shape for compact corners, or scale up to a grand 7-seater layout for wider drawing spaces.',
        'faqs' => [
            [
                'q' => 'What is the minimum room size required for an L-Shape sofa?',
                'a' => 'An L-shape sofa typically requires a minimum room size of 10x10 feet for a standard 5-seater corner sofa. *Chotay rooms ke liye hum precise measurements ke mutabik custom sizes design karte hain.*'
            ],
            [
                'q' => 'Can the alignment of the L-shape corner be changed later?',
                'a' => 'Yes, if you choose a <strong>reversible modular L-shape</strong>, you can change the alignment from Left-Hand to Right-Hand yourself. For fixed layouts, please specify your preferred corner orientation during order booking.'
            ],
            [
                'q' => 'How do you prevent the corner seat of the L-Shape sofa from sagging?',
                'a' => 'We use premium double-ply heavy-duty webbing support combined with a high-density <strong>Master MoltyFoam core</strong> to ensure the corner seat retains its firm shape and never sags.'
            ]
        ]
    ],
    'chinyoti' => [
        'title' => 'Chinyoti & Chesterfield',
        'price_text' => 'Starts from PKR 80,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/chesterfield-sofa.webp',
        'images' => [
            'images/chesterfield-sofa.webp',
            'images/chesterfield-angle1.webp',
            'images/chesterfield-angle2.webp'
        ],
        'tagline' => 'Traditional hand-carved heritage meets royal British tufting',
        'badge' => 'Classic',
        'desc' => 'A majestic fusion of two legendary furniture styles. The detailed, hand-carved wooden frames crafted by the heritage artisans of Chinyot combined with the deep, hand-tufted diamond buttons of the iconic British Chesterfield design. Using seasoned solid Sheesham (Rosewood) finished in antique gold, silver leaf, or premium walnut polish, this collection brings a sense of palace-like grandeur and prestige to any formal drawing room.',
        'features' => [
            '100% hand-carved premium seasoned Sheesham wood frame',
            'Deep diamond tufting with hand-applied buttons',
            'Polished in antique gold leaf, silver leaf, or natural wood lacquer',
            'High-resilience foam padding for maximum sitting support',
            'Stately armrests and elegant crown carving designs'
        ],
        'rec' => 'Perfect for the primary formal drawing room (Mehman Khana). Combine a main 3-seater Chesterfield sofa with two matching single-seater hand-carved Chinyoti chairs to create an authoritative seating layout.',
        'faqs' => [
            [
                'q' => 'Is the wood used in Chinyoti & Chesterfield sofas 100% solid Sheesham?',
                'a' => 'Yes, we use 100% seasoned, grade-A <strong>Sheesham (Rosewood)</strong> for all carved frames. <em>Hum local wood mix nahi karte, aur frame par lifetime structural warranty dete hain.</em>'
            ],
            [
                'q' => 'What polishing options are available for the hand-carved wood frame?',
                'a' => 'You can choose between antique gold leaf (deko leafing), silver leaf, champagne finish, or natural walnut grain polish in matte or high-gloss protective lacquer coating.'
            ],
            [
                'q' => 'How do you maintain the deep button tufting on a Chesterfield sofa?',
                'a' => 'Our tufting is done entirely by hand using deep-pulled heavy-duty industrial threads anchored directly to the solid wood frame, preventing the buttons from coming loose over time.'
            ]
        ]
    ],
    'velvet' => [
        'title' => 'Velvet & Leather Sofas',
        'price_text' => 'Starts from PKR 65,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/velvet-sofa.webp',
        'images' => [
            'images/velvet-sofa.webp',
            'images/velvet-angle1.webp',
            'images/velvet-angle2.webp'
        ],
        'tagline' => 'Immersive textures and ultra-premium modern aesthetics',
        'badge' => 'Luxury',
        'desc' => 'Indulge in absolute luxury with our Velvet and Leather Sofa collection. Featuring rich, plush velvets that catch the room lighting beautifully, and premium imported leathers that offer a sleek, sophisticated finish. These sofas utilize stain-resistant, easy-to-clean fabrics and extra-thick padding to provide a luxurious, deep-sitting comfort that instantly elevates modern urban living spaces.',
        'features' => [
            'Premium stain-resistant imported velvet options in vibrant shades',
            'Breathable, commercial-grade genuine or synthetic leather upholstery',
            'Contemporary linear silhouettes with gold metal leg accents',
            'Multi-layered foam cushioning for a plush, sinking seat feel',
            'Solid hardwood frame reinforcement at all load-bearing points'
        ],
        'rec' => 'Excellent for modern apartments, executive office cabins, and main family lounges. Deep tones like navy blue, emerald green, tan leather, and charcoal grey are highly recommended for this style.',
        'faqs' => [
            [
                'q' => 'Is the velvet fabric stain-resistant and easy to clean?',
                'a' => 'Yes, we use premium <strong>stain-resistant imported velvet</strong> (Jute-velvet or Korean velvet). Liquid spills can be easily wiped away with a dry cloth or mild upholstery cleaner.'
            ],
            [
                'q' => 'Will genuine leather get hot during summer in Pakistan?',
                'a' => 'We offer highly breathable, commercial-grade genuine leathers and premium micro-fiber leatherettes that regulate temperature and do not heat up or stick under standard home fan/AC cooling.'
            ],
            [
                'q' => 'Can I combine velvet and leatherette upholstery on the same sofa?',
                'a' => 'Absolutely. A highly recommended modern trend is using sleek leatherette on the outer shell/armrests and plush velvet on the inner seating cushions for a premium dual-texture contrast.'
            ]
        ]
    ],
    'wooden' => [
        'title' => 'Wooden Sofa Frames',
        'price_text' => 'Starts from PKR 80,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/wooden-sofa.webp',
        'images' => [
            'images/wooden-sofa.webp',
            'images/wooden-angle1.webp',
            'images/wooden-angle2.webp'
        ],
        'tagline' => 'Rustic seasoned wood elegance with premium custom poshish',
        'badge' => 'Handcrafted',
        'desc' => 'Celebrate the timeless beauty of organic woodwork. Made entirely from hand-selected, seasoned local Sheesham wood, these sofa frames boast delicate hand-carved detailing and premium polished coats that accentuate the natural grain of the wood. Custom-fitted with the upholstery fabric and foam density of your choice, this collection represents the perfect balance of lifetime structural durability and sitting comfort.',
        'features' => [
            '100% solid, seasoned Sheesham (Rosewood) construction',
            'Handcrafted wood-carved motifs on crown and armrests',
            'Premium scratch-resistant matte or high-gloss protective lacquer coating',
            'Fully customizable cushion firmness (soft, medium, or hard)',
            'Tenoned and mortised joinery for heavy-duty load resistance'
        ],
        'rec' => 'Ideal for traditional homes, open patios, wide entry hallways, or primary dining lounges. Pair with floral pattern fabrics or classic damasks to beautifully highlight the natural dark wood polish.',
        'faqs' => [
            [
                'q' => 'How do you protect the seasoned wood frames from termites?',
                'a' => 'Every seasoned Sheesham wood board undergoes a specialized <strong>chemical anti-termite treatment</strong> and kiln-drying process to ensure 100% lifetime resistance against pests and moisture warping.'
            ],
            [
                'q' => 'Can the cushions on wooden sofa frames be removed for washing?',
                'a' => 'Yes, we design custom cushions with premium hidden zippers, allowing you to easily remove the outer fabric covers for dry-cleaning or gentle washing.'
            ],
            [
                'q' => 'What polish lasts the longest on Sheesham wood frames?',
                'a' => 'Our polyurethane (PU) coat finish provides the highest protection against everyday scratches, water spills, and heat marks, preserving the wood\'s natural grain for decades.'
            ]
        ]
    ],
    'turkish' => [
        'title' => 'Turkish Sofa Sets',
        'price_text' => 'Starts from PKR 80,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/turkish-sofa.webp',
        'images' => [
            'images/turkish-sofa.webp',
            'images/turkish-angle1.webp',
            'images/turkish-angle2.webp'
        ],
        'tagline' => 'Modern European sophistication with classical gold accents',
        'badge' => 'Premium',
        'desc' => 'Inspired by the high-end furniture showrooms of Istanbul, our Turkish Sofa Sets bring modern European elegance to your home. Characterized by sleek, flowing silhouettes, curved armrests, and exquisite gold or silver metallic borders, this collection represents a lighter, contemporary approach to luxury. It features deep comfort, high-density backrest support, and sophisticated fabric contrasts.',
        'features' => [
            'Flowing Turkish contours with ergonomic curvature',
            'Subtle gold, rose-gold, or chrome metallic outline trims',
            'Premium textured fabrics in pastel and soft neutral color palettes',
            'Spacious seating cushions for elevated hosting comfort',
            'Solid internal wood frame with specialized steel leg stabilizers'
        ],
        'rec' => 'Perfect for contemporary drawing rooms, premium lounges, and upscale bridal rooms. Highly recommended in light shades like off-white, beige, pastel pink, or light teal, accented with gold-bordered side tables.',
        'faqs' => [
            [
                'q' => 'What makes a Turkish Sofa Set different from standard Pakistani designs?',
                'a' => 'Turkish sofas feature modern European curved contours, lower-profile ergonomics, spacious seating cushions, and subtle metallic borders (gold or chrome outline trims) rather than heavy wood carvings.'
            ],
            [
                'q' => 'What type of metal is used in the gold trim borders?',
                'a' => 'We use premium electroplated, rust-proof <strong>stainless steel trims</strong> (gold, rose gold, or silver) that do not tarnish, lose shine, or peel over time.'
            ],
            [
                'q' => 'Can the Turkish sofa sets be customized in dynamic pastel colors?',
                'a' => 'Yes, Turkish designs look spectacular in pastel and soft neutral color palettes like off-white, beige, powder pink, mint green, and light teal. We provide 100+ pastel fabric cards on booking.'
            ]
        ]
    ],
    'victorian' => [
        'title' => 'Victorian & Classic Sofas',
        'price_text' => 'Starts from PKR 85,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/victorian-sofa.webp',
        'images' => [
            'images/victorian-sofa.webp',
            'images/victorian-angle1.webp',
            'images/victorian-angle2.webp'
        ],
        'tagline' => 'Royal historical grandeur with ornate hand-painted detailing',
        'badge' => 'Royal',
        'desc' => 'Step into a world of royal heritage. Our Victorian and Classic Sofa collection features high arched backs, curved cabriole legs, and highly intricate floral carvings. Finished in hand-applied antique gold leafing or silver highlights, and upholstered in premium heavy brocades or rich velvets, these sofas are designed for homes that appreciate the grand elements of classical European nobility.',
        'features' => [
            'Exquisite, high arched crown carving with royal motifs',
            'Hand-applied antique gold leaf, silver leaf, or walnut finish',
            'Upholstered in heavy-duty brocade, premium damask, or royal velvet',
            'High-density master foam cushions with orthopaedic spring support',
            'Double-reinforced cabriole legs for stability'
        ],
        'rec' => 'Exclusively designed for high-ceiling, grand drawing rooms. We recommend placing a 3-seater Victorian sofa in the center as a royal showcase piece, flanked by two single chairs.',
        'faqs' => [
            [
                'q' => 'What polishes and leafing techniques are used for Victorian sofas?',
                'a' => 'We use premium hand-applied <strong>antique gold leafing</strong> (deco leaf) or silver leafing, finished with an ultra-thin dust-resistant protective seal to prevent discoloration over the years.'
            ],
            [
                'q' => 'Are Victorian sofas suitable for regular everyday TV lounge use?',
                'a' => 'Victorian sofas have high arched backs and ornate carvings, designed primarily as formal showcase pieces for drawing rooms (Mehman Khana). For casual daily lounging, we recommend our L-shape or modular collections.'
            ],
            [
                'q' => 'What fabric patterns work best with classical Victorian carved frames?',
                'a' => 'Heavy brocades, premium damasks, and rich royal velvets with classic floral or royal motifs beautifully complement the gold leafing and grand architecture of Victorian frames.'
            ]
        ]
    ],
    'modular' => [
        'title' => 'Modular & Sectional Sofas',
        'price_text' => 'Starts from PKR 55,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/modular-sofa.webp',
        'images' => [
            'images/modular-sofa.webp',
            'images/modular-angle1.webp',
            'images/modular-angle2.webp'
        ],
        'tagline' => 'Infinitely adaptable seating plans for smart modern living',
        'badge' => 'Customizable',
        'desc' => 'Designed to adapt to your shifting lifestyle, our Modular and Sectional Sofas can be rearranged, expanded, or customized to fit any room shape. Each seating block acts as a standalone unit, allowing you to configure straight lines, L-shapes, or comprehensive U-shape layouts. Boasting low-profile designs and modern block stitching, this collection is perfect for open-plan houses.',
        'features' => [
            'Fully modular design allowing infinite configuration changes',
            'Deep lounge-style seats with contemporary low-profile alignment',
            'Heavy-duty hidden interlocking steel connectors under each card',
            'Durable, modern block-stitched fabrics (stain and water-resistant)',
            'Multi-layered foam padding with high-resiliency webbed suspension'
        ],
        'rec' => 'Ideal for modern open-concept apartments, home theater basements, and active family lounges. Excellent for larger families who love hosting casual gatherings.',
        'faqs' => [
            [
                'q' => 'Can I expand a modular sofa set by adding more seats later?',
                'a' => 'Yes, because each seating block acts as a standalone unit with hidden interlocking steel connectors underneath, you can order additional middle seats or corner modules at any time to expand your layout.'
            ],
            [
                'q' => 'Do modular sofa pieces slide apart when sitting down?',
                'a' => 'No, we install heavy-duty hidden <strong>interlocking steel alligator clips</strong> beneath each module to secure them firmly together. They only separate when lifted and unhooked intentionally.'
            ],
            [
                'q' => 'Is modular block-stitched fabric easy to maintain?',
                'a' => 'Yes, we use thick, high-durability modern fabrics (stain and water-resistant Jute/Linen blends) that stand up to active family gatherings and are extremely easy to vacuum and spot-clean.'
            ]
        ]
    ],
    'dewan' => [
        'title' => 'Dewan & Diwan Sofas',
        'price_text' => 'Starts from PKR 195,000',
        'price_type' => 'Full Price',
        'image' => 'images/dewan-sofa.webp',
        'images' => [
            'images/dewan-sofa.webp',
            'images/dewan-angle1.webp',
            'images/dewan-angle2.webp'
        ],
        'tagline' => 'Traditional single-armed luxury daybeds for ultimate relaxation',
        'badge' => 'Traditional',
        'desc' => 'The Dewan (or Diwan) is a beloved, timeless staple of classic South Asian home decor. Featuring an elegant single curved armrest, a beautifully carved wooden back support, and matching cylindrical bolster pillows (Gao-Takya), our Dewans are perfect for reading, relaxing, or afternoon naps. Made from seasoned wood and premium fabrics, they combine cultural heritage with versatile seating utility.',
        'features' => [
            'Classic asymmetrical single-armrest layout for daybed utility',
            'Intricate hand-carved floral patterns along the wood borders',
            'Includes two premium matching Gao-Takya cylindrical bolster cushions',
            'Polished in antique gold leaf, silver leaf, or rich dark walnut',
            'Comfortable flat-bed style high-density foam mattress top'
        ],
        'rec' => 'Perfect as an accent seating option in drawing rooms, a cozy reading bed in bedrooms, or as a standalone window seat in large hallways and open lounges.',
        'faqs' => [
            [
                'q' => 'What is the typical length of a custom Dewan/Diwan daybed?',
                'a' => 'Our standard custom Dewans are 6 feet in length and 2.5 feet in width, providing the perfect daybed size for relaxing. We can customize the dimensions to match your specific corner or window alcove.'
            ],
            [
                'q' => 'Do Dewan daybeds include the bolster pillows (Gao-Takya)?',
                'a' => 'Yes, every Dewan order includes two matching cylindrical bolster pillows (Gao-Takya) and customized throw cushions upholstered in your selected premium fabric.'
            ],
            [
                'q' => 'Can a Dewan be used as an extra bed for overnight guests?',
                'a' => 'Absolutely. Because we use a flat-bed style, high-density <strong>Master MoltyFoam mattress top</strong>, it provides excellent orthopaedic back support and comfort for sleeping.'
            ]
        ]
    ],
    'drawingroom' => [
        'title' => 'Drawing Room Sofa Sets',
        'price_text' => 'Starts from PKR 85,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/drawing-room-set.webp',
        'images' => [
            'images/drawing-room-set.webp',
            'images/drawingroom-angle1.webp'
        ],
        'tagline' => 'Complete formal sofa arrangements (3+2+1+1) for hosting guests',
        'badge' => 'Best Seller',
        'desc' => 'Our Drawing Room Sofa Sets are designed to provide complete, coordinated formal seating plans. Upholstered in grand 7-seater arrangements (3-seater + 2-seater + two single chairs), this collection focuses on elegant symmetry, formal high backrests, and upright sitting comfort. Built with seasoned wood frames and luxurious fabrics to make a lasting impression on your guests.',
        'features' => [
            'Complete coordinated sets (available in 5, 7, or 9-seater options)',
            'Formal upright high-back design for comfortable hosting',
            'Symmetrical design lines with coordinating accent cushions included',
            'Premium high-grade textured fabrics, heavy chenilles, or damasks',
            'Corner-blocked, double-reinforced solid wood frames'
        ],
        'rec' => 'The absolute premier choice for your main formal guest hosting room (Mehman Khana). Arrange symmetrically around a large center coffee table to create the ideal conversation circle.',
        'faqs' => [
            [
                'q' => 'What is the standard configuration of a Drawing Room Sofa Set in Pakistan?',
                'a' => 'The standard formal guest hosting arrangement is a <strong>7-seater set (3-seater + 2-seater + 2 single chairs)</strong>. We also offer 5-seater, 6-seater, or grand 9-seater configurations based on your space.'
            ],
            [
                'q' => 'Why are drawing room seats designed to be firmer and more upright?',
                'a' => 'Formal drawing rooms are built for hosting guests and conversation, which require upright, comfortable posture. We use orthopaedic spring foundations and high-resilience foam to maintain an elegant, firm seating structure.'
            ],
            [
                'q' => 'Does the price include coordinating accent cushions?',
                'a' => 'Yes, all our complete drawing room sets include customized coordinating throw cushions and accent pillows in contrasting fabrics at no extra cost.'
            ]
        ]
    ],
    'accent' => [
        'title' => 'Accent & Single Seater',
        'price_text' => 'Starts from PKR 40,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/accent-chair.webp',
        'images' => [
            'images/accent-chair.webp'
        ],
        'tagline' => 'Stunning standalone design pieces to add color and character',
        'badge' => 'Compact',
        'desc' => 'Inject a burst of color, texture, and creative shape into any empty room corner. Our Accent and Single Seater collection features statement chairs with architectural profiles, slender gold metal legs, and premium upholstery in vibrant shades. Perfect as a contrasting element to your main sofa set, or as a cozy standalone reading spot.',
        'features' => [
            'Vibrant accent color options and unique modern geometries',
            'Elegant gold-plated or textured black powder-coated metal legs',
            'Plush luxury velvet, fuzzy boucle, or premium imported fabric',
            'Ergonomic backrest support with curved comfort shell designs',
            'Compact footprint suitable for any empty corner'
        ],
        'rec' => 'Perfect for master bedroom corners, vanity rooms, dressing areas, entryways, or as contrasting side chairs flanking a primary living room sofa set.',
        'faqs' => [
            [
                'q' => 'What is the purpose of adding an accent chair to a living room?',
                'a' => 'Accent chairs inject a burst of color, texture, and creative shape to empty room corners. They serve as stunning statement pieces that break the monotony of matching sofa sets.'
            ],
            [
                'q' => 'Are the metal legs on accent chairs rust-proof?',
                'a' => 'Yes, all our accent chairs use premium electroplated gold steel legs or textured black powder-coated iron frames that are fully rust-proof and highly durable.'
            ],
            [
                'q' => 'Can I customize the fabric texture to be fuzzy Boucle?',
                'a' => 'Absolutely. We offer a wide range of plush velvets, fuzzy modern boucle fabrics, and heavy textured linens to make your single-seater accent chair pop.'
            ]
        ]
    ],
    'office' => [
        'title' => 'Office & Reception Sofas',
        'price_text' => 'Starts from PKR 30,000',
        'price_type' => '1 Seater Price',
        'image' => 'images/office-sofa.webp',
        'images' => [
            'images/office-sofa.webp'
        ],
        'tagline' => 'Professional-grade high-durability seating for corporate cabins',
        'badge' => 'Commercial',
        'desc' => 'Create a powerful, professional first impression in your corporate cabin, reception lobby, or waiting lounge. Engineered to withstand heavy everyday use, our Office & Reception Sofas feature sleek modern linear profiles, easy-to-clean commercial leathers or synthetic fabrics, and reinforced frames that maintain their neat, firm appearance for years.',
        'features' => [
            'Wear-resistant commercial-grade leather, leatherette, or fabric',
            'Sleek, professional linear design with a minimalist footprint',
            'Reinforced steel or solid seasoned hardwood frame foundation',
            'Firm, high-density orthopaedic foam cushioning to prevent sagging',
            'Low maintenance - extremely easy to wipe down, dust, and sanitize'
        ],
        'rec' => 'Essential for corporate lobbies, executive cabins, medical clinics, reception desks, waiting rooms, and professional office lounges.',
        'faqs' => [
            [
                'q' => 'How long does office reception upholstery last under heavy public use?',
                'a' => 'We use heavy-duty, commercial-grade double-ply leatherette or wear-resistant synthetic fabrics rated for high-traffic environments, ensuring the upholstery lasts for years without cracking or peeling.'
            ],
            [
                'q' => 'Are reception sofas easy to clean and sanitize daily?',
                'a' => 'Yes, our commercial leatherette and steel frame office sofas can be wiped down daily with standard disinfectants, alcohol wipes, or damp cloths without damaging the color or material.'
            ],
            [
                'q' => 'Do you offer firm orthopaedic foam options for corporate seating?',
                'a' => 'Yes, we utilize high-density, firm orthopaedic foam to support correct sitting posture and prevent the cushions from sagging or losing shape under continuous commercial use.'
            ]
        ]
    ],
    'chaise' => [
        'title' => 'Chaise Lounge',
        'price_text' => 'Starts from PKR 65,000',
        'price_type' => 'Full Price',
        'image' => 'images/chaise-lounge.webp',
        'images' => [
            'images/chaise-lounge.webp'
        ],
        'tagline' => 'Elongated luxury seating for reclining in absolute style',
        'badge' => 'Elegant',
        'desc' => 'The absolute pinnacle of luxury lounging. Our Chaise Lounges feature an elongated seat designed specifically for stretching out your legs and relaxing in style. Upholstered in premium button-tufted velvet and supported by slender polished legs, this collection adds a touch of classic Hollywood glamour and elegant relaxation to any luxury home.',
        'features' => [
            'Elongated single-seat lounging bed design',
            'Deep hand-tufted buttons along the back and seat cushion',
            'Elegant sweeping curved backrest and arm support details',
            'Premium ultra-soft velvet and highly durable luxury fabrics',
            'Sturdy seasoned wood frame with custom wooden or metal legs'
        ],
        'rec' => 'Perfect positioned next to a large master bedroom window, in a master suite dressing area, or as a contrasting corner accent in a luxury drawing room.',
        'faqs' => [
            [
                'q' => 'What is the difference between a Dewan and a Chaise Lounge?',
                'a' => 'A Dewan is a traditional daybed with a carved wooden back and bolster pillows, whereas a Chaise Lounge features modern Hollywood-style deep button tufting, an elongated sweeping curved backrest, and an elegant side-arm support.'
            ],
            [
                'q' => 'Can a chaise lounge be customized as left-facing or right-facing?',
                'a' => 'Yes, you can choose either a Left-Arm or Right-Arm configuration depending on where the chaise lounge will be positioned relative to your room\'s windows or main walls.'
            ],
            [
                'q' => 'What is the best fabric for a button-tufted chaise lounge?',
                'a' => 'Ultra-soft premium velvet is the absolute best fabric, as it gorgeously catches room lighting across the deep tufted buttons and curved edges, enhancing the luxurious feel.'
            ]
        ]
    ],
    'ottoman' => [
        'title' => 'Ottoman & Poufs',
        'price_text' => 'Starts from PKR 170,000',
        'price_type' => 'Full Price',
        'image' => 'images/ottoman-poufs.webp',
        'images' => [
            'images/ottoman-poufs.webp'
        ],
        'tagline' => 'Highly versatile footrests, coffee table alternatives, and extra seats',
        'badge' => 'Accessory',
        'desc' => 'The ultimate multi-functional accessories for a complete living space. Our Ottoman and Poufs collection includes premium tufted storage benches, cylindrical poufs, and settees that serve as comfortable footrests, chic coffee table alternatives, or extra guest seating. Made with the exact same high-density foam and fabric ranges as our main sofas.',
        'features' => [
            'Set includes matching multi-functional seating pieces',
            'Optional built-in deep storage space compartment inside benches',
            'Solid, lightweight seasoned internal wood frame framing',
            'Luxurious tufted velvet fabric with gold-plated metallic base rings',
            'Extremely easy to move around for flexible seating layouts'
        ],
        'rec' => 'Place in front of your main L-shape sofa as a footrest, in the center of a modular sofa set as a soft coffee table, or beneath a vanity mirror console.',
        'faqs' => [
            [
                'q' => 'Can a storage ottoman serve as a coffee table alternative?',
                'a' => 'Yes, our firm tufted flat-top ottomans are perfect coffee table alternatives. You can place a serving tray on top for drinks and books, while storing blankets and cushions inside.'
            ],
            [
                'q' => 'How strong is the internal frame of the ottoman benches?',
                'a' => 'We construct all ottoman frames with double-ply seasoned local hardwood, making them sturdy enough to comfortably support up to 150 kg of weight as extra guest seating.'
            ],
            [
                'q' => 'Do you customize the metallic base rings in chrome or black?',
                'a' => 'Yes, the circular poufs and storage benches can be customized with brushed gold metallic base rings, chrome finishes, or plain wood/fabric borders.'
            ]
        ]
    ]
];

// ID handling: empty -> default to lshape; unknown -> send a real 404 status
// (prevents soft-404s / unbounded indexable URLs from arbitrary ?id= values).
$id = isset($_GET['id']) ? strtolower(trim($_GET['id'])) : 'lshape';
if ($id === '') {
    $id = 'lshape';
}
if (!array_key_exists($id, $collections)) {
    http_response_code(404);
    header('Cache-Control: no-store, max-age=0');
    $id = 'lshape';
}

// ===== Attach sub-products (Level 2 listing -> Level 3 detail) for ANY collection that
// has a data/<id>-products.php file. Drop in a data file to enable a collection. =====
foreach (array_keys($collections) as $cid) {
    $pf = __DIR__ . '/data/' . $cid . '-products.php';
    if (is_file($pf)) {
        $collections[$cid]['products'] = require $pf;
    }
}

$c = $collections[$id];

// Page mode: a collection that HAS a 'products' array shows a LISTING (Level 2);
// ?p=<slug> opens that product's DETAIL (Level 3). Collections without products = single detail (old behaviour).
$hasProducts = isset($c['products']) && is_array($c['products']);
$mode        = 'detail';
$p           = '';
$parentId    = $id;
$parentTitle = $c['title'];

if ($hasProducts) {
    $p = isset($_GET['p']) ? preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['p'])) : '';
    if ($p !== '' && isset($c['products'][$p])) {
        $slug = $p;
        $c = $c['products'][$p];                 // detail: the existing detail markup uses $c
        // auto-include any generated angle images (slug-1.webp, slug-2.webp, ...)
        $found = glob(__DIR__ . '/images/' . $parentId . '/' . $slug . '-*.webp');
        if ($found) {
            sort($found);
            $c['images'] = array_map(static fn($f) => 'images/' . $parentId . '/' . basename($f), $found);
            $c['image']  = $c['images'][0];
        }
        $mode = 'detail';
    } else {
        if ($p !== '') { http_response_code(404); $p = ''; }
        $mode = 'listing';
    }
}

// ---- SEO vars (mode-aware) ----
if ($mode === 'listing') {
    $pageTitle = $c['title'] . ' - ' . count($c['products']) . ' Styles & Prices | Custom Sofa Prices Gujrat';
    $metaDesc  = 'Browse ' . count($c['products']) . ' ' . $c['title'] . ' styles, custom-made from ' . $c['price_text'] . '. Choose your design, then customise size, fabric & colour. Factory-direct from Gujrat, delivered across Pakistan.';
    $canonical = 'https://cutomsofaprices.com/collection.php?id=' . $parentId;
    $ogImage   = 'https://cutomsofaprices.com/' . $c['image'];
} else {
    $pageTitle = $c['title'] . ' Price in Pakistan | Custom Sofa Prices Gujrat';
    $metaDesc  = 'Explore ' . $c['title'] . ' starting from ' . $c['price_text'] . '. 100% custom-made sizes, fabrics & colours. Delivered across Pakistan from Gujrat.';
    $canonical = 'https://cutomsofaprices.com/collection.php?id=' . $parentId . ($p !== '' ? '&p=' . $p : '');
    $ogImage   = 'https://cutomsofaprices.com/' . $c['image'];
}
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
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDesc, ENT_QUOTES) ?>">
    <meta name="keywords" content="<?= strtolower($c['title']) ?> price, custom sofa pakistan, <?= strtolower($c['title']) ?> design, Gujrat furniture showroom, bespoke sofas">
    <meta name="author" content="Custom Sofa Prices Pakistan">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES) ?>">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="alternate" type="application/ld+json" href="knowledge-graph.jsonld">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/favicon.webp">
    <link rel="apple-touch-icon" href="images/favicon.webp">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($metaDesc, ENT_QUOTES) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES) ?>">
    <meta property="og:locale" content="en_PK">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($metaDesc, ENT_QUOTES) ?>">

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

        .hero-overlay {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.78) 0%, rgba(45, 45, 45, 0.55) 50%, rgba(201, 169, 110, 0.22) 100%);
        }

        .card-hover {
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px -12px rgba(0, 0, 0, 0.12);
        }

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

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid rgba(201, 169, 110, 0.18);
        }

        .form-input {
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-input:focus {
            border-color: #C9A96E;
            box-shadow: 0 0 0 3px rgba(201, 169, 110, 0.15);
            outline: none;
        }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F0EDE5; }
        ::-webkit-scrollbar-thumb { background: #C9A96E; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #A68942; }

        .img-zoom-container {
            overflow: hidden;
            border-radius: 1.25rem;
            position: relative;
            border: 1px solid rgba(201, 169, 110, 0.15);
        }
        .img-zoom-container img {
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.2s ease-in-out;
        }
        .img-zoom-container:hover img {
            transform: scale(1.05);
        }
    </style>

<?php if ($mode === 'detail'): ?>
    <!-- Schema.org Product Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?= htmlspecialchars($c['title'], ENT_QUOTES) ?>",
        "sku": "CSP-<?= strtoupper($parentId) ?><?= $p !== '' ? '-' . strtoupper($p) : '' ?>",
        "category": "Sofa",
        "material": "Seasoned wood frame; premium upholstery (velvet, leather, fabric)",
        "image": "<?= htmlspecialchars($ogImage, ENT_QUOTES) ?>",
        "description": "<?= htmlspecialchars(strip_tags($c['desc']), ENT_QUOTES) ?> Custom sizing, fabrics and colours available.",
        "brand": {
            "@type": "Brand",
            "name": "Custom Sofa Prices Pakistan"
        },
        "offers": {
            "@type": "Offer",
            "priceCurrency": "PKR",
            "price": "<?= preg_replace('/[^0-9]/', '', $c['price_text']) ?>",
            "priceValidUntil": "<?= date('Y-12-31') ?>",
            "itemCondition": "https://schema.org/NewCondition",
            "availability": "https://schema.org/InStock",
            "url": "<?= htmlspecialchars($canonical, ENT_QUOTES) ?>"
        }
    }
    </script>

    <!-- Schema.org FAQPage Structured Data (SEO & AEO) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php foreach ($c['faqs'] as $index => $faq): ?>
            {
                "@type": "Question",
                "name": "<?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?>",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?= htmlspecialchars(strip_tags($faq['a']), ENT_QUOTES, 'UTF-8') ?>"
                }
            }<?= $index < count($c['faqs']) - 1 ? ',' : '' ?>
            <?php endforeach; ?>
        ]
    }
    </script>

    <!-- Schema.org BreadcrumbList -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://cutomsofaprices.com/" },
            { "@type": "ListItem", "position": 2, "name": "Collections", "item": "https://cutomsofaprices.com/#collections" }<?php if ($hasProducts): ?>,
            { "@type": "ListItem", "position": 3, "name": "<?= htmlspecialchars($parentTitle, ENT_QUOTES) ?>", "item": "https://cutomsofaprices.com/collection.php?id=<?= $parentId ?>" },
            { "@type": "ListItem", "position": 4, "name": "<?= htmlspecialchars($c['title'], ENT_QUOTES) ?>", "item": "<?= htmlspecialchars($canonical, ENT_QUOTES) ?>" }<?php else: ?>,
            { "@type": "ListItem", "position": 3, "name": "<?= htmlspecialchars($c['title'], ENT_QUOTES) ?>", "item": "<?= htmlspecialchars($canonical, ENT_QUOTES) ?>" }<?php endif; ?>
        ]
    }
    </script>
<?php else: ?>
    <!-- Schema.org ItemList (collection listing) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "<?= htmlspecialchars($c['title'], ENT_QUOTES) ?> Styles",
        "numberOfItems": <?= count($c['products']) ?>,
        "itemListElement": [
            <?php $li = 0; foreach ($c['products'] as $pslug => $pr): $li++; ?>
            {
                "@type": "ListItem",
                "position": <?= $li ?>,
                "name": "<?= htmlspecialchars($pr['title'], ENT_QUOTES) ?>",
                "url": "https://cutomsofaprices.com/collection.php?id=<?= $parentId ?>&p=<?= $pslug ?>"
            }<?= $li < count($c['products']) ? ',' : '' ?>
            <?php endforeach; ?>
        ]
    }
    </script>

    <!-- Schema.org BreadcrumbList -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://cutomsofaprices.com/" },
            { "@type": "ListItem", "position": 2, "name": "Collections", "item": "https://cutomsofaprices.com/#collections" },
            { "@type": "ListItem", "position": 3, "name": "<?= htmlspecialchars($c['title'], ENT_QUOTES) ?>", "item": "<?= htmlspecialchars($canonical, ENT_QUOTES) ?>" }
        ]
    }
    </script>
<?php endif; ?>
</head>
<body class="bg-cream font-body antialiased">

    <!-- HEADER -->
    <?= $H ?>

    <main id="main-content">

<?php if ($mode === 'listing'): ?>
        <!-- ============================================ -->
        <!-- LEVEL 2: COLLECTION LISTING (choose a style)  -->
        <!-- ============================================ -->
        <section class="relative min-h-[30vh] flex items-center overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-charcoal-dark"></div>
                <div class="absolute inset-0 opacity-25" style="background-image: url('<?= $c['image'] ?>'); background-size: cover; background-position: center;"></div>
                <div class="hero-overlay absolute inset-0"></div>
                <div class="absolute top-0 right-0 w-96 h-96 bg-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            </div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center w-full">
                <nav aria-label="Breadcrumb" class="mb-5">
                    <ol class="inline-flex items-center gap-2 text-xs text-white/60">
                        <li><a href="https://cutomsofaprices.com/" class="hover:text-gold transition-colors duration-300"><i class="fas fa-home mr-1"></i>Home</a></li>
                        <li><i class="fas fa-chevron-right text-[8px] text-gold/60"></i></li>
                        <li><a href="https://cutomsofaprices.com/#collections" class="hover:text-gold transition-colors duration-300">Collections</a></li>
                        <li><i class="fas fa-chevron-right text-[8px] text-gold/60"></i></li>
                        <li class="text-gold font-medium"><?= htmlspecialchars($c['title']) ?></li>
                    </ol>
                </nav>
                <span class="inline-block bg-gold/20 text-gold-light border border-gold/30 text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-full mb-4"><?= count($c['products']) ?> Custom Styles</span>
                <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-[1.1] mb-4"><?= htmlspecialchars($c['title']) ?></h1>
                <p class="text-base sm:text-lg text-white/70 max-w-2xl mx-auto leading-relaxed">Apna favourite style choose karein &mdash; har design 100% custom-made hai, aapke room size, fabric aur colour ke mutabik. Starting from <?= htmlspecialchars($c['price_text']) ?>.</p>
            </div>
        </section>

        <section class="py-14 lg:py-20 bg-cream">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 reveal">
                    <span class="inline-flex items-center gap-2 text-gold-dark font-semibold text-sm uppercase tracking-[0.2em] mb-3"><span class="w-8 h-px bg-gold"></span> Choose Your Style <span class="w-8 h-px bg-gold"></span></span>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-charcoal">All <?= htmlspecialchars($c['title']) ?> Designs</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                    <?php foreach ($c['products'] as $pslug => $pr): ?>
                    <article class="group card-hover bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden reveal">
                        <a href="collection.php?id=<?= $parentId ?>&p=<?= $pslug ?>" class="block" aria-label="View <?= htmlspecialchars($pr['title'], ENT_QUOTES) ?>">
                            <div class="relative overflow-hidden aspect-[4/3]">
                                <img src="<?= $pr['image'] ?>" alt="<?= htmlspecialchars($pr['title'], ENT_QUOTES) ?> - L-shape sofa price in Pakistan, Gujrat" class="w-full h-full object-cover img-zoom" width="600" height="450" loading="lazy" decoding="async">
                                <div class="absolute top-4 left-4 bg-gold/90 text-white text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-lg backdrop-blur-sm"><?= htmlspecialchars($pr['badge']) ?></div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-charcoal mb-2 group-hover:text-gold-dark transition-colors duration-300"><?= htmlspecialchars($pr['title']) ?></h3>
                                <p class="text-gray-500 text-sm leading-relaxed mb-4"><?= htmlspecialchars($pr['tagline']) ?></p>
                                <div class="flex items-center justify-between">
                                    <span class="text-gold-dark font-bold text-sm"><?= htmlspecialchars($pr['price_text']) ?></span>
                                    <span class="inline-flex items-center gap-1.5 text-charcoal font-semibold text-sm group-hover:gap-3 transition-all duration-300">View Details <i class="fas fa-arrow-right text-xs"></i></span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
<?php else: ?>

        <!-- ============================================ -->
        <!-- HERO SECTION -->
        <!-- ============================================ -->
        <section id="collection-hero" class="relative min-h-[35vh] lg:min-h-[40vh] flex items-center overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-charcoal-dark"></div>
                <div class="absolute inset-0 opacity-25" style="background-image: url('<?= $c['image'] ?>'); background-size: cover; background-position: center;"></div>
                <div class="hero-overlay absolute inset-0"></div>
                <div class="absolute top-0 right-0 w-96 h-96 bg-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center w-full">
                <!-- Breadcrumb -->
                <nav aria-label="Breadcrumb" class="mb-6">
                    <ol class="inline-flex items-center gap-2 text-xs text-white/60">
                        <li><a href="https://cutomsofaprices.com/" class="hover:text-gold transition-colors duration-300"><i class="fas fa-home mr-1"></i>Home</a></li>
                        <li><i class="fas fa-chevron-right text-[8px] text-gold/60"></i></li>
                        <li><a href="https://cutomsofaprices.com/#collections" class="hover:text-gold transition-colors duration-300">Collections</a></li>
                        <li><i class="fas fa-chevron-right text-[8px] text-gold/60"></i></li>
                        <li class="text-gold font-medium"><?= $c['title'] ?></li>
                    </ol>
                </nav>

                <span class="inline-block bg-gold/20 text-gold-light border border-gold/30 text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-full mb-4">
                    <?= $c['badge'] ?> Collection
                </span>
                <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-[1.1] mb-4">
                    <?= $c['title'] ?>
                </h1>
                <p class="text-base sm:text-lg text-white/70 max-w-2xl mx-auto leading-relaxed">
                    <?= $c['tagline'] ?>
                </p>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- COLLECTION DETAIL CONTENT -->
        <!-- ============================================ -->
        <section id="collection-details" class="py-12 lg:py-20 bg-cream">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- LEFT COLUMN: Product Image Gallery & Customization Guide (5 Columns) -->
                    <div class="lg:col-span-5 space-y-6 reveal">
                        <!-- Main Zoomable Image -->
                        <div class="img-zoom-container aspect-[4/3] shadow-md rounded-2xl overflow-hidden border border-gold/15 bg-white">
                            <img id="primary-image" src="<?= $c['images'][0] ?>" alt="Bespoke <?= strtolower($c['title']) ?> custom design - Custom Sofa Prices Pakistan" class="w-full h-full object-cover" width="600" height="450" style="transition: opacity 0.15s ease-in-out;">
                        </div>

                        <!-- Thumbnail Gallery Row -->
                        <?php if (count($c['images']) > 1): ?>
                        <div class="grid grid-cols-3 gap-3">
                            <?php foreach ($c['images'] as $index => $img): ?>
                            <button onclick="changeActiveImage('<?= $img ?>', this)" 
                                    class="aspect-[4/3] rounded-xl overflow-hidden border-2 transition-all duration-300 focus:outline-none <?= $index === 0 ? 'border-gold shadow-md scale-[1.02]' : 'border-gray-200 hover:border-gold/50' ?>"
                                    aria-label="View layout option <?= $index + 1 ?>">
                                <img src="<?= $img ?>" alt="<?= htmlspecialchars($c['title'], ENT_QUOTES) ?> view <?= $index + 1 ?> - Gujrat, Pakistan" class="w-full h-full object-cover" width="200" height="150" loading="lazy" decoding="async">
                            </button>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Special Customization Guide Banner -->
                        <div class="glass-card rounded-2xl p-6 shadow-sm border border-gold/10">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-gold/10 rounded-xl flex items-center justify-center text-gold-dark flex-shrink-0">
                                    <i class="fas fa-sliders-h text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-display text-base font-bold text-charcoal mb-1">Aapki Pasand Ka Sofa</h3>
                                    <p class="text-xs text-gray-500 leading-relaxed">
                                        Yeh product <strong>100% custom-made</strong> hai. Aap apni marzi ke mutabik is ka color, fabric (Velvet, Leatherette, Jute), aur dimensions change karwa sakte hain.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Quality Badges -->
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded-xl p-3 border border-gray-100 text-center shadow-xs">
                                <i class="fas fa-shield-alt text-gold text-lg mb-1.5 block"></i>
                                <span class="text-[10px] font-semibold text-charcoal block">10-Year Frame</span>
                            </div>
                            <div class="bg-white rounded-xl p-3 border border-gray-100 text-center shadow-xs">
                                <i class="fas fa-truck text-gold text-lg mb-1.5 block"></i>
                                <span class="text-[10px] font-semibold text-charcoal block">PK Delivery</span>
                            </div>
                            <div class="bg-white rounded-xl p-3 border border-gray-100 text-center shadow-xs">
                                <i class="fas fa-couch text-gold text-lg mb-1.5 block"></i>
                                <span class="text-[10px] font-semibold text-charcoal block">Master Foam</span>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Details & Order Box (7 Columns) -->
                    <div class="lg:col-span-7 space-y-6 reveal" style="transition-delay: 0.1s;">
                        
                        <!-- Main Detail Box -->
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100/80 space-y-6">
                            
                            <div class="flex flex-wrap items-center justify-between gap-4 border-b border-gray-50 pb-5">
                                <div>
                                    <span class="text-[11px] text-gold-dark font-bold uppercase tracking-wider block mb-1">Estimated Pricing</span>
                                    <span class="text-2xl sm:text-3xl font-extrabold text-charcoal"><?= $c['price_text'] ?></span>
                                </div>
                                <span class="inline-block bg-charcoal text-white text-xs font-bold px-3.5 py-2 rounded-lg">
                                    <i class="fas fa-info-circle mr-1 text-gold text-[10px]"></i> <?= $c['price_type'] ?>
                                </span>
                            </div>

                            <div class="space-y-4">
                                <h2 class="font-display text-xl sm:text-2xl font-bold text-charcoal leading-snug">
                                    Bespoke <?= $c['title'] ?> Detail & Features
                                </h2>
                                <p class="text-gray-500 text-sm leading-relaxed">
                                    <?= $c['desc'] ?>
                                </p>
                            </div>

                            <!-- Bulleted Features -->
                            <div class="space-y-3 pt-2">
                                <h3 class="text-xs font-bold uppercase text-gold-dark tracking-wider">Premium Technical Specifications:</h3>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-gray-500">
                                    <?php foreach ($c['features'] as $feature): ?>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-gold mt-0.5 flex-shrink-0 text-[10px]"></i>
                                        <span><?= $feature ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <!-- Design Recommendation -->
                            <div class="bg-amber-500/5 border border-amber-500/10 rounded-xl p-4 space-y-1.5">
                                <h4 class="text-xs font-bold text-amber-700 uppercase tracking-wider flex items-center gap-1.5">
                                    <i class="fas fa-lightbulb"></i> Designer's Room Advice:
                                </h4>
                                <p class="text-xs text-amber-900/80 leading-relaxed">
                                    <?= $c['rec'] ?>
                                </p>
                            </div>

                            <!-- Quick Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3 pt-4">
                                <a href="https://wa.me/923007131249?text=Hi!%20I%20want%20to%20inquire%20about%20your%20<?= urlencode($c['title']) ?>.%20Please%20share%20color%20and%20fabric%20catalogs." 
                                   target="_blank" rel="noopener noreferrer"
                                   class="flex-1 inline-flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold py-3.5 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
                                    <i class="fab fa-whatsapp text-lg"></i>
                                    WhatsApp Order Inquiry
                                </a>
                                <a href="#customize-form" 
                                   class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-bold py-3.5 px-6 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.01] transition-all duration-300">
                                    <i class="fas fa-magic"></i>
                                    Custom Sizing Form
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- FULL CUSTOMIZATION EXPLANATION (WIDE CARD) -->
                <!-- ============================================ -->
                <div class="mt-12 lg:mt-16 reveal">
                    <div class="text-center max-w-3xl mx-auto mb-10">
                        <span class="text-xs text-gold-dark font-bold uppercase tracking-widest block mb-2">Bespoke Manufacturing Process</span>
                        <h2 class="font-display text-2xl sm:text-3xl font-bold text-charcoal">
                            Sofa Ko Apne Room Ke <span class="text-gold-dark">Sath Match</span> Karein
                        </h2>
                        <p class="text-xs sm:text-sm text-gray-500 leading-relaxed mt-2">
                            Hamare paas koi pre-made generic standard inventory nahi hoti. Har ek sofa set direct customer ke order par banaya jata hai taake aapko best fit aur custom matching design mil sake.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gold/15 text-center card-hover">
                            <div class="w-12 h-12 mx-auto mb-4 bg-gold/10 rounded-full flex items-center justify-center text-gold-dark text-lg font-bold">1</div>
                            <h3 class="font-display text-base font-bold text-charcoal mb-2">Fabric & Color Selection</h3>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                Soft Velvet, Premium Boucle, Textured Jute, ya high-quality imported Leatherette. Aap apni marzi ka koi bhi fabric aur shade choose karein. Ham color cards share karenge.
                            </p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gold/15 text-center card-hover">
                            <div class="w-12 h-12 mx-auto mb-4 bg-gold/10 rounded-full flex items-center justify-center text-gold-dark text-lg font-bold">2</div>
                            <h3 class="font-display text-base font-bold text-charcoal mb-2">Custom Dimensions</h3>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                Room chota hai ya bada? Ham standard 7-seater se hat kar customized 5-seater, 6-seater, ya precise inch measurements ke mutabik structural frames design karenge.
                            </p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gold/15 text-center card-hover">
                            <div class="w-12 h-12 mx-auto mb-4 bg-gold/10 rounded-full flex items-center justify-center text-gold-dark text-lg font-bold">3</div>
                            <h3 class="font-display text-base font-bold text-charcoal mb-2">Artisanal Polish & Trim</h3>
                            <p class="text-gray-500 text-xs leading-relaxed">
                                Wood polish ke natural walnut grain, high-gloss mahogany finishes, antique gold, ya modern brushed metallic chrome accents. Jo flow aap ke room ke interior ka hai hum wahi finish denge.
                            </p>
                        </div>
                    </div>

                    <!-- Warning Alert: Expert Recommendation Guidance -->
                    <div class="mt-8 bg-amber-50 border border-amber-200/60 rounded-xl p-5 flex flex-col sm:flex-row items-center sm:items-start gap-4">
                        <i class="fas fa-lightbulb text-amber-500 text-xl mt-1 flex-shrink-0"></i>
                        <div class="space-y-1 text-center sm:text-left">
                            <h4 class="text-xs font-bold text-amber-800 uppercase tracking-wider">Expert Recommendation Guarantee:</h4>
                            <p class="text-xs text-amber-900/80 leading-relaxed">
                                <strong>Aapki styling, hamara tajruba!</strong> Aap humein apne room ki clear video ya dimensions send karein. Humare experienced designers aap ko bilkul free guide karenge ke aap ke space ke liye kaun sa design aur scale perfect match rahe ga. Ham fully transparent design solutions recommend karte hain.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- COLLECTION SPECIFIC FAQ SECTION (SEO & AEO) -->
                <!-- ============================================ -->
                <div class="mt-12 lg:mt-16 reveal">
                    <div class="text-center max-w-3xl mx-auto mb-10">
                        <span class="text-xs text-gold-dark font-bold uppercase tracking-widest block mb-2">Frequently Asked Questions</span>
                        <h2 class="font-display text-2xl sm:text-3xl font-bold text-charcoal">
                            <?= $c['title'] ?> <span class="text-gold-dark">Help Desk</span>
                        </h2>
                        <p class="text-xs sm:text-sm text-gray-500 leading-relaxed mt-2">
                            Aap ke mind mein jo sawalat hain, un ke jawab yahan par detailed solutions ke sath diye gaye hain. Fully optimized custom advice for Pakistani homes.
                        </p>
                    </div>

                    <div class="max-w-4xl mx-auto space-y-4">
                        <?php foreach ($c['faqs'] as $index => $faq): ?>
                        <div class="border border-gold/15 bg-white rounded-xl overflow-hidden shadow-sm">
                            <button onclick="toggleCollectionFaq(<?= $index ?>)" 
                                    class="w-full text-left px-5 py-4 flex items-center justify-between gap-4 font-semibold text-sm sm:text-base text-charcoal hover:bg-cream transition-colors duration-300 focus:outline-none"
                                    aria-expanded="false" 
                                    aria-controls="faq-ans-<?= $index ?>">
                                <span><?= $faq['q'] ?></span>
                                <i id="faq-icon-<?= $index ?>" class="fas fa-chevron-down text-gold-dark text-xs transition-transform duration-300"></i>
                            </button>
                            <div id="faq-ans-<?= $index ?>" class="hidden px-5 pb-5 text-xs sm:text-sm text-gray-500 leading-relaxed border-t border-gold/10 pt-3 bg-white">
                                <?= $faq['a'] ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- CUSTOM ORDER FORM SECTION -->
                <!-- ============================================ -->
                <div id="customize-form" class="mt-12 lg:mt-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch reveal">
                    <!-- Left Explanation (5 cols) -->
                    <div class="lg:col-span-5 bg-gradient-to-br from-charcoal-dark via-charcoal to-charcoal-light rounded-2xl p-8 text-white flex flex-col justify-between border border-gray-800">
                        <div class="space-y-6">
                            <span class="text-xs text-gold font-bold uppercase tracking-widest block">Get Bespoke Quote</span>
                            <h3 class="font-display text-2xl sm:text-3xl font-bold leading-tight">
                                Customize Your <span class="text-gold-light">Sofa Set</span> Now
                            </h3>
                            <p class="text-white/70 text-xs sm:text-sm leading-relaxed">
                                Apni marzi ka customized design quote lene ke liye form fill karein. Hamare sofa manufacturing experts 12 ghantay ke andar complete pricing details ke sath aapse direct contact karenge.
                            </p>

                            <ul class="space-y-3 text-xs text-white/80 pt-2">
                                <li class="flex items-center gap-2.5">
                                    <i class="fas fa-check text-gold"></i>
                                    <span>Direct factory rates (Save up to 30%)</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <i class="fas fa-check text-gold"></i>
                                    <span>100+ Free fabric catalogs shared on WhatsApp</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <i class="fas fa-check text-gold"></i>
                                    <span>Free safe delivery in Gujrat, Sialkot, and Sargarh zones</span>
                                </li>
                            </ul>
                        </div>

                        <div class="border-t border-white/10 pt-6 mt-8">
                            <p class="text-[11px] text-white/50">Need assistance? Call our design desk:</p>
                            <a href="tel:03007131249" class="text-gold hover:text-white transition-colors text-base font-bold flex items-center gap-2 mt-1">
                                <i class="fas fa-phone-alt text-xs"></i> 0300 7131249
                            </a>
                        </div>
                    </div>

                    <!-- Right Custom Order Form (7 cols) -->
                    <div class="lg:col-span-7 bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100/80">
                        <form method="POST" id="custom-inquiry-form" data-cem-endpoint="/contact-submit" data-wa-number="923007131249" data-support-email="info@cutomsofaprices.com" data-collection-title="<?= htmlspecialchars($c['title'], ENT_QUOTES) ?>">
                            <!-- Honeypot (anti-bot, invisible to users) -->
                            <input type="text" name="website_url" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;opacity:0;overflow:hidden" />
                            <input type="hidden" name="selected_collection" value="<?= $c['title'] ?>">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                                <!-- Name -->
                                <div>
                                    <label for="c-name" class="block text-xs font-semibold text-charcoal mb-1">Full Name *</label>
                                    <input type="text" name="name" id="c-name" required placeholder="Your Name"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-xs">
                                </div>
                                <!-- Phone -->
                                <div>
                                    <label for="c-phone" class="block text-xs font-semibold text-charcoal mb-1">WhatsApp / Phone Number *</label>
                                    <input type="tel" name="phone" id="c-phone" required placeholder="e.g. 0300 1234567"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-xs">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="c-email" class="block text-xs font-semibold text-charcoal mb-1">Email Address *</label>
                                <input type="email" name="email" id="c-email" required placeholder="you@example.com"
                                    class="form-input w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-xs">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                                <!-- Seater Config -->
                                <div>
                                    <label for="c-seating" class="block text-xs font-semibold text-charcoal mb-1">Seating Setup Preference</label>
                                    <select name="seating_setup" id="c-seating"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-xs cursor-pointer">
                                        <option value="7 Seater (3+2+1+1)">7 Seater (3+2+1+1) - Standard</option>
                                        <option value="5 Seater (3+1+1)">5 Seater (3+1+1)</option>
                                        <option value="L-Shape Corner Set">L-Shape Corner Set</option>
                                        <option value="Single Accent Sofa Chair">Single Accent Sofa Chair</option>
                                        <option value="Bespoke/Custom Seater Requirement">Bespoke Custom Setup</option>
                                    </select>
                                </div>
                                <!-- Fabric Preference -->
                                <div>
                                    <label for="c-fabric" class="block text-xs font-semibold text-charcoal mb-1">Fabric Style Preference</label>
                                    <select name="fabric_preference" id="c-fabric"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-xs cursor-pointer">
                                        <option value="Luxury Imported Velvet">Luxury Imported Velvet</option>
                                        <option value="Premium Jute / Textured Linen">Premium Jute / Textured Linen</option>
                                        <option value="Durable Synthetic Leatherette">Durable Synthetic Leatherette</option>
                                        <option value="Genuine Top-Grain Leather">Genuine Top-Grain Leather</option>
                                        <option value="Unsure (Show me fabric catalogs)">Unsure (Show catalog)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Special Customization Note -->
                            <div class="mb-5">
                                <label for="c-note" class="block text-xs font-semibold text-charcoal mb-1">Specific Custom Sizing & Color Notes</label>
                                <textarea name="message" id="c-note" rows="4" placeholder="e.g. I want to modify this sofa set to a 6-seater in forest green velvet fabric with mahogany wood polish, size 90x65 inches..."
                                    class="form-input w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-xs resize-none"></textarea>
                            </div>

                            <!-- Dual Action Buttons -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <!-- WhatsApp Button -->
                                <button type="submit" id="cem-coll-btn-whatsapp"
                                    class="inline-flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold text-sm px-5 py-3.5 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.01] transition-all duration-300 btn-shine">
                                    <i class="fab fa-whatsapp text-lg"></i>
                                    Send via WhatsApp
                                </button>

                                <!-- Email Button -->
                                <a href="mailto:info@cutomsofaprices.com" id="cem-coll-btn-email"
                                    class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-bold text-sm px-5 py-3.5 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.01] transition-all duration-300 btn-shine cursor-pointer text-center no-underline">
                                    <i class="fas fa-calculator"></i>
                                    Get Quote via Email
                                </a>
                            </div>

                            <!-- Inline Status Message -->
                            <div id="cem-coll-status" class="mt-3 text-center text-xs font-medium min-h-[1.2em]" role="status" aria-live="polite"></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
<?php endif; ?>

    </main>

    <!-- FOOTER -->
    <?= $F ?>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/923007131249?text=Hi!%20I%20want%20to%20inquire%20about%20your%20<?= urlencode($c['title']) ?>.%20Please%20share%20color%20and%20fabric%20catalogs." id="whatsapp-float" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 hover:scale-110 hover:shadow-xl transition-all duration-300" aria-label="Chat with us on WhatsApp" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
        <span class="absolute w-full h-full rounded-full bg-green-500/40 animate-ping"></span>
    </a>

    <!-- JAVASCRIPT -->
    <script>
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: '0px 0px -40px 0px'
        });
        revealElements.forEach(el => revealObserver.observe(el));

        // Image Gallery Swapping Handler
        function changeActiveImage(imgSrc, buttonEl) {
            const primaryImg = document.getElementById('primary-image');
            primaryImg.style.opacity = '0.1';
            
            setTimeout(() => {
                primaryImg.src = imgSrc;
                primaryImg.style.opacity = '1';
            }, 150);

            // Reset borders for all thumbnails in this row
            const thumbnails = buttonEl.parentElement.querySelectorAll('button');
            thumbnails.forEach(btn => {
                btn.classList.remove('border-gold', 'shadow-md', 'scale-[1.02]');
                btn.classList.add('border-gray-200');
            });

            // Set active styles on clicked thumbnail
            buttonEl.classList.remove('border-gray-200');
            buttonEl.classList.add('border-gold', 'shadow-md', 'scale-[1.02]');
        }

        // Toggle Collection FAQ Accordion Handler (SEO & AEO)
        function toggleCollectionFaq(index) {
            const answerEl = document.getElementById(`faq-ans-${index}`);
            const iconEl = document.getElementById(`faq-icon-${index}`);
            const buttonEl = answerEl.previousElementSibling;
            
            const isHidden = answerEl.classList.contains('hidden');
            
            // Close all other open FAQ items first
            if (isHidden) {
                const allAnswers = document.querySelectorAll('[id^="faq-ans-"]');
                allAnswers.forEach(ans => {
                    if (ans.id !== `faq-ans-${index}`) {
                        ans.classList.add('hidden');
                        const otherBtn = ans.previousElementSibling;
                        otherBtn.setAttribute('aria-expanded', 'false');
                        const otherIcon = otherBtn.querySelector('i');
                        if (otherIcon) {
                            otherIcon.classList.remove('rotate-180');
                        }
                    }
                });
            }
            
            if (isHidden) {
                answerEl.classList.remove('hidden');
                iconEl.classList.add('rotate-180');
                buttonEl.setAttribute('aria-expanded', 'true');
            } else {
                answerEl.classList.add('hidden');
                iconEl.classList.remove('rotate-180');
                buttonEl.setAttribute('aria-expanded', 'false');
            }
        }

        // ===== CEM Webhook Integration (Collection Form) =====
        (function () {
            'use strict';

            var form       = document.getElementById('custom-inquiry-form');
            if (!form) return;

            var endpoint   = form.getAttribute('data-cem-endpoint') || '/contact-submit';
            var waNumber   = form.getAttribute('data-wa-number') || '923007131249';
            var collTitle  = form.getAttribute('data-collection-title') || 'Sofa Set';
            var btnWA      = document.getElementById('cem-coll-btn-whatsapp');
            var btnEmail   = document.getElementById('cem-coll-btn-email');
            var statusEl   = document.getElementById('cem-coll-status');

            function getFormData() {
                return {
                    name:              (form.querySelector('[name="name"]').value || '').trim(),
                    phone:             (form.querySelector('[name="phone"]').value || '').trim(),
                    email:             (form.querySelector('[name="email"]').value || '').trim(),
                    subject:           'Custom Sofa Quote - ' + collTitle,
                    message:           (form.querySelector('[name="message"]').value || '').trim(),
                    seating_setup:     (form.querySelector('[name="seating_setup"]') ? form.querySelector('[name="seating_setup"]').value : '').trim(),
                    fabric_preference: (form.querySelector('[name="fabric_preference"]') ? form.querySelector('[name="fabric_preference"]').value : '').trim(),
                    selected_collection: collTitle,
                    website_url:       (form.querySelector('[name="website_url"]') ? form.querySelector('[name="website_url"]').value : '')
                };
            }

            function validate(data) {
                if (!data.email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(data.email)) {
                    setStatus('Please enter a valid email address.', 'error');
                    return false;
                }
                if (!data.name && !data.phone && !data.message) {
                    setStatus('Please fill in at least your name, phone, or message.', 'error');
                    return false;
                }
                return true;
            }

            function setStatus(msg, type) {
                statusEl.textContent = msg;
                statusEl.className = 'mt-3 text-center text-xs font-medium min-h-[1.2em] ' +
                    (type === 'error' ? 'text-red-500' :
                     type === 'success' ? 'text-green-600' :
                     'text-gold-dark');
            }

            function setBusy(busy) {
                btnWA.disabled = busy;
                btnEmail.setAttribute('aria-disabled', busy ? 'true' : 'false');
                if (busy) {
                    btnEmail.style.pointerEvents = 'none';
                    btnEmail.style.opacity = '0.6';
                    btnWA.style.pointerEvents = 'none';
                    btnWA.style.opacity = '0.6';
                } else {
                    btnEmail.style.pointerEvents = '';
                    btnEmail.style.opacity = '';
                    btnWA.style.pointerEvents = '';
                    btnWA.style.opacity = '';
                }
            }

            // --- (A) WhatsApp button: fire-and-forget + navigate ---
            btnWA.addEventListener('click', function (e) {
                e.preventDefault();
                var data = getFormData();

                if (data.website_url) {
                    window.open('https://wa.me/' + waNumber, '_blank');
                    return;
                }

                if (!validate(data)) return;

                var waText = 'Hi! I am interested in your ' + collTitle + '.\n'
                    + 'Name: ' + data.name + '\n'
                    + 'Phone: ' + data.phone + '\n'
                    + 'Email: ' + data.email + '\n'
                    + 'Seating: ' + data.seating_setup + '\n'
                    + 'Fabric: ' + data.fabric_preference + '\n'
                    + (data.message ? 'Notes: ' + data.message : '');

                try {
                    fetch(endpoint, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data),
                        keepalive: true,
                        credentials: 'same-origin'
                    }).catch(function () {});
                } catch (ex) {}

                window.open('https://wa.me/' + waNumber + '?text=' + encodeURIComponent(waText), '_blank');
            });

            // --- (B) Email button: awaited fetch, inline status ---
            btnEmail.addEventListener('click', function (e) {
                e.preventDefault();
                var data = getFormData();

                if (data.website_url) {
                    setStatus('Quote request sent!', 'success');
                    return;
                }

                if (!validate(data)) return;

                setBusy(true);
                setStatus('Sending your quote request...', 'info');

                fetch(endpoint, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data),
                    credentials: 'same-origin'
                })
                .then(function (res) {
                    return res.text().then(function (text) {
                        var parsed;
                        try { parsed = JSON.parse(text); } catch (_) { parsed = null; }

                        if (res.ok && parsed && parsed.ok === true) {
                            setStatus('Sent! Our team will reply to ' + data.email + ' within 4 hours.', 'success');
                            form.reset();
                        } else {
                            var code = res.status || 'unknown';
                            setStatus('Could not send (status ' + code + '). Please try WhatsApp instead.', 'error');
                        }
                    });
                })
                .catch(function () {
                    setStatus('Network error. Please try WhatsApp instead.', 'error');
                })
                .finally(function () {
                    setBusy(false);
                });
            });
        })();
    </script>

<!-- RoomCanvas — "Try in your place" AI sofa visualizer (pre-seeded with the viewed collection) -->
<script src="https://roomcanvas-worker.epsoldev.workers.dev/rc/widget.js" data-rc-key="rcpk_02ad3bf359949d9d4ca57d5eaab1ffa5" data-rc-collection="<?php echo htmlspecialchars($id, ENT_QUOTES); ?>" data-rc-context="<?php echo htmlspecialchars($c['title'] ?? '', ENT_QUOTES); ?>"></script>
</body>
</html>
