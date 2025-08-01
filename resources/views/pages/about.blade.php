<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EmailPro Solutions</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#10b981'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
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
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-['Pacifico'] text-primary">logo</h1>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors">Features</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors">Pricing</a>
                    <a href="#" class="text-primary font-medium">About Us</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                </nav>
                
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors">Sign In</a>
                    <button class="bg-primary text-white px-6 py-2 !rounded-button hover:bg-blue-600 transition-colors whitespace-nowrap">
                        Get Started
                    </button>
                </div>
                
                <button class="md:hidden w-8 h-8 flex items-center justify-center" id="mobile-menu-btn">
                    <i class="ri-menu-line text-xl"></i>
                </button>
            </div>
            
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="py-4 space-y-4">
                    <a href="#" class="block text-gray-700 hover:text-primary transition-colors">Features</a>
                    <a href="#" class="block text-gray-700 hover:text-primary transition-colors">Pricing</a>
                    <a href="#" class="block text-primary font-medium">About Us</a>
                    <a href="#" class="block text-gray-700 hover:text-primary transition-colors">Contact</a>
                    <div class="pt-4 space-y-2">
                        <a href="#" class="block text-gray-700 hover:text-primary transition-colors">Sign In</a>
                        <button class="w-full bg-primary text-white px-6 py-2 !rounded-button hover:bg-blue-600 transition-colors whitespace-nowrap">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://readdy.ai/api/search-image?query=modern%20professional%20email%20technology%20workspace%20with%20clean%20white%20background%2C%20minimalist%20design%2C%20soft%20blue%20accents%2C%20digital%20communication%20concept%2C%20high-tech%20office%20environment%2C%20subtle%20geometric%20patterns%2C%20contemporary%20business%20setting&width=1920&height=800&seq=hero-about&orientation=landscape" 
                 alt="Email Solutions Background" 
                 class="w-full h-full object-cover object-top opacity-20">
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        About Our Email Solutions
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Empowering businesses and individuals with comprehensive email tools that streamline communication, enhance productivity, and ensure reliable message delivery across the globe.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button class="bg-primary text-white px-8 py-3 !rounded-button hover:bg-blue-600 transition-colors whitespace-nowrap">
                            Learn More
                        </button>
                        <button class="border border-gray-300 text-gray-700 px-8 py-3 !rounded-button hover:bg-gray-50 transition-colors whitespace-nowrap">
                            Contact Us
                        </button>
                    </div>
                </div>
                
                <div class="lg:w-1/2 lg:pl-12">
                    <img src="https://readdy.ai/api/search-image?query=diverse%20professional%20team%20working%20together%20on%20email%20technology%20solutions%2C%20modern%20office%20environment%2C%20collaborative%20workspace%2C%20people%20using%20computers%20and%20tablets%2C%20clean%20white%20background%2C%20contemporary%20business%20atmosphere%2C%20teamwork%20and%20innovation&width=600&height=400&seq=hero-team&orientation=landscape" 
                         alt="Our Team" 
                         class="w-full h-auto rounded-2xl shadow-2xl object-cover object-top">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <div class="space-y-6 text-gray-600">
                        <p class="text-lg leading-relaxed">
                            Founded in 2018, EmailPro Solutions emerged from a simple observation: email communication was becoming increasingly complex while remaining fundamentally important to business success. Our founders, experienced software engineers and communication specialists, recognized the need for comprehensive, reliable email tools.
                        </p>
                        <p class="text-lg leading-relaxed">
                            What started as a small team of five passionate developers has grown into a trusted platform serving over 500,000 users worldwide. We've processed millions of email validations, delivered countless messages, and helped businesses maintain clean, effective communication channels.
                        </p>
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Mission</h3>
                            <p class="text-gray-700">
                                To democratize professional email communication by providing powerful, accessible tools that help individuals and businesses connect, validate, and optimize their email strategies with confidence and ease.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <img src="https://readdy.ai/api/search-image?query=modern%20email%20technology%20evolution%20timeline%2C%20digital%20communication%20growth%2C%20professional%20business%20development%2C%20clean%20white%20background%2C%20technology%20progress%20visualization%2C%20email%20servers%20and%20digital%20infrastructure%2C%20contemporary%20design&width=600&height=500&seq=story-image&orientation=portrait" 
                         alt="Our Journey" 
                         class="w-full h-auto rounded-2xl shadow-lg object-cover object-top">
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
                        <i class="ri-shield-check-line text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Email Validator</h3>
                    <p class="text-gray-600">
                        Verify email addresses in real-time with 99.5% accuracy. Reduce bounce rates and improve deliverability with our advanced validation algorithms.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-lg mb-6">
                        <i class="ri-mail-send-line text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Send & Receive Emails</h3>
                    <p class="text-gray-600">
                        Reliable email delivery service with advanced tracking, scheduling, and automation features for seamless communication management.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-purple-100 rounded-lg mb-6">
                        <i class="ri-time-line text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Temporary Email Service</h3>
                    <p class="text-gray-600">
                        Generate disposable email addresses for testing, privacy protection, and temporary communications without compromising your main inbox.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-orange-100 rounded-lg mb-6">
                        <i class="ri-layout-3-line text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Email Templates</h3>
                    <p class="text-gray-600">
                        Professional, responsive email templates for marketing campaigns, newsletters, and business communications. Fully customizable and mobile-optimized.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-red-100 rounded-lg mb-6">
                        <i class="ri-user-add-line text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Fake Email Generator</h3>
                    <p class="text-gray-600">
                        Create realistic email addresses for testing purposes, development environments, and quality assurance with various domain options.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 flex items-center justify-center bg-indigo-100 rounded-lg mb-6">
                        <i class="ri-tools-line text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Additional Tools</h3>
                    <p class="text-gray-600">
                        Email analytics, spam testing, domain reputation monitoring, and other essential tools to optimize your email performance and deliverability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-primary">
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

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The passionate professionals behind EmailPro Solutions, dedicated to revolutionizing email communication
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl text-center">
                    <img src="https://readdy.ai/api/search-image?query=professional%20CEO%20headshot%2C%20confident%20business%20leader%2C%20clean%20white%20background%2C%20formal%20business%20attire%2C%20executive%20portrait%2C%20modern%20professional%20photography%2C%20leadership%20presence&width=300&height=300&seq=ceo-portrait&orientation=squarish" 
                         alt="Sarah Chen" 
                         class="w-24 h-24 rounded-full mx-auto mb-6 object-cover object-top">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Sarah Chen</h3>
                    <p class="text-primary font-medium mb-4">CEO & Co-Founder</p>
                    <p class="text-gray-600 mb-6">
                        Former Google engineer with 12 years of experience in email infrastructure and scalable communication systems.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl text-center">
                    <img src="https://readdy.ai/api/search-image?query=professional%20CTO%20headshot%2C%20technical%20leader%20portrait%2C%20clean%20white%20background%2C%20business%20casual%20attire%2C%20engineering%20executive%2C%20modern%20professional%20photography%2C%20technology%20expertise&width=300&height=300&seq=cto-portrait&orientation=squarish" 
                         alt="Michael Rodriguez" 
                         class="w-24 h-24 rounded-full mx-auto mb-6 object-cover object-top">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Michael Rodriguez</h3>
                    <p class="text-primary font-medium mb-4">CTO & Co-Founder</p>
                    <p class="text-gray-600 mb-6">
                        Expert in distributed systems and email protocols, previously led engineering teams at Microsoft and Amazon.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                            <i class="ri-github-fill"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl text-center">
                    <img src="https://readdy.ai/api/search-image?query=professional%20head%20of%20product%20headshot%2C%20product%20manager%20portrait%2C%20clean%20white%20background%2C%20modern%20business%20attire%2C%20strategic%20leader%2C%20contemporary%20professional%20photography%2C%20innovation%20focus&width=300&height=300&seq=product-head-portrait&orientation=squarish" 
                         alt="Emily Watson" 
                         class="w-24 h-24 rounded-full mx-auto mb-6 object-cover object-top">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Emily Watson</h3>
                    <p class="text-primary font-medium mb-4">Head of Product</p>
                    <p class="text-gray-600 mb-6">
                        Product strategist with deep understanding of user experience and email marketing, former Mailchimp product lead.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Trusted by Industry Leaders</h3>
                <p class="text-gray-600">Join thousands of companies that rely on our email solutions</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <i class="ri-microsoft-fill text-2xl"></i>
                    </div>
                    <span class="text-lg font-medium text-gray-700">Microsoft</span>
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <i class="ri-google-fill text-2xl"></i>
                    </div>
                    <span class="text-lg font-medium text-gray-700">Google</span>
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <i class="ri-amazon-fill text-2xl"></i>
                    </div>
                    <span class="text-lg font-medium text-gray-700">Amazon</span>
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <i class="ri-apple-fill text-2xl"></i>
                    </div>
                    <span class="text-lg font-medium text-gray-700">Apple</span>
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <i class="ri-meta-fill text-2xl"></i>
                    </div>
                    <span class="text-lg font-medium text-gray-700">Meta</span>
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <i class="ri-netflix-fill text-2xl"></i>
                    </div>
                    <span class="text-lg font-medium text-gray-700">Netflix</span>
                </div>
            </div>
            
            <div class="mt-16 grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-lg mx-auto mb-4">
                        <i class="ri-shield-check-fill text-2xl text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">SOC 2 Certified</h4>
                    <p class="text-gray-600 text-sm">Industry-standard security compliance</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-lg mx-auto mb-4">
                        <i class="ri-lock-fill text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">GDPR Compliant</h4>
                    <p class="text-gray-600 text-sm">Full data protection compliance</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="w-12 h-12 flex items-center justify-center bg-purple-100 rounded-lg mx-auto mb-4">
                        <i class="ri-award-fill text-2xl text-purple-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">99.9% Uptime</h4>
                    <p class="text-gray-600 text-sm">Guaranteed service reliability</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action -->
    <section class="py-20 bg-gradient-to-r from-primary to-blue-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Email Communication?
            </h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Join over 500,000 users who trust EmailPro Solutions for their email needs. Start your free trial today and experience the difference professional email tools can make.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-primary px-8 py-3 !rounded-button hover:bg-gray-100 transition-colors font-semibold whitespace-nowrap">
                    Start Free Trial
                </button>
                <button class="border border-blue-300 text-white px-8 py-3 !rounded-button hover:bg-blue-600 transition-colors whitespace-nowrap">
                    Schedule Demo
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-1">
                    <h3 class="text-2xl font-['Pacifico'] text-primary mb-4">logo</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Professional email solutions that empower businesses to communicate effectively, validate addresses, and optimize their email strategies.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="ri-github-fill"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Email Validator</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Email Sending</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Temp Email</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Email Templates</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Fake Email Generator</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">Company</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Stay updated with our latest features and email tips.</p>
                    <div class="flex">
                        <input type="email" placeholder="Enter your email" 
                               class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-l-lg focus:outline-none focus:border-primary text-white">
                        <button class="bg-primary px-6 py-2 rounded-r-lg hover:bg-blue-600 transition-colors whitespace-nowrap">
                            <i class="ri-send-plane-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © 2025 EmailPro Solutions. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

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