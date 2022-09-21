# Kontent.ai sample Laravel PHP web application

[![Live demo](https://img.shields.io/badge/-Live%20Demo-brightgreen.svg)](https://kontent-ai-sample-app-php.herokuapp.com/)
[![Heroku Project](https://img.shields.io/badge/-Heroku-7673c0)](https://dashboard.heroku.com/apps/kontent-ai-sample-app-php)

[![Stack Overflow](https://img.shields.io/badge/Stack%20Overflow-ASK%20NOW-FE7A16.svg?logo=stackoverflow&logoColor=white)](https://stackoverflow.com/tags/kontent-ai)
[![Discord](https://img.shields.io/discord/821885171984891914?color=%237289DA&label=Kontent.ai%20Discord&logo=discord)](https://discord.gg/SKCxwPtevJ)

This is a sample website written in PHP 7 using [Laravel](https://laravel.com) framework and [Kontent.ai Delivery SDK for PHP](https://github.com/kontent-ai/delivery-sdk-php). You can register your Kontent account for free at [https://app.kontent.ai](https://app.kontent.ai).

## Application setup

Before you can run the app, make sure your environment is set up correctly with [PHP 8+](https://www.php.net/downloads.php) and the [Composer](https://getcomposer.org/) package manager installed.

* For Windows, see how to [configure Visual Studio Code for PHP development](https://github.com/kontent-ai/delivery-sdk-php/blob/master/wiki/Developing-PHP-in-Visual-Studio-Code-for-Dummies.md).
* For Linux distributions, see how to [configure PHP Storm for PHP development](https://github.com/kontent-ai/delivery-sdk-php/blob/master/wiki/Configuring-PHP-Storm-on-Linux.md).

Once these prerequisites are met, you can run the application as follows:

1. Clone this repository.
1. In your command line, navigate to the project folder.
1. Run `composer install` to install dependencies.
1. (Optional) Run `composer run prepare-environment` to create a sample [Laravel environment file](https://laravel.com/docs/6.x/configuration#environment-configuration).
1. Run `php artisan serve` to run the sample app.

The app is now running locally at [`127.0.0.1:8000`](127.0.0.1:8000) (default) and you can open it in your browser.

Alternatively, you can also deploy your application to your Apache server  by cloning the repository, running `composer install`, and accessing corresponding address on your server.

### Connecting your project

This sample website displays content from a Sample Project that demonstrates Kontent.ai features and best practices. This fully featured project contains marketing content for Dancing Goat – an imaginary chain of coffee shops. By default, this sample website uses a shared project where the content remains constant for everyone.

You can change the source Kontent.ai project to your own project to be able to change the content. If you don't have your own Sample Project, any admin of a Kontent.ai subscription [can generate one](https://kontent.ai/learn/tutorials/manage-kontent/projects/manage-projects#a-create-a-sample-project).

When you have a Sample Project, follow these steps to connect it to this sample app:

1. In Kontent.ai, choose Project settings from the app menu.
1. Under Development, choose API keys.
1. Copy your Project ID.
1. In the sample app folder, open the `app\Providers\AppServiceProvider.php` file.
1. At the bottom, find the line that ends with `new DeliveryClient('975bf280-fd91-488c-994c-2f04416e5ee3');`.
1. Replace `975bf280-fd91-488c-994c-2f04416e5ee3` with the ID of your Sample Project.
1. Save the file.

Now when you run the sample application, content is retrieved from your project.

### Compile resources

If you want to adjust CSS and Javascript file, you need to rebuild them.

First you need to install [yarn](https://yarnpkg.com/) and install dependencies by running following command in repository root.

```sh
yarn
```

#### Development compilation

For development purposes you want to turn on development mode of compilation wit hot-reload capabilities.

```sh
yarn watch // or `yarn dev` for single development compilation
```

#### Production compilation

Tor production compilation, run:

```sh
yarn prod
```

## Content administration

1. Navigate to https://app.kontent.ai in your browser.
1. Sign in with your credentials.
1. Manage content in the content administration interface of your sample project.

You can learn more about content editing with Kontent.ai in the documentation.

## Content delivery

You can retrieve content either through the Kontent.ai Delivery SDKs or the Kontent.ai Delivery API:

* For published content, use `https://deliver.kontent.ai/PROJECT_ID/items`.
* For unpublished content, use `https://preview-deliver.kontent.ai/PROJECT_ID/items`.

For more info about the API, see the [API reference](https://kontent.ai/learn/reference/kontent-apis-overview).

You can find the Delivery and other SDKs at [Kontent.ai Github Organization](https://github.com/kontent-ai).

## Feedback & Contributing

Check out the [contributing](https://github.com/kontent-ai/sample-app-php/blob/master/CONTRIBUTING.md) page to see the best places to file issues, start discussions, and begin contributing.

## Author

We would like to express our thanks to [Stephen Rushing](https://github.com/stephenr85) who created this sample application.
