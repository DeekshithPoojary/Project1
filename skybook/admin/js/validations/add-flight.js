function validateForm()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("validatefrom").textContent="";
    document.getElementById("validateto").textContent="";
    document.getElementById("validatedescription").textContent="";
    document.getElementById("validatedate").textContent="";
    document.getElementById("validatetime").textContent="";

    var name=document.getElementById("name").value;
    var from=document.getElementById("from").value;
    var to=document.getElementById("to").value;
    var description=document.getElementById("description").value;
    var date=document.getElementById("date").value;
    var time=document.getElementById("time").value;

    var flag=true;

    if(name=="")
    {
        document.getElementById("validatename").textContent="Please enter name";
        document.getElementById("name").style.border="1px solid red";
        flag=false;
    }
    if(from=="")
    {
        document.getElementById("validatefrom").textContent="Please enter from";
        document.getElementById("from").style.border="1px solid red";
        flag=false;
    }
    if(to=="")
    {
        document.getElementById("validateto").textContent="Please enter to";
        document.getElementById("to").style.border="1px solid red";
        flag=false;
    }
    if(description=="")
    {
        document.getElementById("validatedescription").textContent="Please enter description";
        document.getElementById("description").style.border="1px solid red";
        flag=false;
    }
    if(date=="")
    {
        document.getElementById("validatedate").textContent="Please enter date";
        document.getElementById("date").style.border="1px solid red";
        flag=false;
    }
    if(time=="")
    {
        document.getElementById("validatetime").textContent="Please enter time";
        document.getElementById("time").style.border="1px solid red";
        flag=false;
    }

    return flag;
}

function clearnamevalidation()
{
    document.getElementById("validatename").textContent="";
    document.getElementById("name").style.border="1px solid green";
}
function clearfromvalidation()
{
    document.getElementById("validatefrom").textContent="";
    document.getElementById("from").style.border="1px solid green";
}
function cleartovalidation()
{
    document.getElementById("validateto").textContent="";
    document.getElementById("to").style.border="1px solid green";
}
function cleardescriptionvalidation()
{
    document.getElementById("validatedescription").textContent="";
    document.getElementById("description").style.border="1px solid green";
}
function cleardatevalidation()
{
    document.getElementById("validatedate").textContent="";
    document.getElementById("date").style.border="1px solid green";
}
function cleartimevalidation()
{
    document.getElementById("validatetime").textContent="";
    document.getElementById("time").style.border="1px solid green";
}