<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laboratoire AIL</title>
<!-- CDN Tailwind CSS pour le style -->
<script src="https://cdn.tailwindcss.com"></script>
<style>
  /* Style pour la ligne blanche au survol */
/* Style pour la ligne blanche au survol avec animation */
.nav-link::before {
content: '';
display: block;
width: 0; /* Commence avec une largeur de 0 */
height: 1px;
background-color: white;
position: absolute;
top: -10px; /* Ajustez cette valeur si nécessaire */
left: 50%; /* Démarre du centre */
transition: all 0.4s ease; /* Animation fluide sur 0.5 secondes */
transform: translateX(-50%); /* Centrer la ligne */
opacity: 0; /* La ligne est initialement transparente */
}

/* Maintient l'effet de survol sur l'élément parent 'li' */
.group:hover .nav-link::before,
.group:hover .nav-link:hover::before {
width: 100%; /* Étend la ligne sur toute la largeur */
left: 0; /* Aligner à gauche pour l'animation */
transform: translateX(0%); /* Réinitialiser la transformation */
opacity: 1; /* Rendre la ligne opaque */
}
.titre-souligne::after {
content: '';
display: block;
width: 100%; /* Largeur du soulignement par rapport à la section */
height: 1px; /* Épaisseur du soulignement */
background: linear-gradient(to right, blue 30%, #f5f5f5 30%); /* Gradient de couleur avec whitesmoke plus foncé */
margin-top: 5px; /* Espacement entre le texte et le soulignement */
}

.menu-souligne::after {
content: '';
display: block;
width: 100%; /* Largeur du soulignement par rapport à la section */
height: 1px; /* Épaisseur du soulignement */
background: #f5f5f5 30%; /* Gradient de couleur avec whitesmoke plus foncé */
margin-top: 5px; /* Espacement entre le texte et le soulignement */
}

.titre-souligned::after {
content: '';
display: block;
width: 20%; /* Ajustez cette valeur pour changer la longueur du soulignement */
height: 2px; /* Épaisseur du soulignement */
background-color: blue; /* Couleur du soulignement */
margin-top: 5px; /* Espacement entre le texte et le soulignement */
}


/* Style pour le sous-menu avec padding transparent */
.dropdown-menu {
display: none; /* Caché par défaut */
padding-top: 15px; /* Espace transparent au-dessus des sous-menus */
background-clip: content-box; /* Limite le fond au contenu, excluant le padding */
}

/* Style pour afficher le sous-menu lors du survol */
.group:hover .dropdown-menu {
display: block;
}

.hover\:translate-x-2:hover {
transform: translateX(0.5rem); /* Décalage vers la droite */
}
.hover\:scale-105:hover {
transform: scale(1.05); /* Agrandissement */
color: black;
}
.transition-transform {
transition: transform 0.2s, color 0.2s;; /* Transition douce pour les transformations */
}
</style>

</head>
<body class="bg-white text-gray-700">

<!-- Header avec deux couleurs et dégradé -->
<header class="fixed top-0 w-full z-10 bg-gradient-to-l from-blue-800 to-whitesmoke">
<div class="container mx-auto flex justify-between items-center py-4 px-6">
<!-- Logo sur la gauche -->
<a href="/" class="flex items-center text-black">
<div class="flex items-center text-black">
<img src="{{ asset('logo_AIL.jpg') }}" alt="Logo AIL" class="h-16 w-auto">
<div style="margin-left: 0.4cm;">
<span class="font-bold text-xl">AIL</span>
<p class="text-sm">Artificial Intelligence Lab</p>
</div>
</div>
</a>

<!-- Barre de menu horizontale sur la droite avec plus d'espace -->
<nav class="flex-1">
<ul class="flex justify-end space-x-16">
<li class="relative group"><a href="{{ route('home') }}" class="nav-link text-white">AIL</a></li>
<!-- Sous-menu pour Doctorat -->
<li class="relative group">
<a href="{{ route('doctorat')}}" class="nav-link text-white">Doctorat</a>
<!-- Sous-menu déroulant -->
<ul class="absolute hidden group-hover:block bg-white text-gray-800 dropdown-menu">
<li><a href="{{ route('doctorat') }}" style="border-bottom: 1px solid #2d3748;" class="block text-sm  px-4 py-2 hover:text-blue-700">Thèse au LAI</a></li>
<li><a href="{{ route('thesesec') }}" style="border-bottom: 1px solid #2d3748;" class="block text-sm  px-4 py-2 hover:text-blue-700">Thèses en cours</a></li>
<li><a href="{{ route('theseses') }}" style="border-bottom: 1px solid #2d3748;" class="block text-sm  px-4 py-2 hover:text-blue-700">Thèses soutenues</a></li>

<!-- Ajoutez d'autres éléments de sous-menu ici -->
</ul>
</li>
<li class="relative group"><a href="{{ route('master') }}" class="nav-link text-white ">Master</a>
<ul class="absolute hidden group-hover:block bg-white text-gray-800 dropdown-menu">
<li><a href="{{ route('master') }}" style="border-bottom: 1px solid #2d3748;" class="block text-sm  px-4 py-2 hover:text-blue-700">Master au LAI</a></li>
<li><a href="{{ route('mastersec') }}" style="border-bottom: 1px solid #2d3748;" class="block text-sm  px-4 py-2 hover:text-blue-700">Masters en cours</a></li>
<li><a href="{{ route('masterses') }}" style="border-bottom: 1px solid #2d3748;" class="block text-sm  px-4 py-2 hover:text-blue-700">Masters soutenus</a></li>
</ul>
</li>
<li class="relative group"><a href="{{ route('publications') }}" class="nav-link text-white ">Publications</a></li>
<li class="relative group"><a href="{{ route('manifestations') }}" class="nav-link text-white ">Manifestations</a></li>
</ul>
</nav>

</div>
</header>

<!-- Ajout d'un padding en haut pour compenser la hauteur du header fixe -->
<div class="pt-24">
<!-- Contenu principal -->
<main role="main" class="container mx-auto my-8">
<div class="flex">
<!-- Partie gauche (1/4 de la largeur de la page) -->
<div class="w-1/4 p-4">
<!-- Titre de la partie gauche avec soulignement partiel -->
<h2 class="text-2xl font-bold text-blue-600 mb-4 titre-souligne">@yield('titregauche')</h2>
@yield('contentg')
<!-- Contenu de la partie gauche ici -->
</div>

<!-- Partie droite (3/4 de la largeur de la page) -->
<div class="w-3/4 p-4 mr-12">
<!-- Titre de la partie droite avec soulignement partiel -->
<h2 class="text-2xl font-bold text-blue-600 mb-4 titre-souligned">@yield('titredroite')</h2>
<!-- Contenu de la partie droite ici avec petite taille de texte, espacement des lignes et texte justifié -->
<div class="text-sm leading-relaxed text-justify">
@yield('contentd')
</div>
</div>

</div>
</main>
<!-- Section Réseaux sociaux avec icônes dans des cercles bleus avec bordures blanches -->
<div class="flex items-center border-b border-gray-700 pb-4 px-24   py-8 bg-blue-800 text-white">
<span class="font-bold mr-12">Suivez-nous</span>
<div class="flex space-x-4">
<!-- Icônes des réseaux sociaux dans des cercles bleus avec bordures blanches -->
<a href="#" class="rounded-full p-2 border border-white hover:border-blue-800">
<!-- Icône Facebook blanche -->
<span class="[&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 320 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
          </svg>
        </span><!-- SVG path for Facebook icon -->
</svg>
</a>
<a href="#" class="rounded-full p-2 border border-white hover:border-blue-800">
<!-- Icône Twitter blanche  -->
<span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
          </svg>
        </span><!-- SVG path for Twitter icon -->
</svg>
</a>
<a href="#" class="rounded-full p-2 border border-white hover:border-blue-800">
<!-- Icône LinkedIn blanche  -->
<span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
          </svg>
        </span><!-- SVG path for LinkedIn icon -->
</svg>
</a>
<a href="#" class="rounded-full p-2 border border-white hover:border-blue-800"
>
<!-- Icône Github blanche -->
<span class="mx-auto [&>svg]:h-5 [&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 496 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
          </svg>
        </span><!-- SVG path for Github icon -->
</svg>
</a>
</div>
</div>




<!-- Footer -->
<footer class="bg-gray-800 text-white">
<div class="container px-24   py-8 ">


<!-- Reste du code du footer... -->
<!-- Deuxième section : Contact et partenaires -->
<div class="flex justify-between items-center pt-4 py-24">
<!-- Sous-section contact -->
<div class="w-1/2">
<h3 class="font-bold mb-2">CONTACTEZ Le LAI</h3>
<br>
<div class="flex items-center">
<!-- Icone de localisation -->


<svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
</svg>

<!-- Informations de localisation -->
<p class="ml-2">B.P. 24157 Douala, Cameroon</p>
</div>
<br>

<div class="flex items-center">
<!-- Icone de téléphone -->

<svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
</svg>

<!-- Informations de téléphone -->
<p class="ml-2">+33 (0)5 62 44 27 00</p>
</div>
<!-- Icônes de localisation et de téléphone (les icônes sont représentées par du texte pour l'exemple) -->
<div class="flex items-center space-x-2">
<span></span>
<span></span>
</div>
</div>

<!-- Sous-section partenaires -->
<div class="w-1/2">
<!-- <h3 class="font-bold mb-2">Nos partenaires</h3> -->
<br>
<div>
<div class="flex space-x-4">
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('Logo-Facsciences.jpeg') }}" alt="Logo Partenaire 1" class="h-12">
</div>
<!-- Répétez pour les autres logos -->
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_SUMO.png') }}" alt="Logo Partenaire 2" class="h-12">
</div>
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_Inet.png') }}" alt="Logo Partenaire 3" class="h-12">
</div>
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_Inet.png') }}" alt="Logo Partenaire 3" class="h-12">
</div>
</div>


