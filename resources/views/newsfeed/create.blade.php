@extends('layout.newsfeedMaster')




@section('contentnewsfeed')


   <div class="container-fluid">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-12">
                               <h2 class="page-header">Create News feed</h2>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-8"></div>
                           <div class="col-sm-8">
             <form method="POST" action="{{url('/newsfeed')}}">
                               
                              {!! csrf_field() !!}
                               <label>Title</label>
                               <input name="title" type="text" class="form-control" />
                               <br>
                               <label>Priority</label>
                               <input name="priority" type="text" class="form-control" />
                               <br>
                               <label>Date</label>
                               <input name="date_of_newsfeed" type="date" class="form-control" />
                               <br>
                               <label>Content</label>
                               <textarea name="content" class="form-control" ></textarea>
                               <button style="margin-top:20px;" type="submit" class="btn btn-success">Create News Feed</button>
                               </form>
                               <br>
                           </div>
                               <div class="col-sm-3">
                               
                              

 @if(count($errors) > 0)

    <div class="alert alert-danger">
 
        <ul>
        @foreach($errors->all() as $error)
        
                <li>{{$error}}</li>

        @endforeach
            </ul>
    </div>



@endif
    
                               
                               
                           </div>
                           <div class="col-sm-4"></div>
                       </div>
                       <div style="padding:20px 0px"></div>
                       <div class="row">
                           <div class="col-sm-12 text-center">
                               
                           </div>
                       </div>
                   </div>
                    <div style="padding:60px 0px"></div>

                </div>






@endsection