<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - Ultimate Email Tool</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981'
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
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <x-menu />

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Choose Your Plan</h2>
            <p class="text-xl text-gray-600 mb-8">Get the ultimate email toolkit for your business needs</p>
            
            <div class="flex items-center justify-center space-x-4 mb-8">
                <span class="text-gray-600">Monthly</span>
                <div class="relative">
                    <input type="checkbox" id="billing-toggle" class="sr-only">
                    <label for="billing-toggle" class="flex items-center cursor-pointer">
                        <div class="relative">
                            <div class="block bg-gray-300 w-14 h-8 rounded-full"></div>
                            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300"></div>
                        </div>
                    </label>
                </div>
                <span class="text-gray-900 font-medium">Annual</span>
                <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">Save 20%</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200 hover:shadow-xl transition-shadow">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Starter</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-gray-900">$10</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="text-gray-600">Perfect for individuals getting started</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Email syntax validation</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">5 email templates</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">1 temp email address</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Standard support</span>
                    </li>
                </ul>
                
                <button class="w-full bg-gray-100 text-gray-900 py-3 !rounded-button font-medium hover:bg-gray-200 transition-colors whitespace-nowrap">Get Started</button>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-primary relative hover:shadow-xl transition-shadow">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-medium">Most Popular</span>
                </div>
                
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Professional</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-gray-900">$20</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="text-gray-600">Great for small businesses</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Everything in Starter</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Inbox status checking</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">5 temp email addresses</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">20 email templates</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Priority support</span>
                    </li>
                </ul>
                
                <button class="w-full bg-primary text-white py-3 !rounded-button font-medium hover:bg-blue-600 transition-colors whitespace-nowrap">Get Started</button>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200 hover:shadow-xl transition-shadow">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Business</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-gray-900">$30</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="text-gray-600">Perfect for growing teams</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Everything in Professional</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Bulk email validation</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Unlimited temp emails</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Custom email templates</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">API access</span>
                    </li>
                </ul>
                
                <button class="w-full bg-gray-100 text-gray-900 py-3 !rounded-button font-medium hover:bg-gray-200 transition-colors whitespace-nowrap">Get Started</button>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200 hover:shadow-xl transition-shadow">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-gray-900">$40</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="text-gray-600">For large organizations</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Everything in Business</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Dedicated IP address</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Custom integrations</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">24/7 premium support</span>
                    </li>
                    <li class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-check-line text-secondary"></i>
                        </div>
                        <span class="ml-3 text-gray-600">Advanced analytics</span>
                    </li>
                </ul>
                
                <button class="w-full bg-gray-100 text-gray-900 py-3 !rounded-button font-medium hover:bg-gray-200 transition-colors whitespace-nowrap">Contact Sales</button>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Feature Comparison</h3>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-4 px-6 font-medium text-gray-900">Features</th>
                            <th class="text-center py-4 px-6 font-medium text-gray-900">Starter</th>
                            <th class="text-center py-4 px-6 font-medium text-gray-900">Professional</th>
                            <th class="text-center py-4 px-6 font-medium text-gray-900">Business</th>
                            <th class="text-center py-4 px-6 font-medium text-gray-900">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">Email Syntax Validation</td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">Inbox Status Checking</td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-close-line text-gray-400"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">Send & Receive Emails</td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">Temp Email Addresses</td>
                            <td class="py-4 px-6 text-center text-gray-600">1</td>
                            <td class="py-4 px-6 text-center text-gray-600">5</td>
                            <td class="py-4 px-6 text-center text-gray-600">Unlimited</td>
                            <td class="py-4 px-6 text-center text-gray-600">Unlimited</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">Email Templates</td>
                            <td class="py-4 px-6 text-center text-gray-600">5</td>
                            <td class="py-4 px-6 text-center text-gray-600">20</td>
                            <td class="py-4 px-6 text-center text-gray-600">Custom</td>
                            <td class="py-4 px-6 text-center text-gray-600">Custom</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">Bulk Email Validation</td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-close-line text-gray-400"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-close-line text-gray-400"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-6 text-gray-600">API Access</td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-close-line text-gray-400"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-close-line text-gray-400"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="w-5 h-5 flex items-center justify-center mx-auto">
                                    <i class="ri-check-line text-secondary"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-gray-600">Support Level</td>
                            <td class="py-4 px-6 text-center text-gray-600">Standard</td>
                            <td class="py-4 px-6 text-center text-gray-600">Priority</td>
                            <td class="py-4 px-6 text-center text-gray-600">Premium</td>
                            <td class="py-4 px-6 text-center text-gray-600">24/7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-gradient-to-r from-primary to-blue-600 rounded-xl p-12 text-center text-white">
            <h3 class="text-3xl font-bold mb-4">Still have questions?</h3>
            <p class="text-xl mb-8 opacity-90">Our team is here to help you choose the right plan for your needs</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-primary px-8 py-3 !rounded-button font-medium hover:bg-gray-100 transition-colors whitespace-nowrap">Contact Sales</button>
                <button class="border-2 border-white text-white px-8 py-3 !rounded-button font-medium hover:bg-white hover:text-primary transition-colors whitespace-nowrap">View FAQ</button>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-['Pacifico'] mb-4">logo</h3>
                    <p class="text-gray-400 mb-4">The ultimate email toolkit for modern businesses</p>
                    <div class="flex space-x-4">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-twitter-line text-gray-400 hover:text-white cursor-pointer"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-linkedin-line text-gray-400 hover:text-white cursor-pointer"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-github-line text-gray-400 hover:text-white cursor-pointer"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Status</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Ultimate Email Tool. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script id="billing-toggle-script">
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('billing-toggle');
            const dot = document.querySelector('.dot');
            const prices = document.querySelectorAll('.text-4xl');
            
            const monthlyPrices = ['$10', '$20', '$30', '$40'];
            const annualPrices = ['$8', '$16', '$24', '$32'];
            
            toggle.addEventListener('change', function() {
                if (this.checked) {
                    dot.style.transform = 'translateX(1.5rem)';
                    dot.parentElement.style.backgroundColor = '#3B82F6';
                    prices.forEach((price, index) => {
                        price.textContent = annualPrices[index];
                    });
                } else {
                    dot.style.transform = 'translateX(0)';
                    dot.parentElement.style.backgroundColor = '#D1D5DB';
                    prices.forEach((price, index) => {
                        price.textContent = monthlyPrices[index];
                    });
                }
            });
        });
    </script>

    <script id="mobile-menu-script">
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('[data-mobile-menu]');
            const mobileMenu = document.querySelector('[data-mobile-menu-content]');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>