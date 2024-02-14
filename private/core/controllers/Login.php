<?php

class Login extends Controller
{

    public function index()
    {

        $validate = new Entrar();

        $error = array();

        if (count($_POST) > 0) {
            $DATA = [
                'usuario' => $_POST['usuario'],
                'senha' => $_POST['senha'],
            ];
            if ($validate->validate($DATA)) {
                if ($row = $validate->where('usuario', $_POST['usuario'])) {
                    $row = $row[0];
                    if($row->ativo == 1){
                        if (password_verify($_POST['senha'], $row->senha)) {
                            Auth::authenticate($row); // Autenticando o usuário com $row[0]
                            $this->redirect('home');
                        }else{
                            $error[] = 'Senha Incorreta';
                        }
                    }else {
                        $error[] = "Senha ou Login incorreta";
                    }
                } else {
                    $error[] = "Senha ou Login incorreta";
                }
            }else{
                $error = $validate->error;
            }
        }
        $this->view('login', ['error' => $error]);
    }
}
