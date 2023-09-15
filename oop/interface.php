<?php
interface PaymentInterface
{
    public function payNow();
}
class Paypal implements PaymentInterface
{
    public function payNow()
    {
        echo "payment type is Paypal";
    }
}
class Visa implements PaymentInterface
{
    public function payNow()
    {
        echo "payment type is Visa";
    }
}
class Cash implements PaymentInterface
{
    public function payNow()
    {
        echo "payment type is Cash";
    }
}


$paypal=New Paypal();
$visa=New Visa();
$cash=New Cash();

$Payments = array($paypal,$visa,$cash);
foreach($Payments as $Payment)
{
    $Payment->payNow();
    echo"<br>";
}


?>