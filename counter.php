<html dir="rtl">

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
</head>

<b> <body leftmargin="0" topmargin="0" text="#FF0000" style="text-align: center"></b>

<?

        $counter = "count.txt";
        $fd = fopen($counter, "r");
        $num =  fread($fd, filesize( $counter ));
        fclose($fd);
        $fd = fopen($counter, "w");
        $users = $num + 1;
        echo "$users";
        fwrite($fd, $users);
        fclose($fd);
?>