<br>

<div class="flex space-x-4">
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('Logo-Facsciences.jpeg') }}" alt="Logo Partenaire 1" class="h-12">
</div>
<!-- Répétez pour les autres logos -->

<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_Inet.png') }}" alt="Logo Partenaire 3" class="h-12">
</div>
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_Inet.png') }}" alt="Logo Partenaire 3" class="h-12">
</div>
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_SUMO.png') }}" alt="Logo Partenaire 2" class="h-12">
</div>
</div>


<br>


<div class="flex space-x-4">

<!-- Répétez pour les autres logos -->
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_SUMO.png') }}" alt="Logo Partenaire 2" class="h-12">
</div>
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_Inet.png') }}" alt="Logo Partenaire 3" class="h-12">
</div>
<div class="transform transition duration-300 hover:scale-110 hover:shadow-lg hover:brightness-100 brightness-50">
<img src=" {{ asset('logo_Inet.png') }}" alt="Logo Partenaire 3" class="h-12">
</div>
</div>

</div>

</div>
</div>
</div>
</div>
</footer>


<!-- Section Réseaux sociaux avec icônes dans des cercles bleus avec bordures blanches -->
<!-- <div class="flex items-center border-b border-gray-700 pb-2 px-24   py-8 bg-black text-white">
<span class="text-sm leading-relaxed text-end">Suivez-nous</span>

