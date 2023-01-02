<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between mb-2">
        <div class="container">
            <a class="navbar-brand">
                <h1> API'S APP</h1>
            </a>
            <form class="form-inline" method="post" action="">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                &nbsp;
                <a href="<?= base_url() ?>login/logout" class="btn btn-danger">Logout</a>
            </form>
        </div>
    </nav>
    <div class="container">
        <font color="orange">
            <?php echo $this->session->flashdata('hasil'); ?>
        </font>
        <div class="justify-content-center mb-3">
            <!-- <a href="<?= base_url() ?>admin/create" class="btn btn-primary" class=""><i class="fa fa-plus"></i> Tambah<a> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalku">
                <i class="fa fa-plus"></i> Tambah
            </button>

            <!-- The Modal -->

        </div>

        <table border="1" id="table_id" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataadmin as $admin) : ?>
                    <tr>
                        <td><?= $admin->id_admin ?></td>
                        <td><?= $admin->username ?></td>
                        <td><?= $admin->email ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="<?= base_url() ?>admin/edit/<?= $admin->id_admin ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                &nbsp;<a href="<?= base_url() ?>admin/delete/<?= $admin->id_admin ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
    <div class="modal fade" id="modalku">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Ini adalah Bagian Header Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Ini adalah Bagian Body Modal -->
                <div class="modal-body">
                    <form action="<?= base_url() ?>admin/index" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
                <!-- Ini adalah Bagian Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>