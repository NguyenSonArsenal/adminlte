<?php
$menuActive = 'product';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="./dist/css/product.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách sản phẩm</h1>
            <button type="button" class="btn btn-warning pull-right"
                    data-toggle="modal" data-target="#modal_add_product">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm sản phẩm
            </button>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">

                        <!-- Search and Filter -->
                        <?php include 'include/inc_search_filter.php' ?>
                        <!-- End Search and Filter -->

                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>Ảnh đại diện</th>
                                        <th class="align-left">Thông tin sản phẩm</th>
                                        <th>Liên hệ thu thập</th>
                                        <th>Giá thành</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40"
                                                 alt="name image">
                                        </td>
                                        <td>
                                            <div class="product-info">
                                                <b>xe may </b>(123)
                                                <span>san pham hot</span>
                                                <small>Đã cập nhật 24/12/2017 | 07:42
                                                </small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="a_lcontent_param">
                                                <div class="a_lcontent_param_child">
                                                    <span class="title_statistical"><b>0</b></span>
                                                    <a href=""><i class="fa fa-lg fa-dollar font-awesome"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-left">
                                            <div class="a_lcontent_param">
                                                <div class="a_lcontent_param_child">
                                                    <a href=""><i class="fa fa-lg fa-dollar font-awesome"></i></a>
                                                    <span class="title_statistical lbl-italic">Chưa có giá thành</span>
                                                </div>
                                                <div class="a_lcontent_param_child">
                                                    <a href=""><i class="fa fa-lg  fa-th font-awesome"></i></a>
                                                    <span class="title_statistical lbl-italic">Chưa có nhà cung cấp</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                                Chỉnh sửa
                                            </a>
                                            <a class="btn btn-danger btn-xs">
                                                <i class="fa-trash fa icon-delete"></i>
                                                Xóa
                                            </a>
                                        </td>
                                    </tr>

                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <img src="./dist/img/user4-128x128.jpg" height="40" width="40"
                                                     alt="name image">
                                            </td>
                                            <td>
                                                <div class="product-info">
                                                    <b>xe may </b>(123)
                                                    <span>san pham hot</span>
                                                    <small>Đã cập nhật 24/12/2017 | 07:42
                                                    </small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="a_lcontent_param">
                                                    <div class="a_lcontent_param_child">
                                                        <span class="title_statistical"><b>0</b></span>
                                                        <a href=""><i class="fa fa-lg fa-dollar font-awesome"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-left">
                                                <div class="a_lcontent_param">
                                                    <div class="a_lcontent_param_child">
                                                        <a href=""><i class="fa fa-lg fa-dollar font-awesome"></i></a>
                                                        <span class="title_statistical lbl-bold">200.000 VND</span>
                                                    </div>
                                                    <div class="a_lcontent_param_child">
                                                        <a href=""><i class="fa fa-lg  fa-th font-awesome"></i></a>
                                                        <span class="title_statistical lbl-bold">honda</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                    Chỉnh sửa
                                                </a>
                                                <a class="btn btn-danger btn-xs">
                                                    <i class="fa-trash fa icon-delete"></i>
                                                    Xóa
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->

                            <!-- Paginate -->
                            <?php include 'include/inc_paginate.php' ?>
                            <!-- End paginate -->

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->


    <!-- Modal add product -->
    <?php include 'include/inc_modal_add_product.php' ?>
    <!--End modal add product-->



</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php' ?>
</body>
</html>
