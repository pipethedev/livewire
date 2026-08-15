<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

        <style>
            body {
                margin: 0;
                font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
                background: #fdfdfc;
                color: #1b1b18;
            }

            .page {
                min-height: 100vh;
                padding: 24px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .shell {
                width: 100%;
                max-width: 980px;
                border: 1px solid #e3e3e0;
                border-radius: 14px;
                overflow: hidden;
                background: #fff;
                box-shadow: 0 1px 2px rgba(0,0,0,.06);
            }

            .hero {
                padding: 24px;
                background: #fff2f2;
                border-bottom: 1px solid #e3e3e0;
            }

            .hero h1 {
                margin: 0 0 8px;
                font-size: 28px;
            }

            .hero p {
                margin: 0;
                color: #706f6c;
            }

            .content {
                padding: 24px;
            }

            .tag {
                display: inline-block;
                margin-bottom: 12px;
                font-size: 12px;
                color: #9a3412;
                background: #ffedd5;
                border: 1px solid #fdba74;
                border-radius: 999px;
                padding: 4px 10px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                text-align: left;
                padding: 10px 8px;
                border-bottom: 1px solid #ececf2;
                font-size: 14px;
            }

            th {
                color: #52525b;
                font-weight: 600;
                background: #fafafa;
            }

            .paid { color: #166534; }
            .pending { color: #9a3412; }
        </style>
    </head>
    <body>
        <div class="page">
            <main class="shell">
                <section class="hero">
                    <h1>Welcome</h1>
                    <p>Laravel starter look, now with dummy home page data for testing.</p>
                </section>

                <section class="content">
                    @php
                        $orders = [
                            ['id' => '#1001', 'customer' => 'Aisha Bello', 'product' => 'Starter Plan', 'amount' => '$19.00', 'status' => 'Paid'],
                            ['id' => '#1002', 'customer' => 'David Owen', 'product' => 'Pro Plan', 'amount' => '$49.00', 'status' => 'Pending'],
                            ['id' => '#1003', 'customer' => 'Mina Lopez', 'product' => 'Starter Plan', 'amount' => '$19.00', 'status' => 'Paid'],
                            ['id' => '#1004', 'customer' => 'Tariq Ahmed', 'product' => 'Enterprise', 'amount' => '$199.00', 'status' => 'Paid'],
                            ['id' => '#1005', 'customer' => 'Sara Kim', 'product' => 'Pro Plan', 'amount' => '$49.00', 'status' => 'Pending'],
                        ];
                    @endphp

                    <span class="tag">Dummy Data</span>

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
                                    <td class="{{ strtolower($order['status']) === 'paid' ? 'paid' : 'pending' }}">{{ $order['status'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
    </body>
</html>
