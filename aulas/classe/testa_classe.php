<?php
  require "aluno.php";

  $aluno1 = new Aluno();
  $aluno1->nome = "Victor";
  $aluno1->RA = "123";
  $aluno1->notas = array(10,5,2);

  $linha2 = new Aluno();
  $linha2->nome = 'Maria Clara';
  $linha2->RA = '124';
  $linha2->notas = array(3,0,1);

  echo "O aluno $linha2->nome foi " 
                        . $linha2->obterSituacao();




