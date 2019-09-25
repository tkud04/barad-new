  <?php
  $signal = $signals['okays'];
   $class = "alert-success";   
           
   if($val == "error"){
   	$signal = $signals['errors'];
   	$class = "alert-danger";         
       $pop .= "-error";
   } 
  ?>     
 <div class="row">
                      <div class="col-md-12">           
  <div class="alert {{$class}}" role="alert">
     <p>@if($val == "error")<strong>Whoops!</strong> @endif {{$signal[$pop]}}</p>
     <button class="close" data-dismiss="alert">x</button>
     <div class="clearfix"></div>
     <br><br>                      
  </div>
             </div>
                 </div>