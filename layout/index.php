<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>E-commerce</title>
        <script src="<?php echo BASE_URL ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/general.js" type="text/javascript"></script>
        <link href="<?php echo BASE_URL ?>/css/pure-min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo BASE_URL ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>

    <body>
        <div id="main">
            <div class="pure-menu pure-menu-open pure-menu-horizontal navigation">
                <ul>
                    <li><a href="index.php?controller=index&action=index">Home</a></li>
                    <li><a href="index.php?controller=items&action=list">Items</a></li>
                    <li><a href="index.php?controller=order&action=orderList">Orders</a></li>
                </ul>
            </div>

            <div class="system-message">
                <?php notification::getMessage(); ?>
            </div>

            <div class="content">
                <?php $this->getContent(); ?>
            </div>
        </div>
    </body>
</html>

