var is_visible = false;
function voir() {
  var input = document.getElementById("ChampPassword");
  var see = document.getElementById("voir");

  if (is_visible) {
    input.type = "password";
    is_visible = false;
    see.style.color = "gray";
  } else {
    input.type = "text";
    is_visible = true;
    see.style.color = "black";
  }
}
