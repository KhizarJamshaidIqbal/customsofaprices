---
name: algorithmic-art
description: Use when creating generative art with p5.js - developing algorithmic philosophies, computational aesthetics, and interactive art viewers. Applicable for generative design, computational art, flow fields, particle systems, and mathematical visualizations.
---

# Algorithmic Art (by Anthropic)

## Overview

Algorithmic philosophies are computational aesthetic movements expressed through code. This skill guides you through creating generative art that lives and breathes - from developing an algorithmic philosophy to implementing it in p5.js with interactive controls.

**Core principle:** Beauty lives in the process, not the final frame. Create living algorithms where each execution is unique.

## When to Use

- Creating generative art or computational visualizations
- Building interactive art viewers with parameter controls
- Developing algorithmic philosophies for visual expression
- Implementing flow fields, particle systems, or mathematical patterns
- User requests p5.js sketches, generative design, or algorithmic art

## The Process

This happens in two steps:
1. **Algorithmic Philosophy Creation** (.md file)
2. **Express by creating p5.js generative art** (.html + .js files)

---

### Step 1: Algorithmic Philosophy Creation

Create an **ALGORITHMIC PHILOSOPHY** (not static images or templates) that will be interpreted through:
- Computational processes, emergent behavior, mathematical beauty
- Seeded randomness, noise fields, organic systems
- Particles, flows, fields, forces
- Parametric variation and controlled chaos

#### The Critical Understanding

- **What is received:** Subtle input or instructions from the user - use as foundation, not constraint
- **What is created:** An algorithmic philosophy/generative aesthetic movement
- **What happens next:** Express the philosophy in code - p5.js sketches that are 90% algorithmic generation, 10% essential parameters

#### How to Generate an Algorithmic Philosophy

**Name the movement** (1-2 words):
- "Organic Turbulence"
- "Quantum Harmonics"
- "Emergent Stillness"

**Articulate the philosophy** (4-6 paragraphs - concise but complete):

Express how this philosophy manifests through:
- Computational processes and mathematical relationships
- Noise functions and randomness patterns
- Particle behaviors and field dynamics
- Temporal evolution and system states
- Parametric variation and emergent complexity

**CRITICAL GUIDELINES:**
- **Avoid redundancy:** Each algorithmic aspect mentioned once. No repeating concepts.
- **Emphasize craftsmanship REPEATEDLY:** The philosophy MUST stress multiple times that the final algorithm should appear meticulously crafted, refined with care, the product of deep computational expertise by a master.
- **Leave creative space:** Be specific about algorithmic direction, but concise enough for interpretive implementation choices.

#### Philosophy Examples

**"Organic Turbulence"**
Philosophy: Chaos constrained by natural law, order emerging from disorder.
Algorithmic expression: Flow fields driven by layered Perlin noise. Thousands of particles following vector forces, their trails accumulating into organic density maps. Multiple noise octaves create turbulent regions and calm zones. Color emerges from velocity and density - fast particles burn bright, slow ones fade to shadow. A meticulously tuned balance refined through countless iterations by a master of computational aesthetics.

**"Quantum Harmonics"**
Philosophy: Discrete entities exhibiting wave-like interference patterns.
Algorithmic expression: Particles initialized on a grid, each carrying a phase value evolving through sine waves. When near, phases interfere - constructive creates bright nodes, destructive creates voids. Simple harmonic motion generates complex emergent mandalas. The result of painstaking frequency calibration with carefully chosen ratios.

**"Recursive Whispers"**
Philosophy: Self-similarity across scales, infinite depth in finite space.
Algorithmic expression: Branching structures subdividing recursively. Each branch randomized but constrained by golden ratios. L-systems or recursive subdivision generate tree-like forms. Subtle noise perturbations break perfect symmetry. Line weights diminish with each recursion level.

**"Field Dynamics"**
Philosophy: Invisible forces made visible through their effects on matter.
Algorithmic expression: Vector fields from mathematical functions or noise. Particles born at edges, flowing along field lines, dying at equilibrium. Multiple fields attract, repel, or rotate particles. Ghost-like evidence of invisible forces.

