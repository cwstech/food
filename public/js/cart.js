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

  document.querySelector(".back-arrow").addEventListener("click", function () {
    document.querySelector("#insidePage").style.display = "none";
  });
  document
    .querySelector(".menu-product")
    .addEventListener("click", function () {
      document.querySelector("#insidePage").style.display = "block";
    });
});

// ///////////////////////////add to cart ////////////////////////////////

$(document).ready(function () {
  $("#back-btn").click(function () {
    $("#insidepage").css("display", "none");
  });

  $(".menu-product").click(function () {
    $("#insidepage").css("display", "block");
  });
});

var ct;
var currentValue;
let COUNTER = 0;
var totalValue = 0;
let basePrice = parseInt($(".total").text()); //12

$(document).ready(function () {
  $(".add-product-btn__plus").click(function () {
    ct = $(this).siblings(".counter");
    currentValue = parseInt(ct.text());
    $(ct).show(".counter");

    ct.text(currentValue + 1);
    if (currentValue === 0) {
      $(this).siblings(".add-product-btn__minus").show();
      $("#noItemCart").css("display", "none");
      $("#addItemCart").css("display", "block");
    }
    var ct1 = $(".counter1");
    ct1.text(currentValue + 1);
    COUNTER++;
    totalValue = COUNTER * basePrice;
    $(".total").text(totalValue);
  });

  $(".add-product-btn__minus").click(function () {
    ct = $(this).siblings(".counter");
    currentValue = parseInt(ct.text());
    ct.text(currentValue - 1);
    if (currentValue === 1) {
      $(ct).hide(".counter");
      $(this).hide();
      $("#noItemCart").css("display", "block");
      $("#addItemCart").css("display", "none");
    }
    var ct2 = $(".counter1");
    ct2.text(currentValue - 1);
    COUNTER--;

    var totalSum = parseInt($(".total").text());
    totalValue = totalSum - basePrice;
    $(".total").text(totalValue);
  });
});

$(document).ready(function () {
  $("#donburi_svg").click(function () {
    $("#donburi").css("display", "block");
  });
});

// ------------------------------------ inside the cart-----------------------------

var currentValue1;

$(document).ready(function () {
  $(".inside-add-product-btn__plus").click(function () {
    var counter1 = $(".counter1");
    var ct5 = $(".counter");
    ct5.text(COUNTER + 1);
    counter1.text(COUNTER + 1); // Increment the counter value
    COUNTER++;

    totalValue = COUNTER * basePrice;
    $(".total").text(totalValue);
  });
});

$(document).ready(function () {
  $(".inside-add-product-btn__minus").click(function () {
    var counter1 = $(".counter1");
    counter1.text(COUNTER - 1); // Decrement the counter value
    var ct4 = $(".counter");
    if (COUNTER === 1) {
      $("#noItemCart").css("display", "block");
      $("#addItemCart").css("display", "none");
      $(ct4).hide(".counter");
      $(".add-product-btn__minus").hide();
    }
    ct4.text(COUNTER - 1);
    COUNTER--;
    var totalValue = 0;
    var totalSum = parseInt($(".total").text());
    totalValue = totalSum - basePrice;
    $(".total").text(totalValue);
  });
});
