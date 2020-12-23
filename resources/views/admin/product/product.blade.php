@include('admin.nav');


<div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">المنتجات
                        <a  href="{{url('/product/add')}}"><button type="button" class="btn btn-success">اضافة منتج</button></a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($product as $Product)

                                <div class="col-md-3">
                                    <div class="alert alert-primary"role="alert">
                                        <p>{{$Product->title}}</p>
                                        <img  src="{{asset("storage/product_image/".$Product->url)}}" alt="image" class="img-thumbnail card-img">
                                      <!--  <img src="\*{count($Product->image)>0)?$Product->image[0]->url:''}}" alt="image" class="img-thumbnail card-img">-->
                                        <p>price : {{$Product->price}}</p>
                                        <a href="/update/product/{{$Product['id']}}">
                                            <button type="button" class="btn btn-success">تحديث</button>
                                        </a>
                                        <a href="/product/table/delete/{{$Product['id']}}" class="btn btn-secondary">حذف</a>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        {{$product->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.scripts')
