<?php
require("fpdf/fpdf.php");
include('security.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "e_sms");

if (isset($_GET['reg_no'])) {
    $reg_no = mysqli_real_escape_string($connection, $_GET['reg_no']);


    $query = "select * from student WHERE reg_no='$reg_no'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $reg_no = mysqli_fetch_array($query_run);
        $reg = $reg_no['reg_no'];
        $pdf = new FPDF();
        //Checking C
        $session = substr($reg_no['reg_no'], 1, 2);
        $start = intval($session + 2000);

        if ($reg_no['ad_type'] == "Jexpo") {
            $add = 3;
            $end = intval($start + $add);
        } elseif ($reg_no['ad_type'] == "Voclet") {
            $add = 2;
            $end = intval($start + $add);
        }

        //checking branch
        if ($reg_no['branch'] == "CST") {
            $branch = "Diploma  in  Computer  Science  &  Technology";
        } elseif ($reg_no['branch'] == "ETC") {
            $branch = "Diploma  in  Electronics  and  Telecommunication";
        } elseif ($reg_no['branch'] == "EE") {
            $branch = "Diploma  in  Electrical  Engineering";
        }
        //checking Gender
        if ($reg_no['gender'] == "Male") {
            $st_titel = "Sri.";
            $st = "he";
            $st1 = "his";
            $titel = "Son";
        } elseif ($reg_no['gender'] == "Female") {
            $st_titel = "Smt.";
            $st = "she";
            $st1 = "her";
            $titel = "Daughter";
        }
        $fa_titel = "Sri. ";
        $dob = $reg_no['dob'];
        $dob=date('d-m-Y', strtotime($dob));

        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-Y ');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', "18");
        $pdf->Image('photos/ITA_LOGO .jpg', 25, 8, 25, 25);
        $pdf->Cell(175, 10, 'ITAHAR GOVERNMENT POLYTECHNIC', 0, 1, 'R');
        $pdf->SetFont('Times', '', "14");
        $pdf->Cell(130, 3, 'Porsha, Churamon Road', 0, 1, 'R');
        $pdf->SetFont('Times', '', "14");
        $pdf->Cell(135, 7, 'Itahar, Uttar Dinajpur - 733128', 0, 1, 'R');
        $pdf->SetFont("Times", "", "14");
        $pdf->Cell(142, 3, 'E-mail: ita_govtpoly@rediffmail.com', 0, 1, 'R');
        $pdf->Line(15, 39, 200, 39);
        $pdf->Line(15, 39, 200, 39);

        $pdf->SetFont("Times", "B", "17");
        $pdf->Cell(0, 70, 'CERTIFICATE', 0, 1, 'C');

        //For Printing Details In the cirtificate

        $pdf->SetFont("Times", "", "15");
        $pdf->Cell(110, 0, 'This  is  to  certify  that    ' . $st_titel . ' ', 0, 0, 'R');
        $pdf->SetFont("Times", "B", "15");
        $pdf->Cell(0, 0, $reg_no['st_name'], 0, 1, 'L');

        $pdf->SetFont("Times", "", "15");
        $pdf->Cell(50, 18, $titel . '  of   ' . $fa_titel, 0, 0, 'R');
        $pdf->SetFont("Times", "B", "15");
        $pdf->Cell(0, 18, $reg_no['fathers_name'], 0, 0, 'L');
        $pdf->SetFont("Times", "", "15");
        $pdf->Cell(-5, 18, 'having Registration No. ', 0, 1, 'R');



        $pdf->SetFont("Times", "B", "15");
        $pdf->Cell(0, 0, '   ' . $reg_no['reg_no'] . '   of     ' . $branch . ' . ', 0, 0, 'L');


        $pdf->SetFont("Times", "", "15");
        $pdf->Cell(-7, 0, '  As  per ', 0, 1, 'R');
        $pdf->SetFont("Times", "", "15");
        $pdf->Cell(0, 17, '   our  official  record ' . $st1 . '  Date  of  Birth  is', 0, 0, 'L');
        $pdf->SetFont("Times", "B", "14");
        $pdf->Cell(-67, 17, $dob . ' .', 0, 0, 'R');



        $pdf->SetFont("Times", "", "15");
        $pdf->Cell(-8, 17, ucfirst($st) . "  has  passed  " . $add . "  years ", 0, 1, 'L');
        $pdf->Cell(0, 0, '   Diploma  Course  from  our  Institute  In  Academic session', 0, 0, 'L');
        $pdf->SetFont("Times", "B", "15");
        $pdf->Cell(-22, 0, $start . ' - ' . $end . ' .', 0, 1, 'R');

        $pdf->SetFont("Times", "", "14");
        $pdf->Cell(-120, 130, '     Date :  ' . $date, 0, 0, 'L');

        $pdf->SetFont("Times", "", "14");
        $pdf->Cell(0, 132, ' Principal               ', 0, 0, 'R');


        $pdf->output('Cirtificate-'.$reg_no['reg_no'].'.pdf','D');
    }
}
