<?php
   //Camada de Modelo - Banco - Model
   
   //importa o arquivo de conexão
   require_once 'conexao.php';

   function inserir($ra, $nome, $cpf, $fone, $sexo){
       //vou usar a variável conexão que é global
       //foi criada no arquivo conexao.php
       global $conexao;

       //preparando um comando SQL para ser executado
       //no banco de dados - comando Insert
       $comando = $conexao->prepare(
       "INSERT INTO aluno (RA, Nome, CPF, Telefone, Sexo) 
       VALUES(?, ?, ?, ?, ?)");

        //vincular os valores que serão utilizado
        //no comando de inserir
       $comando->bind_param
       ("issss", $ra, $nome, $cpf, $fone, $sexo);

       //vamos executar o comando - enviar para DB
       return $comando->execute();
   }

   function excluir($ra){
      global $conexao;
      $comando = $conexao->prepare("DELETE FROM aluno where RA = ?");      
      $comando->bind_param("i", $ra);
      return $comando->execute();
   }

   function atualizar($ra, $nome, $cpf, $fone, $sexo){
      global $conexao;

      $comando = $conexao->prepare("UPDATE aluno SET Nome = ?, 
               CPF = ?, Telefone = ?, Sexo = ? WHERE RA = ?");
    
      $comando->bind_param
                ("ssssi", $nome, $cpf, $fone, $sexo, $ra);

      return $comando->execute();
    }

    function buscarPorRA($ra){
        global $conexao;
        $comando = $conexao->prepare("SELECT * FROM aluno
                                               WHERE RA = ?");
        $comando->bind_param("i",  $ra);
        if($comando->execute()){
            $resultado = $comando->get_result();
            return $resultado->fetch_assoc();
        }   
        return false;     
    }

    function buscarTodos(){
        global $conexao;
        $comando = $conexao->prepare("SELECT * FROM aluno");
        if($comando->execute()){
            $resultado = $comando->get_result();
            $tabela = array();

            while($linha = $resultado->fetch_assoc()){
                $tabela[] = $linha;
            }
            return $tabela;
        }   
        return false;     
    }

    var_dump(buscarTodos());

   // $tabela =  buscarPorRA(2);
   // echo $tabela['Nome'];
   //atualizar(1, "Alice", "999.999.999-99", "(35) 6666-6666", "F");
   //excluir(1);
   //inserir($_POST['RA'],
   //       $_POST['nome'], 
   //       $_POST['cpf'], 
   //       $_POST['fone'], 
   //       $_POST['sexo']);

?>