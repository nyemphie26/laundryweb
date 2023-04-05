@extends('Pages.page')
@section('pageTitle')
    Data Deletion
@endsection
@section('subcontent')
<div class="row justify-content-center py-5">
    <div class="col text-start">
        <p>
            In terms of deleting your data, it means that you unlink your social media with our application and you will not have access to our application or your old data. However, we still store your name, email and profile picture as a report that you are registered or make transactions in our application.
            <br>
            <br>
            Please contact our admin to delete (unlink) your social account from our application.
            <br>
            <br>
            <span class="fw-bold">info@washpress.com.au</span>
        </p>
    </div>
    
</div>
@endsection

@section('page-script')
<script>
    function getData() {
            setTimeout(() => {
                document.querySelector(".loader").classList.remove("loader-active");
                document.querySelector(".section").style.display = "block";
            }, 1000);
        }
</script>
@endsection