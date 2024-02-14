<?php

    class alterPassword extends Controller{

        public function index(){
            $erro = array();
            $validate = new Senha();
            $model = new Model();
            $user = Auth::id();

            if(count($_POST)> 0){

                $data = [
                    "senha"=> $_POST["senha"],
                    "senhaA"=> $_POST["senhaA"],
                    "confsenha"=> $_POST["confsenha"],
                ];

                if($validate->validate($data)){
                    $hashedPassword = password_hash($_POST["senhaA"], PASSWORD_DEFAULT);
                    $arr = [
                        "senha"=> $hashedPassword,
                        "idUsuario"=> $user
                    ];
                    $model->updateUser($arr);
                    $this->redirect('logout');
                
                }else{
                    $erro = $validate->error;
                }
            }

            $this->view("alterarSenha", ['erro' => $erro]);
        }
    }