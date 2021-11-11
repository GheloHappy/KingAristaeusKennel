@extends('layouts.app')

@section('location')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home/location.css">
    <title>Location</title>
</head>
<body>
    <div class='map'>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.538465297343!2d121.24188041432046!3d14.625348080391861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bf97338411ef%3A0xeb0f77b4c1e585e3!2sKing%20Aristaeus%20Kennel!5e0!3m2!1sen!2sph!4v1636612215841!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.538465297343!2d121.24188041432046!3d14.625348080391861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bf97338411ef%3A0xeb0f77b4c1e585e3!2sKing%20Aristaeus%20Kennel!5e0!3m2!1sen!2sph!4v1636612215841!5m2!1sen!2sph" width="1000vw" height="500vh" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</body>
</html>
@endsection