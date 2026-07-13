@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';

$sectionId = $block->data['id'] ?? null;
$customClass = $block->data['className'] ?? '';

@endphp

<section data-gsap-anim="section" @if($sectionId) id="{{ $sectionId }}" @endif class="b-banner -smt {{ $block->classes }} {{ $customClass }} {{ $sectionClass }}">

	<div class="__wrapper c-main">

		@if (!empty($g_banner['banner']))
		@if (!empty($g_banner['link']))
		<a target="_blank" rel="noopener noreferrer" href="{{ $g_banner['link'] }}" class="block w-full">
			<img class="w-full __img order1" src="{{ $g_banner['banner']['url'] }}" alt="{{ $g_banner['banner']['alt'] ?? '' }}">
		</a>
		@else
		<img class="w-full __img order1" src="{{ $g_banner['banner']['url'] }}" alt="{{ $g_banner['banner']['alt'] ?? '' }}">
		@endif
		@endif

	</div>

</section>