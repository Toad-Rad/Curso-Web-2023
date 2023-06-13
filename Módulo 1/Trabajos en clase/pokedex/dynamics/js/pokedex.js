window.addEventListener("load", ()=>{
    const btnAgregar = document.getElementById("btn-agregar");
    const select = document.getElementById("contenedor-agregar");
    const divAgregar = document.getElementById("select-tipos");
    const formAgregar = document.getElementById("form-nuevo");
    const btnEnviar = document.getElementById("btn-enviar");
    const buscador = document.getElementById("buscador");
    const mostrar = document.getElementById("contenedor-mostrar");

    fetch("./dynamics/php/consultar.php")//funcion hacía una url
    .then((respuesta) => {//regresa un valor...
        return respuesta.json();//que luego es transformado a objeto con JSON
        }).then((datosJSON)=>{
            console.log(datosJSON);
            for(let tipo of datosJSON)
            {
                select.innerHTML += `
                    <option value = ${tipo.type_id}>${tipo.name_id}</option>
                `;
            }
        });

    btnAgregar.addEventListener("click", ()=>{
        divAgregar.style.display = "block";
    });
    

    btnEnviar.addEventListener("click",(e) => {
        e.preventDefault();
        divAgregar.style.display= "none";
        datosForm= new FormData(formAgregar);

        fetch("./dynamics/php/insertar.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            alert(datosJSON.mensaje);
        });
    });
    buscador.addEventListener("keyup", ()=>{
        let termino = buscador.value;
        mostrar.style.display= "block";
        mostrar.innerHTML = "";
        mostrar.style.backgroundColor= "white";
        if(termino.lenght >=3)
        {
            fetch("./dynamics/php/buscador.php?termino= "+termino)
            .then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                for(resultado of datosJSON)
                {
                    mostrar.innerHTML += `<div class="coinidencia" data-id=${resultado.pok_id}>${$resultado.pok_name}</div>`
                }
            });
        }
    });

});