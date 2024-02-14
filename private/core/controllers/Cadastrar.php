<?php 

    class Cadastrar extends Controller{

        public function index(){
            if(!Auth::loggetin()){
                $this->redirect('logout');
            }
            if(Auth::idfativo() != 1){
                $this->redirect('logout');
            }
            if(Auth::acess() != 1){
                $this->redirect('home');
            }

            $this->view('cadastrar');
        }

    }

?>