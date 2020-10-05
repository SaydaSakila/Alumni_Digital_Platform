<?php
require('fpdf.php');

// $db = new PDO('mysql:host=localhost; dbname=alumnidigitalplatform','root', '') ;
$db = new mysqli('localhost', 'root', '', 'alumnidigitalplatform');

class myPDF extends FPDF{
    function header(){
        $this->SetFont('Arial','B',24);
        $this->Cell(276,5,'Event Record',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'International University of Business Agriculture and Technology',0,0,'C');
        $this->Ln(20);
    }
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(55,10,'Event Name',1,0,'C');
        $this->Cell(75,10,'Event Details',1,0,'C');
        $this->Cell(42,10,'Event Date',1,0,'C');
        $this->Cell(40,10,'Department',1,0,'C');
        $this->Cell(50,10,'Batch',1,0,'C');
        $this->Cell(15,10,'Status',1,0,'C');    
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt=$db->query('select * from events');
        
        while($user=$stmt->fetch_assoc())

        {
            $this->Cell(55,10,$user['name'],1,0,'C');
            $this->Cell(75,10,$user['content'],1,0,'C');
            $this->Cell(42,10,$user['date'],1,0,'C');
            $this->Cell(40,10,$user['dept_id'],1,0,'C');
            $this->Cell(50,10,$user['batch_id'],1,0,'C');
            $this->Cell(15,10,$user['status'],1,0,'C');
            $this->Ln();
        }
    }
}


$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>