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

function changeLanguage(language) {
  if (language === 'ENG') {
    document.getElementById('selectedLanguage').src = 'img/us.png';
    document.querySelector('.dropdownContent img:nth-child(2)').style.display = 'none';
    document.querySelector('.dropdownContent img:first-child').style.display = 'block';
  } else {
    document.getElementById('selectedLanguage').src = 'img/sk.png';
    document.querySelector('.dropdownContent img:first-child').style.display = 'none';
    document.querySelector('.dropdownContent img:nth-child(2)').style.display = 'block';
  }
}

const textarea = document.querySelector('.contactForm textarea');
textarea.addEventListener('input', () => {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
});