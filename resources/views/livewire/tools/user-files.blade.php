<div class="max-w-6xl mx-auto p-6">
    <!-- View Mode Switch -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-zinc-800 dark:text-zinc-100">Your Files</h2>
        <div class="flex gap-2">
            <button wire:click="setViewMode('list')"
                class="p-2 rounded hover:bg-zinc-100 dark:hover:bg-zinc-700 {{ $viewMode === 'list' ? 'bg-zinc-200 dark:bg-zinc-700' : '' }}">
                <flux:icon.list class="size-5" />
            </button>
            <button wire:click="setViewMode('grid')"
                class="p-2 rounded hover:bg-zinc-100 dark:hover:bg-zinc-700 {{ $viewMode === 'grid' ? 'bg-zinc-200 dark:bg-zinc-700' : '' }}">
                <flux:icon.layout-grid class="size-5" />
            </button>
        </div>
    </div>

    @if ($viewMode === 'list')
        <!-- List View -->
        <div class="space-y-4">
            @foreach ($files as $file)
                <div
                    class="flex justify-between items-center bg-white dark:bg-zinc-800 p-4 rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-700">
                    <div class="flex items-center gap-3">
                        <i class="ri-file-3-line text-zinc-500 text-xl"></i>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">{{ $file['name'] }}</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">{{ $file['date'] }}</p>
                        </div>
                    </div>


                    <div class="flex gap-3">
                        <flux:button href="{{ $file['url'] }}" download="{{ $file['name'] }}" icon="monitor-down">
                            Download
                        </flux:button>
                        <flux:dropdown>
                            <flux:button icon:trailing="chevron-down">Options</flux:button>

                            <flux:menu>
                                <flux:menu.item icon="plus">New post</flux:menu.item>

                                <flux:menu.separator />

                                <flux:menu.submenu heading="Sort by">
                                    <flux:menu.radio.group>
                                        <flux:menu.radio checked>Name</flux:menu.radio>
                                        <flux:menu.radio>Date</flux:menu.radio>
                                        <flux:menu.radio>Popularity</flux:menu.radio>
                                    </flux:menu.radio.group>
                                </flux:menu.submenu>

                                <flux:menu.submenu heading="Filter">
                                    <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                                    <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                                    <flux:menu.checkbox>Archived</flux:menu.checkbox>
                                </flux:menu.submenu>

                                <flux:menu.separator />

                                <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </div>

                </div>
            @endforeach
        </div>
    @else
        <!-- Grid View -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($files as $file)
                <div
                    class="bg-white dark:bg-zinc-800 p-4 rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-700 flex flex-col justify-between">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="ri-file-line text-zinc-500 text-2xl"></i>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">{{ $file['name'] }}</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">{{ $file['date'] }}</p>
                        </div>
                    </div>
                     <div class="flex gap-3">
                        <flux:button href="{{ $file['url'] }}" download="{{ $file['name'] }}" icon="monitor-down">
                            Download
                        </flux:button>
                        <flux:dropdown>
                            <flux:button icon:trailing="chevron-down">Options</flux:button>

                            <flux:menu>
                                <flux:menu.item icon="plus">New post</flux:menu.item>

                                <flux:menu.separator />

                                <flux:menu.submenu heading="Sort by">
                                    <flux:menu.radio.group>
                                        <flux:menu.radio checked>Name</flux:menu.radio>
                                        <flux:menu.radio>Date</flux:menu.radio>
                                        <flux:menu.radio>Popularity</flux:menu.radio>
                                    </flux:menu.radio.group>
                                </flux:menu.submenu>

                                <flux:menu.submenu heading="Filter">
                                    <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                                    <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                                    <flux:menu.checkbox>Archived</flux:menu.checkbox>
                                </flux:menu.submenu>

                                <flux:menu.separator />

                                <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
