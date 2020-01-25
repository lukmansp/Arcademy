<?php
function biodata(){
$string="lukman sefriyanto";
$angka="21";
$biodata = [

		"name"		=> $string,
		"age"		=>$angka,
		"address"	=>"Jatinegara -  Tegal",
		"hobbies"	=>["Gaming ", "coding", "sport"],
		"is_married"=>false,
		"list_school"	=>[
			[
				"highschool" =>"SMA MAARIF NU JATINEGARA",
				"year_in"	 =>2012,
				"year_out"	 =>2016
			],[
				"University" =>"Politeknik harapan bersama Tegal",
				"year_in"	 =>2016,
				"year_out"	 =>2019,
				"Major" =>"D3 Ilmu Komputer"
			]
		],
		"skils"=>[
			[
				"skill_name"	=>"php",
				"level"			=>"advance"
			],
			[
				"skill_name"	=>"CSS",
				"level"			=>"advance"
			],
			[
				"skill_name"	=>"javascript",
				"level"			=>"beginner"
			],
			[
				"skill_name"	=>"jquery",
				"level"			=>"beginner"
			],
			[
				"skill_name"	=>"json",
				"level"			=>"beginner"
			],
			[
				"skill_name"	=>"C#",
				"level"			=>"advance"
			],
			[
				"skill_name"	=>"c++",
				"level"			=>"beginner"
			],
			[
				"skill_name"	=>"bootstrap",
				"level"			=>"advance"
			],
			[
				"skill_name"	=>"node js",
				"level"			=>"beginner"
			],
			[
				"skill_name"	=>"codeigniter",
				"level"			=>"advance"
			],
			[
				"skill_name"	=>"laravel",
				"level"			=>"advance"
			],
		],
		"interest_in_coding" =>true
	];

		$encode = json_encode($biodata, true);
		echo $encode;
}
		return biodata();

?>