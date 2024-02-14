<?php

    class Equip extends Model{

        public function validate($DATA){
            $this->error = array();
            
            if(empty($DATA["nomeEquip"])){
                $this->error['nomeEquip'] = "nomeEquip Campo obrigatorio";
            }
            if(empty($DATA["modeloEquip"])){
                $this->error['modeloEquip'] = "modeloEquip Campo obrigatorio";
            }
            if(empty($DATA["marcaEquip"])){
                $this->error['marcaEquip'] = "marcaEquip Campo obrigatorio";
            }
            if(empty($DATA["valorEquip"])){
                $this->error['valorEquip'] = "valorEquip Campo obrigatorio";
            }
            if($DATA["numSerie"] == null){
                $this->error['numSerie'] = "numSerie Campo obrigatorio";
            }

            if(count($this->error) == 0){
                return true;
            }else{
                return false;
            }
        }
    }