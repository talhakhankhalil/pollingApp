@extends('layout.newsfeedMaster')


@section('contentnewsfeed')


<div class="row">
    <div class="col-sm-12">
        <div style="padding:20px 0px"></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Priority</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                  
                
                   
                   @foreach($news_feeds as $news_feed)
                    <tr>
                        <td>{{$news_feed->title}}</td>
                        <td>{{$news_feed->priority}}</td>
                        <td><a href="{{route('newsfeed.edit',$news_feed->id)}}" type="button" class="btn btn-info"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</a></td> 
                        <td><button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                        <td><a href="{{route('newsfeed.show',$news_feed->id)}}"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Modal -->

<!--
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Poll</h4>
            </div>
            <div class="modal-body">
               <form method="POST" action="{{url('/newsfeed',$news_feed->id)}}">
                               
                              {!! csrf_field() !!}
                               <label>Title</label>
                               <input name="title" type="text" class="form-control" value="{{$news_feed->title}}" />
                               <br>
                               <label>Priority</label>
                               <input name="priority" type="text" class="form-control"  value="{{$news_feed->priority}}"/>
                               <br>
                               <label>Date</label>
                               <input name="date_of_newsfeed" type="date" class="form-control"  value="{{$news_feed->date_of_newsfeed}}" />
                               <br>
                               <label>Content</label>
                               <textarea name="content" class="form-control" >{{$news_feed->content}}</textarea>
                               <button type="submit" class="btn btn-success">Update News Feed</button>
                   </form>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>   
            </div>
        </div>
    </div>
</div>
-->

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
                
         <form method="POST" action="{{ url('newsfeed',$news_feed->id) }}">
        
               {{ csrf_field() }}

               <input type="hidden" name="_method" value="DELETE">
<!--<input type="submit" class="btn btn-small btn-primary" value="Delete">-->
         <button type="submit" class="btn btn-danger">Delete</button>
               
                 </form>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




@endsection