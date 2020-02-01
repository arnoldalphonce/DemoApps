@extends('layouts.app')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-9">
                <h3> 
                    <span class="badge badge-info font-weight-light text-white">Available Quizzes</span>
                </h3>
                <p class="text-muted" id="info">Below are the List of Posted Quizzes available to take on. Choose any Quiz you want regarding your Subject code or Interest. You can sort out or search for respective subject  / course using the search filter on the right side (Sidebar). Remember you can take more than one Quiz for different subject / course. Good Luck 💪💪</p>

                <!-- Subject courses table-->
                <!-- check if there are available quizzes -->
                @if(count($quizzes) > 0)
                    <table class="table table-bordered">
                        <thead>
                            <th scope="col">Subject Code</th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Subject Tutor</th>
                            <th scope="col">No of Questions</th>
                            <th scope="col">On your Mark</th>
                        </thead>
                       
                        <tbody>
                            <!-- loop through quizzes -->
                            @foreach($quizzes as $quiz)
                                <tr>
                                    <th>{{$quiz->subject_code}}</th>
                                    <td class="text-capitalize">{{$quiz->subject_name}}</td>
                                    <td>{{$quiz->subject_tutor}}</td>
                                    <td>{{$quiz->no_questions}}</td>
                                    <td class="text-center"><a href="questions/{{$quiz->id}}" class="btn btn-info btn-sm text-white">Begin</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <!-- Go back button -->
                <a href="/dashboard" class="btn btn-outline-dark btn-sm">Go Back</a>
            </div>
             <!-- include side bar -->
          @include('inc.sidebar')
            
        </div>
        
     </div>

     <!-- include footer -->
     @include('inc.footer')
@endsection
