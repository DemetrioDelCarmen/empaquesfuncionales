<?php
	if(isset($_POST['submit'])){
		$servicio=$_POST['servicio'];
		$nombreCliente=$_POST['nombreCliente'];
        $correoCliente=$_POST['correoCliente'];
        $telefonoCliente=$_POST['telefonoCliente'];
        $mensaje=$_POST['mensaje'];
        

		$to='desarrollalab@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Desde empaquesfuncionales.com';
		$message="Nombre :".$nombreCliente."\n"."Teléfono del cliente :".$telefonoCliente."\n"."Correo del cliente :".$correoCliente."\n"."Servicio de interés :".$servicio."\n"."Ha escrito lo siguiente :"."\n\n".$mensaje;
		$headers="De: ".$correoCliente;

		if(mail($to, $subject, $message, $headers)){

            echo'<script type="text/javascript">
    alert("Mensaje enviado correctamente, ¡Gracias!");
    window.location.href="index.html";
    </script>';
		}
		else{
			echo "Algo no funcionó correctamente, inténta de nuevo.";
		}
	}
?>