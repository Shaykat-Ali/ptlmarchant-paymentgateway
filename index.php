<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure pay out</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="card card-body col-md-6 offset-md-3 mt-4">
        <form action="process.php" method="post">
            <div class="row">
                     <input type="hidden" name="partner_api_key" value="lz8gkr806ydwti8">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name">
                        <br>
                        <hr>
                    </div>
                       
                    <div class="col-md-6">    
                        <input type="text" name="partner_invoice_id" class="form-control" placeholder="Enter your invoice id">
                        <br>
                        <hr>
                    </div>  
                    <div class="col-md-6">  
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <input type="text" name="city" class="form-control" placeholder="Enter your city">
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <input type="text" name="state" class="form-control" placeholder="Enter your state">
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <input type="text" name="zip" class="form-control" placeholder="Enter your zip">
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <select name="country" class="form-control">
                            <option value="US">USA</option>
                        </select>
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <textarea name="address" class="form-control" placeholder="address"></textarea>
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <textarea name="note" class="form-control" placeholder="note"></textarea>
                        <br>
                        <hr>
                    </div>   
                    <div class="col-md-6"> 
                        <input type="number" name="product_amount" class="form-control" placeholder="amount">
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-6">    
                        <textarea name="product_note" class="form-control" placeholder="product note"></textarea>
                        <br>
                        <hr>
                    </div>    
                        <input type="submit" name="submit" value="Pay Now">
            </div>            
        </form>
    </div>
    
</body>
</html>
