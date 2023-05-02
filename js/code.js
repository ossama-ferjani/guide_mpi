let name=document.getElementById("formGroupExampleInput")
let message=document.getElementById("exampleFormControlTextarea1")
let sub=document.getElementById("sub")
let popup=document.getElementById("popup")
sub.disabled=true
sub.addEventListener("click",
    ()=>{
        popup.classList.add("open-popup")

})
name.addEventListener("input",
    ()=>
        sub.disabled = !(name.value.trim().length>0  && message.value.trim().length>0)
)
message.addEventListener("input",
    ()=>
     sub.disabled = !(name.value.trim().length>0 && message.value.trim().length>0)
)
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('success') && urlParams.get('success') === 'true') {
  popup.classList.add('open-popup')
}
document.getElementById("ok").addEventListener("click", function(){
    history.replaceState(null, null, window.location.href.split('?')[0]);
      document.getElementById("popup").style.display = "none";
  }
);