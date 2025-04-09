
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        e.preventDefault(); // prevent default form submit
    const form = e.target;
    const formData = new FormData(form);

    fetch('../Admin/inc/php/register.php', {
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
