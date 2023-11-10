let d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");
let p1 = document.getElementById("p1");
let l1 = document.getElementById("l1");

d1.addEventListener("mouseover", () => {p1.style.display = "block";});
d1.addEventListener("mouseout", () => {p1.style.display = "none";});

d2.onmouseover = aff;
function aff(){
  l1.style.display = "block";
}
d2.onmouseout = cac;
function cac(){
  l1.style.display = "none";
}