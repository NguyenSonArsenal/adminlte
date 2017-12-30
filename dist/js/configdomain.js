$(document).ready(function() {
    // page config domain
    $('#btn-process-add-domain').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('clicked');
        var $this = $(this);
        $this.hide();
        $('#input-add-domain-default').hide();
        $('#input-add-domain').show();
    });
});