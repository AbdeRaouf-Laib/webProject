

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
  


  function toggleDropdown_footer() {
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



  function onClickDesc(sub) {
    descTmp = document.getElementById('desc-article');
    if (sub == 'DAW') {
        let clonTem = descTmp.cloneNode(true);
        clonTem.id = 'desc-article';
        clonTem.textContent = 'DAW is a course that focuses on the principles of web development and design. It covers topics such as HTML, CSS, JavaScript, and responsive design. Students learn to create interactive and user-friendly web applications. The course emphasizes best practices in web design, usability, and accessibility. By the end of the course, students will have a solid understanding of web development concepts and be able to build dynamic websites.';
        descTmp.replaceWith(clonTem);
    } else if (sub == 'THL') {
        let clonTem = descTmp.cloneNode(true);
        clonTem.id = 'desc-article';
        clonTem.textContent = 'THL is a course that focuses on the principles of web development and design. It covers topics such as HTML, CSS, JavaScript, and responsive design. Students learn to create interactive and user-friendly web applications. The course emphasizes best practices in web design, usability, and accessibility. By the end of the course, students will have a solid understanding of web development concepts and be able to build dynamic websites.';
        descTmp.replaceWith(clonTem);
    } else if (sub == 'OOP') {
        let clonTem = descTmp.cloneNode(true);
        clonTem.id = 'desc-article';
        clonTem.textContent = 'OOP is a course that focuses on the principles of web development and design. It covers topics such as HTML, CSS, JavaScript, and responsive design. Students learn to create interactive and user-friendly web applications. The course emphasizes best practices in web design, usability, and accessibility. By the end of the course, students will have a solid understanding of web development concepts and be able to build dynamic websites.';
        descTmp.replaceWith(clonTem);
    }
}





function toggleDropdown() {
  const dropdown = document.querySelector('.dropdown-nav');
  console.log(dropdown);
  
  dropdown.classList.toggle('active');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
  const dropdown = document.querySelector('.dropdown-nav');
  if (!dropdown.contains(event.target) && !event.target.matches('.nav-button')) {
      dropdown.classList.remove('active');
  }
});


