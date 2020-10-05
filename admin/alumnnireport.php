<?php
require('fpdf.php');

// $db = new PDO('mysql:host=localhost; dbname=alumnidigitalplatform','root', '') ;
$db = new mysqli('localhost', 'root', '', 'alumnidigitalplatform');

class myPDF extends FPDF{

    function header(){
        $this->SetFont('Arial','B',24);
        $this->Cell(276,5,'Alumni Record',0,0,'C');
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
        $this->Cell(27,10,'University ID',1,0,'C');
        $this->Cell(28,10,'Name',1,0,'C');
        $this->Cell(42,10,'Email',1,0,'C');
        $this->Cell(43,10,'Address',1,0,'C');
        $this->Cell(25,10,'Department',1,0,'C');
        $this->Cell(23,10,'Batch',1,0,'C');
        
        $this->Cell(26,10,'Passing Year',1,0,'C');
        $this->Cell(31,10,'Company Name',1,0,'C');
        $this->Cell(33,10,'Job TItle',1,0,'C');
        // $this->Cell(30,10,'Photo',1,0,'C');
        $this->Ln();
    }
    
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt=$db->query('SELECT users.*, departments.name as department_name, `batches`.name as batch_name FROM `users` 
                        LEFT JOIN departments ON users.dept_id=departments.id 
                        LEFT JOIN `batches` ON users.batch_id=`batches`.id 
                        ORDER BY id DESC');
        
        while($user = $stmt->fetch_assoc())

        {
            $this->Cell(27,10,$user['username'],1,0,'C');
            $this->Cell(28,10,$user['name'],1,0,'C');
            $this->Cell(42,10,$user['email'],1,0,'C');
            $this->Cell(43,10,$user['address'],1,0,'C');
            $this->Cell(25,10,$user['department_name'],1,0,'C');
            $this->Cell(23,10,$user['batch_name'],1,0,'C');
            
            $this->Cell(26,10,$user['passingyear'],1,0,'C');
            $this->Cell(31,10,$user['cname'],1,0,'C');
            $this->Cell(33,10,$user['jposition'],1,0,'C');
            // $this->Cell(30,10,$user['photo'],1,0,'C');
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