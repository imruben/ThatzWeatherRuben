@extends('layouts.layout')

@section('content')
<body>
<div class="content text-center">
                <h2>Lista de pizzas</h2>

                @for($i=0;$i<count($pizzas);$i++)
                <p>Tipo: {{ $pizzas[$i]['type']}} <br>Base: {{ $pizzas[$i]['base'] }} </p><br>                
                @endfor

                <br><br><br><br>

                @foreach($pizzas as $pizza)
                <p>{{ $loop->index }} Tipo: {{ $pizza['type']}} <br>Base: {{ $pizza['base'] }}</p>
                @endforeach
            </div>
<button type="button" class="btn btn-primary">Primary</button>
    
</body>
</html>