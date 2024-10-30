<?php
    require_once 'Conexao.class.php';

    class Auth extends Conexao {

        public function auth($name, $password) {
            $pdo = parent::getInstance();

            $sql = "SELECT id, password FROM users WHERE name = :name";
            $statement = $pdo->prepare($sql);

            $statement->bindParam(':name', $name);
            $statement->execute();

            $vetor = $statement->fetchAll();
            echo "1";

            // ve se achou o registro no banco
            if(count($vetor) > 0) {
                echo "2";

                // compara se a senha informou 
                // é a mesma do banco, q agr ta hashada
                if(password_verify($password, $vetor[0]['password'])){
                    echo "3";

                    // aqui cria a sessão
                    // redireciona se o usuário for encontrado

                    session_start();
                    $_SESSION['id'] = $vetor[0]['id'];
                    $_SESSION['user'] = date('Y/m/d');
                    header('Location: ../../view/pages/inicio.php');
                } 
            } else {
                // mensagem de erro se nenhum usuário for encontrado
                // tem q fazer uma pagina de erro ou um alert
                echo "Usuário ou senha incorretos.";
            }
        }
    }
?>
