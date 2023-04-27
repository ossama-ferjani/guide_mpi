let name=document.getElementById("formGroupExampleInput")
let email=document.getElementById("formGroupExampleInput2")
let phone=document.getElementById("formGroupExampleInput3")
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
        sub.disabled = !(name.value.trim().length>0 && email.value.trim().length>0 && email.value.includes("@")&& email.value.trim().charAt(0) !== "@" && email.value.trim().charAt(email.value.trim().length-1) !== "@" && phone.value.trim().length==8 && message.value.trim().length>0)
)
email.addEventListener("input",
    ()=>
    sub.disabled = !(name.value.trim().length>0 && email.value.trim().length>0 && email.value.includes("@")&& email.value.trim().charAt(0) !== "@" && email.value.trim().charAt(email.value.trim().length-1) !== "@" && phone.value.trim().length==8 && message.value.trim().length>0)
)
phone.addEventListener("input",
    ()=>
     sub.disabled = !(name.value.trim().length>0 && email.value.trim().length>0 && email.value.includes("@")&& email.value.trim().charAt(0) !== "@" && email.value.trim().charAt(email.value.trim().length-1) !== "@" && phone.value.trim().length==8 && message.value.trim().length>0)
)
message.addEventListener("input",
    ()=>
     sub.disabled = !(name.value.trim().length>0 && email.value.trim().length>0 && email.value.includes("@")&& email.value.trim().charAt(0) !== "@" && email.value.trim().charAt(email.value.trim().length-1) !== "@" && phone.value.trim().length==8 && message.value.trim().length>0)
)
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('success') && urlParams.get('success') === 'true') {
  popup.classList.add('open-popup')
}
document.getElementById("ok").addEventListener("click", function(){
    history.replaceState(null, null, window.location.href.split('?')[0]);
      document.getElementById("popup").style.display = "none";
  });