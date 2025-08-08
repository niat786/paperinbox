<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary SEO -->
    <title>About Us — PaperInbox | Email Tools that Validate, Send & Simplify Email</title>
    <meta name="description"
        content="PaperInbox is a small, focused team building human friendly email tools: real-time validation, inbox checks, reliable send/receive, temporary mail, templates, analytics, and more.">
    <link rel="canonical" href="{{ route('about-us') }}" />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <meta name="author" content="PaperInbox" />


    <script src="https://cdn.tailwindcss.com/3.4.16"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .counter {
            transition: all 0.5s ease;
        }
    </style>


    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About PaperInbox | Email Tools that Validate, Send & Simplify Email" />
    <meta property="og:description"
        content="Founded in 2024, PaperInbox builds practical tools for better email: validation, deliverability, sending & receiving, temp mail, templates, and analytics." />
    <meta property="og:url" content="{{ route('about-us') }}" />
    <meta property="og:site_name" content="PaperInbox" />
    <meta property="og:image" content="https://paperinbox.io/images/pages/about/team.webp" />
    <meta property="og:image:alt" content="The PaperInbox team" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About PaperInbox — Simple, Reliable Email Tools" />
    <meta name="twitter:description"
        content="We make email tools that actually work — from real-time validation to dependable sending and temp mail." />
    <meta name="twitter:image" content="https://paperinbox.io/images/pages/about/team.webp" />
    <meta name="twitter:site" content="@PaperInbox" />

    <!-- Favicons (replace with your paths) -->
    <link rel="icon" href="https://paperinbox.io/images/favicon/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="https://paperinbox.io/images/favicon/apple-touch-icon.png">
    <link rel="manifest" href="https://paperinbox.io/images/favicon/site.webmanifest">

    <!-- Breadcrumbs Schema -->
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://paperinbox.io/"
    }, {
      "@type": "ListItem",
      "position": 2,
      "name": "About"
    }]
}
</script>

        <!-- About Page + Organization Schema -->
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About PaperInbox",
  "url": "https://paperinbox.io/about-us",
  "description": "PaperInbox builds human-friendly email tools: validation, inbox checks, sending & receiving, temporary email, templates, analytics, and more.",
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://paperinbox.io/images/pages/about/team.webp",
    "width": 1200,
    "height": 630
  },
  "isPartOf": {
    "@type": "WebSite",
    "name": "PaperInbox",
    "url": "https://paperinbox.io/"
  },
  "mainEntity": {
    "@type": "Organization",
    "name": "PaperInbox",
    "url": "https://paperinbox.io/",
    "logo": {
      "@type": "ImageObject",
      "url": "https://paperinbox.io/paperinbox-logo.webp"
    },
    "foundingDate": "2024",
    "description": "Email tools for validation, deliverability, sending/receiving, temporary mail, templates, and analytics.",
    "sameAs": [
      "https://twitter.com/PaperInbox",
      "https://www.linkedin.com/company/paperinbox"
    ]
  }
}
</script>
    @endverbatim

</head>

