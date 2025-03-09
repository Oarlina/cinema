
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.onscroll = function (){
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)
    {
        scrollToTopBtn.classList.add('show');
    } else 
    {
        scrollToTopBtn.classList.remove('show');
    }
};

scrollToTopBtn.addEventListener('click',function(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

function myFunction() {
    var x = document.getElementsByClassName("nav-milieu");
    var y = document.getElementsByClassName("nav-droite");
    x = x[0];
    y = y[0];
    if (x.style.display == "block") {
        x.style.display = "none";
        y.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "block";
    }
}