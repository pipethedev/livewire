<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - {{ config('app.name', 'Livewire App') }}</title>
    <style>
        body {
            margin: 0;
            font-family: Inter, Arial, sans-serif;
            background: #f7f7fb;
            color: #222;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 24px;
        }
        .card {
            background: #fff;
            border: 1px solid #ececf2;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        h1 {
            margin-top: 0;
        }
        .subtitle {
            color: #666;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }
        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }
        th {
            background: #fafafe;
        }
        .pill {
            display: inline-block;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 999px;
            background: #e8f7ee;
            color: #126b39;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Welcome to {{ config('app.name', 'Livewire App') }}</h1>
            <p class="subtitle">This home page now shows dummy data for testing UI and layout.</p>

            @php
                $orders = [
                    ['id' => '#1001', 'customer' => 'Aisha Bello', 'product' => 'Starter Plan', 'amount' => '$19.00', 'status' => 'Paid'],
                    ['id' => '#1002', 'customer' => 'David Owen', 'product' => 'Pro Plan', 'amount' => '$49.00', 'status' => 'Pending'],
                    ['id' => '#1003', 'customer' => 'Mina Lopez', 'product' => 'Starter Plan', 'amount' => '$19.00', 'status' => 'Paid'],
                    ['id' => '#1004', 'customer' => 'Tariq Ahmed', 'product' => 'Enterprise', 'amount' => '$199.00', 'status' => 'Paid'],
                    ['id' => '#1005', 'customer' => 'Sara Kim', 'product' => 'Pro Plan', 'amount' => '$49.00', 'status' => 'Pending'],
                ];
            @endphp

            <span class="pill">Dummy Data</span>

            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['id'] }}</td>
                            <td>{{ $order['customer'] }}</td>
                            <td>{{ $order['product'] }}</td>
                            <td>{{ $order['amount'] }}</td>
                            <td>{{ $order['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
