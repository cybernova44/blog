

$(document).ready(function() {
    var isMx = false;
    var isRo = false;
    switch(country){
        case "MX": isMx=true;break;
        case "RO": isRo=true;break;
    }
    var iFields = new Array("name", "street", "street_nr", "surname", "pcode", "city", "phone", "email");
    if(isMx) iFields = new Array("name", "street", "street_nr", "surname", "pcode", "city", "phone", "email","colonia","state");
    var eFields = new Array("email");
    var nFields = new Array("phone");
    var validation = new Validation(iFields,eFields,nFields);
    if (isMx || isRo) validation = new Validation(iFields,eFields,nFields,country);
    $(".toStep2").click(function () {
        var fieldStep = [validation.checkInput("name"),validation.checkInput("surname"),validation.checkInput("phone")];
        if(isMx) fieldStep = [validation.checkInput("name"),validation.checkInput("surname"),validation.checkInput("phone2")];
        if(checkArray(fieldStep)) step2();
    });
    $("input").on("focus",function () {
        $(this).keypress(function (e) {
            if(e.which == 13){
                if($(".steps .one").hasClass("active")){
                    var fieldStep = [validation.checkInput("name"),validation.checkInput("surname"),validation.checkInput("phone")];
                    if(isMx) fieldStep = [validation.checkInput("name"),validation.checkInput("surname"),validation.checkInput("phone2")];
                    if(checkArray(fieldStep)){
                        if(typeof hideBanner != "undefined"){
                            hideBanner(b6);
                            hideBanner(b7);
                        }
                        step2();
                    }
                    e.preventDefault();
                }else{
                    if($(".steps .two").hasClass("active") || $(".steps .one").hasClass("active")){
                        // e.preventDefault(); b
                    }
                }
            }
        })
    });
});
function step2() {
    reset();
    if($("div").hasClass("promo-box")){
        $(".header, .headline, .section1, .section2, .section3, .section4, .section5, .section6, .section7, .section8, .section9, .opinion-box, .gps, .slider, .offer, .footer, .fly-box").fadeOut('fast');
        $(".promo-box").fadeIn("slow");
    }
    $(".steps .one").addClass("completed");
    $(".steps .one").removeClass("active");
    $(".steps .two").addClass("active");
    $(".line1").removeClass("dotted");
    $(".line1").addClass("solid");
    $(".step1").hide();
    $(".step2").fadeIn("slow");
    if(typeof b7afterForm != "undefined"){
        b7afterForm=false;
    }
}
function checkLastStep() {
    var isMx = false;
    switch(country){
        case "MX": isMx=true;break;
    }
    var iFields = new Array("name", "street", "street_nr", "surname", "pcode", "city", "phone", "email");
    if(isMx) iFields = new Array("name", "street", "street_nr", "surname", "pcode", "city", "phone", "email","colonia","state");
    var eFields = new Array("email");
    var nFields = new Array("phone");
    var validation = new Validation(iFields,eFields,nFields);
    var field = field = [validation.checkInput("email"),validation.checkInput("street"),validation.checkInput("street_nr"),validation.checkInput("pcode"),validation.checkInput("city")];
    switch(country){
        case "MX":
            field.push(validation.checkInput("state"),validation.checkInput("colonia"));
            break;
        case "RO":
            field.pop();
            field.push(validation.checkInput("sektor"),validation.checkInput("miejscowosc_ro"))
            break;
    }
    if(checkArray(field)){
        if(isMx){
            postback_core('state' ,fid);
            postback_core('colonia' ,fid);

            to_phone();
            var place = document.getElementById("place").value;
            var estado = document.getElementById("state").value;
            var colonia = document.getElementById("colonia").value;
            var notes = document.getElementById("note").value;
            place = "place: ["+place+"]";
            estado = ",estado: ["+estado+"]";
            colonia = ",colonia: ["+colonia+"]";
            document.getElementById("note").value=place+estado+colonia+", "+notes;
        }
        field_for_ro();
        return validation.submitForm();
    }
    else return false;
}
$(".input-box input").on("input",function () {
    $(this).removeClass("input-error");
});
function reset() {
    var array = $(".input-box input");
    for (var a=0;a<array.length;a++){
        $(array[a]).removeClass("input-error");
    }
}
function checkArray(array) {
    var counter = 0;
    for (var a=0;a<array.length;a++){
        if(!array[a]) counter++;
    }
    if(counter>0) return false;
    else return true;
}
function to_phone() {
    var p1 = document.getElementById("phone2").value;
    var p2 = document.getElementById("phone5").value;
    var p3 = document.getElementById("phone1").value;
    if(p1.length>=10){
        p1 = p3+"-"+p1;
        document.getElementById("phone").value=p1;
        fid++;
        postback_core("phone",fid);
        if(p2.length>=5) {
            p2 = p3 + "-" + p2;
            var notePhone = `phone_number: [${p2}]`;
            document.getElementById("note").value=notePhone;
        }
    }
}
function field_for_ro() {
    var isRo = false;
    switch(country){
        case "RO": isRo=true;break;
    }
    if(isRo){
        var blok    =  document.getElementById('blok_ro').value,
            strada  =  document.getElementById('home_nr').value,
            nr	=  document.getElementById('street_nr').value,
            scara   =  document.getElementById('scara_ro').value,
            etaj    =  document.getElementById('pietro_ro').value,
            ap      =  document.getElementById('ap_ro').value,
            town    =  (document.getElementById('miejscowosc_ro')).value,
            sektor  =  document.getElementById('sektor').value,
            address =  document.getElementById('address'),
            city    =  document.getElementById('city');
        var isBlok  = (blok == '') ? '' : (', Bloc: ' + blok);
        var isScara = (scara == '') ? '' : (', Scară: ' + scara);
        var isEtaj  = (etaj == '') ? '' : (', Etaj: ' + etaj);
        var isAp    = (ap == '') ? '' : (', Ap: ' + ap);

        var all =  'Stradă: ' + strada + ', Număr: ' + nr + isBlok + isScara + isEtaj + isAp;
        address.value = all;
        city.value = town;
        note.value = 'Province: ' + '['+sektor+']';
        fid++;
        postback_core('city' ,fid);
    }
}
