<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'StuntCare' ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.0/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        :root {
          --primary-color: #1a1a1a; /* Darker shade for background */
          --secondary-color: #3498db;
          --accent-color: #e74c3c;
          --light-bg: #2f2f2f; /* Light grey for background */
          --dark-bg: #1c1c1c; /* Very dark background for a premium feel */
        }

        body {
          background-color: var(--light-bg);
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          padding: 20px 0;
          color: #ddd; /* Light text color for readability */
        }

        .main-container {
          max-width: 1200px;
          margin: 0 auto;
        }

        .page-header {
          background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
          color: white;
          padding: 30px;
          border-radius: 15px;
          margin-bottom: 30px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .header-title {
          font-weight: 700;
          margin: 0;
          letter-spacing: 1px;
          font-size: 36px;
        }

        .header-subtitle {
          opacity: 0.8;
          font-size: 18px;
          margin-top: 5px;
        }

        .card {
            color: white; /* Warna teks dalam card menjadi putih */
            background-color: var(--dark-bg); /* Menyesuaikan dengan tema gelap */
        }

        .card-body {
            color: white; /* Warna teks dalam card-body menjadi putih */
        }

        /* Jika ada elemen lain dalam card, pastikan mereka mewarisi warna yang sama */
        .card .header-title, .card .header-subtitle {
            color: white;
        }

        .form-section {
          background-color: var(--primary-color);
          border-radius: 10px;
          padding: 30px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .form-section h5 {
          color: var(--secondary-color);
          font-weight: 600;
          margin-bottom: 20px;
          padding-bottom: 10px;
          border-bottom: 2px solid var(--secondary-color);
        }

        .form-control {
          border-radius: 8px;
          padding: 12px 15px;
          border: 1px solid #444;
          background-color: #333;
          color: #ccc;
          transition: all 0.3s;
        }

        .form-control:focus {
          border-color: var(--secondary-color);
          box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .btn-submit {
          background: linear-gradient(to right, var(--secondary-color), #2980b9);
          border: none;
          padding: 12px;
          border-radius: 8px;
          font-weight: 600;
          letter-spacing: 0.5px;
          transition: all 0.3s;
        }

        .btn-submit:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }

        .table-container {
          background-color: var(--dark-bg);
          border-radius: 10px;
          padding: 5px;
          overflow: hidden;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .table thead {
          background: linear-gradient(to right, var(--primary-color), var(--dark-bg));
        }

        .table thead th {
          border: none;
          font-weight: 600;
          letter-spacing: 0.5px;
          padding: 15px 10px;
          vertical-align: middle;
        }

        .table tbody tr {
          transition: all 0.2s;
        }

        .table tbody tr:hover {
          background-color: rgba(52, 152, 219, 0.1);
        }

        .img-profile {
          width: 45px;
          height: 45px;
          object-fit: cover;
          border-radius: 50%;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .action-btn {
          padding: 6px 12px;
          border-radius: 6px;
          transition: all 0.2s;
        }

        .btn-edit {
          background-color: #f39c12;
          border-color: #f39c12;
          color: white;
        }

        .btn-edit:hover {
          background-color: #e67e22;
          color: white;
        }

        .btn-delete {
          background-color: #e74c3c;
          border-color: #e74c3c;
          color: white;
        }

        .btn-delete:hover {
          background-color: #c0392b;
          color: white;
        }
        .custom-footer {
            margin-top: 20px; /* Memberikan jarak atas pada footer */
        }

        .copyright {
          margin-top: 15px;
          font-size: 14px;
          opacity: 0.6;
        }

        @media (max-width: 768px) {
          .form-section, .table-container {
            margin-bottom: 20px;
          }

          .page-header {
            border-radius: 10px;
            margin-bottom: 20px;
          }
        }
    </style>    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Kelompok 7</a>
        </div>
    </nav>

    <!-- Main container -->
    <div class="container py-5 mb-5">
