@if ($errors->any())

<div class="errors_box inner">
    <ul class="">
        @foreach ($errors->all() as $error)
        <li class="error_content">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif