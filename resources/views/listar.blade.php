<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Chamados</title>
    <link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-light">Lista de Chamados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-light">Título</th>
                    <th class="text-light">Categoria</th>
                    <th class="text-light">Descrição</th>
                    <th class="text-light">Situação</th>
                    <th class="text-light">Data de Criação</th>
                    <th class="text-light">Data de Atualização</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chamados as $chamado)
                    <tr>
                        <td class="text-light">{{ $chamado->titulo }}</td>
                        <td class="text-light">{{ $chamado->categoria }}</td>
                        <td class="text-light">{{ $chamado->descricao }}</td>
                        <td class="text-light">{{ $chamado->situacao }}</td>
                        <td class="text-light">{{ $chamado->created_at }}</td>
                        <td class="text-light">{{ $chamado->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
