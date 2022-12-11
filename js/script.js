function cambiar(num) {
    switch (num) {
        case 1:
            document.getElementById("text").style.backgroundColor = "#D90429"
            document.getElementById("imagen").src = "./img/mecanica.webp"
            document.getElementById("curso_texto").textContent = "En este curso de mecánica automotriz aprenderás a comprender la estructura de un automóvil, los diversos problemas que pueden surgir y cómo solucionarlos, analizando las diversas herramientas utilizadas."
            break;
        case 2:
            document.getElementById("text").style.backgroundColor = "#D9AA04"
            document.getElementById("imagen").src = "./img/laptop.webp"
            document.getElementById("curso_texto").textContent = "En este curso de mantenimiento de computadoras o computadores aprenderás los conceptos básicos de informática y sistematización, reconocerás las partes de PC, laptop como tarjetas, tableros, procesadores, etc."
            break;

        case 3:
            document.getElementById("text").style.backgroundColor = "#3EA400"
            document.getElementById("imagen").src = "./img/electronica2.webp"
            document.getElementById("curso_texto").textContent = "El objetivo de este programa es que el alumno conozca los fundamentos básicos de la  digital para aplicarlos a su labor diaria. Así, esta capacitación acerca al estudiante a estos ámbitos, con un programa actualizado y de calidad."
            
            break;

        case 4:
            document.getElementById("text").style.backgroundColor = "#AE04D9"
            document.getElementById("imagen").src = "./img/sonido(1).webp"
            document.getElementById("curso_texto").textContent =  "En este curso aprenderás todo lo que necesitas para trabajar con sistemas de audio y poder aplicar tus conocimientos a multitud de ámbitos profesionales y sociales."
            
            break;
        case 5:
            document.getElementById("text").style.backgroundColor = "#00A47C"
            document.getElementById("imagen").src = "./img/robotica.webp"
            document.getElementById("curso_texto").textContent =  "Aborda un amplio conocimiento aportado por un equipo docente especializado en este campo y en la enseñanza académica, una oportunidad para progresar en un sector con gran proyección"
            break;
    
        default:
            break;
    }
}

// var scrollPos = 0;
// window.addEventListener('scroll', function(){
//   if ((document.body.getBoundingClientRect()).top > scrollPos)
// 		document.getElementById('navegacion').style.position = "fixed";
// 	else
//     document.getElementById('navegacion').style.position = "absolute";
// 	scrollPos = (document.body.getBoundingClientRect()).top;
// });
console.log(window.screenY);
function img() {
    let img = document.getElementById("img1")
    img.style.transition = "all 0.5s"
    img.style.display = "block"
    img.style.position = "fixed"
    img.style.background = "rgba(0,0,0,0.8)"
    img.style.top = "0" 
    img.style.left = "0" 
    img.style.width = "100%" 
    img.style.height = "100%" 
}

function img2() {
    let img = document.getElementById("img2")
    img.style.transition = "all 0.5s"
    img.style.display = "block"
    img.style.position = "fixed"
    img.style.background = "rgba(0,0,0,0.8)"
    img.style.top = "0" 
    img.style.left = "0" 
    img.style.width = "100%" 
    img.style.height = "100%" 
}

function img3() {
    let img = document.getElementById("img3")
    img.style.transition = "all 0.5s"
    img.style.display = "block"
    img.style.position = "fixed"
    img.style.background = "rgba(0,0,0,0.8)"
    img.style.top = "0" 
    img.style.left = "0" 
    img.style.width = "100%" 
    img.style.height = "100%" 
}

function img4() {
    let img = document.getElementById("img4")
    img.style.transition = "all 0.5s"
    img.style.display = "block"
    img.style.position = "fixed"
    img.style.background = "rgba(0,0,0,0.8)"
    img.style.top = "0" 
    img.style.left = "0" 
    img.style.width = "100%" 
    img.style.height = "100%" 
}

function cerrar() {
    let img = document.getElementById("img1")
    img.style.transition = "all 0.5s"
    img.style.position = "absolute"
    img.style.top = "-100%" 
}

function cerrar2() {
    let img = document.getElementById("img2")
    img.style.transition = "all 0.5s"
    img.style.position = "absolute"
    img.style.top = "-100%" 
}

function cerrar3() {
    let img = document.getElementById("img3")
    img.style.transition = "all 0.5s"
    img.style.position = "absolute"
    img.style.top = "-100%" 
}

function cerrar4() {
    let img = document.getElementById("img4")
    img.style.transition = "all 0.5s"
    img.style.position = "absolute"
    img.style.top = "-100%" 
}

function display() {
    document.getElementById("form").style.display = "block"
}

function añadir() {
    window.location = "añadir_producto.php";
}