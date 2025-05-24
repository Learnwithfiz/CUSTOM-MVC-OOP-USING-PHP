<?php
class Controller{
    public function model($model)
    {
        include "../Model/$model.php";
        return new $model ; // new User
    }

    public function view($path,$data)
    {
        include "../View/$path.php"; 
    }
}


?>