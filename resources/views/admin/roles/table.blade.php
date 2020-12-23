<div class="section-body">
    <h2 class="section-title">Table</h2>

    <p class="section-lead">Example of some Bootstrap table components.</p>
    <a  href="{{url('/store/creat')}}"><button type="button" class="btn btn-success">view table</button>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Simple Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach($role as $key=> $sp1)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$sp1['role']}}</td>
                                        <td>  <a href="/update/store/{{$sp1['id']}}">
                                                <button type="button" class="btn btn-success">UPdate</button>
                                            </a> </td>
                                        <td><a href="/home/table/delete/{{$sp1['id']}}" class="btn btn-secondary">Delete</a></td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div></div></div>
