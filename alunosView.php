<?php
// declara uma função chama exibirAlunos que recebe o parametro $alunos.
// esse parametro é esperado com um array com informações
function exibirAlunos($alunos){

//imprime na tela um titulo h2 e abre um lista ordenada ul
echo "<h2>Lista de alunos:</h2> <ul>";

//inicia um loop foreach, que percorre cada item do array $alunos
//cada item é armazenado temporariamente na variavel $aluno
foreach($alunos as $aluno){
//para cada aluno,imprime um item da lista(li)
//exibe o nome do aluno e sua idade, formatados como "nome-idade anos"
echo "<li>{$aluno['nome']} - {$aluno['idade']} anos</li>";
}
echo "</ul>";





}
?>