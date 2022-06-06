<?php

//isso é a classe
class Aluno{
  
    //isso são os atributos / variáveis
    public $nome;
    public $RA;
    public $notas = array();

    //isso é uma função / método / operação
    function obterSituacao(){
        $soma = 0;
        foreach($this->notas as $nota){
            $soma = $soma + $nota;
        }

        if($soma < 6){
            return "Reprovado";
        }else{
            return "Aprovado";
        }
    }


}