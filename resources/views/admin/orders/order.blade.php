@include('admin.nav');


<div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">طلبات</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($order as $orders)
                                <div class="col-md-3">
                                    <div class="alert alert-primary"role="alert">
                                        <p>{{$orders->order_date}}</p>
                                        <p>{{$orders->customer->first_name}}</p>
                                        <a href="/agree/product/{{$orders['id']}}">
                                            <button type="button" class="btn btn-success">مواقق</button>
                                        </a>
                                        <a href="/order/table/cancel/{{$orders['id']}}" class="btn btn-secondary">الغاء</a>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        {{$order->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.scripts')
