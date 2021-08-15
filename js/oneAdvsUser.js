let editForm=document.getElementById("editForm");
let main=document.getElementById("main");
let overlay=document.getElementById("overlay");
let soldForm=document.getElementById("soldForm");


function openEditingForm()
{
  window.editForm.style.cssText="display:grid; grid-template-rows:1fr; gap:20px; direction: rtl;";
  window.main.style.cssText="position:fixed";
  window.overlay.style.cssText="display:block; position:fixed";
}

function closeEditingForm()
{
  window.overlay.style.display="none";
  window.editForm.style.display="none";
  window.main.style.position="static";
}
function showSoldForm()
{
  window.soldForm.style.cssText="display:flex; flex-direction:column; gap:20px;";
  window.overlay.style.cssText="display:block;";
  window.main.style.cssText="position:fixed";

}
function exitSoldFrom()
{
  window.soldForm.style.cssText="display:none";
  window.overlay.style.display="none";
  window.main.style.position="static";


}