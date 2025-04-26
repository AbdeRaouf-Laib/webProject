






document.addEventListener('DOMContentLoaded', function() {

const data = [
    {
        "type":"QSM",
        "QT": "je sioezdnz deziond dezokndz ezlkndze",
        "Qt1": "flew",
        "Qt2": "fdzadaz",
        "Qt3": "scdscdslew",
        "Qt4": "blew",
        "score": 15,
    },
    {
        "type":"QSM",
        "QT": "je sioezdnz deziond dezokndz ezlkndze",
        "Qt1": "flew",
        "Qt2": "fdzadaz",
        "Qt3": "scdscdslew",
        "Qt4": "blew"
    },
    {
        "type":"QSM",
        "QT": "je sioezdnz deziond dezokndz ezlkndze",
        "Qt1": "flew",
        "Qt2": "fdzadaz",
        "Qt3": "scdscdslew",
        "Qt4": "blew"
    },
    {
        "type":"TorF",
        "QT": "je sioezdnz deziond dezokndz ezlkndze",
    },

];
const templateQSM = document.getElementById("card-templateQSM");
const templateTorF = document.getElementById("card-templateTorF");
const container = document.getElementById("cards-container");

if (!templateQSM || !templateTorF) {
    console.error("Template elements not found!");
    return;
}



const questionLinksContainer = document.getElementById('questionLinks');
data.forEach((item, index) => {
    const link = document.createElement('a');
    link.href = '#';
    link.className = 'question-link';
    link.textContent = `Q${index + 1}`;
    link.dataset.index = index;
    link.addEventListener('click', (e) => {
        e.preventDefault();
        showQuestion(index);
        
        // Update active state
        document.querySelectorAll('.question-link').forEach(link => {
            link.classList.remove('active');
        });
        link.classList.add('active');
    });
    
    questionLinksContainer.appendChild(link);
    if (data.length > 0) {
        // showQuestion(0);
        document.querySelector('.question-link').classList.add('active');
    }





    let cardClone;
   if (item.type === "QSM") {
        cardClone = templateQSM.cloneNode(true);
        cardClone.style.display = "block";
        cardClone.id = `card-${index}`;
        
        // Update QSM content
        cardClone.querySelector(".title").textContent = "exrcice " + (index + 1);
        cardClone.querySelector(".QT").textContent = item.QT;
        cardClone.querySelector(".Q1").textContent = item.Qt1;
        cardClone.querySelector(".Q2").textContent = item.Qt2;
        cardClone.querySelector(".Q3").textContent = item.Qt3;
        cardClone.querySelector(".Q4").textContent = item.Qt4;
        
        // Update checkbox IDs and labels
        const checkboxes = cardClone.querySelectorAll("input[type='checkbox']");
        checkboxes.forEach(checkbox => {
            const oldId = checkbox.id;
            const newId = `${oldId}-${index}`;
            checkbox.id = newId;
            checkbox.name = newId;
            if (checkbox.nextElementSibling) {
                checkbox.nextElementSibling.htmlFor = newId;
            }
        });
    } 
    else if (item.type === "TorF") {
        cardClone = templateTorF.cloneNode(true);
        cardClone.style.display = "block";
        cardClone.id = `card-${index}`;
        
        // Update TorF content
        cardClone.querySelector(".title").textContent = "exrcice " + (index + 1);
        cardClone.querySelector(".QT").textContent = item.QT;
        cardClone.querySelector(".Q1").textContent = "True";
        cardClone.querySelector(".Q2").textContent = "False";
        
        // Update radio button IDs and labels (assuming TorF uses radio buttons)
        const radios = cardClone.querySelectorAll("input[type='radio']");
        radios.forEach(radio => {
            const oldId = radio.id;
            const newId = `${oldId}-${index}`;
            radio.id = newId;
            radio.name = `torf-${index}`; // Same name for the group
            if (radio.nextElementSibling) {
                radio.nextElementSibling.htmlFor = newId;
            }
        });
    }
    
    container.appendChild(cardClone);
});

// Remove templates (make sure to remove both)
templateQSM.remove();
templateTorF.remove();
}, false);


 // Timer functionality
 const timerDisplay = document.getElementById('timer');
 const startButton = document.getElementById('startTimer');
 const scoreFooter = document.getElementById('scoreFooter');
 const questions = document.querySelectorAll('.question');
 
 let timeLeft = 3600; // 1 hour in seconds
 let timerInterval;
 

 
 function startTimer() {
     timerInterval = setInterval(() => {
         timeLeft--;
         updateTimerDisplay();
         
         if (timeLeft <= 0) {
             clearInterval(timerInterval);
             endExam();
         }
     }, 1000);
 }
 
 function updateTimerDisplay() {
     const hours = Math.floor(timeLeft / 3600);
     const minutes = Math.floor((timeLeft % 3600) / 60);
     const seconds = timeLeft % 60;
     
     timerDisplay.textContent = 
         `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
 }
 
 function endExam() {
     // Disable all answer inputs
     document.querySelectorAll('input[type="radio"]').forEach(input => {
         input.disabled = true;
     });
     
     // Add visual indication
     questions.forEach(question => {
         question.classList.add('answers-disabled');
     });
     
     // Calculate and display score (simplified example)
     const score = calculateScore();
     document.getElementById('scoreDisplay').textContent = score;
     
     // Show footer
     scoreFooter.style.display = 'block';
 }
 
 function calculateScore() {
     // This is a simplified scoring mechanism
     // In a real app, you would check actual answers
     return Math.floor(Math.random() * 100); // Random score for demo
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