<?php
require('arithmetic.class.php');
$config = include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $config['title']; ?></title>

        <!-- Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php
$action = $_GET['action'];
if($action == 'submit')
{
?>

<!-- begin result page  -->
<h2>测试结果</h2>
<!-- end result page  -->

<?php
}
elseif($action == 'settings' || $action == '')
{
?>

<!-- begin settings page  -->
<h2>设置</h2>
<!-- end settings page  -->

<?php
}
//-- exam part
elseif($_GET['action'] == 'begin')
{
    $exam = new arithmetic();
    $examLib = $exam->makeExam($_GET['ruler']);
    $exam->beginTime = time();
?>

<!-- begin exam page  -->
<h2>测试开始</h2>
<!-- end exam page  -->

<?php
}
?>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
