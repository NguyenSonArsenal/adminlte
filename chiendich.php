<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php'?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php'?>

    <?php include 'include/inc_sidebar.php'?>

    <div class="content-wrapper">
        <section class="content">
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-sm pull-right" data-toggle="collapse" href="#collapse1" style="margin-left: 10px;">Lọc nâng cao</button>
                    <select name="" aria-controls="" class="form-control input-sm pull-right" style="width: 250px;margin-left: 10px;">
                        <option value="10">Sắp xếp theo mới nhất</option>
                        <option value="25">Sắp xếp theo cũ nhất</option>
                        <option value="50">Sắp xếp theo Tỷ lệ chuyển đổi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
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

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <div id="collapse1" class="panel-collapse collapse clearfix">
                                <div class="panel-body">
                                    <p><i class="fa fa-tv"></i> Sản phẩm:</p>
                                    <p><i class="fa fa-feed"></i> Kênh:</p>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default btn-sm">Bỏ lọc</button>
                                    <button class="btn btn-success btn-sm">Áp dụng</button>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>
                                        <p>
                                        <h4 style="font-weight: bold; color: #00C851">Test Campaing
                                            <small>(25/12/2017 - 06/01/2018)</small>
                                        </h4>
                                        </p>
                                        <p style="font-size: 11px; color: #212121; line-height: 16px; max-height: 32px; overflow: hidden; width: 100%; text-align: justify;">
                                            <small>Test Campaing</small>
                                        </p>
                                        <p style="font-size: 9px; color: #9e9e9e; width: 100%; font-style: italic;"> Đã cập nhật 25/12/2017 | 22:31 </p>
                                    </td>
                                    <td>
                                        0 <i class="fa fa-search"></i>&nbsp;
                                        2 <i class="fa fa-group"></i>&nbsp;
                                        45% <i class="fa fa-reply"></i>&nbsp;
                                    </td>
                                    <td>
                                        <div class="a_lcontent_top_product_img pull-left" style="background-image: url(http://demo.ezimar.vn/public/upload/product/3383-ao-len-co-tron-han-quoc-1.jpg)"></div>
                                        <span class="a_lcontent_top_product_content truncate pull-left">Z1237 - Áo len mùa đông </span>
                                    </td>
                                    <td>500,000 VND / Ngày</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Chi tiết</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                        <h4 style="font-weight: bold; color: #00C851">Test Campaing
                                            <small>(25/12/2017 - 06/01/2018)</small>
                                        </h4>
                                        </p>
                                        <p style="font-size: 11px; color: #212121; line-height: 16px; max-height: 32px; overflow: hidden; width: 100%; text-align: justify;">
                                            <small>Test Campaing</small>
                                        </p>
                                        <p style="font-size: 9px; color: #9e9e9e; width: 100%; font-style: italic;"> Đã cập nhật 25/12/2017 | 22:31 </p>

                                    </td>
                                    <td>
                                        0 <i class="fa fa-search"></i>&nbsp;
                                        2 <i class="fa fa-group"></i>&nbsp;
                                        10% <i class="fa fa-reply"></i>&nbsp;
                                    </td>
                                    <td><span style="color: #9e9e9e; font-style: italic;">Chưa chọn sản phẩm</span>
                                    </td>
                                    <td><span style="color: #9e9e9e; font-style: italic;">Chưa nhập ngân sách</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Chi tiết</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                        <h4 style="font-weight: bold; color: #00C851">Chiến dịch
                                            <small>(25/12/2017 - 06/01/2018)</small>
                                        </h4>
                                        </p>
                                        <p style="font-size: 9px; color: #9e9e9e; width: 100%; font-style: italic;"> Đã cập nhật 25/12/2017 | 21:34</p>

                                    </td>
                                    <td>
                                        0 <i class="fa fa-search"></i>&nbsp;
                                        2 <i class="fa fa-group"></i>&nbsp;
                                        12% <i class="fa fa-reply"></i>&nbsp;
                                    </td>
                                    <td>
                                        <div class="clearfix" style="margin-bottom: 5px;">
                                            <div class="a_lcontent_top_product_img pull-left" style="background-image: url(http://demo.ezimar.vn/public/upload/product/3383-ao-len-co-tron-han-quoc-1.jpg)"></div>
                                            <span class="a_lcontent_top_product_content truncate pull-left">RD - Raodee.com</span>
                                        </div>
                                        <div class="clearfix" style="margin-bottom: 5px;">
                                            <div class="a_lcontent_top_product_img pull-left" style="background-image: url(http://demo.ezimar.vn/public/upload/product/0-sa-d3-cd1a4e3be16d7fb32d2bd010a56a3a83.jpg)"></div>
                                            <span class="a_lcontent_top_product_content truncate pull-left">123 - xe may</span>
                                        </div>
                                    </td>
                                    <td>10,000,000 VND</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Chi tiết</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                        <h4 style="font-weight: bold; color: #00C851">Chiến dịch
                                            <small>(25/12/2017 - 06/01/2018)</small>
                                        </h4>
                                        </p>
                                        <p style="font-size: 9px; color: #9e9e9e; width: 100%; font-style: italic;"> Đã cập nhật 25/12/2017 | 21:34</p>
                                    </td>
                                    <td colspan="3">Bạn sắp hoàn thiện việc xây dựng Chiến dịch của mình.
                                        <button class="btn btn-success btn-sm">Hoàn thiện ngay</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Chi tiết</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
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

    <?php include 'include/inc_js.php'?>
</div>
</body>
</html>
