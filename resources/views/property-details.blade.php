<x-head/>
<body>
    <x-header-alt/>

    <x-real-property-details :id="$id"/>

    <div class="bg-blue-900 w-full">
        <x-footer/>
    </div>
    <script>
    function showImage(event) {
        $('#main_image').attr('src', $(event.target).attr('src'));
    }
    </script>
</body>
</html>