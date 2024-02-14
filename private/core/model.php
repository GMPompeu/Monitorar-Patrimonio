<?php

class Model extends Database
{

    protected $tableUser = "usuario";
    protected $tableFunc = "funcionario";
    protected $tableEquip = "equipamento";

    public $error = array();

    public function insertUser($data)
    {
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);
        $query = "INSERT INTO $this->tableUser ($columns) values (:$values)";
        return $this->query($query, $data);
    }

    public function updateUser($data){
        $keys = array_keys($data);
        $columns = implode(" = :$keys[0], ", $keys); // Crie uma lista de campos a serem atualizados
        $query = "UPDATE usuario SET $columns = :$keys[0] WHERE idUsuario = :idUsuario"; // Atualize os campos definidos
        
        return $this->query($query, $data);
    }

    public function where($columns, $value)
    {
        $columns = addslashes($columns);
        $query = "SELECT * FROM $this->tableUser WHERE $columns = :value";
        return $this->query(
            $query,
            ['value' => $value]
        );
    }
    public function insertEquip($data)
    {
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);
        $query = "INSERT INTO $this->tableEquip ($columns) values (:$values)";
        return $this->query($query, $data);
    }
    public function insertFunc($data)
    {
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);
        $query = "INSERT INTO $this->tableFunc ($columns) values (:$values)";
        return $this->query($query, $data);
    }

    public function allFunc()
    {
        $query = "SELECT *,
            (SELECT COUNT(DISTINCT idFunc) FROM $this->tableFunc) AS todos
            FROM $this->tableFunc";
        return $this->query($query);
    }

    public function allEquip()
    {
        $query = "SELECT *,
            (SELECT COUNT(DISTINCT idPat) FROM $this->tableEquip) AS todos
            FROM $this->tableEquip";
        return $this->query($query);
    }

    public function FuncEquip($column, $value)
    {
        $query = "SELECT e.*, 
                      (SELECT COUNT(*) FROM equipamento WHERE idFunc = :value) AS QuantidadeEquipamentos
                   FROM $this->tableEquip e
                   WHERE e.idFunc = :value";

        $params = ['value' => $value];

        return $this->query($query, $params);
    }

    public function equipFunc($value)
    {
        $query = "SELECT e.*, 
            (SELECT COUNT(*) FROM equipamento WHERE idFunc = e.idFunc) AS QuantidadeEquipamentos,
            f.* FROM equipamento e
            INNER JOIN funcionario f ON e.idFunc = f.idFunc
            WHERE e.numSerie = :value";

        $params = ['value' => $value];

        return $this->query($query, $params);
    }


    public function whereFunc($column, $value)
    {
        $query = "SELECT * FROM $this->tableFunc WHERE $column = :value";
        return $this->query(
            $query,
            ['value' => $value]
        );
    }

    public function whereEquip($column, $value)
    {
        $query = "SELECT * FROM $this->tableEquip WHERE $column = :value";
        return $this->query(
            $query,
            ['value' => $value]
        );
    }

    public function deleteEquip($id)
    {
        $query = "DELETE from $this->tableEquip WHERE numSerie = :idPat  ";
        $data['idPat'] = $id;
        return $this->query($query, $data);
    }
    public function deleteFunc($id)
    {
        $query = "DELETE from $this->tableFunc WHERE idFunc = :idPat  ";
        $data['idPat'] = $id;
        return $this->query($query, $data);
    }

    public function vinculate($id, $num) {
        $query = "UPDATE $this->tableEquip SET idFunc = :id WHERE numSerie = :num";
        $params = ['id' => $id, 'num' => $num];
    
        return $this->query($query, $params);
    }

    public function allInfo(){
        $query = "SELECT e.*, 
        f.* FROM equipamento e
        LEFT JOIN funcionario f ON e.idFunc = f.idFunc;";

        return $this->query($query);
    }
}
