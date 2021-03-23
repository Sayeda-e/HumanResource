@if(session('success'))
<div class="suc text text-right">{{ session('success') }}</div>
@endif


@if(session('updat'))
<div class="suc text text-right">{{ session('updat') }} </div>
@endif

@if(session('del'))
<div class="suc text text-right">{{ session('del') }}</div>
@endif