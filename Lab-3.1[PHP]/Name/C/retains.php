<?php
    $name = '';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo 'Name is '. $name;
    }
?>

<html>
<head>
    
    <title>retains</title>
</head>
<body>
<fieldset>
        <legend><b>NAME</b></legend>
        
        <form action="" method="post">
            <input type="text" value="<?php echo $name ?>" name="name"> <br>
            <hr>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>
