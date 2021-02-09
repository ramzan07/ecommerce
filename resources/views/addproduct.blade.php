

   
  @extends('layouts.home')

  @section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
              <?php  
             $brand=\App\Brand::all();  
               ?>


   <div class="container">
      <div class="col-md-9">
         <h2 class="page-header" style="color:cadetblue">Add Product :</h2>
         <form class="form-horizontal" action="{{url('/addproduct')}}" method="POST">
            @csrf
          <?php $cat=\App\Category::all() ?>
               
            <div class="form-group">
               <label class="control-label col-xs-3   " for="category">Category:</label>
               <div class="col-xs-9">
                  <select class="form-control ProductCategory" id="ProductCategory" name="cat_id">
                     <option selected disabled>Select the Category</option>
                     
                     @foreach($cat as $c)
                     <option value="{{$c->id}}">{{$c->cat_name}}</option>
                   @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3  " for="brand">Brands:</label>
               <div class="col-xs-9">
                  <select class="form-control brand" id="brand_id" name="brand_id">
                     <option selected disabled>Select the Brand</option>
                     @foreach($brand as $b)
                     <option value="{{$b->brand_id}}">{{$b->brand_name}}</option>
                   @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="name">Product Model:</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" id="name" name="model_name" placeholder="Enter Product Name">
                
               </div>
            </div>
              
            <div class="form-group">
               <label class="control-label col-xs-3" for="price">Product Price:</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Product Details:</label>
               <div class="col-xs-9">
                  <textarea class="form-control" rows="5" id="msg" name="details"></textarea>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="image">Product Image:</label>
               <div class="col-xs-9">
                  <label for="FormControlFile"></label>
                  <input type="file" class="form-control-file" id="FormControlFile" name="image">
               </div>
            </div>
           <br>
            
            <div class="container" style="padding-left: 70px;">
               
               <h3>Display</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                       <select class="form-control" name="display_type">
                         <option  value="TFT LCD ">TFT LCD </option>

                         <option  value="IPS-LCD ">IPS-LCD </option>

                         <option  value="Resistive Touchscreen LCD ">Resistive Touchscreen LCD </option>
                         <option  value="Capacitive Touch screen LCD ">Capacitive Touch screen LCD </option>
                         <option  value="OLED ">OLED </option>
                         <option  value="AMOLED Retina Display ">AMOLED Retina Display </option>
                         <option  value="Haptic ">Haptic </option>
                         <option  value="Tactile touch screen ">Tactile touch screen</option>
                         <option  value="Gorilla Glass ">Gorilla Glass </option>
           
                       </select>
                     </div>
                      </div>

               <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Resolution</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Resolution" placeholder="Enter Product Resolution">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3"  for="price">Size</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Size" placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Pixel Density</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Pixel_Density" placeholder="Enter Product Pixel Density">
               </div>
            </div>
 

            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Touchscreen_ype:</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Touchscreen_type" placeholder="Enter Product Touchscreen type">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Color Reproduction  </label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Color_Reproduction  " placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Screen to body percentage</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Screen_to_body_percentage" placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Color_Reproduction</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Color_Reproduction" placeholder="Enter Product Color_Reproduction">
               </div>
            </div>
           
                      </div>  
              <div class="row">
                <div class="col-sm-3">
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">real flash</label>
               <div class="col-xs-9">
                  <input type="radio" name="realflash" value="yes"> yes<br>
                  <input type="radio" name="realflash" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Fingerprint sensor</label>
               <div class="col-xs-9">
                  <input type="radio" name="Fingerprint_sensor" value="yes"> yes<br>
                  <input type="radio" name="Fingerprint_sensor" value="no">no<br>
               </div>
            </div>
          </div>
        </div>
          <br>
          <h3>Conectivity</h3><hr>
          <div class="row">
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">3G</label>
               <div class="col-xs-9">
                  <input type="radio" name="G3" value="yes"> yes<br>
                  <input type="radio" name="G3" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">2G</label>
               <div class="col-xs-9">
                  <input type="radio" name="G2" value="yes"> yes<br>
                  <input type="radio" name="G2" value="no">no<br>
               </div>
            </div>
          </div>
        
                   
                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">4G</label>
               <div class="col-xs-9">
                  <input type="radio" name="G4" value="yes"> yes<br>
                  <input type="radio" name="G4" value="no">no<br>
               </div>
            </div>
          </div>


                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">GPS</label>
               <div class="col-xs-9">
                  <input type="radio" name="GPS" value="yes"> yes<br>
                  <input type="radio" name="GPS" value="no">no<br>
               </div>
            </div>
          </div>
        </div>
        <br>

            <h3>Sound</h3><hr>
           <div class="row">
                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-4" for="msg">Infrared</label>
               <div class="col-xs-8">
                  <input type="radio" name="Infrared" value="yes"> yes<br>
                  <input type="radio" name="Infrared" value="no">no<br>
               </div>
            </div>

              </div>
          
             
                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-md-4" for="msg">Loudpeaker</label>
               <div class="col-md-8">
                  <input type="radio" name="Loudpeaker" value="yes"> yes<br>
                  <input type="radio" name="Loudpeaker" value="no">no<br>
               </div>
            </div>
          </div>

                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-4" for="msg">HeadPHones</label>
               <div class="col-xs-8">
                  <input type="radio" name="HeadPHones" value="yes"> yes<br>
                  <input type="radio" name="HeadPHones" value="no">no<br>
               </div>
            </div>
          </div>
          </div>
         <br>
            <h3>Sensors</h3><hr>
            <div class="row">
                <div class="col-sm-3">
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Ambient Light</label>
               <div class="col-xs-9">
                  <input type="radio" name="Ambient_Light" value="yes"> yes<br>
                  <input type="radio" name="Ambient_Light" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Gyroscope</label>
               <div class="col-xs-9">
                  <input type="radio" name="Gyroscope" value="yes"> yes<br>
                  <input type="radio" name="Gyroscope" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Accelerometer</label>
               <div class="col-xs-9">
                  <input type="radio" name="Accelerometer" value="yes"> yes<br>
                  <input type="radio" name="Accelerometer" value="no">no<br>
               </div>
            </div>
          </div> 
 

             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Proximity</label>
               <div class="col-xs-9">
                  <input type="radio" name="Proximity" value="yes"> yes<br>
                  <input type="radio" name="Proximity" value="no">no<br>
               </div>
            </div>
          </div>
        </div>
      </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="submit"></label>
               <div class="col-xs-9">
                  <button type="submit" class="btn btn-primary center-block" value="submit">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
  

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- <script  src="../../Jquery/prettify.js"></script> -->
 <!-- <script type="text/javascript"> -->
   <script>
      $(document).ready(function(){
          
          
          
         $( ".ProductCategory" ).change(function() {
       var d = document.getElementById("ProductCategory").value;
       

      $.ajax({

                    type:'get',

                    url: '/myshop/public/getSubCategory/',
                    data:{'id':d},

                    success:function(data){
                         
                         $('.brand').find('option').remove();

                        var i = 0;
                         while(i < data.length)
                         {


                             $('.brand').append($('<option>',
                             {
                                value: data[i].id,
                                text : data[i].brand_name,
                              }));
                             i++;
                       }

                      },
                        error: function (data) {

                          console.log(data);
                        }




});
       });  

       });    

</script>
      


 </body>
 </html> 


 @endsection