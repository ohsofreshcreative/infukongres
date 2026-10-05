<!--- banner preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Banner</div>
			<span class="acf-preview__slug">acf/banner</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_banner['banner']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_banner['banner']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
		@endif
		@if (!empty($g_banner['link']))
		<p>{{ wp_strip_all_tags($g_banner['link']) }}</p>
		@endif
	</div>
</div>
