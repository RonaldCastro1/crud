<form action="{{url('/tematica'.$tematica->idTematica)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('Tematica.form');
</form>