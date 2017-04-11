<?php

return [
    'plugin' => [
        'name' => 'Courses',
        'description' => 'A courses plugin'
    ],
    'courses' => [
        'menu_label' => 'Courses',
        'new_course' => 'New Course',
        'courses' => 'Courses',
        'categories' => 'Categories',
        'tab' => 'Courses',

        'create_category' => 'Create category',
        'edit_category' => 'Edit category',
        'create_course' => 'Create course',
        'edit_course' => 'Edit course',
        'preview_category' => 'Preview category',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'published_at' => 'Published At',
        'published' => 'Published',
        'post_count' => 'course count',
        'filter_published' => 'Filter published courses',
        'filter_category' => 'Filter category',
        'tags' => 'Tags',
        'featured' => 'Featured',
    ],
    'course' => [
        'name' => 'Name',
        'name_placeholder' => 'New post name',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-post-slug',
        'return_to_posts' => 'Return to the news post list',
        'summary' => 'Summary',
        'content' => 'Content',
        'attachments' => 'Attachments',
        'new_image' => 'New image',
        'new_file' => 'New file',
        'image' => 'Image',
        'file' => 'File',
        'category' => 'Category',
        'feature_image' => 'Feature image',

        'published_validation' => 'Please specify the published date',
    ],
    'categories' => [
        'list_title' => 'Manage the news categories',
        'new_category' => 'New category',
        'uncategorized' => 'Uncategorized'
    ],
    'category' => [
        'name' => 'Name',
        'name_placeholder' => 'New category name',
        'description' => 'Description',
        'parent_id' => 'Parent Id',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Posts',
        'delete_confirm' => 'Delete this category?',
        'return_to_categories' => 'Return to the news category list',
    ],
    'tag' => [
        'name' => 'Name',
        'slug' => 'Slug',
        'description' => 'Description',
        'image' => 'Image',
    ],

    'permission' => [
        'access_courses' => 'Manage the courses',
        'access_categories' => 'Manage the courses categories',
        'access_other_courses' => 'Manage other users courses',
        'access_publish' => 'Manager the courses publish',
        'access_tags' => 'Manager the tags',
        'create' => 'Have create permissions',
        'delete' => 'Have delete permissions',
    ],

    'menuitem' => [

    ],
    'settings' => [
        'post_title' => 'Post',
        'post_description' => 'Displays a news post on the page.',
    ]
];
