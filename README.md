 

                         BIIT 2305 WEB APPLICATION DEVELOPMENT


PROJECT TITLE: IIUMEXPRESS – FOOD ORDERING SYSTEM 
GROUP NAME: TECH NOVA
SECTION 04
GROUP MEMBERS
NAME 
MATRIC NUMBER
ROLE
BHUIYAN RUBIYA
2312400
GROUP LEADER 
SAIDUR RAHMAN
2413895
FRONTEND DEVELOPER 
HARRAZ BIN HASBULLAH
2324079
BACKEND DEVELOPER 
MUHAMMAD FIRDAUS
2323983
DATABASE DESIGNER 

 GitHub Repository Link: https://github.com/rubiya-bhuiyan/IIUMExpress
Demo video link: https://drive.google.com/drive/folders/1hg3YhwERY-mOfTyxa5XECYk4Tangp2mY

LECTURER NAME: NOR AZURA BINTI KAMARULZAMAN
SUBMISSION DATE: 14 JUNE 2026



Table of Content

1.0 Introduction	3
2.0 System Analysis and Design	6
3.0 System Development	12
3.1 Development Methodology	12
3.2 Development Tools and Technologies	13
3.3 Laravel MVC Architecture	15
3.4 Project Structure	18
3.5 Database Implementation	20
3.6 Authentication Module	22
3.7 User Management Module	23
3.8 Food Menu Module	24
3.9 Cart Management Module	25
3.10 Order Management Module	26
3.11 Payment Module	27
3.12 Notification Module	28
3.13 Messaging Module	31
3.14 Rating and Feedback Module	31
3.15 Admin Dashboard Module	32
4.0 System Implementation	35
4.1 Home Page	36
4.2 Registration Page	36
4.3 Login Page	36
4.4 User Dashboard	37
4.5 Food Menu Page	37
4.6 Cart Page	37
4.7 Checkout and Payment Page	38
4.8 Order Tracking Page	38
4.9 Messaging Interface	38
4.10 Rating Interface	39
4.11 Admin Dashboard	39
4.12 Database Screenshots	40
5.0 Testing and Results	40
6.0 Challenges and Solutions	53
7.0 Conclusion and Future Enhancement	55
8.References	57
Appendix A – GitHub Repository Link:	57

















