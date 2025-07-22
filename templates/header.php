<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoRide</title>
  <!-- Inclusion Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../Page/CSS/style.css">
</head>



<?php

use App\Routing\Router;

Router::isActiveRoute("/about/");

?>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
<a href="#" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-10 h-10 p-2 rounded-full" style="background-color: #A7D8DE; color: #2C6E91;">
    <path d="M5 16c-1.1 0-1.99.9-1.99 2S3.9 20 5 20s2-.9 2-2-.9-2-2-2zM19 16c-1.1 0-1.99.9-1.99 2S17.9 20 19 20s2-.9 2-2-.9-2-2-2zM5.85 12h12.3c.69 0 1.2-.72.95-1.36L17.4 6.2c-.18-.38-.58-.62-1-.62H7.6c-.42 0-.81.24-1 .62L4.9 10.64c-.25.64.26 1.36.95 1.36zM18 10H6l-1.5 4.5h13L18 10z"/>
  </svg>
  <span class="ml-3 text-xl">EcoRide</span>
</a>
    <div class="header">
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900">Acceuil</a>
      <a class="mr-5 hover:text-gray-900">Covoiturage</a>
      <a class="mr-5 hover:text-gray-900">Coordonnées</a>
      <a class="mr-5 hover:text-gray-900">Connexion</a>
    </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    </div>
  </div>
</header>
</body>

</html>