<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{
          box-sizing: border-box;
    }
      .col-lg-6{
        width:50%;
        float:left;
        padding-left: 10px;
        padding-right: 10px;
        position: relative;
min-height: 1px;
      }
      table, td, th {
          border: 1px solid black;
      }

      table {
          border-collapse: collapse;
          width: 100%;
      }
      td{
        font-size: 11px;
        font-weight: bold;
      }
      .col-lg-12{
        width:100%;
        float:left;
        position: relative;
min-height: 1px;
      }
      label {
    position: relative;
    padding-left: 16px;
}
#check_me{
  margin-left: 12px;
}

label::before {
    content : "";
    display: inline-block;
    width: 10px;
    height: 10px;
    background-color: white;
    border: solid 1px #9C9C9C;
    position: absolute;
    top: 1px;
    left: 0px;
}
label::after {
    content: "";
    width: 8px;
    height: 8px;
    background-color: #666666;
    position: absolute;
    left: 2px;
    top: 3px;
    display: none;
}

input[type=checkbox] {
    visibility: hidden;
    position: absolute;
}

input[type=checkbox]:checked + label::after {
    display: block;
}

input[type=checkbox]:active + label::before {
    background-color: #DDDDDD;
}
div.page_break + div.page_break{
    page-break-before: always;
}

    </style>
  </head>
  <body style="border:8px solid black;height:600px;">
      <div class="col-lg-6">
        <h3 style="margin-top:10px;margin-bottom:10px;">SALES ORDER SLIP</h3>
        <table>
          <tr>
            <td>SALES ORDER NUMBER</td>
            <td style="padding-right:100px;"></td>
          </tr>
          <tr>
            <td>RELATED MARKETING ORDER NO.</td>
            <td></td>
          </tr>
          <tr>
            <td>DATE OF ISSUE:</td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="col-lg-6">
        <p>COPY FOR:</p>

        <img src="images/sfi.png" alt="" style="width:90%;">
      </div>
      <table style="margin-top:120px;">
        <tr style="background:black;color:white;text-align:center;">
          <th style="border-right:1px solid white">PROJECT NAME</th>
          <th colspan="2" style="border-bottom:1px solid white;border-right:1px solid white ">REQUIREMENT</th>
          <th>BUSINESS UNIT</th>
        </tr>
        <tr style="background:black;color:white;text-align:center">
          <td style="width:40%;border-right:1px solid white"></td>
          <td style="width:20%;border-left:1px solid white;border-right:1px solid white">POSITION</td>
          <td style="width:20%;border-left:1px solid white;border-right:1px solid white;">HEADCOUNT</td>
          <td style="width:20%;"></td>
        </tr>
        <tr>
          <td style="width:40%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;padding-bottom:12px;padding-left:12px;border-bottom:1px solid white;padding-top:12px">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROHQ</label>
          </td>
        </tr>
        <tr>
          <td style="width:40%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;padding-bottom:12px;padding-left:12px;border-bottom:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SLRO</label>
          </td>
        </tr>
        <tr>
          <td style="width:40%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;padding-bottom:12px;padding-left:12px;border-bottom:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VISMIN</label>
          </td>
        </tr>
        <tr>
          <td style="width:40%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;padding-bottom:12px;padding-left:12px;border-bottom:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WMS</label>
          </td>
        </tr>
        <tr>
          <td style="width:40%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;border-bottom:1px solid white"></td>
          <td style="width:20%;padding-bottom:12px;padding-left:12px;border-bottom:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCS</label>
          </td>
        </tr>
        <tr>
          <td style="width:40%;"></td>
          <td style="width:20%;"></td>
          <td style="width:20%;"></td>
          <td style="width:20%;padding-bottom:12px;padding-left:12px;">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CETS</label>
          </td>
        </tr>
      </table>
      <!--       {{--  Second Table--}} -->
      <table style="text-align:center;">
        <tr style="background:black;color:white">
          <th style="border-right:1px solid white"></th>
          <th colspan="2" style="border-bottom:1px solid white;border-right:1px solid white ">CONTRACT DURATION</th>
        </tr>
        <tr style="background:black;color:white">
          <th style="width:60%;border-right:1px solid white">CONTRACT AMOUNT</th>
          <td style="width:20%;border-left:1px solid white;border-right:1px solid white">FROM</td>
          <td style="width:20%;border-left:1px solid white;border-right:1px solid white;">TO</td>
        </tr>
        <tr>
          <td  style="height:30px;"></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <!--        {{-- Third Table --}}  -->
      <table>
        <tr style="background:black;color:white;">
          <td style="width:60%;border-right:1px solid white;padding-left:12px;">BILLING ADDRESS</td>
          <td style="width:40%;text-align:center;">CONTACT PERSON</td>
        </tr>
        <tr>
          <td style="height:60px;"></td>
          <td></td>
        </tr>
      </table>
      <div style="width:100%;background:black;color:WHITE">
        <h6 style="margin-top:0px;padding-left:12px;padding-bottom:2px;margin-bottom:0px;">ATTACHMENTS</h6>
      </div>
      <!--       {{--  Second Table--} -->
      <table style="border:1px solid white;text-align:left;padding-left:12px;padding-top:10px;padding-bottom:10px">
        <tr>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conformed Quotation</label>
          </td>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms of Reference</label>
          </td>
        </tr>
        <tr>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox checked/>
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signed Service Agreement</label>
          </td>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contract</label>
          </td>
        </tr>
        <tr>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notice to Proceed</label>
          </td>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others (please specify)</label>
          </td>
        </tr>
        <tr>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purchase Order</label>
          </td>
          <td style="width:50%;border:1px solid white">
            <input id="check_me" type=checkbox />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________________
          </td>
        </tr>
      </table>
      <!--       {{-- Special Instructions --}} -->
      <table>
        <tr style="background:black;color:white">
          <td style="width:100%;padding-left:12px;">SPECIAL INSTRUCTION</td>
        </tr>
        <tr>
          <td height="30px;"></td>
        </tr>
      </table>
      <!--       {{-- Prepared By --}} -->
      <table>
        <tr>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Prepared by:</td>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Received by:</td>
        </tr>
        <tr>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white;padding-top:20px;"></td>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white"></td>
        </tr>
        <tr>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white;font-weight:bolder;">
            DARREN D.R. NATABA
          </td>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white;font-weight:bolder;">
            MANILYN B. ASMA
          </td>
          <tr>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Assistant</td>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Specialist</td>
          </tr>
          <tr>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Marketing, Sales & Business Development</td>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white;padding-bottom:12px;">Marketing, Sales & Business Development</td>
          </tr>
        </tr>
      </table>
      <!-- Approved By -->
      <table>
        <tr>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Prepared by:</td>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Confirmed Received:</td>
        </tr>
        <tr>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white;padding-top:20px;"></td>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Operation: _____________________________</td>
        </tr>
        <tr>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white;font-weight:bolder;">
            DARREN D.R. NATABA
          </td>
          <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Logistics: _____________________________</td>
          <tr>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Assistant</td>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Payroll and Billing: _____________________________</td>
          </tr>
          <tr>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white;">Marketing, Sales & Business Development</td>
            <td style="width:50%;padding-left:12px;border-bottom:1px solid white">Collection: _____________________________</td>
          </tr>
          <tr>
            <td style="width:50%;padding-left:12px;"></td>
            <td style="width:50%;padding-left:12px;padding-bottom:12px;">Recruitment: _____________________________</td>
          </tr>
        </tr>
      </table>
      <p style="padding-left:12px;margin-top:5px;font-size:11px;">
        <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </i>
      </p>
      <div class="page_break">
        <p  style="padding-left:12px;">Attachment</p>
        <table>
          <tr>
            <th>POSITION</th>
            <th>NO. OF DAYS</th>
            <th>DAILY RATE</th>
            <th>NON-TAXABLE ALLOWANCE</th>
          </tr>
          <tr>
            <td style="height:20px;"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>

      </div>

  </body>
</html>
