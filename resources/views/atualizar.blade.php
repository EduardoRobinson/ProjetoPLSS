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
                    <th class="text-light">ID</th>
                    <th class="text-light">Título</th>
                    <th class="text-light">Categoria</th>
                    <th class="text-light">Descrição</th>
                    <th class="text-light">Situação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chamados as $chamado)
                    <tr>
                        <td class="text-light">{{ $chamado->id }}</td>
                        <td class="text-light">{{ $chamado->titulo }}</td>
                        <td class="text-light">{{ $chamado->categoria }}</td>
                        <td class="text-light">{{ $chamado->descricao }}</td>
                        <form action="/{{ $chamado->id }}" method="POST">
                        <td class="text-light">
                        <select class="form-control" id="situacao" name="situacao">
                        <option value="Pendente">Pendente</option>
                        <option value="Resolvido">Resolvido</option>
                        </select>
                        </td> 
                        @csrf
                        @method('PUT')
                        <td><button type="submit" class="btn btn-info">Atualizar</button></td>  
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
