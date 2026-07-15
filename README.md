# TechFusion 🚀

**TechFusion** is a responsive web application that serves as a technology news, tutorials, and community learning platform. It is designed to provide users with up-to-date tech articles and step-by-step educational content[cite: 9] while offering administrators a robust set of tools for content management[cite: 2].

---

## 🛠️ Features

* **User Authentication:** Supporting both standard users and administrators with session-based access[cite: 2, 9].
* **Dynamic Content Management:**
  * **News & Tutorials:** Read, upload, edit, and delete tech articles and tutorials, complete with image uploads[cite: 2, 7, 8, 9].
  * **Interactive Engagement:** Simple commenting system on news articles[cite: 3].
  * **Interactions:** "Like" functionality to upvote favorite news content[cite: 10].
* **Role-Based Access Control:** 
  * General visitors can read content and navigate the site[cite: 1, 9].
  * Registered users can upload content[cite: 9].
  * Administrators have access to a dedicated **Admin Dashboard** to oversee and moderate all news and tutorials on the site[cite: 2].
* **Modern Interface:** Responsive, styled layouts utilizing modern CSS features (including CSS grid/flexbox cards and glassmorphism elements)[cite: 4, 9].

---

## 💻 Tech Stack

* **Frontend:** HTML5[cite: 1, 2, 4, 7, 8, 9], CSS3[cite: 1, 2, 4, 7, 8, 9] (Custom responsive styles and layouts[cite: 2, 8]), JavaScript[cite: 9] (Client-side enhancements)
* **Backend:** PHP[cite: 2, 3, 5, 6, 7, 8, 9, 10] (Session management[cite: 2, 6, 7, 8, 9] and backend routing)
* **Database:** MySQL via standard extensions (Relational storage for news, tutorials, comments, likes, and users)

---
⚙️ Setup Instructions1. PrerequisitesEnsure you have a local web server environment installed (such as XAMPP, WAMP, or MAMP) which includes Apache, PHP, and MySQL.2. Database InstallationOpen your database manager (such as phpMyAdmin).Create a new database named techfusion.Import or execute the corresponding schema to build your tables (supporting users, news, tutorials, comments, and likes).  3. Local DeploymentMove the techfusion project folder into your server's root directory (e.g., htdocs for XAMPP).Configure your database credentials in php/db.php[cite: 2, 3, 5, 6, 7, 8, 10].Access the application in your browser:Plaintexthttp://localhost/techfusion/index.php
👤 AuthorBisrat Tibebu – Project Author & Full Stack Developer  Development Context: Full Stack Web Development Group Assignment (2026)[cite: 1, 9]

## 📂 Project Structure

```text
techfusion/
│
├── css/
│   └── style.css            # Main stylesheet for layout and components[cite: 1, 2, 4, 7, 8, 9]
│
├── js/
│   └── main.js              # Client-side JavaScript interactions[cite: 9]
│
├── php/
│   └── db.php               # MySQL database connection configuration[cite: 2, 3, 5, 6, 7, 8, 10]
│
├── images/                  # Directory storing uploaded and static images[cite: 7, 8, 9]
│
├── index.php                # Main landing page showing highlights[cite: 1, 2, 4, 9]
├── news.php                 # Page rendering published technology news[cite: 1, 2, 3, 4, 9, 10]
├── tutorials.php            # Page displaying step-by-step tutorials[cite: 1, 2, 4, 6, 9]
├── contact.php              # Contact page with message submission form[cite: 1, 4, 9]
├── about.php                # About the platform and development team[cite: 1, 9]
├── login.php / register.php # User authentication system[cite: 2, 6, 8, 9]
├── logout.php               # Destroys active session[cite: 2, 9]
│
├── admin.php                # Admin Dashboard for full CRUD management[cite: 2, 5, 7, 8, 9]
├── upload.php               # Form for uploading news articles[cite: 2, 9]
├── upload_tutorial.php      # Form for uploading tutorials[cite: 2]
├── edit.php                 # News edit controller and view[cite: 2, 7]
├── edit_tutorial.php        # Tutorial edit controller and view[cite: 2, 8]
├── delete.php               # Deletes a news post[cite: 2, 5]
├── delete_tutorial.php      # Deletes a tutorial post[cite: 2, 6]
│
├── comment.php              # Handle submission of user comments[cite: 3]
└── like.php                 # Handle news article liking mechanism[cite: 10]




