<?php
    $gender = '';
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
            <input type="radio" name="gender" id="" value="Male" <?php if($gender == 'Male') echo 'checked' ?>> Male
            <input type="radio" name="gender" id="" value="Female" <?php if($gender == 'Female') echo 'checked' ?>> Female
            <input type="radio" name="gender" id="" value="Other" <?php if($gender == 'Other') echo 'checked' ?>> Other
        </fieldset>
        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>
