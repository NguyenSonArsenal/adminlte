<?php
$menuActive = 'campaignConstruction';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>

    <link rel="stylesheet" href="dist/css/customer_goal.css">
    <link rel="stylesheet" href="dist/css/campaign_construction.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>
    <?php include 'include/inc_sidebar.php' ?>

    <div class="content-wrapper" style="min-height: 1036px;">
        <section class="content-header">
            <h1 class="pull-left">Danh sách chiến dịch</h1>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">...</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Tên chiến dịch:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Mục tiêu chiến dịch:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Khách hàng mục tiêu:</label>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-customer-goal">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            Thêm mới
                                        </button>
                                        <span style="padding:0px 10px;">hoặc</span>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_history_customer_goal">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            Chọn trong lịch sử
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-3 control-label">Sản phẩm:</label>
                                    <div class="col-md-8">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                Thêm sản phẩm
                                                <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_add_product">Thêm mới</a>
                                                </li>
                                                <li><a href="#">Thêm từ kho</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Ngày bắt đầu* :</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker" id="">
                                        </div>
                                    </div>
                                    <label for="" class="col-md-2 control-label">Ngày kết thúc* :</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Ngân sách dự kiến :</label>
                                    <div class="col-md-3" style="width: 240px;">
                                        <div class="radio pull-left" style="margin-right: 10px">
                                            <label>
                                                <input type="radio" name="" id="optionsRadios1" value="option1"> Toàn chiến dịch
                                            </label>
                                        </div>
                                        <div class="radio pull-left">
                                            <label>
                                                <input type="radio" name="" id="optionsRadios2" value="option2"> Theo ngày
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control pull-left" placeholder="100.000" style="width:100px;text-align:right;margin-right: 10px">
                                        <select class="form-control pull-left" style="width:80px;text-align:right;">
                                            <option>VND</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Kênh quảng cáo :</label>
                                    <div class="col-md-9" id="append-val">
                                        <!-- box list-->

                                        <!-- end box list-->

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-8">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_route">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            Thêm kênh
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default pull-right" style="margin-left: 10px">
                                    <i class="fa fa-repeat" aria-hidden="true"></i>
                                    Tiếp tục
                                </button>
                                <button type="submit" class="btn btn-primary pull-right">
                                    <i class="fa fa-save" aria-hidden="true"></i>
                                    Lưu và kết thúc
                                </button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>

        <!-- Modal them kenh -->
        <div id="modal_add_route" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 400px;">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="input-group input-group-sm" style="width: 100%">
                            <input type="text" name="" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="val-li" style="margin-bottom: 5px" data-content="facebook">
                            <a class="btn btn-block btn-social btn-facebook">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                        </div>
                        <div class="val-li" style="margin-bottom: 5px" data-content="google">
                            <a class="btn btn-block btn-social btn-google">
                                <i class="fa fa-google-plus"></i> Google
                            </a>
                        </div>
                        <div class="val-li" style="margin-bottom: 5px" data-content="twitter">
                            <a class="btn btn-block btn-social btn-twitter">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal them kenh -->

        <!-- Modal them san pham moi -->
        <?php include 'include/inc_modal_add_product.php' ?>
        <!-- End Modal them san pham moi -->

        <!-- Modal add customer goal-->
        <?php include 'include/inc_modal_add_customer_goal.php' ?>
        <!-- End modal add customer goal-->

        <!-- Modal them lich su khach hang muc tieu-->
        <div id="modal_history_customer_goal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Lịch sử khách hàng mục tiêu</h4>
                    </div>
                    <div class="modal-body">

                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped dataTable table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Thong tin website</th>
                                            <th>Nhóm khách hàng</th>
                                            <th>Độ tuổi</th>
                                            <th>Vị trí địa lý</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php for($i=0; $i<5; $i++) { ?>
                                            <tr>
                                                <td>
                                                    <div class="text-data">
                                                        <b>VnExpress</b>(123)
                                                        <span>Kênh thông tin</span>
                                                        <small>Đã cập nhật 24/12/2017 | 07:42
                                                            <a class="a-link" href="#">Cap nhat ngay</a>
                                                        </small>
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
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm">Chọn</button>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>

                        <!-- Paginate -->
                        <?php include 'include/inc_paginate.php' ?>
                        <!-- End paginate -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>

        </div>
        <!-- End Modal lich su them khach hang muc tieu-->

    </div>
    <!-- ./wrapper -->

    <?php include 'include/inc_js.php' ?>

</div>
</body>
</html>
