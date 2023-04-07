<?php
error_reporting(0); //warning hide

if(!isset($_POST['name'])){
    echo "Direct access restricted";
    exit();
}

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $partner_api_key = $_POST['partner_api_key'];
    $name = $_POST['name'];
    $partner_invoice_id = $_POST['partner_invoice_id'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country_name = $_POST['country_name'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $product_amount = $_POST['product_amount'];
    $product_note = $_POST['product_note'];

   
}

$url = 'https://ptlmerchant.com/pay/checkout/v1/request';
$fields = array(
    'partner_api_key'=> $partner_api_key,
    'partner_invoice_id'=> $partner_invoice_id,
    'email'=>$email,
    'address'=>$address,
    'city'=> $city,
    'state'=> $state,
    'zip'=> $zip,
    'country_name'=> $country_name,
    'product_amount'=> $product_amount,
    'product_note'=> $product_note,
    'name'=> $name,
);
// $fields = json_encode($field);
// Build the POST request
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => count($fields),
    CURLOPT_POSTFIELDS => http_build_query($fields),
    CURLOPT_RETURNTRANSFER => true,
);

// Send the POST request using cURL
$curl = curl_init();
curl_setopt_array($curl, $options);
$response = curl_exec($curl);
curl_close($curl);

if($response){
    $res = json_decode($response);

    if($res->data  && $res->data->status == 200){
        header("Location: https://ptlmerchant.com/pay/invoice/".$res->data->invoice_id);
    }else{
        print_r( $res);
    }
}
?>