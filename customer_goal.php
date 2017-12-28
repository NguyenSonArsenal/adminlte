<?php
$menuActive = 'customerGoal';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="./dist/css/customer_goal.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách khách hàng mục tiêu</h1>
            <button type="button" class="btn btn-warning pull-right"
                    data-toggle="modal" data-target="#modal-add-customer-goal">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm khách hàng mục tiêu</button>
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
                                <div class="col-md-9 searchbox">
                                    <form action="" class="form-inline">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="form-group">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-search-minus" aria-hidden="true"></i>
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="status col-md-3">
                                    <select class="form-control" id="sel1">
                                        <option>Sắp xếp theo mới nhất</option>
                                        <option>Sắp xếp theo cũ nhất</option>
                                        <option>Sắp xếp theo Tỉ lệ chuyển đổi</option>
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
                                                <div class="text-data">
                                                    <b class="name-web">VnExpress</b>
                                                    <br>
                                                    <b class="des-web">Kênh thông tin</b>
                                                    <br>
                                                    <small class="time-update">
                                                        Đã cập nhật 24/12/2017 | 07:42
                                                        <a class="a-link" href="#">(Cập nhật ngay)</a></small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                </a>
                                                <span class="bold">Đã tham gia một chiến dịch</span>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                                </a>
                                                <b>20-35</b>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </a>
                                                <b>Hà Nội, TP. Hồ Chí minh</b>
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
                                                <div class="text-data">
                                                    <b class="name-web">VnExpress</b>
                                                    <br>
                                                    <b class="des-web">Kênh thông tin</b>
                                                    <br>
                                                    <small class="time-update">
                                                        Đã cập nhật 24/12/2017 | 07:42
                                                        <a class="a-link" href="#">(Cập nhật ngay)</a></small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                </a>
                                                <span class="not-bold">Chưa tham gia Chiến dịch</span>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                                </a>
                                                <b>20-35</b>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </a>
                                                <b>Hà Nội, TP. Hồ Chí minh</b>
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
                                                <div class="text-data">
                                                    <b class="name-web">VnExpress</b>
                                                    <br>
                                                    <b class="des-web">Kênh thông tin</b>
                                                    <br>
                                                    <small class="time-update">
                                                        Đã cập nhật 24/12/2017 | 07:42
                                                        <a class="a-link" href="#">(Cập nhật ngay)</a></small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                </a>
                                                <span class="bold">Đã tham gia một chiến dịch</span>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                                </a>
                                                <b>20-35</b>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </a>
                                                <b>Hà Nội, TP. Hồ Chí minh</b>
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
                                                <div class="text-data">
                                                    <b class="name-web">VnExpress</b>
                                                    <br>
                                                    <b class="des-web">Kênh thông tin</b>
                                                    <br>
                                                    <small class="time-update">
                                                        Đã cập nhật 24/12/2017 | 07:42
                                                        <a class="a-link" href="#">(Cập nhật ngay)</a></small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                </a>
                                                <span class="bold">Đã tham gia một chiến dịch</span>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                                </a>
                                                <b>20-35</b>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </a>
                                                <b>Hà Nội, TP. Hồ Chí minh</b>
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
                                                <div class="text-data">
                                                    <b class="name-web">VnExpress</b>
                                                    <br>
                                                    <b class="des-web">Kênh thông tin</b>
                                                    <br>
                                                    <small class="time-update">
                                                        Đã cập nhật 24/12/2017 | 07:42
                                                        <a class="a-link" href="#">(Cập nhật ngay)</a></small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                </a>
                                                <span class="not-bold">Chưa tham gia một chiến dịch</span>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                                </a>
                                                <b>20-35</b>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </a>
                                                <b>Hà Nội, TP. Hồ Chí minh</b>
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
    <div class="modal fade" id="modal-add-customer-goal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Thêm Khách hàng mục tiêu mới</b></h4>
                </div>

                <!-- Modal body-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Tên nhóm khách hàng <span class="color-red">*</span> :</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="channel_name">
                        </div>
                    </div>
                    <div class="row div_select2">
                        <div class="col-md-4 "><label for="">Vị trí địa lý :</label></div>
                        <div class="col-md-8 lbl-address">
                            <select id="e1" multiple="multiple" style="width:100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label for="">Giới tính :</label></div>
                        <div class="col-md-8">
                            <span class="radio-inline"><input type="radio" name="optradio" checked>Tất cả</span>
                            <span class="radio-inline"><input type="radio" name="optradio">Nam</span>
                            <span class="radio-inline"><input type="radio" name="optradio">Nữ</span>
                            <span class="radio-inline"><input type="radio" name="optradio">Khác</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label for="">Độ tuổi :</label></div>
                        <div class="col-md-8 slider">
                            <div type="text" class="form-control" id="slider-age" name="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label for="">Đặc điểm nổi bật :</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
                </div>
                <!--End modal body-->

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

<script src="dist/js/customer_goal.js"></script>

</body>
</html>
