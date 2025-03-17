<?php
include_once ('conexao.php');
  $sexo = $_POST['sexo'];
  $idade = $_POST['idade'];
  $bairro = $_POST['bairro'];
  $instrucao = $_POST['instrucao'];
  $profissao = $_POST['profissao'];
  $doenca = $_POST['doenca'];
  $tipodoenca1 = $_POST['tipodoenca1'];
  $tipodoenca2 = $_POST['tipodoenca2'];
  $tipodoenca3 = $_POST['tipodoenca3'];
  $tipodoenca4 = $_POST['tipodoenca4'];
  $estabelecimento = $_POST['estabelecimento'];
  $tipoest = $_POST['tipoest'];
  $epis = $_POST['epis']; 
  $sintomas = $_POST['sintomas'];
  $data1 = $_POST['data1']; 
  $teste = $_POST['teste'];
  $data2 = $_POST['data2']; 
  $tipotest = $_POST['tipotest'];
  $resultado = $_POST['resultado']; 
  

 //$criptografia = MD5 ($senha);
 
 //if($login == "" || $login == null) {
	 //echo "<script language='javascript' type='text/javascript'>
		//alert('O campo login deve ser preenchido!');
		//window.location.href='pesquisa.php';</script>";
		//die();
 //}else{
	 $inserir = "INSERT INTO pesquisa (sexo, idade, bairro, instrucao, profissao, 
     doenca, tipodoenca1,  tipodoenca2,  tipodoenca3,  tipodoenca4, estabelecimento, tipoest, epis, sintomas, data1, teste, data2, tipotest, resultado)
	 VALUES ('$sexo', '$idade', '$bairro', '$instrucao', '$profissao', 
     '$doenca', '$tipodoenca1', '$tipodoenca2', '$tipodoenca3', '$tipodoenca4','$estabelecimento', '$tipoest', '$epis', '$sintomas', '$data1', '$teste', 
     '$data2', '$tipotest', '$resultado')";
$executar = mysqli_query ($conn, $inserir);
if ($executar){	 
	 echo "<script language='javascript' type='text/javascript'>
		alert('Pesquisa enviada com sucesso!');
		window.location.href='../index.php';</script>";
  }else{
    echo "<script language='javascript' type='text/javascript'>
		alert('Não foi possível enviar a pesquisa');
		window.location.href='pesquisa.php';</script>";
      }	
    
 	 
?>