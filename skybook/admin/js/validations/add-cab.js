function validateForm()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("validatenumber").textContent="";
    document.getElementById("validatecontactnumber").textContent="";
    document.getElementById("validatecost").textContent="";

    var name=document.getElementById("name").value;
    var contactnumber=document.getElementById("contactnumber").value;
    var cost=document.getElementById("cost").value;
    var number=document.getElementById("number").value;

    var flag=true;

    if(name=="")
    {
        document.getElementById("validatename").textContent="Please enter name";
        document.getElementById("name").style.border="1px solid red";
        flag=false;
    }
    if(contactnumber=="")
    {
        document.getElementById("validatecontactnumber").textContent="Please enter contactnumber";
        document.getElementById("contactnumber").style.border="1px solid red";
        flag=false;
    }
    if(number=="")
    {
        document.getElementById("validatenumber").textContent="Please enter number";
        document.getElementById("number").style.border="1px solid red";
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
function clearcostvalidation()
{
    document.getElementById("validatecost").textContent="";
    document.getElementById("cost").style.border="1px solid green";
}
function clearcontactnumbervalidation()
{
    document.getElementById("validatecontactnumber").textContent="";
    document.getElementById("contactnumber").style.border="1px solid green";
}
function clearnumbervalidation()
{
    document.getElementById("validatenumber").textContent="";
    document.getElementById("number").style.border="1px solid green";
}