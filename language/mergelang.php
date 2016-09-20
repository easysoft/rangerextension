#!/usr/bin/env php
<?php
/**
 * The script can merge zh-cn language files of ranzhi to one file.  
 */
if(empty($argv[1])) die("Must give a ranzhi root path.\n");

$ranzhiRoot = $argv[1];                        /* Root of ranzhi. */
$mergedPath = empty($argv[2]) ? '' : $argv[2]; /* The merged file will be write in this directory. */
$appRoot    = $ranzhiRoot . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR;
$handle     = opendir($appRoot);  
if($handle)  
{  
    $langFiles = array();
    while(($app = readdir($handle)) !== false)  
    {  
        $moduleRoot = $appRoot . $app . DIRECTORY_SEPARATOR;
        if(!is_dir($moduleRoot) or $app == '.' or $app == '..') continue;

        $moduleHandle = opendir($moduleRoot);
        if($moduleHandle)
        {
            while(($module = readdir($moduleHandle)) !== false)
            {
                if(!is_dir($moduleRoot . $module) or $module == '.' or $module == '..') continue;

                $filePath = $moduleRoot . $module . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . 'zh-cn.php';
                if(!file_exists($filePath)) continue;

                /* Remove the comments and start tag of php. */
                $langFiles[$app][$module] = preg_replace("/\/\*.*?\*\/\n/s", '', ltrim(file_get_contents($filePath), "<?php"));
            }
            closedir($moduleHandle);
        }
    }  
    closedir($handle);

    $mergedFile = 'zh-cn.php';
    if($mergedPath)
    {
        if(!file_exists($mergedPath)) @mkdir($mergedPath, 0777, true);
        $mergedFile = $mergedPath . DIRECTORY_SEPARATOR . $mergedFile;
    }
    file_put_contents($mergedFile, "<?php\n");
    $fh = @fopen($mergedFile, 'a');
    ksort($langFiles);

    if(isset($langFiles['sys']['common']))
    {
        fwrite($fh, "/* sys/common */");
        fwrite($fh, $langFiles['sys']['common']);
        unset($langFiles['sys']['common']);
    }

    foreach($langFiles as $app => $modules)
    {
        if(isset($modules['common']))
        {
            fwrite($fh, "/* {$app}/common */");
            fwrite($fh, $modules['common']);
            unset($langFiles[$app]['common']);
        }
    }

    foreach($langFiles as $app => $modules)
    {
        foreach($modules as $module => $content)
        {
            fwrite($fh, "/* {$app}/{$module} */");
            fwrite($fh, $content);
        }
    }
    fclose($fh);
}

echo "merge lang files down!\n";
