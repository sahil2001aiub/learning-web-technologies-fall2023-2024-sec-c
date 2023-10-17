<?php
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
            &nbsp; dd &nbsp; &nbsp; &nbsp; mm   &nbsp;yyyy <br>
            <input type="text" name="date" id="" size="1"> /
            <input type="text" name="month" id="" size="1"> /
            <input type="text" name="year" id="" size="1">
            <hr>
            <input type="submit" value="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>


