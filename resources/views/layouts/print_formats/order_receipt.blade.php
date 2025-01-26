<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Receipt</title>
</head>

<body style="margin: -45px -30px; padding: 0px;">

    <div style="text-align: center; margin: 20px 0 10px 0;">
        <div style="margin: 0px; font-size: 23px; font-weight: bolder;">MADINA COLD STORAGE AND ICE FACTORY</div>
        <div style="margin: 3px; font-size: 15px;">1.5KM GANDA SINGH ROAD, KASUR <span
            style="font-style: italic;">0300-9448265</span>
        </div>
    </div>

    <div style="text-align: center; margin: 10px 0;">
        <span style="padding: 8px 16px; border-radius: 2px; background-color: black; color: white;">Booking
            Receipt</span>
    </div>

    <div style="position: relative; width: 100%; height: 242px;">
        <table style="width: 100%; table-layout: fixed; border-spacing: 0 7px; border-collapse: separate;">
            <tr>
                <td style="width: 50%;"><strong>Voucher Number: </strong> {{ $order->voucher_no }}</td>
                <td style="width: 50%;"><strong>Date: </strong> {{ $order->date }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Customer Name: </strong> {{ $order->getCustomer->name }}</td>
                <td style="width: 50%;"><strong>Customer Phone: </strong> {{ $order->getCustomer->phone }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Customer Address: </strong> {{ $order->getCustomer->address }}</td>
                <td style="width: 50%;"><strong>Customer Marka: </strong> {{ $order->getCustomer->brand }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Item Name: </strong> {{ $order->getProduct->name }}</td>
                <td style="width: 50%;"><strong>Item Type: </strong> {{ $order->getProduct->type }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Container Size: </strong> {{ $order->getContainer->name }}</td>
                <td style="width: 50%;"><strong>Room number: </strong> {{ $order->str_room }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Rack Number: </strong> {{ $order->str_rack }}</td>
                <td style="width: 50%;"><strong>Location: </strong> {{ $order->str_location }}</td>
            </tr>
            <tr>
                <td style="width: 50%;"><strong>Total Pieces: (in numbers)</strong> {{ $order->total_pieces }}</td>
                <td style="width: 50%;"><strong>Total Pieces: (in words)</strong> {{ $order->total_pieces }}</td>
            </tr>
        </table>
    </div>

    <div style="margin: 5px 0;">
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