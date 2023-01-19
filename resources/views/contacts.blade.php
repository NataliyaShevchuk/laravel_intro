

@php 

$user = [
    'name' => 'Mario',
    'surname' => 'Rossi'
    ];
    
    $lista = ['pane', 'pasta', 'riso']
    
@endphp


    <h1>Hello world</h1>
    
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis dicta repellat dolore ipsum eos quasi cum, possimus voluptate consequatur, 
        adipisci, libero doloribus odit quae laborum consectetur voluptatum dolorum quisquam magni.</p>

        <ul>
            @foreach ($lista as $elemento)
            <li>
                @if($elemento === 'pane')
                <h3>{{$elemento}}</h3>
                @endif

                <a href="spesa/{{ $elemento }}">{{ $elemento }}</a>
            </li>

            @endforeach
        </ul>