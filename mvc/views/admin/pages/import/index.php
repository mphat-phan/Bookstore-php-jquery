

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Nhập hàng</li>
                        
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product</label>
                                        <select class="form-control select2" id="selectProduct" style="width: 100%;">
                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input min=0 name="" type="number" class="form-control" id="txtQuantity"
                                            placeholder=" " value=1>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input min=0 name="" type="number" class="form-control" id="txtPrice"
                                            placeholder=" " value=10000>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" onclick='openModal()' href="#"
                                        class="btn btn-primary btn-sm float-right "
                                        role="button" data-toggle="modal" data-target="#saveModel">Save</button>
                                    <button type="button" onclick='' href="#" id = "addImport"
                                        class="btn btn-primary btn-sm float-left mr-1">Add</button>
                                    <button type="button" onclick='' href="#" id = "addImport"
                                        class="btn btn-primary btn-sm float-left mr-1" data-toggle="modal" data-target="#AddModal">Add New</button>
                                    <button type="button" onclick="" href="#"
                                        class="btn btn-success btn-sm float-right mr-1" role="button"
                                        data-toggle="modal" data-target="#importExcel">Import</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">Auto Update Price Over
                                        </label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input min=0 max=100 name="" type="number" class="form-control" id="txtPricePercent"
                                            disabled>
                                        <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>
                        </div>
                        

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="nhaphangtable" class="table table-bordered table-striped">
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<div class="modal" id="importExcel">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Import</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAddExcel" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Image</label>
                                <input name="txtExcelImport" id="txtExcelImport" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <!-- /.card-body -->
                            
                        </div>
                        <div class="card-footer">
                            <button id="btnImportExcel" name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
               
            </div>

        </div>
    </div>
</div>
<div class="modal" id="saveModel">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAdd" action="" method="POST">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input name="txtDate" type="date" class="form-control" id="txtDate" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total</label>
                            <input name='txtTotal' type="number" class="form-control" id="txtTotal"
                                 disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User</label>
                            <input name='txtUser' type="text" class="form-control" id="txtUser"
                                 disabled>
                        </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </form>
               
            </div>

        </div>
    </div>
