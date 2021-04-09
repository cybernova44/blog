window.onbeforeunload = function(e) {
        setTimeout(function() {
            setTimeout(function() {

                $('.buttonSmall')[0].click();
                window.onbeforeunload = null;

            }, 100)
        }, 500);
        e.returnValue = ''
    }

$('a').on('click', function() {
    window.onbeforeunload = null;
});