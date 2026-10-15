<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - ระบบจัดการข้อมูลสัปดาห์ที่ 2</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .navbar { box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .footer { background: #343a40; color: white; padding: 40px 0; margin-top: 50px; }
        .main-content { min-height: 600px; padding-top: 30px; }
        .nav-link:hover { color: #ffc107 !important; transition: 0.3s; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Laravel Week 2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">หน้าแรก</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">รายการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">เกี่ยวกับเรา</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>เกี่ยวกับเรา</h5>
                    <p class="small text-secondary">เราคือผู้พัฒนาระบบด้วย Laravel มืออาชีพ</p>
                </div>
                <div class="col-md-4">
                    <h5>ลิงก์สำคัญ</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50 text-decoration-none">นโยบายความเป็นส่วนตัว</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">ติดต่อสอบถาม</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>ติดตามเรา</h5>
                    <p class="small text-secondary">Facebook | GitHub | YouTube</p>
                </div>
            </div>
            <hr class="bg-secondary">
            <p class="mb-0">&copy; 2024 Laravel Development. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>