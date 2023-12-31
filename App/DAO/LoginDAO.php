<?php

namespace App\DAO;

use Exception;
use App\Model\LoginModel;
use \PDO;

class LoginDAO extends DAO
{
    public function __construct()
    {
        try
        {
            return parent::__construct();
        }
        catch (Exception $e)
        {
            echo "Erro ao conectar ao banco: " . $e->getMessage();
        }
    }

    public function insert(LoginModel $model)
    {
        $sql = "INSERT INTO usuarios (email, senha) VALUES (?, sha1(?))";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);

        $stmt->execute();
    }

    public function update(LoginModel $model)
    {
        $sql = "UPDATE usuarios SET email = ?, senha = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->id);

        $stmt->execute();
    }

    public function getByEmailAndSenha($e, $s)
    {
        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $e);
        $stmt->bindValue(2, $s);
        
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function getAllRows()
    {
        $sql = "SELECT * FROM usuarios";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM usuarios WHERE id= ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}