</div>
<div class="modal"  id="AddModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAdd" action="" method="post">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product ID</label>
                                <input name="txtIDNew" type="text" class="form-control " id="txtIDNew"
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input name="txtNameNew" type="text" class="form-control " id="txtNameNew"
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input name="txtPriceNew" type="number" class="form-control " id="txtPriceNew"
                                    placeholder="Enter " value=10000 required>
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity</label>
                                <input name="txtQuantityNew" type="number" class="form-control " id="txtQuantityNew"
                                    placeholder="Enter " value=1 required>
                            </div> 
                            <!-- /.card-body -->
                            
                        </div>
                        <div class="card-footer">
                                <button id='addbtn' name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    var importdetail = []   ;
    var user = '<?php echo $_COOKIE['username'] ?>';
    var autoPrice = 0;
    $(document).ready(function() {
        
        
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#txtPricePercent').prop("disabled", false);
            }
            else if($(this).prop("checked") == false){
                $('#txtPricePercent').prop("disabled", true);
            }
        });

        var selectProduct = document.getElementById('selectProduct');
        $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>product/getall',
                dataType: 'json',
                success: function(data){
                    var product = data['data'];
                    Object.keys(product).forEach(key => {
                        selectProduct.options[key] = new Option(product[key].id+"-"+product[key].name, product[key].id);
                    });

                }
        });

        $("#addImport").click(function(){
    
            productID = $("#selectProduct").val();
            quantity = $("#txtQuantity").val();
            price = $("#txtPrice").val();   
            total = quantity*price;
            console.log(productID);
            if(checkDuplicate(productID)==1){
                sweetAlertCRUD(0, "Bị trùng mã sản phẩm : ");
                return;
            }
            sweetAlertCRUD(1, "Add");
            importdetail.push({productID,quantity,price,total});
     
            let nhaphangtable=$('#nhaphangtable').DataTable( {
            "data": importdetail,
            //define the columns and set the data property for each column
            "columns": [
                { 
                    "title": "ProductID",  "data": "productID" 
                },
                { 
                    "title": "Quantity", "data": "quantity",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtQuantityDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Price", "data": "price",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtPriceDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": null,
                    "render": function (data, type, full) {
                        var quantity = full.quantity;
                        var price = full.price;
                        var total = quantity*price;
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+total+"' disabled >"
                        )

                    }
                
                },
                { 
                    "title": "Remove", "data": null,
                    "render": function (data, type, full) {
                        var id = full.productID;
                        return(
                            "<button onclick='removeRow(this)' id='removeRow' class='btn btn-danger btn-sm' role='button'  data_id='" +
                            id + "'>" +
                            "Remove" +
                            "</button>"
                        )

                    }
                
                },
            ]
            } );
            nhaphangtable.destroy();
        });
        
        $("#formAdd").submit(function (e) {
            e.preventDefault();
            if(document.getElementById('txtTotal').value==0){
                sweetAlertCRUD(0, "Phiếu nhập rỗng không thể add: ");
                return;
            }
            
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    "txtDate" : document.getElementById('txtDate').value,
                    "txtTotal" : document.getElementById('txtTotal').value,
                    "txtUser" : document.getElementById('txtUser').value,
                    "importdetail" : JSON.stringify(importdetail)
                }, // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    alert("Nhập hàng thành công");
                    if(data==1){
                        location.reload();
                    }
                }
            });

        })
        $("#addbtn").click(function(e){
            e.preventDefault();
            productID = $("#txtIDNew").val();
            quantity = $("#txtQuantityNew").val();
            price = $("#txtPriceNew").val();   
            name = $("#txtNameNew").val();   
            //name = $("#txtNameNew").val();  
            total = quantity*price;
            console.log(productID);
            if(checkDuplicate(productID)==1){
                sweetAlertCRUD(0, "Bị trùng mã sản phẩm : ");
                return;
            }
            sweetAlertCRUD(1, "Add");
            importdetail.push({productID,quantity,price,total,name});
     
            let nhaphangtable=$('#nhaphangtable').DataTable( {
            "data": importdetail,
            //define the columns and set the data property for each column
            "columns": [
                { 
                    "title": "ProductID",  "data": "productID" 
                },
                { 
                    "title": "Quantity", "data": "quantity",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtQuantityDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Price", "data": "price",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtPriceDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": null,
                    "render": function (data, type, full) {
                        var quantity = full.quantity;
                        var price = full.price;
                        var total = quantity*price;
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+total+"' disabled >"
                        )

                    }
                
                },
                { 
                    "title": "Remove", "data": null,
                    "render": function (data, type, full) {
                        var id = full.productID;
                        return(
                            "<button onclick='removeRow(this)' id='removeRow' class='btn btn-danger btn-sm' role='button'  data_id='" +
                            id + "'>" +
                            "Remove" +
                            "</button>"
                        )

                    }
                
                },
            ]
            } );
            nhaphangtable.destroy();
        })
        $("#formAddExcel").submit(function(e){
            e.preventDefault();
            var url = "<?php echo constant('URL') ?>import/addExcel";
            console.log(url);
            $.ajax({
                type: "POST",
                url: url,
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    console.log(data);
                    sweetAlertCRUD(data, "Add");
                    if(data==1){
                        alert("Nhập hàng thành công");
                        location.reload();
                    }
                }
            });
        })
      
    });
    function removeRow(e){
        id=$(e).attr('data_id');
        if(removeArr(id)==1){
            sweetAlertCRUD(1, "Remove");
            let nhaphangtable=$('#nhaphangtable').DataTable( {
            "data": importdetail,
            //define the columns and set the data property for each column
            "columns": [
                { 
                    "title": "ProductID",  "data": "productID" 
                },
                { 
                    "title": "Quantity", "data": "quantity",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input name='txtQuantityDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Price", "data": "price",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input name='txtPriceDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": null,
                    "render": function (data, type, full) {
                        var quantity = full.quantity;
                        var price = full.price;
                        var total = quantity*price;
                        return(
                            total
                        )

                    }
                
                },
                { 
                    "title": "Remove", "data": null,
                    "render": function (data, type, full) {
                        var id = full.productID;
                        return(
                            "<button onclick='removeRow(this)' id='removeRow' class='btn btn-danger btn-sm' role='button'  data_id='" +
                            id + "'>" +
                            "Remove" +
                            "</button>"
                        )

                    }
                
                },
            ]
            } );
            nhaphangtable.destroy();

        }
        
        
    }
    function checkDuplicate(id){
        for(let i=0;i<importdetail.length;i++){
            if(importdetail[i].productID==id){
                return 1;
            }
        }
        return 0;
    }
    function removeArr(id){

        for(let i=0;i<importdetail.length;i++){
            if(importdetail[i].productID==id){
                importdetail.splice(i, 1);
                return 1;
            }
        }
        return 0;
    }
    function keyupCalculate(element){
    
        
        var row = element.parentNode.parentNode.rowIndex; // trả về hàng của table
       

        var c1 = document.getElementById("nhaphangtable").rows[row].cells.item(1);
        var quantity = c1.childNodes[0].value;
        importdetail[row-1].quantity = quantity;
        
        var c2 = document.getElementById("nhaphangtable").rows[row].cells.item(2);
        var price = c2.childNodes[0].value;
        importdetail[row-1].price = price;
        
        var c3 =document.getElementById("nhaphangtable").rows[row].cells.item(3);
        c3.childNodes[0].value=quantity*price;
        importdetail[row-1].total = quantity*price;

        // var c2 =document.getElementById("nhaphangtable").rows[row].cells.item(2);
        // var c3 =document.getElementById("nhaphangtable").rows[row].cells.item(3);
        
        // c3.childNodes[0].value=c1.childNodes[0].value+c2.childNodes[0].value;
        
    }
    function sumImport(){
        var sum = 0
        for(let i=0;i<importdetail.length;i++){
            sum+=importdetail[i].total;
        }
        return sum;
    }
    function getDate(){
        var today = new Date();
        return today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


    }
    function openModal(){
            //action
        $getCurrentUrl = '<?php echo constant('URL') ?>import';
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action =  $getCurrentUrl+"/add";
        const x = document.forms["formAdd"];
        x.elements[0].value = getDate();
        x.elements[1].value = sumImport();
        x.elements[2].value = user;
        
    } 
    

</script>
