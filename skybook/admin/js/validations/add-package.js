function validateForm()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("validatedetails").textContent="";
    document.getElementById("validatedate").textContent="";
    document.getElementById("validatecost").textContent="";

    var name=document.getElementById("name").value;
    var date=document.getElementById("date").value;
    var cost=document.getElementById("cost").value;
    var details=document.getElementById("details").value;

    var flag=true;

    if(name=="")
    {
        document.getElementById("validatename").textContent="Please enter name";
        document.getElementById("name").style.border="1px solid red";
        flag=false;
    }
    if(date=="")
    {
        document.getElementById("validatedate").textContent="Please enter date";
        document.getElementById("date").style.border="1px solid red";
        flag=false;
    }
    if(details=="")
    {
        document.getElementById("validatedetails").textContent="Please enter details";
        document.getElementById("details").style.border="1px solid red";
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
function cleardatevalidation()
{
    document.getElementById("validatedate").textContent="";
    document.getElementById("date").style.border="1px solid green";
}
function cleardetailsvalidation()
{
    document.getElementById("validatedetails").textContent="";
    document.getElementById("details").style.border="1px solid green";
}