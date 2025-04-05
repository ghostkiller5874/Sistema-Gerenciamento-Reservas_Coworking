// function scrollToSection(id) {
//     document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
// }


$(document).ready(function(){
    $(".scroll").click(function(event){
        event.preventDefault(); // Evita o comportamento padrão
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top
        }, 1000); // Tempo da animação (800ms)
    });
});