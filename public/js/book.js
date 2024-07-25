const showButton = document.getElementById('showButton');
const displayButton = document.getElementById('displayButton');
const presentButton = document.getElementById('presentButton');
const hiddenSection = document.getElementById('hiddenSection');

let isHidden = true; // Track the current visibility state

showButton.addEventListener('click', function(event) {
  event.preventDefault();
  if (isHidden) {
    hiddenSection.style.display = 'block';
    isHidden = false; // Update state after showing
    
  }
  // else {
  //   hiddenSection.style.display = 'none';
  //   isHidden = true; // Update state after hiding
   
  // }
});
displayButton.addEventListener('click', function(event) {
  event.preventDefault();
  if (isHidden) {
    hiddenSection.style.display = 'block';
    isHidden = false; // Update state after showing
    
   }
  // else {
  //   hiddenSection.style.display = 'none';
  //   isHidden = true; // Update state after hiding
   
  // }
});
presentButton.addEventListener('click', function(event) {
  event.preventDefault();
  if (isHidden) {
    hiddenSection.style.display = 'block';
    isHidden = false; // Update state after showing
    
  } 
  // else {
  //   hiddenSection.style.display = 'none';
  //   isHidden = true; // Update state after hiding
   
  // }
});


