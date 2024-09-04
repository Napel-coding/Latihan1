<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
    id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
            body {
    background-image: url('https://assets.dataindonesia.id/1657159790627_89_Perpustakaan.jpg'); /* Background image URL */
    background-size: cover; /* Scales the image to cover the entire background */
    background-repeat: no-repeat; /* Prevents the background image from repeating */
    background-attachment: fixed; /* Keeps the background fixed while scrolling */
    background-position: center; /* Centers the background image */
    image-rendering: -webkit-optimize-contrast; /* Improves image rendering quality on some browsers */
}

        

        .welcome-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 50px;
        }

        .welcome-title {
            font-family: 'Georgia', serif;
            color: #2c3e50;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .welcome-text {
            font-family: 'Arial', sans-serif;
            color: #34495e;
        }

        .btn-explore {
            background-color: #2c3e50;
            color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .btn-explore:hover {
            background-color: #1a252f;
            color: #fff;
        }
    </style>
</head>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="" id="registerModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Create an Account</h3>
                </div>
                <div class="well">
                    <ul class="nav nav-tabs">
                        <li><a href="login.php" data-toggle="tab">Login</a></li>
                        <li class=active><a href="create.php" data-toggle="tab">Create Account</a></li>
                    </ul>
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div id="legend">
                                <legend class="">Register</legend>
                            </div>
                            <div class="control-group">
                                <!-- Username -->
                                <label class="control-label" for="username">Username</label>
                                <div class="controls">
                                    <input type="text" id="username" name="username" placeholder=""
                                        class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- First Name -->
                                <label class="control-label" for="id">id</label>
                                <div class="controls">
                                    <input type="text" id="id" name="id" placeholder=""
                                        class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- First Name -->
                                <label class="control-label" for="id">Nik</label>
                                <div class="controls">
                                    <input type="text" id="id" name="id" placeholder=""
                                        class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Email -->
                                <label class="control-label" for="name">Nama</label>
                                <div class="controls">
                                    <input type="name" id="name" name="name" placeholder="" class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password -->
                                <label class="control-label" for="password">Password</label>
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder=""
                                        class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Confirm Password -->
                                <label class="control-label" for="confirm_password">Confirm Password</label>
                                <div class="controls">
                                    <input type="password" id="confirm_password" name="confirm_password" placeholder=""
                                        class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Address -->
                                <label class="control-label" for="address">Address</label>
                                <div class="controls">
                                    <textarea id="address" name="address" rows="3" class="input-xlarge"></textarea>
                                </div>
                                
                            </div>

                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-primary">Create Account</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>