@extends('layouts.cms')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Lista de categorias. </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- categories list -->
    <body></body>
    <div class="gray-background">
        <section class="main-wrapper">
        <a class="btn btn-secondary" style="margin-top: 5px" href="{{route('site.categories.form')}}" role="button">Inserir</a>
        <table class="table table-bordered table-striped table-hover" style="margin-top: 5px; margin-bottom:10px">
        <caption>Mostrando {{$categories->count()}} categorias de {{$categories->total()}}</caption>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                  <tr>
                        <input type="hidden" class="delete_id" name="delete_id" value="{{$category->slug}}">
                      <th scope="row">    
                        <a class="btn btn-outline-primary btn-sm" href="{{route('site.categories.form.update', ['slug' => $category->slug])}}"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-outline-secondary btn-sm delete-category"><i class="fa fa-trash"></i></button>
                        <a  href="#"></a>
                      </th>
                      <th scope="row">{{$category->id}}</th>
                      <td>{{$category->name}}</td>
                      <td>{{substr($category->description, 0, 30) }}...</td>
                  </tr>
                @endforeach
            </tbody>        
        </table>
        {{$categories->links('layouts.pagination')}}
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

        $('.delete-category').click(function (e){
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
                    url:  '{{url("category/delete")}}'+"/"+id,
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
