<?php

class Usuario {

    private $nome;
    private $email;

    function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function EnviarEmail() {
        $remetente = $this->email;
        $mensagem = $_POST['mensagem'];
        $assunto = $_POST['assunto'];

        $corpo_email = 'Nao responda esse email, E-mail automatizado! \n..';
        $corpo_email .= 'Mensagem: ' . $mensagem . '\n..';
        $corpo_email .= 'E-mail de: ' . $remetente . '\n..';

        @mail('meuemail', $assunto, $corpo_email, $remetente);
    }

}