1.0 Introduction
1.1 Background of the Project
Food ordering has traditionally been performed through manual methods where customers visit food outlets, place orders physically, wait for preparation, and make payments at the counter. Although this process is widely practiced, it often creates inconvenience for customers, especially during peak hours when queues become long and waiting times increase.
With the increasing use of smartphones, internet services, and digital payment systems, customers now expect faster and more convenient methods of purchasing food. Online food ordering platforms have emerged as effective solutions to overcome the limitations of traditional ordering methods. These systems allow users to place orders remotely, monitor order progress, and complete transactions electronically.
The IIUMExpress Food Ordering System was developed to support a modern digital environment by providing a centralized platform that connects customers, administrators, and food runners. Customers can easily access food menus, place orders, and make payments online. Administrators can efficiently manage menus, users, orders, and system operations through a centralized dashboard. Food runners can handle delivery tasks systematically while maintaining communication with customers.
The project was developed using Laravel Framework, PHP, MySQL, Bootstrap, and Blade Template technologies. These technologies provide a reliable foundation for building secure, responsive, and scalable web applications that meet modern user expectations.
1.2 Problem Statement
Traditional food ordering methods face several challenges that negatively affect both customers and service providers. One of the most common problems is long waiting times during busy hours. Customers often need to queue for extended periods before placing their orders, resulting in dissatisfaction and inconvenience.
Another significant issue is communication errors between customers and food service providers. Manual order taking can lead to incorrect orders, misunderstandings, and delays in food preparation. These problems can reduce customer satisfaction and negatively impact service quality.
Payment management also presents challenges in traditional systems. Cash-based transactions may cause delays, calculation errors, and difficulties in maintaining accurate transaction records. Furthermore, customers have limited access to information regarding food availability, order status, and delivery progress.
From an administrative perspective, managing food menus, customer orders, payment records, and user information manually can be time-consuming and inefficient. As the number of customers increases, administrators may struggle to monitor and manage system operations effectively.
Therefore, there is a need for an integrated web-based food ordering platform that can automate order processing, improve communication, simplify payment handling, and provide a better overall user experience. The IIUMExpress Food Ordering System was developed to address these challenges by offering a centralized, efficient, and user-friendly solution.
1.3 Project Objectives
The objectives of the IIUMExpress Food Ordering System are:
To develop a dynamic web-based food ordering application using Laravel MVC architecture.
To implement CRUD (Create, Read, Update, Delete) operations for managing food items, categories, users, and orders.
To provide secure user authentication and authorization features for customers, administrators, and food runners.
To create a responsive and user-friendly interface that improves accessibility and usability.
To improve the efficiency of food ordering, payment processing, and delivery management through an online platform.
To facilitate communication between customers and food runners using an integrated messaging system.
To provide notification and rating functionalities that enhance customer engagement and service quality.
To apply knowledge and practical skills learned in Web Application Development using Laravel technologies.
1.4 Scope of the Project
The scope of the IIUMExpress Food Ordering System covers the development of a web-based platform that supports food ordering and management activities. The system includes three main user groups: customers, administrators, and food runners.
For customers, the system provides functionalities such as user registration, login, food browsing, food search, cart management, order placement, payment processing, notifications, messaging, order tracking, and rating submission.
For administrators, the system provides a centralized dashboard that allows management of food categories, food items, customer accounts, food runners, orders, payments, notifications, and ratings. Administrators can monitor overall system activities and maintain operational efficiency.
For food runners, the system offers delivery task management, delivery status updates, notification handling, and communication with customers through the messaging module.
The project focuses on implementing core web application features using Laravel MVC architecture, MySQL database management, Bootstrap-based user interfaces, and GitHub version control. The system is limited to web platform implementation and does not currently include mobile application development, GPS tracking, or external payment gateway integration.
1.5 Project Significance
The IIUMExpress Food Ordering System provides significant benefits to customers, administrators, and food runners. For customers, the system offers a faster and more convenient ordering experience by eliminating long queues and allowing online ordering from any location. Customers can monitor order progress, receive notifications, communicate with food runners, and make secure payments through the platform.
For administrators, the system improves operational efficiency by automating food menu management, order processing, payment tracking, and user management. The centralized dashboard enables better monitoring and control of business activities while reducing manual workload.
For food runners, the system provides an organized approach to managing delivery tasks and communicating with customers. Delivery status updates and messaging features improve coordination and service quality.
From an academic perspective, this project serves as a practical application of web development concepts learned throughout the course. It demonstrates the implementation of Laravel MVC architecture, authentication, database management, CRUD operations, routing, and responsive interface design. The project also enhances teamwork, problem-solving, and software development skills among group members.
Overall, the IIUMExpress Food Ordering System contributes to the digital transformation of food ordering services by providing a modern, efficient, and user-friendly platform that improves operational effectiveness and customer satisfaction.
2.0 System Analysis and Design
2.1 System Overview
IIUMExpress is a web-based Food Ordering System developed using the Laravel framework and MySQL database. The system is designed to streamline food ordering and delivery management by providing a centralized platform for customers, administrators, and food runners.
Customers can browse food menus, search for food items, add products to a shopping cart, place orders, make payments, receive notifications, communicate with food runners, and provide ratings after receiving their orders. Administrators can manage users, food items, categories, orders, payments, and system activities through an administrative dashboard. Food runners are responsible for managing delivery tasks and updating delivery statuses.
The system follows the Model-View-Controller (MVC) architecture provided by Laravel, ensuring maintainability, scalability, and security while improving the overall user experience.
2.2 Functional Requirements
Customer Functions
Administrator Functions
Food Runner Functions

2.3 Non-Functional Requirements
Non-functional requirements define the quality attributes and operational characteristics of the system.
Performance
The system should respond to user requests within a few seconds.
Database operations should be performed efficiently.
Security
User passwords must be encrypted.
Authentication and authorization mechanisms must be implemented.
Only authorized users can access protected modules.
Usability
The interface should be simple and user-friendly.
Navigation should be clear and intuitive.
Users should be able to complete tasks with minimal training.
Reliability
The system should operate consistently without major failures.
Data should be stored accurately and securely.
Scalability
The system should support increasing numbers of users and transactions.
Additional modules can be added in future versions.
Maintainability
The Laravel MVC architecture should facilitate easier maintenance and updates.
Source code should be organized and modular.

2.4 Use Case Diagram

