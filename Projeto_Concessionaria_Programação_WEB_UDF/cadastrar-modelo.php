<h1>Cadastrar Modelo</h1>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Modelo
            <input type="text" name="nome_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Cor da Modelo
            <input type="text" name="cor_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
    <label>Ano do Modelo
        <input 
            type="number" 
            name="ano_modelo" 
            class="form-control" 
            placeholder="AAAA" 
            min="1900" 
            max="<?php echo date('Y'); ?>"
            required>
    </label>
	</div>
    <div class="mb-3">
        <label>Tipo do Modelo
            <input type="text" name="tipo_modelo" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Marca
            <select name="marca_id_marca" class="form-control" required>
                <option value="">Selecione a marca</option>
                <?php
                    $sql = "SELECT * FROM marca";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object()){
                        echo "<option value='{$row->id_marca}'>{$row->nome_marca}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


</form>