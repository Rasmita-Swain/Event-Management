
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


let total = 0;

function addFood(){

let foodItems = document.querySelectorAll("#foodMenu input[type='checkbox']:checked");

let guests = parseInt(document.getElementById("guests").value) || 0;

let foodTotal = 0;

foodItems.forEach(item => {
let parts = item.value.split("|");
let price = parseInt(parts[1]);

foodTotal += price;
});

foodTotal = foodTotal * guests;

const cart = document.getElementById("cartItems");

const li = document.createElement("li");

li.innerHTML = `<li style="font-size:1.2rem; letter-spacing:0.1em; font-weight:600;">Custom Catering (${guests} guests): ₹${foodTotal}</li>`;

cart.appendChild(li);
total += foodTotal;

document.getElementById("total").innerText = total;
document.getElementById("totalAmount").value=total;

}


function addToCart(){

let entertainmentItems = document.querySelectorAll("#service input[type='checkbox']:checked");
let decorationItems = document.querySelectorAll("#s2 input[type='checkbox']:checked");
let mediaItems = document.querySelectorAll("#s3 input[type='checkbox']:checked");

let entertainment = 0;
let decoration = 0;
let media = 0;

// Calculate totals
entertainmentItems.forEach(item => {
    if(item.value !== "None"){
        entertainment += parseInt(item.value);
    }
});

decorationItems.forEach(item => {
    if(item.value !== "None"){
        decoration += parseInt(item.value);
    }
});

mediaItems.forEach(item => {
    if(item.value !== "None"){
        media += parseInt(item.value);
    }
});

let packageTotal = entertainment + decoration + media;

const cart = document.getElementById("cartItems");

cart.innerHTML = "";

const li = document.createElement("li");

li.innerHTML = `
<ul style="font-size:1.2rem; letter-spacing:0.1em ; font-weight:600;">
<li><b>Entertainment:</b> ₹${entertainment}</li><br>
<li><b>Decoration:</b> ₹${decoration}</li><br>
<li><b>Media:</b> ₹${media}</li><br>
</ul> `;


cart.appendChild(li);
 //total += packageTotal;
 total = total + (entertainment + decoration + media);

document.getElementById("total").innerText = total;

// STORE VALUES FOR PHP
document.getElementById("entertainment").value = entertainment;
document.getElementById("decoration").value = decoration;
document.getElementById("media").value = media;
document.getElementById("totalAmount").value = total;

document.getElementById("total").innerText = total;

}


