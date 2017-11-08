@if ($flash = session('program'))
<div class="alert alert-success">{{ $flash }}
</div>
@endif


@if ($flash = session('delete'))
<div class="alert alert-danger">{{ $flash }}
</div>
@endif


@if ($flash = session('update'))
<div class="alert alert-success">{{ $flash }}
</div>
@endif

@if ($flash = session('login'))
<div class="alert alert-success">{{ $flash }}
</div>
@endif


@if ($flash = session('register'))
<div class="alert alert-success">{{ $flash }}
</div>
@endif


@if ($flash = session('sendMail'))
<div class="alert alert-success">{{ $flash }}
</div>
@endif

@if ($flash = session('logout'))
<div class="alert alert-danger"><center>{{ $flash }}</center>
</div>
@endif

