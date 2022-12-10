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
    <!-- endinject -->admin/
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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Add permission</h3>
                                @if(session('add_permission'))
                                   <span class="text-primary">{{ session('add_permission') }}</span>
                                @endif
                            </div>

                            <div class="card-body">
                                    <form action="{{ route('add_permission') }}" method="post">
                                        @csrf
                                        <label for="name">Permission Name</label>
                                        <input type="text"  class="text-dark" name="name_permission" id="">
                                        <button type="submit" class="btn btn-primary mt-3"> Add permission</button>
                                     </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- add role --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Add role</h3>
                                @if(session('role_store'))
                                   <span class="text-primary">{{ session('role_store') }}</span>
                                @endif
                            </div>

                            <div class="card-body">
                                    <form action="{{ route('role_store') }}" method="post">
                                        @csrf
                                        <label for="name">Role Name</label>
                                        <input type="text"  class="text-dark" name="role_name" id="">
                                      <div>
                                        @foreach ($permissions as $permission )


                                       <div>
                                        <input type="checkbox" name="check[]" value="{{ $permission->id }}" class="form-check-input" id="">
                                        {{ $permission->name }}
                                        <i class="input-frame"></i></label>
                                       </div>

                                       @endforeach



                                        <button type="submit" class="btn btn-primary mt-3"> Add permission</button>
                                     </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             {{-- end add role --}}

             {{-- role assign --}}
           <div  class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3> Assign role</h3>

                            </div>
                            <form action="{{ route('role_assign') }}" method="post">
                              @csrf
                            <select name="user_id" id="">

                              <option value=""> select </option>
                              @foreach ($users as $user )


                              <option value="{{ $user->id }}" class="text-dark ">{{$user->name}}</option>
                              @endforeach
                            </select>

                            <select name="role_id" id="">

                              <option value=""> select</option>
                              @foreach ($role as $role )


                              <option value="{{ $role->id }}" class="text-dark ">{{$role->name}}</option>
                              @endforeach
                            </select>

                                <button type="submit" class="btn btn-primary mt-3"> Add assign</button>
                                     </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- end role assign --}}



 {{-- show role list --}}


 <div class="card">
  <div class="card-header">
   <h4> Role List</h4>
  </div>
  <div class="card-body">
   <table class="table">
       <thead>
           <tr>
               <th>Role</th>
               <th>permission</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>


        @foreach ($roles as $rol )
           <tr>



        <td>{{ $rol->name }}</td>
        <td>
          @foreach ($rol->getAllPermissions() as $data )

          <span class="badge badge-info">{{ $data->name }}</span>

          @endforeach
        </td>


           </tr>
           @endforeach
       </tbody>

   </table>
  </div>
</div>

{{-- end show user list --}}

{{-- show user list --}}

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>show user list</h4>

        </div>
        <div class="card-body">
          <table>
            <tr class="">
            <th>User name</th>
            <th>Role name</th>
            <th>Permission name</th>
            <th>Remove</th>
          </tr>
          @foreach ($users as $user )


            <tr>
              <td>{{ $user->name }}</td>
              <td>
              @foreach ($user->getRoleNames() as $role )

              {{ $role }}
              @endforeach


              </td>



              <td>
                @foreach ($user->getAllPermissions() as $permission )

                {{ $permission->name }}
                @endforeach

              </td>
              <td>ad</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>




{{--  end show list --}}

















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
