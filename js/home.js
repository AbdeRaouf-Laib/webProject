

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');
    let highestZIndex = 3;
  
    cards.forEach(card => {
      card.addEventListener('click', () => {
        // Reset all cards to default rotation (optional)
        cards.forEach(c => {
          if (c !== card) {
            c.style.transform = `rotate(${c.dataset.card % 2 ? '5deg' : '-5deg'})`;
          }
        });
        
        // Bring clicked card to front
        highestZIndex += 1;
        card.style.zIndex = highestZIndex;
        
        // Rotate clicked card to 0 degrees
        card.style.transform = 'rotate(0deg)';
      });
    });
  });
  


  function toggleDropdown() {
    const dropdown = document.querySelector('.dropdown-footer');
    dropdown.classList.toggle('active');
  }

  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
    const dropdown = document.querySelector('.dropdown-footer');
    if (!dropdown.contains(event.target)) {
      dropdown.classList.remove('active');
    }
  }); 





  // const people = [
  //   { name: "Ali" },
  //   { name: "Mohamed" },
  //   { name: "Fatima" },
  //   { name: "Youssef" }
  // ];

  // // Generate the list
  // function generatePeopleList() {
  //   const dropdown = document.getElementById('personDropdown');
  //   const ul = document.createElement('ul');
    
  //   people.forEach(person => {
  //     const li = document.createElement('li');
      
  //     li.innerHTML = `
  //       <icon>
  //         <img src="/style/images/person_icon.png" alt="person image" class="person_icon" />
  //       </icon>
  //       <p>${person.name}</p>
        
  //     `;
      
  //     ul.appendChild(li);
  //   });
    
  //   // Insert before the divider
  //   dropdown.insertBefore(ul, dropdown.firstChild);
  // }

  // // Initialize when page loads
  // window.onload = function() {
  //   generatePeopleList();
    
  //   // Toggle dropdown function
  //   window.toggleDropdown = function() {
  //     const dropdown = document.querySelector('.dropdown-footer');
  //     dropdown.classList.toggle('active');
  //   }

  //   // Close dropdown when clicking outside
  //   document.addEventListener('click', function(event) {
  //     const dropdown = document.querySelector('.dropdown-footer');
  //     if (!dropdown.contains(event.target)) {
  //       dropdown.classList.remove('active');
  //     }
  //   });
  // };