2.5 Use Case Description
Use Case: Place Food Order
Item
Description
Use Case Name
Place Food Order
Actor
Customer
Description
Allows customers to place food orders through the system
Preconditions
Customer has logged in
Main Flow
Browse menu → Add items to cart → Confirm order → Make payment
Postconditions
Order record is stored successfully

Use Case: Manage Food Items
Item
Description
Use Case Name
Manage Food Items
Actor
Administrator
Description
Allows administrators to add, update, and delete food items
Preconditions
Administrator has logged in
Main Flow
Access dashboard → Manage menu items
Postconditions
Food menu information is updated

Use Case: Update Delivery Status
Item
Description
Use Case Name
Update Delivery Status
Actor
Food Runner
Description
Updates customer delivery progress
Preconditions
Assigned delivery exists
Main Flow
View task → Update delivery status
Postconditions
Customer receives delivery notification


2.6 Entity Relationship Diagram (ERD)

2.8 Database Design
The IIUMExpress database is implemented using MySQL and contains the following tables:
users
Field
Type
id
bigint
name
varchar
email
varchar
password
varchar
role
varchar
wallet_balance
decimal

categories
Field
Type
id
bigint
category_name
varchar

food_items
Field
Type
id
bigint
category_id
bigint
food_name
varchar
description
text
price
decimal
image
varchar

orders
Field
Type
id
bigint
user_id
bigint
total_amount
decimal
status
varchar

The database design supports efficient storage, retrieval, and management of information required for food ordering, payment processing, communication, and delivery management.
 
3.0 System Development
This chapter discusses the development process of the IIUMExpress Food Ordering System. The system was developed using Laravel Framework, MySQL database, and several web development technologies to create a functional and user-friendly food ordering platform. Throughout the development process, different modules were implemented to support customer and administrator activities within the system.
The development phase focused on transforming the system design into a working web application. Features such as user authentication, food menu management, cart operations, order processing, assistance requests, ratings and reviews, and administrative functions were developed and integrated with the database. Laravel MVC architecture was used to ensure that the source code remained organized and easier to maintain.


3.1 Development Methodology
The development of the IIUMExpress Food Ordering System followed an iterative development approach. This approach allowed the team to gradually build and improve the system while continuously testing each feature throughout the development process. Instead of waiting until the end of development, testing and debugging were performed regularly to identify problems earlier and reduce the possibility of major errors.
The project began with requirement gathering and system planning. After understanding the project requirements, the team designed the database structure, user interfaces, and system workflow. Development then proceeded module by module, starting with authentication and database integration before moving on to food management, ordering, ratings, and administrative features. Finally, the completed system underwent testing and evaluation to ensure that all functionalities operated correctly.

3.2 Development Tools and Technologies
Several tools and technologies were used during the development of the IIUMExpress Food Ordering System. These technologies were selected because they are commonly used in web application development and provide reliable support for building dynamic systems.
Development Tools and Technologies Table:
Technology
Purpose
Laravel Framework
Backend development and MVC architecture
PHP
Server-side programming language
MySQL
Database management system
phpMyAdmin
Database administration
HTML
Web page structure
CSS & Bootstrap
User interface design
JavaScript
Interactive functions
VisualStudio Code
Source code editor
XAMPP
Local development server
GitHub
Version control and collaboration

Laravel was used as the main development framework due to its built-in features such as routing, authentication, database migration, and MVC architecture. Bootstrap was utilized to create responsive user interfaces, while MySQL handled all data storage requirements.

📷 Figure 3.1: Development Tools Used in the Project:



3.3 Laravel MVC Architecture
The IIUMExpress Food Ordering System was developed using Laravel's Model-View-Controller (MVC) architecture. MVC is a design pattern that separates the application into three main components, allowing developers to organize source code more effectively.
The Model component manages database operations and business logic. The View component is responsible for displaying information to users through Blade templates. The Controller component acts as an intermediary between the Model and View by processing user requests and determining the appropriate response.
Using MVC architecture helped the team separate frontend and backend development tasks while improving code readability and maintainability. It also made debugging easier because each component had a specific responsibility within the application.
📷 Figure 3.2: Laravel MVC Architecture



