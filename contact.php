<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PSLMW - contact</title>
<?php include ('include/head.php'); ?>

</head>

<body>
<?php include ('include/header.php'); ?>
<div id="contact-cont" class="clearfix">
	
    <div class="title-section">
        <div>
            <span>IF YOU HAVE ANY QUESTION </span>
        </div>
    <h1>CONTACT US</h1>
        <div>
            <span>PLEASE</span>
        </div>
    </div>
    <div class="address">
        <p>
            Dublin (Ireland)<br>
            info@porsilasmoscasweb.com <br>
            +353 (85) 212 3168<br>
        </p>
        <div class="contactSocial">
        	<ul>
            	<li><a class="invia_cont" href="http://www.linkedin.com/in/pslmw" target="linkedin">in</a></li>
                <li><a class="invia_cont" href="http://www.behance.net/PSLMW" target="behance">Be</a></li>
                <li><a class="invia_cont" href="http://www.domestika.org/portfolios/pslmw" target="domestica">Dom</a></li>
                <li><a class="invia_cont" href="mailto:'info@porsilasmoscasweb.com'" target="gmail">M</a></li>
            </ul>
        </div>
    </div>
    <div class="title-section">
        <div>
            <span>IF YOU FEEL MORE COMFORTABLE</span>
        </div>
    <h1>WRITE US</h1>
        <div>
            <span>WE WILL BE HAPPY ANSWER TO YOU</span>
        </div>
    </div>


<?php
if(isset($_POST['boton'])){
    if($_POST['nom'] == ''){
        $error1 = '<span class="error">Insert name</span>';
    }else if($_POST['Nempresa'] == ''){
        $error2 = '<span class="error">Insert company</span>';
    }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
        $error3 = '<span class="error">Insert E-mail</span>';
    }
    else if($_POST['assumpte'] == ''){
        $error4 = '<span class="error">What is your idea</span>';
    }else{			
        $assumpte = "<b>" . "NAME: " . "</b>" . $_POST['nom'] . "<br/>";
        $assumpte .= "<b>" . "COMPANY: " . "</b>" . $_POST['Nempresa'] . "<br/>";
        $assumpte .= "<b>" . "E-MAIL: " . "</b>" . $_POST['email'] . "<br/>";
        $assumpte .= "<b>" . "WHAT IS YOUR IDEA: " . "</b>" . $_POST['assumpte'] . "<br/>"; //Cuerpo del mensaje
        
        $dest = "info@porsilasmoscasweb.com"; //Email de destino
		$email = $_POST['email'];
        $nom = $_POST['nom']; //Asunto
        
        //Cabeceras del correo
        $headers = "From: $nom $email\r\n"; //Quien envia?
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
        
        if(mail($dest,$nom,$assumpte,$headers)){
            $result = '<div class="result_ok">Send Message</div>';	
            // si el envio fue exitoso reseteamos lo que el usuario escribio:
            $_POST['nom'] = '';
            $_POST['Nempresa'] = '';
            $_POST['email'] = '';
            $_POST['assumpte'] = '';
        }else{
            $result = '<div class="result_fail">Send Message Error </div>';
        }
    }
}
?>
    
    <div id="divInput" class="formContact clearfix">
        <form id="RegisterUserForm" autocomplete="on" enctype="multipart/form-data"  method='POST' action=''>
            <p><label>Name:</label><input type='text' class='text' name='nom' value='<?php echo $_POST['nom']; ?>'><?php echo $error1 ?></p>
            <p><label>Company:</label><input type='text' class='text' name='Nempresa' value='<?php echo $_POST['Nempresa']; ?>'><?php echo $error2 ?></p>
            <p><label>Email:</label><input type='text' class='text' name='email' value='<?php echo $_POST['email']; ?>'><?php echo $error3 ?></p>
            <p><label class="textarea">WHAT IS YOUR IDEA:</label><textarea class='text' name='assumpte'><?php echo $_POST['assumpte']; ?></textarea><?php echo $error4 ?></p>
            <div class="invia_cont">
            <p><input type='submit' value='Send Request' class='invia' name='boton'></p>
            </div>
            <?php echo $result; ?>
        </form>   

	</div>
    <!-- Form -->
    
</div>
<!-- End Container --> 
</body>

</body>
</html>