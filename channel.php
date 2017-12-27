<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="./dist/css/channel.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách kênh quảng cáo</h1>
            <button type="button" class="btn btn-warning pull-right"
                    data-toggle="modal" data-target="#modal-add-channel">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm kênh quảng cáo</button>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">

                        <!-- Search and Filter -->
                        <div class="box-header with-border">
                            <div class="row filter">
                                <div class="col-md-5 searchbox">
                                    <form action="" class="form-inline">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="form-group">
                                            <button class="btn btn-success">
                                                <i class="fa fa-search-minus" aria-hidden="true"></i>
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="sort col-md-3">
                                    <select class="form-control" id="sel1">
                                        <option>Sắp xếp theo mới nhất</option>
                                        <option>Sắp xếp theo cũ nhất</option>
                                        <option>Sắp xếp theo Tỉ lệ chuyển đổi</option>
                                    </select>
                                </div>
                                <div class="advance_filter col-md-2">
                                    <a href="">
                                        <i class="fa  fa-bar-chart" aria-hidden="true"></i>
                                        Lọc nâng cao
                                    </a>
                                </div>
                                <div class="status col-md-2">
                                    <select class="form-control" id="sel1">
                                        <option>Tất cả</option>
                                        <option>Online</option>
                                        <option>Offline</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Search and Filter -->

                        <!-- data -->
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped dataTable">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                        </td>
                                        <td>
                                            <div class="text-data">
                                                <b class="name-web">VnExpress</b>
                                                <br>
                                                <b class="des-web">Kênh thông tin</b>
                                                <br>
                                                <small class="time-update">
                                                    Đã cập nhật 24/12/2017 | 07:42
                                                    <a class="a-link" href="#">(Cap nhat ngay)</a></small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="load-more">
                                                <div class="top">
                                                    <a href="javascript:void(0)">
                                                        1
                                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="title-load-more">
                                                    <a href="">
                                                        Xem thêm
                                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="conversion-rate">
                                                <a href="javascript:void(0)">
                                                    0
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <b>Online</b>
                                                <br>
                                                <small>Chưa nhập đường dẫn kênh</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=""><i class="fa-trash fa icon-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                        </td>
                                        <td>
                                            <div class="text-data">
                                                <b class="name-web">VnExpress</b>
                                                <br>
                                                <b class="des-web">Kênh thông tin</b>
                                                <br>
                                                <small class="time-update">
                                                    Đã cập nhật 24/12/2017 | 07:42
                                                    <a class="a-link" href="#">(Cap nhat ngay)</a></small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="load-more">
                                                <div class="top">
                                                    <a href="javascript:void(0)">
                                                        1
                                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="title-load-more">
                                                    <a href="">
                                                        Xem thêm
                                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="conversion-rate">
                                                <a href="javascript:void(0)">
                                                    0
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <b>Online</b>
                                                <br>
                                                <small class="link-web">xxx.18+</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=""><i class="fa-trash fa icon-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                        </td>
                                        <td>
                                            <div class="text-data">
                                                <b class="name-web">VnExpress</b>
                                                <br>
                                                <b class="des-web">Kênh thông tin</b>
                                                <br>
                                                <small class="time-update">
                                                    Đã cập nhật 24/12/2017 | 07:42
                                                    <a class="a-link" href="#">(Cap nhat ngay)</a></small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="load-more">
                                                <div class="top">
                                                    <a href="javascript:void(0)">
                                                        1
                                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="title-load-more">
                                                    <a href="">
                                                        Xem thêm
                                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="conversion-rate">
                                                <a href="javascript:void(0)">
                                                    0
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <b>Online</b>
                                                <br>
                                                <small>Chưa nhập đường dẫn kênh</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=""><i class="fa-trash fa icon-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                        </td>
                                        <td>
                                            <div class="text-data">
                                                <b class="name-web">VnExpress</b>
                                                <br>
                                                <b class="des-web">Kênh thông tin</b>
                                                <br>
                                                <small class="time-update">
                                                    Đã cập nhật 24/12/2017 | 07:42
                                                    <a class="a-link" href="#">(Cap nhat ngay)</a></small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="load-more">
                                                <div class="top">
                                                    <a href="javascript:void(0)">
                                                        1
                                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="title-load-more">
                                                    <a href="">
                                                        Xem thêm
                                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="conversion-rate">
                                                <a href="javascript:void(0)">
                                                    0
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <b>Online</b>
                                                <br>
                                                <small>Chưa nhập đường dẫn kênh</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=""><i class="fa-trash fa icon-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                        </td>
                                        <td>
                                            <div class="text-data">
                                                <b class="name-web">VnExpress</b>
                                                <br>
                                                <b class="des-web">Kênh thông tin</b>
                                                <br>
                                                <small class="time-update">
                                                    Đã cập nhật 24/12/2017 | 07:42
                                                    <a class="a-link" href="#">(Cap nhat ngay)</a></small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="load-more">
                                                <div class="top">
                                                    <a href="javascript:void(0)">
                                                        1
                                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="title-load-more">
                                                    <a href="">
                                                        Xem thêm
                                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="conversion-rate">
                                                <a href="javascript:void(0)">
                                                    0
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <b>Online</b>
                                                <br>
                                                <small>Chưa nhập đường dẫn kênh</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=""><i class="fa-trash fa icon-delete"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- end data -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="modal-add-channel" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Thêm Kênh quảng cáo mới</b></h4>
                </div>
                <div class="row modal-body">
                    <div class="col-md-5">
                        <div class="lbl-logo-channel"><b>Logo Kênh</b></div>
                        <div class="preview-image">
                            <a href="">
                                <i class="material-icons icon-backup">backup</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pull-right">
                                        <label for="">Tên Kênh <span class="color-red">*</span> :</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="channel_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pull-right"><label for="">Loại Kênh :</label></td>
                                    <td>
                                        <label class="radio-inline"><input type="radio" name="optradio">Offline</label>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>Online</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pull-right"><label for="">Mô tả :</label></td>
                                    <td>
                                        <input type="text" class="form-control" name="description">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pull-right"><label for="">Đường dẫn :</label></td>
                                    <td>
                                        <input type="text" class="form-control" name="path">
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="fa fa-remove" aria-hidden="true"></i>
                        Hủy
                    </button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Lưu
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php'?>

</body>
</html>
