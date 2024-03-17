<?php

namespace App\Controllers;

use App\Models\AutomoveisModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data['variavel'] = "Conteudo do controller";
        $data['nickname'] = "LordWenzel1978";
        return view('my_view',$data);
    }

    public function apresenta_formulario(): string
    {
        return view('formulario');
    }

    public function telinha():string
    {

        $my_model = new AutomoveisModel();
        $result = $my_model->findAll();

        //print_r($result);
        $data['result'] = $result;


        return view('outra_view',$data);
    }

    public function receiveData()
    {
        $data = array(
            'marca' => $this->request->getVar('marca'),
            'modelo' => $this->request->getVar('modelo'),
            'km'=> $this->request->getVar('km'),
            'ano'=> $this->request->getVar('ano'),
            'preco' => $this->request->getVar('preco')
        );
        
        //print_r($data);

        $my_model = new AutomoveisModel();
        $my_model->insert($data);

        return view('view_formulario',$data);
    }

    public function deletarItem()
    {
        $id = $this->request->getVar('id');
        $my_model = new AutomoveisModel();
        $my_model->delete($id);
        return redirect()->to('tela'); 
    }
    
    public function deletarItemPorURL($num){
        $my_model = new AutomoveisModel();
        $my_model->delete($num);
        return redirect()->to('tela'); 


    }



}
