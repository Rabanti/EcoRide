
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




<body>

<header class="header">
  <div class="w-full mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
<a href="#" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-10 h-10 p-2 rounded-full" style="background-color: #A7D8DE; color: #2C6E91;">
    <path d="M5 16c-1.1 0-1.99.9-1.99 2S3.9 20 5 20s2-.9 2-2-.9-2-2-2zM19 16c-1.1 0-1.99.9-1.99 2S17.9 20 19 20s2-.9 2-2-.9-2-2-2zM5.85 12h12.3c.69 0 1.2-.72.95-1.36L17.4 6.2c-.18-.38-.58-.62-1-.62H7.6c-.42 0-.81.24-1 .62L4.9 10.64c-.25.64.26 1.36.95 1.36zM18 10H6l-1.5 4.5h13L18 10z"/>
  </svg>
  <span class="w-full ml-3 text-xl">EcoRide</span>
</a>

    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <button>      <a class="mr-5 hover:text-gray-900">Acceuil</a>   </button>

            <button>         <a class="mr-5 hover:text-gray-900">Covoiturage</a>    </button>
            
            <button>         <a class="mr-5 hover:text-gray-900">Coordonnées</a>    </button>

            <button>        <a class="mr-5 hover:text-gray-900">Connexion</a>    </button>

    </nav>

    <button class=" inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>





<section class=" presentation text-gray-600 body-font">
          <h1 class="h1">Formulaire</h1>

  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
    <h2 >Réserver un trajet</h2>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Nous avons besoin de plus d'information sur votre trajet pour comprendre vos besoin, renseignez votre Adresse de départ et d'arrivée ainsi que la date de départ</p>
    </div>
    <form method="POST" action="itineraire.php">
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      <div class="relative flex-grow w-full">
        <label for="adress" class="leading-7 text-sm text-gray-600">Adresse de départ</label>
        <input type="text" id="adress" name="adress" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative flex-grow w-full">
        <label for="adress" class="leading-7 text-sm text-gray-600">Adresse d'arrivée</label>
        <input type="adress" id="adress" name="adress" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
            <div class="relative flex-grow w-full">
        <label for="departureDate" class="leading-7 text-sm text-gray-600">Date de départ</label>
        <input type="date" id="date" name="date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
  
      <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Button</button>
    </div>

  </div>
  </form>
</section>


<footer class="header">

        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
<a href="#" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-10 h-10 p-2 rounded-full" style="background-color: #A7D8DE; color: #2C6E91;">
    <path d="M5 16c-1.1 0-1.99.9-1.99 2S3.9 20 5 20s2-.9 2-2-.9-2-2-2zM19 16c-1.1 0-1.99.9-1.99 2S17.9 20 19 20s2-.9 2-2-.9-2-2-2zM5.85 12h12.3c.69 0 1.2-.72.95-1.36L17.4 6.2c-.18-.38-.58-.62-1-.62H7.6c-.42 0-.81.24-1 .62L4.9 10.64c-.25.64.26 1.36.95 1.36zM18 10H6l-1.5 4.5h13L18 10z"/>
  </svg>
  <span class="ml-3 text-xl">EcoRide</span>
</a>            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2025 EcoRide —
                <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@EcoRide</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>


</footer>

</body>
</html>



