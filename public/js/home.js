document.addEventListener('DOMContentLoaded', function() {
  const track = document.querySelector('.carousel-track');
  const items = Array.from(document.querySelectorAll('.carousel-item'));
  const prevButton = document.querySelector('.carousel-control.prev');
  const nextButton = document.querySelector('.carousel-control.next');
  const dotsContainer = document.querySelector('.carousel-dots');
  const trackContainer = document.querySelector('.carousel-track-container');

  let currentPage = 0;
  let totalItems = items.length;

  // Determine how many items are visible per page based on the viewport width
  function getItemsPerView() {
    return window.innerWidth >= 768 ? 3 : 1;
  }

  // Calculate total pages (each "page" is one set of visible items)
  function getTotalPages() {
    return Math.ceil(totalItems / getItemsPerView());
  }

  let totalPages = getTotalPages();

  // Update the carousel's position based on the current page
  function updateCarousel() {
    // Update items per view and total pages in case of a resize
    const itemsPerView = getItemsPerView();
    totalPages = getTotalPages();
    if (currentPage > totalPages - 1) {
      currentPage = totalPages - 1;
    }
    
    // Use the width of the container for page width
    const containerWidth = trackContainer.getBoundingClientRect().width;
    const shift = currentPage * containerWidth;
    track.style.transform = `translateX(-${shift}px)`;
    
    updateDots();
  }

  // Create navigation dots dynamically
  function createDots() {
    dotsContainer.innerHTML = ''; // clear any existing dots
    for (let i = 0; i < totalPages; i++) {
      const dot = document.createElement('button');
      if (i === currentPage) dot.classList.add('active');
      dot.addEventListener('click', function() {
        currentPage = i;
        updateCarousel();
      });
      dotsContainer.appendChild(dot);
    }
  }

  // Update the active dot styling
  function updateDots() {
    const dots = dotsContainer.querySelectorAll('button');
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentPage);
    });
  }

  // Arrow button event listeners
  prevButton.addEventListener('click', function() {
    if (currentPage > 0) {
      currentPage--;
      updateCarousel();
    }
  });

  nextButton.addEventListener('click', function() {
    if (currentPage < totalPages - 1) {
      currentPage++;
      updateCarousel();
    }
  });

  // Update carousel and dots on window resize
  window.addEventListener('resize', function() {
    updateCarousel();
    createDots();
  });

  // Initial setup
  createDots();
  updateCarousel();
});

document.addEventListener('DOMContentLoaded', function () {
    const clients = [
        { name: "TRANSAVIA SA", value: 300 },
        { name: "PITYOKA GYAR SRL", value: 250 },
        { name: "MEATHOUSE ROMANIA SRL", value: 200 },
        { name: "SC TITAL EDILITARA SRL", value: 150 }
    ];

    const clientList = document.getElementById('client-list');
    const maxValue = Math.max(...clients.map(client => client.value));

    clients.forEach(client => {
        const listItem = document.createElement('li');
        listItem.textContent = client.name;

        const bar = document.createElement('div');
        bar.classList.add('bar');
        bar.style.setProperty('--bar-width', `${(client.value / maxValue) * 100}%`);

        listItem.appendChild(bar);
        clientList.appendChild(listItem);
    });

    // Animate numbers
    const employeeCountElement = document.querySelector('.wartung-team .number-container span');
    const salesAmountElement = document.querySelector('.sales-last-year .number-container span');

    let employeeCount = 0;
    let salesAmount = 0;
    const targetEmployeeCount = 51;
    const targetSalesAmount = 14086044;

    function animateNumbers() {
        if (employeeCount < targetEmployeeCount) {
            employeeCount++;
            employeeCountElement.textContent = employeeCount;
        }
        if (salesAmount < targetSalesAmount) {
            salesAmount += 1000;
            salesAmountElement.textContent = salesAmount.toLocaleString('en-US');
        }

        if (employeeCount < targetEmployeeCount || salesAmount < targetSalesAmount) {
            requestAnimationFrame(animateNumbers);
        } else {
            setTimeout(() => {
                employeeCount = 0;
                salesAmount = 0;
                employeeCountElement.textContent = employeeCount;
                salesAmountElement.textContent = salesAmount;
                animateNumbers();
            }, 2000); // Restart after 2 seconds
        }
    }

    animateNumbers();
});
