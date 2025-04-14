<?php
// defina uma classe chamada aluno 
class Aluno{
    //criar uma propriedade privada(encapsulamento) chamada $alunos
    // essa propriedade é um array que armazena dados e alunos.
    // cada aluno é representado por um array associativo com nome e idade
    private $alunos = [
        ['nome' => 'joão', 'idade' => 17],
        ['nome' => 'maria', 'idade' => 15],
        ['nome' => 'eduarda', 'idade' => 14],
    ];

// define um metodo publico chamado listarAlunos.
// esse metodo serve para "retornar" o conteudp do array $alunos

public function listarAlunos(){
    return $this->alunos;
}
}
?>