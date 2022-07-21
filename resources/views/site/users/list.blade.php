@extends('layouts.cms')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Usuários </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- users list -->
    <body></body>
    <div class="gray-background">
        <section class="main-wrapper">
        <a class="btn btn-secondary" style="margin-top: 5px" href="{{route('site.users.form')}}" role="button">Inserir</a>
        <table class="table table-bordered table-striped table-hover" style="margin-top: 5px; margin-bottom:10px">
        <caption>Mostrando {{$users->count()}} usuários de {{$users->total()}}</caption>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                  <tr>
                        <input type="hidden" class="delete_id" name="delete_id" value="{{$user->id}}">
                      <th scope="row">    
                        <a class="btn btn-outline-primary btn-sm" href="{{route('site.users.form.update', ['user_id' => $user->id])}}"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-outline-secondary btn-sm delete-user"><i class="fa fa-trash"></i></button>
                        <a  href="#"></a>
                      </th>
                      <th scope="row">{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                  </tr>
                @endforeach
            </tbody>        
        </table>
        {{$users->links('layouts.pagination')}}
        </section>
    </div>
@endsection
@section('footer-scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function(){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-roken"]').attr('content')
            }
        });

        $('.delete-user').click(function (e){
            e.preventDefault();

            var id = $(this).closest('tr').find('.delete_id').val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url:  '{{url("users/delete")}}'+"/"+id,
                    data: {
                        "id": id
                    },
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    success: function(response){
                        location.reload();
                    }
                });
                
            }
            })
            //
        });
    });

</script>
@endsection
