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

    public function editarItem(){

        $my_model = new AutomoveisModel();
        $id_var = $this->request->getVar('id');
        $result = $my_model->find($id_var);

        //print_r($result);
        $data['result'] = $result;
        return view('formularioEdicao',$data);
    }

    public function updateData(){

        $id_var = $this->request->getVar('id_for_updating');
        $data = array(
            'marca' => $this->request->getVar('marca_edit'),
            'modelo' => $this->request->getVar('modelo_edit'),
            'km'=> $this->request->getVar('km_edit'),
            'ano'=> $this->request->getVar('ano_edit'),
            'preco' => $this->request->getVar('preco_edit')
        );

        $my_model = new AutomoveisModel();
        
        $result = $my_model->update($id_var,$data);
        return redirect()->to('tela'); 

    }

    public function pesquisar(){
        $mysearch = $this->request->getVar("pesquisa");


        $db      = \Config\Database::connect();
        $builder = $db->table('automoveis');


        $result = $builder->like('modelo', $mysearch)->get()->getResult('array');

    
       $data['result'] = $result;
       return view('outra_view',$data);
    }



}
