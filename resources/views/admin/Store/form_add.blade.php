@include('Admin.nav')
<form style="margin: 1cm" action="/creat/store" method="post" enctype="multipart/form-data">


    <div class="form-group" >
        <label for="exampleInputPassword1">اسم المتجر</label>
        <input type="name" name="name" class="form-control" id="exampleInputPassword1" placeholder="name" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">اسم المدينة</label>
        <input type="name" name="city" class="form-control" id="exampleInputPassword1"  required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">صورة</label>
        <input type="file" name="image" class="form-control-file" id="url" required>
    </div>

    <div class="form-group">
        <label>اختيار أدمن </label>
        <select class="mdb-select md-form" name="user_id">
            @foreach($user as $users)
                <option value="{{$users['id']}}"  selected>{{$users['name']}}</option>
            @endforeach


        </select>
    </div>
    <button type="submit" class="btn btn-primary">اضافة متجر جديد</button>

</form>
