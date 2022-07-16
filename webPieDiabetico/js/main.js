let mensajes=["07 de cada amputación de pierna se realiza en el pie díabético",
"Uno de cada cuatro pacientes con diabetes desarrolla una úlcera en el pie",
"El tratamiento del pie diabético es muy complejo, difícil y de una evolución impredecible",
"El objetivo más importante de luchar en el tratamiento del pie diabético es que el paciente vuelva a caminar sin complicaciones",
"El fantasma de la amputación en el pie diabético siempre está presente, pero hay tiempo para amputar y es lo último que se debe sugerir, a excepción que comprometa la vida del paciente"]

function showMsj() {
    document.querySelector('#msjM').textContent= mensajes[getRandomInt(0,5)];
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

// Simulate click function
function clickOpenMensaje() {
    document.querySelector('#btnOM').click();
}

function clickCloseMensaje() {
    document.querySelector('#btnCM').click();
}

function verImg(){
    var secRemove = document.getElementsByClassName("secRemove");
    var divRemove = document.getElementsByClassName("divRemove");

    for (var i=0; i<secRemove.length; i++){
        secRemove[i].classList.add("d-none");
    }

    for (var i=0; i<divRemove.length; i++){
        divRemove[i].classList.remove("imgSensible");
    }
}

let contador=1;

function scrollAuto(){
    const video = document.getElementById("video");
    const mensaje = document.getElementById("mensaje");
    const mensaje1 = document.getElementById("mensaje1");
   
    if(contador==1){
        console.log("contador=1");
        window.scrollTo({
            top: video.scrollHeight
        });
        contador++;
    }else{
        if(contador==2){
            window.scrollTo({
                top:video.scrollHeight+ mensaje.scrollHeight
            });
            contador++;
        }else{
            if(contador==3){
                window.scrollTo({
                    top: video.scrollHeight+ mensaje.scrollHeight+ mensaje1.scrollHeight
                });
                contador++;
            }
        }
    }
    console.log(contador);
}

// Simulate a click every second
//setInterval(clickOpenMensaje, 1000);
setInterval(scrollAuto, 15000);