<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-start">
    <!-- Single Email Generator -->
    <div class=" p-6 shadow rounded-xl border dark:border-zinc-600">
        <h2 class="text-xl font-semibold mb-4">Single Email Generator</h2>
        <flux:description>
            Generate a realistic test email address with an associated job title instantly. Ideal for quick testing or
            demo purposes.
        </flux:description>

        <flux:button wire:click="generateSingle" class="my-3">Generate Email</flux:button>

        @if ($singleEmail)
            <div class="mt-4 flex flex-col gap-2 border dark:border-zinc-700 border-dashed my-3 rounded-lg p-3">
                <p class="font-mono flex items-center">Email: {{ $singleEmail[0]['email'] }}
                    <span class="cursor-pointer hover:scale-105"
                        onclick="navigator.clipboard.writeText('{{ $singleEmail[0]['email'] }}')">
                        <svg class="size-4 ml-2 text-gray-500  dark:text-gray-300 lucide lucide-copy-icon lucide-copy" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                    </span>
                </p>
                <p class="font-mono">Job Title: ({{ $singleEmail[0]['job_title'] }}) </p>
            </div>
        @endif
    </div>

    <!-- Bulk Email Generator -->
    <div class=" p-6 shadow rounded-xl border dark:border-zinc-600">
        <h2 class="text-xl font-semibold mb-4">Bulk Email Generator</h2>
        <div class="flex flex-col gap-2 mb-4">
            <flux:description>
                Create multiple fake email addresses in one click, each with a job title. Perfect for load testing, bulk
                form filling, or mock data generation.<span class="text-orange-600"> Max(100)</span>
            </flux:description>
            <flux:input type="number" wire:model.defer="bulkCount" min="1" max="100" />
            <flux:button wire:click="generateBulk" class="my-3">Generate Bulk Emails</flux:button>

        </div>

        @if (count($bulkEmails))
            <div x-data
                x-on:download-csv.window="window.location.href='{{ route('test-emails-paperinbox.download') }}'">
                <!-- Your download button -->
                <button wire:click="triggerDownload" class="text-sm cursor-pointer text-blue-600 hover:underline">
                    Download CSV
                </button>
            </div>


            <div @class([
                'space-y-2 overflow-y-auto max-h-96',
                'max-h-60' => count($bulkEmails) > 10,
            ])>
                @foreach ($bulkEmails as $email)
                    <div class="flex items-center gap-2 border dark:border-zinc-700 border-dashed my-3 rounded-lg p-3">
                        <div>
                            <span class="font-mono">{{ $email['email'] }}</span>
                            <span class="text-sm text-gray-500">({{ $email['job_title'] }})</span>
                        </div>

                        <span class="cursor-pointer hover:scale-105"
                            onclick="navigator.clipboard.writeText('{{ $email['email'] }}')">
                        <svg class="size-4 ml-2 text-gray-500  dark:text-gray-300 lucide lucide-copy-icon lucide-copy" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
