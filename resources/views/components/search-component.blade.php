<div class="w-full bg-slate-950 py-1">
    <input type="search" name="search_field" id="search_field" placeholder="search by name, category or grade" oninput="perform_search(event)" class="border bg-slate-800 text-slate-200 border-stone-600 rounded-full my-2 px-8 h-10 block w-3/4 mx-auto">
    <div class="py-3 bg-white hidden" id="search-display"></div>
</div>
<script>
    function perform_search(event){
        value = event.target.value;
        url = "{{route('search')}}";
        $('#search-display').removeClass('hidden');
        $.ajax({
            method: 'get',
            url: url,
            data: {search_value: value},
            success: function(response){
                console.log(response);
                html = '';
                for (const key in response.data) {
                    if (response.data.hasOwnProperty.call(response.data, key)) {
                        const element = response.data[key];
                        html += `<a href="{{route('assets.show', '__ID__')}}"><div class="my-2 py-1 px-2 border-y bg-white">
                            <h4 class="text-blue-600">${element.name}</h4>
                            <span class="text-xs text-slate-500">${element.category} | ${element.grade} | ${element.price} CFA</span>
                            <p class="text-slate-800 line-clamp-2">${element.description}</p>
                        </div></a>`.replace('__ID__', element.id);
                    }
                }
                $('#search-display').html(html);
            }
        })
    }
</script>