3.4 Project Structure
The project follows Laravel's standard folder structure, which helps maintain an organized development environment. Different system components are placed in separate directories according to their functions.
Controllers are stored inside the app/Http/Controllers directory, while database models are stored inside app/Models. Blade template files used for user interfaces are located inside resources/views, and web routes are defined in routes/web.php. Database migration files are placed inside the database/migrations directory.
This organized structure made it easier for team members to locate files, implement new features, and collaborate throughout the development process. It also supports future system maintenance and enhancement activities.
 Figure 3.3: Laravel Project Folder Structure:





3.5 Database Implementation
The database for IIUMExpress was implemented using MySQL and managed through phpMyAdmin. The database serves as the central storage system for all information generated by users and administrators during system operation.
Several tables were created to support the application's functionalities, including users, categories, food_items, carts, orders, ratings, and messages. Relationships between these tables were established using primary keys and foreign keys to maintain data integrity and reduce data redundancy.
Proper database planning was important because most system functions depend on accurate data storage and retrieval. Through database implementation, the system is able to manage customer accounts, food information, orders, ratings, and assistance requests efficiently.
Figure 3.4: Database Structure in phpMyAdmin:







3.6 Authentication Module
The Authentication Module was developed to ensure that only authorized users can access system functionalities. This module handles user registration, login, logout, and session management processes.
During registration, users are required to provide personal information such as name, email address, and password. The system validates the input before storing the information securely in the database. Once registered, users can log into the system using their credentials and access features based on their assigned role.
Laravel's authentication features were utilized to simplify user management while improving system security. This module forms the foundation of the entire application because most features require users to be authenticated before access is granted.
📷 Figure 3.5: User Login and Authentication Page:





3.7 User Management Module
The User Management Module handles activities related to user accounts within the IIUMExpress Food Ordering System. This module allows users to register new accounts, log into the system, log out securely, and access their personal profiles.
After successfully logging in, users can access various system functions according to their role. Customers can browse food items, place orders, track deliveries, and submit ratings. Administrators can manage system operations through the dashboard. User information is stored in the database and can be retrieved whenever needed.
The profile page also enables users to review their order history and previously submitted assistance requests. This module ensures that users have a personalized experience while interacting with the platform.
📷 Figure 3.6: User Profile Management Interface:


3.8 Food Menu Module
The Food Menu Module was developed to allow customers to browse and select food items available within the platform. This module serves as one of the most important components because it directly supports the food ordering process.
Food items are displayed together with their names, descriptions, prices, images, and ratings. Search functionality was implemented to help users quickly locate specific food items, while category filtering allows users to browse foods according to categories such as beverages, meals, or snacks.
The module was designed with simplicity and usability in mind so that customers can easily explore available food options before placing an order. Information displayed on this page is retrieved directly from the database and updated automatically whenever administrators make changes to food items or categories.
📷 Figure 3.7: Food Menu Interface with Search and Category Filter


3.9 Cart Management Module
The Cart Management Module was developed to allow customers to manage their selected food items before proceeding to checkout. In this module, users can add food items from the menu page into their cart. The system stores the selected items together with the user information so that each customer has their own cart record.
This module also allows users to update the quantity of food items and remove items that they no longer want to order. The total price is calculated based on the food price and quantity selected by the user. A delivery fee is also included in the final amount. This makes the ordering process more flexible and similar to a normal food delivery system.
Figure 3.8: Cart Management Interface :

3.10 Order Management Module
The Order Management Module handles the process after the customer completes checkout. Once the customer confirms the order, the system creates a new order record in the database. The order includes important details such as user ID, payment method, subtotal, delivery fee, total amount, and order status.
The order status feature allows customers to track their order progress. The statuses used in the system are Pending, Preparing, Out For Delivery, and Delivered. Administrators can update the status through the admin dashboard, and the updated status will be shown to the customer on the order tracking page. This helps users know the current progress of their order.
Figure 3.9: Order Tracking Page :

3.11 Payment Module
The Payment Module was implemented to allow users to choose their preferred payment method during checkout. The system provides several payment options such as Online Banking, E-Wallet, and Cash on Delivery. This gives users more flexibility when placing an order.
Although the system does not integrate with a real payment gateway, the selected payment method is still stored in the database together with the order information. This allows the system to keep a proper record of how each order was paid. The payment module supports the overall checkout process and makes the system feel more complete.


Figure 3.10: Checkout and Payment Selection Page :



