<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Toolkit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    @livewireStyles

    <script>tailwind.config = { theme: { extend: { colors: { primary: '#4f46e5', secondary: '#10b981' }, borderRadius: { 'none': '0px', 'sm': '4px', DEFAULT: '8px', 'md': '12px', 'lg': '16px', 'xl': '20px', '2xl': '24px', '3xl': '32px', 'full': '9999px', 'button': '8px' } } } }</script>
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .custom-checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #d1d5db;
            border-radius: 4px;
            background-color: white;
            cursor: pointer;
            position: relative;
        }

        .custom-checkbox:checked {
            background-color: #4f46e5;
            border-color: #4f46e5;
        }

        .custom-checkbox:checked::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-switch {
            position: relative;
            display: inline-block;
            width: 3rem;
            height: 1.5rem;
        }

        .custom-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #e5e7eb;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1.1rem;
            width: 1.1rem;
            left: 0.2rem;
            bottom: 0.2rem;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #4f46e5;
        }

        input:checked+.slider:before {
            transform: translateX(1.5rem);
        }

        .custom-range {
            -webkit-appearance: none;
            width: 100%;
            height: 6px;
            border-radius: 5px;
            background: #e5e7eb;
            outline: none;
        }

        .custom-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #4f46e5;
            cursor: pointer;
        }

        .custom-range::-moz-range-thumb {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #4f46e5;
            cursor: pointer;
            border: none;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <header class="bg-white/40 backdrop-blur-lg border-b border-white/20 shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#" class="text-2xl font-['Pacifico'] text-primary">logo</a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#validator" class="text-gray-600 hover:text-primary transition-colors">Validator</a>
                <a href="#generator" class="text-gray-600 hover:text-primary transition-colors">Generator</a>
                <a href="#communication" class="text-gray-600 hover:text-primary transition-colors">Communication</a>
                <a href="#technical" class="text-gray-600 hover:text-primary transition-colors">Technical Check</a>
                <button
                    class="bg-primary text-white px-5 py-2 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors">Get
                    Started</button>
            </div>
            <button
                class="md:hidden w-10 h-10 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full">
                <i class="ri-menu-line ri-lg"></i>
            </button>
        </div>
    </header>
    <section class="relative py-20 lg:h-screen md:py-32"
        style="background-image: url('{{ asset('images/email-api-hero-image.webp') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/90 to-transparent"></div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 text-gray-900 leading-tight">Professional Email Tools
                    <span class="text-primary">for Every Need</span></h1>
                <p class="text-lg md:text-xl text-gray-700 mb-10 leading-relaxed">Comprehensive suite of tools for email
                    validation, generation, and analysis. Enhance your email operations with our powerful, easy-to-use
                    solutions.</p>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
                    <a href="#validator"
                        class="group bg-white/80 backdrop-blur-sm p-4 rounded-lg shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-primary/10 rounded-full text-primary mx-auto mb-3 group-hover:scale-110 transition-transform">
                            <i class="ri-check-double-line ri-xl"></i>
                        </div>
                        <span class="text-sm font-medium">Email Validator</span>
                    </a>
                    <a href="#generator"
                        class="group bg-white/80 backdrop-blur-sm p-4 rounded-lg shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-secondary/10 rounded-full text-secondary mx-auto mb-3 group-hover:scale-110 transition-transform">
                            <i class="ri-mail-add-line ri-xl"></i>
                        </div>
                        <span class="text-sm font-medium">Email Generator</span>
                    </a>
                    <a href="#technical"
                        class="group bg-white/80 backdrop-blur-sm p-4 rounded-lg shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-purple-100 rounded-full text-purple-600 mx-auto mb-3 group-hover:scale-110 transition-transform">
                            <i class="ri-settings-3-line ri-xl"></i>
                        </div>
                        <span class="text-sm font-medium">Technical Check</span>
                    </a>
                    <a href="https://example.com/send-emails" target="_blank"
                        class="group bg-white/80 backdrop-blur-sm p-4 rounded-lg shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-full text-blue-600 mx-auto mb-3 group-hover:scale-110 transition-transform">
                            <i class="ri-send-plane-line ri-xl"></i>
                        </div>
                        <span class="text-sm font-medium">Send Emails</span>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 items-center">
                    <button
                        class="bg-primary text-white px-8 py-4 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors shadow-md w-full sm:w-auto">
                        Start Free Trial
                    </button>
                    <a href="https://example.com/send-emails" target="_blank"
                        class="flex items-center justify-center gap-2 text-primary hover:text-primary/80 transition-colors w-full sm:w-auto">
                        <span>Try Email Sender</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="flex items-center gap-8 mt-10">
                    <div class="flex items-center gap-2">
                        <i class="ri-shield-check-line text-green-500"></i>
                        <span class="text-sm text-gray-600">100% Secure</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="ri-time-line text-blue-500"></i>
                        <span class="text-sm text-gray-600">Real-time Results</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="ri-database-2-line text-purple-500"></i>
                        <span class="text-sm text-gray-600">99.9% Accuracy</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 max-w-7xl mx-auto ">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-primary font-medium mb-2 inline-block">ALL-IN-ONE SOLUTION</span>
                <h2 class="text-4xl font-bold mb-6">Powerful Email Tools in One Place</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">Our comprehensive toolkit helps you manage all
                    aspects of email operations, from validation to delivery analysis.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Email Validator Card -->
                @livewire('validation')
                <!-- Email Generator Card -->
               @livewire('generator')
            </div>
        </div>
    </section>

    <section class="py-16 max-w-7xl mx-auto bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Why Choose Our Email Tools</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our comprehensive email toolkit provides everything you need
                    to manage, validate, and test emails effectively.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-indigo-100 rounded-full text-primary mx-auto mb-4">
                        <i class="ri-shield-check-line ri-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Accurate Validation</h3>
                    <p class="text-gray-600">Our multi-layer validation process ensures the highest accuracy in email
                        verification, reducing bounce rates by up to 98%.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-emerald-100 rounded-full text-secondary mx-auto mb-4">
                        <i class="ri-speed-line ri-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Lightning Fast</h3>
                    <p class="text-gray-600">Process thousands of emails in minutes with our optimized validation engine
                        and distributed infrastructure.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-blue-100 rounded-full text-blue-600 mx-auto mb-4">
                        <i class="ri-lock-line ri-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Secure & Private</h3>
                    <p class="text-gray-600">Your data is encrypted and protected. We never store email addresses or
                        send unsolicited messages.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gradient-to-br max-w-7xl mx-auto bg-white my-10 rounded">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <span class="text-primary font-semibold uppercase tracking-wide">Unlock Advanced Power</span>
            <h2 class="text-5xl font-bold text-gray-900 mt-4 mb-6">Next-Level Email Tools</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Create an account to access our premium features built for scale, speed, and serious deliverability.</p>
        </div>

        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl shadow p-8 ">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-primary to-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg text-4xl">
                    <i class="ri-shield-check-line"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-3">Advanced Email Validation</h3>
                <p class="text-gray-600 text-center">Perform deep syntax, domain, SMTP, and inbox verification in seconds.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-3xl shadow p-8">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-secondary to-emerald-500 text-white rounded-full flex items-center justify-center shadow-lg text-4xl">
                    <i class="ri-download-2-line"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-3">Download Valid/Invalid Emails</h3>
                <p class="text-gray-600 text-center">Export your results in clean CSV or TXT format, instantly.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-3xl shadow p-8 ">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-full flex items-center justify-center shadow-lg text-4xl">
                    <i class="ri-send-plane-2-line"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-3">Send & Receive Emails</h3>
                <p class="text-gray-600 text-center">Test inbox placement, simulate delivery, and analyze responses.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white rounded-3xl shadow p-8 ">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-pink-500 to-fuchsia-600 text-white rounded-full flex items-center justify-center shadow-lg text-4xl">
                    <i class="ri-mail-add-line"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-3">Generate Fake Emails</h3>
                <p class="text-gray-600 text-center">Instantly generate thousands of realistic email addresses for testing environments.</p>
            </div>
            <!-- Card 5 -->
            <div class="bg-white rounded-3xl shadow p-8 ">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-violet-600 text-white rounded-full flex items-center justify-center shadow-lg text-4xl">
                    <i class="ri-database-2-line"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-3">Inbox Existence Check</h3>
                <p class="text-gray-600 text-center">Avoid bounce backs by knowing which mailboxes are actually active.</p>
            </div>
        </div>

    </div>
</section>


    <section class="py-16 max-w-7xl mx-auto bg-white rounded my-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto overflow-hidden">
                <div class="p-8 md:p-12">
                    <h2 class="text-2xl font-bold mb-6 text-center">Ready to improve your email operations?</h2>
                    <p class="text-gray-600 mb-8 text-center">Join thousands of professionals who trust our email tools
                        for validation, testing, and analysis.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                        <button
                            class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors shadow-md">
                            Get Started Free
                        </button>
                        <button
                            class="bg-white text-gray-700 border border-gray-300 px-8 py-3 !rounded-button whitespace-nowrap hover:bg-gray-50 transition-colors">
                            View Pricing
                        </button>
                    </div>
                    <div class="flex items-center justify-center text-sm text-gray-500">
                        <i class="ri-shield-check-line mr-2"></i>
                        <span>No credit card required • Cancel anytime • 100 free validations per day</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <a href="#" class="text-2xl font-['Pacifico'] text-white mb-4 block">logo</a>
                    <p class="mb-4">Comprehensive email tools for professionals. Validate, generate, and analyze emails
                        with ease.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="ri-twitter-x-line ri-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="ri-linkedin-line ri-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="ri-github-line ri-lg"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Products</h4>
                    <ul class="space-y-2">
                        <li><a href="#validator" class="hover:text-white transition-colors">Email Validator</a></li>
                        <li><a href="#generator" class="hover:text-white transition-colors">Email Generator</a></li>
                        <li><a href="#communication" class="hover:text-white transition-colors">Email Communication</a>
                        </li>
                        <li><a href="#technical" class="hover:text-white transition-colors">Technical Check</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API Access</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API Reference</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Tutorials</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Status</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p>© 2025 Email Toolkit. All rights reserved.</p>
                <div class="flex items-center space-x-4 mt-4 md:mt-0">
                    <div class="flex items-center">
                        <i class="ri-visa-line ri-lg mr-2"></i>
                        <i class="ri-mastercard-line ri-lg mr-2"></i>
                        <i class="ri-paypal-line ri-lg"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script id="validatorToggleScript">
        document.addEventListener('DOMContentLoaded', function () {
            const validatorModeSwitch = document.getElementById('validatorModeSwitch');
            const singleValidatorForm = document.getElementById('singleValidatorForm');
            const bulkValidatorForm = document.getElementById('bulkValidatorForm');
            validatorModeSwitch.addEventListener('change', function () {
                if (this.checked) {
                    singleValidatorForm.classList.add('hidden');
                    bulkValidatorForm.classList.remove('hidden');
                } else {
                    singleValidatorForm.classList.remove('hidden');
                    bulkValidatorForm.classList.add('hidden');
                }
            });
        });
    </script>
 
 
    <script id="smoothScrollScript">
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    @stack('scripts')
    @livewireScripts
        
</body>

</html>