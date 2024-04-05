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


document.addEventListener("DOMContentLoaded", function(event) {
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