</div> -->

<!-- Bouton flottant pour remonter en haut de la page -->
<button onclick="topFunction()" id="myBtn" title="Go to top" style="
display: none; /* Caché par défaut */
position: fixed; /* Positionnement fixe */
bottom: 20px; /* 20px du bas */
right: 30px; /* 30px de la droite */
z-index: 99; /* S'assure qu'il est au-dessus des autres éléments */
border: none; /* Pas de bordure */
outline: none; /* Pas de contour lors de la sélection */
background-color: #005bbb; /* Couleur de fond bleu */
color: white; /* Texte blanc */
cursor: pointer; /* Curseur en forme de pointeur */
padding: 15px; /* Padding intérieur */
border-radius: 50%; /* Rend le bouton circulaire */
font-size: 24px; /* Taille de la flèche */
box-shadow: 0 14px 18px 0 rgba(0,0,0,0.2); /* Ombre pour effet flottant */
transition: 0.3s; /* Animation douce lors du survol */
">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
<path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
</svg>
</button>


<!-- Votre code existant... -->

<script>
// Lorsque l'utilisateur défile vers le bas de 20px depuis le haut du document, affiche le bouton
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
document.getElementById("myBtn").style.display = "block";
} else {
document.getElementById("myBtn").style.display = "none";
}
}

// Lorsque l'utilisateur clique sur le bouton, remonte en haut du document
function topFunction() {
document.body.scrollTop = 0; // Pour Safari
document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
}
</script>

</body>
</html>