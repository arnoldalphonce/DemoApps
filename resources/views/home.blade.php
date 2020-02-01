@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="text-center">
			<p class="lead">
				Welcome to Bear <strong>Quizzer</strong>
				<br/>
				The Online Quizzer <strong class="text-success">Taker</strong> and <strong class="text-success">Builder</strong> Platform
				<br/>
				Get Started by reading our <strong>Codes</strong> of Conduct and <strong>Guidlines</strong>.
				<br/>
				<!-- download buttons -->
				<button class="btn btn-success mt-3">Code of Conduct ⬇️</button>
				<button class="btn btn-success mt-3 ml-3">BQ Guidelines ⬇️</button>
			</p>
    
   		</div>
   		<!-- Section -->
   		<div class="row">
   			<div class="col-4">
   				<h5 class="text-center text-capitalize">Create your quiz</h5>
   				<p class="lead" style="font-size: 14px;">Bear Quizzer let you create your own Quiz as long as your a teacher or recognized lecturer.
   					<ol class="list">
   						<li class="list-item">Create your Teacher / Lecturer Account for Free</li>
   						<li class="list-item">Read BQ Guidelines & By Law</li>
   						<li class="list-item">Done!! Start to make your Quiz</li>
   					</ol>
   				</p>
   			</div>
   			<div class="col-4">
   				<h5 class="text-center text-capitalize">Take quiz</h5>
   				<p class="lead" style="font-size: 14px;">Being a Student is Super 😉😉😉 Cool Now Bear Quizzer support you in every single way.
   					<ol class="list">
   						<li class="list-item">Create your Student Account for Free Now</li>
   						<li class="list-item">Check for Posted Quizzes</li>
   						<li class="list-item">Start Knowledging up your Brain Instantly</li>
   					</ol>
   				</p>
   			</div>
   			<div class="col-4">
   				<h5 class="text-center text-capitalize">Mark your quiz</h5>
   				<p class="lead" style="font-size: 14px;">An Easy ans Simple way to mark by Assigning correct choices for your Questions Right up!!
   					<ol class="list">
   						<li class="list-item">Sign In to your Account</li>
   						<li class="list-item">Hover over History</li>
   						<li class="list-item">Click you Quiz Using Generated Codes</li>
   						<li class="list-item">Assign Correct choices for each Question</li>
   						
   					</ol>
   				</p>
   			</div>
   			
   		</div>
    
    </div>
    <!-- include footer -->
     @include('inc.footer')
@endsection