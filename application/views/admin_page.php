<!DOCTYPE html>
<html>
    <?php
    if (isset($this->session->userdata['logged_in'])) {
        $username = ($this->session->userdata['logged_in']['username']);
        $email = ($this->session->userdata['logged_in']['email']);
    } else {
        header("location: http://localhost/classroutineCI/index.php/user_authentication/user_login_process");
    }
    ?>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
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
            <div id="profile">
                <?php
                echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
                echo "<br/>";
                echo "Welcome to Admin Page";
                echo "<br/>";
                echo "Your Username is " . $username;
                echo "<br/>";
                echo "Your Email is " . $email;
                echo "<br/>";
                ?>
                <b id="logout"><a href="logout">Logout</a></b>
            </div>
            <div class="" id="classList">
                <table style="border:2px solid black; width:20%; text-align:center;">
                    <?php
                    foreach ($class as $row):
                        echo '<tr>' . '<td>' . '<a href="className.php?idVal=' . $row->class . '">' . 'Class &nbsp' . $row->class . '</a>' . '</td>' . '</tr>';
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
        <br/>
    </body>
</html>
