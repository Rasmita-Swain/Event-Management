let bookings = [
  {
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
];
let selectedIndex = null;

// load data
function loadDashboard() {

  document.getElementById("totalBookings").innerText = bookings.length;

  document.getElementById("totalRevenue").innerText =
    "₹" + (bookings.length * 5000);

  document.getElementById("upcomingEvents").innerText = bookings.length;

  document.getElementById("totalUsers").innerText = "3560";

  loadTable();
  loadCharts();
}
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
        <td>${b.status}</td>
        <td>
          <button onclick="viewDetails(${index})">View</button>
        </td>
      </tr>
    `;
  });
}
// view details
function viewDetails(index) {
  selectedIndex = index;
  let services = bookings[index].services.join(", ");

  document.getElementById("serviceDetails").innerText = services;
  document.getElementById("admin-modal").style.display = "block";
}
function admincloseModal() {
  document.getElementById("admin-modal").style.display = "none";
}

function approveEvent() {
  bookings[selectedIndex].status = "Confirmed";
  admincloseModal();
  loadTable();
}

// cancel
function cancelEvent() {
  bookings[selectedIndex].status = "Cancelled";
  admincloseModal();
  loadTable();
}


function loadCharts() {
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

}
loadDashboard();