<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengguna extends CI_Controller {
    public function index(){
		$this->load->model('Pengguna_model'); // Load the model
		$hasil = $this->Pengguna_model->getAll(); // Call the method from the model

		echo json_encode($hasil);
}
    public function create() {
        $this->load->model('Pengguna_model'); //Load the model
        $data = array(
            'user_id' => 8,
            'username' => 'putra',
            'email' => 'putra1@gmail.com',
            'role' => 'staf',
            'password' => '1234'
        );
       $respon = $this->Pengguna_model->create($data); //Call the method from the model

        echo $respon;
    }

    public function update() {
        $this->load->model('Pengguna_model'); //Load the model
        $data = array(
            'username' => 'aprilliary'
        );
        $id = 2;
        $update = $this->Pengguna_model->update($data, $id);

        echo json_encode($update);
       
    }

    public function delete($id){
        $this->load->model('Pengguna_model');
        $delete = $this->Pengguna_model->delete($id);

        echo json_decode($delete);
    }
}
