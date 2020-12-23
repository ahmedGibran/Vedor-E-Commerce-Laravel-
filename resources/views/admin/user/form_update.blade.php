@include('admin.nav')
<form style="margin: 1cm" action="{{url('/user/update',[$user['id']])}}" method="post">
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الأسم الأول</label>
        <input type="name" name="first_name" class="form-control"  value="{{$user['first_name']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$user['first_name']}}">
    </div>
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الأسم الأخير</label>
        <input type="name" name="last_name" class="form-control"  value="{{$user['last_name']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$user['last_name']}}">
    </div>
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >رقم الهاتف</label>
        <input type="phone" name="phone" class="form-control"  value="{{$user['phone']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$user['phone']}}">
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" value="{{$user['email']}}" class="form-control" id="exampleInputPassword1" placeholder="{{$user['email']}}">
    </div>
    <!-- <div class="form-group" >
         <label for="exampleInputPassword1">supplier_id</label>
         <input  name="supplier_id" class="form-control" id="exampleInputPassword1" placeholder="Password">
     </div>-->
    <div class="form-group">

    </div>
    <button type="submit" class="btn btn-primary">تحديث</button>
    @include('admin.scripts')
</form>
