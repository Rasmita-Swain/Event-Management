let bookings = [];
 /* {
    event: "Wedding",
    user: "Rahul",
    date: "2024-04-23",
    guests: 150,
    status: "Pending",
    services: ["Decoration", "DJ", "Catering"]
  },
  {
    event: "Birthday",
    user: "Amit",
    date: "2024-04-20",
    guests: 50,
    status: "Confirmed",
    services: ["Cake", "Entertainment"]
  },
  {
    event: "meeting",
    user: "reva",
    date: "2024-04-20",
    guests: 50,
    status: "pending",
    services: ["Cake", "Entertainment"]
  }
];*/
let selectedIndex = null;

// load data
function loadDashboard() {

fetch("../php/get_dashboard.php")
.then(res => res.json())
.then(data => {
    console.log(data);
    bookings = data;

    // Total Bookings
    document.getElementById("totalBookings").innerText = bookings.length;

    // Total Revenue
    let total = 0;
    bookings.forEach(b => {
        total += parseFloat(b.total);
    });
    document.getElementById("totalRevenue").innerText = "₹" + total;

    // Upcoming (same for now)
    let today = new Date().toISOString().split("T")[0];

    let upcoming = bookings.filter(b => b.date >= today);

    document.getElementById("upcomingEvents").innerText = upcoming.length;
   // document.getElementById("upcomingEvents").innerText = bookings.length;

    // Users (simple)
    document.getElementById("totalUsers").innerText = bookings.length;

    loadTable();
    loadCharts();
});
}
/*function loadDashboard() {

  document.getElementById("totalBookings").innerText = bookings.length;

  document.getElementById("totalRevenue").innerText =
    "₹" + (bookings.length * 5000);

  document.getElementById("upcomingEvents").innerText = bookings.length;

  document.getElementById("totalUsers").innerText = "3560";

  loadTable();
  loadCharts();
}*/
// table
function loadTable() {
  let tbody = document.getElementById("tableBody");
  tbody.innerHTML = "";

  bookings.forEach((b, index) => {
    tbody.innerHTML += `
      <tr>
        <td>${b.user}</td>
        <td>${b.event}</td>
        <td>${b.date}</td>
        <td>${b.guests}</td>
        <td style="color:${b.status === 'confirmed' ? 'green' : b.status === 'cancelled' ? 'red' : 'orange'}">
  ${b.status}
</td>
        <td>
          <button onclick="viewDetails(${index})">View</button>
        </td>
      </tr>
    `;
  });
}
// view details
/*function viewDetails(index) {
  selectedIndex = index;
  let services = bookings[index].services.join(", ");

  document.getElementById("serviceDetails").innerText = services;
  document.getElementById("admin-modal").style.display = "block";
}*/
function viewDetails(index) {

  selectedIndex = index;

  let services = bookings[index].services;

  if(!services || services.length === 0){
      services = ["No services"];
  }

  document.getElementById("serviceDetails").innerText = services.join(", ");

  document.getElementById("admin-modal").style.display = "block";
}

function admincloseModal() {
  document.getElementById("admin-modal").style.display = "none";
}

/*function approveEvent() {
  bookings[selectedIndex].status = "Confirmed";
  admincloseModal();
  loadTable();
}*/
function approveEvent() {

fetch("/Eventa/php/update_status.php", {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `id=${bookings[selectedIndex].id}&status=confirmed`
     //body: `id=${id}&status=${status}`
})
.then(() => {
    admincloseModal();
    loadDashboard(); // refresh data
});
}

// cancel
function cancelEvent() {

fetch("/Eventa/php/update_status.php", {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `id=${bookings[selectedIndex].id}&status=cancelled`
})
.then(() => {
    admincloseModal();
    loadDashboard();
});
}
/*function cancelEvent() {
  bookings[selectedIndex].status = "Cancelled";
  admincloseModal();
  loadTable();
}*/

function loadCharts() {

/*let labels = [];
let data = [];

bookings.forEach(b => {
    labels.push(b.event);
    data.push(b.total);
});*/
let eventMap = {};

bookings.forEach(b => {

    if (!b.event || !b.total) return; // 👈 skip bad data

    let eventName = b.event.toString().trim().toLowerCase();

    if (!eventMap[eventName]) {
        eventMap[eventName] = 0;
    }

    let value = parseFloat(b.total);

    if (!isNaN(value)) {
        eventMap[eventName] += value;
    }
});

let labels = Object.keys(eventMap).map(e =>
    e.charAt(0).toUpperCase() + e.slice(1)
);

let data = Object.values(eventMap);

// BAR CHART
new Chart(document.getElementById("barChart"), {
    type: "bar",
    data: {
        labels: labels,
        datasets: [{
            label: "Revenue",
            data: data
        }]
    }
});

// PIE CHART
new Chart(document.getElementById("eventPie"), {
    type: "pie",
    data: {
        labels: labels,
        datasets: [{
            data: data
        }]
    }
});

// LINE CHART
new Chart(document.getElementById("lineChart"), {
    type: "line",
    data: {
        labels: labels,
        datasets: [{
            label: "Bookings",
            data: data
        }]
    }
});
}

loadDashboard();


/*function loadCharts() {
// Line Chart
new Chart(document.getElementById("lineChart"), {
  type: "line",
  data: {
    labels: ["Apr 18", "Apr 19", "Apr 20", "Apr 21"],
    datasets: [{
      label: "Bookings",
      data: [5, 8, 13, 10],
      fill: true
    }]
  }
});

// Bar Chart
new Chart(document.getElementById("barChart"), {
  type: "bar",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr"],
    datasets: [{
      label: "Revenue",
      data: [30000, 45000, 70000, 75000]
    }]
  }
});

//pie chart
new Chart(document.getElementById("eventPie"), {
    type: "pie",
    data: {
      labels: ["Wedding","Birthday","Meeting","Seminar","Cultural","Others"],
      datasets: [{
        data: [40,25,20,10,5,3]
      }]
    }
  });

}*/
