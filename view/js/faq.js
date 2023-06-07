$(document).ready(function() {
    $(".faq").click(function() {
      $(this).find(".answer").slideToggle();
      $(this).find(".question i").toggleClass("bi-caret-down bi-caret-up");
    });
  });