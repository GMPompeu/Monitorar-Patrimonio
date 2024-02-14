<?php

    class Func extends Model{

        public function validate($DATA){
            $this->error = array();

            if(empty($DATA["nomeFunc"])){
                $this->error['nomeFunc'] = "nomeFunc Campo obrigatorio";
            }
            if($this->whereFunc("nomeFunc",$DATA["nomeFunc"])){
                $this->error['nomeFunc'] = "Nome de usuario já cadastrado";
            }

            if(empty($DATA["cargo"])){
                $this->error['cargo'] = "cargo Campo obrigatorio";
            }
            if(empty($DATA["cpf"])){
                $this->error['cpf'] = "cpf Campo obrigatorio";
            }
            if(strlen($DATA["cpf"]) != 11){
                $this->error["cpf"] = 'Este campo deve conter no minimo 11 digitos';
            }
            if($this->whereFunc("cpf",$DATA["cpf"])){
                $this->error["cpf"] = "cpf Já cadastrado";
            }
            if(count($this->error) == 0){
                return true;
            }else{
                return false;
            }
        }
    }