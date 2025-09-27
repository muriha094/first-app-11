<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Light in Letters' }}</title> <!-- Title Dinamis -->
    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="h-full" x-data="{ mobileOpen: false, profileOpen: false }">
    
<div class="min-h-full">
  
  <x-navbar></x-navbar>

  <x-header>{{ $title ?? '' }}</x-header>

  <!-- Your Content -->
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6">
      {{ $slot }}
    </div>
  </main>

</div>

<x-footer />
</body>
</html>
