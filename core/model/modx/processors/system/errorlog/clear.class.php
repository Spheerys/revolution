<?php
/**
 * Clear the error log
 *
 * @package modx
 * @subpackage processors.system.errorlog
 */
class modSystemErrorLogClearProcessor extends modProcessor {
    public function checkPermissions() {
        return $this->modx->hasPermission('error_log_erase');
    }
    public function process() {
        $filename = !empty($this->modx->getOption('error_log_filename')) ? $this->modx->getOption('error_log_filename') : 'error.log';
        $filepath = !empty($this->modx->getOption('error_log_path')) ? $this->modx->getOption('error_log_path') : $this->modx->getCachePath() . xPDOCacheManager::LOG_DIR;
        $file = $filepath.$filename;
        $content = '';
        $tooLarge = false;
        if (file_exists($file)) {
            /* @var modCacheManager $cacheManager */
            $cacheManager= $this->modx->getCacheManager();
            $cacheManager->writeFile($file,'');

            $size = round(@filesize($file) / 1000 / 1000,2);
            if ($size > 1) {
                $tooLarge = true;
            } else {
                $content = @file_get_contents($file);
            }
        }

        $la = array(
            'name' => $file,
            'log' => $content,
            'tooLarge' => $tooLarge,
        );
        return $this->success('',$la);
    }
}
return 'modSystemErrorLogClearProcessor';
