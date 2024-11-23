function validateForm()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("validateemail").textContent="";
    document.getElementById("validatecontactnumber").textContent="";
    document.getElementById("validateaddress").textContent="";
    document.getElementById("validateusername").textContent="";
    document.getElementById("validatepassword").textContent="";

    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var contactnumber=document.getElementById("contactnumber").value;
    var address=document.getElementById("address").value;
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    var flag=true;

    if(name=="")
    {
        document.getElementById("validatename").textContent="Please enter name";
        document.getElementById("name").style.border="1px solid red";
        flag=false;
    }
    if(email=="")
    {
        document.getElementById("validateemail").textContent="Please enter email";
        document.getElementById("email").style.border="1px solid red";
        flag=false;
    }
    if(contactnumber=="")
    {
        document.getElementById("validatecontactnumber").textContent="Please enter contactnumber";
        document.getElementById("contactnumber").style.border="1px solid red";
        flag=false;
    }
    if (!(contactnumber.match(/^\d{10}$/))) {
        document.getElementById("validatecontactnumber").textContent = "Please enter Valid Mobile Number";
        document.getElementById("contactnumber").style.border='1px solid red';
        flag = false;
    }
    if(address=="")
    {
        document.getElementById("validateaddress").textContent="Please enter address";
        document.getElementById("address").style.border="1px solid red";
        flag=false;
    }
    if(username=="")
    {
        document.getElementById("validateusername").textContent="Please enter username";
        document.getElementById("username").style.border="1px solid red";
        flag=false;
    }
    if(password=="")
    {
        document.getElementById("validatepassword").textContent="Please enter password";
        document.getElementById("password").style.border="1px solid red";
        flag=false;
    }

    return flag;
}

function clearnamevalidation()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("name").style.border="1px solid green";
}
function clearemailvalidation()
{
    document.getElementById("validateemail").textContent="";
    document.getElementById("email").style.border="1px solid green";
}
function clearcontactnumbervalidation()
{
    document.getElementById("validatecontactnumber").textContent="";
    document.getElementById("contactnumber").style.border="1px solid green";
}
function clearaddressvalidation()
{
    document.getElementById("validateaddress").textContent="";
    document.getElementById("address").style.border="1px solid green";
}
function clearusernamevalidation()
{
    document.getElementById("validateusername").textContent="";
    document.getElementById("username").style.border="1px solid green";
}
function clearpasswordvalidation()
{
    document.getElementById("validatepassword").textContent="";
    document.getElementById("password").style.border="1px solid green";
}