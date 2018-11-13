# Kentico Cloud sample Laravel PHP web application

This is a sample website written in PHP7 using [Laravel](https://laravel.com) framework and [Kentico Cloud Delivery SDK for PHP](https://github.com/Kentico/delivery-sdk-php). You can register your account for free at [https://app.kenticocloud.com](https://app.kenticocloud.com).

## Application setup

There should be PHP7.1 and higher and composer installed in your environment. Once these prerequisities are met, you run the application as follows:

1. Clone this repository.
2. `cd` in the project folder and run `composer update` and `php artisan serve` commands.
3. Access `127.0.0.1:8000` (default) to browse the application.

Alternatively you can also deploy your application to your apache server just by clonning the repository, running composer update and accessing corresponding address on your server.

### Connecting your project

If you want to change the source Kentico Cloud project, follow these steps:

1. In Kentico Cloud, choose Project settings from the app menu.
2. Under Development, choose API keys.
3. Copy your Project ID.
4. Open `app\Providers\AppServiceProvider.php` file in the sample application folder.
5. Find `new DeliveryClient('975bf280-fd91-488c-994c-2f04416e5ee3');` and replace guid with your Project ID.
6. Save the file.

When you run the sample application now, content is retrieved from your project.

## Content administration

1. Navigate to https://app.kenticocloud.com in your browser.
2. Sign in with your credentials.
3. Manage content in the content administration interface of your sample project.

You can learn more about content editing with Kentico Cloud in the documentation.

## Content delivery

You can retrieve content either through the Kentico Cloud Delivery SDKs or the Kentico Cloud Delivery API:

* For published content, use `https://deliver.kenticocloud.com/PROJECT_ID/items`.
* For unpublished content, use `https://preview-deliver.kenticocloud.com/PROJECT_ID/items`.

For more info about the API, see the [API reference](https://developer.kenticocloud.com/reference).

You can find the Delivery and other SDKs at https://github.com/Kentico.

### Known issues

#### Sunra's HTML DOM parser

When using this sample application with some versions of PHP (reproduced on v7.1.13, 7.1.18 and 7.2), one of the dependencies ([sunra/php-simple-html-dom-parser](https://github.com/sunra/php-simple-html-dom-parser/)) tends to get stuck in an endless loop of calls to its own destructor. We worked-around this issue by renaming destructors in fetched dependencies every time they are changed. For futher reference, please see the [issue in package's repository repository](https://github.com/sunra/php-simple-html-dom-parser/issues/60).

## Feedback & Contributing

Check out the [contributing](https://github.com/Kentico/kentico-cloud-sample-app-php/blob/master/CONTRIBUTING.md) page to see the best places to file issues, start discussions, and begin contributing.

### Developing on Windows
Have a look at our cool [tutorial](https://github.com/Kentico/delivery-sdk-php/wiki/Developing-PHP-in-Visual-Studio-Code-for-Dummies) on developing PHP on Windows with Visual Studio Code!

### Developing on Linux
Do you prefer penguins? Check out our [tutorials](https://github.com/Kentico/delivery-sdk-php/wiki/Configuring-PHP-Storm-on-Linux) on developing PHP on Linux with PhpStorm!

## Author

We would like to express our thanks to [Stephen Rushing](https://github.com/stephenr85) who created this sample application.

![Analytics](https://kentico-ga-beacon.azurewebsites.net/api/UA-69014260-4/Kentico/kentico-cloud-sample-app-php?pixel)
