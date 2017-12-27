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

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
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
            string  = "<a class='remove-val btn btn-block btn-social btn-"+$value+"'><i class='fa fa-"+$value+"'></i> "+$value+"<i class='delete-val fa fa-times pull-right'></i></a>";
            $("#append-val").append(string);
            $("#myModal").modal('hide');
        });
    });
    $(document).on('click','.delete-val', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        $this.parents('a.remove-val').remove();
    });
</script>
<script src="plugins/iCheck/icheck.min.js"></script>
