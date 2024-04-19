@extends('base')

@section('titregauche')
Master
@endsection

@section('titredroite')
Masters soutenus
@endsection

@section('contentg')
<!-- Bloc de contacts avec fond et bordures -->
<div class="sous-menus">
<ul class="list-none">
<li> > <a href="{{ route('master') }}" class="text-sm hover:text-blue-700"> Master au LAI</a></li>
<li> > <a href="{{ route('mastersec') }}" class="text-sm hover:text-blue-700">Masters en cours</a></li>
<li> > <a href="{{ route('masterses') }}" class="text-sm hover:text-blue-700">Masters soutenus</a></li>
<li class="text-sm menu-souligne" style="margin-top: 20px;"></li>
<!-- Ajoutez d'autres liens de sous-menu ici si nécessaire -->
</ul>
</div>

@endsection

@section('contentd')
<br>

<h5 class="text-2xl font-bold text-blue-600 mb-4 titre-souligne">2023</h5>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left ">
<thead class="text-xs text-white uppercase  bg-gradient-to-l from-gray-100 to-white border">
<tr class="titre-souligne">
<th scope="col" class="py-3 px-6 text-blue-800">Noms</th>
<th scope="col" class="py-3 px-6 text-blue-800">Titre de master</th>
<th scope="col" class="py-3 px-6 text-blue-800">Directeur de master</th>
<th scope="col" class="py-3 px-6 text-blue-800">Co-Directeur</th>
</tr>
</thead>
<tbody>
<!-- Exemple de lignes -->

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6"> <a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum , voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lhiiqsdipnzl psdjd pck,xc llxclxnc uptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
</tbody>
</table>
</div>

<br>

<h5 class="text-2xl font-bold text-blue-600 mb-4 titre-souligne">2022</h5>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left ">
<thead class="text-xs text-white uppercase  bg-gradient-to-l from-gray-100 to-white border">
<tr class="titre-souligne">
<th scope="col" class="py-3 px-6 text-blue-800">Noms</th>
<th scope="col" class="py-3 px-6 text-blue-800">Titre de master</th>
<th scope="col" class="py-3 px-6 text-blue-800">Directeur de master</th>
<th scope="col" class="py-3 px-6 text-blue-800">Co-Directeur</th>
</tr>
</thead>
<tbody>
<!-- Exemple de lignes -->

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem veritatis quisquam deleniti provident, error aperiam, commodi libero expedita tempore, harum eum voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem veritatis quisquam deleniti provident, error aperiam, commodi libero expedita tempore, harum eum voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem veritatis quisquam deleniti provident, error aperiam, commodi libero expedita tempore, harum eum voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
</tbody>
</table>
</div>

<br>

<h5 class="text-2xl font-bold text-blue-600 mb-4 titre-souligne">2021</h5>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left ">
<thead class="text-xs text-white uppercase  bg-gradient-to-l from-gray-100 to-white border">
<tr class="titre-souligne">
<th scope="col" class="py-3 px-6 text-blue-800">Noms</th>
<th scope="col" class="py-3 px-6 text-blue-800">Titre de master</th>
<th scope="col" class="py-3 px-6 text-blue-800">Directeur de master</th>
<th scope="col" class="py-3 px-6 text-blue-800">Co-Directeur</th>
</tr>
</thead>
<tbody>
<!-- Exemple de lignes -->

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem veritatis quisquam deleniti provident, error aperiam, commodi libero expedita tempore, harum eum voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem veritatis quisquam deleniti provident, error aperiam, commodi libero expedita tempore, harum eum voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6"><a href="{{ route('doctorat') }}" class="hover:text-blue-700">  Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem veritatis quisquam deleniti provident, error aperiam, commodi libero expedita tempore, harum eum voluptates nostrum? Maxime minus cupiditate eius ullam porro!
    
    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>

</a>
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

</tbody>
</table>
</div>


@endsection


