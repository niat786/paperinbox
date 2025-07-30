    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-zinc-800 dark:text-zinc-100">Stylish Email Templates, Ready to Use</h1>
            <p class="mt-2 text-zinc-600 dark:text-zinc-400 max-w-2xl mx-auto">
               Explore a curated collection of responsive, professionally designed HTML email templates. Quickly enhance your email campaigns with beautiful layouts—ready to use with the PaperInbox API.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($templates as $template)
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow border border-zinc-200 dark:border-zinc-700 overflow-hidden">
                    <img src="{{ $template['thumbnail'] }}" alt="{{ $template['name'] }}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-100 truncate">
                            {{ $template['name'] }}
                        </h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1 truncate">
                            {{ $template['description'] }}
                        </p>
                        <div class="mt-5 flex justify-between items-center border-t dark:border-gray-600 pt-5">
                          
                            <flux:button size="sm"  href="{{ $template['preview_url'] }}">Preview</flux:button>

                            
                            <flux:button size="sm"  href="{{ $template['download_url'] }}">Use Template</flux:button>
                        
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
