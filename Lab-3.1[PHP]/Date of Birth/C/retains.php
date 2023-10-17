<?php
    $date = $mnth = $year = '';
    if(isset($_POST['submit'])){
        $date = $_POST['date'];
        $mnth = $_POST['month'];
        $year = $_POST['year'];
        echo "Date: {$date}/{$mnth}/{$year}";
    }
?>


<html>
<head>
   
    <title>Date of Birth</title>
</head>
<body>
<fieldset>
        <form action="" method="post">
            <legend><b>Date of Birth</b></legend>
            &nbsp; dd &nbsp; &nbsp; &nbsp; &nbsp; mm   &nbsp; &nbsp; &nbsp; yyyy <br>
            <input type="text" name="date" value="<?php echo $date ?>" id="" size="1"> /
            <input type="text" name="month" value="<?php echo $mnth ?>" id="" size="1"> /
            <input type="text" name="year" value="<?php echo $year ?>" id="" size="1">
            <hr>
            <input type="submit" value="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>
