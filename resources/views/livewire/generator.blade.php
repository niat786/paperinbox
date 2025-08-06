<div id="generator">
    <div class="bg-white rounded-lg shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow">
        <div class="flex items-center mb-4">
            <div class="w-12 h-12 flex items-center justify-center bg-emerald-100 rounded-full text-secondary mr-4">
                <i class="ri-mail-add-line ri-xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Email Generator</h3>
        </div>

        <p class="text-gray-600 mb-6">Generate professional email addresses with job titles instantly.</p>

        <div class="mb-6">
            <div class="flex items-center justify-between mb-4">
                <span class="font-medium">Generation Mode</span>
                <div class="flex items-center gap-3">
                    <span class="text-sm text-gray-500">Single</span>
                    <label class="custom-switch">
                        <input type="checkbox" wire:model.live="mode">
                        <span class="slider"></span>
                    </label>
                    <span class="text-sm text-gray-500">Bulk</span>
                </div>
            </div>

            <!-- Single Email Generation -->
            @if ($mode == 0)
                <div>
                    <button wire:click="generateSingleEmail" wire:loading.attr="disabled"
                        class="w-full bg-secondary text-white py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors mb-4">


                        <!-- Show when not loading -->
                        <span wire:loading.remove wire:target="generateSingleEmail">Generate Random Email</span>

                        <!-- Show loader when loading -->
                        <span wire:loading wire:target="generateSingleEmail" class="text-white animate-spin">
                            <i class="ri-loader-line size-7"></i>
                        </span>

                    </button>
                </div>
            @endif

            <!-- Bulk Email Generation -->
            @if ($mode == 1)
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Number of Emails</label>

                    <input type="number" wire:model="bulkCount" min="1" max="100"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                </div>
                <button wire:click="generateBulkEmails" wire:loading.attr="disabled"
                    class="w-full bg-secondary text-white py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors mb-4">

                    <!-- Show when not loading -->
                    <span wire:loading.remove wire:target="generateBulkEmails">Generate Random Emails</span>

                    <!-- Show loader when loading -->
                    <span wire:loading wire:target="generateBulkEmails" class="text-white animate-spin">
                        <i class="ri-loader-line size-7"></i>
                    </span>
                </button>
            @endif
        </div>

        @if (!empty($generatedEmails))
            <div class="bg-gray-50 rounded-lg p-4 mb-4 max-h-[50vh] overflow-y-auto">
                <h4 class="font-medium mb-3">Generated Email(s)</h4>
                @if ($bulkMaxMessage)
                    <p class="text-sm text-green-600 my-3">{{ $bulkMaxMessage }}</p>
                @endif
                <div class="space-y-3">
                    @foreach ($generatedEmails as $email)
                        <div class="flex items-center justify-between bg-white p-3 rounded">
                            <div>
                                <span class="font-mono text-sm block">{{ $email['email'] }}</span>
                                <span class="text-sm text-gray-600">{{ $email['title'] }}</span>
                            </div>
                            <button
                                class="text-gray-500 hover:text-gray-700 w-8 h-8 flex items-center justify-center copy-email-btn"
                                data-email="{{ $email['email'] }}" type="button">
                                <i class="ri-clipboard-line"></i>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end">
                <form wire:submit.prevent="downloadCsv">
                    <button type="submit" class="text-secondary flex items-center hover:underline">
                        Download as CSV <i class="ri-download-line ri-lg ml-1"></i>
                    </button>
                </form>
            </div>
        @endif
         <p class="text-center text-sm treaking-wider"><a href="{{ route('login') }}" class="text-emerald-600">Login</a> for more advance tools</p>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function(e) {
                const btn = e.target.closest('.copy-email-btn');
                if (btn) {
                    const email = btn.getAttribute('data-email');
                    navigator.clipboard.writeText(email)
                        .then(() => {
                            btn.classList.add('text-green-500');
                            setTimeout(() => {
                                btn.classList.remove('text-green-500');
                            }, 1000);
                        })
                        .catch(() => {
                            alert('Failed to copy email.');
                        });
                }
            });
        });
    </script>
@endpush
