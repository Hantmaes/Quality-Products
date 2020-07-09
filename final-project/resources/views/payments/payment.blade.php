@extends('layouts.layout')
{{-- @extends('layouts.app') --}}

@section('content')

<body>
    

<div class="links" style="margin-top:20px">
      
      
    <form action="{{route('stripe.store')}}" method="post" id="payment-form">
        @csrf
        <div class="form-row">

            
            <label for="validationCustom01">Name on card </label>
            <input type="text" class="form-control" id="validationCustom01" value="Mark Turner" required>
            
        
            
            <label for="card-element">Credit or debit card</label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>
        
    
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>

            <button id="st-btn">Submit Payment</button>
        </div>
    
        
    </form>
</div>

</body>
@endsection


@section('head')

<script src="https://js.stripe.com/v3/"></script>
<!-- Styles for payment form -->
<style>

  /* Stripe CSS */
  .StripeElement {
    box-sizing: border-box;
    height: 40px;
    width: 600px;
    padding: 10px 12px;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
    border: 2px solid blue;
  }

  .form-control {
    box-sizing: border-box;
    height: 40px;
    width: 600px;
    padding: 10px 12px;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
    border: 2px solid blue;
  }
  
  .StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
  }
  
  .StripeElement--invalid {
    border-color: #fa755a;
  }
  
  .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
  }
  .form-row {
    width: 65%;
    /* border: 2px solid blue; */
    float: left;
  }
  form#payment-form {
    background: #f7f8f9;
    /* border: 2px solid blue; */
    height: 50%;
    padding: 50px;
  }
  button#st-btn {
    width: 32%;
    padding: 11px;
    margin-left: 10px;
    margin-top: 21px;
    background: #43458b;
    border: none;
    color: #fff;
    height: 42px;
    line-height: 40px;
    padding: 0 14px;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    border-radius: 4px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.025em;
    cursor: pointer;
  }
  div#card-errors {
    padding: 6px 0;
    color: #fa755a;
    font-weight: 600;
  }

</style>

@endsection

@section('js')

  <script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51H2ezHBruCHLHVD7h9LYmOaqrCGmUXpmWMgDTfqsueqoB8e6Q6mtTkD2f3tX487r3zSzwaGPGI77bv5FavS7i48G005TvJgE9C');
   
    // Create an instance of Elements.
    var elements = stripe.elements();
   
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
   
    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});
   
    // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
   
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
   
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
       
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
   
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
       
            // Submit the form
            form.submit();
        }
</script>

@endsection