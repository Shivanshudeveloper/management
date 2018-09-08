<?php
    include_once 'dbh.inc.php';
    session_start();
    $table = $_SESSION['table_name'];
    $amount = $_SESSION['amount'];
    $u_id = $_SESSION['u_id'];
    $date = date("d/m/Y");
    $sql = "SELECT * FROM burgarhut_tb_price WHERE table_name='$table';";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if($resultChk < 1){
        echo "No Entry Matched!";
        exit();
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            $table_name = $row['table_name'];
            $price = $row['price'];
        }
    }
        //-----------------------------------------------
        //From here the INVOICE is getting generated
        //-----------------------------------------------
        //call the FPDF library
    require('fpdf181/fpdf.php');
        //A4 width : 219mm
        //default margin : 10mm each side
        //writable horizontal : 219-(10*2)=189mm
        //create pdf object
    $pdf = new FPDF('P', 'mm', 'A4');
        //add new page
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);
        //Cell(width , height , text , border , end line , [align] )
    $pdf->Cell(130, 5, 'BURGAR HUT', 0, 0);
    $pdf->Cell(59, 5, 'INVOICE', 0, 1);//end of line
        //set font to arial, regular, 12pt
    $pdf->SetFont('Arial', '', 12);
    
    $pdf->Cell(59, 5, '', 0, 1);//end of line
        //$pdf->Cell(130 ,5,'[City, Country, ZIP]',0,0);
    $pdf->Cell(12, 5, 'Date.', 0, 0);
    $pdf->Cell(30, 5, '' . $date . '', 0, 1);//end of line
    
    
        //$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
    
    
        //billing address
    $pdf->Cell(10, 5, 'Bill To:', 0, 1);//end of line
        //add dummy cell at beginning of each line for indentation

    $pdf->Cell(10, 5, 'Table No: ' . $table_name . '', 0, 1);
    
        //make a dummy empty cell as a vertical spacer
    $pdf->Cell(189, 10, '', 0, 1);//end of line
        //invoice contents
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(130, 5, 'Description', 1, 0);
    
    $pdf->Cell(34, 5, 'Amount', 1, 1);//end of line
    $pdf->SetFont('Arial', '', 12);
        //Numbers are right-aligned so we give 'R' after new line parameter
    $sql = "SELECT * FROM burgarhut_tb_menu WHERE u_id='$u_id';";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $price = $row['price'];
        $menu = $row['menu_item'];

        $pdf->Cell(130, 5, $menu, 1, 0);
        $pdf->Cell(34, 5, $price, 1, 1, 'R');//end of line
    }

    
    $pdf->Cell(101, 5, '', 0, 0);
    $pdf->Cell(25, 5, 'Subtotal Rs', 0, 0);
    $pdf->Cell(4, 5, '', 0, 0);
    $pdf->Cell(34, 5,$amount , 1, 1, 'R');//end of line
    //output the result
    $pdf->Output();


?>