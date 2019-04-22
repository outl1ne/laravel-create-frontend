<?php

if (! function_exists('frontend')) {
    /**
     * Get the path to a Create Frontend manifest file.
     *
     * @param  string  $path
     * @param  string  $manifestPath
     * @return string
     *
     * @throws \Exception
     */
    function frontend($path, $manifestPath = 'public/build/asset-manifest.json')
    {
        static $manifests = [];

        $manifestPath = base_path($manifestPath);

        if (! isset($manifests[$manifestPath])) {
            if (! file_exists($manifestPath)) {
                throw new Exception('The Create Frontend manifest does not exist.');
            }

            $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
        }

        $manifest = $manifests[$manifestPath];

        return $manifest[$path] ?? false;
    }
}
