function computeStamp(form)
{
      if (form.property.value == null || form.property.value.length == 0)
form.property.value = 0;
      if (form.amount.value == null || form.amount.value.length == 0)
form.amount.value = 0;

      form.nswStampDuty.value = 0;
      form.vicStampDuty.value = 0;
      form.qldStampDuty.value = 0;
      form.saStampDuty.value = 0;
      form.waStampDuty.value = 0;
      form.ntStampDuty.value = 0;
      form.actStampDuty.value = 0;
      form.tasStampDuty.value = 0;
      form.nswStampDuty2.value = 0;
      form.vicStampDuty2.value = 0;
      form.qldStampDuty2.value = 0;
      form.saStampDuty2.value = 0;
      form.waStampDuty2.value = 0;
      form.ntStampDuty2.value = 0;
      form.actStampDuty2.value = 0;
      form.tasStampDuty2.value = 0;
      form.nswTransfer.value = 0;
      form.vicTransfer.value = 0;
      form.qldTransfer.value = 0;
      form.saTransfer.value = 0;
      form.waTransfer.value = 0;
      form.ntTransfer.value = 0;
      form.actTransfer.value = 0;
      form.tasTransfer.value = 0;

      var tempAmount = form.amount.value;
      var tempProperty = form.property.value;

      if (form.amount.value >0 && form.amount.value <= 16000)
form.nswStampDuty.value = 5;
      if (form.amount.value > 16000)
{
 tempAmount = (tempAmount - 16000) / 1000;
 for (var i=0, k=1; tempAmount >i && tempAmount > k ; i++, k++);
 form.nswStampDuty.value = (k * 4) + 5;
}

      if (form.property.value >0 && form.property.value <= 14000)
{
    tempProperty = (tempProperty / 100);
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.nswStampDuty2.value = eval(form.nswStampDuty2.value) + (k * 1.25);
      }

      if (form.property.value > 14000 && form.property.value <= 30000)
{
    tempProperty = (tempProperty - 14000) / 100;
    for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.nswStampDuty2.value = eval(form.nswStampDuty2.value) + (k * 1.5) + 175;
       }

      if (form.property.value > 30000 && form.property.value <= 80000)
{
        tempProperty = (tempProperty - 30000) / 100;
    for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.nswStampDuty2.value = eval(form.nswStampDuty2.value) + (k * 1.75) + 415;
      }

      if (form.property.value > 80000 && form.property.value <= 300000)
{
tempProperty = (tempProperty - 80000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.nswStampDuty2.value = eval(form.nswStampDuty2.value) + (k * 3.5) + 1290;
       }

      if (form.property.value > 300000 && form.property.value <= 1000000)
{
tempProperty = (tempProperty - 300000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.nswStampDuty2.value = eval(form.nswStampDuty2.value) + (k * 4.5) + 8990;
      }
if (form.property.value > 1000000)
 {
tempProperty = (tempProperty - 1000000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.nswStampDuty2.value = eval(form.nswStampDuty2.value) + (k * 5.5) + 40490;
      }

form.nswTransfer.value = 56;

tempAmount = form.amount.value;
tempProperty = form.property.value;
if (form.amount.value >0 && form.amount.value <= 10000)
  form.vicStampDuty.value = 4;

if (form.amount.value > 10000)
{
        tempAmount = (tempAmount - 10000) / 200;
        for (var i=0, k=1; tempAmount >i && tempAmount > k ; i++, k++);
        form.vicStampDuty.value = 4 + (k * 0.8);
}

if (form.property.value >0 && form.property.value <= 20000)
{
        form.vicStampDuty2.value = eval(tempProperty) * 0.014;
}

if (form.property.value > 20000 && form.property.value <=115000)
{
        tempProperty = (tempProperty - 20000);
        form.vicStampDuty2.value = eval(tempProperty) * 0.024 + 280;
}

if (form.property.value > 115000 && form.property.value <=870000)
{
        tempProperty = (tempProperty - 115000);
        form.vicStampDuty2.value = eval(tempProperty) * 0.06 + 2560;
}

if (form.property.value > 870000)
{
        form.vicStampDuty2.value = eval(tempProperty) * 0.055;
}


tempProperty = form.property.value;
if (form.property.value >0 && form.property.value <= 500000)
        form.vicTransfer.value = (tempProperty / 1000) * 2.46 + 90;
if (form.property.value > 500000)
        form.vicTransfer.value = 1320;

tempAmount = form.amount.value;
tempProperty = form.property.value;
tempAmount *= 0.004;
      form.qldStampDuty.value = tempAmount;

      if (form.property.value >0 && form.property.value <= 250000)
{
        tempProperty = (tempProperty / 100);
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.qldStampDuty2.value = eval(form.qldStampDuty2.value) + (k * 1.0);
      }
      if (form.property.value > 250000 && form.property.value < 500000)
{
tempProperty = (tempProperty - 250000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.qldStampDuty2.value = eval(form.qldStampDuty2.value) + (k * 3.5) + 2500;
      }
      if (form.property.value >= 500000)
{
tempProperty = (tempProperty - 500000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.qldStampDuty2.value = eval(form.qldStampDuty2.value) + (k * 3.75) + 11250;
      }

      tempProperty = form.property.value;
      if (form.property.value <= 180000)
form.qldTransfer.value = 87;
      if (form.property.value > 180000)
{
tempProperty = (tempProperty - 180000) / 10000;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.qldTransfer.value = eval(form.qldTransfer.value) + (k * 20) + 87;
       }

      tempAmount = form.amount.value;
      tempProperty = form.property.value;
      if (form.amount.value <= 400)
form.saStampDuty.value = 0;
      if (form.amount.value > 400 && form.amount.value <= 4000)
form.saStampDuty.value = 10;
      if (form.amount.value > 4000 && form.amount.value <= 10000)
{
tempAmount = (tempAmount - 4000) / 100;
for (var i=0, k=1; tempAmount >i && tempAmount > k ; i++, k++);
form.saStampDuty.value = (k * 0.25) + 10;
      }
      if (form.amount.value > 10000)
{
tempAmount = (tempAmount - 10000) / 100;
for (var i=0, k=1; tempAmount >i && tempAmount > k ; i++, k++);
form.saStampDuty.value = (k * 0.35) + 25.00000000000001;
      }

      if (form.property.value >0 && form.property.value <= 12000)
{
tempProperty = (tempProperty / 100);
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saStampDuty2.value = eval(form.saStampDuty2.value) + (k * 1);
      }
      if (form.property.value > 12000 && form.property.value <=30000)
{
tempProperty = (tempProperty - 12000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saStampDuty2.value = eval(form.saStampDuty2.value) + (k * 2) + 120;
      }
      if (form.property.value > 30000 && form.property.value <=50000)
{
tempProperty = (tempProperty - 30000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saStampDuty2.value = eval(form.saStampDuty2.value) + (k * 3) + 480;
      }
      if (form.property.value > 50000 && form.property.value <=100000)
{
tempProperty = (tempProperty - 50000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saStampDuty2.value = eval(form.saStampDuty2.value) + (k * 3.5) + 1080;
      }
      if (form.property.value > 100000 && form.property.value <=1000000)
{
tempProperty = (tempProperty - 100000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saStampDuty2.value = eval(form.saStampDuty2.value) + (k * 4) + 2830;
      }
      if (form.property.value > 1000000)
{
tempProperty = (tempProperty - 1000000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saStampDuty2.value = eval(form.saStampDuty2.value) + (k * 4.5) + 38830;
      }

      tempProperty = form.property.value;

if (form.property.value <= 5000)
form.saTransfer.value = 80;
      if (form.property.value > 5000 && form.property.value <= 20000)
form.saTransfer.value = 90;
      if (form.property.value > 20000 && form.property.value <= 40000)
form.saTransfer.value = 100;
      if (form.property.value > 40000 && form.property.value <= 50000)
form.saTransfer.value = 142;
      if (form.property.value > 50000) {
tempProperty = (tempProperty - 50000) / 10000;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.saTransfer.value = (k * 45) + 142;
}

tempAmount = form.amount.value;
tempProperty = form.property.value;
form.waStampDuty.value = tempAmount * 0.0025;

      if (form.property.value >0 && form.property.value <= 80000)
{
tempProperty = (tempProperty / 100);
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.waStampDuty2.value = eval(form.waStampDuty2.value) + (k * 1.95);
      }
      if (form.property.value > 80000 && form.property.value <= 100000)
{
tempProperty = (tempProperty - 80000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.waStampDuty2.value = eval(form.waStampDuty2.value) + (k * 2.85) + 1560;
      }
      if (form.property.value > 100000 && form.property.value <= 250000)
{
tempProperty = (tempProperty - 100000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.waStampDuty2.value = eval(form.waStampDuty2.value) + (k * 3.7) + 2130;
      }
      if (form.property.value > 250000 && form.property.value <= 500000)
{
tempProperty = (tempProperty - 250000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.waStampDuty2.value = eval(form.waStampDuty2.value) + (k * 4.55) + 7680;
      }
      if (form.property.value > 500000)
{
tempProperty = (tempProperty - 500000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.waStampDuty2.value = eval(form.waStampDuty2.value) + (k * 4.85) + 19055;
      }

      tempProperty = form.property.value;
      if (form.property.value <= 85000)
form.waTransfer.value = 64;
      if (form.property.value > 85000 && form.property.value <= 120000)
form.waTransfer.value = 74;
      if (form.property.value > 120000 && form.property.value <= 200000)
form.waTransfer.value = 94;
      if (form.property.value > 200000)
{
tempProperty = (tempProperty - 200000) / 100000;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.waTransfer.value = (k * 20) + 94;
      }

 tempAmount = form.amount.value;
 tempProperty = form.property.value;
      form.ntStampDuty.value = 0;

      tempProperty /= 1000;

      var tempP = tempProperty;
      tempProperty *= tempProperty;

        if (form.property.value <= 500000 )
  {
        form.ntStampDuty2.value = eval(tempProperty * 0.065) + eval(21 * tempP);
        }

        if (form.property.value > 500000)
  {
  form.ntStampDuty2.value = (form.property.value * 0.054);
        }
        form.ntTransfer.value = 90;

tempAmount = form.amount.value;
tempProperty = form.property.value;
      form.actStampDuty.value = 0;

      if (form.property.value >0 && form.property.value <= 14000)
{
tempProperty = (tempProperty / 100);
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.actStampDuty.value = eval(form.actStampDuty.value) + (k * 1.25);
      }
      if (form.property.value > 14000 && form.property.value <= 30000)
{
tempProperty = (tempProperty -1400) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.actStampDuty2.value = eval(form.actStampDuty2.value) + (k * 1.5) + 175;
      }
      if (form.property.value > 30000 && form.property.value <= 60000)
{
tempProperty = (tempProperty - 30000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.actStampDuty2.value = eval(form.actStampDuty2.value) + (k * 2) + 415;
      }
      if (form.property.value > 60000 && form.property.value <= 100000)
{
tempProperty = (tempProperty - 60000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.actStampDuty2.value = eval(form.actStampDuty2.value) + (k * 2.5) + 1015;
      }
      if (form.property.value > 100000 && form.property.value <= 300000)
{
tempProperty = (tempProperty - 100000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.actStampDuty2.value = eval(form.actStampDuty2.value) + (k * 3.5) + 2015;
      }
      if (form.property.value > 300000 && form.property.value <= 1000000)
{
tempProperty = (tempProperty - 300000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.actStampDuty2.value = eval(form.actStampDuty2.value) + (k * 4.5) + 9015;
      }

      form.actTransfer.value = 140;

tempAmount = form.amount.value;
tempProperty = form.property.value;
      if (form.amount.value >0 && form.amount.value <= 8000)
form.tasStampDuty.value = 20;
      if (form.amount.value > 8000 && form.amount.value <= 10000)
{
tempAmount = (tempAmount - 8000) / 100;
for (var i=0, k=1; tempAmount >i && tempAmount > k ; i++, k++);
form.tasStampDuty.value = (k * 0.25) + 20.00000000000001;
}
      if (form.amount.value > 10000)
{
tempAmount = (tempAmount - 10000) / 100;
for (var i=0, k=1; tempAmount >i && tempAmount > k ; i++, k++);
form.tasStampDuty.value = (k * 0.35) + 25.00000000000001;
      }

      if (form.property.value >0 && form.property.value <= 1300)

form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + 20;
      if (form.property.value > 1300 && form.property.value <= 10000)
{
tempProperty = (tempProperty - 1300) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + (k * 1.5) + 20;
      }
      if (form.property.value > 10000 && form.property.value <= 30000)
{
tempProperty = (tempProperty - 10000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + (k * 2) + 150;
      }
      if (form.property.value > 30000 && form.property.value <= 75000)
{
tempProperty = (tempProperty - 30000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + (k * 2.5) + 550;
      }
      if (form.property.value > 75000 && form.property.value <= 150000)
{
tempProperty = (tempProperty - 75000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + (k * 3) + 1675;
      }
      if (form.property.value > 150000 && form.property.value <= 225000)
{
tempProperty = (tempProperty - 150000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + (k * 3.5) + 3925;
      }
      if (form.property.value > 225000)
{
tempProperty = (tempProperty - 225000) / 100;
for (var i=0, k=1; tempProperty >i && tempProperty > k ; i++, k++);
form.tasStampDuty2.value = eval(form.tasStampDuty2.value) + (k * 4) + 6550;
      }

      form.tasTransfer.value = 130;

form.nswTotalDuty.value = eval(form.nswStampDuty.value) + eval(form.nswStampDuty2.value) + eval(form.nswTransfer.value);
form.vicTotalDuty.value = eval(form.vicStampDuty.value) + eval(form.vicStampDuty2.value) + eval(form.vicTransfer.value);
form.qldTotalDuty.value = eval(form.qldStampDuty.value) + eval(form.qldStampDuty2.value) + eval(form.qldTransfer.value);
form.saTotalDuty.value = eval(form.saStampDuty.value) + eval(form.saStampDuty2.value) + eval(form.saTransfer.value);
form.waTotalDuty.value = eval(form.waStampDuty.value) + eval(form.waStampDuty2.value) + eval(form.waTransfer.value);
form.ntTotalDuty.value = eval(form.ntStampDuty.value) + eval(form.ntStampDuty2.value) + eval(form.ntTransfer.value);
form.actTotalDuty.value = eval(form.actStampDuty.value) + eval(form.actStampDuty2.value) + eval(form.actTransfer.value);
form.tasTotalDuty.value = eval(form.tasStampDuty.value) + eval(form.tasStampDuty2.value) + eval(form.tasTransfer.value);

form.nswStampDuty.value = format(round(form.nswStampDuty.value));
form.vicStampDuty.value = format(round(form.vicStampDuty.value));
form.qldStampDuty.value = format(round(form.qldStampDuty.value));
form.saStampDuty.value = format(round(form.saStampDuty.value));
form.waStampDuty.value = format(round(form.waStampDuty.value));
form.ntStampDuty.value = format(round(form.ntStampDuty.value));
form.actStampDuty.value = format(round(form.actStampDuty.value));
form.tasStampDuty.value = format(round(form.tasStampDuty.value));

form.nswStampDuty2.value = format(round(form.nswStampDuty2.value));
form.vicStampDuty2.value = format(round(form.vicStampDuty2.value));
form.qldStampDuty2.value = format(round(form.qldStampDuty2.value));
form.saStampDuty2.value = format(round(form.saStampDuty2.value));
form.waStampDuty2.value = format(round(form.waStampDuty2.value));
form.ntStampDuty2.value = format(round(form.ntStampDuty2.value));
form.actStampDuty2.value = format(round(form.actStampDuty2.value));
form.tasStampDuty2.value = format(round(form.tasStampDuty2.value));

form.nswTotalDuty.value = format(round(form.nswTotalDuty.value));
form.vicTotalDuty.value = format(round(form.vicTotalDuty.value));
form.qldTotalDuty.value = format(round(form.qldTotalDuty.value));
form.saTotalDuty.value = format(round(form.saTotalDuty.value));
form.waTotalDuty.value = format(round(form.waTotalDuty.value));
form.ntTotalDuty.value = format(round(form.ntTotalDuty.value));
form.actTotalDuty.value = format(round(form.actTotalDuty.value));
form.tasTotalDuty.value = format(round(form.tasTotalDuty.value));

form.nswTransfer.value = format(round(form.nswTransfer.value));
form.vicTransfer.value = format(round(form.vicTransfer.value));
form.qldTransfer.value = format(round(form.qldTransfer.value));
form.saTransfer.value = format(round(form.saTransfer.value));
form.waTransfer.value = format(round(form.waTransfer.value));
form.ntTransfer.value = format(round(form.ntTransfer.value));
form.actTransfer.value = format(round(form.actTransfer.value));
form.tasTransfer.value = format(round(form.tasTransfer.value));
$('.stamp-duty .result').slideDown(200);
  }

  function format(number)
  {
if (number.length > 9 && number.length <= 12)
{
   number = "$" + (number.substring(0,number.length-9) +
   "," + number.substring(number.length-9,number.length-6) +
   "," + number.substring(number.length-6,number.length));
   return number;
}

if (number.length > 6 && number.length <= 9)
{
        number = "$" + (number.substring(0,number.length-6) +
        "," + (number.substring(number.length-6,number.length)));
        return number;
}
return "$" + number;
  }

  function round(number)
  {
var dollars = Math.floor(number);
for (var decimalAt = 0; decimalAt < number.length; decimalAt++)
{
        if (number.charAt(decimalAt)==".")
        break;
}
var cents = "" + Math.round(number * 100);
cents = cents.substring(cents.length-2, cents.length);
dollars += ((number.charAt(decimalAt+2)=="9")&&(cents=="00"))? 1 : 0;
return (dollars + "." + cents)
  }


  function clearStampForm(form)
  {
	form.amount.value = "";
	form.property.value = "";
	$('.stamp-duty .result').slideUp();
  }