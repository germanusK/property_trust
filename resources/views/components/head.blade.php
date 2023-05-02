<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
        <title>Property Trust</title>
        
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('tailwindcss/tailwind-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.3.1/css/all.min.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        
		<style>
            body {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
            td{
                padding: 3px 0.5rem;
                border: 1px solid white !important;
                background-color: #edeced;
                color: black !important;
            }
            thead{
                background-color: #cbcdcf;
                border-block: 1px solid white;
                padding-block: 4px;
                color: black !important;
            }
            tr{
                box-shadow: 0.2rem 0px white;
                border-block: 1px solid lightgray !important;
            }
            .menu-item > .drop-down{
                display: none;
            }
        </style>
    </head>