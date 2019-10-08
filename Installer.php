<?php 

/**
 * Recursively retrieves nested files with .php extension from given directory.
 */
function getAllPhpFiles($dir, &$results = array())
{
    $files = scandir($dir);

    foreach ($files as $key => $value)
    {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path))
        {
            $fileInfo = pathinfo($path);
            if ($fileInfo['extension'] == 'php')
            {
                $results[] = $path;
            }
        }
        elseif ($value != "." && $value != "..")
        {
            getAllPhpFiles($path, $results);
        }
    }

    return $results;
}


/**
 * Counts how many actual lines of code there are in the specified file.
 */
function countFileLines($file)
{
    $fileAPI = new \SplFileObject($file, 'r');
    $fileAPI->seek(PHP_INT_MAX);
    return $fileAPI->key() + 1; 
}
?>