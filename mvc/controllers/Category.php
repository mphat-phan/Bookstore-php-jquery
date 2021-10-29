<?php
class Category extends Controller{
    
    function __construct(){
        $this->category = $this->model("CategoryModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "category",
            "Category" => $this->category->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/category/categoryAjax",array(
            "Category" => $this->category->getAll()
        ));
    }
    function add(){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            if($this->category->add($array)==1){
                $this->view("admin/pages/category/categoryAjax",array(
                    "Category" => $this->category->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return; 
            }
        }
        $this->view("admin/pages/category/categoryAjax",array(
            "Category" => $this->category->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));
    }
    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            
            if($this->category->updateByID($array,$id)==1){
                $this->view("admin/pages/category/categoryAjax",array(
                    "Category" => $this->category->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/category/categoryAjax",array(
            "Category" => $this->category->getAll(),
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->category->delete($id)==1){
                $this->view("admin/pages/category/categoryAjax",array(
                    "Category" => $this->category->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/category/categoryAjax",array(
            "Category" => $this->category->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>