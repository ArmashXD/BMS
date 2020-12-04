@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Your Books
                    <div class="text-muted pt-2 font-size-sm">Check Records of your books </div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="/create_book" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Create New Book</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">

            <!--begin::Search Form-->
            <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
      
                </div>
            </div>
            <!--end::Search Form-->

            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Book Author</th>
                    <th>Book Title</th>
                    <th>Price</th>
                    {{-- <th>Category</th> --}}
                    <th>Year</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>ISBN</th>
                    <th>image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($books as $item)
                    <tr> 
                <td>{{$item['id']}}</td>
                <td>{{$item['author_name']}}</td>
                <td>{{$item['title']}}</td>
                <td>{{$item['price']}}</td>
                    {{-- <td>{{$item->category->name}}</td> --}}
                    <td>{{$item['year']}}</td>
                    <td>{{$item['created_By']}}</td>
                    <td>{{$item['updated_By']}}</td>
                    <td>{{$item['created_at']}}</td>
                    <td>{{$item['updated_at']}}</td>
                    <td>{{$item['ISBN']}}</td>
                    <td nowrap>
                    <a href="/show_book/{{$item['id']}}"><span class="fa fa-eye"></span></a>
                        <a href="/edit_book/{{$item['id']}}"><span class="fa fa-pen"></span></a>
                        <a href="/delete_book/{{$item['id']}}"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection