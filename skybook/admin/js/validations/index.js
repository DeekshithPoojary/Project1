function validateForm()
{
    document.getElementById("validateusername").textContent="";
    document.getElementById("validatepassword").textContent="";

    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    var flag=true;
    
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