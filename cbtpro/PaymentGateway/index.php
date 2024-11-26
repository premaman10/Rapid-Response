<?php

require('config.php');
?>
<!--stripe-->
<form action="submit.php" method="POST">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishable_key; ?>" data-amount="" data-name="paytm" data-description="paytm Payment" data-currency="inr" data-image="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_16cf4fb315187bdfc29597bd309006e4/paytm-business.png" data-locale="auto">
    </script>

</form>