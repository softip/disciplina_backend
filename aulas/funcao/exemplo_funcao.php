<?php

  function imprimir($texto){
      echo $texto . "<br>";
  }

  function somar($n1, $n2){
      $resultado = $n1 + $n2;
      return $resultado;
  }

  function quadrado($n1){
      $resultado = $n1 * $n1;
      return $resultado;
  }

  imprimir("Olá 3InfoB");
  $a = 5;
  $b = 2;
  $r = somar($a, $b);
  imprimir("O resultado de $a + $b = $r");
  $c = quadrado(2);
  imprimir("O quadrado de 2 é " . $c );