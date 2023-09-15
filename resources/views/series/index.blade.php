<x-layout title="Séries"> 
        <a href="/series/create"><button>Nova Série</button></a>
        <ul>
                @foreach($listaSeries as $serie)
                <li>{{ $serie }}</li>
                @dump($serie)
                @endforeach
        </ul>

</x-layout>