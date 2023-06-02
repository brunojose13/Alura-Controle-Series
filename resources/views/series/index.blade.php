<x-layout title="Séries">

    <a href="series/adicionar">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
    
</x-layout>
