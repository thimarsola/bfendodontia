<?php


/**
 * @param string $file
 * @return string
 */
function assets(string $file): string
{
    return get_template_directory_uri() . '/assets/' . $file;
}

/**
 * @param string $file
 * @return string
 */
function image(string $file, string $path = 'images'): string
{
    return get_template_directory_uri() . '/assets/' . $path . '/' . $file;
}

/**
 * Function for create a picture tag for images
 * @param string $name
 * @param string $alt
 * @param string $extension
 * @return string
 */
function picture(string $name, string $alt, string $class = null, string $extension = 'jpg'): string
{
    return '
        <picture>
            <source srcset="'. image($name) . '.webp" type="image/webp">
            <img class="' . $class . '" src="'. image($name) . '.' . $extension . '" alt="' . $alt .'" title="' . $alt
        .'" loading="lazy">
        </picture>
        ';
}