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
            <a href="" class="btn btn-warning pull-right">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm kênh quảng cáo
            </a>
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
                                <div class="col-md-6 searchbox">
                                    <form action="" class="form-inline">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="form-group">
                                            <button class="btn btn-success">Search</button>
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
                                <div class="advance_filter col-md-1">
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
    <div class="modal fade" id="modalForDraff" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Xuất bản theo tên miền .ezimar</b></h4>
                </div>
                <div class="modal-body">
                    <div class="b_publish_title">
                        <i class="material-icons left">public</i>Xuất bản dưới tên miền ezimar.vn
                    </div>
                    <div class="input-subdomain">
                        <input type="text" name="publish_subdomain" class="i-subdomain"
                               placeholder="subdomain*">
                        <span>.ezimar.vn</span>
                        <br>
                    </div>
                    <small class="helper">* Trường thông tin bắt buộc</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Xuất bản</button>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php'?>

</body>
</html>
