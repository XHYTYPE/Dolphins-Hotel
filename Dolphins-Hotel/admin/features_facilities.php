<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

    if(isset($_GET['seen']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['seen']=='all'){
            $q = "UPDATE `user_queries` SET `seen`=?";
            $values = [1];
            if(update($q,$values,'i')){
                alert('success','Marked all as read');
            }
            else{
                alert('error','Operation Failed!');
            }
        }
        else{
            $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
            $values = [1,$frm_data['seen']];
            if(update($q,$values,'ii')){
                alert('success','Marked as read');
            }
            else{
                alert('error','Operation Failed!');
            }
        }
    }
    if(isset($_GET['del']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['del']=='all'){
            $q = "DELETE FROM `user_queries`";
            if(mysqli_query($con,$q)){
                alert('success','All data deleted!');
            }
            else{
                alert('error','Operation Failed!');
            }
        }
        else{
            $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
            $values = [$frm_data['del']];
            if(delete($q,$values,'i')){
                alert('success','Data deleted!');
            }
            else{
                alert('error','Operation Failed!');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Features & Facilities</title>
    <?php require('inc/links.php'); ?>
    <style>
        #dashboard-menu{
            position: fixed;
            height: 100%;
            z-index: 11;
        }
        .custom-alert{
            position: fixed;
            top: 130px;
            right: 25px;
        }
        @media screen and (max-width: 991px){
            #dashboard-menu{
                height: auto;
                width: 100%;
            }
            #main-content{
                margin-top:60px;
            }
        }
    </style>

</head>
<body class = "bg-dw">
    
   <?php include('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Features & Facilities</h3>

                <!-- General Settings Form-->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                    <!-- Features Setting -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Management Team</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s" >
                            <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>
                    
                    <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                                <tr class="table-success">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" width="20%">Subject</th>
                                    <th scope="col" width="20%">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                $data = mysqli_query($con,$q);
                                $i = 1;

                                while($row = mysqli_fetch_assoc($data))
                                {
                                    $seen='';
                                    if($row['seen']!=1){
                                        $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'> Mark as read </a> <br>";
                                    }
                                    $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'> Delete </a>";
                                    echo<<<query
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[message]</td>
                                            <td>$row[date]</td>
                                            <td>$seen</td>
                                        </tr>
                                    query;
                                    $i++;
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Feature Modal -->
    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="feature_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Feature</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="feature_name" class="form-control shadow-none" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset"  class="btn btn-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn custom-bg text-white">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php echo $_SERVER['DOCUMENT_ROOT'] ?> 

    <?php require('inc/scripts.php'); ?> 

    <script>
        let feature_s_form = document.getElementById('feature_s_form');

        feature_s_form.addEevntListener('submit',function(e){
            e.preventDefault();
            add_feature();
       }); 

       function add_feature()
        {
            let data = new FormData();
            data.append('name',feature_s_form.elements['feature_name'].value);
            data.append('add_feature','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/feature_facilities_crud.php",true);
            
            xhr.onload = function(){
                var myModal = document.getElementById('feature-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success','New Feature Added!');  
                    feature_s_form.elements['feature_name'].value='';
                //    get_members();
                }
                else{
                    alert('error','Image upload failed!');
                }
            }
            xhr.send(data_str);
        }
    </script>
    
</body>
</html>