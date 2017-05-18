<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css" >
            h2{letter-spacing: 10px; font-size: .2in}
            span{color: red}
            form{box-alignment: left;}

        </style>
    </head>
    <body>
        <?php
        if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
        }
        ?>
        <?php
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
        ?>
        <div id="main" class="container-fluid whole">
          <div class="col-sm-12 head" id="header">
              <div class="col-xs-2 logo"><img class="img-responsive" src="<?php echo base_url(); ?>images/jb_logo.png" alt="LOGO"></div>
              <div class="col-sm-6 title"><h3>Ibrahimpur Salahuddin Shikhyalaya</h3></div>
              <div class="col-sm-10 address"><h5>East Sheorapara, Mirpur, Dhaka-1216</h5></div>
              <div class="col-sm-10 address1"><h5>Schedule Management System</h5></div>
          </div>
        </div>
    </body>
</html>
