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
.col-lg-3{
  float:left;
  width: 33.33%;
}
.col-lg-9{
  float:left;
  width: 63.66%;

}
td{
  padding-left: 12px;
}
    </style>
  </head>
  <body>

      <div class="col-lg-3" style="border:1px solid black;padding:10px;">
        <img src="images/sfi.png" alt="" style="width:100%;">
      </div>
      <div class="col-lg-9">
        <p style="border:1px solid black;margin:0px;padding:5px;">TITLE: <b>MANPOWER REQUISITION FORM - EXTERNAL</b></p>

        <p style="border:1px solid black;margin:0px;padding:6px 5px 6px 5px">FORM NO: <b>REC-FO3-A</b>
          <b style="float:right;font-weight:normal">EFFECTIVE DATE:
            <b>April 1, 2017</b>
          </b>
        </p>
      </div>
      <div style="margin-top:70px;">
        <table>
          <tr>
            <td style="height:50px;padding-left:12px">DATE OF REQUEST:</td>
            <td>TARGET START DATE:</td>
            <td colspan="2">REFERENCE NUMBER:</td>
          </tr>
          <tr>
            <td style="height:70px;">REQUESTING CLIENT:</td>
            <td>WORK LOCATION:</td>
            <td>POSITIONING TITLE:</td>
            <td>NUMBER OF REQUIREMENT/S:</td>
          </tr>
        </table>
        <table style="margin-top:-1px;">
          <tr>
            <td style="width:75%;border-top:1px solid white;"> PURPOSE OF REQUISITION:
              <br><br>
              <div style="padding-left:40px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Replacement of __________________________ due to ________________</label>
              </div>
              <br>
              <div style="padding-left:40px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additional</label>
              </div>
              <br>
              <div style="padding-left:40px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New</label>
              </div>
              <br>
              <div style="padding-left:40px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transfer from __________________________ to ________________</label>
              </div>
              <br>
            </td>
            <td style="width:25%;border-top:1px solid white;">EMPLOYMENT STATUS:
              <br><br>
              <div style="padding-left:20px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fixed Term/Regular</label>
              </div>
              <br>
              <div style="padding-left:20px;">
                <input id="check_me" type=checkbox/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project Term</label>
              </div>
              <br>
              <div style="padding-left:20px;">
                <input id="check_me" type=checkbox/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seasonal</label>
              </div>
              <br>
              <div style="padding-left:20px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casual</label>
              </div>

            </td>
          </tr>
        </table>
        <table style="margin-top:-1px">
          <tr style="text-align:center;">
            <td style="border-top:1px solid white;">JOB DESCRIPTION:</td>
          </tr>
          <tr>
            <td style="height:100px;"></td>
          </tr>
          <tr style="text-align:center;">
            <td>QUALIFICATIONS:</td>
          </tr>
          <tr>
            <td style="height:100px;">
              <div style="padding-left:20px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WITH PASS-ON</label>
              </div>
            </td>
          </tr>
        </table>
        <br><br>
        <table>
          <tr>
            <td style="height:50px;padding-left:12px;width:40%;">ADDITIONAL:
              <br><br>
              <div style="padding-left:10px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With HMO</label>
              </div>
              <div style="padding-left:10px;padding-bottom:5px">
                <input id="check_me" type=checkbox/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With Insurance</label>
              </div>
              <div style="padding-left:10px;padding-bottom:5px">
                <input id="check_me" type=checkbox/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With Non Taxable Allowance: ________________</label>
              </div>
            </td>
            <td colspan="2" style="width:60%;">SERVICE AGREEMENT DURATION:
              <br><br>
              <p style="padding-left:10px;">__________________ to ______________________</p>
              <div style="padding-left:10px;padding-bottom:5px;">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contract</label>
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purchase Order</label>
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Letter of Extension</label>
              </div>
            </td>
          </tr>
          <tr>
            <td style="height:70px;">PAYROLL RATE:</td>
            <td>NUMBER OF WORKING HOURS PER DAY:</td>
            <td>NUMBER OF WORKING DAYS PER WEEK:</td>
          </tr>
        </table>
        <br><br>
        <table>
          <tr style="text-align:center">
            <td>OPERATIONS DEPARTMENT</td>
            <td>MARKETING & SALES DEPARTMENT</td>
            <td>HRAD DEPARTMENT</td>
          </tr>
          <tr>
            <td style="height:40px;">BY:</td>
            <td>BY:</td>
            <td>RECEIVED BY:</td>
          </tr>
          <tr>
            <td style="height:70px;">APPROVED BY:
              <br><br><br>
              DEPARTMENT HEAD
            </td>
            <td>APPROVED BY:
              <br><br><br>
              DEPARTMENT HEAD
            </td>
            <td>APPROVED BY:
              <br><br><br>
              DEPARTMENT HEAD
            </td>
          </tr>
        </table>
        <br><br>
        <table>
          <tr>
            <td colspan="3">
              <i>For Recruitment Department:</i>
            </td>
          </tr>
          <tr>
            <td style="height:40px;">MRF CODE:<br><br><br><br><br><br><br></td>
            <td>MRF VALID UNTIL:<br><br><br><br><br><br><br></td>
            <td>SUBPROCESS:
              <br><br>
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Highly Technical</label>
              </div>
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genaraly Admin</label>
              </div>
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Custodial and Allied Services</label>
              </div>
            </td>
          </tr>
          <tr>
            <td style="height:65px;">RECEIVED BY:<br><br><br><br>
            </td>
            <td>DATE RECEIVED:<br><br><br><br>
            </td>
            <td>APPROVED BY:<br><br><br><br>
            </td>
          </tr>
        </table>
        <br>
        <table>
          <tr>
          <td>  <p style="margin-bottom:0px;">Form No. DCS-F04 Effective Date: December 15, 2016</p>
            <p style="font-size:7px;margin-top:0px">THIS IS A PART OF THE PROCEDURE SHEETS AND IS NOT TO BE DISCARDED UNLESS BY A REVISED ISSUE. NOT TO BE REPRODUCED WITHOUT PERMISSION.</p></td>
          </tr>
        </table>
      </div>

  </body>
</html>
