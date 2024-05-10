<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Chamados</title>
  <link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="text-light">Formulário de Chamados</h2>
    <form action="/create" method="POST">
        @csrf
      <div class="form-group">
        <label for="titulo" class="text-light">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo">
      </div>
      <div class="form-group">
        <label for="categoria" class="text-light">Categoria:</label>
        <select class="form-control" id="categoria" name="categoria">
          <option value="1">Categoria 1</option>
          <option value="2">Categoria 2</option>
          <option value="3">Categoria 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="descricao" class="text-light">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>
</html>
