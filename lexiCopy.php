<?php
function solution($S, $K) {
        $stringPointer = 0;
        for($i = 0 ;$i < $K; $i++) {
                if(!($stringPointer < (strlen($S) - 1))) {
                        $stringPointer = 0;
                }
                if(ord($S[$stringPointer]) > ord($S[$stringPointer + 1])) {
                        $temp = $S[$stringPointer];
                        $S[$stringPointer] = $S[$stringPointer+1];
                        $S[$stringPointer+1] = $temp;
                        $stringPointer = 0;
                } else {
                        $i--;
                        $stringPointer++;
                }
        }
        return $S;
}

echo solution("abracadabra", 15);
