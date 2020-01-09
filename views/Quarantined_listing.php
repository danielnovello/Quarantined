<?php 

$this->view('listings/default',
[
	"i18n_title" => 'Quarantined.listing.title',
	"table" => [
		[
			"column" => "machine.computer_name",
			"i18n_header" => "listing.computername",
			"formatter" => "clientDetail",
			"tab_link" => "Quarantined-tab",
		],
		[
			"column" => "reportdata.serial_number",
			"i18n_header" => "serial",
		],
		[
			"column" => "Quarantined.item1",
			"i18n_header" => "Quarantined.listing.item1",
		],
		[
			"column" => "Quarantined.item2",
			"i18n_header" => "Quarantined.listing.item2",
		],
	]
]);
