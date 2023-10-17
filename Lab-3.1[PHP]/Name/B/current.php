<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo 'Name is '. $name;
    }
?>

<html>
<head>
 
    <title>Current</title>
</head>
<body>
<fieldset>
        <legend><b>NAME</b></legend>
        
        <form action="" method="post">
            <input type="text"  name="name"> <br>
            <hr>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>