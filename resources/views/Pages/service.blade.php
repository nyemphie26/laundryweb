@extends('Pages.page')

@section('pageTitle')
    Here is title message
@endsection

@section('subcontent')
    @foreach ($contentData as $idx => $service)
        <div class="row justify-content-center py-5">
            <div class="col text-center me-2 {{ ($idx % 2 == 1) ? 'order-last' : '' }}">
                <h2 class="text-primary fs-1">{{ $service['service_name'] }}</h2>
                <br>
                    <p class="text-start text-secondary">
                        {!! $service['description'] !!}
                    </p>
                <br>
            </div>
            <div class="col text-center my-auto ms-2">
                <img src="{{ $service['picture'] ?? 'xxx' }}" alt="" srcset="" class="reveal {{ ($idx % 2 == 1) ? 'rev-left' : 'rev-right' }} img-fluid">
            </div>
        </div>
    @endforeach
@endsection

@section('page-script')
    <script>
        function getData() {
            const currentPath = window.location.pathname;
            slug = getSlugFromUrl(currentPath);
            var link = `${baseUrl}/api/v2/service-page/Service_${slug}`;
            fetch(link,{
                method:'get'
                })
                .then(res=>res.json())
                .then(data=>{
                    document.getElementById('pageBackground').style.backgroundImage = `url(${data[`${slug}_Page_background`]})`;
                    document.getElementById('pageTitle').innerHTML = data[`${slug}_Page_title`];
                
                    setTimeout(() => {
                        document.querySelector(".loader").classList.remove("loader-active");
                        document.querySelector(".section").style.display = "block";
                    }, 1000);
                })
                .catch(err=>console.log(err));
            }

            function getSlugFromUrl(url) {
                const parts = url.split('/');
                const lastPart = parts[parts.length - 1];
                return lastPart;
            }
    </script>
@endsection