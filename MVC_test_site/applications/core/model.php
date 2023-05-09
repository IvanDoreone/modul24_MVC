<?php
class Model
{
    public $string;

    public $data;
    //эти функции в контроллерах страниц не используются, в них прописаны свои функции, тк реальной БД у сайта нет
    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }
    public function get_data(){
        $this->data = "getting smth from my database";
        
    }
}
