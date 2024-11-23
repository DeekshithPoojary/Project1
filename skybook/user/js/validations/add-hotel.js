function validateForm()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("validateemail").textContent="";
    document.getElementById("validatecontactnumber").textContent="";
    document.getElementById("validateaddress").textContent="";
    document.getElementById("validatedescription").textContent="";
    document.getElementById("validatecost").textContent="";

    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var contactnumber=document.getElementById("contactnumber").value;
    var address=document.getElementById("address").value;
    var description=document.getElementById("description").value;
    var cost=document.getElementById("cost").value;

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
    if(address=="")
    {
        document.getElementById("validateaddress").textContent="Please enter address";
        document.getElementById("address").style.border="1px solid red";
        flag=false;
    }
    if(description=="")
    {
        document.getElementById("validatedescription").textContent="Please enter description";
        document.getElementById("description").style.border="1px solid red";
        flag=false;
    }
    if(cost=="")
    {
        document.getElementById("validatecost").textContent="Please enter cost";
        document.getElementById("cost").style.border="1px solid red";
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
function cleardescriptionvalidation()
{
    document.getElementById("validatedescription").textContent="";
    document.getElementById("description").style.border="1px solid green";
}
function clearcostvalidation()
{
    document.getElementById("validatecost").textContent="";
    document.getElementById("cost").style.border="1px solid green";
}
function clearpasswordvalidation()
{
    document.getElementById("validatepassword").textContent="";
    document.getElementById("password").style.border="1px solid green";
}