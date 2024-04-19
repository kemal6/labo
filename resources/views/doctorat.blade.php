@extends('base')

@section('titregauche')
Doctorat
@endsection

@section('titredroite')
Les offres du LAI
@endsection

@section('contentg')
<!-- Bloc de contacts avec fond et bordures -->
<div class="sous-menus">
<ul class="list-none">
<li> > <a href="{{ route('doctorat') }}" class="text-sm hover:text-blue-700"> Thèse au LAI</a></li>
<li> > <a href="{{ route('thesesec') }}" class="text-sm hover:text-blue-700">Thèses en cours</a></li>
<li> > <a href="{{ route('theseses') }}" class="text-sm hover:text-blue-700">Thèses soutenues</a></li>
<li class="text-sm menu-souligne" style="margin-top: 20px;"></li>
<!-- Ajoutez d'autres liens de sous-menu ici si nécessaire -->
</ul>
</div>

@endsection

@section('contentd')
Le Laboratoire d'intelligence artificielle propose régulièrement un large choix de sujets de thèses et offres de stages dans ses différents domaines d'activité.
<br>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, ullam possimus praesentium dolore id placeat itaque voluptatibus sed repellat natus aliquam quasi, asperiores harum quaerat quas accusamus. Temporibus, sunt in.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi qui vel porro similique unde libero alias? Dignissimos eveniet, accusamus, a quae sit pariatur dolor eius blanditiis explicabo ipsam facere minima.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus maiores alias commodi, fuga dolores accusantium mollitia saepe eos nulla, impedit dolore iusto. Iusto, nulla! Doloribus, distinctio! Molestiae assumenda inventore beatae!
<br>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum iure officia, minima quibusdam suscipit laboriosam soluta eligendi sit, totam nisi ratione sequi odio dignissimos. Quidem exercitationem dignissimos minima expedita quibusdam.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum neque officiis soluta rem enim atque suscipit eaque harum esse, ipsum mollitia voluptates sit accusamus ad debitis eius officia cupiditate ratione.
<br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quia aut labore temporibus corporis. Facere enim quam perferendis. Assumenda architecto enim temporibus odio corrupti nulla earum reiciendis, modi aliquam fugit.
   
@endsection


