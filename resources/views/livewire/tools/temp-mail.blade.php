    <div class="flex flex-col lg:flex-row h-auto lg:h-screen">
        <!-- Main Content Area -->
        <div class="w-full flex flex-col lg:max-w-4xl">
            <!-- Header Section -->
            <div class=" p-6 sm:p-8">
                <div class="max-w-4xl mx-auto">
                    <h1 class="text-2xl sm:text-3xl font-bold text-zinc-900 mb-2 dark:text-zinc-100">Your Temporary Email
                    </h1>
                    <p class="text-zinc-600 mb-6 sm:mb-8 dark:text-zinc-200">Use this temporary email address for quick
                        registrations and avoid spam</p>
                    <!-- Email Display Area -->
                    <div
                        class="bg-zinc-50 dark:bg-zinc-800 rounded-xl p-4 sm:p-6 border border-zinc-200 dark:border-zinc-600">
                        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4">
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-200 mb-2">Current Email Address</label>
                                <div class="font-mono text-zinc-900 bg-white dark:bg-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl border border-zinc-300 dark:border-zinc-600"
                                    id="emailAddress">
                                    temp.user.7x9k2@mailbox.com
                                </div>
                            </div>
                            <flux:button variant="filled" icon="copy" class="py-3.5">Copy</flux:button>

                        </div>
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3 mt-4">
                            <flux:button variant="primary" color="blue" icon="at-sign" class="py-3.5">Generate New
                            </flux:button>

                            <flux:button variant="primary" color="emerald" icon="clock-plus" class="py-3.5">Extend time
                            </flux:button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Area -->
            <div class="flex-1 p-6 sm:p-8">
                <div class="max-w-4xl mx-auto">
                    <!-- Email Content View -->
                    <div
                        class="bg-white dark:text-zinc-200 rounded-xl border border-zinc-200 dark:bg-zinc-800 dark:border-zinc-700 shadow-sm">
                        <!-- Email Header -->
                        <div class="p-6 border-b border-zinc-200 dark:border-zinc-600">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
                                <h2 class="text-lg sm:text-xl font-semibold text-zinc-900 dark:text-zinc-200">Welcome to
                                    Netflix - Verify your account</h2>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm text-zinc-500 dark:text-zinc-200">2m ago</span>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-zinc-400 hover:text-zinc-600 dark:text-zinc-200 hover:bg-zinc-100 rounded-full transition-colors">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                        <span class="text-red-600 font-semibold">N</span>
                                    </div>
                                    <div>
                                        <div class="font-medium text-zinc-900 dark:text-zinc-200">Netflix</div>
                                        <div class="text-sm text-zinc-600 dark:text-zinc-200">no-reply@netflix.com</div>
                                    </div>
                                </div>
                                <div class="flex-1 flex justify-end">
                                    <flux:button variant="filled" icon="reply" class="py-3.5">Reply</flux:button>

                                </div>
                            </div>
                        </div>
                        <!-- Email Body -->
                        <div class="p-6">
                            <div class="prose max-w-none">
                                <p>Dear User,</p>
                                <p class="mt-4">Welcome to Netflix! We're excited to have you join our streaming
                                    community. To ensure the security of your account and start enjoying unlimited
                                    entertainment, please verify your email address.</p>
                               
                                <p>This verification link will expire in 24 hours. If you did not create a Netflix
                                    account, please disregard this email.</p>
                               
                                <p class="mt-6">Best regards,<br>The Netflix Team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inbox Sidebar -->
        <div
            class="w-full m-6 mx-auto lg:w-3/12 bg-white dark:bg-zinc-900 border rounded-xl border-zinc-200 dark:border-zinc-600 flex flex-col">
            <!-- Sidebar Header -->
            <div class="p-6 border-b border-zinc-200 dark:border-zinc-600">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-200">Inbox</h2>
                    <button
                        class="w-8 h-8 flex items-center justify-center text-zinc-400 hover:text-zinc-600 hover:bg-zinc-100 rounded transition-colors">
                        <i class="ri-refresh-line"></i>
                    </button>
                </div>
                <div class="text-sm text-zinc-600 dark:text-zinc-200">
                    <span class="font-medium">2 unread</span> • 12 total
                </div>
            </div>
            <!-- Email List -->
            <div class="flex-1 overflow-y-auto">
                <!-- Email Item 1 - Unread -->
                <div
                    class="p-4 border-b border-zinc-100 dark:border-zinc-600 hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                    <div class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-2 flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between mb-1">
                                <div class="font-semibold text-zinc-900 dark:text-zinc-200 text-sm truncate">Netflix
                                </div>
                                <div class="text-xs text-zinc-500 dark:text-zinc-400 flex-shrink-0 ml-2">2m ago</div>
                            </div>
                            <div class="font-medium text-sm text-zinc-900 dark:text-zinc-400 mb-1 truncate">Welcome to
                                Netflix - Verify
                                your account</div>
                            <div class="text-xs text-zinc-600 dark:text-zinc-200 line-clamp-2">Please click the link
                                below to verify your
                                email address and complete your Netflix registration...</div>
                        </div>
                    </div>
                </div>
                <!-- Email Item 2 - Unread -->
                <div
                    class="p-4 border-b border-zinc-100 dark:border-zinc-600 hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                    <div class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-2 flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between mb-1">
                                <div class="font-semibold text-zinc-900 dark:text-zinc-200 text-sm truncate">Amazon
                                </div>
                                <div class="text-xs text-zinc-500 dark:text-zinc-400 flex-shrink-0 ml-2">5m ago</div>
                            </div>
                            <div class="font-medium text-sm text-zinc-900 dark:text-zinc-400 mb-1 truncate">Your Amazon
                                verification code
                            </div>
                            <div class="text-xs text-zinc-600 dark:text-zinc-200 line-clamp-2">Your verification code is
                                847293. Please
                                enter this code to complete your account setup...</div>
                        </div>
                    </div>
                </div>
                <!-- Email Item 3 - Unread -->
                <div
                    class="p-4 border-b border-zinc-100 dark:border-zinc-600 hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                    <div class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-2 flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between mb-1">
                                <div class="font-semibold text-zinc-900 dark:text-zinc-200 text-sm truncate">GitHub
                                </div>
                                <div class="text-xs text-zinc-500 dark:text-zinc-400 flex-shrink-0 ml-2">8m ago</div>
                            </div>
                            <div class="font-medium text-sm text-zinc-900 dark:text-zinc-400 mb-1 truncate">Verify your
                                email address
                            </div>
                            <div class="text-xs text-zinc-600 dark:text-zinc-200 line-clamp-2">Please verify your email
                                address by
                                clicking the button below to activate your GitHub account...</div>
                        </div>
                    </div>
                </div>

               
                
            </div>

        </div>
    </div>
