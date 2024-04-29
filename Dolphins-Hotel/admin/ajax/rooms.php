<?php

    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['add_room']))
    { 

        $frm_data = filteration($_POST);
        $flag = 0;

        $q1 = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
        $values = [$frm_data['name'],$frm_data['area'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children'],$frm_data['desc']];
        
        if (insert($q1,$values,'siiiiis')){
            $flag= 1;
        }

        $room_id = mysqli_insert_id($con);

        if($flag){
            echo 1;
        }
        else{
            echo 0;
        }
    }

    if(isset($_POST['get_all_rooms']))
    {
        $res = selectAll('rooms');
        $i = 1;

        $data = "";

        while($row = mysqli_fetch_assoc($res))
        {

            if($row['status']==1){
                $status = "<button onclick='toggle_status($row[id], 0)' class='btn btn-secondary btn-sm shadow-none'>active</button>";
            }
            else{
                $status = "<button onclick='toggle_status($row[id], 1)' class='btn btn-warning btn-sm shadow-none'>inactive</button>";
            }

            $data.= "
                <tr class='align-middle'>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>$row[area] sq. ft.</td>
                    <td>
                        <span class='badge rounded-pill bg-light text-dark'>
                            Adult: $row[adult]
                        </span><br>
                        <span class='badge rounded-pill bg-light text-dark'>
                            Chidren: $row[children]
                        </span>
                    </td>
                    <td>$row[price]</td>
                    <td>$row[quantity]</td>
                    <td>$status</td>
                    <td>
                        <button type='button' onclick=\"room_images($row[id],'$row[name]')\" class='btn btn-info btn-sm shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#room-images'>
                            <i class='bi bi-images'></i>
                        </button>
                    </td>
                </tr>
            ";
            $i++;
        }
        echo $data;
    }

    if(isset($_POST['get_room']))
    {
        $frm_data = filteration($_POST);

        $res1 = select("SELECT * FROM `rooms` WHERE `id`=?", [$frm_data['get_room']],'i');

        $roomdata = mysqli_fetch_assoc($res1);
        
        $data =  ["roomdata" => $roomdata];

        $data = json_encode($data);

        echo $data;
    }

    if(isset($_POST['toggle_status']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `rooms` SET `status`=? WHERE `id`=?";
        $v = [$frm_data['value'],$frm_data['toggle_status']];

       if(update($q,$v,'ii')){
         echo 1;
       }
       else{
        echo 0;
       }
    }

    if(isset($_POST['add_image']))
    {
        $frm_data = filteration($_POST);

        $img_r = uploadImage($_FILES['image'],ROOMS_FOLDER);

        if($img_r == 'inv_img'){
            echo $img_r;
        }
        else if($img_r == 'inv_size'){
            echo $img_r;
        }
        else if($img_r == 'upd_failed'){
            echo $img_r;
        }
        else{
            $q = "INSERT INTO `room_images` (`room_id`, `image`) VALUES (?,?)";
            $values = [$frm_data['room_id'],$img_r];
            $res1 = insert($q,$values,'is');
            echo $res;
        }
    }

    if(isset($_POST['get_room_images']))
    {
        $frm_data = filteration($_POST);
        $res = select("SELECT * FROM `room_images` WHERE `room_id`=?",[$frm_data['get_room_images']],'i');

        $path = ROOMS_IMG_PATH;

        while($row = mysqli_fetch_assoc($res))
        {
            echo <<< data
                <tr class='align-middle'>
                    <td><img src='$path$row[image]' class='img-fluid'></td>
                    <td>thumb</td>
                    <td>
                        <button onclick='rem_image($row[sr_no],$row[room_id])' class='btn btn-danger btn-sm shadow-none'>
                            <i class='bi bi-trash'></i>
                        </button>
                    </td>
                </tr>
            data;
        }
    }
    
    if(isset($_POST['rem_image']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['image_id'],$frm_data['room_id']];

        $pre_q = "SELECT * FROM `room_images` WHERE `sr_no`=? AND `room_id`=?";
        $res = select($pre_q, $values,"ii");
        $img = mysqli_fetch_assoc($res);

        if(deleteImage($img['image'],ROOMS_FOLDER)){
            $q = "DELETE FROM `room_images` WHERE `sr_no`=? AND `room_id`=?";
            $res = delete($q,$values,"ii");
            echo $res;
        }
        else{
            echo 0;
        }
    }
?>