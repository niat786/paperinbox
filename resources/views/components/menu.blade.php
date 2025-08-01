<header class="bg-white/40 backdrop-blur-lg border-b border-white/20 shadow-sm sticky top-0 z-50">
  <div class="container mx-auto px-4 py-3 flex items-center justify-between relative">
    <a href="/" class="text-2xl font-['Pacifico'] text-primary flex items-center gap-2">
      <img src="{{ asset('paperinbox-logo.webp') }}" class="h-10 w-auto" alt="Logo" />
    </a>

    <!-- Desktop Links -->
    <div class="hidden md:flex items-center space-x-8">
      <a href="{{ route('about-us') }}" class="text-gray-600 hover:text-primary transition-colors">About</a>
      <a href="{{ route('disclaimer') }}" class="text-gray-600 hover:text-primary transition-colors">Disclaimer</a>
      <a href="{{ route('privacy') }}" class="text-gray-600 hover:text-primary transition-colors">Privacy</a>
      <a href="{{ route('pricing') }}" class="text-gray-600 hover:text-primary transition-colors">Pricing</a>
      <flux:button href="{{ route('login') }}" size="sm" varient="Primary">Get Started</flux:button>
    </div>

    <!-- Mobile Toggle -->
    <button
      id="mobile-menu-button"
      aria-controls="mobile-menu"
      aria-expanded="false"
      class="md:hidden w-10 h-10 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full transition"
    >
      <i class="ri-menu-line ri-lg" aria-hidden="true"></i>
      <span class="sr-only">Toggle menu</span>
    </button>

    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      class="md:hidden hidden absolute inset-x-4 top-full mt-2 bg-white/95 backdrop-blur-lg rounded-xl border border-white/30 shadow-lg z-40"
    >
      <div class="flex flex-col px-5 py-4 space-y-3">
        <a href="{{ route('about-us') }}" class="block text-gray-700 hover:text-primary transition">About</a>
        <a href="{{ route('disclaimer') }}" class="block text-gray-700 hover:text-primary transition">Disclaimer</a>
        <a href="{{ route('privacy') }}" class="block text-gray-700 hover:text-primary transition">Privacy</a>
        <a href="{{ route('pricing') }}" class="block text-gray-700 hover:text-primary transition">Pricing</a>
        <div class="pt-2">
          <flux:button href="{{ route('login') }}" size="sm" varient="Primary" class="w-full">Get Started</flux:button>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Toggle Script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', (e) => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!expanded));
      menu.classList.toggle('hidden');
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!menu.contains(e.target) && !btn.contains(e.target) && !menu.classList.contains('hidden')) {
        menu.classList.add('hidden');
        btn.setAttribute('aria-expanded', 'false');
      }
    });

    // Optional: close on escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
        menu.classList.add('hidden');
        btn.setAttribute('aria-expanded', 'false');
      }
    });
  });
</script>