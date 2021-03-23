<?php

$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$object = $_POST['user_object'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];

$data = array_map('trim', $_POST);
$errors = [];

if ($_POST)
{
    if (empty($data['user_firstname']))
    {
        $errors['firstname1'] = "You need to write your firstname <br/>";
        echo $errors['firstname1'];
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/", $data['user_firstname']))
    {
        $errors['firstname2'] = "Only letters and white space allowed <br/>";
        echo $errors['firstname2'];
    }
    if (empty($data['user_lastname']))
    {
        $errors['lastname1'] = "You need to write your lastname <br/>";
        echo $errors['lastname1'];
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/", $data['user_lastname']))
    {
        $errors['lastname2'] = "Only letters and white space allowed <br/>";
        echo $errors['lastname2'];
    }
    if (empty($data['user_email']))
    {
        $errors['email1'] = "You need to write your email <br/>";
        echo $errors['email1'];
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email2'] = "Your email address is not in the right format <br/>";
    }  
    if (empty($data['user_phone']))
    {
        $errors['phone1'] = "You need to write your phone number <br/>";
        echo $errors['phone1'];
    }
    if (strlen($data['user_phone']) < 10)
    {
        $errors['phone2'] = "Your phone number have to contain atleast 10 number <br/>";
        echo $errors['phone2'];
    }
    if (!preg_match("/^[0-9]*$/", $data['user_phone']))
    {
        $errors['phone3'] = "You can't write a non-numeral caracters <br/>";
        echo $errors['phone3'];
    }
    if (empty($data['user_message']))
    {
        $errors['message1'] = "You need to write your message <br/>";
        echo $errors['message1'];
    }
    else
    {
        echo nl2br ("Merci $firstname $lastname de nous avoir contacté à propose de $object. 
        Un de nos conseiller vous contactera soit à l'adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : 
        $message");
    }
}

?>
