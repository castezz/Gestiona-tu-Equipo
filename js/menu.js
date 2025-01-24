let listElements = document.querySelectorAll(".list__button--click");

listElements.forEach((listElement) => {
  listElement.addEventListener("click", () => {
    listElement.classList.toggle("arrow");

    let height = 0;
    let menu = listElement.nextElementSibling;
    if (menu.clientHeight == "0") {
      height = menu.scrollHeight;
    }

    menu.style.height = `${height}px`;
  });
});

// habilidades

function efectoHabilidades() {
  var skills = document.getElementById("skills");
  var distancia_skills =
    window.innerHeight - skills.getBoundingClientRect().top;
  if (distancia_skills >= 300) {
    document.getElementById("html").classList.add("barra-progreso1");
    document.getElementById("js").classList.add("barra-progreso2");
    document.getElementById("bd").classList.add("barra-progreso3");
    document.getElementById("ps").classList.add("barra-progreso4");
  }
}

// upload img

document.getElementById("file").onchange = function (e) {
  let reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);
  reader.onload = function () {
    let preview = document.getElementById("preview");
    image = document.createElement("img");
    image.src = reader.result;
    image.style.width = "200px";
    preview.append(image);
  };
};