3.12 Notification Module
The Notification Module provides feedback messages to users after they perform certain actions in the system. For example, when a user successfully logs in, adds food to the cart, submits an assistance request, places an order, or submits a rating, the system displays a notification message.
This module is important because it helps users understand whether their action was successful or not. Without notification messages, users may feel unsure whether the system has processed their request. The notifications used in IIUMExpress are simple but useful for improving the overall user experience.



Figure 3.11: Success Notification Message :








3.13 Messaging Module
The Messaging Module was developed through the Need Assistance feature. This feature allows customers to submit messages when they face issues or need help while using the system. Users can select the issue type and write their message before submitting the request.
The submitted messages are stored in the database and can be viewed by the administrator through the admin dashboard. This allows the administrator to monitor customer problems and respond if necessary. This module provides a basic communication channel between customers and the system administrator.
Figure 3.12: Need Assistance Page :


3.14 Rating and Feedback Module
The Rating and Feedback Module allows customers to submit ratings and reviews for food items. This feature helps collect customer feedback and improves the reliability of the menu information shown to other users.
In the system, customers are only allowed to rate an order after the order status has been updated to Delivered. This is to make sure that the customer has already received the food before giving feedback. After the rating is submitted, the average rating is displayed on the menu page. This allows other customers to view feedback before ordering.
Figure 3.13: Rating and Review Submission:

 
3.15 Admin Dashboard Module
The Admin Dashboard Module was developed to help administrators manage and monitor the system. After logging in using the admin account, the administrator can access a dashboard that displays an overview of system data, including total users, food items, categories, cart records, assistance requests, and orders.
Through the dashboard, the administrator can manage food categories, add new food items, update existing menu details, view registered users, monitor customer carts, view assistance requests, and update order statuses. This module is important because it allows the administrator to control the main operations of the IIUMExpress system from one centralized interface.
Overall, the admin dashboard helps make the system easier to maintain and ensures that customer orders and menu information can be managed properly.
Figure 3.14: Admin Dashboard Overview :








4.0 System Implementation
This chapter presents the implementation of the IIUMExpress Food Ordering System after the development phase was completed. The purpose of this chapter is to demonstrate how the designed features and functionalities were successfully implemented into a working web-based application. The system was developed using Laravel Framework, MySQL database, Bootstrap, HTML, CSS, and JavaScript to provide an efficient and user-friendly food ordering platform.
The implementation phase focused on integrating all modules developed in the previous chapter into a complete system. Both customer and administrator functionalities were implemented to ensure that users could perform food ordering activities smoothly while administrators could manage the system efficiently. Features such as user registration, login, food browsing, cart management, order processing, order tracking, customer assistance, ratings, and administrative management were successfully integrated into the platform.
The system was tested throughout the implementation process to ensure that each module functioned according to the project requirements. Data entered by users is stored in the database and processed through Laravel controllers before being displayed on the user interface. This integration allows the system to provide a complete food ordering experience while maintaining data consistency and system reliability.
The following sections present the implemented interfaces and functionalities of the IIUMExpress Food Ordering System. Each section explains the purpose of the module and how users interact with the system during normal operation.

4.1 Home Page
The Home Page serves as the main entry point of the IIUMExpress Food Ordering System. This page is displayed when users first access the website and provides a brief introduction to the platform. The interface was designed to be simple and user-friendly so that users can easily understand the purpose of the system.
From the home page, users can navigate to other sections such as registration, login, and food ordering features. The page also provides a professional appearance that helps create a positive first impression for users visiting the platform.


4.2 Registration Page
The Registration Page allows new users to create an account before accessing the system. Users are required to enter their personal information such as name, email address, and password. The information provided is validated before being stored in the database.
After successful registration, users can log into the system using their newly created account. This feature ensures that each user has a unique identity within the platform and allows the system to store user-related information such as orders, ratings, and assistance requests.


4.3 Login Page
The Login Page allows registered users to access the system securely. Users must enter their email address and password before gaining access to system functionalities. The system verifies the information entered against records stored in the database.

Once authentication is successful, users are redirected to the system where they can browse food items, manage orders, and access other available features. This page plays an important role in protecting user information and restricting access to authorized users only.

4.4 User Dashboard
The User Dashboard provides users with a centralized area to manage their activities within the platform. Through this page, users can view profile information, access order history, and review assistance requests that have been submitted previously.
The dashboard improves user convenience by allowing important information to be viewed in one location. Instead of navigating through multiple pages, users can quickly access their personal records and monitor previous system interactions.


