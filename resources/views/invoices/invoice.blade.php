    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: 'Calibri', sans-serif;
                width: 100vw;
                height: 100vh;
                background-repeat: no-repeat;
                background-attachment: fixed;
                font-size: 12px;
            }
            .container {
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .custom-table, .custom-table1 {
                width: 80%;
                margin: auto;
            }
            .table {
                border-collapse: collapse;
            }
            .table td, .table th {
                padding: .3rem;
                border: 1px solid #dee2e6;
            }
            .table th {
                border-top: none;
            }
            .thead-primary th {
                background-color: #01013D;
                color: white;
                border-top: none;
            }
            .table thead th {
                border-bottom: 2px solid #dee2e6;
            }
            .table tbody + tbody {
                border-top: 2px solid #dee2e6;
            }
            .table tbody tr:first-child td {
                border-top: none;
            }
            .no-invoice {
                font-size: 14px;
                padding-top: 125px;
                padding-left: 73px;
                color: black;
            }
            .ul-invoice{
                list-style-type: none;
            }
            .ul-invoice li{
                text-decoration: none
            }
            .customer-addres{
                max-width: 280px;
            }
            .fw-bold{
                font-weight:bold;
            }
            .text-right{
                text-align: right
            }
        </style>
    </head>
    <body style="margin: 0; padding: 0; width: 100%; height: 100%; background-image: url('{{ $imageDataUri }}'); background-size: cover;">
            <div class="container">
                <p class="text-start no-invoice "><span class="fw-bold">INVOICE NO:</span> {{ $invoice->invoice_number }}</p>
                <div class="invoice-info-header">
                    <span></span>
                </div>
                <!-- Section for Invoice To -->
                <table class="table mb-4 table-bordered custom-table1">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col" style="color: #01013D">.</th>
                            <th scope="col" style="color: #01013D">.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through invoice items -->
                        <tr>
                            <td class="text-start">
                                <ul class="ul-invoice">
                                    <li class="fw-bold">Invoice To</li>
                                    <li class="fw-bold" style="margin-top: 10px">{{ $invoice->customer_name }}</li>
                                    <li class="customer-addres">{{ $invoice->customer_address }}</li>
                                </ul>
                            </td>
                            <td class="text-right">
                                <ul class="ul-invoice">
                                    <li class="fw-bold">Invoiced Date</li>

                                    <li style="margin-bottom:10px" >{{ $invoice->invoice_date->format('d F Y') }}</li>
                                @if ($invoice->due_date !== null)
                                    <li class="fw-bold">Due Date</li>
                                    <li>{{ $invoice->due_date->format('d F Y') }}</li>
                                @endif
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Table for Invoice Items -->
                <table class="table mb-4 table-bordered custom-table">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col" class="text-center">Qty</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->items as $item)
                        <!-- Loop through invoice items -->
                        <tr>
                            <td>{{ $item->item }}</td>
                            <td class="text-center">{{ $item->qty }}</td>
                            <td class="text-center">{{ number_format($item->price) }}</td>
                            <td class="text-right fw-bold ">{{ number_format($item->subtotal) }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Grand Total</td>
                            <td class="text-right">{{number_format($invoice->paymentDetails->total)}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">Total:</td>
                            <td class="fw-bold text-right">{{ "Rp " . number_format($invoice->paymentDetails->total)}}</td>
                        </tr>
                      
                    </tbody>
                </table>

                <table class="table table-bordered text-center custom-table1">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">Payment Channel</th>
                            <th scope="col">Account</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through invoice items -->
                        <tr>
                            <td>{{ $invoice->bankDetail->bank }}<br>{{ $invoice->bankDetail->cabang }}</td>
                            <td>{{ $invoice->bankDetail->no_rek }}<br> a/n {{ $invoice->bankDetail->owner_rek }}</td>
                            <td class="fw-bold">{{ "Rp " . number_format($invoice->paymentDetails->total) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.6.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
