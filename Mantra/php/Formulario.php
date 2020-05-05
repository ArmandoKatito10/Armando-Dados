<html>
<head>
    <title>Formulário</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Página Inicial do site da LEI" />
    <meta name="author" content="Armando Katito" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


    <form class="needs-validation">
        <div class="form-group text-left">
        <label for="message-text">Nome da arefa</label>
            <input type="text" name ="nome" class="form-control mb-1"
            placeholder="Nome da tarefa" required autofocus
            value="<?php echo $tarefa['nome'];?>"/>
        </div>

        <div class="form-group text-left">
                <label for="message-text">Descrição da tarefa</label>
                <textarea class="form-control" name="Descricao"
                placeholder="Descrição da tarefa">
                <?php  echo $tarefa['Descricao']?>      
            </textarea>
            </div>

            <div class="form-group text-left">
                    <label for="message-text">Prazo da tarefa </label>
                    <input class="form-control" name="Prazo"
                    placeholder="Prazo da tarefa"
                    value="<?php  echo ($tarefa['Prazo']);?>"/>
            </div>

            <div class="form-group text-left">
            <legend><label>Prioridade:</label></legend>
                                <input type="radio" name="prioridade" value="1"
                                <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?> /> <label>Baixa</label>
                                <input type="radio" name="prioridade" value="1"
                                <?php echo ($tarefa['prioridade'] == 2)  ? 'checked': '';?> /> <label>Média</label>
                                <input type="radio" name="prioridade" value="1"
                                <?php echo ($tarefa['prioridade'] == 3)? 'checked' : '';?> /> <label>Alta</label>
            <legend><label>Estado da tarefa:</label></legend>
            <input type="checkbox" name="concluida" value="1"<?php echo($tarefa['concluida']==1) ?'checked':'';?>/>
                        <label>concluida</label>
            </div>

            <div class="form-group text-left">
           <input type="submit" value="Cadastrar"/>
           </div>     
</form>


</body>
</html>