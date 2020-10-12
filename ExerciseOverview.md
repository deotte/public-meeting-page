# Coding Exercise

The goal of this exercise is to see working code that solves a problem similar to one we've seen at Boardable. It is to test your ability to deliver working code and, possibly even more importantly, your ability to communicate throughout the process. The code is scoped in a way that we would expect this to take you 4-6 hours to complete. Please don't spend longer than that.

## Context

Many organizations who use Boardable have a requirement (legally or by their bylaws) for certain information to be available publicly. Things like location, time and date, and agenda items are frequently required to be listed somewhere that anyone can view. To solve this, we need to take an existing Meeting resource and make a new page that makes a subset of its attributes publicly accessible.

You will need to update or create database tables, blade views, controllers, etc. - there's no "right answer," we're just trying to see how you tackle a problem that's similar to our daily work. 


## Given

The attached code will provide a basic `Meeting` model that includes title, description, location, and date/time of the meeting.


## Deliverable

- [ ] At the end of the exercise, we should have a `/meetings/{id}` page that requires authentication and a `/meetings/{id}/public` page that does not require authentication.
- [ ] The public page should list the title, description, location, and time and date of the meeting, and user RSVPs
- [ ] From the public meeting page, a visiting user should be able to enter in an arbitrary email address, name, and an RSVP of "Yes", "No', or "Maybe" (inside Boardable this would obviously require authentication, but any name/email will do for now)
- [ ] A user should be able to enter an Agenda of items to cover (can be free-form text). The user should be able to toggle whether or not the Agenda is shown on the public page
- [ ] (If applying for a Senior developer position only) The application should be deployed on a publicly-available server.
- [ ] Please scope and work on 2 additional features of your choice.

For example, if your strengths are on the front end, add some styles to these bland pages and make it feel more interactive. If your strengths are on the backend, you could add a meeting reminder service that uses a queue to send an email (through a service or just an entry in a database).

Please feel free to add whatever features interest you and show off your talents. The above are just some ideas to help you get started.

- [ ] A write up of your experience - what worked, what didn't, what caused you to stumble and how you overcame it, what features you added, why you added them, things you chose not to add due to time or techincal constraints but that could be added in the future, etc. Just let us know what the process was like for you. Again, no "right answer" here, we're trying to understand how you think and communicate.