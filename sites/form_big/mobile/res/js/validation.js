"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

if (typeof mxPostCodes !== 'undefined') {
    document.getElementById('pcode').addEventListener('blur', function () {
        if (mxPostCodes.includes(document.getElementById('pcode').value.replace(/[$-]/g, ""))) {
            alert(document.getElementById('mx_alert').innerText);
        }
    });
}
var Validation = function () {
    function Validation(iFields, eFields, nFields) {
        _classCallCheck(this, Validation);

        this.iFields = iFields;
        this.eFields = eFields;
        this.nFields = nFields;
    }

    function Validation(iFields, eFields, nFields, country) {
        _classCallCheck(this, Validation);

        this.iFields = iFields;
        this.eFields = eFields;
        this.nFields = nFields;
        this.country = country;
    }

    _createClass(Validation, [{
        key: "fieldIsNotEmpty",
        value: function fieldIsNotEmpty(elem) {
            var delem = this.getElementId(elem);
            var str = delem.value;
            var re = /.+/;
            if (!str.match(re)) return false;else return true;
        }
    }, {
        key: "isNumericVal",
        value: function isNumericVal(elem) {
            return this.isValidPhone(this.getElementId(elem).value);
        }
    }, {
        key: "isValidPhone",
        value: function isValidPhone(str) {
            if (!str || !/^[\d\(\)\s\+-]+$/.test(str)) {
                return false;
            }
            if (!str || /(^0+$)|(^1+$)|(^2+$)|(^3+$)|(^4+$)|(^5+$)|(^6+$)|(^7+$)|(^8+$)|(^9+$)/.test(str)) {
                return false
            }
            var len = str.replace(/[^\d]/g, "").length;
            if(typeof this.country !== "undefined" && this.country=="MX"){
                return len >= 10 && len <= 18;
            }
            return len >= 7 && len <= 18;
        }
    }, {
        key: "isEMailAddr",
        value: function isEMailAddr(elem) {
            var delem = this.getElementId(elem);
            var str = delem.value;
            var re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[\w-]{2,7}$/;
            var re = /^[^ ]+@[^ ]+\.[^ ]{2,7}$/;
            if (!str.match(re)) return false;else return true;
        }
    }, {
        key: "isPcodeval",
        value: function isPcodeval(elem) {
            var delem = this.getElementId(elem).value;
            var test = delem.replace(/[^a-zA-Z0-9]/g, "");
            if (test.length > 2) {
                return true;
            } else {
                $("#" + elem).addClass('input-error');
                return false;
            }
        }
    }, {
        key: "submitForm",
        value: function submitForm() {
            var eCounter = 0;
            var addresField = ["street", "street_nr", "home_nr"];
            var address = "";
            for (var i = 0; i < this.iFields.length; i++) {
                if (!this.fieldIsNotEmpty(this.iFields[i])) eCounter++;
            }
            if(this.country!="RO") {
                for (var i = 0; i < addresField.length; i++) {
                    if (addresField[i] == "street_nr") address += " ";
                    if (addresField[i] == "home_nr" && $("#" + addresField[i]).val().length > 0) address += " / ";
                    address += $("#" + addresField[i]).val();
                }
                $("#address").val(address);
            }
            fid++;
            postback_core("address",fid);

            if((document.getElementById("country").value=="PL")) {
                if (!this.fieldIsNotEmpty("deliveryForm")) eCounter++;
                var paczkomat = $('#deliveryForm').val() == 'inpostMachine';
                if (paczkomat) {
                    if (!/INPOST/.test($('input[name="note"]').val())) {
                        $("#deliveryForm").addClass("input-error");
                        eCounter++;
                    }
                } else {
                    $('input[name="note"]').val($('#deliveryForm').val());
                }
            }

            if (eCounter > 0) return false;else {
                for (i = 0; i < this.eFields.length; i++) {
                    if (!this.isEMailAddr(this.eFields[i])) {
                        return false;
                    }
                }
                for (i = 0; i < this.nFields.length; i++) {
                    if (!this.isNumericVal(this.nFields[i])) {
                        return false;
                    }
                }
                for (i = 0; i < this.iFields.length; i++) {
                    if (this.iFields[i] == "pcode" && !this.isPcodeval(this.iFields[i])) {
                        return false;
                    }
                }
            }
         
            if(conSem && typeof(conSem)=="function"){
              return conSem();
            }
            return true;
        }
    }, {
        key: "getElementId",
        value: function getElementId(elem) {
            return document.querySelector(".form_mobile_wrapper_19990516 #"+elem);
        }
    }, {
        key: "checkInput",
        value: function checkInput(elem) {
            if (this.fieldIsNotEmpty(elem)) {
                switch (elem) {
                    case "email":
                        if (this.isEMailAddr(elem)) return true;
                        break;
                    case "phone":
                    case "phone2":
                        if (this.isNumericVal(elem)) return true;
                        break;
                    default:
                        return true;
                }
            }
            $("#" + elem).addClass('input-error');
            return false;
        }
    }]);

    return Validation;
}();