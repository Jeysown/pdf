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
  <body style="border: 8px solid red;padding:2px;">

      <div class="col-lg-3" style="padding:10px;">
        <img src="images/square.png" alt="" style="width:100%;">
      </div>
      <div class="col-lg-9">
        <h2 style="text-align:right;padding-right:12px;">MARKETING ORDER SLIP</h2>


      </div>
      <div style="padding-left:250px;margin-top:50px;">


      <table style="width:95%;">
        <tr>
          <td style="height:30px;">MARKETING ORDER SLIP</td>
          <td>MK05-160603-003-001</td>
        </tr>
        <tr>
          <td style="height:30px;">DATE OF ISSUE</td>
          <td>June 3, 2016</td>
        </tr>
        <tr>
          <td style="height:30px;">DEADLINE (DATE AND TIME)</td>
          <td>JUNE 05, 2016</td>
        </tr>
      </table>
      <table style="width:95%;">
        <tr>
          <td style="height:30px;border:1px solid white;">
            <div style="padding-left:30px;padding-bottom:5px">
              <input id="check_me" type=checkbox checked/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BID</label>
            </div>
          </td>
          <td style="border:1px solid white;">
            <div style="padding-left:30px;padding-bottom:5px">
              <input id="check_me" type=checkbox checked/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEGOTIATED</label>
            </div>
          </td>
        </tr>
        <tr>
          <td style="height:30px;border:1px solid white;">
            <div style="padding-left:30px;padding-bottom:5px">
              <input id="check_me" type=checkbox checked/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXISTING</label>
            </div>
          </td>
          <td style="border:1px solid white;">
            <div style="padding-left:30px;padding-bottom:5px">
              <input id="check_me" type=checkbox checked/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW</label>
            </div>
          </td>
        </tr>
      </table>
      </div>
      <div>
        <table>
          <tr>
            <td style="width:10%;height:30px;">To</td>
            <td style="width:50%">TRS</td>
            <td style="width:15%">DEADLINE</td>
            <td style="width:25%"></td>
          </tr>
          <tr>
            <td style="width:10%;height:30px;">Thru</td>
            <td style="width:50%">DBRN / LPR</td>
            <td style="width:15%">ADMIN FEE</td>
            <td style="width:25%">12%</td>
          </tr>
        </table>
        <br>
        <table>
          <tr>
            <td style="font-size:16px;width:25%">CLIENT</td>
            <td style="width:75%;font-size:14px;">TOTAL HEAD OFFICE</td>
          </tr>
          <tr>
            <td style="font-size:16px;width:25%">PROJECT NAME</td>
            <td style="width:75%;font-size:14px;">JANITOR / MESSENGER</td>
          </tr>
        </table>
        <br>
        <p style="margin:0px;padding-left:12px;">RFQBACKGROUND</p>
        <table>
          <tr>
            <td style="width:25%;height:30px;">NAME OF REQUISITIONER</td>
            <td style="width:25%">TESS SALAZAR</td>
            <td style="width:25%">DATE RECEIVED</td>
            <td style="width:25%">JUNE 03, 2016</td>
          </tr>
          <tr>
            <td style="width:25%;height:30px;">LOCATION OF PROJECT</td>
            <td style="width:25%">BGC</td>
            <td style="width:25%">TYPE OF PROJECT</td>
            <td style="width:25%"></td>
          </tr>
        </table>
        <br>
        <table>
          <tr>
            <td style="width:25%;height:40px;">CONTACT PERSON FOR TECHNICAL INQUIRIES</td>
            <td style="width:25%"></td>
            <td style="width:25%">CONTACT DETAILS</td>
            <td style="width:25%">TESS.SALAZAR@TOTAL.COM</td>
          </tr>
          </tr>
        </table>
        <br>
        <p style="margin:0px;padding-left:12px;">SUPPLIES, MATERIALS, PPE’S & EQUIPMENT</p>
        <table>
          <tr>
            <td style="width:25%;border-right:1px solid white;height:20px;border-bottom:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUPPLIES</label>
              </div>
            </td>
            <td style="width:25%;border-right:1px solid white;border-bottom:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EQUIPMENTS</label>
              </div>
            </td>
            <td style="width:25%;border-right:1px solid white;border-bottom:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OTHERS</label>
              </div>
            </td>
            <td style="width:25%;border-bottom:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                MARK-UP: ________________%
              </div>
            </td>
          </tr>
          <tr>
            <td style="width:25%;border-right:1px solid white;height:20px;border-top:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OLS</label>
              </div>
            </td>
            <td style="width:25%;border-right:1px solid white;border-top:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                <input id="check_me" type=checkbox checked/>
                <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PPE'S</label>
              </div>
            </td>
            <td style="width:25%;border-right:1px solid white;border-top:1px solid white;">
              <div style="padding-left:30px;padding-bottom:5px">
                EASE SPECIFY: ________________

              </div>
            </td>
            <td style="width:25%">
              <div style="padding-left:30px;padding-bottom:5px;border-top:1px solid white;">
                HANDLING FEE: ________________%

              </div>
            </td>
          </tr>
        </table>
        <br>
        <p style="margin:0px;padding-left:12px;">ATTTACHMENT/S</p>
        <table>
          <tr>
            <td style="width:100%;height:50px;">QUOTE FROM OPS</td>
          </tr>
        </table>
        <br>
        <p style="margin:0px;padding-left:12px;">SPECIAL INSTRUCTION / REMARKS</p>
        <table>
          <tr>
            <td style="width:100%;height:30px;"></td>
          </tr>
        </table>
        <table>
          <tr>
            <td colspan="2" style="width:50%"> MARKETING, SALES & BUSINESS DEVELOPEMT DEPARTMENT</td>
            <td colspan="2" style="width:50%">DEPARTMENT</td>
          </tr>
          <tr>
            <td style="width:15%">Prepared by:</td>
            <td style="width:35%;height:50px;">
              <center><b style="text-align:center;">RGR</b>
                <br>
                <b style="text-decoration:overline;">  Signature over printed name/Date</b>
              </center>
            </td>
            <td style="width:15%">Received by: (OPERATIONS)</td>
            <td style="width:35%">
              <center><b style="text-align:center;"></b>
                <br>
                <b style="text-decoration:overline;">  Signature over printed name/Date</b>
              </center>
            </td>
          </tr>
          <tr>
            <td style="width:15%">Reviewed by:</td>
            <td style="width:35%;height:50px;">
              <center><b style="text-align:center;">MDS</b>
                <br>
                <b style="text-decoration:overline;">  Signature over printed name/Date</b>
              </center>
            </td>
            <td style="width:15%">Received by: (RECRUITMENT)</td>
            <td style="width:35%">
              <center><b style="text-align:center;"></b>
                <br>
                <b style="text-decoration:overline;">  Signature over printed name/Date</b>
              </center>
            </td>
          </tr>
          <tr>
            <td style="width:15%">Approved by:</td>
            <td style="width:35%;height:50px;">
              <center><b style="text-align:center;">MPS</b>
                <br>
                <b style="text-decoration:overline;">  Signature over printed name/Date</b>
              </center>
            </td>
            <td style="width:15%"></td>
            <td style="width:35%">
              <
            </td>
          </tr>
        </table>


      </div>

  </body>
</html>
