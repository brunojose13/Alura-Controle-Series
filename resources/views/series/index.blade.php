<x-layout title="Séries">

    <a href="series/adicionar">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie->name }}</li>
        @endforeach
    </ul>
    
</x-layout>
