<form action="{{url('/trimestre'.$trimestre->idTimestre)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('Trimestre.form');
</form>