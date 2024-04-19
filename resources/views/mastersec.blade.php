@extends('base')

@section('titregauche')
Master
@endsection

@section('titredroite')
Masters en cours 
@endsection

@section('contentg')
<!-- Bloc de contacts avec fond et bordures -->
<div class="sous-menus">
<ul class="list-none">
<li> > <a href="{{ route('master') }}" class="text-sm hover:text-blue-700">Master au LAI</a></li>
<li> > <a href="{{ route('mastersec') }}" class="text-sm hover:text-blue-700">Masters en cours</a></li>
<li> > <a href="{{ route('masterses') }}" class="text-sm hover:text-blue-700">Masters soutenus</a></li>
<li class="text-sm menu-souligne" style="margin-top: 20px;"></li>
<!-- Ajoutez d'autres liens de sous-menu ici si nécessaire -->
</ul>
</div>

@endsection

@section('contentd')
<br>
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
<td class="py-4 px-6">Nouvelles approches en cryptographie avec IA</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6">Les algorithmes d'apprentissage automatique</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6">Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quibusdam, vitae quo quisquam ea animi praesentium nemo iure. Aspernatur culpa quis nihil est eum architecto possimus atque dolor nobis sapiente!
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">John Doe</td>
<td class="py-4 px-6">Exploration des algorithmes quantiques</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6">Nouvelles approches en cryptographie avec IA
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, dicta. Natus, commodi fugiat dicta repudiandae asperiores vero veritatis possimus numquam veniam? Alias obcaecati molestiae ipsa corporis rem et ratione ad.
</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6">Les algorithmes d'apprentissage automatique</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6">Nouvelles approches en cryptographie avec IA</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">John Doe</td>
<td class="py-4 px-6">Exploration des algorithmes quantiques</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6">Nouvelles approches en cryptographie avec IA</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6">Les algorithmes d'apprentissage automatique</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">John Doe</td>
<td class="py-4 px-6">Exploration des algorithmes quantiques</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>
<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">MAlain Nzang</td>
<td class="py-4 px-6">Nouvelles approches en cryptographie avec IA</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>

<tr class="hover:translate-x-2 hover:scale-105 transition-transform border">
<td class="py-4 px-6">Marie Poula</td>
<td class="py-4 px-6">Les algorithmes d'apprentissage automatique</td>
<td class="py-4 px-6">Dr. Justin Moskoali</td>
<td class="py-4 px-6">Pr. Samuel Bowong</td>
</tr>


</tbody>
</table>
</div>


@endsection


