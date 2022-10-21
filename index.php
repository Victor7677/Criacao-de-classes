<?php
// criando classe
    class Pessoa {
      // criando o atributo e variavel
         public $nome;
         public $idade;
      // criando metodo 'function'
         public function andar(){
      // exibindo com 'echo' a variavel dizendo 'essa' com $this e concatenando com '.'
            echo $this->nome. " com " .$this->idade.  " ano". " de idade andou";
         }
    }
    // nova variavel instanciando a classe
    $novo = new Pessoa();
    // nova variavel recebendo a variavel '$nome' e defenindo o valor string
    $novo->nome ='rodrigo';
    // nova variavel recebendo a variavel '$idade' e defeninfo o valor int
    $novo->idade = 1;
    // nova variavel instanciando o metodo function
    $novo->andar();
