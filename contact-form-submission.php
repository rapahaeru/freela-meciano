<?php   
    // check for form submission - if it doesn't exist then send back to contact form  
    if (!isset($_POST['save']) || $_POST['save'] != 'contato') { 
        header('Location: contato.php'); exit; 
    } 
         
    // get the posted data 
    $name           = $_POST['name']; 
    $email_address  = $_POST['mail']; 
    //$subject        = $_POST['contact_subject'];
    $message        = $_POST['message']; 
         
    // check that a name was entered 
    if (empty($name)) 
        $error = 'Você precisa inserir seu nome.'; 
    // check that an email address was entered 
    elseif (empty($email_address))  
        $error = 'Você precisa inserir seu e-mail.'; 
    // check for a valid email address 
    elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address)) 
        $error = 'Você precisa inserir um e-mail válido.'; 
    // check that a message was entered 
    elseif (empty($message)) 
        $error = 'Você precisa inserir uma mensagem.'; 
             
    // check if an error was found - if there was, send the user back to the form 
    if (isset($error)) { 
        header('Location: contato.php?e='.urlencode($error)); exit; 
    } 
             
    // write the email content 
    $email_content = "Nome: $name\n"; 
    $email_content .= "E-mail: $email_address\n"; 
    $email_content .= "Assunto: $subject\n";
    $email_content .= "Mensagem:\n\n$message"; 
         
    // send the email 
    mail ("rapahaeru@gmail.com", "HelpMyMac : Nova mensagem", utf8_decode($email_content)); 
    //mail ("rapahaeru@gmail.com", "Site Itapura : Nova mensagem", utf8_decode($email_content)); 
         
    // send the user back to the form 
    header('Location: contato.php?s='.urlencode('Obrigado pelo seu contato!')); exit;  
      
?>