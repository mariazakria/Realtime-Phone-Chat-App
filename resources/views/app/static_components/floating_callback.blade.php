<div id="cll" class="callback-desktop-only rounded-2" style="position: fixed;" {{isset($exception) ? 'hidden' : ''}}>
	<div class="request-form-header rounded-2 d-flex align-items-center justify-content-between" style="background-color:#ff6920 !important;">
		Callback Request
		<id class="up-ar down position-relative d-flex justify-content-center align-items-center me-1" style="cursor:pointer;display: inline-block;height:15px;width:15px;" ></id>
	</div>

	<div id="call_body" class="request-form-holder" style="padding: 10px;">
		<form method="post" action="{{route('callback_item')}}">
			@csrf
			<div style="display: none;"><input type="hidden" name="request-callback" value=""></div>
			<div class="mb-2">
				<label for="fyourname">Your phone number:</label>
				<input id="fyourname" class="rounded-2 py-1" type="text" name="phone"  required="" style="padding-left:10px; border-color: #ff6920 !important; border: groove;">
			</div>
			<div class="mb-2">
				<label for="fneedservice">What do you need detailed?</label>
				<input id="fneedservice" class="rounded-2 py-1" type="text" name="item"  required="" style="padding-left:10px;border-color: #ff6920 !important; border: groove;">
			</div>
			<div>
				<button class="btn" type="submit" aria-label="Request callback" style="background-color: #ff6920 !important; color: white;">Request Callback</button>
			</div>
		</form>
	</div>
</div>

<a class="myphone-mobile-only lol" href="tel:212-951-0798" {{isset($exception) ? 'hidden' : ''}}>
	<img rel="canonical" class="lazy" alt="call" src="{{asset('assets/images/call-icon3.webp')}}" style="" width="64" height="64">
</a>