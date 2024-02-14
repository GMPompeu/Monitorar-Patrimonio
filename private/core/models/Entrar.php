<?php

    class Entrar extends Model{

        public function validate($DATA){
            $this->error = array();

            if(empty($DATA["usuario"])){
                $this->error['usuario'] = "Usuario e Senha obrigatórios";
            }
            if(empty($DATA["senha"])){
                $this->error['usuario'] = "Usuario e Senha obrigatórios";
            }
            if(count($this->error) == 0){
                return true;
            }else{
                return false;
            }
        }
    }