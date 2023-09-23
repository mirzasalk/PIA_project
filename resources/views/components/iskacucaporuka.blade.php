
@if(session()->has('poruka'))
<div x-data="{ show: true }" x-init="setTimeout(()=>show=false,3000)" x-show='show' >
    <p>{{session('poruka')}}</p>
</div>
@endif