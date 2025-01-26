<!DOCTYPE html>
<html lang="ur">

<head>
    <meta charset="UTF-8">
    <title>Dispatch Receipt Urdu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Noto Nastaliq Urdu", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            text-align: right;
            direction: rtl;
        }
    </style>

</head>

<body style="margin: 0px; padding: 0px;">
    <div>
        <div>
            <div style="text-align: center; margin: 5px 0;">
                <div style="margin: 0px; font-size: 20px; font-weight: bolder;">{{ $name }}</div>
                <div style="margin: 0px; display: flex; justify-content: center;">
                    <div>{{ $location }}</div> &nbsp;&nbsp;
                    <div style="font-style: italic; direction: ltr;">0300-9448265 </div>
                </div>
            </div>

            <div style="text-align: center; margin: 5px 0;">
                <span style="padding: 1px 20px; border-radius: 2px; background-color: black; color: white;">{{ $receipt_name }}</span>
            </div>

            <div style="">
                <table style="width: 100%; table-layout: fixed; border-collapse: separate;">
                    @php
                    $chunks = array_chunk($translatedData, 2, true);
                    @endphp

                    @foreach ($chunks as $chunk)
                    <tr>
                        @foreach ($chunk as $label => $value)
                        <td style="width: 15%;">{{ $label }}:</td>
                        <td style="width: 35%;"><strong>{{ $value }}</strong></td>
                        @endforeach
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>

        <div style= "position: absolute; bottom: 0; width: 100%;">
            
            <div style="font-size: 10px; text-align: center; border-top: 1px dashed gray;">
                Software Developed By: Zaheer Ali | Contact Number: +92 301 4405739
            </div>
        </div>
    </div>
</body>

</html>