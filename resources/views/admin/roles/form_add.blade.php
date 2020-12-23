@include('Admin.nav')
<form style="margin: 1cm" action="/creat/role" method="post" enctype="multipart/form-data">


    <div class="form-group" >
        <label for="exampleInputPassword1">اسم الصلاحية</label>
        <input type="name" name="role" class="form-control" id="exampleInputPassword1" placeholder="ex : Admin" required>
    </div>

    <button type="submit" class="btn btn-primary">اضافة</button>

</form>
