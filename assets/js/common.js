$(document).ready(function () {
  $(".menunav").click(function (e) {
    e.preventDefault();
    $(".navbar").toggleClass("open");
  });
});
