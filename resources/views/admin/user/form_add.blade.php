@include('Admin.nav')
<form style="margin: 1cm" action="/creat/user" method="post">
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الأسم الأول</label>
        <input type="name" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
    </div>
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الأسم الأخير</label>
        <input   type="name" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
    </div>

    <div class="form-group" >
        <label for="exampleInputPassword1">رقم الهاتف</label>
        <input type="phone" name="phone" class="form-control" id="exampleInputPassword1" placeholder="09XXXXXXXX">
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="ex@example.ex" required>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">الرقم السري</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="form-group">
        <label>Role </label>
        <select class="mdb-select md-form" name="role_id">
            @foreach($role as $roles)
                <option value="{{$roles['id']}}"  selected>{{$roles['role']}}</option>
            @endforeach


        </select>
    </div>
    <!-- <div class="form-group" >
         <label for="exampleInputPassword1">supplier_id</label>
         <input  name="supplier_id" class="form-control" id="exampleInputPassword1" placeholder="Password">
     </div>-->

    <button type="submit" class="btn btn-primary">اضافة</button>

</form>
