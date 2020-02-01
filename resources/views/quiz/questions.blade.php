<!-- Jquery for popover -->
			        	<script>
			        		$(document).ready(function(){
			        			$('[data-toggle="popover"]').popover({
			        				html: true,
			        				placement: 'auto left'
			        			});
			        		});
			        	</script>
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-9">
	        	
				<h3 id="quiz-badge"> 
		           Subject Name: <span class="badge badge-info text-capitalize text-white">{{$quizzes->subject_name}}</span>
		        </h3>
		        <h3 id="quiz-badge"> 
		           Subject Code: <span class="badge badge-info  text-white">{{$quizzes->subject_code}}</span>
		        </h3>
		        <h3 id="quiz-badge"> 
		           Level: <span class="badge badge-info text-white">{{$quizzes->subject_level}}</span>
		        </h3>
		        <span class="text-muted">By {{$quizzes->subject_tutor}}</span>
		        

		        <!-- Questions display -->
		        <div class="m-3">
			        @foreach($questions as $question)
			        <p class="mt-2 font-weight-bold">Question: {{$question->question_number}}</p>
			        	<blockquote class="ml-5">{{$question->full_question}}</blockquote>
			        
			        	<div class="form-check ml-5">
			        		<label class="form-check-label">
			        			<input type="radio" name="answer" class="form-check-input">{{$question->choice_one}}
			        		</label>
			        	</div>
			        	<div class="form-check ml-5">
			        		<label class="form-check-label">
			        			<input type="radio" name="answer" class="form-check-input">{{$question->choice_two}}
			        		</label>
			        	</div>
			        	<div class="form-check ml-5">
			        		<label class="form-check-label">
			        			<input type="radio" name="answer" class="form-check-input">{{$question->choice_three}}
			        		</label>
			        	</div>
			        	<div class="form-check ml-5">
			        		<label class="form-check-label">
			        			<input type="radio" name="answer" class="form-check-input">{{$question->choice_four}}
			        		</label>
			        	</div>
			        	
			        	<!-- Popover correct choice -->
			        	<a tabindex="0" class="btn btn-info btn-sm text-white ml-5" role="button" data-toggle="popover" data-trigger="hover" title="Dismissible popover" data-content="The Correct Answer is: ">Correct Answer</a>
			        @endforeach
		    	</div>
   	
    		</div> 
    		<!-- end col -->
     <!-- include side bar -->
          @include('inc.sidebar')
            
        </div>
        <!-- end row -->
        
     </div>
     <!-- end container -->

     <!-- include footer -->
     @include('inc.footer')
@endsection