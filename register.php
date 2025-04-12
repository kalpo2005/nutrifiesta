<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: url('images/bg-img/111.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .register-box {
      max-width: 700px;
      margin: 3rem auto;
      background-color: rgba(255, 255, 255, 0.95);
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>

  <div class="register-box">
    <form id="registerForm" action="php/register.php" method="POST">
      <div class="mb-4 text-center">
        <h3><i class="bi bi-person-lines-fill me-2"></i> User Registration</h3>
        <span class="badge bg-light text-dark mt-2 text-wrap lh-base">
          Note: Your details must match with your ID (Aadhar card, passport, etc) that will be required during check-in.
        </span>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">User ID</label>
          <input type="number" name="user_id" class="form-control shadow-none" required>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control shadow-none" required>
        </div>

        <div class="col-12 mb-3">
          <label class="form-label">Address</label>
          <textarea name="address" class="form-control shadow-none" rows="2" required></textarea>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Pincode</label>
          <input type="number" name="pincode" class="form-control shadow-none" required>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control shadow-none" required>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Contact</label>
          <input type="tel" name="contact" class="form-control shadow-none" required>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control shadow-none" required>
        </div>
      </div>

      <div class="text-center mt-3">
        <button type="submit" class="btn btn-dark shadow-none">Register</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
