

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="w3.css">
</head>
<body>



<h3 class="w3-center" style="margin-top:30px;"><b>Vehicle Down...Fill out the Details for Pickup and Repair!</b></h3><br><br>


 <div class="w3-third w3-container w3-card w3-padding" style="margin-left: 80px;">
      
         <label class="w3-text-red"><b>Submit this form to send your request to respected garage. And Check Status.</b></label>
        <form >
               {{ csrf_field() }}
               
         <div class="w3-margin">
         	 <label class="w3-padding-top">Customer Name</label>
           <input class="w3-input w3-border w3-round" type="text" placeholder="Customer Name" required name="Name"><br>

           <label class="w3-padding-top">Mobile Number</label>
           <input class="w3-input w3-border w3-round" type="text" placeholder="Mobile Number" required name="Name"><br>
          
           <label class="w3-padding-top">Garage Name</label>
           <input class="w3-input w3-border w3-round" type="text" placeholder="Garage Name" required name="Name"><br>

           <label class="w3-margin-top w3-padding-top">Garage Email ID</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Garage Email" required name="Email" id="Email"><br>

          <label class="w3-margin-top">Garage Mobile Number</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Garage Mobile Number" required name="Mobile"><br>
         
          <label class="w3-margin-top">Customer Vehicle Type</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Customer Vehicle Type" required name="Mobile"><br>

          <label class="w3-margin-top">Customer Vehicle Model</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Customer Vehicle Model" required name="Mobile"><br>
                 
           <label class="w3-margin-top">Problem of Vehicle</label>
          <textarea id="Message" name="Message" rows="3" cols="50" class="w3-input w3-border" placeholder=""></textarea>

                   <a class="w3-input w3-border w3-deep-purple w3-margin-top w3-center" type="submit" href="Result" style="text-decoration: none;">Submit</a>

        </div>
        </form><br><br>
      </div>




 <div class="w3-half w3-card w3-border w3-padding" style="margin-left: 50px;">
      
         
          <label class="w3-margin-top"><h5>Garage Name:-</h5></label>
          <label class="w3-margin-top"><h5>Total Distance from Garage to your Location:-</h5></label>
   
      
         
          <label class="w3-margin-top"><h5>Charges to be Paid:-</h5></label>
          <label class="w3-margin-top"><h5>XYZ Field:-</h5></label>
          <label class="w3-margin-top"><h5>Request Status:-</h5></label>
   
      
      </div>
<a href="/main" class="w3-button w3-red w3-right w3-margin-top w3-large" style="margin-right: 100px;">Home Page</a>

</body>
</html>