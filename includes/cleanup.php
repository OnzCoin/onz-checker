<?php
    /**
   * @author Mars
   * @link https://github.com/OnzCoin/onz-checker
   * @license https://github.com/OnzCoin/onz-checker/blob/master/LICENSE
   * 
   * @author Jan
   * @link https://github.com/Oxycoin/oxycoin-checker
   * @license https://github.com/Oxycoin/oxycoin-checker/blob/master/LICENSE
   */
	 
echo "[ LOGFILES ] \n";
echo "\t\t\tPerforming log rotation and cleanup...\n";
rotateLog($logfile, $max_logfiles, $logsize);

// Remove lock file
if(!unlink($lockfile)){
echo "[ LOCKFILE ] Unable to remove lock file!\n";
}