<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Numero Trimestre</th>
            <th>Id Ficha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trimestres as $trimestre)
        <tr>
            <td>{{$trimestre->idTimestre}}</td>
            <td>{{$trimestre->numTrimestre}}</</td>
            <td>{{$trimestre->idFicha}}</</td>
            <td>
            <a href="{{url('/trimestre/'.$trimestre->idTrimestre.'/edit')}}">
                <button>Editar</button>
            </a> 
            <form action="{{url('/trimestre/'.$trimestre->idTrimestre)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>