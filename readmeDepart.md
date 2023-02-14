# Weichie.com - Web Developer Test
This test is designed to assess a candidate's ability to accurately implement a responsive web design using our common technologies and platforms—respectively, HTML, CSS, and JavaScript and a form of content management, usually either WordPress or Shopify. We look for attention to detail, ability to gracefully fill in the gaps when possible yet know when to ask for clarification, and adherence to our own (and industry) best practices.

Candidates are expected to complete the test using our starter repos, adhering to a few rules and instructions below.

> **NOTE 1**: This test is to quickly test your way of working and to see how comfortable you are with WordPress. **You are not required to finish the entire template.** Try to limit the time spent on the project to around 3hours and sent us what you achieved.

> **NOTE 2**: We are a Mac house with some support for Linux.
> **We do not support Windows for any projects.**

## Why Am I taking a test?
We want to see where you are in your developer journey. If you're not excited about the technology stack after pulling it down; can't provide examples of modular code; don't want to be bothered since it will take some personal time to be completed; can't comprehend the code; or don't like modular and DRY coding practices, then you're likely not a good fit.

## Rules and Guidelines

- You are allowed to use a front-end framework if you're used to it
- You're not allowed to use page-builders like Elementor / WP Bakery / ...
- Do not plagarise code.
- You may use an advanced frontend view library such as vuejs, reactjs, or angularjs so long as it adapts to our starter theme development kits.
- You may use mixins, resets, and starter code like normalize.css or HTML5 boilerplate so long as it adapts to our starter theme development kits.
- You may use a CSS pre-processor such as SASS/SCSS or LESS so long as it adapts to our starter theme development kits.
- You may use front end web tooling (webpack, gulp, vite, etc) so long as it adapts to our starter theme development kits.
- You may install plugins if necessary
- You may add post-types to the project if necessary
- You must keep track and report the total time spent by you i.e. hours spent

## Instructions

You need to recreate 1 page (a WordPress homepage) that looks exactly, or as close to our proposed design as possible. [Design can be found here](https://xd.adobe.com/view/d8def562-3472-4d00-9f45-86def70db573-8d8d/specs/)

We are looking for feature completeness, an attention to detail, and an accurate implementation of the design built with DRY, responsive, modular, clean, and well-documented code that utilizes modern web development techniques, and is generally viewable on different browsers and screen sizes. Your project will be primarily reviewed in Google Chrome and Mozilla Firefox on a Mac, Chrome on Android, and Safari on iOS.

- All assets, including images, fonts, logos, etc can be found in the assets directory.
- All required fonts can be included directly from [Google Fonts](https://fonts.google.com/).
- Fonts and colors to use are specified in the design.
- You can start writing scss/js with your preferred tools (gulp/grunt/vite/webpack/parcel/...).
- Notes on **CSS**:
    - If the Hexagon shapes in the header takes too long, skip them
    - Hover states on cards are optional
    - The header will be fixed - links scroll down to a section on the page
- Required **JS Features**:
    - FAQ Accordeon functionality
    - Active state on link in main-navigation on scroll
- Contributing improvements, interactivity, or enhancements such as animations, hover states, transitions, etc are encouraged.
- Include all the source code in your solution.
- Include any config necessary to run any scripts or build processes in your solution.
- Include attribution of any dependencies used in your source code.

## Get Started
- Download & Install [Lando](https://github.com/lando/lando/releases) on your machine
- Clone this starter repo to your own account or group.
- CD into your project `cd ~/{your-destination}/application-project`
- Run `lando start` from within the project
If this is successfully, you should have a URL like this: https://application.lndo.site/
When you access this URL, you will see a fresh WordPress install (don't complete the installation)
- Import our started database for the project `lando wp db import db/site.sql`
If you now refresh your project in the browser, you should see a blank template
- You can login into WordPress with the following credentials:

```
WordPress login link: https://application.lndo.site/admin
WordPress username: weichie
WordPress password: Test12345
```

## Plugins

Our starter theme comes installed with one plugin you're free to use however you want. You are able to use the PRO version of the plugins, but the license is stripped so you're not able to upgrade if necessary - which is fine.

| Plugin | README |
| ------ | ------ |
| ACF Pro | [Plugin Documentation](https://www.advancedcustomfields.com/resources/)

## Notes

- Fully-annotated Design Specifications for Development are provided using Invision Freehand/Inspect. [Design can be found here](https://xd.adobe.com/view/d8def562-3472-4d00-9f45-86def70db573-8d8d/specs/).
- If you're feeling that you're stuggling on something for too long, skip that part
- If you think you are missing something, then ask.
