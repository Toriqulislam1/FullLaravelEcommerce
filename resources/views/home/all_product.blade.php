<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title></title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->

        <!-- end slider section -->
    </div>




    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    All <span>products</span>
                </h2>
            </div>

            <!-- <div class="text-center">
               <form action="{{url('search_product')}}" method="get">
                  @csrf
               <input type="text" name="search">
               <input type="submit" class="btn btn-primary" value="Search">
               </form>
            </div> -->
            
            <div class="row">

            @foreach($product as $products)

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$products->id)}}" class="option1">
                                    details
                                </a>
                                <form action="/add_cart/{{$products->id}}">
                                    @csrf
                                    <input type="number" name="quentity" value="1">
                                    <input type="submit" value="add to cart">
                                </form>


                            </div>
                        </div>
                        <div class="img-box">
                            <img src="product/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>

                                {{$products->title }}

                            </h5>
                            @if($products->discunt_price!=null)
                            <h6>
                                {{$products->discunt_price}}
                            </h6>

                            <h6 style="text-decoration:line-through">
                                {{$products->price}}
                            </h6>
                            @endif

                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
           
        </div>
        
        

        </div>


        {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
        
    </section>

















    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->

    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>