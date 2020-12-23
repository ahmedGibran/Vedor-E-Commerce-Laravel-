@include('admin.nav');


    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">المتاجر
                        <a  href="{{url('/store/add')}}"><button type="button" class="btn btn-success">اضافة متجر </button></a>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($store as $stories)
                            <div class="col-md-3">
                                <div class="alert alert-primary"role="alert">
                                    <img  src="{{asset("storage/store_image/".$stories->url)}}" alt="image" class="img-thumbnail card-img">

                                    <p>{{$stories->name}}</p>
                                    <p>{{$stories->city}}</p>

                                    <a href="/update/store/{{$stories['id']}}">
                                            <button type="button" class="btn btn-success">تحديث</button>
                                        </a>
                                   <a href="/store/table/delete/{{$stories['id']}}" class="btn btn-secondary">حذف</a>

                                </div>
                            </div>

                            @endforeach

                        </div>
                        {{$store->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.scripts')
