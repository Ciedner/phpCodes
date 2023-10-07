<DOCTYPE html>
    <head>Ciedner Mabale</head>
    <body>
<?
    $year = 2001;
    $day = 25;
    $month = 07
    $diff = "";

    echo $month . "/" $day . "/" $year;

    if ($day % 2 == 0){
        echo "Even";
    }
    else:
        echo "Odd";
    endif;
?>
</body>
</html>