	
function checkEmail(str1)
{
    var posat=str1.indexOf("@");
    var posdot=str1.indexOf(".");
    
    if(posat!=-1 && posdot!=-1)
    {
        if(posat>=1 && (posdot-posat)>=2 && (str1.length-1-posdot)>=2 && (str1.length-1-posdot)<=5)
        {
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}

function validateForm(){
    var nam=document.form.name1.value;
    var a=document.form.r.value;
    var id=document.form.email1.value;
    var ages=document.form.age1.value;
    var no=document.form.mobile1.value;
    var st=document.form.state1.value;
    var tr=document.form.term1.checked;
    

    if(nam=="" || nam==null)
    {
        document.getElementById("nam1").innerHTML="Name should not be blank";
        return false; 
    }
    else if(nam.length<3)
    {
        document.getElementById("nam1").innerHTML="Name length should be 3-30";
        return false; 
    }
    else if(nam.length>30)
    {
        document.getElementById("nam1").innerHTML="Name length should be 3-30";
        return false; 
    }
    else if(isNaN(nam)==false)
    {
        document.getElementById("nam1").innerHTML="Name should not be numeric";
        return false; 
    }
    else if(a=="" || a==null)
    {
        document.getElementById("gen1").innerHTML="should not be empty";
        return false;
    }
    
    else if(id=="" || id==null)
    {
        document.getElementById("mail").innerHTML="Email should not be empty";
        return false;
    }
    else if(!checkEmail(id))
    {
        document.getElementById("mail").innerHTML="Email not valid";
        return false;
    }
    else if(ages < 18 )
    {
        document.getElementById("ag").innerHTML="You are not eligible";
        return false;
    }
    else if(ages > 30 )
    {
        document.getElementById("ag").innerHTML="You are not eligible";
        return false;
    }
    else if(no=="" || no==null)
    {
        document.getElementById("mob").innerHTML="Mobile no. should not be empty";
        return false;
    }
    else if(no.length!=10)
    {
        document.getElementById("mob").innerHTML="Please enter 10 digit mobile no.";
        return false;
    }
    
   else if(st==0)
    {
        document.getElementById("stat").innerHTML="Please select State";
        return false;
    }
    else if(tr==false)
    {
        document.getElementById("ter").innerHTML="Please agree terms and condition";
        return false;
    }
   else
	 {     
                  alert("successfully registered");
                  return true;
               }
}

         

