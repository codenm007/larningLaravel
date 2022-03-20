@extends('layouts.app')

@section('content')
        <div class="container ">
            <h1>Calculate Student Marks </h1>
            <form  method="POST"  action="/calculate">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sub 1 marks</label>
                    <input type="text" class="form-control" id="sub1" name="sub1" placeholder="Enter subject 1 marks" aria-describedby="emailHelp">
                  
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sub 2 marks</label>
                    <input type="text" class="form-control" id="sub2" name="sub2" placeholder="Enter subject 2 marks" aria-describedby="emailHelp">
                  
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sub 3 marks</label>
                    <input type="text" class="form-control" id="sub3" name="sub3" placeholder="Enter subject 3 marks" aria-describedby="emailHelp">
                  
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sub 4 marks</label>
                    <input type="text" class="form-control" id="sub4" name="sub4" placeholder="Enter subject 4 marks" aria-describedby="emailHelp">
                  
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sub 5 marks</label>
                    <input type="text" class="form-control" id="sub5" name="sub5" placeholder="Enter subject 5 marks" aria-describedby="emailHelp">
                  
                  </div>
                  
                   @if(sizeof($errors) != 0)
                    <div class="alert alert-danger">Please enter marks for all courses</div>
                   @endif
                <button type="submit" class="btn btn-primary my-4" >Calculate Marks</button>
              </form>
              @if(isset($percentage))
              <div class="alert alert-success">
                 <h5> Percentage scored : {{$percentage}}</h5>
                 <h5> Grade : {{$grades}}</h5>
              </div>
              @endif
        </div>
@endsection