**"Stochastic Crystallization"**
Philosophy: Random processes crystallizing into ordered structures.
Algorithmic expression: Randomized circle packing or Voronoi tessellation. Random points evolve through relaxation algorithms. Cells push apart until equilibrium. Color based on cell size, neighbor count, or distance from center.

---

### Step 2: Deducing the Conceptual Seed

**CRITICAL STEP:** Before implementing, identify the subtle conceptual thread from the original request.

**THE ESSENTIAL PRINCIPLE:**
The concept is a **subtle, niche reference embedded within the algorithm itself** - not always literal, always sophisticated. Someone familiar should feel it intuitively, while others simply experience masterful generative composition.

The algorithmic philosophy provides the computational language. The deduced concept provides the soul - the quiet conceptual DNA woven invisibly into parameters, behaviors, and emergence patterns.

Think like a jazz musician quoting another song through algorithmic harmony - only those who know will catch it, but everyone appreciates the generative beauty.

---

### Step 3: P5.js Implementation

#### Technical Requirements

**Seeded Randomness (Art Blocks Pattern):**
```javascript
// ALWAYS use a seed for reproducibility
let seed = 12345;
randomSeed(seed);
noiseSeed(seed);
```

**Parameter Structure - FOLLOW THE PHILOSOPHY:**
```javascript
let params = {
  seed: 12345,  // Always include seed for reproducibility
  // Add parameters that control YOUR algorithm:
  // - Quantities (how many?)
  // - Scales (how big? how fast?)
  // - Probabilities (how likely?)
  // - Ratios (what proportions?)
  // - Angles (what direction?)
  // - Thresholds (when does behavior change?)
};
```

**Core Algorithm - EXPRESS THE PHILOSOPHY:**

**CRITICAL:** The algorithmic philosophy should dictate what to build.

If the philosophy is about **organic emergence**, use:
- Elements that accumulate or grow over time
- Random processes constrained by natural rules
- Feedback loops and interactions

If the philosophy is about **mathematical beauty**, use:
- Geometric relationships and ratios
- Trigonometric functions and harmonics
- Precise calculations creating unexpected patterns

If the philosophy is about **controlled chaos**, use:
- Random variation within strict boundaries
- Bifurcation and phase transitions
- Order emerging from disorder

**Canvas Setup:**
```javascript
function setup() {
  createCanvas(1200, 1200);
  // Initialize your system
}

function draw() {
  // Your generative algorithm
  // Can be static (noLoop) or animated
}
```

#### Craftsmanship Requirements

**CRITICAL:** Create algorithms that feel like they emerged through countless iterations by a master generative artist.

- **Balance:** Complexity without visual noise, order without rigidity
- **Color Harmony:** Thoughtful palettes, not random RGB values
- **Composition:** Even in randomness, maintain visual hierarchy and flow
- **Performance:** Smooth execution, optimized for real-time if animated
- **Reproducibility:** Same seed ALWAYS produces identical output

---

## HTML Viewer Template

