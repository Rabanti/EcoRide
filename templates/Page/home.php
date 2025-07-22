
<?php
require_once APP_ROOT . '/templates/header.php';
?>

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



<?php require_once APP_ROOT . "require APP_ROOT . '../public/index.php';"

?>

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

<body>
  <div class=" recherche w-full max-w-md mx-auto mt-6">
  <form action="#" method="GET" class=" recherche flex items-center border border-gray-300 rounded-lg overflow-hidden shadow-sm">
    <input 
      type="text" 
      name="search" 
      placeholder="Rechercher..." 
      class=" recherche w-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
    >
    <button class="recherche"     type ="submit">
      🔍
    </button>
  </form>
</div>



  <div class="presentation header" >
    <h2 >EcoRide Quesque c'est?</h2>

    <p>Ecoride est une plateforme de covoiturage en ligne crée en France en 2010,  soucieux de l'environnement?
    </p>  

    <p>
    le covoiturage est une excellente solution pour lutter contre la pollution.
    </p>
  </div>

<div class="image">
<img src="data:image/jpeg;base64,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
" alt="Image 1">
<img src="data:image/jpeg;base64,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

" alt="Image 2" >
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWULMmq1ylZ0CrEQDxJJkQOvwUZA7xmuoUKA&s" alt="Image 3" >

</div>


                              <?php foreach($utilisateur as $utilisateur): ?>
                        <?php /** @var App\Entity\Utilisateur $utilisateur */ ?>
                    <li><a class="text-gray-600 hover:text-gray-800"><?=$utilisateur->getName() ?></a></li>
                    <?php endforeach; ?>
</body>

<div><p>mail: EcoRide@gmail.com</p>
<p>Mentions légales</p>
</div>


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



</html>
