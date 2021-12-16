JavaScript can listen to an event and execute a 
block of code when the event occurs


const btnElem = document.querySelector('button');

btnElem.addEventListener('click, onClick);

function onClick(event){
    console.log(event.target);
}