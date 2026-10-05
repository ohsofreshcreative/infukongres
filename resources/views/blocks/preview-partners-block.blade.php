<!--- partners-block preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Partnerzy</div>
			<span class="acf-preview__slug">acf/partners-block</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@php($partnersPreview = get_field('r_partners', 'option'))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) ($partnersPreview ?? []), 0, 3) as $group)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($group['header']))
				<p class="text-h6">{{ $group['header'] }}</p>
				@endif
				<div class="acf-preview__logo-list flex flex-wrap">
					@foreach (array_slice((array) ($group['logos'] ?? []), 0, 4) as $logo)
					@if (!empty($logo['img']['ID']))
					{!! wp_get_attachment_image($logo['img']['ID'], 'thumbnail', false, ['class' => 'h-10 w-16 object-contain']) !!}
					@endif
					@endforeach
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
