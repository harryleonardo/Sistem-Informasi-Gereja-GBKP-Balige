<?php

use yii\bootstrap\Nav;

?>

<?= Nav::widget([
	'options' => [
		'class' => 'nav-tabs',
		'style' => 'margin-bottom: 30px',
	],
	'items' => [
		[
			'label' => 'Data Diri',
			'url' => ['/datadiri/view'],
		],
		[
			'label' => 'Data Gereja',
			'url' => ['/datagereja/view'],
		],
		[
			'label' => 'Data Baptis',
			'url' => ['/datagereja/view'],
		],
		[
			'label' => 'Data Sidi',
			'url' => ['/datagereja/view'],
		],
		[
			'label' => 'Data Keluarga',
			'url' => ['/datagereja/view'],
		],
		[
			'label' => 'Data Istri',
			'url' => ['/datagereja/view'],
		],
		[
			'label' => 'Data Anak',
			'url' => ['/datagereja/view'],
		],
	],
	])
?>