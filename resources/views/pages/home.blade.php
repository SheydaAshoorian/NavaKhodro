@extends('layouts.app')

@section('title', 'نواخودرو | خرید، فروش و خدمات خودرو در منطقه آزاد')

@section('content')

    <!-- بخش ۱: هیرو -->
    <x-hero />
    <!-- بخش ۲: نوار اعتماد -->
    <x-trust-bar />

    <x-dual-portal />
    <!-- بخش ۳: خودروهای ویژه -->
    <x-featured-cars />
    <!-- بخش 4: برندها -->
    <x-brands />
    <!-- بخش 5: ثبت نام خودرو -->
    <x-register-cars />
    <!-- بخش 6: قطعات خودروهای وارداتی (منتقل شده به بالا) -->
    <x-parts-request />
    <!-- بخش 7: قطعات خودروهای وارداتی -->
    <x-parts-banner />
    <!-- بخش 8: معرفی شهر نواخودرو -->
    <x-about />
    <!-- بخش 9: سه گانه خدمات -->
    <x-how-to-help />
    <!-- بخش 10: بلاگ -->
    <x-blog />


@endsection