4.5 Food Menu Page
The Food Menu Page displays all food items available for purchase through the platform. Each food item includes information such as food name, description, image, price, category, and average rating. This allows customers to evaluate food options before making purchasing decisions.
The page also includes a search function and category filter. These features help users locate specific food items more efficiently and improve the overall user experience. Customers can browse available food options and add selected items directly to their shopping cart.


4.6 Cart Page
The Cart Page allows users to review food items that have been selected before checkout. Users can view the selected products together with the quantity, individual price, and total amount.
The system automatically calculates the subtotal and final total based on the quantity selected. Users are also able to update quantities or remove unwanted items from the cart before proceeding to checkout. This functionality helps ensure that customers can review their orders accurately before making payment.


4.7 Checkout and Payment Page
The Checkout and Payment Page is used to finalize the food ordering process. Before confirming an order, users can review their order summary and select a preferred payment method.
The system supports several payment options including Online Banking, E-Wallet, and Cash on Delivery. Once the order is confirmed, the information is stored in the database and a new order record is generated. This marks the completion of the ordering process and allows users to proceed to order tracking.

4.8 Order Tracking Page
The Order Tracking Page allows customers to monitor the progress of their orders after checkout. The page displays important information such as order details, payment method, total amount, and current order status.
The system updates the order status whenever changes are made by the administrator. Customers can easily determine whether their order is pending, being prepared, out for delivery, or successfully delivered. This feature provides transparency and improves customer satisfaction.

4.9 Messaging Interface
The Messaging Interface was implemented through the Need Assistance feature. This page allows customers to submit inquiries, complaints, or support requests whenever they experience issues while using the system.
Users can enter a message describing their issue and submit it directly through the platform. The submitted information is stored in the database and can be accessed by administrators through the admin dashboard. This feature helps facilitate communication between customers and administrators.


4.10 Rating Interface
The Rating Interface allows customers to provide feedback regarding their ordering experience. Customers are able to submit ratings and reviews after their orders have been successfully delivered.
The submitted ratings are stored in the database and displayed on the food menu page. This allows future customers to view previous feedback before placing orders. The rating feature helps improve service quality while encouraging customer engagement within the platform.

4.11 Admin Dashboard
The Admin Dashboard serves as the central management interface of the IIUMExpress Food Ordering System. Through this dashboard, administrators can access various management functions required to maintain system operations.Admin Id is admin@iiumexpress.com and the password is password123. This ID is needed to log in the system as Admin.
The administrator is able to manage food items, categories, users, customer orders, cart records, ratings, and assistance requests. The dashboard provides an overview of important system information and allows administrators to monitor activities occurring within the platform. This helps ensure that the system operates smoothly and efficiently.


4.12 Database Screenshots
The database was implemented using MySQL and managed through phpMyAdmin. Several tables were created to support the functionalities of the system, including users, food items, categories, orders, ratings, carts, and messages.
The database plays an important role in storing and managing system information. Data entered by users is processed by Laravel controllers and stored within the appropriate database tables. The database structure was designed to ensure data consistency and support efficient retrieval of information whenever required by the system.
The screenshots presented in this section demonstrate the successful implementation of the database and provide evidence that user information, food records, orders, ratings, and messages are stored correctly within the application.


5.0 Testing and Results
Testing was conducted to ensure that the IIUMExpress Food Ordering System functioned correctly and met the project requirements. The testing process focused on verifying the performance of all major modules, including user authentication, food menu management, cart operations, order processing, order tracking, ratings and reviews, assistance requests, and administrative management.
Several testing methods were applied throughout the project, including functional testing, database testing, and user acceptance testing. Functional testing was used to verify that each feature produced the expected output, while database testing ensured that information was stored and retrieved accurately from the MySQL database. User acceptance testing was also performed to confirm that the system was easy to use and suitable for real-world usage.
The testing process helped identify and resolve issues related to order management, ratings, category management, and database relationships. After multiple rounds of testing and debugging, all major functionalities operated successfully without critical errors. The following sections present the testing strategy, testing results, and overall system evaluation.






