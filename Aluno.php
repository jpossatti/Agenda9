<?php
require_once 'Usuario.php';
class Aluno extends Usuario
{
    private string $matricula;
    private int $turmaId;
    private string $nivelAutonomia;

    
    

    // Getters e Setters
    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula) {
    $this->matricula = $matricula;
    }

    public function getTurmaId(){
        return $this->turmaId;
    }

    public function setTurmaId($turmaId) {
        $this->turmaId = $turmaId;
    }

    public function getNivelAutonomia() {
        return $this->nivelAutonomia;
    }

    public function setNivelAutonomia($nivelAutonomia) {
        $this->nivelAutonomia = $nivelAutonomia;
    }

}
?>