<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/raphael/raphael.min.js"></script>

<script src="bower_components/morris.js/morris.min.js"></script>

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>

<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<!-- boostrap toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- noUiSlider -->
<script src="bower_components/noUiSlider/nouislider.min.js"></script>

<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Dropzone -->
<script src="bower_components/dropzone/dropzone.js"></script>



<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>

<script src="plugins/iCheck/icheck.min.js"></script>

<script>
    $(function () {
        $(".datepicker").datepicker();
    });

    $(function () {
        $('.val-li').click(function () {
            $value = '';
            string = '';
            $value = $(this).attr('data-content');
            var html = $value;
            string = '<div class="box-item" style="margin-bottom: 10px;">\n' +
                '                                            <div class=\'col-md-4\' style=\'margin-left: -15px;\'>\n' +
                '                                                <a class=\'remove-val btn btn-xs btn-block btn-social btn-' + $value + ' pull-right\' style=\'height: 30px; line-height: 25px; \'>\n' +
                '                                                    <i class=\'fa fa-' + $value + '\' style="line-height: 30px;"></i> ' + $value + ' <i class=\'delete-val fa fa-times pull-right\' style=\'line-height: 25px;\'></i>\n' +
                '                                                </a>\n' +
                '                                            </div>\n' +
                '                                            <div class=\'col-md-4\'>\n' +
                '                                                <select class=\'form-control pull-right input-sm\' style=\'width:80px;text-align:right;margin-left:10px;\'>\n' +
                '                                                    <option>VND</option>\n' +
                '                                                    <option>USD</option>\n' +
                '                                                </select>\n' +
                '                                                <input type=\'text\' class=\'form-control input-sm pull-right\' placeholder=\'100.000\' style=\'width:130px;text-align:right;\'>\n' +
                '                                            </div>\n' +
                '                                            <div class="clearfix"></div>\n' +
                '                                        </div>\n';
            $("#append-val").append(string);
            $("#modal_add_route").modal('hide');
        });

        $(document).on('click', '.delete-val', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var $this = $(this);
            $this.parents('div.box-item').remove();
        });
    });

    // customer_goal page modal
    $(document).ready(function() {

        // slider-age
        var limitSlider = document.getElementById('slider-age');

        noUiSlider.create(limitSlider, {
            start: [16, 50], // 2 point to start
            connect: true, // control the (green) bar between the handles
            tooltips: true,
            step: 1,
            format: {
                from: function(value) {
                    return parseInt(value);
                },
                to: function(value) {
                    return parseInt(value);
                }
            },
            range: {
                'min': 0,
                'max': 65
            }
        });

        // Select2
        $("#e1").select2();

    });

    // product page modal
    // preview image before upload product modal
    $(function () {
        $('#btn-to-up-file').click(function () {
            console.log('clicked');
            function readURL(input) {

                console.log(input.files[0]);

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".preview-image").change(function() {
                readURL(this);
            });
        })
    })

</script>
