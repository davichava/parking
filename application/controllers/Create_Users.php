<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Create_Users extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('create_users');
        $this->load->view('layouts/footer');
    }

    public function insertUser()
    {
        $cedula = $this->input->post('cedula');
        $nombre = $this->input->post('nombre');
        $tipoVehiculo = $this->input->post('tipoVehiculo');       
        $cilMoto = $this->input->post('cilMoto');
        $tiemMoto = $this->input->post('tiemMoto');
        $plaMoto = $this->input->post('plaMoto');
        $modCarro = $this->input->post('modCarro');
        $pueCarro = $this->input->post('pueCarro');
        $plaCarro = $this->input->post('plaCarro');
        $fechayhora = $this->input->post('fechayhora');
        $numCelda = $this->input->post('numCelda');

        $user = array(
            'cedula' => $cedula,
            'nombre' => $nombre,
            'tipoVehiculo' => $tipoVehiculo,            
            'cilMoto' => $cilMoto,
            'tiemMoto' => $tiemMoto,
            'plaMoto' => $plaMoto,
            'modCarro' => $modCarro,
            'pueCarro' => $pueCarro,
            'plaCarro' => $plaCarro,
            'fechayhora' => $fechayhora,
            'numCelda' => $numCelda,
        );
        $this->Users->insertUser($user);
        header('location:http://localhost/parcking/');
    }

    public function deleteUser()
    {
        $id  = $this->input->get('id');
        $this->Users->deleteUser($id);
        header('location:http://localhost/parcking/');
    }

    public function editUser()
    {
        $id = $this->input->get('id');
        $user = array('user' => $this->Users->listUser($id));
        $this->load->view('layouts/header');
        $this->load->view('edit_users', $user);
        $this->load->view('layouts/footer');
    }

    public function updateUser()
    {
        $id = $this->input->get('id');
        $cedula = $this->input->post('cedula');
        $nombre = $this->input->post('nombre');
        $tipoVehiculo = $this->input->post('tipoVehiculo');               
        $cilMoto = $this->input->post('cilMoto');
        $tiemMoto = $this->input->post('tiemMoto');
        $plaMoto = $this->input->post('plaMoto');
        $modCarro = $this->input->post('modCarro');
        $pueCarro = $this->input->post('pueCarro');
        $plaCarro = $this->input->post('plaCarro');
        $fechayhora = $this->input->post('fechayhora');
        $numCelda = $this->input->post('numCelda'); 
        
        $user = array(
            'id' => $id,
            'cedula' => $cedula,
            'nombre' => $nombre,
            'tipoVehiculo' => $tipoVehiculo,            
            'cilMoto' => $cilMoto,
            'tiemMoto' => $tiemMoto,
            'plaMoto' => $plaMoto,
            'modCarro' => $modCarro,
            'pueCarro' => $pueCarro,
            'plaCarro' => $plaCarro,
            'fechayhora' => $fechayhora,
            'numCelda' => $numCelda,
        );
        $this->Users->updateUser($user, $id);
        header('location: http://localhost/parcking/');
    }
}
