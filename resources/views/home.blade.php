<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title> 

  <div class="container mx-auto px-6 py-12">
      <!-- Sambutan -->
      <div class="text-center mb-10">
          <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di BlogKita 🚀</h1>
          <p class="text-lg text-gray-600">Temukan cerita, inspirasi, dan ide-ide segar setiap harinya.  
          Mari bergabung dan jadilah bagian dari komunitas berbagi pengetahuan.</p>
      </div>

      <!-- Card Statistik -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Card Users -->
          <div class="bg-white shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
              <h2 class="text-2xl font-semibold text-gray-700 mb-2">Total Pengguna</h2>
              <p class="text-5xl font-bold text-indigo-600">{{ $totalUsers }}</p>
              <p class="mt-2 text-gray-500">Bergabunglah dengan ratusan pengguna lainnya ✨</p>
          </div>

          <!-- Card Blog -->
          <div class="bg-white shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
              <h2 class="text-2xl font-semibold text-gray-700 mb-2">Jumlah Blog</h2>
              <p class="text-5xl font-bold text-green-600">{{ $totalBlogs }}</p>
              <p class="mt-2 text-gray-500">Nikmati artikel menarik dan bermanfaat 📖</p>
          </div>
      </div>

      <!-- Ajakan -->
      <div class="text-center mt-12">
          <a href="{{ url('#') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-xl shadow hover:bg-indigo-700 transition">
              Daftar Sekarang & Mulai Menulis ✍️
          </a>
      </div>
  </div>
</x-layout>
