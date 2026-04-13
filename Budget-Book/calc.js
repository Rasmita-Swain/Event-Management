
const eventType = document.getElementById("eventType");
const nameSection = document.getElementById("nameSection");
const nameLabel = document.getElementById("nameLabel");
const eventName = document.getElementById("eventName");

eventType.addEventListener("change", function(){

let selectedEvent = eventType.value;

nameSection.style.display = "block";
if(selectedEvent === "wedding"){
    nameLabel.textContent = "Bride & Groom Name";
    eventName.placeholder = "Enter bride and groom name";
}

else if(selectedEvent === "birthday"){
    nameLabel.textContent = "Birthday Person Name";
    eventName.placeholder = "Enter birthday person's name";
}

else if(selectedEvent === "meeting"){
    nameLabel.textContent = "Meeting Title";
    eventName.placeholder = "Enter meeting title";
}

else if(selectedEvent === "seminar"){
    nameLabel.textContent = "Seminar Topic";
    eventName.placeholder = "Enter seminar topic";
}

else if(selectedEvent === "program"){
    nameLabel.textContent = "Program Name";
    eventName.placeholder = "Enter program name";
}
else if(selectedEvent === "Others"){
    nameLabel.textContent = "Program Name";
    eventName.placeholder = "Enter program name and program title name";
}

});