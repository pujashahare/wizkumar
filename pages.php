<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pages--PHP-Learning-Home-By-Wizkumar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/wizkumar.css" />
</head>
<body>
    <a href="index.php">Go Home</a>
    <h1 class="text-center">Chaning Page Content as per as url request</h1>
    <hr/>
    <ul>
        <li><a href="pages.php">Home</a></li>
        <li><a href="pages.php?page=about-me">About Me</a></li>
        <li><a href="pages.php?page=setting">Setting</a></li>
        <li><a href="pages.php?page=contact-details">Contact Details</a></li>

    </ul>
    <h1>
    <?php
        if(!isset($_GET['page'])){
            echo"This is home";
        }else{
            switch ($_GET['page']) {
                case 'about-me':
                    echo"Know More About Me";
                    break;
                case 'setting':
                    echo"its a setting content";
                    break;
                case 'contact-details':
                    echo"contact details goes here";
                
                default:
                    # code...
                    break;
            }
        }
    ?>
    </h1>
</body>
</html>