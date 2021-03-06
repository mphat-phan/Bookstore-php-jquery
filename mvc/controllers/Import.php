<?php
error_reporting(0);
class Import extends Controller{
    
    function __construct(){
        $this->import = $this->model("ImportModel");
        $this->importdetail = $this->model("ImportDetailModel"); 
        $this->product = $this->model("ProductModel"); 
        $this->UserRole = $this->model("UserRoleModel");                                
    }    

    function index(){
        if($this->UserRole->checkRole("staff.import")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
        $this->view("admin/layout2",array(
			"Page" => "import\index"    
		));        
    }
    function getAll(){
        $list = $this->import->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->import->getID($id);
        echo $list;
    }
    function getLastID(){
        $list = $this->import->selectLast();
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['importdetail'])){
            $date = $_POST['txtDate'];
            $total= $_POST['txtTotal'];
            $user= $_POST['txtUser'];
            $obj = json_decode($_POST['importdetail']);
            if($total==0){
                echo 0; 
                return;
            }

            if($this->import->add(array('date' => $date, "total" => $total , "employee_username" => $user))==1){
                $importID = $this->import->selectLast();
                for($i = 0 ; $i < count($obj) ; $i++){
                    
                    $array = array('importID' => $importID ,'productID' => $obj[$i]->productID, "quantity" => $obj[$i]->quantity , "price" => $obj[$i]->price);
                    if(empty($obj[$i]->productID)){
                        $arrayProduct = array('name'=>$obj[$i]->name,'quantity'=>$obj[$i]->quantity,'price'=>$obj[$i]->price,'status'=>0);
                    }
                    $arrayProduct = array('id'=>$obj[$i]->productID,'name'=>$obj[$i]->name,'quantity'=>$obj[$i]->quantity,'price'=>$obj[$i]->price,'status'=>0);
                    if($this->product->add($arrayProduct)==1){
                        $this->importdetail->add($array);
                    }
                    
                }
                echo 1;
                return;
            }
        }
        echo 0;
        
    }
    function addExcel(){
        
        // $target_dir = "./public/assets/images/";
        // $target_file = $target_dir.basename($_FILES["txtExcelImport"]["name"]);
        // move_uploaded_file($_FILES["txtExcelImport"]["tmp_name"], $target_file);
        if(isset($_FILES["txtExcelImport"]["tmp_name"])){
            //???????ng d???n file
            $file = './public/assets/images/'.basename($_FILES["txtExcelImport"]["name"]);
            echo $file;
            
            //Ti???n h??nh x??c th???c file
            $objFile = PHPExcel_IOFactory::identify($file);            
            $objData = PHPExcel_IOFactory::createReader($objFile);
            
            //Ch??? ?????c d??? li???u
            $objData->setReadDataOnly(true);
            
            // Load d??? li???u sang d???ng ?????i t?????ng
            $objPHPExcel = $objData->load($file);

            //L???y ra s??? trang s??? d???ng ph????ng th???c getSheetCount();
            // L???y Ra t??n trang s??? d???ng getSheetNames();

            //Ch???n trang c???n truy xu???t
            $sheet = $objPHPExcel->setActiveSheetIndex(0);
            //L???y ra s??? d??ng cu???i c??ng
            $Totalrow = $sheet->getHighestRow();
            //L???y ra t??n c???t cu???i c??ng
            $LastColumn = $sheet->getHighestColumn();
            //Chuy???n ?????i t??n c???t ???? v??? v??? tr?? th???, VD: C l?? 3,D l?? 4
            $TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);
            //T???o m???ng ch???a d??? li???u
            $data = [];
            //Ti???n h??nh l???p qua t???ng ?? d??? li???u
            //----L???p d??ng, V?? d??ng ?????u l?? ti??u ????? c???t n??n ch??ng ta s??? l???p gi?? tr??? t??? d??ng 2
            for ($i = 2; $i <= $Totalrow; $i++) {
                //----L???p c???t
                for ($j = 0; $j < $TotalCol; $j++) {
                    // Ti???n h??nh l???y gi?? tr??? c???a t???ng ?? ????? v??o m???ng
                    $data[$i - 2][$j] = $sheet->getCellByColumnAndRow($j, $i)->getValue();;
                }
            }
            $total = 0;
    
            for($i = 0 ; $i < count($data) ; $i++){
                $total+=$data[$i][2]*$data[$i][3];
            }
            $user = $_SESSION['username'];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d', time());

            if($this->import->add(array('date' => $date, "total" => $total , "employee_username" => $user))==1){
                $importID = $this->import->selectLast();
                for($i = 0 ; $i < count($data) ; $i++){
                    //import
                    $array = array('importID' => $importID ,'productID' => $data[$i][0], "quantity" => $data[$i][2] , "price" => $data[$i][3]);
                    //product
                    $arrayProduct = array('id'=>$data[$i][0],'name'=>$data[$i][1],'quantity'=>$data[$i][2],'price'=>$data[$i][3],'status'=>0);
                    if($this->product->add($arrayProduct)==1){
                        $this->importdetail->add($array);
                    }
                    
                }
                echo 1;
                return;
            }
            echo 0;
        }  
        echo 0;
    }
    function update(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","update")!=1)
        {
            echo 2;
            return;
        }
    }
    function delete(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import.delete","delete")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","delete")!=1)
        {
            echo 2;
            return;
        }
    }
    function pages() {
        $this->view("pages/404");
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
}
?>