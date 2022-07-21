<?php

class Entity extends Conexao {

    public function list($table)
    {
        $pdo = parent::getInstance();
        $sql = "SELECT * FROM $table";
        $statement = $pdo->query($sql);
        $statement->execute();        
        return $statement->fetchAll();
    }

    public function insert($table, $data)
    {
        $pdo = parent::getInstance();

        $fields = implode(", ",array_keys($data));
        $values = ":".implode(", :",array_keys($data));

        $sql = 
        "INSERT INTO $table ($fields) VALUES ($values)";

        $statement = $pdo->prepare($sql);

        foreach($data as $key => $value)
        {
            $statement->bindValue(":$key",$value,PDO::PARAM_STR);
        }
        $statement->execute();
    }
    
    public function delete($table, $id){ //metodo de deletar
        $pdo = parent::getInstance();
        $sql = "DELETE FROM $table where idAluno= :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }
    
    public function getInfo($table, $id){ //metodo que retorna um dado.
        $pdo = parent::getInstance();
        $sql = "SELECT * FROM $table where idAluno= :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function update($table, $data, $id){
        $pdo = parent::getInstance();
        $new_values = "";
        foreach($data as $key => $value){
            $new_values.= "$key=:$key, "; // .= contatena
        }

        $new_values = substr($new_values, 0, -2);   //ACHO QUE ISSO QUE TA DANDO ERRO AO FAZER O UPDATE!

        $sql = "UPDATE $table SET $new_values WHERE idAluno=:id";

        $statement = $pdo->prepare($sql);

        foreach($data as $key => $value){
            $statement ->bindValue(":$key", $value, PDO::PARAM_STR);
        }

        $statement->bindValue(":id", $id);

        $statement->execute(); // ELE MOSTRA ERRO AQUI, MAS SE VER O ERRO 

    }

}

?>