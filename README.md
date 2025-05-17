# Terrazas-De-Guacuco
Project Description: Full-Stack Dynamic website & Chat Web Application
This project is a fully responsive, dynamic web application built using a combination of modern web technologies and frameworks. It features a modular blog system developed in WordPress and a custom frontend interface created with HTML, CSS, JavaScript, and React. The site includes complete form validation, seamless database integration, and a real-time chat component powered by Node.js.

The backend is built on the MVC architecture using Laravel (PHP), with secure API endpoints and data handling. The application includes admin and user functionalities, API/DB connection files, and all input validations to ensure a secure and scalable experience.

🔧 Key Technologies Used:
Frontend: HTML, CSS, JavaScript, React (responsive UI)

Backend: PHP (Laravel MVC framework), Node.js (for real-time chat)

CMS Integration: WordPress (for blog management)

Database: MySQL

APIs & DB Connectivity: Custom PHP APIs & secure DB connection logic

Validation: Client-side and server-side validation for forms

Features:

Fully dynamic content management

Blog system via WordPress

Real-time chat using Node.js + WebSockets

Secure login/authentication with form validation

Mobile-friendly and responsive design


How to Run the Code:

Run command “npm install” to generate node_modules folder and package-lock.json file.
php artisan serve command is used to start the server and php artisan migrate is used to create all the databases, which needs to be done before starting the server.
Make sure to have all the required installations to proceed such as composer, Laravel, node, npm, brew and mysql, phpMyAdmin.
How to run chat functionality:

Go inside the project folder and then into socket folder by doing “cd socket” where the index.js file is present and run the below command.
“nodemon index.js” -> commands runs the nodeJs file and connects to db.
Make sure to give the right DB credentials in Laravel .env file and in the index.js file to make the DB connection for the project and the chat functionality to work.
Understanding of the Component

Applied crud operations to all managers and their services to edit, create and delete any rows in tables.

Added crud operation for pool, garden and tennis timings page to create and on click of radio button to edit and delete that respective time.

Resident and Visitor can edit their profile by updating phone number, car number plate and DL Number.

Resident can also subscribe to pool, tennis and garden events by clicking on link provided in the subscriptions page where he/ she can also look all the various pool, tennis and garden events and timings modified by their respective managers. The same is also present for visitor as well.

Added validations to login, register and forgot password page and while doing crud operations to make sure not to create an empty column or row.

Various Components Used are:

NavBar o It consists of Logo of the complex “Terrazas De Guacuco” to the left side of the navbar which redirects to the home page on click. o To the right of Nav bar you can see Home, About, Services, Blog, Contact US, feedback and Register/Login.

Home Page/ About Page o Consists of the gist of the services provided by the complex and various types of the residential units (Studios, Cabins, Townhouses).

Contact Us Page o The user can provide the description of the query along with his name, phone number, email id which will be addressed by the respective managers.

Service Page o The Flip Cards are used to display the services provided in the complex like pool, garden, security, parking, tennis. o Upon hovering on the card and clicking on the title of the card, will be redirecting to login page.

Register Page o New User (Managers, Residents, Visitor, SuperAdmin) can create a profile using the register page (applied validations).

Login Page o Already existing user can login into the website using the credentials and the role. o Provide correct Email ID and Password containing min of 5 characters to login into the required service page. (Applied validations for login page.)

Feedback o Users(residents/visitors) can give feedback regarding the amenities, services and their overall staycation that which will help Terrazas De Guacuco to improve their facilities and services. o Super admin can investigate the feedback that users provide and make the improvements as per the feedback if required.

Forgot Password Page (Get Notified) o If the existing user forgets his password, he/she can provide their email where a notified will be sent to his/her email id, which can be further used to reset their password.

Footer o Used a div tag to include a footer in every page which contains Instagram, Facebook and twitter icons. o Along with these there are few other contents of the navbar.

Visitor Services o Services provided are: 1.Create profile – The visitor profile data can be seen and edited. 2.Register Vehicle – Visitor can register his/ her vehicle by entering the Driving license number (DL), apartment visiting (Apartment Type – Number), Email ID and parking space number. Can perform Crud operations. 3.Driving Instructions – Provides various rules which need to be followed by the visitors. 4.Register Incident/ Request – Visitor can request when he/ she must visit the complex, whereas register is used to raise their issues faced during their time in the complex. 5.Visitor Timings – Visitor timings of the complex are displayed. 6.Navigate – Used this feature visitor can navigate around the complex by providing to and from locations. 7.My Subscriptions – The visitors can subscribe to the events (pool, garden, tennis) by clicking on the notification icon. He/She can also look at the events by clicking on the event title. They can also access the timings of the amenities by clicking on the timings label provided. 8.Chat with us – Where the visitor can chat with the management and others.

Resident Services o Services provided are:  My profile - The visitor profile data can be seen and edited.  Register Vehicle – Visitor can register his/ her vehicle by entering the Driving license number (DL), apartment visiting (Apartment Type – Number), Email ID and parking space number. Can perform Crud operations.  My Payments – Payment history of the resident can be seen, and he/she can also make a payment by clicking on the button that is provided, which directs them to make payment.  My Subscriptions – The residents can subscribe to the events (pool, garden, tennis) by clicking on the link which redirects to an page to subscribe to events. He/She can also look at the events by clicking on the event title. They can also access the timings of the amenities by clicking on the timings label provided.  Navigate – Used this feature visitor can navigate around the complex by providing to and from locations.  Chat with us – Where the resident can chat with the management and others.

