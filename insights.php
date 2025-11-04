<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4JD4ZCN0G8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4JD4ZCN0G8');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights & Blog - DigitalABCs</title>
    <meta name="description" content="Explore the DigitalABCs blog for practical AI insights, educational articles, and vital cybersecurity updates for Australian small businesses.">
    <link rel="canonical" href="https://digitalabcs.com.au/insights.html">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

    <style>
        .dynamic-reports-grid {
            display: grid;
            grid-template-columns: 1fr;
            /* 1 column on mobile */
            gap: 30px;
            margin-bottom: 40px;
        }

        .blog-post-card {
            /* Using brand colours from your memory */
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .blog-post-card h3 {
            color: var(--color-navy, #1E3A8A);
            margin-top: 0;
        }

        .blog-post-card p {
            flex-grow: 1;
            /* Pushes the button to the bottom */
        }

        .btn-read-more {
            display: inline-block;
            background-color: var(--color-purple, #7C3AED);
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 15px;
            transition: background-color 0.3s;
            text-align: center;
        }

        .btn-read-more:hover {
            background-color: var(--color-navy, #1E3A8A);
        }

        .section-divider {
            border: 0;
            border-top: 2px solid #eee;
            margin: 40px 0;
        }

        /* Make grid 2-col on larger screens */
        @media (min-width: 768px) {
            .dynamic-reports-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Add these styles for the clickable cards */
        .blog-post-card {
            position: relative;
            /* Required for the stretched link */
        }

        .blog-post-card h3 a {
            color: var(--color-navy, #1E3A8A);
            text-decoration: none;
        }

        .blog-post-card h3 a:hover {
            text-decoration: underline;
        }

        /* This makes the whole card clickable */
        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        /* Make sure button stays on top */
        .btn-read-more {
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <header class="site-header">
        <div class="container">
            <a href="index.html" class="logo" aria-label="DigitalABCs Home">
                <img src="assets/logo.png" alt="DigitalABCs Logo" class="logo-img">
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html" class="active">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="insights.php">Insights</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="https://services.digitalabcs.com.au" target="_blank" rel="noopener noreferrer">Client Login</a></li>
                </ul>
            </nav>
        </div>
        <script async src="https://tally.so/widgets/embed.js"></script>
    </header>
    <main id="main-content">
        <section class="hero">
            <div class="container">
                <h1>Insights from Digital ABCs</h1>
                <p class="subtitle">Stay informed with practical AI advice, industry trends, and essential cybersecurity tips for Australian small businesses.</p>
            </div>
        </section>

        <nav class="secondary-nav" aria-label="Secondary site resources">
            <div class="container">
                <div class="resources-dropdown">
                    <button
                        id="resources-toggle"
                        class="resources-toggle"
                        aria-expanded="false"
                        aria-controls="resources-menu">
                        Resources
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                            width="20"
                            height="20">
                            <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="resources-menu" class="resources-menu">
                        <ul>
                            <li><a href="prompt_refinement.html">Prompt Builder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <section class="insights-grid section-padding">
            <div class="container">

                <h2>Weekly AI & Automation Reports</h2>
                <p>Your latest AI-generated insights, delivered weekly. Newest reports are at the top.</p>
                <div class="dynamic-reports-grid">
                    <?php
                    // Set the directory to scan
                    $insightsDir = __DIR__ . '/insights'; // <-- FIX: Look in the 'insights' sub-folder
                    $webPath = './insights';     // <-- FIX: Set the correct web path for links

                    // Find all generated insight files
                    $files = glob($insightsDir . '/*_insights.html');

                    if ($files) {
                        rsort($files); // Sort files by name (newest first, assuming timestamp)

                        // This loop finds each .html file, reads its title/summary, and creates a card
                        foreach ($files as $file) {
                            $doc = new DOMDocument();
                            // Suppress errors from parsing
                            @$doc->loadHTMLFile($file);
                            $xpath = new DOMXPath($doc);

                            // --- Get Title ---
                            $title = 'Weekly Insight'; // Default
                            $titleNodes = $doc->getElementsByTagName('title');
                            if ($titleNodes->length > 0) {
                                $title = $titleNodes->item(0)->textContent;
                            }

                            // --- Get Summary ---
                            $summary = 'Read the latest report on AI and automation.'; // Default
                            $summaryNodes = $xpath->query("//p[contains(@class, 'summary-text')]");
                            if ($summaryNodes->length > 0) {
                                $summary = substr(trim($summaryNodes->item(0)->textContent), 0, 200) . '...';
                            }

                            // --- (NEW) Get Image & Alt Text ---
                            $img_src = '../assets/insights/default.jpg'; // Default placeholder image
                            $alt_text = 'DigitalABCs Insight Article';     // Default alt text

                            // Get AI-generated alt text from meta tag
                            $altNodes = $xpath->query("//meta[@name='image-alt']");
                            if ($altNodes->length > 0) {
                                $alt_text = $altNodes->item(0)->getAttribute('content');
                            }

                            // Get image filename from meta tag
                            $imgNodes = $xpath->query("//meta[@name='image-filename']");
                            if ($imgNodes->length > 0) {
                                $img_src = $webPath . '/' . $imgNodes->item(0)->getAttribute('content');
                            }
                            // --- (END NEW) ---

                            // Get the web-accessible file name
                            $filename = basename($file);
                            $published_date = date("F j, Y", filemtime($file));
                            $link_url = htmlspecialchars($webPath . '/' . $filename);

                            // Create the HTML card
                            echo '<article class="blog-post-card">';

                            // (NEW) Add the image
                            echo '<img src="' . htmlspecialchars($img_src) . '" alt="' . htmlspecialchars($alt_text) . '" class="blog-card-image">';

                            echo '<h3><a href="' . $link_url . '" class="stretched-link">' . htmlspecialchars($title) . '</a></h3>';
                            echo '<p class="post-meta">Published: ' . htmlspecialchars($published_date) . '</p>';
                            echo '<p>' . htmlspecialchars($summary) . '</p>';

                            // "Read More" button is now removed (Task 7)

                            echo '</article>';
                        }
                    } else {
                        echo '<p>No weekly reports have been generated yet. Please check back soon.</p>';
                    }
                    ?>
                </div>
                <hr class="section-divider">
                <h2>From the Blog</h2>
                <p>Our foundational articles on AI, security, and local business growth.</p>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>DigitalABCs</h4>
                    <p>Empowering Australian businesses through practical technology. Built on resilience, for resilience.</p>
                </div>
                <div class="footer-col">
                    <h4>Navigate</h4>
                    <ul>
                        <li><a href="../about.html">About Us</a></li>
                        <li><a href="../services.html">Our Services</a></li>
                        <li><a href="insights.php">Insights</a></li>
                        <li><a href="../contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="../privacy.html">Privacy Policy</a></li>
                        <li><a href="../terms.html">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Connect</h4>
                    <p>info@digitalabcs.com.au<br>Toongabbie, NSW, Australia</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 DigitalABCs. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <style>
        .tally-float-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ba38eb;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 14px 22px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            z-index: 9999;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease-in-out;
        }

        .tally-float-btn:hover {
            background-color: #10B981;
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            .tally-float-btn {
                padding: 12px 18px;
                font-size: 14px;
                bottom: 15px;
                right: 15px;
            }
        }
    </style>
    <button class="tally-float-btn" data-tally-open="wkDaP1"
        data-tally-layout="modal" data-tally-width="700" data-tally-overlay="true"
        data-tally-hide-title="false" data-tally-emoji-text="💡"
        data-tally-emoji-animation="tada"> Where are you in your AI journey?</button>

    <script>
        /*
      ACCESSIBLE DROPDOWN SCRIPT
      Complies with WCAG principles (Operable, Robust)
    */
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('resources-toggle');
            const menu = document.getElementById('resources-menu');

            if (!toggleBtn || !menu) {
                // Failsafe if elements don't exist
                return;
            }

            // --- Toggle on Button Click ---
            toggleBtn.addEventListener('click', function(event) {
                // Stop the click from bubbling up to the document listener
                event.stopPropagation();

                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                // Toggle ARIA attribute for screen readers
                this.setAttribute('aria-expanded', !isExpanded);

                // Toggle CSS class to show/hide menu
                menu.classList.toggle('show');
            });

            // --- Close on 'Escape' Key ---
            // WCAG (OPERABLE): Allows keyboard users to close the menu
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    if (menu.classList.contains('show')) {
                        menu.classList.remove('show');
                        toggleBtn.setAttribute('aria-expanded', 'false');

                        // Return focus to the button for a good UX
                        toggleBtn.focus();
                    }
                }
            });

            // --- Close When Clicking Outside ---
            // WCAG (OPERABLE): Allows pointer users to close by clicking away
            document.addEventListener('click', function(event) {
                if (menu.classList.contains('show') &&
                    !menu.contains(event.target) &&
                    !toggleBtn.contains(event.target)) {

                    menu.classList.remove('show');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                }
            });
        });
    </script>
</body>

</html>