<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php include '../bootstrap.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #e2e8f0;
        overflow-x: hidden;
    }

    .sidebar {
        min-height: 100vh;
        background: #1e293b;
        padding-top: 20px;
        position: fixed;
        width: 280px;
        transition: width 0.3s, transform 0.3s;
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }

    .sidebar a {
        color: #d1d5db;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        text-decoration: none;
        font-size: 1.1rem;
        transition: all 0.3s;
        border-left: 4px solid transparent;
    }

    .sidebar a:hover {
        background: #334155;
        color: #60a5fa;
        border-left-color: #60a5fa;
        transform: translateX(5px);
    }

    .sidebar .nav-link.active {
        background: #3b82f6;
        color: #ffffff;
        border-left-color: #ffffff;
    }

    .content {
        margin-left: 280px;
        padding: 30px;
        transition: margin-left 0.3s;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        min-height: 100vh;
    }

    .navbar-toggler {
        display: none;
    }

    .card {
        border: none;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(4px);
        color: #e2e8f0;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-header {
        background: linear-gradient(90deg, #3b82f6, #60a5fa);
        color: white;
        border-radius: 15px 15px 0 0;
    }

    .btn-primary {
        background: linear-gradient(45deg, #3b82f6, #60a5fa);
        border: none;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(59, 130, 246, 0.7);
    }

    .modal-content {
        background: rgba(30, 41, 59, 0.95);
        border: 1px solid #60a5fa;
        color: #e2e8f0;
        z-index: 1056;
        /* Ensure modal is above other elements */
    }

    .modal-backdrop {
        z-index: -2 !important;
        /* Ensure backdrop is below modal content */
        background: rgba(0, 0, 0, 0.7);
        /* Slightly lighter backdrop */
    }

    .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid #60a5fa;
        color: #e2e8f0;
        z-index: 1057;
        /* Ensure inputs are above modal content */
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.2);
        border-color: #3b82f6;
        box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
    }

    .modal {
        z-index: 1056;
        /* Ensure modal is above other elements */
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 0;
            transform: translateX(-280px);
        }

        .sidebar.active {
            width: 280px;
            transform: translateX(0);
        }

        .content {
            margin-left: 0;
        }

        .navbar-toggler {
            display: block;
            background: #3b82f6;
            border: none;
        }
    }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <h3 class="text-white text-center mb-4"><i class="fas fa-rocket me-2"></i> Futura Admin</h3>
            <nav class="nav flex-column">
                <a class="nav-link active" href="index.php?page=dashboard"><i class="fas fa-tachometer-alt me-2"></i>
                    Dashboard</a>
                <a class="nav-link" href="index.php?page=categories"><i class="fas fa-list me-2"></i> Categories</a>
                <a class="nav-link" href="index.php?page=products"><i class="fas fa-box me-2"></i> Products</a>
                <a class="nav-link" href="index.php?page=cms"><i class="fas fa-file-alt me-2"></i> CMS</a>
                <a class="nav-link" href="index.php?page=users"><i class="fas fa-users me-2"></i> Users</a>
            </nav>
        </div>

        <!-- Content Area -->
        <div class="content w-100">
            <nav class="navbar navbar-light bg-transparent mb-4">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" onclick="toggleSidebar()">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h2 class="mb-0 text-white">
                        <?php
                        $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
                        echo ucfirst($page);
                        ?>
                    </h2>
                </div>
            </nav>

            <div class="container-fluid">
                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
                switch ($page) {
                    case 'categories':
                        include 'categories.php';
                        break;
                    case 'products':
                        include 'products.php';
                        break;
                    case 'cms':
                        include 'cms.php';
                        break;
                    case 'users':
                        include 'users.php';
                        break;
                    default:
                        include 'dashboard.php';
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <?php include '../bootstrap.php'?>
    <script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }


    // Handle form submissions
    </script>
</body>

</html>