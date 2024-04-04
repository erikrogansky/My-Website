var dropdownContent = document.querySelector('.dropdownContent');

document.querySelector('.headerLanguage').addEventListener('click', function() {
  dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
});


document.querySelector('.headerLanguage').addEventListener('mouseenter', function() {
  dropdownContent.style.display = 'block';
  setTimeout(function() {
    dropdownContent.style.opacity = 1;
    dropdownContent.style.filter = 'blur(0)';
    dropdownContent.style.transform = 'translateY(0)';
  }, 10);
});

document.querySelector('.headerLanguage').addEventListener('mouseleave', function() {
    dropdownContent.style.opacity = 0;
    dropdownContent.style.transform = 'translateY(-10px)';
    dropdownContent.style.filter = 'blur(3px)';
    setTimeout(function() {
      dropdownContent.style.display = 'none';
    }, 300);
});

const textarea = document.querySelector('.contactForm textarea');
textarea.addEventListener('input', () => {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
});



//* Language charts *//
function createDonutChart(containerId, percentage) {
  const container = document.getElementById(containerId);

  const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg.setAttribute("class", "chart");
  svg.setAttribute("viewBox", "0 0 200 200");

  const gradient = document.createElementNS("http://www.w3.org/2000/svg", "linearGradient");
  gradient.setAttribute("id", `gradient_${containerId}`); // Unique gradient id for each chart
  gradient.setAttribute("x1", "15%");
  gradient.setAttribute("y1", "100%");
  gradient.setAttribute("x2", "85%");
  gradient.setAttribute("y2", "0%");
  
  const stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
  stop1.setAttribute("offset", "0%");
  stop1.style.stopColor = "#C72626";
  stop1.style.stopOpacity = "1";
  
  const stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
  stop2.setAttribute("offset", "100%");
  stop2.style.stopColor = "#AC3AB6";
  stop2.style.stopOpacity = "1";

  gradient.appendChild(stop1);
  gradient.appendChild(stop2);
 
  svg.appendChild(gradient);

  const donutRing = document.createElementNS("http://www.w3.org/2000/svg", "circle");
  donutRing.setAttribute("class", "donut-ring");
  donutRing.setAttribute("cx", "100");
  donutRing.setAttribute("cy", "100");
  donutRing.setAttribute("r", "70");
  svg.appendChild(donutRing);
  
  const donutSegment = document.createElementNS("http://www.w3.org/2000/svg", "circle");
  donutSegment.setAttribute("class", "donut-segment");
  donutSegment.setAttribute("cx", "100");
  donutSegment.setAttribute("cy", "100");
  donutSegment.setAttribute("r", "70");
  donutSegment.style.stroke = `url(#gradient_${containerId})`;
  svg.appendChild(donutSegment);
  
  const percentageText = document.createElementNS("http://www.w3.org/2000/svg", "text");
  percentageText.setAttribute("class", "percentage");
  percentageText.setAttribute("x", "101");
  percentageText.setAttribute("y", "103");
  percentageText.textContent = percentage + "%";
  svg.appendChild(percentageText);
  
  container.appendChild(svg);

  updateDonutChart(containerId, percentage);
}

function animatePercentageText(percentageText, targetPercentage) {
  let currentPercentage = 0;
  const animationDuration = 500;
  const animationSteps = 100;
  const stepPercentage = targetPercentage / animationSteps;

  function updateText() {
    if (currentPercentage <= targetPercentage) {
      percentageText.textContent = `${Math.round(currentPercentage)}%`;
      currentPercentage += stepPercentage;
      setTimeout(updateText, animationDuration / animationSteps);
    } else {
      percentageText.textContent = `${targetPercentage}%`;
    }
  }

  updateText();
}

function updateDonutChart(containerId, percentage) {
  const donutSegment = document.querySelector(`#${containerId} .donut-segment`);
  const percentageText = document.querySelector(`#${containerId} .percentage`);

  const circumference = 2 * Math.PI * 70;
  const strokeDashArray = (percentage / 100) * circumference;

  const rotationOffset = -90;

  donutSegment.style.strokeDasharray = `${strokeDashArray} ${circumference}`;
  donutSegment.style.transform = `rotate(${rotationOffset}deg)`;

  percentageText.textContent = `${percentage}%`;

  animatePercentageText(percentageText, percentage);
}

window.onload = () => {
  const chartData = [
    { id: "chart1", percentage: 80 },
    { id: "chart2", percentage: 100 },
    { id: "chart3", percentage: 90 },
    { id: "chart4", percentage: 30 },
    { id: "chart5", percentage: 20 }
  ];

  chartData.forEach(data => {
    const svg = document.getElementById(data.id);
    const observer = new MutationObserver((mutationsList, observer) => {
      for(let mutation of mutationsList) {
        if (mutation.attributeName === 'class' && svg.classList.contains('visible')) {
          createDonutChart(data.id, data.percentage);
          observer.disconnect();
        }
      }
    });
  
    observer.observe(svg, { attributes: true, attributeFilter: ['class'] });
  });
};


/* Go to top button */
function goToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  var footer = document.querySelector('footer');
  var footerTop = footer.getBoundingClientRect().top;
  var button = document.getElementById("goToTopBtn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.opacity = "1";
    if (footerTop < window.innerHeight) {
      button.style.bottom = (window.innerHeight - footerTop + 20) + "px";
    } else {
      button.style.bottom = "30px";
    }
  } else {
    button.style.opacity = "0";
  }
}

/* Animations */
document.addEventListener("DOMContentLoaded", function(event) {
  var icons = document.querySelectorAll('.introIcons a');
  setTimeout(function() {
  icons.forEach(function(icon, index) {
    setTimeout(function() {
      icon.classList.add('slide-in');
    }, index * 100);
  }); }, 200);

  var headers = document.querySelectorAll('.headerCategoriesGrid a');
  var himg = document.getElementById('selectedLanguage');
  setTimeout(function() {
  headers.forEach(function(header, index) {
    setTimeout(function() {
      header.classList.add('slide-in');
    }, index * 50);
  }); }, 200);

    himg.classList.add('slide-in');

});

document.addEventListener("DOMContentLoaded", function() {
  const elements = document.querySelectorAll('.line-by-line');
  elements.forEach((element, index) => {
    element.style.animationDelay = (index * 0.1) + "s";
  });
});


document.addEventListener('DOMContentLoaded', (event) => {
  const slideUpElements = Array.from(document.querySelectorAll('.slide-up'));

  window.addEventListener('scroll', () => {
      let st = window.scrollY;

      slideUpElements.forEach(element => {
          let rect = element.getBoundingClientRect();
          
          if (rect.top >= 0 && rect.bottom <= window.innerHeight + 100) {
              element.classList.add('visible');
          }

          else if (rect.top > 0) {
              element.classList.remove('visible');
          }
      });
  });
});




/* Arrow down */
window.addEventListener('scroll', function() {
  var scrollPosition = window.scrollY;
  var body = document.querySelector('body');
  var arrow = document.querySelector('.arrowDown');

  if (scrollPosition > 0) {
      body.classList.add('scroll');
  } else {
      body.classList.remove('scroll');
      arrow.classList.remove('hidden');
      arrow.classList.add('appear');
  }
});



/* Hover on icons */
$(document).ready(function(){
  $('.introIcons a').hover(function(){
      $('.introIcons a').not(this).css('opacity', '0.5');
  }, function(){
      $('.introIcons a').css('opacity', '1');
  });
});
