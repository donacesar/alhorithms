<?php 
// Бинарный(двоичный) поиск. Работает только с отсортированным массивом. Вычислительная сложность O(log(n))
// Находим индекс массива со значением $item

$arr = range(1, 100);

/*  $start - первый индекс в массиве,
	$final - последний индекс в массиве
	$item - значение, которое нужно найти */
function binarySearch($arr, $item, $start = 0, $final = null) {
	
	if ($final === null) {
		$final = count($arr) - 1;
	}

	if ($start > $final) return false;

	$half = (int)(($final + $start) / 2);

	if($arr[$half] !== $item) {
		if ($arr[$half] < $item) {
			$start = $half + 1;
		} else {
			$final = $half - 1;
		}
		return binarySearch($arr, $item, $start, $final);
	}

	return $half . "=>" . $arr[$half];
}

echo binarySearch($arr, 27);

 ?>