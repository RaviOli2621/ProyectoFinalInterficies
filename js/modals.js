let contenedorMod = []
let todosBotones = [];


function crearModal(ponerDatos,titulo,cuerpo,botonAbrir,botones)
{
    //botones = [{botonId,texto,redireccion(si es "close" que cierre el modal)}]
    let body = document.getElementById(ponerDatos);
    let modal = '<div id="myModal'+contenedorMod.length+'" class="modal">'+
                        '<div class="modal-content">'+
                            '<div class="modal-header">'+
                            '<span class="close" onclick=\'document.getElementById("myModal'+contenedorMod.length+'").style.display = "none";\'>&times;</span>'+
                            '<h2>'+titulo+'</h2>'+
                            '</div>'+
                            '<div id="modal-body'+contenedorMod.length+'" class="modal-body">'+
                                cuerpo+
                            '</div>'+
                            '<div class="modal-footer">'+
                            '<h3>'+
                            '<button type="submit" id="'+botones[0].id+'" class="modalButtonGrey" name="siBorrar" >'+botones[0].texto+'</button>'+
                                '<button type="submit" id="'+botones[1].id+'" class="modalButtonColor" name="siBorrar" >'+botones[1].texto+'</button>'+
                             '</h3>'+
                            '</div>'+
                        '</div>';
    body.innerHTML+= modal;
    modal = document.getElementById("myModal"+contenedorMod.length);
    contenedorMod.push(contenedorMod);
    modal.style.display = "none";
    //document.getElementById(botonAbrir).addEventListener("click",function(){modal.style.display = "block";})
    let botonesAbrir = document.getElementById(botonAbrir) ?? ""; 
    if(botonesAbrir != "") botonesAbrir.addEventListener("click",function(){modal.style.display = "block";});
    else
    {
        let botonesAbrir = document.getElementsByClassName(botonAbrir);
        for (let element of botonesAbrir) {
            element.addEventListener("click",function(){modal.style.display = "block";});
        }

    }
    botones.forEach(element => {
        modalExtraBotones(element.id,element.redireccion,modal);
    });
}
function modalExtraBotones(botonId,redireccion,modal)
{
    let bt = document.getElementById(botonId);
    if(redireccion == "close") modal.style.display = "none";
    else 
    {
        let url = window.location.href;
        if(url.includes("localhost")) url = url.split("/vista")[0];
        else url = "https://xavirubio.cat";
        url +=  "/vista/"+redireccion;
        bt.addEventListener("click",function(){location.href = url;});
    }
}