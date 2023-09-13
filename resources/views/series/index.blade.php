<x-layout title="Séries"> 
        <ul>
                @foreach($listaSeries as $serie)
                <li>{{ $serie }}</li>
                @dump($listaSeries)
                @dump($serie)
                @endforeach
        </ul>

        <h1>Comidas</h1>

        <ul>
                @foreach($comidaPraSerie as $comida)
                <li>{{ $comida }}</li>
                @dump($comidaPraSerie)
                @dump($comida)
                @endforeach
        </ul>

</x-layout>