5.1 Testing Strategy
The testing strategy for the IIUMExpress Food Ordering System involved conducting functional testing and user acceptance testing to ensure that all system features operated as expected. Testing was performed throughout the development process to identify and resolve errors before the final deployment stage.
Functional testing focused on verifying individual system modules such as user registration, login, food menu management, cart operations, checkout processing, order tracking, ratings, and assistance requests. User acceptance testing was conducted by simulating actual user activities from both customer and administrator perspectives to ensure that the system was user-friendly and met the project objectives.
Database testing was also performed to verify that information was correctly stored, updated, and retrieved from the MySQL database. This ensured data integrity and consistency across all system modules.







5.2 Functional Testing
Functional testing was carried out to verify that each feature of the IIUMExpress Food Ordering System functioned according to the specified requirements. The testing process focused on validating the input, processing, and output of each module to ensure that users could interact with the system without encountering errors.
The results of the functional testing are shown in table below:
Test Item
Expected Result
Actual Result
Status
User Registration
User account created successfully
Account created and stored in database
Pass
User Login
User gains access to system
Login successful
Pass
Food Search
Matching food items displayed
Search function worked correctly
Pass
Category Filter
Food displayed according to category
Category filtering successful
Pass
Add to Cart
Food item added to cart
Item added successfully
Pass
Update Quantity
Quantity updated correctly
Quantity updated successfully
Pass
Checkout Process
Order generated successfully
Order stored in database
Pass
Order Tracking
Current order status displayed
Status displayed correctly
Pass
Submit Rating
Rating stored successfully
Rating submitted successfully
Pass
Assistance Request
Message stored successfully
Request submitted successfully
Pass



Menu Page:

Cart and Checkout Functionality :




Order Tracking Page:



Rating Submission Feature :







5.3 User Acceptance Testing
User acceptance testing was conducted to evaluate the system from the perspectives of both customers and administrators. The objective was to determine whether the system was easy to use and capable of supporting the intended food ordering process.
For customer testing, users were able to register accounts, browse food items, place orders, track order statuses, submit ratings, and send assistance requests without difficulties. For administrator testing, users were able to manage food items, categories, customer orders, and assistance requests through the administrative dashboard.
The results indicated that all major functionalities operated successfully and met user expectations.
Customer Profile and Order History :

Admin Dashboard:

5.4 Test Cases and Results
The following test cases were performed to validate the functionality of the system. 


Test Case
Expected Result
Actual Result
Status
Register New User
User account created
Successful
Pass
Login User
User dashboard displayed
Successful
Pass
Add Food to Cart
Food added successfully
Successful
Pass
Update Cart Quantity
Quantity updated
Successful
Pass
Complete Checkout
Order created successfully
Successful
Pass
Track Order Status
Order status displayed
Successful
Pass
Submit Rating
Review stored in database
Successful
Pass
Submit Assistance Request
Message stored
Successful
Pass
Add New Category (Admin)
Category created
Successful
Pass
Add New Food Item (Admin)
Food item added
Successful
Pass
Update Order Status (Admin)
Status updated
Successful
Pass






Submit Assistance Request :



Admin Update customer’s order:

Admin can view registered user (registred user also will be inserted automatically in the database):

Add/Edit Food Item:

Edit Existing Food Items:

Update/Add/Edit Food Category:




Admin View Assistance Request:






View Recent Updated Food:


5.5 System Evaluation
Based on the testing results, the IIUMExpress Food Ordering System successfully achieved its intended objectives. All core functionalities were implemented and tested successfully, including user authentication, menu browsing, cart management, checkout processing, order tracking, ratings and reviews, assistance requests, and administrative management.
Database testing confirmed that data was stored and retrieved accurately through the MySQL database, ensuring consistency and integrity across all modules. Overall, the system was found to be stable, functional, and suitable for use as a web-based food ordering platform.

