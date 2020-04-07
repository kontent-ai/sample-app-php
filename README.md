# Kentico Kontent sample Laravel PHP web application

[![Stack Overflow](https://img.shields.io/badge/Stack%20Overflow-ASK%20NOW-FE7A16.svg?logo=stackoverflow&logoColor=white)](https://stackoverflow.com/tags/kentico-kontent)

This is a sample website written in PHP 7 using [Laravel](https://laravel.com) framework and [Kentico Kontent Delivery SDK for PHP](https://github.com/Kentico/kontent-delivery-sdk-php). You can register your Kontent account for free at [https://app.kontent.ai](https://app.kontent.ai).

## Application setup

Before you can run the app, make sure your environment is set up correctly with [PHP 7+](https://www.php.net/downloads.php) and the [Composer](https://getcomposer.org/) package manager installed.

* For Windows, see how to [configure Visual Studio Code for PHP pevelopment](https://github.com/Kentico/kontent-delivery-sdk-php/wiki/Developing-PHP-in-Visual-Studio-Code-for-Dummies).
* For Linux distrubutions, see how to [configure PHP Storm for PHP development](https://github.com/Kentico/kontent-delivery-sdk-php/wiki/Configuring-PHP-Storm-on-Linux).

Once these prerequisites are met, you can run the application as follows:

1. Clone this repository.
1. In your command line, navigate to the project folder.
1. Run `composer install` to install dependencies.
1. (Optional) Run `composer run prepare-environment` to create a sample [Laravel environment file](https://laravel.com/docs/5.5/configuration#environment-configuration).
1. Run `php artisan serve` to run the sample app.

The app is now running locally at [`127.0.0.1:8000`](127.0.0.1:8000) (default) and you can open it in your browser.

Alternatively, you can also deploy your application to your Apache server  by cloning the repository, running `composer install`, and accessing corresponding address on your server.

### Connecting your project

This sample website displays content from a Sample Project that demonstrates Kentico Kontent features and best practices. This fully featured project contains marketing content for Dancing Goat – an imaginary chain of coffee shops. By default, this sample website uses a shared project where the content remains constant for everyone.

You can change the source Kentico Kontent project to your own project to be able to change the content. If you don't have your own Sample Project, any admin of a Kentico Kontent subscription [can generate one](https://docs.kontent.ai/tutorials/set-up-projects/manage-projects/managing-projects#a-creating-a-sample-project).

When you have a Sample Project, follow these steps to connect it to this sample app:

1. In Kentico Kontent, choose Project settings from the app menu.
1. Under Development, choose API keys.
1. Copy your Project ID.
1. In the sample app folder, open the `app\Providers\AppServiceProvider.php` file.
1. At the bottom, find the line that ends with `new DeliveryClient('975bf280-fd91-488c-994c-2f04416e5ee3');`.
1. Replace `975bf280-fd91-488c-994c-2f04416e5ee3` with the ID of your Sample Project.
1. Save the file.

Now when you run the sample application, content is retrieved from your project.

## Content administration

1. Navigate to https://app.kontent.ai in your browser.
1. Sign in with your credentials.
1. Manage content in the content administration interface of your sample project.

You can learn more about content editing with Kentico Kontent in the documentation.

## Content delivery

You can retrieve content either through the Kentico Kontent Delivery SDKs or the Kentico Kontent Delivery API:

* For published content, use `https://deliver.kontent.ai/PROJECT_ID/items`.
* For unpublished content, use `https://preview-deliver.kontent.ai/PROJECT_ID/items`.

For more info about the API, see the [API reference](https://docs.kontent.ai/reference/kentico-kontent-apis-overview).

You can find the Delivery and other SDKs at [Kentico Github Organization](https://github.com/Kentico).

### Known issues	

#### Kub-AT's HTML DOM parser	

When using this sample application with some versions of PHP (reproduced on v 7.3.7), one of the dependencies ([kub-AT/php-simple-html-dom-parser](https://github.com/kub-AT/php-simple-html-dom-parser/)) tends to get stuck in an endless loop of calls to its own destructor. We worked-around this issue by renaming destructors in fetched dependencies every time they are changed. For futher reference, please see the [issue in package's repository repository](https://github.com/sunra/php-simple-html-dom-parser/issues/60) and (original package issue)[https://sourceforge.net/p/simplehtmldom/support-requests/49/].

## Feedback & Contributing

Check out the [contributing](https://github.com/Kentico/kontent-sample-app-php/blob/master/CONTRIBUTING.md) page to see the best places to file issues, start discussions, and begin contributing.

## Author

We would like to express our thanks to [Stephen Rushing](https://github.com/stephenr85) who created this sample application.

![Analytics](https://kentico-ga-beacon.azurewebsites.net/api/UA-69014260-4/Kentico/kontent-sample-app-php?pixel)
