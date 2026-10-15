@extends('layouts.main')

@section('title', 'เกี่ยวกับเรา')

@section('content')
<div class="row align-items-center py-5 bg-white shadow-sm rounded">
    <div class="col-md-6 text-center">
        <img src="https://via.placeholder.com/400x300" class="img-fluid rounded-circle shadow" alt="About Us">
    </div>
    <div class="col-md-6 px-4">
        <h2 class="fw-bold text-primary mb-3">เป้าหมายของเรา</h2>
        <p class="text-muted">
            เรามุ่งเน้นการให้ความรู้ด้านการพัฒนาเว็บไซต์ด้วยเทคโนโลยีที่ทันสมัยที่สุด 
            เพื่อสร้างบุคลากรที่มีคุณภาพเข้าสู่ตลาดแรงงานดิจิทัล 
            สัปดาห์นี้เราได้เรียนรู้ถึงความทรงพลังของ Blade Engine ที่ช่วยให้เราเขียนโค้ดได้เป็นระเบียบขึ้น
        </p>
        
        <h5 class="mt-4">ค่านิยมหลักของเรา:</h5>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><i class="text-success bi bi-check-circle"></i> ความถูกต้องแม่นยำของโค้ด</li>
            <li class="list-group-item"><i class="text-success bi bi-check-circle"></i> ความสวยงามของ UI/UX</li>
            <li class="list-group-item"><i class="text-success bi bi-check-circle"></i> การสนับสนุนชุมชน Open Source</li>
        </ul>

        <div class="p-3 bg-light rounded border">
            <h6>ติดต่อฝ่ายสนับสนุน</h6>
            <p class="mb-1 small"><strong>อีเมล:</strong> support@laravelweek2.com</p>
            <p class="mb-0 small"><strong>โทรศัพท์:</strong> 02-xxx-xxxx</p>
        </div>
    </div>
</div>

<div class="row mt-5 text-center">
    <div class="col-md-12">
        <h3 class="mb-4">ทีมงานของเรา</h3>
    </div>
    <div class="col-md-4">
        <div class="p-3">
            <div class="bg-secondary rounded-circle mb-3 mx-auto" style="width: 100px; height: 100px;"></div>
            <h6>สมชาย นักเขียนโค้ด</h6>
            <p class="small text-muted">Backend Developer</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="p-3">
            <div class="bg-secondary rounded-circle mb-3 mx-auto" style="width: 100px; height: 100px;"></div>
            <h6>สมหญิง นักจัดวาง</h6>
            <p class="small text-muted">Frontend Designer</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="p-3">
            <div class="bg-secondary rounded-circle mb-3 mx-auto" style="width: 100px; height: 100px;"></div>
            <h6>สมหวัง ตั้งค่าเซิร์ฟ</h6>
            <p class="small text-muted">System Admin</p>
        </div>
    </div>
</div>
@endsection