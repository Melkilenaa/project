document.addEventListener('DOMContentLoaded', function () {
    const loginLink = document.getElementById('loginLink');
    const registerLink = document.getElementById('registerLink');
    const equipmentLink = document.getElementById('equipmentLink');
  
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const equipmentList = document.getElementById('equipmentList');
  
    loginLink.addEventListener('click', function () {
      showForm(loginForm);
    });
  
    registerLink.addEventListener('click', function () {
      showForm(registerForm);
    });
  
    equipmentLink.addEventListener('click', function () {
      showForm(equipmentList);
    });
  
    function showForm(form) {
      hideAllForms();
      form.style.display = 'block';
    }
  
    function hideAllForms() {
      loginForm.style.display = 'none';
      registerForm.style.display = 'none';
      equipmentList.style.display = 'none';
    }
  });
  