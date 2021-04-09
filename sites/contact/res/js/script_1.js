
				
		var iFields = new Array("cf_name", "cf_phone", "cf_info", "cf_email");
		var eFields = new Array("cf_email");		
		var nFields = new Array("phone");		
				
		var win = null;
		
		function NewCenteredWindow(mypage,myname,w,h,scroll)
		{
			LeftPosition=(screen.width)?(screen.width-w)/2:0;
			TopPosition=(screen.height)?(screen.height-h)/2:0;
			settings='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable';
			win=window.open(mypage,myname,settings);
		}	
		
		function MM_openBrWindow(theURL,winName,features)
		{
			window.open(theURL,winName,features);
		}
		
		function isNotEmpty(elem)
		{
			var delem=document.getElementById(elem);
			var str=delem.value;
			var tpe = delem.type;
			
			if(tpe == "checkbox" && delem.checked)
			{
				return true;
			}
			else if(tpe == "checkbox" && !delem.checked)
			{
				alert("Pentru a continua, trebuie s\u0103 accepta\u021bi condi\u021biile din regulament.");
			}
			var re=/.+/;
			if(!str.match(re))
			{
				
				return false;
			}
			else
			{
				return true;
			}
		}

		function isNumericVal(elem)
		{
        return isValidPhone(document.getElementById(elem).value)
    }

    function isValidPhone(str){
        if (!str || !/^[\d\(\)\s\+-]+$/.test(str)) {
            return false
        }

        var len = str.replace(/[^\d]/g, "").length
        return len >= 5 && len <= 33
    }
		
		function isEMailAddr(elem)
		{
			var delem = document.getElementById(elem);
			var str = delem.value;
			var re = /^[^\s]+@[^\s]+\.[^\s]{2,}$/;
			if(!str.match(re))
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		
        function isPcodeval(elem)
        {
          var delem = document.getElementById(elem).value;
          var test = delem.replace(/[^a-zA-Z0-9]/g,"");
          if(test.length>2)
          {
            return isPcodeValCtry(test);
          }
          return false;
        }
		
        function isPcodeValCtry(pcode)
        {
          var delem = document.getElementById("country");
          if (delem && Array.prototype.indexOf) {
            var str = delem.value;
            var test = new Array("FR", "MX");
            if (str && test.indexOf(str) !== -1) {
              pcode = pcode.replace(/[^\d]/g,"");
              return pcode.length > 4 && pcode !== "00000";
            }
          }
          return true;
        }
		
		
		function submitForm()
		{
		
			var eCounter=0;
			
			for (i=0; i< iFields.length; i++)
			{
				if(!isNotEmpty(iFields[i]))
					eCounter++;
			}
			
			if(eCounter>0)
			{
				alert("Toate c\u00e2mpurile \u00eensemnate cu stelu\u0163\u0103 trebuie completate.");
				return false;
			}
			else
			{
				for (i=0; i< eFields.length; i++)
				{
					if(!isEMailAddr(eFields[i]))
					{
						alert("Adresa de e-mail este incorect\u0103.\nV\u0103 rug\u0103m s\u0103 introduce\u021bi adresa exact\u0103, deoarece este necesar\u0103 \u00een procesul de verificare a comenzii.");
						return false;
					}
				}
				
				for (i=0; i< nFields.length; i++)
				{
					if(!isNumericVal(nFields[i]))
					{
						alert("Telefonul de contact este introdus incorect.\nV\u0103 rug\u0103m s\u0103 introduce\u021bi num\u0103rul corect, deoarece acesta este esen\u021bial \u00een procesul de verificare a comenzii.");
						return false;
					}
				}
				for(i=0;i<iFields.length;i++){
					if(iFields[i]=="pcode" && !isPcodeval(iFields[i]))
					{
						alert("Introduce\u021bi codul po\u0219tal corect");
						return false;
					}
				}
			}
			
			return true;
			
		}
	