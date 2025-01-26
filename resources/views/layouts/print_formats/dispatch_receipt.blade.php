<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dispatch Receipt</title>
</head>

<body style="margin: -45px -30px; padding: 0px;">

    <div style="text-align: center; margin: 20px 0 10px 0;">
        <div style="margin: 0px; font-size: 23px; font-weight: bolder;">MADINA COLD STORAGE AND ICE FACTORY</div>
        <div style="margin: 3px; font-size: 15px;">1.5KM GANDA SINGH ROAD, KASUR <span style="font-style: italic;">0300-9448265</span>
        </div>
    </div>

    <div style="text-align: center; margin: 10px 0;">
        <span style="padding: 8px 16px; border-radius: 2px; background-color: black; color: white;">
            Dispatch Receipt
        </span>
    </div>

    <div style="position: relative; width: 100%; height: 242px;">
        <table style="width: 100%; table-layout: fixed; border-spacing: 0 10px; border-collapse: separate;">
            <tr>
                <td style="width: 50%;"><strong>Dispatch Time: </strong> {{ $dispatch->created_at }} </td>
                <td style="width: 50%;"><strong>Dispatch Date: </strong> {{ $dispatch->date }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Customer Name: </strong> {{ $dispatch->getOrder->getCustomer->name }}</td>
                <td style="width: 50%;"><strong>Customer Marka: </strong> {{ $dispatch->getOrder->getCustomer->brand }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Item Name: </strong> {{ $dispatch->getOrder->getProduct->name }}</td>
                <td style="width: 50%;"><strong>Item Type: </strong> {{ $dispatch->getOrder->getProduct->type }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Container Size: </strong> {{ $dispatch->getOrder->getContainer->name }}</td>
                <td style="width: 50%;"><strong>Container Color: </strong> {{ $dispatch->getOrder->getContainer->color}}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Quantity: </strong> {{ $dispatch->dispatched_pieces }}</td>
                <td style="width: 50%;"><strong>Voucher No: </strong> {{ $dispatch->getOrder->voucher_no }}</td>
            </tr>
        </table>
    </div>

    <div style="margin: 5px 0px;">
        <span>Receiver Sign: ____________________</span>
        <span>Customer Sign: ____________________</span>
    </div>

    <div style="position: relative; width: 100%; height: 15px; border-top: 1px dashed gray;">
        <p style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); margin: 0; font-size: 10px; white-space: nowrap;">
            Software Developed By: Zaheer Ali | Contact Number: +92 301 4405739
        </p>
    </div>
</body>

</html>