<!-- Navbar -->
<nav class="bg-gray-800" x-data="{ mobileOpen: false, profileOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      
      <!-- Logo & Desktop Menu -->
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg" alt="Your Company" class="size-8" />
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
          </div>
        </div>
      </div>
      
      <!-- Desktop Profile Dropdown -->
      <div class="hidden md:block relative">
        <button @click="profileOpen = !profileOpen" class="flex items-center rounded-full focus:outline-none">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="" class="size-8 rounded-full" />
        </button>
        <div x-show="profileOpen" @click.away="profileOpen = false" 
             x-transition 
             class="absolute right-0 mt-2 w-48 rounded-md bg-white py-1 shadow-lg">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your profile</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <div class="flex md:hidden">
        <button @click="mobileOpen = !mobileOpen" class="p-2 text-gray-400 hover:bg-white/5 hover:text-white rounded-md">
          <!-- Icon Menu -->
          <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon Close -->
          <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu Items -->
  <div x-show="mobileOpen" x-transition class="md:hidden border-t border-gray-700">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
      <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
      <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </div>
    <!-- Mobile Profile Menu -->
    <div class="border-t border-gray-700 px-4 py-3">
      <div class="flex items-center">
        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="" class="size-10 rounded-full" />
        <div class="ml-3">
          <div class="text-base font-medium text-white">Jane Doe</div>
          <div class="text-sm font-medium text-gray-400">jane.doe@example.com</div>
        </div>
      </div>
      <div class="mt-3 space-y-1">
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 rounded-md">Your profile</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 rounded-md">Settings</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 rounded-md">Sign out</a>
      </div>
    </div>
  </div>
</nav>
