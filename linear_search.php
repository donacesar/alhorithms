<?php 
// Алгоритм линейного (последовательного поиска)
// Ассимптотическая(вычислетельная) сложность алогоритма O(n), n - здесь кол-во элементов массива

$arr = range(1, 100);

function linearSearch($arr, $item) {
	foreach ($arr as $key => $value) {
		if ($arr[$key] === $item) {
			return $arr[$key];
		}
	}
	return false;
}

echo linearSearch($arr, 27);
 ?>
