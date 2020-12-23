@include('Admin.nav')
<form style="margin: 1cm" action="/creat/product" method="post" enctype="multipart/form-data">


    <div class="form-group" >
        <label for="exampleInputPassword1">العنوان</label>
        <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="title" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">الوصف</label>
        <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="description" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">وحدة القياس</label>
        <input type="text" name="unit" class="form-control" id="exampleInputPassword1" placeholder="unit" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">المجموع الكلي لعدد القطع</label>
        <input type="text" name="total" class="form-control" id="exampleInputPassword1" placeholder="total" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">السعر</label>
        <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="price" required>
    </div>

    <div class="form-group">
        <label>اختيار الفئة </label>
        <select class="mdb-select md-form" name="category_id">
            @foreach($category as $categories)
                <option value="{{$categories['id']}}"  selected>{{$categories['name']}}</option>
            @endforeach


        </select>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">صورة</label>
        <input type="file" name="url" class="form-control-file" id="url" required>
    </div>
    <button type="submit" class="btn btn-primary">اضافة</button>

</form>
