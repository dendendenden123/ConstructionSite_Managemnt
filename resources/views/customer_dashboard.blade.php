
<x-layout>
@php
	$colorArray = ['#e74c3c', '#2ecc71', '#e67e22', '#1abc9c', '#9b59b6'];
@endphp



<link rel="stylesheet" type="text/css" href="{{ asset('css/customer_dashboard.css') }}">





<style>
		
	/* section#timeline article:nth-child(2) div.inner h2 {
	background: #2ecc71;
	}
	section#timeline article:nth-child(2) div.inner h2:after {
	background: #2ecc71;
	}
	section#timeline article:nth-child(3) div.inner h2 {
	background: #e67e22;
	}
	section#timeline article:nth-child(3) div.inner h2:after {
	background: #e67e22;
	}
	section#timeline article:nth-child(4) div.inner h2 {
	background: #1abc9c;
	}
	section#timeline article:nth-child(4) div.inner h2:after {
	background: #1abc9c;
	}
	section#timeline article:nth-child(5) div.inner h2 {
	background: #9b59b6;
	}  */
</style>

<section id="timeline">

	@foreach ($ProjectInfo as $info)
	@php
		$color = $colorArray[rand(0, 4)];
	@endphp

	<article>
		<div class="inner">
		<span class="date">
			<span class="day">30<sup>th</sup></span>
			<span class="month">Jan</span>
			<span class="year">2014</span>
		</span>
		<a href="customer/{{$info->id}}"> <h2 style="background: {{$color}}">{{$info->update_title}} </h2></a>
		<p>{{$info->update_description}}</p>
		</div>
	</article>
		
	@endforeach

	
	
  </section>
</x-layout>