<?php
    class dadosLogin {
        private $email;
        private $senha;
        public function __construct($e, $s){
            $this->email = $e;
            $this->senha = $s;
        }
        public function Login(){
            if ($this->email == "teste@test.com" && $this->senha == "123456"){
                echo ("Usuário Logado");
            }else{
                echo ("Dados Invalidos");
            }
        }
    }

    $usuario = new dadosLogin("teste@test.com","123456");
    $usuario->Login();
?>