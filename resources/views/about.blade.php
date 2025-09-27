<x-layout>
  <x-slot:title>About Us</x-slot:title>

  <div class="container mx-auto px-6 py-16">
      <!-- Judul -->
      <div 
        class="text-center mb-12 opacity-0 translate-y-6 transition-all duration-1000 ease-out"
        x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 200)"
        x-bind:class="show ? 'opacity-100 translate-y-0' : ''"
      >
          <h1 class="text-4xl font-bold text-gray-800 mb-4">Tentang <span class="text-indigo-600">Light in Letters</span></h1>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">Cahaya yang lahir dari kata-kata ✨</p>
      </div>

      <!-- Section: Apa itu -->
      <div class="grid md:grid-cols-2 gap-10">
          <div 
            class="p-6 bg-white shadow-lg rounded-xl opacity-0 translate-x-6 transition-all duration-1000 ease-out"
            x-data="{ show: false }"
            x-init="setTimeout(() => show = true, 400)"
            x-bind:class="show ? 'opacity-100 translate-x-0' : ''"
          >
              <h2 class="text-2xl font-semibold text-indigo-700 mb-4">📖 Apa itu Light in Letters?</h2>
              <p class="text-gray-600 leading-relaxed">
                  Light in Letters adalah ruang di mana kata-kata menjadi sumber pencerahan, harapan, dan inspirasi.  
                  Setiap tulisan di sini lahir untuk membawa cahaya baru bagi siapa saja yang membacanya.
              </p>
          </div>

          <!-- Section: Mengapa ada -->
          <div 
            class="p-6 bg-white shadow-lg rounded-xl opacity-0 -translate-x-6 transition-all duration-1000 ease-out"
            x-data="{ show: false }"
            x-init="setTimeout(() => show = true, 600)"
            x-bind:class="show ? 'opacity-100 translate-x-0' : ''"
          >
              <h2 class="text-2xl font-semibold text-indigo-700 mb-4">🌟 Mengapa Light in Letters ada?</h2>
              <p class="text-gray-600 leading-relaxed">
                  Karena setiap orang butuh ruang untuk merenung, berbagi cerita, dan menemukan motivasi.  
                  Blog ini hadir untuk menemani perjalanan hidupmu dengan cerita yang hangat, reflektif, dan penuh makna.
              </p>
          </div>
      </div>

      <!-- Section: Perbedaan -->
      <div 
        class="mt-12 p-6 bg-gradient-to-r from-indigo-50 to-white border-l-4 border-indigo-600 shadow rounded-xl opacity-0 translate-y-6 transition-all duration-1000 ease-out"
        x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 800)"
        x-bind:class="show ? 'opacity-100 translate-y-0' : ''"
      >
          <h2 class="text-2xl font-semibold text-indigo-700 mb-4">✨ Apa yang membuat Light in Letters berbeda?</h2>
          <p class="text-gray-700 leading-relaxed">
              Tidak hanya sekadar blog. Light in Letters adalah perpaduan antara personal touch dan inspirasi universal.  
              Setiap tulisan dirancang untuk memberi semangat, refleksi, dan keindahan artistik, seolah-olah pembaca sedang menerima sebuah surat pribadi yang penuh cahaya.
          </p>
      </div>
  </div>
</x-layout>
