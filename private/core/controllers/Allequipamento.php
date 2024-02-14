<?php

class Allequipamento extends Controller
{

    public function index()
    {
        if (!Auth::loggetin()) {
            $this->redirect('logout');
        }
        if (Auth::idfativo() != 1) {
            $this->redirect('logout');
        }
        $model = new Model();

        $allInfo = $model->allInfo();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['acao'])) {
                if ($_POST['acao'] === 'delete') {
                    $this->delete();
                }
            }
        }

        $this->view('allequip', ['allInfo' => $allInfo]);
    }

    public function delete()
    {
        $model = new Model();

        if (isset($_POST['numSerie'])) {

            $numSerie = $_POST['numSerie'];

            $model->deleteEquip($numSerie);
            $this->redirect('allequipamento');
        }
    }

    public function vincular()
    {
        $model = new Model();
        $idFunc = $_POST['idFunc'];
        $num = $_POST['num'];

        $model->vinculate($idFunc, $num);
        $this->redirect('allequipamento/equipamento?numSerie=' . $num);
    }
    public function desvincular(){
        $model = new Model();
        $idFunc =  '';
        $num = $_POST['num'];
        $model->vinculate($idFunc, $num);
        $this->redirect('allequipamento/equipamento?numSerie=' . $num);
    }

    public function equipamento()
    {

        $model = new Model();

        if (!Auth::loggetin()) {
            $this->redirect('logout');
        }
        if (Auth::idfativo() != 1) {
            $this->redirect('logout');
        }

        $numSerie = $_GET['numSerie'];

        $infoEquip = $model->whereEquip('numSerie', $numSerie);
        $funcEquip = $model->equipFunc($numSerie);

        $todosFunc = $model->allFunc();

        if (count($_POST) > 0) {
            if ($_POST['acao'] === 'vincular') {
                $this->vincular();
            }elseif ($_POST['acao'] === 'desvincular') {
                $this->vincular();
            }
        }

        $this->view('equipamento', ['infoEquip' => $infoEquip, 'funcEquip' =>  $funcEquip, 'todosFunc' => $todosFunc]);
    }
}
