<?php
    // Verification du post 
    if(filter_has_var(INPUT_POST,'data')){
        echo 'Data trouvé';
    }else{ 
        echo 'Data non trouvé';
    }
    
    // Regular expression Email
    if(filter_has_var(INPUT_POST,'data')){        
        $email = $_POST['data'];

        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
            echo 'email est valide';            
        }   else 'email non valide';
    }



?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>