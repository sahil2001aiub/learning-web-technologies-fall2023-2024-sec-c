<?php
   if(isset($_POST['submit'])){
        $gender = $_POST['gender'];
        echo "your gender is " . $gender;
   }
?>

<html>
<head> 
    <title>Gender</title>
</head>
<body>
<form action="" method="post">
        <fieldset>
            <legend><b>Gender</b></legend>
            <input type="radio" name="gender" id="" value="Male"> Male
            <input type="radio" name="gender" id="" value="Female"> Female
            <input type="radio" name="gender" id="" value="Other"> Other
        </fieldset>
        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>
