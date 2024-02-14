<?php 

    class Perfil extends Controller{

        public function index(){
            $model = new Model();

            $user = $_GET['usuario'];

            $userInfo = $model->where('idUsuario' , $user);

            $this->view('perfil', ['userInfo' => $userInfo]);
        }
    }

?>