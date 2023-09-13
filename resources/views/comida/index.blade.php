<x-layout title="Comida"> 
        <ul>
                @foreach($comidaPraSerie as $comida)
                <li>{{ $comida }}</li>
                @dump($comidaPraSerie)
                @dump($comida)
                @endforeach
        </ul>

</x-layout>