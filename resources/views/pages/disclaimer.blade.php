<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer - PaperInbox.io</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#64748b'
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
<body class="bg-gray-50">
     <x-menu />

    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="w-16 h-16 flex items-center justify-center bg-primary/10 rounded-full mx-auto mb-6">
                <i class="ri-shield-check-line text-2xl text-primary"></i>
            </div>
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Disclaimer</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Important information about the use of PaperInbox.io services and your responsibilities as a user
            </p>
        </div>
    </div>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-yellow-100 rounded-full flex-shrink-0">
                    <i class="ri-information-line text-yellow-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">General Information</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        The information contained in this website is for general information purposes only. The information is provided by PaperInbox.io and while we endeavor to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Any reliance you place on such information is therefore strictly at your own risk. In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-blue-100 rounded-full flex-shrink-0">
                    <i class="ri-mail-line text-blue-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Email Services Disclaimer</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        PaperInbox.io provides various email-related services including email validation, temporary email addresses, email templates, and fake email generation. Please note the following:
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span><strong>Email Validation:</strong> Our validation service provides best-effort accuracy but cannot guarantee 100% accuracy due to the dynamic nature of email systems.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span><strong>Temporary Emails:</strong> Temporary email addresses are provided for testing purposes only and should not be used for important communications.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span><strong>Email Templates:</strong> Templates are provided as-is and users are responsible for customizing content to meet their specific needs.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span><strong>Fake Email Generation:</strong> Generated email addresses are for testing and development purposes only and should not be used maliciously.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-green-100 rounded-full flex-shrink-0">
                    <i class="ri-shield-user-line text-green-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Privacy & Security</h2>
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-lock-line text-green-600"></i>
                            </div>
                            <span class="font-semibold text-green-800">Privacy Commitment</span>
                        </div>
                        <p class="text-green-700">
                            We do not share, sell, or distribute your personal data, files, or any information you provide through our services to third parties.
                        </p>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>All data processing is conducted in accordance with applicable privacy laws and regulations.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Temporary email data is automatically deleted after the specified retention period.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>We implement industry-standard security measures to protect your information.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-orange-100 rounded-full flex-shrink-0">
                    <i class="ri-user-settings-line text-orange-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">User Responsibilities</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        By using PaperInbox.io services, you agree to the following responsibilities:
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Use our services only for legitimate and legal purposes.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Do not use our services to send spam, malicious content, or engage in fraudulent activities.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Respect the terms of service of third-party email providers when using our validation services.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Ensure compliance with applicable laws and regulations in your jurisdiction.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Do not attempt to reverse engineer, hack, or compromise our systems.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-red-100 rounded-full flex-shrink-0">
                    <i class="ri-alert-line text-red-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Limitation of Liability</h2>
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                        <p class="text-red-700 font-medium">
                            Important: Please read this section carefully as it limits our liability.
                        </p>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        In no event shall PaperInbox.io, its owners, employees, or affiliates be liable for any direct, indirect, incidental, special, consequential, or punitive damages, including but not limited to:
                    </p>
                    <ul class="space-y-3 text-gray-700 mb-4">
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Loss of profits, data, or business opportunities</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Service interruptions or technical failures</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Inaccurate email validation results</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Unauthorized access to temporary email accounts</span>
                        </li>
                    </ul>
                    <p class="text-gray-700 leading-relaxed">
                        Our total liability for any claim arising out of or relating to these terms or our services shall not exceed the amount paid by you for the services in the twelve (12) months preceding the claim.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-purple-100 rounded-full flex-shrink-0">
                    <i class="ri-global-line text-purple-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Third-Party Services</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Our services may integrate with or rely on third-party services and APIs. We are not responsible for:
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>The availability, accuracy, or reliability of third-party services</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Changes to third-party APIs that may affect our service functionality</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Third-party privacy policies and data handling practices</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <span>Any damages resulting from third-party service failures or security breaches</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-start space-x-4 mb-6">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-100 rounded-full flex-shrink-0">
                    <i class="ri-refresh-line text-indigo-600"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Changes to This Disclaimer</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        We reserve the right to update or modify this disclaimer at any time without prior notice. Changes will be effective immediately upon posting on this page. We encourage you to review this disclaimer periodically for any updates.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Your continued use of our services after any changes to this disclaimer constitutes your acceptance of the updated terms.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8">
            <div class="text-center">
                <div class="w-16 h-16 flex items-center justify-center bg-primary/10 rounded-full mx-auto mb-4">
                    <i class="ri-customer-service-line text-2xl text-primary"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Questions or Concerns?</h2>
                <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
                    If you have any questions about this disclaimer or our services, please don't hesitate to contact us. We're here to help clarify any concerns you may have.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:support@paperinbox.io" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-mail-line"></i>
                        </div>
                        Email Support
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 rounded-button hover:bg-gray-50 transition-colors whitespace-nowrap">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-file-text-line"></i>
                        </div>
                        Privacy Policy
                    </a>
                </div>
            </div>
        </div>
    </main>

      <x-footer />

    <script id="mobile-menu-toggle">
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

    <script id="smooth-scroll">
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>