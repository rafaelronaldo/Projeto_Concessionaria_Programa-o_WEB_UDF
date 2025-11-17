<h1>Editar Modelo</h1>
<?php
    $sql = "SELECT * FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row->id_modelo; ?>">
    <div class="mb-3">
        <label>Nome do Modelo
            <input type="text" name="nome_modelo" class="form-control" value="<?php print $row->nome_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Cor da Modelo
            <input type="text" name="cor_modelo" class="form-control" value="<?php print $row->cor_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Ano do Modelo
            <input type="date" name="ano_modelo" class="form-control" value="<?php print $row->ano_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Tipo do Modelo
            <input type="text" name="tipo_modelo" class="form-control" value="<?php print $row->tipo_modelo; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Marca
            <select name="marca_id_marca" class="form-control" required>
                <option value="">Selecione a marca</option>
                <?php
                    $sql_marca = "SELECT * FROM marca";
                    $res_marca = $conn->query($sql_marca);

                    while($row_marca = $res_marca->fetch_object()){
                        $selecionado = ($row_marca->id_marca == $row->marca_id_marca) ? 'selected' : '';
                        
                        print "<option value='{$row_marca->id_marca}' {$selecionado}>{$row_marca->nome_marca}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>