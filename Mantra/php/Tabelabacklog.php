        <!--Código que permite listar as tareefas-->
        <table>

        <?php foreach ($listar_tarefas as $tarefa): ?> 
        <tr> 
            <!--Campos para eexibir as tarefas no Formulário-->
            <td><?php echo $tarefa['nome']; ?></td>
        </tr> 
         <?php endforeach; ?>
</table>