<body class="bg-white">
    <!-- Header -->
    <x-menu />

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32 overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        About Our Email Solutions
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Empowering businesses and individuals with comprehensive email tools that streamline
                        communication, enhance productivity, and ensure reliable message delivery across the globe.
                    </p>

                </div>

                <div class="lg:w-1/2 lg:pl-12">
                    <img src="{{ asset('images/pages/about/team.webp') }}" alt="Our Team"
                        class="w-full h-auto rounded-2xl shadow-2xl object-cover object-top">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="items-center">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <div class="space-y-6 text-gray-600">
                        <p class="text-lg leading-relaxed">
                            PaperInbox started in 2024 with a simple realization: email isn't going anywhere, but the
                            way we manage it needed to change. We were tired of clunky tools and half solutions, so we
                            built something better.
                        </p>
                        <p class="text-lg leading-relaxed">
                            We were just five people back then, developers and communication nerds, working late nights,
                            fixing bugs, and drinking too much coffee. Our goal was straightforward: make email tools
                            that actually work, from checking if an address is real, to seeing if an inbox is active, to
                            sending and receiving messages without the headaches.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Fast forward to today, and PaperInbox is used by over 500,000 people around the world. We've
                            validated millions of addresses, kept inboxes clean, and helped businesses (and plenty of
                            individuals) keep their emails on point.
                        </p>
                        <p class="text-lg leading-relaxed">
                            We're still the same at heart, a small team that believes good communication starts with
                            reliable tools. The tech matters, but so does keeping it simple and human.
                        </p>

                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Mission</h3>
                            <p class="text-gray-700">
                                We want to make professional email tools available to everyone, not just big companies
                                with big budgets. Our mission is to give individuals and businesses simple, reliable
                                ways to connect, check, and improve their emails, so they can communicate with
                                confidence and without the fuss.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">What We Offer</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive email solutions designed to meet every aspect of your communication needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-lg mb-6">
                        <i class="ri-shield-check-line text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Email Validator</h3>
                    <p class="text-gray-600">
                        Check email addresses instantly with up to 99.5% accuracy. Our smart validation system helps you
                        cut down bounce rates and keep your messages landing where they belong.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-lg mb-6">
                        <i class="ri-mail-send-line text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Send & Receive Emails</h3>
                    <p class="text-gray-600">
                        Reliable email delivery service with advanced tracking, scheduling, and automation features for
                        seamless communication management.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-purple-100 rounded-lg mb-6">
                        <i class="ri-time-line text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Temporary Email Service</h3>
                    <p class="text-gray-600">
                        Need a quick, disposable inbox? Create temporary addresses for testing, sign-ups, or private
                        conversations, and keep your main inbox safe from clutter.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-orange-100 rounded-lg mb-6">
                        <i class="ri-layout-3-line text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Email Templates</h3>
                    <p class="text-gray-600">
                        Ready-to-use templates designed for marketing campaigns, newsletters, and professional updates.
                        Fully customizable, responsive, and mobile-friendly from the start.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-red-100 rounded-lg mb-6">
                        <i class="ri-user-add-line text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Fake Email Generator</h3>
                    <p class="text-gray-600">
                        Generate realistic large number of email addresses with job title for testing, development, or
                        QA work. Choose from a variety of domains to match real-world conditions.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-indigo-100 rounded-lg mb-6">
                        <i class="ri-tools-line text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Additional Tools</h3>
                    <p class="text-gray-600">
                        Email analytics, spam testing, domain reputation monitoring, and other essential tools to
                        optimize your email performance and deliverability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2 counter" data-target="500000">0</div>
                    <div class="text-blue-100 text-lg">Active Users</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2 counter" data-target="25000000">0</div>
                    <div class="text-blue-100 text-lg">Emails Validated</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2 counter" data-target="1250">0</div>
                    <div class="text-blue-100 text-lg">Templates Available</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2">
                        <span class="counter" data-target="99">0</span><span class="text-4xl lg:text-5xl">%</span>
                    </div>
                    <div class="text-blue-100 text-lg">Success Rate</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call-to-Action -->
    <section class="py-20 bg-gradient-to-r from-blue-50 to-blue-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold  mb-6">
                Ready to Transform Your Email Communication?
            </h2>
            <p class="text-xl  mb-8 leading-relaxed">
                Join over 500,000 users who trust PaperInbox for their email needs. Start your free trial today and
                experience the difference professional email tools can make.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('login') }}"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold whitespace-nowrap">
                    Start Free Trial
                </a>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <script id="mobile-menu-script">
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

    <script id="counter-animation-script">
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const observerOptions = {
                threshold: 0.5
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-target'));
                        let current = 0;
                        const increment = target / 100;

                        const updateCounter = () => {
                            if (current < target) {
                                current += increment;
                                counter.textContent = Math.floor(current).toLocaleString();
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = target.toLocaleString();
                            }
                        };

                        updateCounter();
                        observer.unobserve(counter);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
</body>

</html>
