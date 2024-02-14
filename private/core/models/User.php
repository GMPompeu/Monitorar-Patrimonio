<?php 

    class User extends Model{

        public function validate($DATA){
            
            $this->error = array();

            if (empty($DATA['nomeUsu']) || !preg_match('/^[a-zA-Z\s]+$/', $DATA['nomeUsu'])) {
                $this->error['nomeUsu'] = "•Nome Usuario: este campo aceita apenas letras ou está vazio";
            }
            if ($this->where('usuario', $DATA['usuario'])){
                $this->error['usuario'] = "•Usuário já cadastrado";
            }
            if (empty($DATA['senha'])){
                $this->error['senha'] = "•Senha: este campo não deve estar vazio";
            }
            if (empty($DATA['permissao'])){
                $this->error['permissao'] = "•Selecione um nivel de acesso";
            }

            if(count($this->error) == 0 ){
                return true;
            }
            return false;
        }
    }

?>