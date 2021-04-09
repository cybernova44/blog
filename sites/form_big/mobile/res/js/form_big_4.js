window.onload = paczkomat();

function paczkomat() {
    var pay = document.getElementById('pay-form');

    if (document.getElementById("country").value != "PL") {
        pay.style.display = 'none';
    }
    else {
        pay.style.display = 'table-row';
    }
}

function form_pay() {
    if ($('#deliveryForm').val() == 'ruchStand') $('#ruchButtonShow').removeAttr('style');
    else $('#ruchButtonShow').css('display', 'none');

    if ($('#deliveryForm').val() != 'inpostMachine') {
        $('.inpostButtonShowClick').text('Wybierz paczkomat');
    }
}

function update_data(field) {
    return;
}

var pcode = document.getElementById('pcode');
if (pcode && !pcode.onchange) {
    if (pcode.onblur && !/postback/.test(pcode.onblur.toString())) {
        pcode.onchange = function (e) {
            update_data(e.target);
        };
    }
}
