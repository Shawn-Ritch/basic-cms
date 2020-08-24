<script>
var navLinks = document.querySelectorAll("li a");
var currentURL = window.location.href;
for (var i = 0; i < navLinks.length; i++) {
  if (navLinks[i] == currentURL) {
    navLinks[i].classList.add("active");
  }
}
  // Add Your Vanilla JavaScript, JQuery Or The Like Here...
</script>
</body>
</html>