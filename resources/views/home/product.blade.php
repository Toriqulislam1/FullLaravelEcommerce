<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            
            <div class="row">
            @foreach($product as $object) 
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$object->id)}}" class="option1">
                           details
                           </a>
                          <form action="/add_cart/{{$object->id}}" >
                           @csrf
                           <input type="number" name="quentity" value="1">
                           <input type="submit" value="add to cart">
                          </form>


                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$object->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                       
                         {{ $object->title }}
                       
                        </h5>
                        @if($object->discunt_price!=null)
                        <h6>
                        {{ $object->discunt_price}}
                        </h6>

                        <h6 style="text-decoration:line-through">
                        {{ $object->price}}
                        </h6>
                        @endif
                        
                     </div>
                  </div>
               </div>

               @endforeach
                  </div>
               </div>
              

               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
           
         
      </section>