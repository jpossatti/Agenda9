<?php
include_once 'Aluno.php';
include_once 'Professor.php';

$aluno = new Aluno();
$aluno ->setNome("Jefferson Possati");
$aluno->setEmail("jefferson.possatti@aluno.etec.br");
$aluno->setDataNascimento("2005-05-05");
$aluno->SetMatricula("20230001");
$aluno->setTurmaId("4");
$aluno->setNivelAutonomia("Avançado");
echo 'Nome: ' . $aluno->getNome() . '<br>';
echo 'Email: ' . $aluno->getEmail() . '<br>';
echo 'Data Nascimento: '.$aluno->getDataNascimento().'<br>';
echo 'Matricula: '.$aluno->getMatricula(); echo '<br>';
echo 'Data Nascimento: '.$aluno->getDataNascimento().'<br>';
echo 'Turma: '.$aluno->getTurmaId().'<br>';
echo 'Nível de Autonomia: '.$aluno->getNivelAutonomia().'<br>';
echo '<br>';

$professor = new Professor();
$professor ->setNome("Aristoteles Gregorio");
$professor->setEmail("ari.gregorio@professor.etec.br");
$professor->setDataNascimento("1981-06-11");
$professor->SetRegistroFuncional("FUN335544");
$professor->setDisciplina("Matematica Basica");
$professor->setEspecialidade("Licenciatura em Matematica");
echo 'Nome: ' . $professor->getNome() . '<br>';
echo 'Email: ' . $professor->getEmail() . '<br>';
echo 'Data Nascimento: '.$professor->getDataNascimento().'<br>';
echo 'Registro Funcional: '.$professor->getRegistroFuncional(); echo '<br>';
echo 'Disciplina: '.$professor->getDisciplina().'<br>';
echo 'Especialidade: '.$professor->getEspecialidade().'<br>';
echo '<br>';
?>



    
    
