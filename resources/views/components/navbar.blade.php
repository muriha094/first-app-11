
<nav class="fixed top-0 left-0 right-0 bg-white/70 backdrop-blur-md shadow-sm z-50" 
     x-data="{ mobileOpen: false, profileOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      
      <!-- Logo -->
      <div class="flex items-center">
        <a href="/" class="flex items-center space-x-2">
          <!-- Pakai Font Awesome -->
          <i class="fa-solid fa-pen-nib text-indigo-600 text-2xl"></i>
          <span class="text-xl font-bold text-gray-800">Light in Letters</span>
        </a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </div>

      <!-- Profile Dropdown -->
      <div class="hidden md:block relative">
        <button @click="profileOpen = !profileOpen" 
                class="flex items-center rounded-full focus:outline-none ring-2 ring-indigo-500 transition">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" 
               alt="" class="size-9 rounded-full" />
        </button>
        <div x-show="profileOpen" @click.away="profileOpen = false" 
             x-transition 
             class="absolute right-0 mt-2 w-48 rounded-xl bg-white py-2 shadow-lg border">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your profile</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <div class="flex md:hidden">
        <button @click="mobileOpen = !mobileOpen" 
                class="p-2 rounded-md text-gray-700 hover:bg-gray-200 transition">
          <!-- Icon Menu -->
          <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon Close -->
          <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="mobileOpen" x-transition 
       class="md:hidden bg-white/90 backdrop-blur-md border-t">
    <div class="space-y-1 px-4 py-3">
      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
      <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
      <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </div>
    <div class="border-t px-4 py-3">
      <div class="flex items-center">
        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" 
             alt="" class="size-10 rounded-full" />
        <div class="ml-3">
          <div class="text-base font-medium text-gray-900">Jane Doe</div>
          <div class="text-sm font-medium text-gray-500">jane.doe@example.com</div>
        </div>
      </div>
      <div class="mt-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-100">Your profile</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-100">Settings</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-100">Sign out</a>
      </div>
    </div>
  </div>
</nav>
