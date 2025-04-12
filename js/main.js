
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        e.preventDefault(); // prevent default form submit
    const form = e.target;
    const formData = new FormData(form);

    fetch('php/register.php', {
        method: 'POST',
    body: formData
    })
    .then(res => res.text())
    .then(response => {
        // Show popup
        alert(response); // Replace this with a Bootstrap Toast if needed

    if (response.includes("✅ Registration successful")) {
        form.reset(); // Clear form
    const modal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
    modal.hide(); // Close modal
      }
    })
    .catch(error => {
        alert("❌ Something went wrong!");
    console.error(error);
    });
  });


const barCtx = document.getElementById('barChart').getContext('2d');
const lineCtx = document.getElementById('lineChart').getContext('2d');

// Bar Chart - Monthly Signups
new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Signups',
            data: [50, 75, 120, 90, 150, 200],
            backgroundColor: '#222222',
            borderRadius: 5,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            title: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: { color: '#6c757d' }
            },
            x: {
                ticks: { color: '#6c757d' }
            }
        }
    }
});

// Line Chart - Daily Visitors
new Chart(lineCtx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Visitors',
            data: [120, 140, 100, 80, 200, 250, 300],
            borderColor: '#28a745',
            backgroundColor: 'rgba(40,167,69,0.2)',
            fill: true,
            tension: 0.3,
            pointRadius: 4,
            pointHoverRadius: 6,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#6c757d'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: { color: '#6c757d' }
            },
            x: {
                ticks: { color: '#6c757d' }
            }
        }
    }
});
