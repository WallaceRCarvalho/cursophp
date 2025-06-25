<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cursophp-cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar</h1>
        <?php
        //Recebar dados do formulario
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            
        //Verificar se o usuario clicou no botao
        if (!empty($dados['CadUsuario'])) {
            //var_dump($dados);
            
            $empty_input = false;
            $dados = array_map('trim', $dados);
            
            if (in_array("", $dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessario preencher todos os campos!</p>";
            }
            elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $empty_input = true;
                echo"<p style='color: #f00;'>Erro: Necessario preencher com o email valido!</p>";
            
        }
        if (!empty_input) {
            $query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email) ";
            $cad_usuario = $conn->prepare($query_usuario);
            $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $cad_usuario->execute();
        if ($cad_usuario->rowCount()) {
                echo "<p style='color: green;'>Usuario Cadastrado com Sucesso!</p>";
                unset($dados); //Limpa os cmapos apenas depois de salvar com sucesso
                } else {
                echo "<p style='color: #f00;'>Erro: Usuario nao Cadastrado com Sucesso!</p>";
                }
            }
        }
        ?>
        <form name="cad-usuario" method="POST" action="">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" 
                   value="<?= isset($dados['nome']) ? htmlspecialchars($dados['nome']) : '' ?>"><br><br>
           
                
            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Seu e-mail valido"
                   value="<?= isset($dados['email']) ? htmlspecialchars($dados['email']) : '' ?>"><br><br>
            
            <input type="submit" value="Cadastrar" name="CadUsuario"><!-- botao -->
            
        </form>
    </body>
</html>
