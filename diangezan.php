<?php
header("content-type:text/html; charset=utf8");
session_start();
$userid = session_id();
$mysql = new SaeMysql();

$mysql->setCharset("utf8");
echo "<br>";
/**
 * Date: 2016/11/26
 * Time: 15:18
 */
?>

<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Big Picture - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <?php
            $sql = "select * from zanshu";
            $result = $mysql->runSql($sql);
            $zanshu = $mysql-> affectedRows() + 1;
            $sqlInsert = "insert into zanshu";
            $sqlInsert .= "(numzan, user_id) values('$userid', '$userid')";
            $mysql-> runSql($sqlInsert);
            ?>
            <h1>你是第<?php echo $zanshu?>个点赞的人</h1>
        </div>
    </div>
    <div class="row text-center">
        <form action="dianzan.php" method="get">
            <input type="submit" value="了解更多"
                   name="Submit" id="frm1_submit" />
        </form>
    </div>

    <!-- /.row -->
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
