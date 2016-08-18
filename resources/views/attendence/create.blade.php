@extends('layout.newsfeedMaster')




@section('contentnewsfeed')


   <div class="container-fluid">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-12">
                               <h2 class="page-header">Create Attendence</h2>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-8"></div>
                           <div class="col-sm-8">
             <form method="POST" action="{{url('/attendence')}}">
                               
                              {!! csrf_field() !!}
                               <label>S.NO</label>
                               <input name="sno" type="text" class="form-control" />
                               <br>
                               <label>Session</label>
                               <input name="session" type="text" class="form-control" />
                               <br>
                               <label>Date</label>
                               <input name="date_of_attendence" type="date" class="form-control" />
                               <br>
                               <label>Attendence</label>
                               <input name="attendence" type="text" class="form-control" />
                               <button  style="margin-top:20px;" type="submit" class="btn btn-success">Submit</button>
                               </form>
                               <br>
                           </div>
                           <div class="col-sm-4">
                               
                              

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