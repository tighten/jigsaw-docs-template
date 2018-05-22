<?php

return [
    'Installation' => [
        'root' => 'installation', // The file slug of the root; delete this if "root" is just a grouping, but there's no actual page there

        'children' => [ // Put all of the child nodes of "Installation" here
            'Upgrading' => 'upgrading',
            'Something else with children' => [ // You can nest infinitely, as long as your template handles it
                'root' => 'something-else-with-children',
                'children' => [
                    'Grandchild node' => 'grandchild-node',
                ]
            ]
        ]
    ],
    // Example of a subsection without a root node; e.g. a grouping
    'Supported File Types' => [
        'children' => [
            'Blade' => 'blade-file-type',
            'RSS' => 'rss-file-type',
        ]
    ],
    'Pretty URLs' => 'pretty-urls',
    'Custom 404 Page that is also something with a really long title just to see what happens in that context!' => 'custom-404-page',
];



