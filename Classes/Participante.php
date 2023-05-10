<?php
require_once('Conexao.php');

class Participante{
    private $nome, $cpf, $telefone,$origem;
    private $connect;

    function __construct($servername, $username, $password,$dbname){
        $this->connect = new Conexao($servername, $username, $password, $dbname);
    }

    public function insert($nome, $cpf, $telefone,$origem){
        // Seleciona os cpfs do banco de dados e compara com o cpf que o candidato quer inserir

        $sql = "SELECT cpf FROM participante WHERE cpf = '$cpf'";
        $result = mysqli_query($this->connect->getConnection(), $sql);
        // Verifica se o cpf já foi cadastrado
        if($result !== FALSE && $result->num_rows > 0) {
            echo "CPF já cadastrado";
        }else{
            // Verificando se o aluno é de origem de escola pública ou particular
            if($origem == TRUE){
                $insert = "INSERT INTO participante(nome, cpf, telefone, origem_publica) VALUES('$nome', '$cpf', '$telefone', TRUE)";
                if($this->connect->getConnection()->query($insert) === TRUE){
                    echo "Dados inseridos com sucesso";
                }else{
                    echo "Error: " . $insert . "<br>" . $this->connect->getConnection()->error;
                }
            }else{
                $insert = "INSERT INTO participante(nome, cpf, telefone, origem_publica) VALUES('$nome', '$cpf', '$telefone', FALSE)";
                if($this->connect->getConnection()->query($insert) === TRUE){
                    echo "Dados inseridos com sucesso";
                }else{
                    echo "Error: " . $insert . "<br>" . $this->connect->getConnection()->error;
                }
            }
        }
    }
    
    

    public function read(){
        $sql = "SELECT nome, cpf, telefone, origem_publica FROM participante";
        $result = $this->connect->getConnection()->query($sql);
    
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Name</th><th>CPF</th><th>Telefone</th><th>Escolaridade</th></tr>";
                while($row = $result->fetch_assoc()){
                    $origem_publica = $row['origem_publica'] == 1 ? 'Escola Pública' : 'Escola Particular';
                    echo "<tr><td>".$row['nome']."</td><td>".$row['cpf']."</td><td>".$row['telefone']."</td><td>".$origem_publica."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Nenhum resultado encontrado.";
            }
        } else {
            die($this->connect->getConnection()->error);
        }
    }
    public function update($nome, $cpf, $telefone,$origem){
        $sql = "SELECT cpf FROM participante WHERE cpf = '$cpf' ";
        $result = $this->connect->getConnection()->query($sql);
       
        if($result->num_rows > 0){
            $update_nome = "UPDATE participante SET nome = '$nome' WHERE cpf = '$cpf'";
            $update_telefone = "UPDATE participante SET telefone = '$telefone' WHERE cpf = '$cpf'";
            $update_origem = "UPDATE participante SET origem_publica = $origem WHERE cpf = '$cpf'";
            if($this->connect->getConnection()->query($update_nome)=== TRUE){
                echo "Dados inseridos";
            }
            if($this->connect->getConnection()->query($update_telefone)=== TRUE){
                echo "Dados inseridos";
            }
            if($this->connect->getConnection()->query($update_origem)=== TRUE){
                echo "Dados inseridos";
            }
              

            }else{
                echo "CPF não cadastrado!!";
            }
    }
    public function delete($cpf){
        $sql = "SELECT cpf FROM participante WHERE cpf = '$cpf' ";

        $result = $this->connect->getConnection()->query($sql);

        if($result->num_rows > 0){
            $delete = "DELETE FROM participante WHERE cpf = '$cpf'";
            if($this->connect->getConnection()->query($delete) === TRUE){
                echo "Dados Deletados com Sucesso";

            }else
            echo "CPF nao Encontrado!";
        }
    }
    
    function __destruct(){
        $this->connect->closeConnection();
    }
}



?>
