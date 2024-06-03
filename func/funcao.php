<?php
include_once("./func/funcao.php");


class Cliente {
    var $email, $senha;
  
    function getEmail() {
        return $this->email;
    }
  
    function __construct($email, $senha) {
        $this->email  = $email;
        $this->senha = $senha;
    }
  
    function autentica() {
        //Aqui estará o método de acesso ao banco.
        $email  = $this->email;
        $senha = $this->senha;

        // Estabelece a conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "", "Somnia");
        
        // Verifica se houve erro na conexão
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }
        
        // Consulta SQL preparada para evitar injeção de SQL
        $select = $conn->prepare("SELECT email, senha FROM cliente WHERE email=? AND senha=?");
        $select->bind_param("ss", $email, $senha);
        $select->execute();
        $select->store_result();
        
        // Verifica se foram encontradas linhas
        if ($select->num_rows > 0) {
            $this->geraSessao($this);
            $select->close();
            $conn->close();
            return true;
        } else {
            $select->close();
            $conn->close();
            return false;
        }
    }
  
    function geraSessao($usuario) {
        session_start();
        $_SESSION['usuario'] = $usuario;
    }
}

?>