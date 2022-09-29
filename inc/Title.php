<?php

/**
 * Function for create a title
 * @param string $class
 * @param string $index
 * @param string $title
 * @param string $description
 * @return string
 */
function title(string $class, string $index, string $title, string $description):string
{
    return '        
        <header class="' . $class . ' title mb-6">
            <!-- index -->
            <div class="title__index">
                <span>' . $index . '</span>
            </div>
            <!-- end of index -->
            <h2>' . $title . '</h2>
            <p>' . $description . '</p>
        </header>';
}