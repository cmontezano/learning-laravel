<html>
    <head>
        <title>Produtos</title>
    </head>
    <body>
        <h1>Produtos</h1>

        <ul>
            @foreach($produtos as $produto)
                <li>{{ $produto->nome }} ({{ $produto->descricao }})</li>
            @endforeach
        </ul>
    </body>
</html>