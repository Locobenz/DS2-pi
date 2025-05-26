function validateForm() {
    const email = document.querySelector('input[name="email"]').value;
    const password = document.querySelector('input[name="password"]').value;
    if (!email.includes('@')) {
      alert('Veuillez entrer un email valide.');
      return false;
    }
    if (password.length < 6) {
      alert('Le mot de passe doit contenir au moins 6 caractères.');
      return false;
    }
    return true;
  }
