@include('Admin.nav')
<form style="margin: 1cm" action="/creat/category" method="post" enctype="multipart/form-data">


    <div class="form-group" >
        <label for="exampleInputPassword1">الأسم</label>
        <input type="name" name="name" class="form-control" id="exampleInputPassword1" placeholder="name" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">صورة</label>
        <input type="file" name="url" class="form-control-file" id="url" required>
    </div>

    <button type="submit" class="btn btn-primary">اضافة</button>

</form>
