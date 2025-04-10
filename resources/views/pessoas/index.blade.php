<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
     <h1>Pessoas</h1>
     @foreach ($pessoas as $pessoa)
        <div>
            <h2>{{$pessoa->nome}}</h2>
            <p>{{$pessoa->idade}}</p>
            <p>{{$pessoa->cpf}}</p>
        </div>
     @endforeach
</div>
