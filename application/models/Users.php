<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{

    public function listUsers()
    {
        $response = $this->db->query("SELECT * FROM  users ")->result();
        return $response;
    }

    public function insertUser($user)
    {
        $this->db->insert('users',$user);
    }


    public function deleteUser($id)
    {
        $response = $this->db->query("DELETE FROM users WHERE id = $id");
    }  

    public function listUser($id)
    {
        $response = $this->db->query("SELECT * FROM users WHERE id = $id")->result();
        return $response[0];
    }

    public function updateUser($user,$id)
    {
        $response = $this->db->query("UPDATE users SET cedula='{$user['cedula']}', 
        nombre='{$user['nombre']}',tipoVehiculo='{$user['tipoVehiculo']}',        
        cilMoto='{$user['cilMoto']}',tiemMoto='{$user['tiemMoto']}',plaMoto='{$user['plaMoto']}',
        modCarro='{$user['modCarro']}',pueCarro='{$user['pueCarro']}',
        plaCarro='{$user['plaCarro']}'
        ,fechayhora='{$user['fechayhora']}', 
        numCelda='{$user['numCelda']}', WHERE id = $id");
    }
}