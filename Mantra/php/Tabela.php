        <!--Código que permite listar as tareefas-->
        <table>
     <tr> 
         <th>Tarefas</th>
         <th>Descrição</th>
         <th>Prazo</th>
         <th>Prioridade</th>
         <th>Concluída</th>
         <th>Opções</th>
     </tr>
        <?php foreach ($listar_tarefas as $tarefa): ?> 
        <tr> 
            <!--Campos para eexibir as tarefas no Formulário-->
            <td><?php echo $tarefa['nome']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td> 
            <td><?php echo $tarefa['prazo']; ?></td> 
            <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td> 
            <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
            <td>
                <!--Link que permite a edição do campos-->
            <a href="Editar.php?id = <?php echo $tarefa['id'];?>">Editar</a>
            </td>  
        </tr> 
         <?php endforeach; ?>
</table>