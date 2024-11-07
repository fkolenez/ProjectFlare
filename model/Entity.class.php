<?php
    class Entity extends Conexao{
        public function list($table){

            // Conexão
            $pdo = parent::getInstance();
        
            // Consulta SQL
            $sql = "SELECT * FROM $table order by id ASC " ;

            //  prepara a consulta
            $statement = $pdo->query($sql);

            // Executa a consulta
            $statement->execute();
        
            // Retorna a tabela do banco em formato de array
            return $statement->fetchAll();
        }

        public function listBets($table, $id){

            // Conexão
            $pdo = parent::getInstance();
        
            // Consulta SQL
            $sql = "SELECT * FROM $table WHERE user_id = $id order by id ASC " ;

            //  prepara a consulta
            $statement = $pdo->query($sql);

            // Executa a consulta
            $statement->execute();
        
            // Retorna a tabela do banco em formato de array
            return $statement->fetchAll();
        }


        public function listGames($table, $id){

            // Conexão
            $pdo = parent::getInstance();
        
            // Consulta SQL
            $sql = "SELECT * FROM $table WHERE id = $id order by id ASC " ;

            //  prepara a consulta
            $statement = $pdo->query($sql);

            // Executa a consulta
            $statement->execute();
        
            // Retorna a tabela do banco em formato de array
            return $statement->fetchAll();
        }        
        // função para inserir
        public function insert($table, $data){
            $pdo = parent::getInstance();
            
            $data['profile'] = 'Jogador';

            $campos = implode(", ", array_keys($data));
            $valores = ":".implode(", :", array_keys($data));

            $sql = "INSERT INTO $table($campos) VALUES ($valores)";

            echo $sql;

            $statement = $pdo->prepare($sql);

            // ve se tem alguma coisa dentro
            // ai pa define o profile como usuario
        
            foreach($data as $key => $value) {

                // ta criptografando

                $statement->bindValue(":$key", $value,PDO::PARAM_STR);
            }

            $statement->execute();
        }

        // função p deletar
        public function delete($table, $id){
            $pdo = parent::getInstance();
            $sql = "DELETE FROM $table WHERE id = :id";

            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function deleteByUser($table, $id){
            $pdo = parent::getInstance();
            $sql = "DELETE FROM $table WHERE  user_id = :id";

            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function getInfo($table, $id){
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue("id", $id);
            $statement->execute();
            return $statement->fetchAll(); //retorna em formato de array
        } 

        public function getInfoByName($table, $name){
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE name = :name";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":name", $name);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC); //retorna em formato de array
        } 

        public function update($table, $data, $id){
            $pdo = parent::getInstance();
            $novosValores = "";

            foreach($data as $key => $value) {
                $novosValores .= "$key=:$key, ";
            }

            $novosValores = substr($novosValores,0,-2);
            $sql = "UPDATE $table SET $novosValores WHERE id = :id";
            
            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value) {
                $statement->bindValue(":$key", $value,PDO::PARAM_STR);
            }
        
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function insertBets($user_id, $game_id, $bet_amount, $result){
            $pdo = parent::getInstance();
            
            $sql = "INSERT INTO bets(user_id, game_id, bet_amount, result) VALUES ($user_id, $game_id, $bet_amount, '$result')";
           
            $statement = $pdo->prepare($sql);
            $statement->execute();
        }
    
        public function updateBalance($table, $valor, $id){
            $pdo = parent::getInstance();

            $sql = "UPDATE $table SET balance = $valor WHERE id = :id";
            
            $statement = $pdo->prepare($sql);

            $statement->bindValue(":id", $id);
            $statement->execute();
        }
    }
?>