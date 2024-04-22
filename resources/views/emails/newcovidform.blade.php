<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Covid Form</title>
    <style>
        td.header, td.footer{
                padding: 10px 0px;
                text-align: center;
        }
        td.header img{
            width: 400px;
            height: auto;
        }
        table.footer p{
                color:#fff;
        }
        .mail.content{
            width: 570px;
        }
        .bg-seconday{
            background-color: #f1f1f1;
        }
        .inner-body{
            min-height: 300px;
           margin: 0 30px;
        }
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
                margin: 0px;
            }
            .footer {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        .text-head{
            font-size: 30px;
            color: white;
            margin: 0px;
        }
        </style>
</head>
<body>

    <tr class='bg-seconday'>
        <td class="header">
            <img src="https://dselva.com/demo/cadhs/images/Logo-CADHS.png" class="logo" alt="Logo" style='width:150px'>

        </td>
    </tr>

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Birthday:</strong> {{ $birthday }}</p>

    <p><strong>Categories:</strong>
        @foreach ($categories as $index => $category)
            {{ $category }}
            @if (!$loop->last)
                ,
            @endif
        @endforeach
     </p>
    <p><strong>Physical Contact:</strong> {{ $physical_contact }}</p>
    <p><strong>Isolate Detail:</strong> {{ $isolate_detail }}</p>
    <p><strong>Test Result:</strong> {{ $test_result }}</p>

    <tr class='bg-seconday'>
        <td>
        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
        <td class="footer" align="center">
            <p class="copyright"style='color:#000000;text-decoration:none'>
                Copyright © 2024 Cadhs. All rights
                Reserved.
            </p>
        </td>
        </tr>
        </table>


        </td>
    </tr>

</body>
</html>
