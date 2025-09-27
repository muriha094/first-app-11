<x-layout>
  <x-slot:title>Contact</x-slot:title>

  <div class="container mx-auto px-6 py-16">
      <!-- Judul & Sambutan -->
      <div 
        class="text-center mb-12 opacity-0 translate-y-6 transition-all duration-1000 ease-out"
        x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 200)"
        x-bind:class="show ? 'opacity-100 translate-y-0' : ''"
      >
          <h1 class="text-4xl font-bold text-gray-800 mb-4">Hubungi <span class="text-indigo-600">Light in Letters</span> 📬</h1>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
              Ada pertanyaan, ide, atau ingin menyampaikan keluhan ?  
              Silakan hubungi kami lewat form di bawah atau media sosial yang tersedia.
          </p>
      </div>

      <!-- Grid Kontak + Form -->
      <div class="grid md:grid-cols-2 gap-10">
          <!-- Informasi Kontak -->
          <div 
            class="bg-white shadow-lg rounded-2xl p-6 opacity-0 -translate-x-6 transition-all duration-1000 ease-out"
            x-data="{ show: false }"
            x-init="setTimeout(() => show = true, 400)"
            x-bind:class="show ? 'opacity-100 translate-x-0' : ''"
          >
              <h2 class="text-2xl font-semibold text-indigo-700 mb-4">📞 Informasi Kontak</h2>
              <ul class="space-y-4 text-gray-600">
                  <li><strong>Email:</strong> hello@lightinletters.com</li>
                  <li><strong>WhatsApp:</strong> +62 812 3456 7890</li>
                  <li><strong>Alamat:</strong> Jakarta, Indonesia</li>
              </ul>

              <!-- Social Media -->
              <div class="flex space-x-4 mt-6">
                  <a href="#" class="text-gray-500 hover:text-indigo-600 text-2xl"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="text-gray-500 hover:text-indigo-600 text-2xl"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="text-gray-500 hover:text-indigo-600 text-2xl"><i class="fab fa-instagram"></i></a>
              </div>
          </div>

          <!-- Formulir Kontak -->
          <div 
            class="bg-white shadow-lg rounded-2xl p-6 opacity-0 translate-x-6 transition-all duration-1000 ease-out"
            x-data="{ show: false }"
            x-init="setTimeout(() => show = true, 600)"
            x-bind:class="show ? 'opacity-100 translate-x-0' : ''"
          >
              <h2 class="text-2xl font-semibold text-indigo-700 mb-4">💌 Kirim Pesan</h2>
              <form action="#" method="POST" class="space-y-4">
                  @csrf
                  <div>
                      <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                      <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                  </div>
                  <div>
                      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                      <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                  </div>
                  <div>
                      <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                      <textarea id="message" name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                  </div>
                  <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                      Kirim
                  </button>
              </form>
          </div>
      </div>
  </div>
</x-layout>
