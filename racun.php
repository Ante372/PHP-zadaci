
<?php
    
    print '
    <!DOCTYPE HTML>
    <html lang="hr">
        <head>
            <title>Programiranje web aplikacija</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="Ante Ramljak">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        </head>
    <body>';
    <?php
			$_a=$_POST['a'];
			$_b=$_POST['b'];
			$c=(3*$_a-$_b)/2;
			print '
			
			<p a='.$_a .'</p>
			<p>b='.$_b .'</p>
			<p>c=(3*'.$_a.'-'.$_b.')/2='.$c .'</p>';
			
	?>
print '
</body>
</html>';
