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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add New User</h5>
                                    <div class="container">
                                        <form method="post" action="<?= base_url('addbusiness') ?>">
                                            <div class="form-group row">
                                                <label for="inputName" class="col col-form-label">Business Name: </label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="name" placeholder="No space">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col col-form-label">Manager Name: </label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="fname" placeholder="Yusuf Kolawole">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Add Business</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="card col">
                                <div class="card-body">
                                    <h5 class="card-title">Edit Design</h5>
                                    <div class="container">
                                        <form>
                                            <div class="form-group">
                                                <label for="business">Business & Design</label>
                                                <select class="form-control" name="business" id="business">
                                                    <option value="">Select a Business</option>
                                                    <option value="test 1">Test 1</option>
                                                    <option value="test 2">Test 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">HTML Designs</label>
                                                <textarea class="form-control" name="" id="" rows="3"></textarea>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-warning">Edit Design</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="card col">
                                <div class="card-body">
                                    <h5 class="card-title">Add New Design</h5>
                                    <div class="container">
                                        <form method="post" action="<?= base_url('newdiz') ?>">
                                            <div class="form-group">
                                                <label for="business">Business Name</label>
                                                <select class="form-control" name="business" id="business">
                                                    <option value="">Select a Business</option>
                                                    <?php foreach ($business as $key => $biz) : ?>
                                                        <option value="<?= $biz['cards'] ?>"><?= $biz['cards'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="designName">Design Name</label>
                                                <input type="text" class="form-control" name="designName" id="designName" placeholder="Promo Designs">
                                            </div>
                                            <div class="form-group">
                                                <label for="">HTML Designs</label>
                                                <textarea class="form-control" name="source" id="" rows="3"></textarea>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Add Design</button>
                                                </div>
                                            </div>
                                        </form>
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