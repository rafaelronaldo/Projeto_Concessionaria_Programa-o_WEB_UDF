<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $data = $_POST['data_venda'];
        $valor = $_POST['valor_venda'];
        $cliente_id = $_POST['cliente_id_cliente'] ?? NULL; 
        $funcionario_id = $_POST['funcionarios_id_funcionario'] ?? NULL; 
        $modelo_id = $_POST['modelo_id_modelo'] ?? NULL;
        
        $sql = "INSERT INTO venda
        (data_venda, valor_venda, cliente_id_cliente, funcionarios_id_funcionario, modelo_id_modelo) 
        VALUES ('{$data}', '{$valor}', '{$cliente_id}', '{$funcionario_id}', '{$modelo_id}')";

        $res = $conn->query($sql);

        if($res==true){
            print"<script>alert('Cadastrou com sucesso');</script>";
            print"<script>location.href='?page=listar-venda';</script>";
        }
        else {
            print"<script>alert('Não cadastrou');</script>";
            print"<script>location.href='?page=listar-venda';</script>";
        }
        break;

    case 'editar':
        
        $data = $_POST['data_venda'];
        $valor = $_POST['valor_venda'];
        $cliente_id     = $_POST['cliente_id_cliente'] ?? NULL; 
        $funcionario_id = $_POST['funcionarios_id_funcionario'] ?? NULL; 
        $modelo_id = $_POST['modelo_id_modelo'] ?? NULL;

        $sql = "UPDATE venda SET data_venda='{$data}', valor_venda='{$valor}', cliente_id_cliente='{$cliente_id}', funcionarios_id_funcionario='{$funcionario_id}', modelo_id_modelo='{$modelo_id}'  WHERE id_venda=".$_REQUEST['id_venda'];

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        }else{
            print"<script>alert('Não editou');</script>";
            print"<script>location.href='?page=listar-venda';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST['id_venda'];

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        }else{
            print"<script>alert('Não excluiu');</script>";
            print"<script>location.href='?page=listar-venda';</script>";
        } 
        break;
}