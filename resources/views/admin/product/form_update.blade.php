@include('admin.nav')
<form style="margin: 1cm" action="{{url('/user/product',[$product['id']])}}" method="post">
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الاسم</label>
        <input type="text" name="title" class="form-control"  value="{{$product['title']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$product['title']}}">
    </div>
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >وحدة القياس</label>
        <input type="text" name="unit" class="form-control"  value="{{$product['unit']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$product['unit']}}">
    </div>
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >المجموع الكلي لعدد القطع</label>
        <input type="text" name="total" class="form-control"  value="{{$product['total']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$product['total']}}">
    </div>
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الوصف</label>
        <input type="text" name="description" class="form-control"  value="{{$product['description']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$product['description']}}">
    </div>

    <div class="form-group" >
        <label for="exampleInputPassword1">السعر</label>
        <input type="number" name="price" value="{{$product['price']}}" class="form-control" id="exampleInputPassword1" placeholder="{{$product['price']}}">
    </div>
    <div class="form-group">
        <label>اختيار الفئة </label>
        <select class="mdb-select md-form" name="category_id">

            @foreach($category as $categories)
                <option value="{{$categories['id']}}"  selected>{{$categories['name']}}</option>
            @endforeach


        </select>
    </div>

    <div class="form-group">

    </div>
    <button type="submit" class="btn btn-primary">تحديث</button>
    @include('admin.scripts')
</form>
