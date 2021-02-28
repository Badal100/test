


<!DOCTYPE html>
<html>
<head>
	<title>Main Page for Customer</title>

	<link rel="stylesheet" href="w3.css">

</head>
<body>




<div class="w3-top">
<div class="w3-bar w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button w3-padding-large"><img src="Images/logo.jpg" width="80px" height="40px"></a>
    
  <div class="w3-container w3-bar-item w3-center" style="margin-left:300px;">
  <button class="w3-bar-item w3-button tablink w3-red w3-padding-large" onclick="openCity(event,'Home')"><b>HOME</b></button>
  <button class="w3-bar-item w3-button tablink w3-padding-large" onclick="openCity(event,'About')"><b>PREVIOUS REPAIRS</b></button>
  <button class="w3-bar-item w3-button tablink w3-padding-large" onclick="openCity(event,'Service')"><b>GARAGE</b></button>
  <button class="w3-bar-item w3-button tablink w3-padding-large red" onclick="openCity(event,'Contact')"><b>MONEY</b></button>



  </div>
  </div>
  </div>


<h3 class="w3-center" style="margin-top:110px;"><b>Vehicle Down...Fill out the Details for Pickup and Repair!</b></h3><br><br>


 <div class="w3-third w3-container w3-card w3-padding" style="margin-left: 80px;">
      
         
        <form >
               {{ csrf_field() }}
               
         <div class="w3-margin">
           <label class="w3-padding-top">Enter Name</label>
           <input class="w3-input w3-border w3-round" type="text" placeholder="Name" required name="Name"><br>
           <label class="w3-margin-top w3-padding-top">Enter Email ID</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Email" required name="Email" id="Email"><br>
          <label class="w3-margin-top">Enter Mobile Number</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Mobile Number" required name="Mobile"><br>
          <label class="w3-margin-top">Vehicle Type</label>
          <select class="w3-input w3-border w3-round">
            <option class="w3-input">2 Wheeler</option>
            <option class="w3-input">4 Wheeler</option>
          </select><br>
          <label class="w3-margin-top">Vehicle Model</label>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Vehicle Model" required name="Mobile"><br>
                    <label class="w3-margin-top">Select Garage Name:-</label>
             <select class="w3-input w3-border w3-round">
            <option class="w3-input">ABC Garage</option>
            <option class="w3-input">PQR Garage</option>
             <option class="w3-input">XYZ Garage</option>
            <option class="w3-input">LPR Garage</option>
          </select><br>
           <label class="w3-margin-top">Enter Problem of Vehicle</label>
          <textarea id="Message" name="Message" rows="3" cols="50" class="w3-input w3-border" placeholder=""></textarea>
           <a class="w3-input w3-border w3-deep-purple w3-margin-top w3-center" type="submit" href="Result" style="text-decoration: none;">Submit</a>
        
        </div>
        </form><br><br>
      </div>

 <div class="w3-col m7 w3-card" style="margin-left: 25px;">
      
         <table class="w3-border-all">
         	<tr class="w3-grey">
         		<th>Name of the Garage</th>
         		<th>Address:-</th>
         		<th>Email</th>
         		<th>Mobile Number</th>
         	</tr>
              
         	
         	<tr>

         		<td>ABC Garage</td>
         		<td>Nehru Nagar Pimpri chinchwad pune-411018</td>
         		<td>ABC.garage@gmail.com</td>
                <td>12234567</td>
         	</tr>

         	<tr>
         		<td>XYZ Garage</td>
         		<td>Nehru Nagar Pimpri chinchwad pune-411018</td>
         		<td>XYZ.garage@gmail.com</td>
                 <td>12234567</td>
         	</tr>


         	<tr>
         		<td>XYZ Garage</td>
         		<td>Nehru Nagar Pimpri chinchwad pune-411018</td>
         		<td>XYZ.garage@gmail.com</td>
                 <td>12234567</td>
         	</tr>

         </table>
      
      </div>

  </body>
</html>