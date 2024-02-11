document.addEventListener("DOMContentLoaded", function () {
    var categoryElements = document.querySelectorAll(".menu-category");
    var highlight = document.getElementById("menu-category__highlight");
  
    // Set "Popular" as active by default
    var defaultCategory = document.querySelector('[data-category-id="-2"]');
    if (defaultCategory) {
      defaultCategory.classList.add("menu-category--active");
  
      var rect = defaultCategory.getBoundingClientRect();
      var containerRect = defaultCategory.parentElement.getBoundingClientRect();
      var translationX = rect.left - containerRect.left;
      highlight.style.transform = "translateX(" + translationX + "px)";
    }
  
    categoryElements.forEach(function (categoryElement) {
      categoryElement.addEventListener("click", function () {
        var activeCategory = document.querySelector(".menu-category--active");
        if (activeCategory) {
          activeCategory.classList.remove("menu-category--active");
        }
  
        categoryElement.classList.add("menu-category--active");
  
        var rect = categoryElement.getBoundingClientRect();
        var containerRect = categoryElement.parentElement.getBoundingClientRect();
        var translationX = rect.left - containerRect.left;
        highlight.style.transform = "translateX(" + translationX + "px)";
      });
    });
  });
  