Pool Manager o Services provided are:  Events – Manager can perform crud operations on the events provided by the complex. He/She can create new events (by clicking on create button present on top right corner of the page), edit existing ones and delete if not required.  Pool Timings – Pool timings of the complex are managed by the pool manager.  Advertisements – advertise the events conducted in the pool.  Staff list – Manager can access and manage the staff list according to their worker type, schedule and location allocated.  Manage Residents – Manager can access and manage the lease details of the residents present in Studio, cabins and townhouses.  Manage Visitors – Manager can access and manage the visitor list i.e., who have visited the complex.  Chat with us – Where the visitor can chat with the management.  Dashboard – Provides a detailed report of pool events occurred during past years using a bar graph and the events conducted quarterly using pie chart. Manager can also view the details of the residents subscribed to the pool events.

Security Manager o Services provided are:  Manage Security – Can manage and view the details of the security staff members and locations allocated to them.  Manage Timings – The schedule of each staff member can be seen in the manage timings page.  Manage Residents - Manager can access and manage the lease details of the residents present in Studio, cabins and townhouses.  Manage Visitors – Manager can access and manage the visitor list i.e., who have visited the complex.  Chat with us – Where the visitor can chat with the management.  Dashboard – Provides a detailed report of security staff increased during past years using a bar graph and the number of visitors visited the complex quarterly using pie chart. Manager can also view the details of security staff list.

Apartment Manager o Types of residential units can be viewed using flip cards (studios, cabins, townhouses). o Clicking on each of the residential units will redirect the manager to the following pages.  Requests – The services requested by the residents can be viewed in this page and managed (CRUD).  Manage Services – The services provided by the manager of the complex can be viewed such as Plumbing, Kitchen, Furniture, etc.  Lease details of residents – The lease details of the residents of each unit can be viewed and managed. o Chat with us – Where the visitor can chat with the management. o Dashboard – Provides a detailed report of the number of apartment type units present per year using a bar graph and the number of vacant and occupied units the complex is seen using pie chart. Manager can also view the details of residents.

Building Manager: o Services provided are:  Parking – provided the parking slots provided and occupied to each residential unit.  Tennis Events - Manager can perform crud operations on the events provided by the complex. He/She can create new events (by clicking on create button present on top right corner of the page), edit existing ones and delete if not required.  Manage Residents - Manager can access and manage the lease details of the residents present in Studio, cabins, and townhouses.  Staff portal – Building Manager can check the pool, garden, security, apartment, visitor manager staff list.  Navigate – Used this feature visitor can navigate around the complex by providing to and from locations.  Chat with us – Where the visitor can chat with the management.  Advertisements – advertise the tennis events. o Dashboard – Provides a detailed report of number of managers existing by role using a bar graph and the number of amenities present using pie chart. Manager can also view the details of each manager and amenities.

Garden Manager: o Services provided are:  Events – Manager can perform crud operations on the events provided by the complex. He/She can create new events (by clicking on create button present on top right corner of the page), edit existing ones and delete if not required.  Garden Timings – Garden timings of the complex are managed by the garden manager.  Staff list – Manager can access and manage the staff list according to their worker type, schedule and location allocated.  Manage Residents – Manager can access and manage the lease details of the residents present in Studio, cabins and townhouses.  Manage Visitors – Manager can access and manage the visitor list i.e., who have visited the complex.  Advertisements – advertise the events conducted in the garden.  Chat with us – Where the visitor can chat with the management.  Dashboard – Provides a detailed report of garden events occurred during past years using a bar graph and number of walking trails and garden count present using pie chart. Manager can also view the details of the residents subscribed to the garden events.

Visitor Manager: o Services provided are:  Visitors list – Can access and manage the visitor list.  Visitor timings – Visitor timings of the complex are managed by the visitor manager.  Handle request – The services request by the visitors can be viewed in this page and managed.  Chat with us – Where the visitor can chat with the management.  Dashboard – Provides a detailed report of the number of visitors visited the complex during past years using a bar graph and number of visitors per quarter using pie chart. Managers can also view the details of the visitors visited the complex.

SuperAdmin Services: o Services provided are:  Consists of all the services of managers (apartment, visitor, pool, garden, building, security and maps) and residents which he can access and manage.

Maps: o Super admin can manage and edit maps (add, edit and delete directions) on this website, https://mymaps.google.com/ . o We have created a Gmail account for the super admin, using which we have created maps – that gives directions from one place to another in Terrazas de Guacuco. (Gmail - terrazasdeguacuco@gmail.com , Password – superadmin1234). Super admin can login using the above credentials onto mymaps and start creating or editing the directions. o In the preview, residents/visitors can view the directions added by the super admin on the left-hand side of the screen and select/unselect the check boxes to view the directions in the maps. o Studios, townhouses, cabins, pool 1, pool 2, garden 1, garden 2, garden 3, garden 4, garden 5 and leasing office are represented using different markers on the maps.

Chat functionality: o Chat is currently being performed using nodeJS. o The sockets folder in the code consists of index.js file which is used to connect to the database and the application and allows use to store the messages in database using query. Which helps us to preserve the conversation for future use. o The chat.blade.php file consists of the frontend and connectivity to the chatController to pass and receive the data from the database. o Using this chat feature a logged in user can chat with all other managers/ resident and other people who have registered from their website. Privacy has not been compromised as their email or contact number is not being shared.

Email Notification: o Email is sent to users upon successful registration through emailJS, by entering the public key, service id, template id in the code. o Email templates are created in emailJS in such a way that emails are sent to users/members upon successful registration. o We have added the gmail created for super admin, that is terrazasdeguacuco@gmail.com as the “from” email, and “to” email is set to the value that is entered(email id) during registration process.
