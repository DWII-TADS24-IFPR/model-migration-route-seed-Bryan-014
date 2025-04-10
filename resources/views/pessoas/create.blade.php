<div>
    <form action="{{ route('pessoa.store') }}" method="post">
        @csrf
        <input type="text" placeholder="Nome" name="nome" id="nome" require>
        <input type="number" placeholder="idade" name="idade" id="idade" require>
        <input type="text" placeholder="cpf" name="cpf" id="cpf" require>
        <input type="submit" value="Cadastrar">
    </form>
</div>
