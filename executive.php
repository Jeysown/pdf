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
  <body>

      <div class="col-lg-6">
        <img src="images/sfi.png" alt="" style="width:100%;">
      </div>
      <div style="margin-top:60px;">
        <center>
          <h3>EXECUTIVE BRIEF</h3>
        </center>
      </div>
      <div style="padding-left:12px;border:8px solid black;">
        <table>
          <tr>
            <td style="width:40%;border:1px solid white;padding-top:12px;">NAME OF PROJECT:</td>
            <td style="width:60%;border:1px solid white">
              <u>Jason Patrick S. Lopez</u>
            </td>
          </tr>
          <tr>
            <td style="width:40%;border:1px solid white;">NATURE OF BUSINESS:</td>
            <td style="width:60%;border:1px solid white">
              <u></u>
            </td>
          </tr>
          <tr>
            <td style="width:40%;border:1px solid white;">OVERALL HEADCOUNTS:</td>
            <td style="width:60%;border:1px solid white">
              <u></u>
            </td>
          </tr>
          <tr>
            <td style="width:40%;border:1px solid white;">NUMBER OF OUTSOURCED MC:</td>
            <td style="width:60%;border:1px solid white">
              <u></u>
            </td>
          </tr>
        </table>
        <!--         {{--  Second Table--}}-->
        <p style="font-size:12px;font-weight:bold;">CONTACT PERSON:</p>
        <table style="text-align:center;">
          <tr>
            <td style="width:25%;border:1px solid white;">NAME:</td>
            <td style="width:25%;border:1px solid white;">DESIGNATION:</td>
            <td style="width:25%;border:1px solid white;">EMAIL:</td>
            <td style="width:25%;border:1px solid white;">MOBILE NUMBER:</td>
          </tr>
          <tr>
            <td style="width:25%;border:1px solid white;">
              <u>Jason Patrick S. Lopez</u>
            </td>
            <td style="width:25%;border:1px solid white;">
              <u></u>
            </td>
            <td style="width:25%;border:1px solid white;">
              <u></u>
            </td>
            <td style="width:25%;border:1px solid white;">
              <u></u>
            </td>
          </tr>
        </table>
        <!-- {{--  Second Table--}} -->
        <p style="font-size:12px;font-weight:bold;">NATURE OF ENGAGEMENT:</p>
        <table style="text-align:left;padding-bottom:12px;">
          <tr>
            <td style="width:20%;border:1px solid white;padding-left:12px;">
              <input id="check_me" type=checkbox checked/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. FMS</label>
            </td>
            <td style="width:20%;border:1px solid white;">
              <input id="check_me" type=checkbox/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. WFM</label>
            </td>
            <td style="width:20%;border:1px solid white;">
              <input id="check_me" type=checkbox/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. CETS</label>
            </td>
            <td style="width:40%;border:1px solid white;">
              <input id="check_me" type=checkbox/>
              <label for="check_me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. WORKFORCE DEVELOPMENT</label>
            </td>
          </tr>
        </table>
        <!--         {{--  BRIEF PROJECT HISTORY--}} -->
        <div style="border:1px solid black;height:140px;width:100%;margin-left:-12px;">
          <p style="font-size:12px;font-weight:bold;padding-left:12px;">BRIEF PROJECT HISTORY:</p>
        </div>
        <!-- OPPORTUNITIES -->
        <div style="border:1px solid black;height:140px;width:100%;margin-left:-12px;">
          <p style="font-size:12px;font-weight:bold;padding-left:12px;">OPPORTUNITIES:</p>
        </div>
        <!-- OBJECTIVES -->
        <div style="border:1px solid black;height:140px;width:100%;margin-left:-12px;">
          <p style="font-size:12px;font-weight:bold;padding-left:12px;">OBJECTIVES:</p>
        </div>
        <!-- STRATEGIES & ACTION PLANS -->
        <div style="border:1px solid black;height:140px;width:100%;margin-left:-12px;">
          <p style="font-size:12px;font-weight:bold;padding-left:12px;">STRATEGIES & ACTION PLANS:</p>
        </div>
      </div>
      <div class="page-break">

        <div class="col-lg-6">
          <img src="images/sfi.png" alt="" style="width:100%;">
        </div>
        <div style="margin-top:60px;">
          <center>
            <h3>EXECUTIVE BRIEF</h3>
          </center>
        </div>
        <div style="padding-left:12px;border:8px solid black;height:800px;">
          <!-- OTHER PARTICULARS -->
          <div style="border:1px solid black;height:200px;width:100%;margin-left:-12px;">
            <p style="font-size:12px;font-weight:bold;padding-left:12px;">OTHER PARTICULARS:</p>
          </div>
          <!-- Signatures -->
          <table style="padding-top:20px;">
            <tr>
              <th style="width:50%;border: 1px solid white;">PREPARED BY:</th>
              <th style="width:50%;border: 1px solid white;">NOTED BY:</th>
            </tr>
            <tr>
              <td style="width:50%;border: 1px solid white;">Lorem Ipsum</td>
              <td style="width:50%;border: 1px solid white;">Lorem Ipsum</td>
            </tr>
          </table>
          <table style="padding-top:20px;">
            <tr>
              <th style="width:50%;border: 1px solid white;">RECOMMENDED BY:</th>
              <th style="width:50%;border: 1px solid white;">APPROVED BY:</th>
            </tr>
            <tr>
              <td style="width:50%;border: 1px solid white;">lorem Ipsum</td>
              <td style="width:50%;border: 1px solid white;">Lorem Ipsum</td>
            </tr>
          </table>

        </div>
      </div>

  </body>
</html>
