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
  // Elements
  const employeeCountElement = document.querySelector('.wartung-team .number-container span');
  const salesAmountElement = document.querySelector('.sales-last-year .number-container span');
  const averageDailySalesElement = document.getElementById('average-daily-sales');

  // Target values
  const targetEmployeeCount = 51;
  const targetSalesAmount = 14086044; // 14,086,044 Lei
  const targetAverageDailySales = 38486; // 38,486 Lei

  // Animation settings
  const animationDuration = 30000; // 6 seconds (3x slower)
  const salesIncrement = 1000; // Increment by 1 million
  const employeeIncrement = 1; // Increment by 1
  const averageDailySalesIncrement = 10; // Increment by 100

  // Start values
  let employeeCount = 0;
  let salesAmount = 0;
  let averageDailySales = 0;

  // Calculate step intervals
  const employeeSteps = Math.ceil(targetEmployeeCount / (animationDuration / 60)); // 60fps
  const salesSteps = Math.ceil(targetSalesAmount / salesIncrement / (animationDuration / 60));
  const averageDailySalesSteps = Math.ceil(targetAverageDailySales / averageDailySalesIncrement / (animationDuration / 60));

  // Animate numbers
  function animateNumbers() {
      if (employeeCount < targetEmployeeCount) {
          employeeCount += employeeSteps;
          if (employeeCount > targetEmployeeCount) employeeCount = targetEmployeeCount;
          employeeCountElement.textContent = employeeCount;
      }

      if (salesAmount < targetSalesAmount) {
          salesAmount += salesSteps * salesIncrement;
          if (salesAmount > targetSalesAmount) salesAmount = targetSalesAmount;
          salesAmountElement.textContent = (salesAmount / 1000000).toFixed(0) + '.000.000'; // Format as 1.000.000
      }

      if (averageDailySales < targetAverageDailySales) {
          averageDailySales += averageDailySalesSteps * averageDailySalesIncrement;
          if (averageDailySales > targetAverageDailySales) averageDailySales = targetAverageDailySales;
          averageDailySalesElement.textContent = averageDailySales.toLocaleString('ro-RO'); // Format with commas
      }

      if (employeeCount < targetEmployeeCount || salesAmount < targetSalesAmount || averageDailySales < targetAverageDailySales) {
          requestAnimationFrame(animateNumbers);
      } else {
          // Reset after 2 seconds
          setTimeout(() => {
              employeeCount = 0;
              salesAmount = 0;
              averageDailySales = 0;
              employeeCountElement.textContent = employeeCount;
              salesAmountElement.textContent = salesAmount;
              averageDailySalesElement.textContent = averageDailySales;
              animateNumbers();
          }, 10000);
      }
  }

  animateNumbers();
});