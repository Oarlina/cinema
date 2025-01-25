console.log("oui");

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
