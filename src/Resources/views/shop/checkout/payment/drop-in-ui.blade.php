<!DOCTYPE html>
<html>
    <head>
        <title>@lang('razorpay::app.shop.checkout.razorpay.title')</title>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <style>
            #loading {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.8);
                z-index: 1000;
            }

            .spinner {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 50px;
                height: 50px;
                border: 4px solid transparent;
                border-top: 4px solid #3498db;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% {
                    transform: translate(-50%, -50%) rotate(0deg);
                }
                100% {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
            }

            .loading-text {
                position: absolute;
                top: 60%;
                left: 50%;
                transform: translateX(-50%);
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
            }
        </style>
    </head>
    <body>
        <!-- Loading spinner -->
        <div id="loading">
            <div class="spinner"></div>
            <div class="loading-text">@lang('razorpay::app.shop.checkout.razorpay.process')</div>
        </div>

        <script>
            var options = {
                "key": "{{ $payment['key'] }}",
                "amount": "{{ $payment['amount'] }}",
                "currency": "INR",
                "name": @json(core()->getConfigData('sales.payment_methods.razorpay.merchant_name')),
                "description": @json(core()->getConfigData('sales.payment_methods.razorpay.merchant_desc')),
                "image": "{{ $payment['image'] }}",
                "order_id": "{{ $payment['order_id'] }}",
                "handler": function (response) {
                    sessionStorage.removeItem('razorpayInitiated');
                    document.getElementById('loading').style.display = 'block';

                    window.location.href = "{{ route('razorpay.payment.success') }}?razorpay_payment_id=" 
                        + response.razorpay_payment_id 
                        + "&razorpay_order_id=" 
                        + response.razorpay_order_id 
                        + "&razorpay_signature=" 
                        + response.razorpay_signature;
                },
                "prefill": {
                    "name": "{{ $payment['prefill']['name'] }}",
                    "email": "{{ $payment['prefill']['email'] }}",
                    "contact": "{{ $payment['prefill']['contact'] }}"
                },
                "notes": {
                    "shipping_address": "{{ $payment['notes']['shipping_address'] }}"
                },
                "theme": {
                    "color": "#008080"  
                },
                "modal": {
                    "ondismiss": function () {
                        sessionStorage.removeItem('razorpayInitiated');

                        window.location.href = "{{ route('razorpay.payment.cancel') }}";
                    }
                }
            };

            var rzp1 = new Razorpay(options);

            if (sessionStorage.getItem('razorpayInitiated')) {
                rzp1.open();
            }

            window.onload = function () {
                sessionStorage.setItem('razorpayInitiated', true);

                rzp1.open();
            };
        </script>
    </body>
</html>