<script>
  function sendEmail() {
    emailjs.init("user_your_emailjs_user_id");

    var templateParams = {
      name: document.getElementById('name').value,
      email: document.getElementById('email').value,
      subject: document.getElementById('subject').value,
      message: document.getElementById('message').value
    };

    emailjs.send("service_your_emailjs_service_id", "template_your_emailjs_template_id", templateParams)
      .then(
        function(response) {
          // Succès - Affiche le message de succès
          document.getElementById('contact-form').reset(); // Réinitialise le formulaire
          showSuccessMessage();
        },
        function(error) {
          // Erreur - Affiche le message d'erreur
          showErrorMessage();
        }
      );
  }

  function showSuccessMessage() {
    // Affiche le message de succès
    document.querySelector('.loading').style.display = 'none';
    document.querySelector('.error-message').style.display = 'none';
    document.querySelector('.sent-message').style.display = 'block';
  }

  function showErrorMessage() {
    // Affiche le message d'erreur
    document.querySelector('.loading').style.display = 'none';
    document.querySelector('.sent-message').style.display = 'none';
    document.querySelector('.error-message').style.display = 'block';
  }
</script>
