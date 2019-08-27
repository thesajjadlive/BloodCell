@if(session('message'))
    <div class="text-center alert alert-success" style="margin: 0 0 20px 0">
       <strong><span class="alert alert-success">{{ session('message') }}</span></strong>
    </div>
@endif