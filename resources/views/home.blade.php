<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Chamados</title>
</head>
<body>
<div class="">
<p class="fw-bolder fs-1 text-light">Bem vindo a tela de controle de chamados</p>
<div  class="d-grid gap-2 d-md-block p-4">
    <div class="p-4">
       <a href="/create"><button type="button" class="btn btn-primary" >Cadastro de Chamado</button></a>
    </div>
    <div class="p-4">
        <a href="/read"><button type="button" class="btn btn-primary" href="/read">Listagem de chamados</button></a>
    </div>
    <div class="p-4">
        <a href="/delete"><button type="button" class="btn btn-primary" href="/update">Excluir Chamado</button></a>
    </div>
    <div class="p-4">
        <a href="/update"><button type="button" class="btn btn-primary" href="/delete">Atender Chamado</button></a>
    </div>
</div>
</div>  

<div class="container text-info border border-5 border-success rounded-pill p-3">
    <h2 class="fw-bolder">Registro de chamados resolvidos</h2>
    <p>Número de chamados resolvidos dentro do prazo durante esse mes: {{ $chamadosResolvidos }}</p>
</div>
</body>
</html>