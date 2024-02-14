<?php 

    class Allfuncionario extends Controller{

        public function index(){
            if(!Auth::loggetin()){
                $this->redirect('logout');
            }
            if(Auth::idfativo() != 1){
                $this->redirect('logout');
            }
            $model = new Model();

             // Aqui você deve verificar se o formulário foi submetido e, em seguida, chamar a função delete
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->delete();
        }

            $todosFunc = $model->allFunc();
            

            $this->view('allfuncionario', ['todosFunc' =>$todosFunc]);
        }

        public function funcionario(){
            $model = new Model();

            if(!Auth::loggetin()){
                $this->redirect('logout');
            }
            if(Auth::idfativo() != 1){
                $this->redirect('logout');
            }

            $idFunc = $_GET['idf'];
            
            $equiPfunc = $model->FuncEquip('idFunc', $idFunc);
            $infoFunc = $model->whereFunc('idFunc', $idFunc);

            $this->view('funcionario', ['equiPfunc' => $equiPfunc, 'infoFunc' => $infoFunc]);
        }
        public function delete(){
            $model = new Model();
            
            if (isset($_POST['idFunc'])){
                
                $idFunc = $_POST['idFunc'];
    
                $model->deleteFunc($idFunc);
                $this->redirect('allfuncionario');
            }
        }
    }

    

?>