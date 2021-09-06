<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */
require __DIR__.'/vendor/autoload.php';


$inputText = new \App\InputText();
$snapshotHolder = new \App\SnapshotHolder();

echo ">";
while(fscanf(STDIN, "%s", $input) == 1)
{
	if($input == ":list"){
		echo $inputText->getText() . PHP_EOL;

	} else if($input == ":undo"){
		$snapshot = $snapshotHolder->popSnapshot();
		$inputText->restoreSnapshot($snapshot);
	} else {
		$snapshotHolder->pushSnapshot($inputText->createSnapshot());
		$inputText->append($input);
	}
	echo ">";
}
