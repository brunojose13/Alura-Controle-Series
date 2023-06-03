<x-layout title='Nova série'>
    
    <!-- action with "/" overwrite all the url, including the "api" -->
    <form method="post" action="salvar">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">

        <button>Registrar</button>
    </form>

</x-layout>
