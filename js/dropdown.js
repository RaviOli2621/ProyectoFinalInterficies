function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

let goAdminProject = document.getElementsByClassName("goAdminProject") ?? "";
if(goAdminProject != "")
  {
    for (let element of goAdminProject) {
      element.addEventListener("click",function(){ redirect("adminProjecte.php")});
    }
  }
let goAdminGrup = document.getElementById("goAdminGrup") ?? "";
goAdminGrup!=""? goAdminGrup.addEventListener("click",function(){redirect("adminGrups.php")}):goAdminGrup;

let goAdminProfessor = document.getElementById("goAdminProfessor") ?? "";
goAdminProfessor!=""? goAdminProfessor.addEventListener("click",function(){redirect("adminProfessor.php")}):goAdminProfessor;

let goProfessorsFaltes = document.getElementById("goProfessorsFaltes") ?? "";
goProfessorsFaltes!=""?goProfessorsFaltes.addEventListener("click",function(){redirect("professorsFaltes.php")}):goProfessorsFaltes;

let goProfessorsLlista = document.getElementById("goProfessorsLlista") ?? "";
goProfessorsLlista!=""?goProfessorsLlista.addEventListener("click",function(){redirect("professorsLlista.php")}):goProfessorsLlista;


function redirect(place){
  let url = window.location.href;
  if(url.includes("localhost")) url = url.split("/vista")[0];
  else url = "https://xavirubio.cat";
  url +=  "/vista/"+place;
  location.href = url;
}