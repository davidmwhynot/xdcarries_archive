$(document).ready(function() {
  var pathname = window.location.pathname;
  if(pathname.indexOf('index.php') > -1) {
    console.log(pathname);
    $('#a-home').addClass('active');
  }
  if(pathname.indexOf('about.php') > -1) {
    console.log(pathname);
    $('#a-about').addClass('active');
  }
  if(pathname.indexOf('shop-main.php') > -1) {
    console.log(pathname);
    $('#a-shop').addClass('active');
    $('#a-shop').attr('href','shop-main.php');
  }
});
