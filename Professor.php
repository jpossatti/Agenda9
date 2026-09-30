<?php
require_once 'Usuario.php';
class Professor extends Usuario
{
    private string $registroFuncional;
    private string $disciplina;
    private string $especialidade;

    // Getters e Setters
    public function getRegistroFuncional() {
        return $this->registroFuncional;
    }

    public function setRegistroFuncional($registroFuncional)  {
        $this->registroFuncional = $registroFuncional;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function setDisciplina( $disciplina) {
        $this->disciplina = $disciplina;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

   
}
?>