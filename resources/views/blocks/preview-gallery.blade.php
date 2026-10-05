<!--- gallery preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Galeria</div>
			<span class="acf-preview__slug">acf/gallery</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_gallery['title']))
		<p class="text-h5">{{ $g_gallery['title'] }}</p>
		@endif
		<div class="acf-preview__grid grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6">
			@foreach (array_slice((array) ($g_gallery['gallery'] ?? []), 0, 6) as $image)
			@if (!empty($image['ID']))
			<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($image['ID'], 'thumbnail', false, ['class' => 'h-16 w-full object-cover']) !!}</figure>
			@endif
			@endforeach
		</div>
	</div>
</div>
