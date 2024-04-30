@extends('layouts.layout')

@section('content')
<div class="
mt-0
md:mt-16
grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 bg-white dark:bg-gray-100 text-black dark:text-gray-800">
	<div class="flex flex-col justify-between">
		<div class="space-y-2">
			<h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
			<div class="text-gray-400 dark:text-gray-600">If any Query Contact with us </div>
		</div>
		<img src="assets/svg/doodle.svg" alt="" class="p-6 h-52 md:h-64">
	</div>
	<form novalidate="" class="space-y-6">
		<div>
			<label for="name" class="text-sm">Full name</label>
			<input id="name" type="text" placeholder="" class="w-full p-3 rounded border-2 rounded-lg dark:bg-gray-100">
		</div>
		<div>
			<label for="email" class="text-sm">Email</label>
			<input id="email" type="email" class="w-full p-3 rounded border-2 rounded-lg  dark:bg-gray-100">
		</div>
		<div>
			<label for="message" class="text-sm">Message</label>
			<textarea id="message" rows="3" class="w-full p-3 rounded border-2 rounded-lg dark:bg-gray-100"></textarea>
		</div>
		<button type="submit" class="w-full p-3 text-sm font-bold tracking-wide uppercase rounded bg-blue-400 dark:bg-blue-600 text-gray-900 dark:text-gray-50">Send Message</button>
	</form>
</div>
@endsection