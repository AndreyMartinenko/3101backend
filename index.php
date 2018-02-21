<?php
define('EMPLOYEES_AMOUNT', 10);

$employees = [];

$first_names = ['Mike', 'Marie', 'Sarah', 'Jack', 'Andy'];
$last_names = ['Anderson', 'Smith', 'Mulder', 'Thompson', 'Sweinsteiger'];
$email_domains = ['google.com', 'yahoo.com', 'bing.com'];

$max_index_first_names = count($first_names) - 1;
$max_index_last_names = count($last_names) - 1;
$max_index_emails = count($email_domains) - 1;

for ($i = 1; $i <= EMPLOYEES_AMOUNT; $i++) {
    $index_first_name = rand(0, $max_index_first_names);
    $index_last_name = rand(0, $max_index_last_names);
    $index_email = rand(0, $max_index_emails);

    $first_name = $first_names[$index_first_name];
    $last_name = $last_names[$index_last_name];
    $email = $email_domains[$index_email];

    $email = strtolower($first_name . '-' . $last_name)
        . rand(1900, 2000)
        . '@'
        . $email
    ;

    $employee = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
    ];

    $employees[] = $employee;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Employees</h1>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email mega address</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $key => $employee) : ?>
            <?php   $r1 = rand(0,255);
                    $r2 = rand(0,255);
                    $r3 = rand(0,255);
                    $color = sprintf("#%02x%02x%02x", $r1, $r2, $r3);
            ?>
            <tr style="background-color: <?= $color?>;"  >
                <td><?=$employee['first_name'] ?></td>
                <td><?=$employee['last_name'] ?></td>
                <td><?=$employee['email'] ?></td>
            </tr>
        <?php endforeach ?>

        </tbody>
    </table>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="/js/popper./.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>