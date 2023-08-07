<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/git/grav-admin/user/pages/02.blog/daring-fireball-link/item.md',
    'modified' => 1649236780,
    'data' => [
        'header' => [
            'title' => 'Just Some Text Today',
            'list_summary' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et',
            'date' => '13:34 07/10/2014',
            'continue_link' => true,
            'link' => 'http://daringfireball.net',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => 'journal',
                    1 => 'link'
                ]
            ]
        ],
        'frontmatter' => 'title: Just Some Text Today
list_summary: Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et
date: 13:34 07/10/2014
continue_link: true
link: http://daringfireball.net
taxonomy:
    category: blog
    tag: [journal, link]',
        'markdown' => 'The blog skeleton also supports **Daring Fireball** style link posts.  Simply add a link setting in your page header:

```
link: http://daringfireball.net
```

And your blog title becomes a link directly to that link you specified. Easy peasy!
'
    ]
];
