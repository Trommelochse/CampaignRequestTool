<div style="margin-top: 100px;"></div>
<hr>
  <p class="text-center">2017 - All rights reserved - @if(Auth::check())
  logged in as: {{ Auth::user()->name }}
  @else Please Log in
  @endif</p>