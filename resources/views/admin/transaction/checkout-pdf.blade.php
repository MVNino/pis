<!DOCTYPE html>
<html>
<head><title>ACKNOWLEDGEMENT RECEIPT</title>
    <style>
        body{      
            height: 1000px;
            width: 700px;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .white-space{
            padding-bottom : 485px;
        }
        .table {
            padding-top: 5px;
            padding-left: 30px;
        }
        td {
            text-align: left;
            padding: 8px;
            font-size: 15px;
        }
        .container {
            padding: 10px;
        }
        .date{
            margin: 0px;
            text-align: right;     
            font-size: 80%;
            font-family:''Helvetica'';
            color:	#7d7d7d;
        }
        .l {
            margin-top: 2px;
            font-size: 12px;
        }
        .receipt {
            padding-left: 80px;
            padding-right: 80px;
            font-size: 14px;
            word-spacing: 4px;
            line-height: 25px;
        }
        .signature {
            float: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2 style="margin:0px;">DRA. JOY GALI</h2>
        <label class="l" style="margin:0px;">Blk 3 Lot 18 Don Primitivo Ext. Brgy. Holy Spirit QC</label><br>
        <label class="l" style="margin:0px;">09452066903</label>
        <h4 style="margin-bottom:0px;"><u>ACKNOWLEDGEMENT</u></h4>
        <p style="margin-top:0px;">Receipt of Payment</p>
    </div>
    <div class="receipt">
        <p style="float:right;">{{ date('F d, Y', strtotime(now())) }}</p><br><br><br>
        Received the amount of PHP <label><u>PHP {{ $amount }}</u></label> from <label><u>{{ $patientName }}</u></label>
        as a payment for Hospital Bill.
        <br><br><br>
        <div class="signature">
            <p style="margin:0px; margin-right: 24px; height: 0px;" align="center">______________________________</p><br>
            <p style="margin:0px; margin-right: 24px;" align="center"> DRA. JOY GALI</p>
            <p style="margin:0px; margin-right: 24px;" align="center">Signature over Printed Name</p>
        </div>
    </div>
</body>
</html>