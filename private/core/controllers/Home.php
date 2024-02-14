<?php 

    class Home extends Controller{

        public function index(){
            $idFunc = Auth::id();

            if(!Auth::loggetin()){
                $this->redirect('logout');
            }
            if(Auth::idfativo() != 1){
                $this->redirect('logout');
            }
            $model = new Model();

            $todosFunc = $model->allFunc();
            $todosEquip = $model->allEquip();

            $equiPfunc = $model->FuncEquip('idFunc', $idFunc);


            $this->view('home', ['todosFunc' =>$todosFunc, 'todosEquip' =>$todosEquip, 
            'equiPfunc' => $equiPfunc]);
        }
    }

?>