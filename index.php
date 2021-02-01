        <html>
        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
        <form method="post">
        <div class=container>
        <input type="text" name="value">
        <button type="submit" >Submit</button>
        <p><span id=result></span></p>
        </div>
        </form>
        </body>
        </html>
<?php

$val=$_POST["value"];

if(isset($val)){
for($x=1;$x<=$val;$x++){

    for($y=1;$y<=$x;$y++){

        echo "*";

    }
    echo "<br>";
}
}
?>
