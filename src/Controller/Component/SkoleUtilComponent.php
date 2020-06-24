<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * SkoleUtil component
 * @author israel <jtad009@gmail.com>
 */
class SkoleUtilComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Force download of a file
     * @param string $filepath path to image
     * @return void
     */
    public function download($filepath)
    {
        if (file_exists($filepath)) :
            header("Content-Description: File Transfer");
            header('Cache-Control:must-revalidate, post-check=0,pre-check=0');
            header('Cache-Control:private', false);

            header('Content-Type: application/xlsx');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires:0');
            header('Content-Transfer-Encoding:binary');
            header('Pragma:public');
            header('Content-Length:' . filesize($filepath));
            flush();
            readfile($filepath);
            die();
        endif;
    }

    /**
     * Convert multi-dimensional array to one dimension
     * @param array $array the array to flatten
     * @return array
     */
    public function flatten(array $array)
    {
        $result = [];
        foreach ($array as $item) {
            if (is_null($item)) {
                continue;
            }
            $result = array_merge($result, is_array($item) ? $this->flatten($item) : [$item]);
        }

        return $result;
    }

    /**
     * GET A SINGLE PROPERTY FROM AN ARRAY with multiple properties
     * AND RETURN IT AS AN ARRAY
     * @param string $propName the name of property you want to extract
     * @param array $collection the multi-dim array
     * @return array
     */
    public function getSinglePropFromCollection($propName, $collection)
    {
        $collection = (empty($collection)) ? [] : array_map(function ($item) use ($propName) {
            return is_array($item)
                ? $item[$propName]
                : '0';
        }, $collection);

        return $collection;
    }
}
