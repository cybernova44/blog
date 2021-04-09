
function isNotEmpty(elem) {
var delem = document.getElementById(elem);
var str = delem.value;
var re = /.+/;
if(!str.match(re)) {
return false;
} else {
return true;
}
}

function isEMailAddr(elem) {
var delem = document.getElementById(elem);
var str = delem.value;
var re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
if (!str.match(re)) {
return false;
} else {
return true;
}
}

function submitForm() {
var eCounter = 0;
if (!isNotEmpty('cf_name')) eCounter++;
if (!isNotEmpty('cf_phone')) eCounter++;
if (!isNotEmpty('cf_info')) eCounter++;
if (!isEMailAddr('cf_email')) eCounter++;

if(eCounter > 0) {
alert('Tutti i campi del questionario, contrassegnati con un asterisco, devono essere debitamente compilati.');
return false;
} else {
return true;
}
}

