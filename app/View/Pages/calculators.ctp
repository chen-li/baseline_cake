<?php echo $this->Html->script(array('tabs','cms','mortgage','stamp')); ?>
<?php echo $this->Html->css(array('tabs','cms')); ?>

<h1>Calculators</h1>

<div class="tab-container">
    <ul class="tabs">
      <li class="active"><a name="mortgage" rel="" href="#">Mortgage</a></li>
      <li><a name="stamp-duty" rel="" href="#">Stamp Duty</a></li>
    </ul>
    <div class="tab-content mortgage">
    <form method="post" action="">
      <p>
        <label>Amount of the loan ($):*</label>
        <input name="Loan" type="text" value="" size="10" />
      </p>
      <p>
        <label> Interest Rate (%):*</label>
        <input name="InterestRate" type="text" value="" size="10" />
      </p>
      <p>
        <label>Over how many years:*</label>
        <input name="Years" type="text" value="" size="10" />
      </p>
      <p class="submit">
        <input name="calc" value="Calculate mortgage" onclick="computeForm(this.form);" class="calc_btn curvy-all" type="button">
        &nbsp;&nbsp;
        <input name="reset" value="Reset" onclick="clearMortgageForm(this.form);" class="reset_btn curvy-all" type="reset">
      </p>
      <div class="result curvy-all">
      <h2>Your mortgage calculation</h2>
      <table>
      <tr>
        <td>Number of monthly payments:</td>
        <td><span id=""></span> <input name="Months" type="text" value="" size="3" />
          months</td>
      </tr>
      <tr>
        <td>Monthly payments of:</td>
        <td><input name="MonthlyPayment" type="text" value="0" size="10" /></td>
      </tr>
      <tr>
        <td>Amount of interest you will pay over the life of the loan:</td>
        <td><input name="InterestPaid" type="text" value="0" size="10" /></td>
      </tr>
      <tr>
        <td>Percent of the original loan the interest paid represents:</td>
        <td><input name="PercentLoan" type="text" value="0" size="10" /></td>
      </tr>
      <tr>
        <td>Percent of the entire amount paid the interest paid represents:</td>
        <td><input name="InterestPercent" type="text" value="0" size="10" /></td>
      </tr>
      </table>
      </div>
      </form>
    </div>
    <div class="tab-content stamp-duty">
    <form method="post" action="stamp.cfm">
      <p>
        <label>Amount borrowed ($):*  </label>
        <input name="amount" type="text" value="" size="10" />
      </p>
      <p>
        <label> Purchase price ($):* </label>
        <input name="property" type="text" value="" size="10" />&nbsp;&nbsp;
      </p>
      <p class="submit">
        <input value="Calculate stamp duty" onclick="computeStamp(this.form);" class="calc_btn curvy-all" type="button">
        &nbsp;&nbsp;
        <input value="Reset" onclick="clearStampForm(this.form);" class="reset_btn curvy-all" type="reset">
      </p>
      <div class="result curvy-all">
      <h2>Your stamp duty calculation</h2>
      <table>
      <tr>
        <td width="70">&nbsp;</td>
        <td align="center">Stamp duty on amount borrowed</td>
        <td align="center">Stamp duty on property purchase</td>
        <td align="center">Transfer fee</td>
        <td align="center">Total</td>
      </tr>
      <tr>
        <td>VIC</td>
        <td align="center"><input name="vicStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="vicStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="vicTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="vicTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>NSW</td>
        <td align="center"><input name="nswStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="nswStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="nswTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="nswTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>QLD</td>
        <td align="center"><input name="qldStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="qldStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="qldTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="qldTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>TAS</td>
        <td align="center"><input name="tasStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="tasStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="tasTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="tasTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>SA</td>
        <td align="center"><input name="saStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="saStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="saTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="saTotalDuty" type="text" value="" size="9" /></td>
      </tr>
      <tr>
        <td>WA</td>
        <td align="center"><input name="waStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="waStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="waTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="waTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>ACT</td>
        <td align="center"><input name="actStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="actStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="actTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="actTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>NT</td>
        <td align="center"><input name="ntStampDuty" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="ntStampDuty2" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="ntTransfer" type="text" value="" size="9" readonly="readonly" /></td>
        <td align="center"><input name="ntTotalDuty" type="text" value="" size="9" readonly="readonly" /></td>
      </tr>
      </table>
      </div>
      </form>
    </div>
  </div>