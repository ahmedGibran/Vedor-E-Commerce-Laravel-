@include('admin.nav');


    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">الفئات
                        <a  href="{{url('/category/add')}}"><button type="button" class="btn btn-success">اضافة فئة </button></a>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($category as $categories)
                            <div class="col-md-3">
                                <div class="alert alert-primary"role="alert">
                                    <img  src="{{asset("storage/image/".$categories->url)}}" alt="image" class="img-thumbnail card-img">

                                    <p>{{$categories->name}}</p>

                                    <a href="/update/category/{{$categories['id']}}">
                                            <button type="button" class="btn btn-success">تحديث</button>
                                        </a>
                                   <a href="/category/table/delete/{{$categories['id']}}" class="btn btn-secondary">حذف</a>

                                </div>
                            </div>

                            @endforeach

                        </div>
                        {{$category->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.scripts')
