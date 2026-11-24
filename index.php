
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Exam Portal</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
            color: white;
            padding: 100px 0;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .feature-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 40px;
            color: #0d6efd;
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">

            <a class="navbar-brand fw-bold text-primary" href="#">
                🎓 Smart AI Based Exam System
            </a>

            <div class="d-flex align-items-center">

                <!-- Login Dropdown -->
                <div class="dropdown me-2">
                    <button class="btn btn-outline-primary px-4 fw-bold dropdown-toggle"
                        type="button"
                        id="loginDropdown"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Login
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end shadow"
                        aria-labelledby="loginDropdown">

                        <li>
                            <a class="dropdown-item fw-bold text-primary py-2"
                                href="login.php">
                                <i class="fa-solid fa-user-graduate me-2"></i>
                                Login as Student
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item fw-bold text-danger py-2"
                                href="admin_login.php">
                                <i class="fa-solid fa-user-tie me-2"></i>
                                Login as Admin
                            </a>
                        </li>

                    </ul>
                </div>

                <a href="register.php" class="btn btn-primary px-4 fw-bold">
                    Sign Up
                </a>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center shadow">
        <div class="container">

            <h1 class="display-4 fw-bold mb-3">
                Test Your Knowledge with Smart Exam System!
            </h1>

            <p class="lead mb-5 opacity-75">
                Join the private exam portal, test with AI, and top the leaderboard.
            </p>

            <a href="register.php"
                class="btn btn-light btn-lg px-5 py-3 fw-bold text-primary rounded-pill shadow">
                Get Started Now
            </a>

        </div>
    </header>

    <!-- Features Section -->
    <div class="container mt-5 mb-5 pt-4">

        <div class="row text-center g-4">

            <!-- Timed Exams -->
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4">

                    <div class="feature-icon">⏳</div>

                    <h4 class="fw-bold">Timed Exams</h4>

                    <p class="text-muted">
                        Experience real exam pressure with our automated countdown timer.
                    </p>

                </div>
            </div>

            <!-- Leaderboard -->
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4">

                    <div class="feature-icon">🏆</div>

                    <h4 class="fw-bold">Live Leaderboard</h4>

                    <p class="text-muted">
                        Compete with friends and see who ranks number one on the leaderboard.
                    </p>

                </div>
            </div>

            <!-- Instant Results -->
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4">

                    <div class="feature-icon">📊</div>

                    <h4 class="fw-bold">Instant Results</h4>

                    <p class="text-muted">
                        Get your scores immediately after submission with correct answer reviews.
                    </p>

                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
