function cleanup(In) {
                var B = ""  // out-string
                var C = ""  // temp char
                var Point =  false
                var Allowed = "0123456789"
                var Permitted = null
                for ( var i = 0 ; i <= In.length ; i++ )
                 { C = In.charAt(i)   // a char at position i
                   // check if C is an allowed char by finding its position in a string of
                   // allowed chars such as "0123456789."
                   if (!Point) Permitted = Allowed + "." ; else Permitted = Allowed
                   // Build up the outstring B by a line conditional on C being legal
                   if (Permitted.indexOf(C) != -1) B += C
                   if (C == ".") Point = true
                   // allow only one "." by setting a var Point = true
                   // which then disallows another "."
                 }
                return (B)
                }
                
                function formatDollar (Val, DollarSign)  {
                        Val=""+Val;
                        if (Val.indexOf (".", 0)!=-1) {
                    Dollars = Val.substring(0, Val.indexOf (".", 0));
                    Cents = Val.substring(Val.indexOf (".", 0)+1, Val.indexOf (".", 0)+3);
                    if (Cents.length==0)
                Cents="00";
                    if (Cents.length==1)
                Cents=Cents+"0";
                        } else {
                    Dollars = Val;
                        Cents = "00";
                    }
                        OutString="";
                        len=Dollars.length;
                        if (len>=3) {
                    while (len>0) {
                TempString=Dollars.substring(len-3, len)
                    if (TempString.length==3) {
                        OutString=","+TempString+OutString
                    len=len-3;
                } else {
                        OutString=TempString+OutString
                        len=0
                }
                    }
                    if (OutString.substring(0, 1)==",")
                Dollars=OutString.substring (1, OutString.length)
                        else
                Dollars=OutString
                    }
                        if (DollarSign)
                    return ("$"+Dollars+"."+Cents);
                        else
                    return ("$"+Dollars+"."+Cents);
                }
                
                function roundnumber(number_value,places)
                      {
                         number_value = (Math.round(number_value * (Math.pow(10 ,places)))) / Math.pow(10 ,places)
                      return(number_value)
                      }
                
                function computeForm(form)
                {
					  if (form.Loan.value == null || form.Loan.value.length == 0)
						form.Loan.value = 10000;
					  if (form.InterestRate.value == null || form.InterestRate.value.length == 0)
						form.InterestRate.value = 0.6;
					  if (form.Years.value == null || form.Years.value.length == 0)
						form.Years.value = 5;
						var intRate = cleanup(form.InterestRate.value) / 100 / 12;
						var p = form.Years.value * 12;
							var x = cleanup(form.Loan.value) * intRate * Math.pow(1 + intRate, p);
						var y = Math.pow(1 + intRate, p) - 1;
							var z = x / y;
						var a = p * z;
						var b = a - cleanup(form.Loan.value);
						var c = b / cleanup(form.Loan.value) * 100;
						var d = b / a *100;
						form.MonthlyPayment.value = formatDollar(z);
						form.InterestPaid.value = formatDollar(b);
						form.PercentLoan.value = roundnumber(c, 1) + "%";
						form.InterestPercent.value = roundnumber(d, 1) +"%";
						form.Months.value= p;
						$('.mortgage .result').slideDown(200);
                }
                
                function clearMortgageForm(form)
                {
                    form.Loan.value = "0";
                    form.InterestRate.value = "0";
                    form.Years.value = "0";
                    form.InterestPaid.value = ""
                    form.MonthlyPayment.value=""
                    form.Months.value=""
                    form.PercentLoan.value ="";
                    form.InterestPercent.value ="";
					$('.mortgage .result').slideUp(200);
                }