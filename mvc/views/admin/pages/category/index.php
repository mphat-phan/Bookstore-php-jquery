<div id="content" class="content-wrapper">
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
                        <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                        <li class="breadcrumb-item active">Thể loại</li>
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
                            <h3 class="card-title">Category table</h3>

                            <button type="button" onclick="openModal('')" href="#"
                                class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                                data-target="#AddModal">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                                role="button" data-toggle="modal" data-target="#">Import</button>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="categorytable"
                                class="table table-bordered table-striped dt-responsive nowrap display">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Detail</th>
                                        <th>Image</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Detail</th>
                                        <th>Image</th>
                                        <th>#</th>
                                    </tr>
                                    
                                </tfoot>
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

    <div class="modal" id="AddModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAdd" action="" method="post" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input name="txtName" type="text" class="form-control" placeholder="Enter ">
                            </div>
                            <div class="form-group w-25">
                                <label for="exampleInputEmail1">Category Image</label>
                                <input name="txtImage" id="txtImage" type="file" accept="image/*" class="form-control "
                                    placeholder="Enter ">
                                <img id="imageCategoryAdd" class="img-fluid " src="" alt="">
                            </div>
                            <label for="exampleInputEmail1">Category Description</label>
                                <div class="card-body">
                                    <textarea name="txtDetail" id="summernote" id="">
                                       
                                    </textarea>
                                </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button id='addbtn' name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="DeleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Delete</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formDelete" action="" method="POST">

                        <div class="card-body">
                            <div class="form-check">
                                <input name="checkDelete" id="checkDelete" type="checkbox" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
    <div class="modal" id="AddCategoryModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAddCategory" action="" method="post">
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Parent</label>
                                <select class="form-control select2" name="selectRole[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-blue" id="selectCategory" style="width: 100%;">                                                              
                                </select>                         
                            </div>                                               
                            <!-- /.card-body -->                        
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="UpdateModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formUpdate" action="" method="POST" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input name="txtName" type="text" class="form-control" placeholder="Enter ">
                            </div>
                            <div class="form-group w-25">
                                <label for="exampleInputEmail1">Category Image</label>
                                <input name="txtImage" id="txtImageUpdate" type="file" accept="image/*" class="form-control "
                                    placeholder="Enter ">
                                <img id="imageCategory" class="img-fluid " src="" alt="">
                            </div>
                            <label for="exampleInputEmail1">Category Description</label>
                                <div class="card-body">
                                    <textarea name="txtDetail" id="summernote2" id="">
                                       
                                    </textarea>
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
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(function () {
    // Summernote
        $('#summernote').summernote()
        $('#summernote2').summernote()
    })
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });
    })
    $(document).ready(function () { 


        $('#UpdateModal input[type="file"]').change(function(e) {
                
                $("#imageCategory").fadeIn("fast").attr('src',URL.createObjectURL(e.target.files[0]));
                    
            });
        
            $('#AddModal input[type="file"]').change(function(e) {
                        
                $("#imageCategoryAdd").fadeIn("fast").attr('src',URL.createObjectURL(e.target.files[0]));
                    
            });

        categorytable = $('#categorytable').DataTable({
            dom: 'Bfrtip',
            "scrollY":true,
            "ajax": "<?php echo constant('URL') ?>category/getall",
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": null,
                    "render": function (data, type, full) {
                        return("...see more in update")
                    }
                },
                {
                    "data": "image",
                    "render": function (data, type, row, meta) {
                        if(data){
                            return(
                            "<a href='<?php echo constant('URL') ?>/public/assets/images/"+data+"' data-toggle='lightbox' data-title='Image'>"+
                                "<img class='img-fluid' src='<?php echo constant('URL') ?>/public/assets/images/"+data+"' class='img-fluid mb-2' alt='white sample'/>"+
                            "</a>"
                            );
                        }
                        else{
                            return(
                                "Blank"
                            )
                        }
                        
                    }
                },
                {
                    "data": "id",
                    //"defaultContent": "<a onclick='openModal()' href='#' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target='#UpdateModal'>Update</a>"
                    "render": function (data, type, row, meta) {

                        return (
                            "<button onclick='openModal(this)' class='btn btn-warning btn-sm mr-1' role='button' data-toggle='modal' data-target='#UpdateModal' data_id='" +
                            data + "'>" +
                            "Update" +
                            "</button>" +
                            "<button onclick='openModal(this)' class='btn btn-danger btn-sm mr-1' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                            data + "'>" +
                            "Delete" +
                            "</button>" +
                            "</button>" +                            
                            "<button type='button' onclick='openModal(this)' href='#' class='btn btn-primary btn-sm' role='button'data-toggle='modal' data-target='#AddCategoryModal' data_id='" + data + "'>Category</button>"
                        );

                    }
                }
            ],

        });

        $("#formAdd").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    categorytable.ajax.reload();
                }
            });

        })
        $("#formUpdate").submit(function (e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    categorytable.ajax.reload();
                }
            });

        })
        $("#formDelete").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Delete");
                    categorytable.ajax.reload();

                }
            });

        })
    });
    function openModal(e){
        $getCurrentUrl = '<?php echo constant('URL') ?>category';
        id=$(e).attr('data_id');
        const x = document.forms["formUpdate"];
        var name,detail;
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>category/getByID/'+id,
            dataType: 'json',
            success: function(data){
              
                x.elements[0].value = data['data'][0].name;
                $("#summernote2").summernote("code",data['data'][0].detail);
                $('#txtImageUpdate').val('');
                $("#imageCategory").attr("src","<?php echo constant('URL') ?>public/assets/images/"+data['data'][0].image)
            }
        });
        $formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        $formAdd = document.querySelector("#formAdd");
        $formAddCategory = document.querySelector("#formAddCategory");

        $formAdd.action =  $getCurrentUrl+"/add";
        $formAddCategory.action =  $getCurrentUrl+"/updateParentID/"+id;
        $formUpdate.action = $getCurrentUrl+"/update/"+id;
        $formDelete.action = $getCurrentUrl+"/delete/"+id;

        var selectCategory = document.getElementById('selectCategory');
        var category;                         
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>category/getAll',
                dataType: 'json',
                success: function(data){                                        
                    category = data['data'];                    
                    Object.keys(category).forEach(key => {                                                                    
                        selectCategory.options[key] = new Option(category[key].name, category[key].id)
                    });                            
                    $.ajax({
                        type: "POST",
                        url: '<?php //echo constant('URL') ?>category/getByID/'+id,
                        dataType: 'json',
                        success: function(data){                                    
                            var categorychild = data['data'];                                                        
                            if(categorychild !== undefined)
                            {
                                Object.keys(category).forEach(key1 => {                                
                                    Object.keys(categorychild).forEach(key2 => {                                    
                                        if(categorychild[key2].parentID == category[key1].id)
                                        {                                        
                                            category[key1]['selected'] = 'selected';
                                        }                                    
                                    })
                                    category['id'] = id;                                    
                                });                                                                                        
                                Object.keys(category).forEach(key => {                                
                                    if(category[key]['selected'] == 'selected' && category['id'] == id)
                                    {
                                        selectCategory.options[key] = new Option(category[key].name, category[key].id,false,true);
                                    }
                                    else if(role['username'] == id)
                                    {
                                        selectCategory.options[key] = new Option(category[key].name, category[key].id,false,false);
                                    }
                                });                                                                                                
                            }                                                        
                        }                                                    
                    });                    
                }                
            });                                      
        $('#selectCategory').change(function(e) {            
            var selected = $(e.target).val();
            if(selected == '')
            {
                selected[0] = 'NULL';
            }
            //console.log(selected);            
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>category/updateParentID/'+id,
                data: {selected:selected}, // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    categorytable.ajax.reload();
                }
            });
        });
    }
</script>