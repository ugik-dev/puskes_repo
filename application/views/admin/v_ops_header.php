<!--Counter Inbox-->
<?php
error_reporting(0);
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$profil = getProfil();
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script language="JavaScript">
        var txt = "Galeri | <?= $profil->nama_puskesmas ?> ";
        var kecepatan = 450;
        var segarkan = null;

        function bergerak() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            segarkan = setTimeout("bergerak()", kecepatan);
        }
        bergerak();
    </script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'upload/images/kab_bangka.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/datatables/dataTables.bootstrap.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets_old/plugins/toast/jquery.toast.min.css' ?>" />



</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
        $this->load->view('admin/v_header');
        ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php
        $this->load->view('admin/v_menu');
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Header
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Header</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Photo</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Album</th>
                                                <th>Author</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data as $i) :
                                            ?>
                                                <tr>
                                                    <td><?= $i['posisi'] ?></td>
                                                    <td><?= '<img src="' . base_url('upload/images/' . $i['header_image']) . '" style="max-width: 300px; max-height: 100px"/>' ?></td>
                                                    <td><?= $i['h1'] ?></td>
                                                    <td><?= $i['h2'] ?></td>
                                                    <td><?= $i['h3'] ?></td>
                                                    <td style="text-align:right;">
                                                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $i['id_header']; ?>"><span class="fa fa-pencil"></span></a>
                                                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $i['id_header']; ?>"><span class="fa fa-trash"></span></a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!--Footer-->
        <?php
        $this->load->view('admin/v_footer');
        ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!--Modal Add Pengguna-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Photo</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturan/add_header' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Urutan</label>
                            <div class="col-sm-7">
                                <input type="text" name="posisi" class="form-control" id="posisi" placeholder="ex. 2" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Text 1</label>
                            <div class="col-sm-7">
                                <input type="text" name="h1" class="form-control" id="h1" placeholder="ex. Puskesmas Sungailiat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Text 2</label>
                            <div class="col-sm-7">
                                <input type="text" name="h2" class="form-control" id="h2" placeholder="ex. Membangun bersama masyarakat babel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Text 3</label>
                            <div class="col-sm-7">
                                <input type="text" name="h3" class="form-control" id="h3" placeholder="ex. Ayo hidup sehat">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                            <div class="col-sm-7">
                                <input type="file" name="header_images" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal Edit Album-->
    <?php foreach ($data as $i) :

    ?>

        <div class="modal fade" id="ModalEdit<?php echo $i['id_header']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Header</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturan/update_header' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id_header" value="<?php echo $i['id_header']; ?>" />
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Urutan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="posisi" value="<?php echo $i['posisi']; ?>" class="form-control" id="posisi" placeholder="ex. 2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tingkat Kecerahan (1-100)</label>
                                <div class="col-sm-7">
                                    <input type="text" name="dark_effect" value="<?php echo $i['dark_effect']; ?>" class="form-control" id="posisi" placeholder="1-100">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Text 1</label>
                                <div class="col-sm-7">
                                    <input type="text" name="h1" value="<?php echo $i['h1']; ?>" class="form-control" id="h1" placeholder="ex. Puskesmas Sungailiat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Text 2</label>
                                <div class="col-sm-7">
                                    <input type="text" name="h2" class="form-control" value="<?php echo $i['h2']; ?>" id="h2" placeholder="ex. Membangun bersama masyarakat babel">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Text 3</label>
                                <div class="col-sm-7">
                                    <input type="text" name="h3" class="form-control" value="<?php echo $i['h3']; ?>" id="h3" placeholder="ex. Ayo hidup sehat">
                                </div>
                            </div>


                            <div class="col-lg-12">

                                <?= '<img src="' . base_url('upload/images/' . $i['header_image']) . '" style="max-width: 400px; max-height: 200px"/>' ?>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="control-label">Photo</label>
                                <div class="col-sm-5">
                                    <br>
                                    <input type="file" name="header_images" />
                                    *jika tidak diganti biarkan kosong
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!--Modal Edit Album-->

    <?php foreach ($data as $i) :
    ?>
        <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $i['id_header']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Header</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturan/delete_header' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id_header" value="<?php echo $i['id_header']; ?>" />
                            <input type="hidden" value="<?php echo $i['header_image']; ?>" name="header_image">
                            <?= '<img src="' . base_url('upload/images/' . $i['header_image']) . '" style="max-width: 400px; max-height: 200px"/>' ?>

                            <p>Apakah Anda yakin mau menghapus Header ini ?</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>




    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() . 'assets_old/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() . 'assets_old/bootstrap/js/bootstrap.min.js' ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() . 'assets_old/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets_old/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() . 'assets_old/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() . 'assets_old/plugins/fastclick/fastclick.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets_old/dist/js/app.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'assets_old/dist/js/demo.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets_old/plugins/toast/jquery.toast.min.js' ?>"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <?php if ($this->session->flashdata('msg') == 'error') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Error',
                text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FF4859'
            });
        </script>

    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Photo Berhasil disimpan ke database.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Photo berhasil di update",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Photo Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>