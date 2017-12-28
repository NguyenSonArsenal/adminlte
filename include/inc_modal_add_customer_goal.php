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