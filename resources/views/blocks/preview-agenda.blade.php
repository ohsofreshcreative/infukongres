<!--- agenda preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Agenda</div>
			<span class="acf-preview__slug">acf/agenda</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@php($agendaPreview = get_field('agenda', 'options'))
		@if (!empty($agendaPreview['header1']))
		<p class="text-h6">{{ wp_strip_all_tags($agendaPreview['header1']) }}</p>
		@endif
		@if (!empty($agendaPreview['header2']))
		<p class="text-h5">{{ $agendaPreview['header2'] }}</p>
		@endif
		@if (!empty($agendaPreview['tabs']))
		<p>{{ count($agendaPreview['tabs']) }} dni · dane z Ustawienia → Agenda</p>
		@endif
	</div>
</div>
