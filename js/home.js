var a_propos=document.getElementById('a_propos');

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

a_propos.addEventListener('click',()=>{
    var x = $(window).scrollTop();
    $('html, body').animate({ scrollTop: x + document.querySelector('#a_propos_ctn').getBoundingClientRect().top -100 })
});


