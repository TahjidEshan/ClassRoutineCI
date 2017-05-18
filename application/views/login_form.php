<!DOCTYPE html>
<html>
    <?php
    if (isset($this->session->userdata['logged_in'])) {

        header("location: http://localhost/classroutineCI/index.php/user_authentication/user_login_process");
    }
    ?>
    <head>
        <title>Login Form</title>
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
    <div id="main">
        <div id="login" class="container-fluid whole">
            <h2>Login Form</h2>
            <hr/>
            <?php echo form_open('user_authentication/user_login_process'); ?>
            <?php
            echo "<div class='error_msg'>";
            if (isset($error_message)) {
                echo $error_message;
            }
            echo validation_errors();
            echo "</div>";
            ?>
            <label>UserName :</label>
            <input type="text" name="username" id="name" placeholder="UserName"/><br /><br />
            <label>Password :</label>
            <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
            <input type="submit" value=" Login " name="submit"/><br />
            <a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
