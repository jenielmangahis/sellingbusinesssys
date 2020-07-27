<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Intellident</title>
 
    <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('bootstrap/css/bootstrap.min.css'); 
            echo $this->Html->css('dist/css/AdminLTE.css');   
            echo $this->Html->css('dist/css/skins/_all-skins.min.css');  
            echo $this->Html->css('plugins/iCheck/flat/blue.css'); 
            echo $this->Html->css('plugins/morris/morris.css');
            echo $this->Html->css('plugins/jvectormap/jquery-jvectormap-1.2.2.css');
            echo $this->Html->css('plugins/datepicker/datepicker3.css');
            echo $this->Html->css('plugins/daterangepicker/daterangepicker.css');
            echo $this->Html->css('plugins/timepicker/bootstrap-timepicker.min.css');
            echo $this->Html->css('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');
            echo $this->Html->css('plugins/iCheck/all.css');
            echo $this->Html->css('full-calendar/fullcalendar.print', ['media' => 'print']);
            echo $this->Html->css('full-calendar/fullcalendar.css');   
            echo $this->Html->css('plugins/datatables/dataTables.bootstrap.css');
            echo $this->Html->css('jquery-ui-1.11.4/jquery-ui.css'); 
            echo $this->Html->css('font-awesome.min.css'); 
            echo $this->Html->css('ionicons.min.css'); 
            echo $this->Html->css('intellident.css');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">