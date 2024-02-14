<?php 

    class Auth extends Controller{
        public static function authenticate ($row){

            $_SESSION['USUARIO'] = $row;
        }

        public static function id () {
            if(isset ($_SESSION['USUARIO']) ){
                return $_SESSION['USUARIO']->idUsuario;
             }
             return false;
        }
        public static function logout (){
    
            if(isset ($_SESSION['USUARIO']) ){
                unset($_SESSION['USUARIO']);
            }
        }
        public static function loggetin (){
    
            if(isset ($_SESSION['USUARIO']) ){
               return true;
            }
            return false;
        } 
        public static function user (){
    
            if(isset ($_SESSION['USUARIO']) ){
               return $_SESSION['USUARIO']->nomeUsu;
            }
            return false;
        }
        public static function acess()
        {
            $usuario = new Entrar();
            $acesso = $_SESSION['USUARIO']->usuario;
            $row = $usuario->where('usuario', $acesso);
    
            if (!empty($row)) {
                return $row[0]->permissao;
            }
    
            return null;
        }
        public static function idfativo()
        {
            $usuario = new Entrar();
            $idf = $_SESSION['USUARIO']->usuario;
            $row = $usuario->where('usuario', $idf);
    
            if (!empty($row)){
                return $row[0]->ativo;
            }
            return null;
        }
    }