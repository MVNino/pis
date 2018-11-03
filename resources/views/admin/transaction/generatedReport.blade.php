<!DOCTYPE html>
<html>
<head><title>INCOME STATEMENT</title>
    <style>
        body{      
            height: 1000px;
            width: 700px;
            margin: auto;
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        .header {
            background-color: #ab8ce4;
            color: white;
            text-align: center;
            padding: 25px;
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
            text-align: right;     
            font-size: 80%;
            padding: 30px;
            font-family:''Helvetica'';
            font-weight: bold;
            color:	#7d7d7d;
        }
        label {
            margin-top: 2px;
            font-size: 15px;
        }
        .title {
            text-align: left;
            font-weight: bold;
        }
        .expenses {
            padding: 15px; 

        }
        .total {
            text-align: right;
            font-weight: bold;
        }
        .income {
            text-align: right;
            font-weight: bold;
            text-decoration-line: underline;
            text-decoration-style: double;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 style="margin:0px;">DRA. JOY GALI</h1>
        <h3 style="margin-top:5px; margin-bottom:5px;">Income Statement</h3>
        <label>For the month of October</label> <!-- if monthly --> <br><!-- 
        <label>October 30,2018</label> if daily  <br>
        <label>For the 3rd week of October</label>  if weekly -->
    </div>
    <div class="expenses">
        <p class="title">REVENUES</p>
        <div class="table">
            <table>
                <tbody>
                    <tr>
                        <td>Client Sale</td>
                        <td>PHP</td>
                        <td>2,674.00</td>
                    </tr>
                    <tr>
                        <td>Medicine Sale</td>
                        <td></td>
                        <td>240.00</td>
                    </tr>
                    <tr class="total">
                        <td>Total Revenue</td>
                        <td></td>
                        <td class="total">240.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <p class="title">EXPENSES</p>
        <div class="table">
            <table>
                <tbody>
                    <tr>
                        <td>Client Sale</td>
                        <td>PHP</td>
                        <td>2,674.00</td>
                    </tr>
                    <tr>
                        <td>Medicine Sale</td>
                        <td></td>
                        <td>240.00</td>
                    </tr>
                    <tr class="total">
                        <td>Total Expenses</td>
                        <td></td>
                        <td class="total">240.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <label class="title">GROSS INCOME</label>      
        <p class="income">PHP 0.00</p>     
    </div>
</body>
</html>