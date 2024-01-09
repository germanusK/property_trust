<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Property Trust</title>

        <link href="{{ asset('img/logo1.jpg') }}" rel="icon">
        <link href="{{ asset('img/logo1.jpg') }}" rel="apple-touch-icon">
        
        <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('tailwindcss/tailwind-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.0.0-beta1-web/css/all.min.css') }}">
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" /> --}}

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/animejs/anime.min.js') }}"></script>
   
        
		<style>
            body {
                font-family: sans-serif;
            }
            .h-85sc{
                height: 85vh;
            }
            .min-h-75sc{
                min-height: 75vh;
            }
            .no-scrollbar::-webkit-scrollbar{
                display: none;
            }
            .prop:hover .action-btn{
                display: block;
                transition: all ease-in-out 0.8s;
            }
            .menu-item > .drop-down{
                display: none;
            }
        </style>
    </head>