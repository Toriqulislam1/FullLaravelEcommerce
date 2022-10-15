<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/template/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/template/assets/admin/template//favicon.png" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.partial')
        <!-- partial -->
        <div class="main-panel">

        <div class="content-wrapper">
            <div class="text-center">



            <h3 >All product</h3>

            <div>
              
              <form action="{{url('search')}}" method="get">
                @csrf
                  <input class="text-black" type="text" name="search">
                  <input type="submit" value="search">


              </form>
            
            </div>

            <table class="table">
  <thead>
    <tr>
        <th scope="col">Action</th>
        <th scope="col">pdf</th>

      <th scope="col">title</th>
      <th scope="col">decription</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">discunt_price	</th>
      <th scope="col">quantity</th>
      <th scope="col">catagory</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($product as $product)
    <tr>
    <td>
      <a href="{{url('product-delete',$product->id)}}">delete</a>
      <a href="{{url('product-update',$product->id)}}">edit</a>
    
    
    </td>
  
      <td><a href="{{url('pdf',$product->id)}}">pdf</a></td>
      <td>{{$product->title}}</td>
      <td>{{$product->decription}}</td>
      <td>{{$product->price}}</td>
      <td>
            <img class="h-5 w-3" src="/product/{{$product->image}}">
      </td>
      <td>{{$product->discunt_price	}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->catagory}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>






            </div>

        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/template/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/template/assets/js/off-canvas.js"></script>
    <script src="admin/template/assets/js/hoverable-collapse.js"></script>
    <script src="admin/template/assets/js/misc.js"></script>
    <script src="admin/template/assets/js/settings.js"></script>template/
    <script src="admin/template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>