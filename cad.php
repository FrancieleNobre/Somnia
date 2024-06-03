<?php
include_once("./config/conexao.php");
include_once("./func/funcao.php");

class CadastroUsuario
{
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function cadastrar()
    {
        $conn = new mysqli('localhost', 'root', '', 'Somnia');
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        $insert = $conn->prepare("INSERT INTO `cliente` (`nome`, `email`, `senha`) VALUES (?, ?, ?)");
        $insert->bind_param('sss', $this->nome, $this->email, $this->senha);

        if ($insert->execute()) {
            header('Location: ./home.php');
            exit;
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadastro = new CadastroUsuario($_POST['nomeinputcad'], $_POST['emailinputcad'], $_POST['senhainputcad']);
    $cadastro->cadastrar();
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
