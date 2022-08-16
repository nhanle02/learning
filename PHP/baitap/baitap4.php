
<style>
    ul {
        list-style: none;
        color: #afafaf;
    }

    li {
        margin-bottom: 20px;
    }
</style>

<?php

$authors = ['key1' => [
                'name' => 'nguyen van cuong', 
                'address' => 'da nang', 
                'blog' => 'google.com'
            ],

            'key2' => [
                'name' => 'le dinh nhan',
                'address'=> 'quang nam',
                'blog' => 'facebook.com'
            ],

            'key3' => [
                'name' => 'le nghia',
                'address' => 'quang tri',
                'blog' => 'youtube.com'
            ],
];
    echo '<ul>';
    foreach($authors as $key => $authors) {
        echo '<li>';
        echo 'name: ' . $authors['name'] . '<br>';
        echo 'address: ' . $authors['address'] . '<br>';
        echo 'blog: ' . $authors['blog'] . '<br>'; 
        echo '</li>';
    }
    echo '</ul>';

?>