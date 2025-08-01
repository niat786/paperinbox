  <header class="bg-white/40 backdrop-blur-lg border-b border-white/20 shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-2xl font-['Pacifico'] text-primary">logo</a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('about-us') }}" class="text-gray-600 hover:text-primary transition-colors">About</a>
                <a href="{{ route('disclaimer') }}" class="text-gray-600 hover:text-primary transition-colors">Disclaimer</a>
                <a href="{{ route('privacy') }}" class="text-gray-600 hover:text-primary transition-colors">Privacy</a>
                <a href="{{ route('pricing') }}" class="text-gray-600 hover:text-primary transition-colors">Pricing</a>
               
                    <flux:button href="{{ route('login') }}" size="sm" varient="Primary">Get Started</flux:button>

            </div>
            <button
                class="md:hidden w-10 h-10 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full">
                <i class="ri-menu-line ri-lg"></i>
            </button>
        </div>
    </header>