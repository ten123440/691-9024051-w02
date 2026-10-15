@extends('layouts.main')

@section('title', 'หน้าแรก')

@section('content')
<div class="bg-white p-5 rounded-lg shadow-sm">
    <h1 class="display-4 text-primary fw-bold">ยินดีต้อนรับสู่ระบบ Laravel</h1>
    <p class="lead">นี่คือการส่งงานสัปดาห์ที่ 2 เรื่องการจัดการ Blade Template และ Layout</p>
    <hr class="my-4">
    
    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="h5">โครงสร้าง Master Layout</h3>
                    <p class="text-muted small">การแยกส่วน Header, Footer และ Content ออกจากกันเพื่อให้ง่ายต่อการจัดการ</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="h5">การใช้งาน @@yield และ @@section</h3>
                    <p class="text-muted small">คำสั่งหลักของ Blade ในการกำหนดพื้นที่สำหรับเนื้อหาที่เปลี่ยนไปตามหน้าต่างๆ</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="h5">Bootstrap Integration</h3>
                    <p class="text-muted small">การนำ CSS Framework ยอดนิยมมาใช้งานร่วมกับ Laravel เพื่อความรวดเร็วในการจัดทำเลย์เอาท์</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-info mt-4" role="alert">
        <strong>ประกาศ:</strong> ระบบนี้ถูกสร้างขึ้นเพื่อวัตถุประสงค์ในการศึกษาโครงสร้าง Blade Template ขั้นพื้นฐาน
    </div>
</div>
@endsection