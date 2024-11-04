<?php
session_start();
ob_start(); // Inicia o buffer de saída
include_once("../../model/Conexao.class.php");
include_once("../../model/Entity.class.php");
$Entity = new Entity();

$idLoggedUser = $_SESSION['id'];
$nameLoggedUser = $_SESSION['name'];

require('fpdf/fpdf.php'); // Certifique-se de ter a biblioteca FPDF instalada (composer require fpdf/fpdf)
//Vejam a documentação para montar e modificar layout diferente 
//http://www.fpdf.org/en/doc/index.php


$result = $Entity->listBets("bets", $idLoggedUser);

// Criação do PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Jogo: Monkey Money',0,1,'C');  // Título centralizado
$pdf->Cell(0,10, 'Nome do usuario:'.$nameLoggedUser,0,1, 'C');

// Cabeçalho formato de tabela (adapte para suas colunas)
//$pdf->SetFont('Arial','B',12);
//$pdf->Cell(40,10,'titulo',1,0,'C');
//$pdf->Cell(100,10,'descricao',1,0,'C');
//$pdf->Cell(50,10,'data',1,1,'C');  // 1 para borda, 1 para nova linha

// Dados da tabela
if (count($result) > 0) {
    foreach($result as $row)  {
        $bet_amount = mb_convert_encoding($row["bet_amount"], 'UTF-8'); 
        $result = mb_convert_encoding($row["result"], 'UTF-8'); 
        $bet_amount = mb_convert_encoding($row["bet_amount"], 'UTF-8');     
        
       
        $pdf->SetTextColor(175,45,63); //cor texto
        $pdf->SetDrawColor(75,145,163); //cor borda
      
        $pdf->Cell(0,10,$bet_amount,0,1,'C');  // Título centralizado
        $pdf->Cell(0,10,$result,1,0,'C'); //1 é a borda
        

        $pdf->Cell(0,10,"",1,1,'C');  // Pula linha
        $pdf->Cell(0,10,"",0,1,'C');  // Pula linha            
               
    }
} else {
    $pdf->Cell(0,10,'Nenhum resultado encontrado.',1,1,'C');
}

    // Gera o PDF (I: abre no navegador, D: força download, F: salva em arquivo)
    $pdf->Output('relatorio.pdf', 'I');
    ob_end_flush(); // Envia o buffer (incluindo o PDF)
?>