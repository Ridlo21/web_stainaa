<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/stainaa.png" />

    <script src="assets/js/vendors/darkMode.js"></script>

    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/theme.min.css">
    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/sign-in.html" />
    <title>Login</title>
</head>

    <body>
    <!-- Page content -->
    <main>
      <section class="container d-flex flex-column vh-100 ">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8 ">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
              <div class="card shadow">
                <!-- Card body -->
                <div class="card-body py-3 px-6 d-flex flex-column gap-4">
                  <div>
                    <a href="#"><img src="assets/images/stainaa.png" class="mb-4" style="width: 18%; height: 20%;" alt="logo-icon" /></a>
                    <div class="d-flex flex-column gap-1">
                      <h1 class="mb-0 fw-bold">Sign in</h1>
                      <span>
                        Don’t have an account?
                        <a href="sign-up.html" class="ms-1">Sign up</a>
                      </span>
                    </div>
                  </div>
                  <div id="pesan">
                    @if (session()->has('error'))
                        <div class="alert alert-success">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                  <!-- Form -->
                  <form class="needs-validation" novalidate method="POST" action="{{ route('singin') }}" >
                    @csrf
                    <!-- Username --> 
                    <div class="mb-3">
                      <label for="signInEmail" class="form-label">Username</label>
                      <input type="text" id="signInEmail" class="form-control" name="username" placeholder="Username here " required />
                      <div class="invalid-feedback">Please enter valid username.</div>
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                      <label for="signInPassword" class="form-label">Password</label>
                      <input type="password" id="signInPassword" class="form-control" name="password" placeholder="**************" required />
                      <div class="invalid-feedback">Please enter valid password.</div>
                    </div>
                    <!-- Checkbox -->
                    <div class="d-lg-flex justify-content-between align-items-center mb-4">
                      <div class="form-check">
                        <!-- <input type="checkbox" class="form-check-input" id="rememberme" required /> -->
                        <!-- <label class="form-check-label" for="rememberme">Remember me</label> -->
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                      <div>
                        <a href="forget-password.html">Forgot your password?</a>
                      </div>
                    </div>
                    <div>
                      <!-- Button -->
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                    <hr class="my-4" />
                  </form>
                </div>
              </div>
          </div>
        </div>
      </section>

      <div class="position-absolute bottom-0 m-4">
        <div class="dropdown">
          <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <i class="bi theme-icon-active"></i>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <i class="bi theme-icon bi-sun-fill"></i>
                <span class="ms-2">Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <i class="bi theme-icon bi-moon-stars-fill"></i>
                <span class="ms-2">Dark</span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </main>
<script src="assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
  <script src="assets/js/theme.min.js"></script>

    <script src="assets/js/vendors/validation.js"></script>
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>

    <script>
      $(function () {
        setTimeout(() => {
          $("#pesan").html("")
        }, 5000);
      })
    </script>
  </body>
</html>
