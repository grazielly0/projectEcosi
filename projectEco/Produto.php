<?php
 
namespace PHP\Modelo;
 
class Produto{
 
protected string $codigo;
protected string $categoria;
protected string $data;
protected string $peso;
 
public function __construct(string $codigo,
                            string $categoria,
                            string $data,
                            float $peso
                            )
{
 
    //instanciar
    $this->cpf  =$codigo;
    $this->nome = $categoria;
    $this->telefone = $data;
    $this->endereco = $peso;
 
}//fim construtor
 
public function __get(string $variavel):mixed
{
    return $this->variavel;
}//fim do get
 
public function __set(string $variavel, string $novoDado):void
{
    $this->variavel = $novoDado;
}// fim do set
 
public function imprimir():string
{
    return "<br>Código: ".$this->codigo.
    "<br>Categoria: ".$this->categoria.
    "<br>Data: ".$this->data.
    "<br>Peso: ".$this->peso;
}// fim do metodo
//fim da classe Pessoa
 
 
 
}//fim da classe
 
?>