Use this template as the starting point for all HTML artifacts:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generative Art Viewer</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/p5.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --anthropic-dark: #141413;
            --anthropic-light: #faf9f5;
            --anthropic-mid-gray: #b0aea5;
            --anthropic-light-gray: #e8e6dc;
            --anthropic-orange: #d97757;
            --anthropic-blue: #6a9bcc;
            --anthropic-green: #788c5d;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--anthropic-light) 0%, #f5f3ee 100%);
            min-height: 100vh;
            color: var(--anthropic-dark);
        }
        .container { display: flex; min-height: 100vh; padding: 20px; gap: 20px; }
        .sidebar {
            width: 320px; flex-shrink: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 24px; border-radius: 12px;
            box-shadow: 0 10px 30px rgba(20, 20, 19, 0.1);
            overflow-y: auto;
        }
        .sidebar h1 { font-family: 'Lora', serif; font-size: 24px; font-weight: 500; margin-bottom: 8px; }
        .sidebar .subtitle { color: var(--anthropic-mid-gray); font-size: 14px; margin-bottom: 32px; }
        .control-section { margin-bottom: 32px; }
        .control-section h3 {
            font-size: 16px; font-weight: 600; margin-bottom: 16px;
            display: flex; align-items: center; gap: 8px;
        }
        .control-section h3::before { content: '•'; color: var(--anthropic-orange); }
        .seed-input {
            width: 100%; background: var(--anthropic-light);
            padding: 12px; border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-size: 14px; margin-bottom: 12px;
            border: 1px solid var(--anthropic-light-gray);
            text-align: center;
        }
        .seed-controls { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 8px; }
        .control-group { margin-bottom: 20px; }
        .control-group label { display: block; font-size: 14px; font-weight: 500; margin-bottom: 8px; }
        .slider-container { display: flex; align-items: center; gap: 12px; }
        .slider-container input[type="range"] {
            flex: 1; height: 4px; background: var(--anthropic-light-gray);
            border-radius: 2px; -webkit-appearance: none;
        }
        .slider-container input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none; width: 16px; height: 16px;
            background: var(--anthropic-orange); border-radius: 50%; cursor: pointer;
        }
        .value-display {
            font-family: 'Courier New', monospace; font-size: 12px;
            color: var(--anthropic-mid-gray); min-width: 60px; text-align: right;
        }
        .color-group { margin-bottom: 16px; }
        .color-group label { display: block; font-size: 12px; color: var(--anthropic-mid-gray); margin-bottom: 4px; }
        .color-picker-container { display: flex; align-items: center; gap: 8px; }
        .color-picker-container input[type="color"] {
            width: 32px; height: 32px; border: none; border-radius: 6px; cursor: pointer;
        }
        .button {
            background: var(--anthropic-orange); color: white; border: none;
            padding: 10px 16px; border-radius: 6px; font-size: 14px;
            font-weight: 500; cursor: pointer; width: 100%;
        }
        .button:hover { background: #c86641; }
        .button.secondary { background: var(--anthropic-blue); }
        .button.tertiary { background: var(--anthropic-green); }
        .button-row { display: flex; gap: 8px; }
        .button-row .button { flex: 1; }
        .canvas-area { flex: 1; display: flex; align-items: center; justify-content: center; }
        #canvas-container {
            width: 100%; max-width: 1000px; border-radius: 12px;
            overflow: hidden; box-shadow: 0 20px 40px rgba(20, 20, 19, 0.1); background: white;
        }
        #canvas-container canvas { display: block; width: 100% !important; height: auto !important; }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <!-- CUSTOMIZE: Title and subtitle -->
            <h1>Your Art Title</h1>
            <div class="subtitle">Your art description</div>

            <!-- FIXED: Seed Section -->
            <div class="control-section">
                <h3>Seed</h3>
                <input type="number" id="seed-input" class="seed-input" value="12345" onchange="updateSeed()">
                <div class="seed-controls">
                    <button class="button secondary" onclick="previousSeed()">← Prev</button>
                    <button class="button secondary" onclick="nextSeed()">Next →</button>
                </div>
                <button class="button tertiary" onclick="randomSeedAndUpdate()">↻ Random</button>
            </div>

            <!-- CUSTOMIZE: Parameters Section -->
            <div class="control-section">
                <h3>Parameters</h3>
                <!-- Add your parameter controls here -->
                <div class="control-group">
                    <label>Example Parameter</label>
                    <div class="slider-container">
                        <input type="range" id="exampleParam" min="0" max="100" value="50" oninput="updateParam('exampleParam', this.value)">
                        <span class="value-display" id="exampleParam-value">50</span>
                    </div>
                </div>
            </div>

            <!-- OPTIONAL: Colors Section -->
            <div class="control-section">
                <h3>Colors</h3>
                <div class="color-group">
                    <label>Primary Color</label>
                    <div class="color-picker-container">
                        <input type="color" id="color1" value="#d97757" onchange="updateColor('color1', this.value)">
                    </div>
                </div>
            </div>

            <!-- FIXED: Actions Section -->
            <div class="control-section">
                <h3>Actions</h3>
                <div class="button-row">
                    <button class="button" onclick="resetParameters()">Reset</button>
                </div>
            </div>
        </div>
        <div class="canvas-area">
            <div id="canvas-container"></div>
        </div>
    </div>
    <script>
        // YOUR ALGORITHM HERE
        let params = { seed: 12345 };
        
        function setup() {
            let canvas = createCanvas(1200, 1200);
            canvas.parent('canvas-container');
            initializeSystem();
        }
        
        function initializeSystem() {
            randomSeed(params.seed);
            noiseSeed(params.seed);
            // Your initialization code
        }
        
        function draw() {
            // Your drawing code
        }
        
        // FIXED: Seed controls
        function updateSeed() { params.seed = parseInt(document.getElementById('seed-input').value); initializeSystem(); }
        function previousSeed() { params.seed--; document.getElementById('seed-input').value = params.seed; initializeSystem(); }
        function nextSeed() { params.seed++; document.getElementById('seed-input').value = params.seed; initializeSystem(); }
        function randomSeedAndUpdate() { params.seed = Math.floor(Math.random() * 999999); document.getElementById('seed-input').value = params.seed; initializeSystem(); }
        function resetParameters() { /* Reset your params */ initializeSystem(); }
        function updateParam(name, value) { params[name] = parseFloat(value); document.getElementById(name + '-value').textContent = value; initializeSystem(); }
        function updateColor(id, value) { /* Update color */ initializeSystem(); }
    </script>
