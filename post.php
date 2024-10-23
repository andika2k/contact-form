<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$issue = $_POST['issue'] ?? '';
$message = $_POST['message'] ?? '';

?>

<!DOCTYPE html>
<html class="text-dark text-bg-light" data-bs-theme="light" lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
</head>

<style>
    body {
        background-color: navy
    }

</style>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8 col-xxl-6">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h1 class="text-center mb-4">Contact Form Posts</h1>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Issue</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $name ?></td>
                                        <td><?= $email ?></td>
                                        <td><?= $issue ?></td>
                                        <td><?= $message ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

