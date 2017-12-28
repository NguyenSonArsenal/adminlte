<?php
$menuActive = 'campaign';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="dist/css/campaign.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách chiến dịch</h1>
            <a href="campaign_construction.php" class="btn btn-warning pull-right">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Xây dựng chiến dịch</a>
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
                                <div class="form-group">
                                    <label class="col-sm-2" style="width: 130px; line-height: 35px;">Ngày bắt đầu* :</label>
                                    <div class="col-sm-2">
                                        <div class="input-group date ">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-left datepicker">
                                        </div>
                                    </div>
                                    <label for="" class="col-sm-2" style="width: 130px; line-height: 35px;">Ngày kết thúc* :</label>
                                    <div class="col-sm-2">
                                        <div class="input-group date ">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên chiến dịch</th>
                                            <th>Thời gian</th>
                                            <th>Sản phẩm</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Chi phí</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td><span class="name-campaign"> Tên chiến dịch</span></td>
                                            <td>(25/12/2017 - 06/01/2018)</td>
                                            <td>
                                                <img src="http://demo.ezimar.vn/public/upload/product/3383-ao-len-co-tron-han-quoc-1.jpg" height="20px" width="20px" />
                                                <span>Z1237 - Áo len mùa đông</span>
                                            </td>
                                            <td>
                                                <div class="content-edit">
                                                    <small>25/12/2017 | 22:31</small>
                                                </div>
                                            </td>
                                            <td>500,000 VND / Ngày
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Chỉnh sửa
                                                </a>
                                                <a class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Chi tiết
                                                </a>
                                                <a class="btn btn-danger btn-xs"><i class="fa-trash fa icon-delete"></i> Xóa
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <!-- /.table -->

                            </div>

                            <div class="paginate_page">
                                <div class="dataTables_info pull-left" id="example2_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries
                                </div>
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination pull-right">
                                        <li class="paginate_button previous disabled" id="example2_previous">
                                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">
                                                Previous
                                            </a>
                                        </li>
                                        <li class="paginate_button active">
                                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">3</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">4</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">5</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">6</a>
                                        </li>
                                        <li class="paginate_button next" id="example2_next">
                                            <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>
    </div>
    <!-- ./wrapper -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông tin chi tiết Chiến dịch : "Test Campaing"</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px 0px;">
                        <div class="col-md-4" style="text-align: right;">Mục tiêu Chiến dịch:</div>
                        <div class="col-md-8>">Thu thập leads khách hàng tiềm năng</div>
                    </div>
                    <div class="row" style="margin: 5px 0px;">
                        <div class="col-md-4" style="text-align: right;">Khách hàng mục tiêu:</div>
                        <div class="col-md-8>">
                            <span style="cursor: pointer; margin: 2px 0; height: 28px; line-height: 28px; font-size: 13px; background-color: #00C851; color: #fff;border-radius: 16px;text-align: center;padding: 5px;">
                                Leads KH tiềm năng
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row" style="margin: 5px 0px;">
                        <div class="col-md-4" style="text-align: right;">Thời gian:</div>
                        <div class="col-md-8>">26/12/2017 - 26/01/2018</div>
                    </div>
                    <div class="row" style="margin: 5px 0px;">
                        <div class="col-md-4" style="text-align: right;">Ngân sách dự kiến:</div>
                        <div class="col-md-8>">Theo ngày - 4,000,000 VND</div>
                    </div>
                    <div class="row" style="margin: 5px 0px;">
                        <div class="col-md-4" style="text-align: right;">Sản phẩm:</div>
                        <div class="col-md-8>">
                            <span style="cursor: pointer; margin: 2px 0; height: 28px; line-height: 28px; font-size: 13px; background-color: #00C851; color: #fff;border-radius: 16px;text-align: center;padding: 5px;">
                                Mát xa toàn thân bằng thảo dược (M213)
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row" style="margin: 5px 0px;">
                        <div class="col-md-4" style="text-align: right;">Kênh quảng cáo:</div>
                        <div class="col-md-8>">
                            <a class="btn btn-block btn-social btn-google btn-xs" style="display: inline; margin-right: 5px">
                                <i class="fa fa-google-plus"></i> Google
                            </a>
                            <a class="btn btn-block btn-social btn-twitter btn-xs" style="display: inline; margin-right: 5px">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'include/inc_js.php' ?>
</div>
</body>
</html>
