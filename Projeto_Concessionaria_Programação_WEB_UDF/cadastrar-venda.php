<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-control" required>
            <option value="">Selecione o Cliente</option>
            <?php
                $sql_cli = "SELECT * FROM cliente";
                $res_cli = $conn->query($sql_cli);
                while($row_cli = $res_cli->fetch_object()){
                    echo "<option value='{$row_cli->id_cliente}'>{$row_cli->nome_cliente}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionarios_id_funcionario" class="form-control" required>
            <option value="">Selecione o Funcionário</option>
            <?php
                $sql_func = "SELECT * FROM funcionarios";
                $res_func = $conn->query($sql_func);
                while($row_func = $res_func->fetch_object()){
                    echo "<option value='{$row_func->id_funcionario}'>{$row_func->nome_funcionario}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <select name="modelo_id_modelo" class="form-control" required>
            <option value="">Selecione o Modelo</option>
            <?php
                $sql_mod = "SELECT * FROM modelo";
                $res_mod = $conn->query($sql_mod);
                while($row_mod = $res_mod->fetch_object()){
                    // Aqui você pode exibir Nome + Ano, por exemplo
                    echo "<option value='{$row_mod->id_modelo}'>{$row_mod->nome_modelo} ({$row_mod->ano_modelo})</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Data da Venda
            <input type="date" name="data_venda" class="form-control" required>
        </label>
    </div>
    <div class="mb-3">
        <label>Valor da Venda
            <input type="text" name="valor_venda" class="form-control" required>
        </label>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
</form>