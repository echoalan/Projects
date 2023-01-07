window.addEventListener("scroll", function () {
    function fade(direction) {
      var imagen = document.querySelectorAll(".fade_" + direction);
      for (var i = 0; i < imagen.length; i++) {
        var altura = window.innerHeight / 1.3;
        var distancia = imagen[i].getBoundingClientRect().top;
        imagen[i].classList.add("transform_" + direction);
        if (distancia <= altura) {
          imagen[i].classList.add("aparece");
        } 
      }
    }
    fade("up");
    fade("down");
    fade("left");
    fade("right");
    fade("appear");
  });