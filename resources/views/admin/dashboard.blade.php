


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

{{--  --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">{{ Auth::guard("admin")->user()->name }}</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex " role="search" action="{{ route('admin.logout') }}" method="post">
            @csrf
            <input type="submit" value='logout' class="btn btn-danger btn-lg">
        </form>
      </div>
    </div>
  </nav>
{{--  --}}



        <div class="row m-5">
            <div class="card col-md-5">
                <div class="card-title">notificaitons</div>
                <div class="card-body">
                       @foreach ($notifications as $n)
                             <div class="alert alert-info">
                                    {{ $n->type }};
                                    <a href="" class="float-right mark-btn"  data-id='{{ $n->id }}'>mark as read</a>
                             </div>
                       @if ($loop->last)
                            <a href="" class="float-right" id="mark-all-btn" data-id='{{ $n->id }}'>mark all read</a>
                        @endif
                       @endforeach
                </div>
             </div>

        </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset("admin") }}/jequery.js"></script>

    <script>


        $(".mark-btn").click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                        url:'{{ route('admin.markasread') }}',
                        type: "POST",
                        data:{
                            'id':$(this).data('id')
                        },
               });
            $(this).parents("div.alert").remove();
        });

        $("#mark-all-btn").click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                        url:'{{ route('admin.markasread') }}',
                        type: "POST",
                        data:{
                        },
               });
            $("div.alert").remove();
        });



    </script>


</body>
</html>
