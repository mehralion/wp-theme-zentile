# Zentile

Zentile is a light-weight magazine theme inspired by Yandex.Zen.

![Screenshot](screenshot.png)

## Features

- Browsers: Edge, Chrome, Firefox, Safari, Opera
- Languages: English, Russian
- Responsive design
- Gutenberg-ready
- Translation-ready
- Built-in image light box
- Theme settings
    - Cusomizable logo
    - Cusomizable background
    - Show author bio at the end of the post
    - Always show sidebar
- Custom widgets
    - Categories
    - Recent comments

## Requirements

- PHP >= 5.6
- Wordpress >= 5.3.x

## Installation

### Admin panel

- Go to **Appearance > Themes > Add new**.
- Type `Zentile` in the search field.
- Hit the **Install** button.

or

### Manually

- Download the theme from **releases** page on GitHub or from wordpress.org.
- Unzip the archive to the `/wp-content/themes/` directory.
- Go to **Appearance > Themes** and activate it.

## Post installation

- Go to **Settings > Reading** and set **Blog pages show at most** to 5n (e.g. 5, 10, ...).
- Go to **Appearance > Widgets** and add widgets **Zentile: Categories** and **Zentile: Recent Comments**.
- Go to **Appearance > Customize** and customize theme as you need.

## Development

**Requirements:** Node.js >= 12.x, Git

```bash
cd <wordpress>/wp-content/themes/
git clone https://github.com/denitcoder/wp-theme-zentile.git zentile
cd zentile

# install dependencies
npm install

# compile and minify all theme assets
npm run build

# or watch for changes
npm run watch
```

## Structure

```
Zentile
├── assets - Uncompiled assets (js, css)
├── dist - Compiled and minified assets
├── releases - Zipped builds ready to publish
├── components - HTML components (buttons, alerts etc)
├── inc - Classes and utils
└── widgets - Custom widget classes
```