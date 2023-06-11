
// Assuming you have a table with id "myTable"
var table = document.getElementById("myTable");

var rows = table.querySelectorAll("tr");
// Assuming you want to select all elements with class "myClass"
var elements = table.getElementsByClassName("myButton");
console.log(rows)
// Loop through the selected elements
for (var i = 1; i < elements.length; i++) {
  // Do something with each element
  const val = table.rows[i].cells[7];

}

  
var button = document.getElementsByClassName('myButton');
// var popup = document.getElementById('popup');
// var closeBtn = document.querySelector('.close');

button.addEventListener('click', function() {
  popup.style.display = 'block';
});

closeBtn.addEventListener('click', function() {
  popup.style.display = 'none';
});
