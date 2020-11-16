<!DOCTYPE html>
<html ng-app>

    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>resource/login-form-delta/css/connection.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>resource/login-form-delta/js/prefixfree.min.js"></script>
        <script src="<?php echo base_url(); ?>resource/angular.min.js"></script>
    </head>

    <body>

        <div class="login">
            <h2><center><font color="white">DELTA HOSPITAL LTD.<hr></center></font></h2>
            <center><font color="white">{{name|uppercase}}</font></center>

            <h3><center><font color="white">Login Application</center></font></h3>
            <form method="post" action="<?php echo base_url(); ?>login/check_user_login.html">
                <input type="text" name="email" placeholder="Username" required="required" autofocus ng-model="name" />
                <input type="password" name="password" placeholder="Password" required="required" ng-model="password"/><br>
                <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button><br>
                <center>
                    <font color="#FF0000">
                    <?php
                    $message = $this->session->userdata('message');
                    //echo $message;
                    if (isset($message)) {
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                    ?>


                    </font>
                </center>
                <h5><font color="white"> - Developed by:<br> Md. Gazi Giash Uddin Bijon Ahmed</font></h5>
            </form>

        </div>

        <script src="<?php echo base_url(); ?>resource/login-form-delta/js/index.js"></script>

    </body>

</html>