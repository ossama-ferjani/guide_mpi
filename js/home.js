var a_propos=document.getElementById('a_propos');
var explorer=document.getElementById('explore');

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

a_propos.addEventListener('click',()=>{
    var x = $(window).scrollTop();
    $('html, body').animate({ scrollTop: x + document.querySelector('#a_propos_ctn').getBoundingClientRect().top -100 })
});


explorer.addEventListener('click',()=>{
    var x = $(window).scrollTop();
    $('html, body').animate({ scrollTop: x + document.querySelector('#explorer_ctn').getBoundingClientRect().top -100 })
});