6.0 Challenges and Solutions
During the development of the IIUMExpress Food Ordering System, several challenges were encountered by the project team. These challenges involved technical implementation, database management, user interface design, and team collaboration. Despite these difficulties, appropriate solutions were applied to ensure the successful completion of the project. 
6.1 Challenges Faced During Development
6.1.1 Learning Laravel Framework
One of the major challenges faced by the team was understanding and implementing the Laravel framework. Since Laravel follows the Model-View-Controller (MVC) architecture, team members needed time to understand how routes, controllers, models, migrations, and views interact with each other.
6.1.2 Database Relationship Design
Designing the database structure was another challenge. The system contains multiple entities such as users, food items, categories, orders, payments, notifications, ratings, and messages. Establishing the correct relationships between these tables required careful planning to avoid data redundancy and maintain database integrity.
6.1.3 Authentication and User Roles
Implementing authentication and role-based access control was challenging because the system includes different types of users such as customers, administrators, and food runners. Each role requires different permissions and dashboard functionalities.
6.1.4 Integrating Multiple Modules
The project consists of several interconnected modules including cart management, ordering, payment processing, messaging, notifications, and ratings. Ensuring smooth interaction between these modules while maintaining system performance required significant testing and debugging.
6.1.5 Team Collaboration and Version Control
As a group project, coordinating tasks among team members was sometimes difficult. Different coding styles and simultaneous modifications occasionally caused conflicts during development.
6.2 Solutions Implemented
6.2.1 Utilizing Laravel Documentation
To overcome difficulties in learning Laravel, team members referred extensively to Laravel's official documentation, online tutorials, and course materials. Practical experimentation helped improve understanding of Laravel MVC architecture and application development processes.
6.2.2 Proper Database Planning
The team designed an Entity Relationship Diagram (ERD) before implementation. This planning process helped identify relationships among entities and ensured that the database structure remained organized and efficient.
6.2.3 Role-Based Authentication
Laravel authentication features were implemented to manage login and user access. Different user roles were assigned appropriate permissions to ensure that customers, administrators, and food runners could only access authorized functionalities.
6.2.4 Continuous Testing and Debugging
The system was tested regularly throughout development. Errors related to routing, database queries, authentication, and user interfaces were identified and corrected through debugging sessions. Continuous testing improved system reliability and functionality.
6.2.5 Using GitHub for Collaboration
GitHub was used as a version control platform to facilitate collaboration among team members. The repository enabled code sharing, progress tracking, and conflict resolution while maintaining a backup of the project source code.

6.3 Lessons Learned
This project provided valuable experience in web application development using Laravel. Team members gained practical knowledge in MVC architecture, database management, authentication, CRUD operations, responsive interface design, and collaborative software development. The project also improved communication, teamwork, problem-solving, and project management skills that will be beneficial in future software development projects.
7.0 Conclusion and Future Enhancement
7.1 Conclusion
The IIUMExpress Food Ordering System was successfully developed as a web-based platform that simplifies food ordering and delivery management. The system provides various functionalities including user registration, authentication, food browsing, cart management, order placement, payment processing, notifications, messaging, ratings, and administrative management.
By utilizing Laravel MVC architecture, the application achieves a structured, maintainable, and scalable design. The implementation of CRUD operations, database management, authentication, and responsive user interfaces demonstrates the practical application of concepts learned in the Web Application Development course.
The system benefits customers by providing a convenient and efficient ordering experience. Administrators can manage operations more effectively through a centralized dashboard, while food runners can organize delivery tasks systematically. Overall, the project achieves its objectives by providing a modern solution that improves efficiency, communication, and user satisfaction in food ordering services.

7.2 Future Improvements
Although the current system fulfills its primary objectives, several improvements can be implemented in future versions to enhance functionality and user experience.
Real-Time Order Tracking
A real-time order tracking feature can be added to allow customers to monitor the status of their orders from preparation until delivery completion. This feature would improve transparency and customer satisfaction.
Online Payment Gateway Integration
Future versions can integrate payment gateways such as FPX, DuitNow, and online banking services. This would provide users with more payment options and improve transaction convenience.
Mobile Application Development
Developing Android and iOS mobile applications would increase accessibility and allow users to place orders directly from their smartphones.
AI-Based Food Recommendation System
Artificial Intelligence can be used to recommend food items based on user preferences, previous orders, and popular menu selections. This feature may improve customer engagement and increase sales opportunities.
GPS Delivery Tracking
GPS integration would enable customers to view the real-time location of food runners during delivery. This feature would improve delivery management and reduce customer uncertainty.
Push Notification Support
Push notifications can provide instant updates regarding order confirmation, payment status, promotions, and delivery progress directly on users' devices.
Live Customer Support
A live chat support system can be introduced to allow customers to communicate directly with administrators or customer service representatives whenever assistance is required.
In conclusion, these future enhancements have the potential to transform IIUMExpress into a more advanced, intelligent, and comprehensive food ordering platform that better serves the needs of customers, administrators, and food runners.

8.References
Appendix: GitHub Repository Link: https://github.com/rubiya-bhuiyan/IIUMExpress











