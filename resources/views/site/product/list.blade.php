@extends('layouts.cms')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Produtos </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- Products list -->
    <body></body>
    <div class="gray-background">
        <section class="main-wrapper">
        <a class="btn btn-secondary" style="margin-top: 5px" href="{{route('site.products.form')}}" role="button">Inserir</a>
        <table class="table table-bordered table-striped table-hover" style="margin-top: 5px; margin-bottom:10px">
        <caption>Mostrando {{$products->count()}} productos de {{$products->total()}}</caption>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                  <tr>
                        <input type="hidden" class="delete_id" name="delete_id" value="{{$product->id}}">
                      <th scope="row">    
                        <a class="btn btn-outline-primary btn-sm" href="{{route('site.products.form.update', ['product_id' => $product->id])}}"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-outline-secondary btn-sm delete-product"><i class="fa fa-trash"></i></button>
                        <a  href="#"></a>
                      </th>
                      <th scope="row">{{$product->id}}</th>
                      <td>{{$product->category_id}} - {{$product->category_name}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{ date('d/m/Y H:i', strtotime($product->created_at))}}</td>
                  </tr>
                @endforeach
            </tbody>        
        </table>
        {{$products->links('layouts.pagination')}}
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

        $('.delete-product').click(function (e){
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
                    url:  '{{url("product/delete")}}'+"/"+id,
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
