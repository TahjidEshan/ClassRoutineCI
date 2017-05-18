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
    <body>
        <div id="main" class="container-fluid whole">
            <div id="registration">
                <h2>Registration Form</h2>
                <hr/>
                <?php
                echo "<div class='error_msg'>";
                echo validation_errors();
                echo "</div>";
                echo form_open('user_authentication/new_user_registration');

                echo form_label('Create Username : ');
                echo"<br/>";
                echo form_input('username');
                echo "<div class='error_msg'>";
                if (isset($message_display)) {
                    echo $message_display;
                }
                echo "</div>";
                echo"<br/>";
                echo form_label('Email : ');
                echo"<br/>";
                $data = array(
                    'type' => 'email',
                    'name' => 'email_value'
                );
                echo form_input($data);
                echo"<br/>";
                echo"<br/>";
                echo form_label('Password : ');
                echo"<br/>";
                echo form_password('password');
                echo"<br/>";
                echo"<br/>";
                echo form_submit('submit', 'Sign Up');
                echo form_close();
                ?>
                <a href="<?php echo base_url() ?> ">For Login Click Here</a>
            </div>
        </div>
    </body>
</html>
