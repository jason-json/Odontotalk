<?php
  // SEND MAIL WITH FORM INFORMATION
  // MAIL SENDER =  mail() SMTP 
  // VALUES TYPES = string (ALL VALUES ARE REQUIRED)
  
  
  $nombre = "";// nombre completo
  $especialidad = "";
  $telefono = "";
  $celular = "";
  $email = "";
  $deposito = "";// numero de deposito
  $lugar_trabajo = "";
  $codigo_agremiado = "";//Código de agremiado profesional
  $cedula = "";
  $nacionalidad = "";
  $como_conoce = "";//¿Cómo conoce de Odontotalk?
  $porque_asistir = "";//¿Por qué desea asistir?

  $nombre = $_POST['nombre'];// nombre completo
  $especialidad = $_POST['especialidad'];
  $telefono = $_POST['telefono'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $deposito = $_POST['deposito'];// numero de deposito
  $lugar_trabajo = $_POST['lugar_trabajo'];
  $codigo_agremiado = $_POST['codigo_agremiado'];//Código de agremiado profesional
  $cedula = $_POST['cedula'];
  $nacionalidad = $_POST['nacionalidad'];
  $como_conoce = $_POST['como_conoce'];//¿Cómo conoce de Odontotalk?
  $porque_asistir = $_POST['porque_asistir'];//¿Por qué desea asistir?

  //MAIL SETTINGS
  $headers = "From: inscripciones@odontotalk.com" . "\r\n";
  // $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
  $headers .= "Bcc: jason@miweb.cr,yarelis@miweb.cr\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  // $to = "jason@miweb.cr";
  $to = "inscripciones@odontotalk.com";
  $subject = "Odontotalk formulario de inscripción";
  $message = '';

  if ($nombre != "" && $especialidad != "" && $telefono != "" && 
      $celular != "" && $email != "" && $deposito != "" && 
      $lugar_trabajo != "" &&  $codigo_agremiado != "" && $cedula != "" && 
      $nacionalidad != "" && $como_conoce != "" && $porque_asistir != ""
  ) {

    //html mail table
    $message .= '<html>';
    $message .= '<table  width="60%"  height="20%" align="center" style="border-style:solid; border-width:1px; border-color:#b1b5bc;" cellpadding="2" cellspacing=”0″  >';
    $message .= '<tr align="center">';
    $message .= '<th bgcolor="#025862" aling="center" width:"100%" colspan="2" style="font-size:20px"><font color="#fff">Odontotalk formulario de inscripción</font></th>';
    $message .= '</tr>';            
    $message .= '<tr height="10%" style="font-size:18px;"  bgcolor="#f2f2f2">';
    $message .= '<td><strong>Nombre:</strong></td>';
    $message .= '<td>'.$nombre.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#ddd">';
    $message .= '<td><strong>Especialidad:</strong></td>';
    $message .= '<td>'.$especialidad.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#f2f2f2">';
    $message .= '<td><strong>Telefóno:</strong></td>';
    $message .= '<td>'.$telefono.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#ddd">';
    $message .= '<td><strong>Celular:</strong></td>';
    $message .= '<td>'.$celular.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#f2f2f2">';
    $message .= '<td><strong>E-mail:</strong></td>';
    $message .= '<td>'.$email.'</td>';
    $message .=  '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#ddd">';
    $message .= '<td><strong>Número de Depósito:</strong></td>';
    $message .= '<td>'.$deposito.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#f2f2f2">';
    $message .= '<td><strong>Lugar de trabajo (clínica privada ó CCSS):</strong></td>';
    $message .= '<td>'.$lugar_trabajo.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#ddd">';
    $message .= '<td><strong>Código de agremiado profesional:</strong></td>';
    $message .= '<td>'.$codigo_agremiado.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#f2f2f2">';
    $message .= '<td><strong>Número de cédula:</strong></td>';
    $message .= '<td>'.$cedula.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#ddd">';
    $message .= '<td><strong>Nacionalidad:</strong></td>';
    $message .= '<td>'.$nacionalidad.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#f2f2f2">';
    $message .= '<td><strong>¿Cómo conoce de Odontotalk?</strong></td>';
    $message .= '<td>'.$como_conoce.'</td>';
    $message .= '</tr>';
    $message .= '<tr   style="font-size:18px;" bgcolor="#ddd">';
    $message .= '<td><strong>¿Por qué desea asistir?</strong></td>';
    $message .= '<td>'.$porque_asistir.'</td>';
    $message .= '</tr>';
    $message .= '</table>';
    $message .= '</html>';

  } else {
   $message = "No se ha podido recibir los datos.";
  }
  
  if (mail($to,$subject,$message, $headers)) {
    header("Location: ../gracias.html");
    die();
  } else {
    header("Location: ../gracias.html");
    die();
  }
      

?>