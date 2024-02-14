<?php

class Senha extends Model
{
    public function validate($data)
    {
        $this->error = array();
        $user = Auth::id();

        if ($row = $this->where('idUsuario', $user)) {
            $row = $row[0];

            if (empty($data["senha"])) {
                $this->error['senha'] = "Senha obrigatória";
            } else {
                if (password_verify($data['senha'], $row->senha)) {
                    if (empty($data["senhaA"])) {
                        $this->error['senhaA'] = "Nova Senha obrigatória";
                    } elseif (empty($data["confsenha"])) {
                        $this->error['confsenha'] = "Confirmação de Nova Senha obrigatória";
                    } elseif (strlen($data['senhaA']) < 5 || strlen($data['confsenha']) < 5) {
                        $this->error['senha'] = "Necessário ter no mínimo 5 letras ou mais";
                    } elseif ($data['senhaA'] != $data['confsenha']) {
                        $this->error['senha'] = "Nova senha e confirmação devem ser iguais";
                    }
                } else {
                    $this->error['senha'] = 'Senha incorreta';
                }
            }
        } else {
            $this->error['senha'] = "Senha obrigatória";
        }

        if (count($this->error) == 0) {
            return true;
        } else {
            return false;
        }
    }
}

