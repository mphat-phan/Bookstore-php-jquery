<?php	
	class OrderModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'ordertb';
                  
                  // Khai báo tên field id
                  $this->_key = 'id';
                  
                  // Gọi hàm khởi tạo cha
                  parent::__construct();
            }
            public function getAll()
            {   
                  return $this->selectAll('*');
            }
            public function getID($id)
            {   
                  return $this->select_by_id('*',$id);
            }
            public function getUser()
            {   
                  $this->_key = 'customer_username';
                  $user = $_SESSION['username'];
                  return $this->select_by_stringID('*',$user);
            }
            public function add($data){
                  return $this->add_new($data);
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id($id);
            }
            public function selectLast(){
                  $sql = "SELECT Max(id) as id FROM ordertb";
                  $list = $this->selectQuery($sql);
                  foreach($list as $row){
                        return $row['id'];
                  }

            }
            public function selectSortRevenue() {
                  $sql = "    SELECT YEAR(`ordertb`.`date`) as year, SUM(`ordertb`.`total`) as total
                              FROM `ordertb`
                              WHERE `ordertb`.`status` = 4
                              GROUP BY YEAR(`ordertb`.`date`)";
                  return $this->selectQueryJson($sql);
            }
            public function selectSortByMonth($year) {
                  $sql = "    SELECT YEAR(`ordertb`.`date`) as year, MONTH(`ordertb`.`date`) as month, SUM(`ordertb`.`total`) as total 
                              FROM `ordertb` 
                              WHERE YEAR(`ordertb`.`date`) = '$year' AND `ordertb`.`status` = 4
                              GROUP BY MONTH(`ordertb`.`date`)";
                  return $this->selectQueryJson($sql);
            }
            public function selectstatus($status) {                              
                  $username = $_SESSION['username'];
                  $sql = "SELECT `ordertb`.`id`,
                                 `ordertb`.`date`,
                                 `ordertb`.`subtotal`,
                                 `ordertb`.`shippingfee`,
                                 `ordertb`.`discount`,
                                 `ordertb`.`total`,
                                 `ordertb`.`status` 
                          FROM `ordertb`,`user` WHERE `ordertb`.`customer_username` = `user`.`username` AND `user`.`username` = '$username' AND `ordertb`.`status` = '$status'";
                  return $this->selectQueryJson($sql);
            }

	}
?> 