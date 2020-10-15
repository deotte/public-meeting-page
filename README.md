# Boardable Coding Exercise

This repo is designed as a starting point to implement a "public meeting page" feature. A full description of the task and expected outcome is available in [ExerciseOverview.md](ExerciseOverview.md).

## Running the project locally

In order to run this application, you will need to:

1. Install laravel
2. Run `composer install` to install neccessary dependencies
3. Create a database file to use SQLite locally: (`touch database/database.sqlite`)
4. Copy `.env.example` file, and name the new copied file (in the same directory) `.env`.
5. Update `.env.example` `DB_DATABASE` to be `DB_DATABASE=../database/database.sqlite`.
6. Update `.env.example `DB_CONNECTION` to be `DB_CONNECTION=sqlite`
7. Run `php:artisan key:generate` to generate your application key.
8. Run `php artisan migrate:install`
9. Run `php artisan migrate`
10. Run `php artisan db:seed`
12. This project contains `.scss` files, which will need to be compiled while developing. Run `npm install` to install the neccessary compilers.
13. To actively compile your `.scss` files while developing, run `npm run dev`.
14. Run your server (`php artisan serve` if not using Homestead or another virtualization technique)
15. Visit the application ( http://127.0.0.1:3000/meetings ) - you may need to adjust the port pending on how you serve the code
16. Log in with username: `test@boardable.com` and password: `password`

## My Thoughts

### Issues

There were a number of issues that I ran into while developing the project, some easier to solve than others.

- Configuration (getting the project to run)
  - Coming from a Rails background, Laravel takes a very hands-on approach to configuration such as databases, installing neccessary dependencies, etc. Because of this, a lot of my time initially was spent on getting the project to boot up properly, which is why I've updated the `Running the Project Locally` steps above.
- Partials (blade views)
  - The second major issue that I ran into was more of a "I wish I had more time" issue than an actual issue. 
  - For the `public_show` and `show` actions, I was hoping to send some kind of `'public' => 'true'` value to the `show.blade.php` view, and handle all `/public` and `/show` routes with the same controller action.
  - With this, I would just check in the view if that `public` value was sent, and show different public and non-public partials.
  - Unfortunately, with time constrains, I just didn't have enough time to re-familiarize myself with Laravel/Blade partials.  

### Additional Features

The additional features that I decided to go with were both front-end focused. Over the past year, I have been trying to actively focus more on developing my front-end skills
after becoming comfortable with Rails.

#### Feature 1 - Meetings Page (Index)

The first feature primarily adds a user-friendly interface to the meetings page. I also added a "your meetings" section to the page, that in the future, could be used
to show the authenticated user meetings that they had RSVP'd to. Because of time constrains, I ended up just passing the `latest()` and `oldest()` meetings to the view,
and used those as `All Meetings` and `Your Meetings` respectively.

#### Feature 2 - Meeting Public Page (Public Show)

The second feature focused on adding a user-friendly interface to the meeting's public show page. Initially, I wanted to add a better interface to both of the public show and authenticated show pages, but with time constraints, I ended up having to pick one. In a regular project, you would most likely want to focus on a publicly acessible page or "feature page" first, so I ended up choosing to focus on the public show page.

On this page, I also added a `Current Attendees` section to *(very barebones level)* mirror what you would see on a site like Meetup. With more time, I would most likely add some sort of avatar image to each attendee, as well as the ability to truncate names so that `Professor Edward Marriot` becomes `Edward M`.

### What went well

Similar to the issues that I ran into, there were a number of things that went exceptionally well while developing the project.

- Adding SASS to the project
  - Adding SASS to your project, in my mind, is so much easier in Laravel than in Rails. Within about 30 minutes along with reading the documentation, I was able to get SASS compiling in my application.
- Form handling and route definitions
  - Handling forms for POST and PUT actions in Laravel is super straightforward, and the reason (I believe) is because you have to strictly define everything yourself.
  - In Rails, there's a lot of behind the scenes magic (especially with forms) that happens, and it's great for basic things, but for more compicated forms, I find myself getting lost when trying to debug issues.
- Creating factories
  - Coming from a Rails background, the database factories that Laravel provides out of the box are fantastic. It was lightning fast to set up a new factory for RSVP's through the database seeder.
