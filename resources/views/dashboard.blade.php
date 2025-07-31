<x-layouts.app :title="__('Dashboard')">
<!-- Main Content -->
    <section class="md:px-6 py-8 max-w-7xl mx-auto">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl p-8 mb-8 text-white">
            <div class="flex flex-col md:flex-row my-5 md:my-0 items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Welcome back, Sarah!</h2>
                    <p class="text-blue-100 text-lg">Ready to boost your email marketing campaigns today?</p>
                </div>
                <div class="flex flex-col my-3 md:my-0 md:flex-row md:space-x-8 space-y-5 md:space-y-0">
                    <div class="text-center">
                        <div class="text-3xl font-bold">2,847</div>
                        <div class="text-blue-100 text-sm">Emails Sent</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">68.5%</div>
                        <div class="text-blue-100 text-sm">Open Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">24</div>
                        <div class="text-blue-100 text-sm">Active Campaigns</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Email Marketing Section -->
        <section class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6 dark:text-gray-300">Email Marketing</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Send Emails Card -->
                <div class="bg-white dark:bg-zinc-700 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-200 dark:bg-rose-600  rounded-lg flex items-center justify-center mr-4">
                            <flux:icon.bolt />
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-zinc-200">Send Emails</h4>
                            <p class="text-sm text-gray-600 dark:text-zinc-300">Single or bulk sending</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm dark:text-zinc-300">
                            Compose and deliver emails either one-by-one or in bulk. Upload a list (e.g., CSV) for mass send, personalize each message with tokens, schedule delivery, and automatically handle retries or bounces to maximize deliverability.
                        </p>
                        <flux:button href="{{ route('send-emails') }}" variant="primary" color="blue">Send Emails</flux:button>
                        
                    </div>
                </div>
                <!-- Email Templates Card -->
                <div class="bg-white dark:bg-zinc-700 dark:text-gray-300 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-200 dark:bg-green-600 rounded-lg flex items-center justify-center mr-4">
                            <flux:icon.bolt />
                        </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Beautiful Email Templates</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-200">50+ templates available</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mb-4">
                        {{-- image --}}
                    </div>
                   <p class="py-3 text-sm dark:text-zinc-300">
Choose from our collection of professionally designed email templates that convert and engage your audience</p>
                        <flux:button href="{{ route('email-templates') }}" variant="primary" color="blue">Browse Templates</flux:button>

                </div>

                <!-- Temporary Emails Card -->
                <div class="bg-white dark:bg-zinc-700 dark:text-gray-300 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-200 dark:bg-orange-600 rounded-lg flex items-center justify-center mr-4">
                            <flux:icon.bolt />
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Temporary Emails</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-200">12 active addresses</p>
                        </div>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="text-sm dark:text-zinc-300">Instantly create a short-lived email address to receive verification codes, test messages, or avoid spam. Messages appear in a temporary inbox and auto-expire.</p>
                    </div>
                  <flux:button href="{{ route('temp-emails') }}" variant="primary" color="blue">Create New</flux:button>

                </div>
            </div>
        </section>

        <!-- Email Tools Section -->
        <section class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6 dark:text-gray-300">Email Tools</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Email Syntax Checker -->
                <div class="bg-white dark:bg-zinc-700 dark:text-gray-300 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-200 dark:bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <flux:icon.bolt />
                        </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Syntax Checker</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-200">Validate email format, Single/Bulk</p>
                            </div>
                        </div>
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                    <div class="mb-4">
                        <div class="text-2xl font-bold text-gray-900 dark:text-zinc-200">100%</div>
                        <div class="text-sm text-gray-600 dark:text-zinc-300">Accuracy rate</div>
                    </div>
                  <flux:button href="{{ route('validate-syntax') }}" variant="primary" color="blue">Check Email Syntax</flux:button>
                    
                </div>

                <!-- Job-Based Email Generator -->
                <div class="bg-white dark:bg-zinc-700 dark:text-gray-300 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-200 dark:bg-indigo-600 rounded-lg flex items-center justify-center mr-4">
                            <flux:icon.bolt />
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Email Generator</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-200">Job-based templates</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="text-2xl font-bold text-gray-900 dark:text-zinc-200">156M+</div>
                        <div class="text-sm text-gray-600 dark:text-zinc-300">Templates generated</div>
                    </div>
                    
                  <flux:button href="{{ route('fake-email-address') }}" variant="primary" color="blue">Generate Email</flux:button>

                </div>

                <!-- Inbox Status Checker -->
                <div class="bg-white dark:bg-zinc-700 dark:text-gray-300 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-200 dark:bg-emerald-600 rounded-lg flex items-center justify-center mr-4">
                            <flux:icon.bolt />
                        </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Inbox Status</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-200">Real-time monitoring</p>
                            </div>
                        </div>
                        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    </div>
                    <div class="mb-4">
                        <div class="text-2xl font-bold text-gray-900 dark:text-zinc-200">Live</div>
                        <div class="text-sm text-gray-600 dark:text-zinc-300">All systems operational</div>
                    </div>
                   
                  <flux:button href="{{ route('inbox-status') }}" variant="primary" color="blue">Check Status</flux:button>

                </div>
            </div>
        </section>

        <!-- Files Section -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-300">Your Files</h3>
                <flux:button href="{{ route('user-files') }}" variant="primary" color="zinc">Upload File</flux:button>
            </div>
            <div class="bg-white dark:bg-zinc-700 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-600">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- File Item 1 -->
                    <div class="group cursor-pointer">
                        
                        <h4 class="font-medium text-gray-900 truncate dark:text-zinc-200">Email Campaign Report Q4</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-200">PDF • 2.4 MB</p>
                        <p class="text-xs text-gray-500 dark:text-zinc-400">Modified 2 hours ago</p>
                    </div>

                    <!-- File Item 2 -->
                    <div class="group cursor-pointer">
                       
                        <h4 class="font-medium text-gray-900 truncate dark:text-zinc-200">Subscriber Database</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-200">XLSX • 1.8 MB</p>
                        <p class="text-xs text-gray-500 dark:text-zinc-400">Modified 1 day ago</p>
                    </div>

                    <!-- File Item 3 -->
                    <div class="group cursor-pointer">
                        
                        <h4 class="font-medium text-gray-900 truncate dark:text-zinc-200">Brand Assets Collection</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-200">ZIP • 15.2 MB</p>
                        <p class="text-xs text-gray-500 dark:text-zinc-400">Modified 3 days ago</p>
                    </div>

                    <!-- File Item 4 -->
                    <div class="group cursor-pointer">
                        
                        <h4 class="font-medium text-gray-900 truncate dark:text-zinc-200">Content Strategy Guide</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-200">DOCX • 890 KB</p>
                        <p class="text-xs text-gray-500 dark:text-zinc-400">Modified 1 week ago</p>
                    </div>
                </div>
                
                <div class="mt-6 text-center">
                    <flux:button href="{{ route('user-files') }}" size="xs">View All Files</flux:button>
                </div>
            </div>
        </section>
    </section>
</x-layouts.app>