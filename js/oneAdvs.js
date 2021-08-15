

function openForm() 
{
  var form =document.getElementById("reviewForm")
   form.style.display = "block";
   form.style.cssText="display:grid; grid-template-rows:1fr; gap:20px; direction: rtl;";
 }

function closeForm() 
{
  
document.getElementById("reviewForm").style.display = "none";
}