</body>
</html>
```

### Template Sections

**FIXED (always include exactly as shown):**
- Layout structure (header, sidebar, main canvas area)
- Anthropic branding (UI colors, fonts, gradients)
- Seed section in sidebar (display, Previous/Next, Random buttons)
- Actions section (Regenerate, Reset buttons)

**VARIABLE (customize for each artwork):**
- The entire p5.js algorithm (setup/draw/classes)
- The parameters object (define what the art needs)
- Parameters section controls (sliders, inputs, etc.)
- Colors section (optional - some art may not need color pickers)

---

## Output Format

Output:
1. **Algorithmic Philosophy** - Markdown file explaining the generative aesthetic
2. **Single HTML Artifact** - Self-contained interactive generative art built from the template

The HTML artifact contains everything: p5.js (from CDN), the algorithm, parameter controls, and UI - all in one file that works immediately in any browser.

---

## File Organization

```
output/
├── philosophy.md          # Algorithmic philosophy document
└── viewer.html            # Interactive generative art viewer
```

---

## Red Flags

These indicate improper implementation:

| Problem | Fix |
|---------|-----|
| Static looking art | Add seeded randomness and parametric variation |
| Same output every run | Implement proper seed controls |
| Generic patterns | Express the philosophy through unique algorithms |
| No interactivity | Add parameter sliders and seed navigation |
| Poor performance | Optimize particle counts and use noLoop() for static |
| Random colors | Use thoughtful, curated color palettes |
| Algorithm feels simple | Emphasize craftsmanship, layer complexity |

## Common Mistakes

| Mistake | Fix |
|---------|-----|
| Not using seeded randomness | Always use `randomSeed()` and `noiseSeed()` |
| Philosophy too vague | Be specific about computational expression |
| Parameters don't affect output | Wire parameters to actual algorithm values |
| Missing seed navigation | Include Prev/Next/Random buttons |
| Art looks generic | Express unique philosophy, not template patterns |
| No reproducibility | Same seed must produce identical output |
| Ignoring craftsmanship | Emphasize meticulously tuned parameters |

## Integration

**Pairs with:**
- `brainstorming` - Use when exploring generative art concepts
- `frontend-components` - If integrating into React applications
- `glassmorphism-design` - For premium UI styling of controls

## Essential Principles

- **ALGORITHMIC PHILOSOPHY:** Creating a computational worldview expressed through code
- **PROCESS OVER PRODUCT:** Beauty emerges from algorithm execution - each run is unique
- **PARAMETRIC EXPRESSION:** Ideas communicate through mathematical relationships and behaviors
- **ARTISTIC FREEDOM:** Provide creative implementation room within the philosophy
- **PURE GENERATIVE ART:** Create LIVING ALGORITHMS, not static images with randomness
- **EXPERT CRAFTSMANSHIP:** Final algorithm must feel meticulously crafted, refined through countless iterations

## The Bottom Line

**The algorithm flows from the philosophy, not from a menu of options.**

Create gallery-quality computational art that lives and breathes. Trust creativity and let the philosophy guide the implementation.
