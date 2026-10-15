@extends('layouts.main')

@section('title', 'รายการสินค้า')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">คลังสินค้าของเรา</h2>
    <button class="btn btn-success">+ เพิ่มสินค้าใหม่</button>
</div>

<div class="table-responsive bg-white p-3 rounded shadow-sm">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>รหัสสินค้า</th>
                <th>รูปภาพ</th>
                <th>ชื่อสินค้า</th>
                <th>หมวดหมู่</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th class="text-center">จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @php
                $items = [
                    ['id' => 'P001', 'name' => 'Laravel Notebook', 'cat' => 'อุปกรณ์การเรียน', 'price' => '1,200', 'status' => 'พร้อมส่ง'],
                    ['id' => 'P002', 'name' => 'PHP T-Shirt', 'cat' => 'เสื้อผ้า', 'price' => '450', 'status' => 'สินค้าหมด'],
                    ['id' => 'P003', 'name' => 'Eloquent Cup', 'cat' => 'ของใช้', 'price' => '290', 'status' => 'พร้อมส่ง'],
                    ['id' => 'P004', 'name' => 'Composer Cap', 'cat' => 'เสื้อผ้า', 'price' => '350', 'status' => 'พร้อมส่ง']
                ];
            @endphp

            @foreach($items as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td><img src="https://via.placeholder.com/40" class="rounded" alt="img"></td>
                <td><span class="fw-bold text-dark">{{ $item['name'] }}</span></td>
                <td>{{ $item['cat'] }}</td>
                <td class="text-primary fw-bold">{{ $item['price'] }} บาท</td>
                <td>
                    <span class="badge {{ $item['status'] == 'พร้อมส่ง' ? 'bg-success' : 'bg-danger' }}">
                        {{ $item['status'] }}
                    </span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-info text-white">ดู</button>
                        <button class="btn btn-sm btn-warning">แก้ไข</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link">ก่อนหน้า</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
    </ul>
</nav>
@endsection