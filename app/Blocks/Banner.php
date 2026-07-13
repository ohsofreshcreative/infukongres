<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Banner extends Block
{
	public $name = 'baner';
	public $description = 'banner';
	public $slug = 'banner';
	public $category = 'formatting';
	public $icon = 'format-banner';
	public $keywords = ['baner', 'zdjecie'];
	public $mode = 'edit';
	public $supports = [
		'align' => false,
		'mode' => false,
		'jsx' => true,
		'anchor' => true,
		'customClassName' => true,
	];

	public function fields()
	{
		$banner = new FieldsBuilder('banner');

		$banner
			->setLocation('block', '==', 'acf/banner') // ważne!
			->addText('block-title', [
				'label' => 'Tytuł',
				'required' => 0,
			])
			->addAccordion('accordion1', [
				'label' => 'Banner',
				'open' => false,
				'multi_expand' => true,
			])
			/*--- GROUP ---*/
			->addTab('Elementy', ['placement' => 'top'])
			->addGroup('g_banner', ['label' => ''])
			->addImage('banner', [
				'label' => 'Obraz',
				'return_format' => 'array', // lub 'url', lub 'id'
				'preview_size' => 'medium',
			])
			->addUrl('link', [
				'label' => 'Link',
			])
			->endGroup()

			/*--- USTAWIENIA BLOKU ---*/

			->addTab('Ustawienia bloku', ['placement' => 'top'])
			->addTrueFalse('flip', [
				'label' => 'Odwrotna kolejność',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			]);

		return $banner;
	}

	public function with()
	{
		return [
			'g_banner' => get_field('g_banner'),
			'flip' => get_field('flip'),
		];
	}
}
