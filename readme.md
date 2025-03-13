# UHY Prototype Kit
## About
This template will give you a great starter with a good looking work area and component presentation helpers.  The template uses the following technologies:

- Laravel Jigsaw ([Website](https://jigsaw.tighten.co))
- Laravel Blade ([Docs](https://laravel.com/docs/8.x/blade))
- Tailwind CSS ([Website](https://tailwindcss.com))
- Tailwind Typography ([GitHub](https://github.com/tailwindlabs/tailwindcss-typography))
- Tailwind Forms ([GitHub](https://github.com/tailwindlabs/tailwindcss-forms))
- Alpine JS ([GitHub](https://github.com/alpinejs/alpine))
- Splide Slider ([GitHub](https://github.com/Splidejs/splide))

## [Requirements](#requirements)
- PHP: >=8.2
- Node: 20


## [Installation](#installation)

Once you've downloaded the kit, run the following commands to download all the required packages.
```shell
composer install
npm install
```

## Running the kit

*Before running, please ensure all [requirements](#requirements) are met and you have followed the [installation instructions](#installation).*

### Project watch

Project watch compiles the tailwind locally and spawns a local server for you to view the prototype.

```shell
npm run watch
```
### Compiling for production

If you need to do a production version of this project run

```shell
npm run prod
```
This will output the files to a `build_production` directory.

## Structure
### Directories
#### /source
This contains all of your page templates.  The root page for the site is at `index.blade.php`, and if you want a page like `/about-us` you should create a file called `about-us.blade.php`.

#### /_components
This directory contains all of your site components like header, navigation, paragraphs, blocks, and more.  These are based on Laravel's "Anonymous Components" syntax which you'll find documented at [https://laravel.com/docs/8.x/blade#anonymous-components](https://laravel.com/docs/8.x/blade#anonymous-components).  These components are sorted into sub-directories by type.  You're not limited to the sub-directories provided, feel free to amend these as you need.

#### /_components/aspect
Content aspects are the different ways a piece of content can be viewed, in Drupal we call these "view modes".  These can be standard aspects like "full" and "teaser", but you may also need to think about "promoted", "mini", or even strange ones like "Listing with topic" or "Latest".  This will depend on the listing you need to build.

#### /_components/block-type
If you're not prototyping for Drupal you can remove this directory.  These are custom block types in Drupal, adverts, one offs etc.

#### /_components/gadget
Think of a gadget as something the user can interact with, like an accordion.  Mega-menus and "jumbotron" banners can also full under this category.

#### /_components/paragraph
If you're not prototyping for Drupal you can remove this directory.  If you're prototyping with CraftCMS then change rename this directory to `matrix-blocks`.  This is for prototyping the re-usable "page-builder" blocks in a CMS.

#### /_components/proto
These are the built in prototyping components used for display of the menu, colour swatches, typography examples, form examples, and more.  If you need to amend these to suite your needs, please do.

#### /_components/special
These are special or one-off components.  Sometimes you need to prototype a single piece of functionality, do that here.  Some examples of special components are AIC's user registration forms, and RCP Events' capacity planner.

#### /_components/structural
These are components that will appear on **every** page of your site.  They usually cover things like the main site header, navigation, and footer.

#### /_layouts
These are the available Jigsaw page layouts.  The template comes with `main.blade.php` for when you want to do full page layouts of your components, and `proto.blade.php` for your prototyping area.  If your site requires more than one type of layout then you can create more templates here.

#### /_assets
This contains your built CSS and JS before it gets sent to the `/build_local` directory, and your images directory.  Images should be placed here, then they are copied to the correct directories by the build process.
