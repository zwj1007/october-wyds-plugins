#### Install
+ install october via composer `composer create-project october/october myprojectName`
+ make `storage` and `themes` directory write permission `chmod -R 777 storage themes`
+ run `php artisan october:install` in project root directory
+ before run `php artisan ocotber:update`, you need run `composer update` first
+ remove some files,`rm .gitignore README.md .editorconfig .gitattributes`
+ install dependencies plugins
    - install october.driver `php artisan plugin:install October.Drivers`
    - install rainlab.user `php artisan plugin:install RainLab.User`
    - install rainlab.pages `php artisan plugin:install RainLab.Pages`
    - install netsti.uploader `php artisan plugin:install Netsti.Uploader`
+ clone this repository
    - in the project root directory
    - run `git init`
    - run `git remote add origin https://github.com/gansutianqi/october-wyds-plugins.git`
    - run `git pull origin master`
+ after pull complete
    + run `composer require jenssegers/agent`
    + install self plugins    
        - install buuug7.news `php artisan plugin:refresh Buuug7.News`
        - install buuug7.courses `php artisan plugin:refresh Buuug7.Courses`
        - install buuug7.user `php artisan plugin:refresh Buuug7.User`
        - install buuug7.statistics `php artisan plugin:refresh Buuug7.Statistics`
        - install buuug7.location `php artisan plugin:refresh Buuug7.Statistics`
+ other settings
    - run `php artisan october:env` generate common configuration
    - when develop in local,make sure to add `APP_ENV=dev` for use dev config.

#### some setting in phpstorm
```
arguments: --no-cache --update $FileName$:../css/$FileNameWithoutExtension$.css
output paths to refresh: $FileNameWithoutExtension$.css:../css/$FileNameWithoutExtension$.css.map
```

#### issue
if upload two same name files into media manager, the files uploaded later will auto overwrite the previous file without prompt. what did i do for prevent auto overwrite? i have many files in one directory,about 5000, when i upload new files into media manager, i must check the file name first, but this become more difficulty when the numbers of files getting more and more .  
 but now this have no best solutions, i issued a [issue]() with this problem wait for solve, it seems only by modifying the source code of modules/cms/widgets/MediaManager.php line 1098 ,as follows
 ```
 // remove this line
$fileName = $uploadedFile->getClientOriginalName();
// add this line 
$fileName = str_random(40);
 ```