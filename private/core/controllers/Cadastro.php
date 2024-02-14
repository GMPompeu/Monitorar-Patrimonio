<?php

class Cadastro extends Controller
{


    public function newequip()
    {
        if(!Auth::loggetin()){
            $this->redirect('logout');
        }
        if(Auth::idfativo() != 1){
            $this->redirect('logout');
        }
        if(Auth::acess() != 1){
            $this->redirect('home');
        }
        $erro = array();
        if (count($_POST) > 0) {
            $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $numSerie = 'SN';

            for ($i = 0; $i < 8; $i++) {
                $caractereAleatorio = $caracteres[rand(0, strlen($caracteres) - 1)];
                $numSerie .= $caractereAleatorio;
            }
            $insert = new Model();
            $validate = new Equip();

            $DATA = [
                'nomeEquip' => $_POST['nomeEquip'],
                'categoria' => $_POST['categoria'],
                'modeloEquip' => $_POST['modeloEquip'],
                'marcaEquip' => $_POST['marcaEquip'],
                'numSerie' => $numSerie,
                'valorEquip' => $_POST['valorEquip'],
            ];
            

            if ($validate->validate($DATA)) {
                $insert->insertEquip($DATA);
                $this->redirect('allequipamento');
            } else {
                $erro = $validate->error;
            }
        }
        $this->view('newequip', ['erro' => $erro]);
    }


    public function index()
    {
        if(!Auth::loggetin()){
            $this->redirect('logout');
        }
        if(Auth::idfativo() != 1){
            $this->redirect('logout');
        }
        if(Auth::acess() != 1){
            $this->redirect('home');
        }
    }
    #URL for igual newFunc Cadastra um novo Usuario 
    public function newUser()
    {
        if(!Auth::loggetin()){
            $this->redirect('logout');
        }
        if(Auth::idfativo() != 1){
            $this->redirect('logout');
        }
        if(Auth::acess() != 1){
            $this->redirect('home');
        }

        $insert = new Model();
        #Instancio Minha model para validar os campos
        $validate = new User();

        $erro = array();
        #Recebo dados da pagina por Post
        if (count($_POST) > 0) {
            $DATA = [
                'usuario' => $_POST['usuario'],
                'nomeUsu' => $_POST['nomeUsu'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'ativo' => "1",
                'permissao' => $_POST['permissao']
            ];

            if ($validate->validate($DATA)) {

                $insert->insertUser($DATA);
                $this->redirect('allfuncionario');
            } else {
                $erro = $validate->error;
            }
        }

        $this->view('newUser', ['erro' => $erro]);
    }

    public function newfunc(){
        if(!Auth::loggetin()){
            $this->redirect('logout');
        }
        if(Auth::idfativo() != 1){
            $this->redirect('logout');
        }
        if(Auth::acess() != 1){
            $this->redirect('home');
        }
        $insert = new Model();
        #Instancio Minha model para validar os campos
        $validate = new Func();

        $erro = array();

        if (count($_POST) > 0) {
            $DATA = [
               'nomeFunc' => $_POST['nomeFunc'],
               'cargo'=> $_POST['cargo'],
                'cpf' => $_POST['cpf'],
            ];

            if($validate->validate($DATA)){
                $insert->insertFunc($DATA);
                $this->redirect('allfuncionario');

            }else{
                $erro = $validate->error;
            }
        }


        $this->view('newFunc', ['erro' => $erro]);
    }
}
