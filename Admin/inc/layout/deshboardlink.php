<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="public/js/main.js"></script>
    <script>
      const ctx = document.getElementById('myChart');
      const lc = document.getElementById('lineChart');
      const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
      const lineChart = new Chart(lc, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      const cdat = document.getElementById('curr_date_time');
      setInterval(() => {
        let date = new Date();
        cdat.innerText = date.toLocaleString('en-IN', {
          weekday: 'short',
          day: 'numeric',
          year: 'numeric',
          month: 'long',
          hour: 'numeric',
          minute: 'numeric',
          second: 'numeric',
        });
      }, 1000);


    </script>


<!-- another script -->

<script>
    const showSidebarBtn = document.querySelector('#show_sidebar_phone');
const showSidebarBtnPc = document.querySelector('#show_sidebar_pc');
const closeSidebarBtn = document.querySelector('#close_sidebar');
const overlay = document.querySelector('#overlay');
const fullscreen = document.querySelector('#fullscreen');
const wrapper = document.querySelector('.wrapper');

showSidebarBtn.onclick = function () {
  wrapper.classList.toggle('show');
}

closeSidebarBtn.onclick = function () {
  wrapper.classList.remove('show');
}

overlay.onclick = function () {
  wrapper.classList.remove('show');
}

showSidebarBtnPc.onclick = function () {
  wrapper.classList.toggle('show_pc');
}


const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
tooltipTriggerList.forEach(function (item) {
  new bootstrap.Tooltip(item);
});

fullscreen.onclick = function () {
  const i = document.querySelector('#fullscreen i');
  if (i.classList.contains('fa-expand')) {
    i.classList.add('fa-compress');
    i.classList.remove('fa-expand');
    document.documentElement.requestFullscreen();
  } else {
    i.classList.add('fa-expand');
    i.classList.remove('fa-compress');
    document.exitFullscreen();
  }
}

const collapseElement = document.querySelector('[data-bs-toggle="collapse"]');
let isCollapsed = true;

collapseElement.addEventListener('click', function () {
  if (isCollapsed) {
    this.classList.add('collapsed');
    isCollapsed = false;
  } else {
    this.classList.remove('collapsed');
    isCollapsed = true;
  }
});

const childItems = document.querySelectorAll('#masterCollapse .nav-item');
const parentCollapse = document.querySelector('#masterCollapse');

for (let i = 0; i < childItems.length; i++) {
  if (childItems[i].classList.contains('active')) {
    parentCollapse.classList.add('show');
    collapseElement.classList.add('collapsed');
    break;
  }
}




</script>