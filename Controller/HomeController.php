<?php
class HomeController extends Controller {

    public function Index()
    {
        $dataModel = $this->model('User');
        $data = $dataModel->GetUserInfo();
        $this->view('Home',['data'=>$data]);
    }
    public function About()
    {
        $dataModel = $this->model('User');
        $data = $dataModel->GetUserInfo();
        $this->view('About',['data'=>$data]);
    }
}

?>