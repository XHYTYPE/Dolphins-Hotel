let add_room_form = document.getElementById('add_room_form');

add_room_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_room();
});

function add_room()
{
    let data = new FormData();
    data.append('add_room','');
    data.append('name',add_room_form.elements['name'].value);
    data.append('area',add_room_form.elements['area'].value);
    data.append('price',add_room_form.elements['price'].value);
    data.append('quantity',add_room_form.elements['quantity'].value);
    data.append('adult',add_room_form.elements['adult'].value);
    data.append('children',add_room_form.elements['children'].value);
    data.append('desc',add_room_form.elements['desc'].value);

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);
    
    xhr.onload = function(){
        var myModal = document.getElementById('add-room');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 1)
        {
            alert('success','New Room Added!');  
            add_room_form.reset();
            get_all_rooms();
        }
        else{
            alert('error','Server Down!');
        }
    }
    xhr.send(data);
}

function get_all_rooms()
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
        document.getElementById('room-data').innerHTML = this.responseText;
    }
    xhr.send('get_all_rooms');
}

function toggle_status(id,val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
        if(this.responseText==1){
            alert('success','Status toggled');
            get_all_rooms();
        }
        else{
            alert('error','Server Down');
        }
    }
    xhr.send('toggle_status='+id+'&value='+val);
}

let add_image_form = document.getElementById('add_image_form');

add_image_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_image();
});

function add_image()
{
    let data = new FormData();
    data.append('image',add_image_form.elements['image'].files[0]);
    data.append('room_id',add_image_form.elements['room_id'].value);
    data.append('add_image','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);

    xhr.onload = function()
    {
        if(this.responseText == 'inv_img'){
            alert('error','Only JPG, WEBP or PNG images are allowed!','image-alert');
        }
        else if(this.responseText == 'inv_size'){
            alert('error','Image should be less than 2mb!','image-alert');
        }
        else if(this.responseText == 'upd_failed'){
            alert('error','Image upload failed Server Down!','image-alert');
        }
        else{
            alert('success','New Image Added!','image-alert');
            room_images(add_image_form.elements['room_id'].value,document.querySelector("#room-images .modal-title").innerText);
            add_image_form.reset();
        }
    }
    xhr.send(data);
}

function room_images(id,rname)
{
    document.querySelector("#room-images .modal-title").innerText = rname;
    add_image_form.elements['room_id'].value = id;
    add_image_form.elements['image'].value = '';

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
        document.getElementById('room-image-data').innerHTML= this.responseText;
    }
    xhr.send('get_room_images='+id);
}

function rem_image(img_id,room_id)
{
    let data = new FormData();
    data.append('image_id',img_id);
    data.append('room_id',room_id);
    data.append('rem_image','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);

    xhr.onload = function()
    {
        if(this.responseText == 1 ){
            alert('success','Image Removed!','image-alert');
            room_images(room_id,document.querySelector("#room-images .modal-title").innerText);
        }
        else{
            alert('error','Image Remove Failed!','image-alert');
        }
    }
    xhr.send(data);
}

function thumb_image(img_id,room_id)
{
    let data = new FormData();
    data.append('image_id',img_id);
    data.append('room_id',room_id);
    data.append('thumb_image','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);

    xhr.onload = function()
    {
        if(this.responseText == 1 ){
            alert('success','Image Thumbnail Changed!','image-alert');
            room_images(room_id,document.querySelector("#room-images .modal-title").innerText);
        }
        else{
            alert('error','Thumbnail Change Failed!','image-alert');
        }
    }
    xhr.send(data);
}

function remove_room(room_id)
{
    if(confirm("Are you sure, you want to delete this room?"))
    {
        let data = new FormData();
        data.append('room_id',room_id);
        data.append('remove_room','');
        
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/rooms.php",true);

        xhr.onload = function()
        {
            if(this.responseText == 1 ){
                alert('success','Room Removed!');
                get_all_rooms();
            }
            else{
                alert('error','Room Removal Failed!');
            }
        }
        xhr.send(data);
    }
}

window.onload = function(){
    get_all_rooms();
}