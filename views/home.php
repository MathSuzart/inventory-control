<a href="<?php echo BASE_URL;?>home/add ">Adicionar</a>

<a href="<?php echo BASE_URL; ?>Relatorio">Relatorio</a>

<fieldset>
    <form action="" method="get">
        <input type="text" name="buscar" name="busca" value="<?php echo (!empty($_GET['busca'])
        )?$_GET['busca']:'';?>" placeholder="Product" />
    </form>
</fieldset>
</br>
<table border="1" width="100%">

    <tr>
        <th>Cod.</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Qtd.</th>
        <th>Qtd. Min.</th>
        <th>Ações</th>
    </tr>

    <?php foreach($list as $item): ?>
        <tr>
            <td><?php echo $item['cod']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td>R$<?php echo number_format($item['price'],2,',', '.'); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>
                <a href="<?php echo BASE_URL; ?>home/del/<?php echo $item['id']; ?>">Deletar</a>
                <a href="<?php echo BASE_URL; ?>home/del/<?php echo $item['id']; ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>    

</table>