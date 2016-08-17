@extends('layout.pollingadmin')


@section('content')

<div class="row">
    <div class="col-sm-12 text-center">
        <form class="navbar-form" role="search">
            <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit" style="padding-bottom:7px"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>

    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div style="padding:20px 0px"></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>First</th>
                        <th>Second</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>/index.html</td>
                        <td>1265</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                    <tr>
                        <td>/about.html</td>
                        <td>261</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                    <tr>
                        <td>/sales.html</td>
                        <td>665</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                    <tr>
                        <td>/blog.html</td>
                        <td>9516</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                    <tr>
                        <td>/404.html</td>
                        <td>23</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                    <tr>
                        <td>/services.html</td>
                        <td>421</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                    <tr>
                        <td>/blog/post.html</td>
                        <td>1233</td>
                        <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="chart.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!--        Modal Edit-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Poll</h4>
            </div>
            <div class="modal-body">
                <label>Question</label>
                <input type="text" class="form-control"/>
                <br>
                <label>Answer1</label>
                <input type="text" class="form-control"/>
                <br>
                <label>Answer2</label>
                <input type="text" class="form-control"/>
                <br>
                <label>Answer3</label>
                <input type="text" class="form-control"/>
                <br>
                <label>Answer4</label>
                <input type="text" class="form-control"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!--        Modal Delete-->

<div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Poll</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

@endsection