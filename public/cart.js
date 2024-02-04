document.addEventListener("click", (e) => {
  let targetElement = e.target;
  let basket = document.querySelector("#basket");
  let basketOverlay = document.querySelector("#basket-overlay");
  let upArrow = document.querySelector("#upArrow");
  let downArrow = document.querySelector("#downArrow");

  if (targetElement == basket) {
    document.querySelector(".basketPage").classList.add("basketOpen");
    document.querySelector(".basketPage").classList.remove("basketClose");
    basketOverlay.classList.add("basket-overlay--visible");
    basketOverlay.classList.remove("none");
    basketOverlay.classList.add("block");
    upArrow.style.display = "none";
    downArrow.style.display = "block";
  }
  if (targetElement == basketOverlay) {
    document.querySelector(".basketPage").classList.remove("basketOpen");
    document.querySelector(".basketPage").classList.add("basketClose");
    basketOverlay.classList.remove("basket-overlay--visible");
    basketOverlay.classList.add("none");
    upArrow.style.display = "block";
    downArrow.style.display = "none";
  }
  if (targetElement == upArrow) {
    upArrow.classList.add("uparrow");
    document.querySelector(".basketPage").classList.remove("basketClose");
    basketOverlay.classList.add("basket-overlay--visible");
    basketOverlay.classList.remove("none");
    basketOverlay.classList.add("block");
    upArrow.style.display = "none";
    downArrow.style.display = "block";
  }
  if (targetElement == downArrow) {
    downArrow.classList.add("downarrow");
    document.querySelector(".basketPage").classList.remove("basketOpen");
    document.querySelector(".basketPage").classList.add("basketClose");
    basketOverlay.classList.remove("basket-overlay--visible");
    basketOverlay.classList.add("none");
    upArrow.style.display = "block";
    downArrow.style.display = "none";
  }
});

// $(document).ready(function () {
//   $("#downArrow").hide();
//   $("#upArrow").click(function () {
//     $("#upArrow").hide();
//     $("#downArrow").show();
//   });
//   $("#basket-overlay").click(function () {
//     $("#downArrow").hide();

//     $("#upArrow").show();
//   });
// });
