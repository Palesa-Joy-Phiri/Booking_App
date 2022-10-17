if (isset($_POST['name'])) && (isset($_POST['surname'])) (isset($_POST['email'])) &&(isset($_POST['cid'])) &&(isset($_POST['cod'])) &&(isset($_POST['non'])) &&(isset($_POST['nog'])) &&(isset($_POST['hotel'])) {

function validate ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data
}

$name = validate($_POST['name']);
$surname = validate($_POST['surname']);
$email = validate($_POST['email']);
$cid = validate($_POST['cid']);
$cod = validate($_POST['cod']);
$non = validate($_POST['non']);
$hotel = validate($_POST['hotel']);

}else {
    header (
    exit ();
}   






<?php if(isset($_GET['error'])) { ?>
                    <p class= "error">
                        <?php
                        echo $_GET['error']:
                        ?>
                    </p>
        <?php   } ?>


        "location:booking.php");


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="../images/Number1_con.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../images/Number2_con.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../images/Number3_con.png" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="../images/Pool_house.png" class="d-block w-100" alt="...">
                </div>
                
            </div>
        </div>

