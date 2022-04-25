<?php
class Pages extends Controller {
    public function __construct(){
        // this is constructor
        $this->userModel = $this->model('User');
    }
    public function index() {
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'home page',
            'users' => $users
        ];
        $this->view('pages/index',$data);
    }
    
}
?>