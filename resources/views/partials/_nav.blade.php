<div class="top-bar header-color">
	<div class="expanded row">
		<div class="small-10 columns"><h4>NordicBet Campaign Request Tool</h4></div>
		@if(Auth::guest())
			<div class="small-2 columns"><a href="{{route('register')}}" class="button float-right m-l-10 m-b-0">Register</a><a href="{{route('login')}}" class="button float-right m-b-0">Login</a></div>
		@else
		<div class="small-2 columns">
		<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button alert float-right m-l-10 m-b-0">Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
        </form>	
			<a href="{{route('index')}}" class="button float-right m-b-0">All Requests</a>				
		</div>	 
		@endif   	  
	</div> 
</div>