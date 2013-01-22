<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Envio de Correo Hacienda las  Marias</title>
		<link href="../css/style.css" rel="stylesheet">	

        
    </head>
    <body>
	 <div id="contenMail">
            
<?php
include("envio/class.phpmailer.php");
include("envio/class.smtp.php");

if (isset($_POST["nombre"])) {

$nombre= $_POST["nombre"];
$email=$_POST['email'];
$telefono= $_POST['telefono'];
$direccion=$_POST['direccion'];
$mensaje=$_POST["mensaje"];




$msg="


<section id='contenidoC' style='width:420px;padding-top:10px;'>
  <table border='0' width='400px' style='margin:0px auto;'>
    <tr>
      <td>
          <img src='http://imagineriaweb.com/oaguillon/campo_alegre/imagen/correo.jpg' style='margin:0px auto; display:block;'>
      </td>
    </tr>
    <tr>
      <td>
        <div id='correo'>      
          <div class='titulo'>Nombre:</div>
          <div class='contenido'>$nombre</div>
          <div class='titulo'>Correo:</div>
          <div class='contenido'>$email</div>
          <div class='titulo'>Telefono:</div>
          <div class='contenido'>$telefono</div>
          <div class='titulo'>Direccion:</div>
          <div class='contenido'>$direccion</div>
          <div class='titulo'>Mensaje:</div>
          <div class='contenidoText'>$mensaje</div>
        </div>
      </td>
    </tr>
  </table>
</section>


";





$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "campoalegresangil@gmail.com";
$mail->Password = "6203222ags";

$mail->From = "user@domain.com";
$mail->FromName = "Mi pagina web Hacienda las Marias";
$mail->Subject = "$nombre";
$mail->AltBody = "";
$mail->MsgHTML($msg);

$mail->AddAddress("renso.mayorga@hotmail.com", "Destinatario: Renso Mayorga Ballesteros");
$mail->IsHTML(true);

if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
	 ?>
  <div id="top">
  <h1>Mensaje enviado correctamente</h1>
  <b>Su mensaje es:</b>          
  </div>
  <?php
 
  
}


echo $msg;

?>


<br><bR>
<div align="center">
<a href='../index.html' style="color:#900; font-family:Arial, Helvetica, sans-serif; font-size:16px; text-decoration:none; font-weight:bold;">&lt;&lt; Ir atras </a>
</div>



  
   
        
        <?php }else {echo "ud esta entrabndo ilegalmente";}?>
        
 </div>        
    </body>
</html>
