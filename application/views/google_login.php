<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login with Google in Codeigniter</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="mb-3">
                <h1>API'S ACCESS</h1>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="card">
                <div class="card-header text-content-center">
                    Login
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="form-group">
                            <?php
                            if (!isset($login_button)) {

                                $user_data = $this->session->userdata('user_data');
                                echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                                echo '<img src="' . $user_data['profile_picture'] . '" class="img-responsive img-circle img-thumbnail" />';
                                echo '<h3><b>Name : </b>' . $user_data["first_name"] . ' ' . $user_data['last_name'] . '</h3>';
                                echo '<h3><b>Email :</b> ' . $user_data['email_address'] . '</h3>';
                                echo '<h3><a href="http://localhost/login_google/google/logout">Logout</h3></div>';
                            } else {
                                echo '<div align="center">' . $login_button . '</div>';
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


</body>

</html>