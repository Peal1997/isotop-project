
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java</title>
    
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</body>
<!-- bootstrape 5 Bundle with Popper -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src ="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script>
    $('p').click(function(){

        $('p').css('background-color','#ccc').css('color','#000').css('transform','scale(1)');
        $(this).css({
            'background-color' : 'red',
            'color'            : '#fff',
            'transform'        : 'scale(1.1)'

        });
    });
</script>
</body>
</html>
