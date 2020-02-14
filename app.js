document.addEventListener("DOMContentLoaded", e=>{
    document.querySelector("#frmAlumnos").addEventListener("submit", event=>{
        event.preventDefault();

        let codigo = document.querySelector("#txtCodigoAlumno").value,
            nombre = document.querySelector("#txtNombreAlumno").value,
            direccion = document.querySelector("#txtDireccionAlumno").value,
            telefono = document.querySelector("#txtTelefonoAlumno").value;

        console.log(codigo, nombre, direccion, telefono);
        
        if( 'localStorage' in window ){
            window.localStorage.setItem("usis055218", codigo);
            window.localStorage.setItem("Alfonso", nombre);
            window.localStorage.setItem("San Miguel", direccion);
            window.localStorage.setItem("78953245", telefono);
        } else {
            alert("Por favor ACTUALIZATE!!!.");
        }
    });
    document.querySelector("#btnRecuperarAlumno").addEventListener("click", event=>{
        document.querySelector("#txtCodigoAlumno").value = window.localStorage.getItem("codigo");
        document.querySelector("#txtNombreAlumno").value = window.localStorage.getItem("nombre");
        document.querySelector("#txtDireccionAlumno").value = window.localStorage.getItem("direccion");
        document.querySelector("#txtTelefonoAlumno").value = window.localStorage.getItem("telefono");
    });
});

/*document.addEventListener("DOMContentLoaded",function(e){
    alert("CALLBACK LISTO");
});*/

/*document.addEventListener("DOMContentLoaded", init);
function init(e){
    alert("LISTO");
}*/