@extends('layouts.app')

@section('title')
Bio — ทรงกรด อบลา
@endsection

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700&family=Sarabun:wght@400;500&display=swap" rel="stylesheet">
<style>
* { box-sizing: border-box; }
body { font-family: 'Sarabun', sans-serif; background: #F8FAFC; }
.hero {
    background: #0F172A;
    padding: 3rem 2rem 2.5rem;
    border-radius: 16px;
    position: relative;
    overflow: hidden;
    margin-bottom: 2rem;
}
.hero::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 220px; height: 220px;
    border-radius: 50%;
    background: rgba(245,158,11,0.12);
}
.hero-label {
    font-family: 'Kanit', sans-serif;
    font-size: 11px;
    letter-spacing: 3px;
    color: #F59E0B;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}
.hero-name {
    font-family: 'Kanit', sans-serif;
    font-size: 2.6rem;
    font-weight: 700;
    color: #F8FAFC;
    line-height: 1.15;
}
.hero-accent { color: #F59E0B; }
.hero-badges { display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 0.75rem; }
.badge {
    background: rgba(245,158,11,0.15);
    color: #F59E0B;
    font-size: 11px;
    padding: 3px 10px;
    border-radius: 999px;
    border: 1px solid rgba(245,158,11,0.3);
}
.section-label {
    font-family: 'Kanit', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 2px;
    color: #64748B;
    text-transform: uppercase;
    margin-bottom: 1rem;
}
.cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 12px;
    margin-bottom: 2rem;
}
.card {
    background: #fff;
    border: 0.5px solid rgba(0,0,0,0.1);
    border-left: 3px solid #F59E0B;
    border-radius: 0 12px 12px 0;
    padding: 1rem 1.25rem;
}
.card-label { font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
.card-value { font-size: 15px; font-weight: 500; color: #0F172A; }
.id-block {
    background: #0F172A;
    border-left: 4px solid #F59E0B;
    border-radius: 0 12px 12px 0;
    padding: 1.25rem 1.5rem;
    margin-bottom: 2rem;
}
.id-label { font-size: 11px; letter-spacing: 2px; color: #64748B; text-transform: uppercase; margin-bottom: 0.5rem; }
.id-number { font-family: 'Kanit', sans-serif; font-size: 1.3rem; letter-spacing: 2px; color: #F8FAFC; font-weight: 600; }
.id-tags { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 0.75rem; }
.tag { font-size: 12px; padding: 3px 10px; border-radius: 999px; border: 0.5px solid rgba(148,163,184,0.3); color: #94A3B8; }
.contact-list { background: #fff; border: 0.5px solid rgba(0,0,0,0.1); border-radius: 12px; overflow: hidden; }
.contact-row { display: flex; align-items: flex-start; gap: 14px; padding: 1rem 1.25rem; border-bottom: 0.5px solid rgba(0,0,0,0.06); }
.contact-row:last-child { border-bottom: none; }
.contact-icon { width: 36px; height: 36px; border-radius: 8px; background: rgba(245,158,11,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 18px; color: #F59E0B; }
.contact-key { font-size: 12px; color: #94A3B8; margin-bottom: 3px; }
.contact-val { font-size: 14px; font-weight: 500; color: #0F172A; }
</style>

<div class="hero">
    <div class="hero-label">ประวัติส่วนตัว · Personal Profile</div>
    <div class="hero-name">ทรงกรด<br><span class="hero-accent">อบลา</span></div>
    <div class="hero-badges">
        <span class="badge">สัญชาติไทย</span>
        <span class="badge">หมู่เลือด O</span>
        <span class="badge">ศาสนาพุทธ</span>
    </div>
</div>

<p class="section-label">ข้อมูลส่วนตัว</p>
<div class="cards-grid">
    <div class="card">
        <div class="card-label">ชื่อ-นามสกุล</div>
        <div class="card-value">นายทรงกรด อบลา</div>
    </div>
    <div class="card">
        <div class="card-label">วันเกิด</div>
        <div class="card-value">31 สิงหาคม 2548</div>
    </div>
    <div class="card">
        <div class="card-label">จังหวัดที่เกิด</div>
        <div class="card-value">จันทบุรี</div>
    </div>
    <div class="card">
        <div class="card-label">หมู่เลือด</div>
        <div class="card-value">O (โอ)</div>
    </div>
</div>

<p class="section-label">ข้อมูลทางกฎหมาย</p>
<div class="id-block">
    <div class="id-label">เลขประจำตัวประชาชน</div>
    <div class="id-number">1-2289-00034-72-0</div>
    <div class="id-tags">
        <span class="tag">สัญชาติ: ไทย</span>
        <span class="tag">เชื้อชาติ: ไทย</span>
        <span class="tag">ศาสนา: พุทธ</span>
    </div>
</div>

<p class="section-label">ช่องทางการติดต่อ</p>
<div class="contact-list">
    <div class="contact-row">
        <div class="contact-icon">📞</div>
        <div>
            <div class="contact-key">เบอร์โทรศัพท์</div>
            <div class="contact-val">092-520-3876</div>
        </div>
    </div>
    <div class="contact-row">
        <div class="contact-icon">✉️</div>
        <div>
            <div class="contact-key">อีเมล</div>
            <div class="contact-val">pednoy1150@gmail.com</div>
        </div>
    </div>
    <div class="contact-row">
        <div class="contact-icon">🏠</div>
        <div>
            <div class="contact-key">ที่อยู่ตามทะเบียนบ้าน</div>
            <div class="contact-val">21/12 หมู่ 4 ต.ทับไทร อ.โป่งน้ำร้อน จ.จันทบุรี 22140</div>
        </div>
    </div>
</div>

@endsection