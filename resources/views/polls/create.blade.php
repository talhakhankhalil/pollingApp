@extends('layout.pollingadmin')




@section('content')

  <div class="container-fluid">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-12">
                               <h2 class="page-header">Create Poll</h2>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-4"></div>
                           <div class="col-sm-4">
                               <label>Question</label>
                               <input type="text" class="form-control" />
                               <br>
                               <label>Answer 1</label>
                               <input type="text" class="form-control" />
                               <br>
                               <label>Answer 2</label>
                               <input type="text" class="form-control" />
                               <br>
                               <label>Answer 3</label>
                               <input type="text" class="form-control" />
                               <br>
                               <label>Answer 4</label>
                               <input type="text" class="form-control" />
                           </div>
                           <div class="col-sm-4"></div>
                       </div>
                       <div style="padding:20px 0px"></div>
                       <div class="row">
                           <div class="col-sm-12 text-center">
                               <button type="submit" class="btn btn-success">Create Poll</button>
                           </div>
                       </div>
                   </div>
                    <div style="padding:60px 0px"></div>

                </div>



@endsection


