<?php
$array = array(
	"data"=>array(
		array("city"=>"Jakarta",
			"cityid"=>"10",
			"commission"=>"0",
			"country"=>"Indonesia",
			"countryid"=>"6",
			"cuisine"=>"Indonesian",
			"description"=>"",
			"district"=>"Jakarta Barat"
			),
		array("city"=>"Jakarta",
			"cityid"=>"10",
			"commission"=>"0",
			"country"=>"Indonesia",
			"countryid"=>"6",
			"cuisine"=>"Indonesian",
			"description"=>"",
			"district"=>"Jakarta Barat"
			),
		array("city"=>"Jakarta",
			"cityid"=>"10",
			"commission"=>"0",
			"country"=>"Indonesia",
			"countryid"=>"6",
			"cuisine"=>"Indonesian",
			"description"=>"",
			"district"=>"Jakarta Barat"
			)
		)
);
echo "jsonpCallback(".json_encode($array).")";