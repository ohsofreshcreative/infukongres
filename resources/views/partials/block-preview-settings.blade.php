@php
$backgroundLabels = [
	'section-white' => 'Białe',
	'section-light' => 'Jasne',
	'section-gray' => 'Szare',
	'section-brand' => 'Marki',
	'section-gradient' => 'Gradient',
	'section-dark' => 'Ciemne',
];

$backgroundLabel = $backgroundLabels[$background ?? ''] ?? null;

foreach (['lightbg' => 'Jasne', 'graybg' => 'Szare', 'greybg' => 'Szare', 'whitebg' => 'Białe', 'brandbg' => 'Marki'] as $flag => $label) {
	if (!$backgroundLabel && !empty($$flag)) {
		$backgroundLabel = $label;
	}
}
@endphp

<div class="acf-preview__settings">
	@if ($backgroundLabel)
	<span class="acf-preview__setting acf-preview__setting--background">Tło: {{ $backgroundLabel }}</span>
	@endif
	@if (!empty($flip))
	<span class="acf-preview__setting">Odwrócony</span>
	@endif
	@if (!empty($wide))
	<span class="acf-preview__setting">Szeroki</span>
	@endif
	@if (!empty($gap))
	<span class="acf-preview__setting">Większy odstęp</span>
	@endif
	@if (!empty($nomt))
	<span class="acf-preview__setting acf-preview__setting--nomt">Bez marginesu górnego</span>
	@endif
</div>
