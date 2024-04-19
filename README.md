# HTTP-5225 Assignment 3

"Food Directory" is a project where users can explore delicious foods, complete with details like nutrition facts and images. Admins have special access to manage the directory with add, update, delete and view which ensures the directory stays fresh.

### Database Schema

The database schema implements a one-to-one relationship between the "items" table and the "item_details" table. This relationship is established through the "food_item_id" foreign key column in the "item_details" table, referencing the primary key column ("id") in the "items" table. As a result, each record in the "items" table corresponds to exactly one record in the "item_details" table, ensuring that each food item has its own set of detailed nutritional information. 

### User Flow

### Home screen (for all user)

![Screenshot 2024-04-18 at 18-19-17 Lara LMS.png](https://github.com/codeyumm/Http5225-assignment3/blob/19484a10ca8a915741629e7536041791f51f7da2/_readme/Screenshot%202024-04-18%20at%2018-19-17%20Lara%20LMS.png)

### Login Screen

![Screenshot 2024-04-18 at 18-29-34 Laravel.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-29-34%20Laravel.png)

### Register Screen

![Screenshot 2024-04-18 at 18-29-22 Laravel.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-29-22%20Laravel.png)

### Dashboard (Admin)

![Screenshot 2024-04-18 at 18-20-29 Laravel.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-20-29%20Laravel.png)

### Admin can see all the items

### with the options to edit and delete

![Screenshot 2024-04-18 at 18-20-39 Lara LMS.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-20-39%20Lara%20LMS.png)

### if admin click on edit

![Screenshot 2024-04-18 at 18-22-49 Lara LMS.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-22-49%20Lara%20LMS.png)

### if admin clicks on delete the item gets deleted and they can see the toast message

![Screenshot 2024-04-18 at 18-21-05 Lara LMS.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-21-05%20Lara%20LMS.png)

### Admin can add an item

![Screenshot 2024-04-18 at 19-21-32 Lara LMS.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2019-21-32%20Lara%20LMS.png)

### If any user tries to access the pages which is accessible by admin only
they get redirected to the login page

![Screenshot 2024-04-18 at 18-29-34 Laravel.png](https://github.com/codeyumm/Http5225-assignment3/blob/main/_readme/Screenshot%202024-04-18%20at%2018-29-34%20Laravel.png)

### Things Which I was unable to do

Detail view for the food item, when user clicks on details page they should see the details of the food item from the item details page.

I have made the schema for it but was unable to do the view and controller because of the time scope and I have missed some lecture of the laravel so my speed was slow while working on this assignment in compare to the assignment 1 and 2.

### Laravel

I liked the laravel it is more cleaner in compare to the using php in html directly.
it is more structured and easy to implement the authentication. Even querying the database is simple but I think there was not much time to explore everything because when the semester is ending there are lot of assignments from all the subjects so if possible maybe you can start teaching laravel bit early.
