
# Employee Information System


The purpose of this project is to create a simple web application to manage employee information, allowing the user to perform CRUD (Create, Read, Update, Delete) operations, with additional features like pagination and search functionality. <!--Fahim Ahammed Firoz-->

## Features

1. Show all employee records with pagination.
2. Insert, update, and delete an employee record.
3. Search employee information based on **name** and **job title**.
4. Server-side validation on user inputs with proper warning messages for invalid entries.


## Database Schema

The following attributes are used for the `employees` table in the database:

| Column Name | Type            | Remarks             |
|-------------|-----------------|---------------------|
| id          | Primary key      |                     |
| name        | string(255)      |                     |
| job_title   | string(100)      |                     |
| joining_date| date             |                     |
| salary      | float            |                     |
| email       | string(255)      | Optional            |
| mobile_no   | string           |                     |
| address     | text             |                     |

<!--Fahim Ahammed Firoz-->
