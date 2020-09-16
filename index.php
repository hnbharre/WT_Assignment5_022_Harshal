<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>WT Assignment5 PHP Mysql REST API CRUD FanFest Registration</title>
  <script src="jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="style\style.css">
    <script src="script/script.js" defer></script>
</head>
<body style="background-image: url(images/I4.jpg);">
    <header class="text-gray-700 body-font"  >
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" id="B1">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            
            <span class="ml-3 text-xl" style="color: whitesmoke;"> #HB! FanFest</span>
          </a>
          
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            
            <div s="mr-5 hover:text-gray-900" id="H2">
                <input type="button" class="bt1" id="Home" value="Home" style="padding: 15px">
            </div>
                <div id="H1" style="display: none">
                </div>
            

            <div s="mr-5 hover:text-gray-900" id="R2">
                <input type="button" class="bt2" id="Reg" value="Registration" style="padding: 15px">
            </div>
                <div id="R1" style="display: none">
                </div>
            

            <div s="mr-5 hover:text-gray-900" id="S2">
                <input type="button" class="bt3" id="Sreg" value="Show Registrants" style="padding: 15px">
            </div>    
                <div id="S1"style="display: none">
                </div>
          </nav>
        <div id="reload" s="mr-5 hover:text-gray-900" >
           <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0" id="reload2">Reload
                <path d="M5 12h14M12 5l7 7-7 7"></path>
             </svg>
       
        </div> 
      
            <section class="text-gray-700 body-font" id="D1" style="color: whitesmoke;">
              <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900" style="color: whitesmoke;">Register! Before they sold out
                    <br class="hidden lg:inline-block">Get Ready for the FanFest 🤟
                  </h1>
                  <p class="mb-8 leading-relaxed">FanFest takes biggest stars from screens to live stages all over the world, and celebrates our freedom to be heard, to be in the know, to be what’s next, and to belong.</p>
                
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                  <img class="object-cover object-center rounded" alt="FanFest" src="https://images.unsplash.com/photo-1583795484071-3c453e3a7c71?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                </div>
              </div>
            </section>
       
            <section class="text-gray-700 body-font relative" id="D2">
              
              <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="margin: auto; color:whitesmoke">Contact Us</h1>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                  <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                      <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text">
                    </div>
                    <div class="p-2 w-1/2">
                      <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email">
                    </div>
                    <div class="p-2 w-full">
                      <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" placeholder="Message"></textarea>
                    </div>
                    <div class="p-2 w-full">
                      <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                    </div>
                    <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                      <a class="text-indigo-500" style="color: whitesmoke;">Copyright &copy; 2020, Harshal Bharre </a>
                      <p class="leading-normal my-5" style="color: whitesmoke;">abc@mitaoe.ac.in 
                        <br>Pune, +91-9071123436
                      </p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-4 text-gray-500">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-4 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                          </svg>
                        </a>
                        <a class="ml-4 text-gray-500">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </section> 
           
       </div>
      </header>
  
      <div id="hb1" style="display: none;">
        <section class="text-gray-700 body-font">
          <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
              <img alt="feature" class="object-cover object-center h-full w-full" src="images/H5.jpg">
            </div>
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
              <div class="flex flex-col mb-10 lg:items-start items-center">
                <br><br>
                <div class="flex-grow">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="color: whitesmoke;">Office address, Pune</h2>
                  <p class="leading-relaxed text-base" style="color: whitesmoke;">MIT Academy of Engineering, Alandi road,
                    Pune - 412 105, Maharashtra (India).
                    Phone : - +91-9071123436, +91-8793323500</p>
                </div>
              </div>
              <br><br>
              <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="color: whitesmoke;">Office address, Nagpur</h2>
                  <p class="leading-relaxed text-base" style="color: whitesmoke;">MIT Academy of Engineering, Alandi road,
                    Nagpur, Maharashtra (India).<br>
                    Phone : - +91-9071123436, +91-8793323500</p>
                </div>
              </div>
              <br><br>
              <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="color: whitesmoke;">Office address, Banglore</h2>
                  <p class="leading-relaxed text-base" style="color: whitesmoke;">MIT Academy of Engineering, Alandi road,
                    Banglore, Karnataka (India).<br>
                    Phone : - +91-9071123436, +91-8793323500</p>
                </div>
              </div>
            </div>
          </div>
        </section>
  
      </div>
    <div id="Page2" class="page" style="display: none;">
			
      <form class="Entry" name="form" id="form1" method="post" action="" onSubmit="return validateForm()">
					<div class="input">Name: <input id="name" name="name1" type="text" placeholder="Enter full name.."></div>
					<span id="nam1"></span>
					<div class="input">
						Gender: <input id="gender" type="radio" name="r" value="male">Male
								<input type="radio" name="r" value="female">Female</div>
						<span id="gen1"></span>
					<div class="input">Email Id: <input id="email" name="email1" type="text" placeholder="Email Id.."></div>	
					<span id="mail"></span>
					<div class="input">Age: <input id="age" name="age1" type="text" placeholder="Your age.."></div>
					<span id="ag"></span>
					<div class="input">Mobile No: <input id="mobile" name="mobile1" type="text" placeholder="mobile no.."></div>
					<span id="mob"></span>
					<div class="input">
						State:
						<select id="state" name="state1">
							<option value =""disabled selected hidden>Select state</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Karnatak">Karnatak</option>
							<option value="Jammu&Kashmir">Jammu&Kashmir</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="Punjab">Punjab</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
            </select>
          </div>
					<span id="stat"></span>
					<div class="input">Comment: <input id="comment" name="comment1" type="text" placeholder="Comment here if any issue.."></div>
          <span id="com"></span>
          <br>
					<div class="input"><input id="term" type="checkbox" name="term1"> I agree to Terms & conditions</div>
          <span id="ter"></span>
          <br>
          <div id="Rform" s="mr-5 hover:text-gray-900" >
            <input type="submit" name="submits" value="Submit" id="register" style="padding: 10px;">	
          </div>	
					
        </form>
			
    </div>
    <div id="Page3" class="page" style="display: none;">
			<table id="display" class="tpage">
				<tr>
					<th>Name</th>
					<th>Gender</th>
					<th>Email Id</th>
					<th>Age</th>
					<th>Mobile No.</th>
					<th>State</th>
          <th>Comment</th>
          <th>Time Stamp</th>
				</tr>
				<?php include "fetch.php" ?>
      </table>
 
		</div>
   
    <script defer>
        var con2=document.getElementById("D1");
        var con3=document.getElementById("D2");
        var dbox1=document.getElementById("H1");
        var dbox2=document.getElementById("R1");
        var dbox3=document.getElementById("S1");
        var hbox=document.getElementById("hb1")
        var hbox2=document.getElementById("Page2")
        var hbox3=document.getElementById("Page3")
        document.getElementById("Home").addEventListener("click", function(){
            var box1=document.getElementById("H1");
            
            if(box1.style.display=="none")
            {
                con2.style.display="none";
                con3.style.display="none";
                dbox2.style.display="none";
                dbox3.style.display="none";
                hbox2.style.display="none";
                hbox3.style.display="none";
                box1.style.display="block";
                hbox.style.display="block";
            }
            else
            {
                box1.style.display="none";
                hbox.style.display="none";
            }
        })
        document.getElementById("Reg").addEventListener("click", function(){
            var box2=document.getElementById("R1");
            if(box2.style.display=="none")
            {
                con2.style.display="none";
                con3.style.display="none";;
                dbox3.style.display="none";
                dbox1.style.display="none";
                hbox.style.display="none";
                hbox3.style.display="none";
                hbox2.style.display="block";
                box2.style.display="block";
                
            }
            else
            {
                box2.style.display="none";
                hbox2.style.display="none";
            }
        })
        document.getElementById("Sreg").addEventListener("click", function(){
            var box3=document.getElementById("S1");
            if(box3.style.display=="none")
            {
                con2.style.display="none";
                con3.style.display="none";
                dbox1.style.display="none";
                dbox2.style.display="none";
                hbox.style.display="none";
                hbox2.style.display="none";
                hbox3.style.display="block";
                box3.style.display="block";
               
            }
            else
            {
                box3.style.display="none";
                hbox3.style.display="none";
            }
        })
        document.getElementById("reload2").addEventListener("click", function(){
            var box4=document.getElementById("D1");
            var box5=document.getElementById("D2");
            if(box4.style.display=="none" && box5.style.display=="none")
            {
                dbox1.style.display="none";
                dbox2.style.display="none";
                dbox3.style.display="none";
                hbox.style.display="none";
                hbox2.style.display="none";
                hbox3.style.display="none";
                box4.style.display="block";
                box5.style.display="block";
               
            }
            else
            {
                box4.style.display="block";
                box5.style.display="block";
            }
        })
    </script>
</body>
</html>

<?php
include "Api.php";
if(isset($_POST['submits'])){
    $names = $_POST['name1'];
    $genders = $_POST['r'];
    $emails = $_POST['email1'];
    $ages = $_POST['age1'];
    $mobiles = $_POST['mobile1'];
    $states = $_POST['state1'];
    $comments = $_POST['comment1'];

    $insertquery = "insert into showregistration(
		name,gender,email,age,mobile,state,comment) values('$names','$genders',
        '$emails','$ages','$mobiles','$states','$comments') ";

        $res = mysqli_query($con,$insertquery);

        if($res){
            ?>
            <script>
                alert("Data Inserted Sucessfully");
                </script>
                <?php
        }else{
        ?>
            <script>
                alert("Data not Inserted");
                </script>
                <?php
        }       
}


		

?>