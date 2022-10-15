<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  
            price:{{$product_pdf->price}}<br>
            decription:  {{$product_pdf->decription}}<br>
            discunt_price:{{$product_pdf->discunt_price}}<br>
            quantity: {{$product_pdf->quantity}}<br>
            catagory: {{$product_pdf->catagory}}
   
   <img height="250px" width="450px" src="/product/{{$product_pdf->image}}}}" alt="">

  

</body>
</html>