<div class="w-full py-8 -z-10 md:px-6">
        <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600">
            <div class="p-8">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-2">Compose Email Template</h1>
                    <p class="text-gray-600 dark:text-gray-400">Create and send personalized emails to multiple recipients</p>
                </div>
                <div class="space-y-8">
                    <div class="border-b border-zinc-200 dark:border-zinc-400 pb-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Sender</h2>
                        <div class="flex bg-gray-100 dark:bg-zinc-700  rounded-lg p-1 mb-6 max-w-md">
                            <button id="senderEmailInputTab"
                                class="flex-1 px-4 py-2 text-sm font-medium rounded-md transition-all duration-200 bg-white dark:bg-zinc-800 text-blue-500 dark:text-orange-600 shadow-sm">
                                Enter Email Address
                            </button>
                            <button id="senderFileUploadTab"
                                class="flex-1 px-4 py-2 text-sm font-medium rounded-md transition-all duration-200 text-gray-500 ">
                                Upload Email List
                            </button>
                        </div>
                        <div id="senderEmailInputSection" class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2 dark:text-gray-400">Sender Email Address</label>
                                <input type="email" id="senderEmailInput"
                                    class="w-full px-4 py-3 border border-zinc-300 dark:border-zinc-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                                    placeholder="Enter sender email address" />
                                <div id="senderEmailValidation" class="text-sm text-gray-500 mt-2"></div>
                            </div>
                        </div>
                        <div id="senderFileUploadSection" class="hidden space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Sender Email
                                    List</label>
                                <div class="upload-zone rounded-lg p-8 text-center cursor-pointer"
                                    id="senderUploadZone">
                                    <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center">
                                        <i class="ri-upload-cloud-2-line text-2xl text-gray-400"></i>
                                    </div>
                                    <p class="text-gray-600 mb-2">Drag & drop your file here, or <span
                                            class="text-blue-500 font-medium">click to browse</span></p>
                                    <p class="text-sm text-gray-500">Supports CSV, TXT files up to 5MB</p>
                                    <input type="file" id="senderFileInput" class="hidden" accept=".csv,.txt" />
                                </div>
                                <div id="senderUploadProgress" class="hidden mt-4">
                                    <div class="bg-gray-200 rounded-full h-2">
                                        <div class="progress-bar bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">Uploading...</p>
                                </div>
                                <div id="senderFilePreview" class="hidden mt-4 p-4 bg-gray-50 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 flex items-center justify-center">
                                                <i class="ri-file-text-line text-lg text-gray-500"></i>
                                            </div>
                                            <div>
                                                <p id="senderFileName" class="text-sm font-medium text-gray-900"></p>
                                                <p id="senderFileInfo" class="text-xs text-gray-500"></p>
                                            </div>
                                        </div>
                                        <button id="removeSenderFile"
                                            class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-red-500">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-zinc-200 dark:border-zinc-400 pb-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recipients</h2>
                        <div class="flex bg-gray-100 dark:bg-zinc-700 rounded-lg p-1 mb-6 max-w-md">
                           

                            <button id="emailInputTab"
                                class="flex-1 px-4 py-2 text-sm font-medium rounded-md transition-all duration-200 bg-white dark:bg-zinc-800 text-blue-500 dark:text-orange-600 shadow-sm">
                                Enter Email Address
                            </button>
                            <button id="fileUploadTab"
                                class="flex-1 px-4 py-2 text-sm font-medium rounded-md transition-all duration-200 text-gray-500 ">
                                Upload Email List
                            </button>

                        </div>
                        <div id="emailInputSection" class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-400 mb-2">Email Addresses</label>
                                <textarea id="emailInput"
                                    class="w-full h-32 px-4 py-3 border border-zinc-300 dark:border-zinc-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none text-sm"
                                    placeholder="Enter email addresses separated by commas (e.g., john@example.com, sarah@company.com, mike@business.org)"></textarea>
                                <div class="flex justify-between items-center mt-2">
                                    <div id="emailValidation" class="text-sm text-gray-500"></div>
                                    <div id="emailCount" class="text-sm font-medium text-gray-700 dark:text-gray-400">0 emails</div>
                                </div>
                            </div>
                            <div id="emailTags" class="flex flex-wrap gap-2"></div>
                        </div>
                        <div id="fileUploadSection" class="hidden space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700  mb-2">Upload Email List</label>
                                <div class="upload-zone rounded-lg p-8 text-center cursor-pointer" id="uploadZone">
                                    <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center">
                                        <i class="ri-upload-cloud-2-line text-2xl text-gray-400"></i>
                                    </div>
                                    <p class="text-gray-600 mb-2">Drag & drop your file here, or <span
                                            class="text-blue-500 font-medium">click to browse</span></p>
                                    <p class="text-sm text-gray-500">Supports CSV, TXT files up to 5MB</p>
                                    <input type="file" id="fileInput" class="hidden" accept=".csv,.txt" />
                                </div>
                                <div id="uploadProgress" class="hidden mt-4">
                                    <div class="bg-gray-200 rounded-full h-2">
                                        <div class="progress-bar bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">Uploading...</p>
                                </div>
                                <div id="filePreview" class="hidden mt-4 p-4 bg-gray-50 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 flex items-center justify-center">
                                                <i class="ri-file-text-line text-lg text-gray-500"></i>
                                            </div>
                                            <div>
                                                <p id="fileName" class="text-sm font-medium text-gray-900"></p>
                                                <p id="fileInfo" class="text-xs text-gray-500"></p>
                                            </div>
                                        </div>
                                        <button id="removeFile"
                                            class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-red-500">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-400 mb-2">Subject Line</label>
                            <input type="text" id="subjectInput"
                                class="w-full px-4 py-3 border border-zinc-300 dark:border-zinc-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                                placeholder="Enter your email subject"
                                value="Exclusive Offer: 30% Off Premium Plans - Limited Time Only" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-400 mb-2">Email Content</label>
                            <div class="border border-zinc-300 dark:border-zinc-500 rounded-lg overflow-hidden dark:bg-zinc-800">
                                <div class="bg-gray-50 dark:bg-zinc-600 px-4 py-2 border-b border-zinc-200 dark:border-zinc-400 flex items-center space-x-2">
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-bold text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-italic text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-underline text-sm"></i>
                                    </button>
                                    <div class="w-px h-4 bg-gray-300"></div>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-list-unordered text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-list-ordered text-sm"></i>
                                    </button>
                                    <div class="w-px h-4 bg-gray-300"></div>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-link text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-zinc-800 rounded text-gray-600 dark:text-gray-200">
                                        <i class="ri-image-line text-sm"></i>
                                    </button>
                                </div>
                                <div id="emailContent" class="rich-editor border-none" contenteditable="true">
                                    <p>Dear Valued Customer,</p>
                                    <br>
                                    <p>We're excited to offer you an exclusive <strong>30% discount</strong> on all our
                                        premium plans! This limited-time offer is our way of saying thank you for being
                                        part of our community.</p>
                                    <br>
                                    <p><strong>What's included:</strong></p>
                                    <ul>
                                        <li>Advanced analytics and reporting</li>
                                        <li>Priority customer support</li>
                                        <li>Unlimited integrations</li>
                                        <li>Custom branding options</li>
                                    </ul>
                                    <br>
                                    <p>Use code <strong>PREMIUM30</strong> at checkout before December 31st to claim
                                        your discount.</p>
                                    <br>
                                    <p>Best regards,<br>The Team</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-400 mb-2">Attachments</label>
                            <div class="flex items-center space-x-4">
                                <button
                                    class="flex items-center space-x-2 px-4 py-2 border dark:bg-transparent border-zinc-300 dark:border-zinc-500 rounded-lg hover:bg-gray-50 text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-attachment-2 text-sm text-gray-500"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-400 hover:text-gray-800">Add Attachment</span>
                                </button>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Maximum file size: 25MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-zinc-200 dark:border-zinc-400 pt-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <button
                                    class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-600 hover:text-gray-900 dark:hover:text-gray-400">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-eye-line text-sm"></i>
                                    </div>
                                    <span>Preview</span>
                                </button>
                                <button
                                    class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-600 hover:text-gray-900 dark:hover:text-gray-400">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-save-line text-sm"></i>
                                    </div>
                                    <span>Save Template</span>
                                </button>
                            </div>
                            <div class="flex items-center space-x-3">
                                <button
                                    class="px-6 py-3 border border-zinc-300 dark:border-zinc-500 rounded-xl text-gray-700 hover:bg-gray-50 font-medium whitespace-nowrap">
                                    Cancel
                                </button>
                                <button
                                    class="px-6 py-3 border border-zinc-300 dark:border-zinc-500 rounded-xl text-gray-700 hover:bg-gray-50 font-medium whitespace-nowrap">
                                    Save Draft
                                </button>
                                <button id="sendButton"
                                    class="px-8 py-3 bg-blue-500 text-white rounded-xl hover:bg-blue-600 font-medium whitespace-nowrap">
                                    Send Email
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
            <script id="tabSwitching">
        document.addEventListener('DOMContentLoaded', function() {
            const emailInputTab = document.getElementById('emailInputTab');
            const fileUploadTab = document.getElementById('fileUploadTab');
            const emailInputSection = document.getElementById('emailInputSection');
            const fileUploadSection = document.getElementById('fileUploadSection');

            function switchToEmailInput() {
                emailInputTab.classList.add('bg-white','dark:bg-zinc-800', 'text-blue-500','dark:text-orange-600', 'shadow-sm');
                emailInputTab.classList.remove('text-gray-500');
                fileUploadTab.classList.remove('bg-white', 'text-blue-500', 'shadow-sm','dark:text-orange-600','dark:bg-zinc-800');
                fileUploadTab.classList.add('text-gray-500');
                emailInputSection.classList.remove('hidden');
                fileUploadSection.classList.add('hidden');
            }

            function switchToFileUpload() {
                fileUploadTab.classList.add('bg-white','dark:bg-zinc-800', 'text-blue-500','dark:text-orange-600', 'shadow-sm');
                fileUploadTab.classList.remove('text-gray-500');
                emailInputTab.classList.remove('bg-white', 'text-blue-500', 'shadow-sm','dark:text-orange-600','dark:bg-zinc-800');
                emailInputTab.classList.add('text-gray-500');
                fileUploadSection.classList.remove('hidden');
                emailInputSection.classList.add('hidden');
            }
            emailInputTab.addEventListener('click', switchToEmailInput);
            fileUploadTab.addEventListener('click', switchToFileUpload);
        });
    </script>
    <script id="emailValidation">
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('emailInput');
            const emailValidation = document.getElementById('emailValidation');
            const emailCount = document.getElementById('emailCount');
            const emailTags = document.getElementById('emailTags');

            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email.trim());
            }

            function updateEmailValidation() {
                const input = emailInput.value;
                const emails = input.split(',').map(email => email.trim()).filter(email => email.length > 0);
                const validEmails = emails.filter(validateEmail);
                const invalidEmails = emails.filter(email => !validateEmail(email));
                emailCount.textContent = `${validEmails.length} emails`;
                if (invalidEmails.length > 0) {
                    emailValidation.textContent =
                        `${invalidEmails.length} invalid email${invalidEmails.length > 1 ? 's' : ''} found`;
                    emailValidation.className = 'text-sm text-red-600';
                } else if (validEmails.length > 0) {
                    emailValidation.textContent = 'All emails are valid';
                    emailValidation.className = 'text-sm text-green-600';
                } else {
                    emailValidation.textContent = '';
                }
                emailTags.innerHTML = '';
                emails.forEach(email => {
                    if (email.length > 0) {
                        const tag = document.createElement('span');
                        tag.className =
                            `email-tag px-3 py-1 rounded-full text-sm ${validateEmail(email) ? '' : 'invalid'}`;
                        tag.textContent = email;
                        emailTags.appendChild(tag);
                    }
                });
            }
            emailInput.addEventListener('input', updateEmailValidation);
        });
    </script>
    <script id="senderEmailValidation">
        document.addEventListener('DOMContentLoaded', function() {
            const senderEmailInput = document.getElementById('senderEmailInput');
            const senderEmailValidation = document.getElementById('senderEmailValidation');

            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email.trim());
            }

            function updateSenderEmailValidation() {
                const email = senderEmailInput.value.trim();
                if (email.length === 0) {
                    senderEmailValidation.textContent = '';
                } else if (validateEmail(email)) {
                    senderEmailValidation.textContent = 'Valid email address';
                    senderEmailValidation.className = 'text-sm text-green-600 mt-2';
                } else {
                    senderEmailValidation.textContent = 'Invalid email address';
                    senderEmailValidation.className = 'text-sm text-red-600 mt-2';
                }
            }
            senderEmailInput.addEventListener('input', updateSenderEmailValidation);
        });
    </script>
    <script id="senderTabSwitching">
        document.addEventListener('DOMContentLoaded', function() {
            const senderEmailInputTab = document.getElementById('senderEmailInputTab');
            const senderFileUploadTab = document.getElementById('senderFileUploadTab');
            const senderEmailInputSection = document.getElementById('senderEmailInputSection');
            const senderFileUploadSection = document.getElementById('senderFileUploadSection');

            function switchToSenderEmailInput() {
                senderEmailInputTab.classList.add('bg-white', 'text-blue-500', 'shadow-sm','dark:text-orange-600','dark:bg-zinc-800');
                senderEmailInputTab.classList.remove('text-gray-500');
                senderFileUploadTab.classList.remove('bg-white', 'text-blue-500','dark:text-orange-600', 'shadow-sm','dark:bg-zinc-800');
                senderFileUploadTab.classList.add('text-gray-500');
                senderEmailInputSection.classList.remove('hidden');
                senderFileUploadSection.classList.add('hidden');
            }

            function switchToSenderFileUpload() {
                senderFileUploadTab.classList.add('bg-white', 'dark:bg-zinc-800','dark:text-orange-600', 'text-blue-500', 'shadow-sm');
                senderFileUploadTab.classList.remove('text-gray-500');
                senderEmailInputTab.classList.remove('bg-white', 'text-blue-500','dark:text-orange-600', 'shadow-sm','dark:bg-zinc-800');
                senderEmailInputTab.classList.add('text-gray-500');
                senderFileUploadSection.classList.remove('hidden');
                senderEmailInputSection.classList.add('hidden');
            }
            senderEmailInputTab.addEventListener('click', switchToSenderEmailInput);
            senderFileUploadTab.addEventListener('click', switchToSenderFileUpload);
        });
    </script>
    <script id="senderFileUpload">
        document.addEventListener('DOMContentLoaded', function() {
            const senderUploadZone = document.getElementById('senderUploadZone');
            const senderFileInput = document.getElementById('senderFileInput');
            const senderUploadProgress = document.getElementById('senderUploadProgress');
            const senderFilePreview = document.getElementById('senderFilePreview');
            const senderFileName = document.getElementById('senderFileName');
            const senderFileInfo = document.getElementById('senderFileInfo');
            const removeSenderFile = document.getElementById('removeSenderFile');
            senderUploadZone.addEventListener('click', () => senderFileInput.click());
            senderUploadZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                senderUploadZone.classList.add('dragover');
            });
            senderUploadZone.addEventListener('dragleave', () => {
                senderUploadZone.classList.remove('dragover');
            });
            senderUploadZone.addEventListener('drop', (e) => {
                e.preventDefault();
                senderUploadZone.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleSenderFile(files[0]);
                }
            });
            senderFileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleSenderFile(e.target.files[0]);
                }
            });

            function handleSenderFile(file) {
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size exceeds 5MB limit');
                    return;
                }
                senderUploadProgress.classList.remove('hidden');
                const progressBar = senderUploadProgress.querySelector('.progress-bar');
                let progress = 0;
                const interval = setInterval(() => {
                    progress += 10;
                    progressBar.style.width = progress + '%';
                    if (progress >= 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                            senderUploadProgress.classList.add('hidden');
                            showSenderFilePreview(file);
                        }, 500);
                    }
                }, 100);
            }

            function showSenderFilePreview(file) {
                senderFileName.textContent = file.name;
                senderFileInfo.textContent = `${(file.size / 1024).toFixed(1)} KB • Estimated 50 sender emails`;
                senderFilePreview.classList.remove('hidden');
            }
            removeSenderFile.addEventListener('click', () => {
                senderFilePreview.classList.add('hidden');
                senderFileInput.value = '';
            });
        });
    </script>
    <script id="fileUpload">
        document.addEventListener('DOMContentLoaded', function() {
            const uploadZone = document.getElementById('uploadZone');
            const fileInput = document.getElementById('fileInput');
            const uploadProgress = document.getElementById('uploadProgress');
            const filePreview = document.getElementById('filePreview');
            const fileName = document.getElementById('fileName');
            const fileInfo = document.getElementById('fileInfo');
            const removeFile = document.getElementById('removeFile');
            uploadZone.addEventListener('click', () => fileInput.click());
            uploadZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadZone.classList.add('dragover');
            });
            uploadZone.addEventListener('dragleave', () => {
                uploadZone.classList.remove('dragover');
            });
            uploadZone.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadZone.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleFile(files[0]);
                }
            });
            fileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleFile(e.target.files[0]);
                }
            });

            function handleFile(file) {
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size exceeds 5MB limit');
                    return;
                }
                uploadProgress.classList.remove('hidden');
                const progressBar = uploadProgress.querySelector('.progress-bar');
                let progress = 0;
                const interval = setInterval(() => {
                    progress += 10;
                    progressBar.style.width = progress + '%';
                    if (progress >= 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                            uploadProgress.classList.add('hidden');
                            showFilePreview(file);
                        }, 500);
                    }
                }, 100);
            }

            function showFilePreview(file) {
                fileName.textContent = file.name;
                fileInfo.textContent = `${(file.size / 1024).toFixed(1)} KB • Estimated 1,247 emails`;
                filePreview.classList.remove('hidden');
            }
            removeFile.addEventListener('click', () => {
                filePreview.classList.add('hidden');
                fileInput.value = '';
            });
        });
    </script>
    @endpush

    @push('styles')
     <link
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
      rel="stylesheet"
    />
        <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .rich-editor {
            min-height: 200px;
            padding: 20px;
            outline: none;
        }

        .rich-editor:focus {
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .upload-zone {
            border: 2px dashed #d1d5db;
            transition: all 0.3s ease;
        }

        .upload-zone.dragover {
            border-color: #3B82F6;
            background-color: rgba(59, 130, 246, 0.05);
        }

        .email-tag {
            background-color: #eff6ff;
            color: #1e40af;
            border: 1px solid #bfdbfe;
        }

        .email-tag.invalid {
            background-color: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        .progress-bar {
            transition: width 0.3s ease;
        }
    </style>
    @endpush
