<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || RayyanTech Cards</title>
    <meta name='keywords' content='' />
    <meta name='description' content='' />
    <meta name='author' content='' />
    <link rel='shortcut icon' href='icon.png'>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/simple-sidebar.css') ?>">
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Cards</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">📖</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <h2 class="mt-4">DashBoard</h2>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="row">
                            <div class="card col">
                                <div class="card-body">
                                    <h5 class="card-title">Business List</h5>
                                    <div class="container">
                                        <table class="table table-striped table-inverse table-responsive">
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Business Name</th>
                                                    <th>Manager Name</th>
                                                    <th>Username</th>
                                                    <th>No Of Designs</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $key => $user): ?>
                                                <tr>
                                                    <td scope="row"><?=$key+1?></td>
                                                    <td><?=$user['cards']?></td>
                                                    <td><?=$user['name']?></td>
                                                    <td><?=$user['user']?></td>
                                                    <td><?=$user['clearance']?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <script src="<?= base_url('assets/js/jquery.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>