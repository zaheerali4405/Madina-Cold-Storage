<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gate Pass</title>
</head>

<body style="margin: -45px -30px; padding: 0px;">

    <div style="text-align: center; margin: 20px 0 10px 0;">
        <div style="margin: 0px; font-size: 23px; font-weight: bolder;">MADINA COLD STORAGE AND ICE FACTORY</div>
        <div style="margin: 3px; font-size: 15px;">1.5KM GANDA SINGH ROAD, KASUR <span style="font-style: italic;">0300-9448265</span>
        </div>
    </div>

    <div style="text-align: center; margin: 10px 0">
        <span style="padding: 8px 16px; border-radius: 2px; background-color: black; color: white;">Gate Pass</span>
    </div>

    <div style="position: relative; width: 100%; height: 242px;">
        <table style="width: 100%; table-layout: fixed; border-spacing: 0 10px; border-collapse: separate;">
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">Gate Pass Number: <strong>{{ $dispatch->id }}</strong></td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Dispatch Time: </strong> {{ $dispatch->date }}</td>
                <td style="width: 50%;"><strong>Dispatch Date: </strong> {{ $dispatch->date }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Customer Name: </strong> {{ $dispatch->getOrder->getCustomer->name }}
                </td>
                <td style="width: 50%;"><strong>Customer Phone: </strong> {{ $dispatch->getOrder->getCustomer->phone }}
                </td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Item Name: </strong> {{ $dispatch->getOrder->getProduct->name }}
                </td>
                <td style="width: 50%;"><strong>Item Type: </strong> {{ $dispatch->getOrder->getProduct->type }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Container Size: </strong> {{ $dispatch->getOrder->getContainer->name }}
                </td>
                <td style="width: 50%;"><strong>Quantity: </strong> {{ $dispatch->dispatched_pieces }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Vehicle Number: </strong> _________________</td>
            </tr>
        </table>
    </div>

    <div style="margin: 5px 0;">
        <span>Receiver Sign: ___________________</span>
        <span>Customer Sign: ___________________</span>
    </div>

    <div style="position: relative; width: 100%; height: 15px; border-top: 1px dashed gray;">
        <p style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); margin: 0; font-size: 10px; white-space: nowrap;">
            Software Developed By: Zaheer Ali | Contact Number: +92 301 4405739
        </p>
    </div>

</body>

</html>