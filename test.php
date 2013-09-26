<?php 
class Cmatch{
	private static $arrCacheProductLine;
	public static function getProductLineList() {
        if (true) {
            if (isset(self::$arrCacheProductLine)) {
                return self::$arrCacheProductLine;
            }
            return (isset(self::$arrCacheProductLine) ? self::$arrCacheProductLine : array());
        }
	}
	public static function vaa() {
		foreach (self::$arrCacheProductLine AS $c=>$arr) {
			echo 11112;
		}
        var_dump(self::$arrCacheProductLine);
	}
}

Cmatch::getProductLineList();
Cmatch::vaa();

	var_dump(1111);
?>
