<?php

namespace App\Http\Controllers;

use App\Composite\Directory;
use App\Composite\File;

class CompositeController extends Controller
{
    public function index()
    {
        $java_file_1 = new File('file_1.java', 'java_files');
        $java_file_2 = new File('file_2.java', 'java_files');
        $java_file_3 = new File('file_3.java', 'java_files');

        $php_file_1 = new File('file_1.php', 'php_files');
        $php_file_2 = new File('file_2.php', 'php_files');
        $php_file_3 = new File('file_3.php', 'php_files');

        $javascript_file_1 = new File('file_1.js', 'javascript_files');
        $javascript_file_2 = new File('file_2.js', 'javascript_files');
        $javascript_file_3 = new File('file_3.js', 'javascript_files');

        $java_directory = new Directory('java_files', [$java_file_1, $java_file_2, $java_file_3]);
        $php_directory = new Directory('php_files', [$php_file_1, $php_file_2, $php_file_3]);
        $javascript_directory = new Directory('javascript_files', [$javascript_file_1, $javascript_file_2, $javascript_file_3]);

        dump('--- when we close a directory, all his files will be closed ---');
        $java_directory->close();

        dump('--- when we open a file, its directory will be opened ---');
        $php_file_1->open();

        dump('--- adding and removing files ---');
        $javascript_file_4 = new File('file_4.js', 'javascript_files');
        $javascript_directory->addItem($javascript_file_4);
        $javascript_directory->getItems();
        echo "----------<br>";
        $javascript_directory->removeItem($javascript_file_2);
        $javascript_directory->getItems();

        dump('--- adding and removing directories ---');
        $php_subdirectory = new Directory('php_subfiles');
        $php_directory->addItem($php_subdirectory);
        $php_directory->getItems();
        echo "----------<br>";
        $php_directory->removeItem($php_subdirectory);
        $php_directory->getItems();
    }
}
