$(document).ready(function() {
    var limitSlider = document.getElementById('slider-age');

    function data ( element, key ) {
        return element.getAttribute('data-' + key);
    }

    noUiSlider.create(limitSlider, {
        start: [16, 50], // 2 point to start
        connect: true, // control the (green) bar between the handles
        tooltips: true,
        //step: Number(data(slider, 'step')) || 1,
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


    // Select2 modal
    $("#e1").select2();

});

