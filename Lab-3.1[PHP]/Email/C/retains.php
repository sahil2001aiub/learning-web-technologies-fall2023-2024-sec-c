<?php
    $email = '';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        echo "your email is " . $email;
    }
?>


<html>
<head>
    
    <title>Retains</title>
</head>
<body>
<fieldset>
        <legend><b>EMAIL</b></legend>
        
        <form action="" method="post">
            <input type="text" name="email" value="<?php echo $email ?>"> 
            <input type="submit"  value="i" title="hint: example@example.com">
            <br>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>