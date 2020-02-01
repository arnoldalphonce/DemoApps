@extends('layouts.app')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-9">
                <p class="text-muted" id="info">This is to Inform you that, this quiz will only take 15 Minutes top. Please be precise to answer represented questions. Remember as the Countdown stop the Quiz will automatically be submitted.</p>
                <a href="/explorer" class="btn btn-outline-dark btn-xs">Explore Quizzes ✅</a>

                <h6 class="border rounded text-center text-capitalize p-2 bg-info text-white mt-4">Grading System for ICT Test VIA Bear Quizzer</h6>
                <p class="text-justify p-2" id="info">All of the questions carry equal marks i.e <b>2 marks each</b>. There are 10 Questions in total hence this Test carries a <b>Total of 20 Marks</b>. In order to pass a Student will have to Score half of the marks above means that, a Student needs to answer correctly <b>5 Questions</b> which will make a <b>Total of 10 Marks.</b></p>

                <h6 class="border rounded text-center text-capitalize p-2 bg-info text-white">How to Attach Drawings File</h6>
                <p class="text-justify p-2" id="info">If the attempted question wants a drawing reference you can Screen shot pointing out the asked Area. You can attach your screenshot file by clicking File / Choose file icon. <strong>NB: Rename your file accordingly.</strong></p>
            </div>
          <!-- include side bar -->
          @include('inc.sidebar')
            
        </div>
        
     </div>

     <!-- include footer -->
     @include('inc.footer')
@endsection
