# IT Course - Big Final Project Course Application - Manajemen Proyek Perangkat Lunak | UNIKOM

[**Dokumentasi Bahasa Indonesia (Indonesian Documentation)**](/docs/id/README.md)

ITCourse is an online learning platform that leverages applications and technology to teach Programming, A web-based Information and Technology course built with PHP programming language and Laravel framework. This project is aimed for the Big Final Project Assignment of the _Software Project Management_ course with the lecturer Mr. **Irfan Maliki, S.T, M.T., CIPTM**.

## Features

The features contained in this web application are as follows:

-   A login authentication mechanism
-   Student and admin registration
-   CRUD (Create, Read, Update, Delete) capabilities. Admins are authorized to manage teacher data, including creating, updating, and deleting it, as well as deleting student data
-   Students can manage their account information
-   Visitors can send messages through the contact form, which will be managed by the admin.

## Team

-   Akbar Saleh Alfian (Quality assurance)
-   Bagus Perdana Yusuf (UI & UX Designer, Front-end Developer)
-   Raden Fachrul Ramzi Muhammad (UI & UX Designer, Front-end Developer)
-   Robi Nurhidayat (Project Manager, Full-stack Developer)

### Tasks and responsibilities (Akbar)

-   Conducted usability testing to ensure an intuitive and easy-to-navigate interface for users.
-   Tested prototypes to find design flaws before the finished product was constructed and made sure all element interactions were working properly.
-   Determined the specifications and software requirements for development, tailored to meet the needs of clients and users.
-   Logged and analyzed bugs and code errors to enhance functionality and ensure optimal system performance.
-   Tested the created system program and tracked errors in the program code.
-   Filtered and examined user feedback to gain a deep understanding of their needs and concerns, with the goal of enhancing the quality of the services and products provided.
-   Inputted, stored, and updated document data. Ensured all documents were properly stored and secured, and disposed of unnecessary or outdated documents.

### Tasks and responsibilities (Bagus)

-   Designed the user interface and user experience for the web application using the industry-standard tool Figma, ensuring a seamless and visually appealing user experience.
-   Created a variety of color palettes & typography style, wireframes, mock-ups, and prototypes to efficiently convey design concepts.
-   Determined the specifications and software requirements for development, tailored to meet the needs of clients and users.
-   Performed data analysis and acquisition to design an optimized data structure, effectively managing and resolving data-related issues.
-   Developed software and implemented the front-end visual elements of the user interface and user experience for all pages in this system, based on designs created during the software's UI/UX design phase.
-   Performed debugging and testing of application programs to ensure optimal performance.

### Tasks and responsibilities (Raden Fachrul)

-   Designed the user interface and user experience for the web application using the industry-standard tool Figma, ensuring a seamless and visually appealing user experience.
-   Created wireframes, and mock-ups to efficiently convey design concepts.
-   Determined the specifications and software requirements for development, tailored to meet the needs of clients and users.
-   Performed data analysis and acquisition to design an optimized data structure, effectively managing and resolving data-related issues.
-   Designed and developed the software, implementing the front-end visual elements of the user interface and user experience for several pages within this system, based on the UI/UX designs created during the software's design phase.
-   Performed debugging and testing of application programs to ensure optimal performance.

### Tasks and responsibilities (Robi)

-   Led a team of four members, designing and executing a comprehensive project plan in accordance with established budgets, resources, and objectives. Maintained efficient communication among team members and regularly monitored design progress.
-   Conducted frequent design evaluations to ensure adherence to standards and compiled reports to assess final design performance.
-   Led the project planning and execution process, including budget management and proper resource allocation.
-   Offered strategic guidance and support to the team, fostering clear and effective communication among members to ensure the project's success.
-   Monitored and evaluated the progress of the project periodically to ensure compliance with predetermined objectives and timelines.
-   Determined the specifications and requirements for the software under development, performed software development tasks including writing code and handling back-end functionality, and contributed to the visual design of the administration panel's front-end.
-   Performed debugging and testing of application programs to ensure optimal performance.

## Preview

### Figma Design

<https://embed.figma.com/design/UHWZmtqrQPkLTo1km7YPZn/Design?node-id=221-2&embed-host=share>

### Landing Page (Home)

![Landing Page (Home)](/docs/image/landing-page.png)

### About Us

![About Us](/docs/image/about-us.png)

### Contact Us

![Contact Us](/docs/image/contact-us.png)

### Login

![Login](/docs/image/login.png)

### Sign Up

![Sign Up](/docs/image/sign-up.png)

### Login Admin

![Login Admin](/docs/image/admin-login.png)

### Sign Up Admin

![Sign Up Admin](/docs/image/admin-sign-up.png)

### Pricing Plan

![Pricing Plan (Paket Belajar)](/docs/image/pricing-plan.png)

### Payment

![Payment (Paket Belajar)](/docs/image/payment.png)

### Successfull Transaction

![Successfull Transaction](/docs/image/success-transaction-register.png)

### Dashboard User

![Dashboard User](/docs/image/dashboard-user.png)

### User Settings

![User Settings](/docs/image/user-settings.png)

### Admin - Student List

![Admin - Student List](/docs/image/admin-student-list.png)

### Admin - Mentor List

![Admin - Mentor List](/docs/image/admin-mentor.png)

### Admin - Add Mentor Form

![Admin - Add Mentor Form](/docs/image/admin-add-mentor.png)

### Admin - Edit Mentor Form

![Admin - Edit Mentor Form](/docs/image/admin-mentor-edit.png)

### Admin - Transaction List

![Admin - Transaction List](/docs/image/admin-transaction.png)

### Admin - Message List

![Admin - Message List](/docs/image/admin-message-list.png)

## Technology stack & Tools

**This program needs:**

| Tech Stack & Tools | Version |
| ------------------ | ------- |
| AOS CSS            | Latest  |
| Bootstrap CSS      | 4.6.0+  |
| Boxicons           | 2.0.8+  |
| Composer           | 2.2+    |
| Figma              | Latest  |
| GSAP               | 3.7.1+  |
| jQuery             | 3.5.1+  |
| Laravel            | 8.49.0+ |
| MySQL              | 8.0+    |
| PHP                | 7.4+    |
| Git                | 2.20.1+ |
| Draw.io            | Latest  |
| Visual Studio Code | Latest  |
| WAMP / XAMPP       | Latest  |

## Setup

### Install Dependencies

```shell
composer update
npm install
```

### Run Program

```shell
php artisan key:generate
php artisan serve
```
