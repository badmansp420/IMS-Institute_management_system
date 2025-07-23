<?php
include('security.php');
include('server.php');

if (isset($_GET['reg_no'])) {
    $reg_no = mysqli_real_escape_string($connection, $_GET['reg_no']);


    $query = "select * from student WHERE reg_no='$reg_no'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $reg_no = mysqli_fetch_array($query_run);

        header('content-type:image/jpeg');

        if ($reg_no['branch'] == "CST") {
            $branch = "Computer  Science  &  Technology";
        } elseif ($reg_no['branch'] == "ETC") {
            $branch = "Electronics  and  Telecommunication";
        } elseif ($reg_no['branch'] == "EE") {
            $branch = "Electrical  Engineering";
        }

        $font = "font/ARLRDBD.TTF";
        $photo = "Image Pasted Hear";
        $img = imagecreatefromjpeg("photos/ID_RAW.jpg");
        $red = imagecolorallocate($img, 255, 0, 0);
        $color = imagecolorallocate($img, 0, 0, 102);
        $white = imagecolorallocate($img, 255, 255, 255);
        $name = $reg_no['st_name'];
        
        $email = $reg_no['email'];
        $ph = $reg_no['ph_no'];
        $reg = $reg_no['reg_no'];
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-Y  h:i:s ');
        //$photo=$reg_no['st_image'] ;
        //$str = imagecreatefrompng("upload/" . $photo. ".png");
        $bg = "B+";
        $output = 'ID_CARD/' . $_GET['reg_no'] . "-" . $reg_no['branch']. '.jpg';

        imagettftext($img, 30, 0, 435, 260, $red, $font, $name);
        imagettftext($img, 22, 45, 55, 501, $color, $font, $photo);
        imagettftext($img, 28, 0, 545, 311, $color, $font, $reg);
        imagettftext($img, 24, 0, 410, 358, $color, $font, $branch);
        imagettftext($img, 28, 0, 400, 399, $color, $font, $email);
        imagettftext($img, 25, 0, 545, 448, $color, $font, $ph);
        imagettftext($img, 28, 0, 545, 495, $color, $font, $ph);
        imagettftext($img, 28, 0, 545, 540, $red, $font, $bg);
        //imagecopy($img, $str, 45, 250, 0, 0, 220, 278);
        imagettftext($img, 15, 0, 370, 628, $white, $font, $date);
        imagettftext($img, 10, 0, 370, 645, $white, $font, 'Printing Date & Time');

        imagejpeg($img, $output);
        header('Content-Description: File Transfer');
        header('Content-Type:application/image');
        header('Content-Disposition: attachment; filename="' . basename($output) . '"');
        header('Content-Length: ' . filesize($output));
        readfile($output,false);
        
    } 
}
