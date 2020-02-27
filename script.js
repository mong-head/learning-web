var wbtn = document.getElementById('white_btn');
wbtn.addEventListner('click', function(event) {
  document.getElementById('background').className = 'white';
  alert('hello');
});

var bbtn = document.getElementById('black_btn');
bbtn.addEventListner('click', function(event) {
  document.getElementById('background').className = 'black';
});
