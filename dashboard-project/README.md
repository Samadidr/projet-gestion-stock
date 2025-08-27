# Dashboard Project

## Overview
This project is a dashboard application designed to manage products and categories. It provides a user-friendly interface for viewing, editing, and deleting products, as well as visualizing key metrics through charts.

## Project Structure
```
dashboard-project
├── assets
│   ├── css
│   │   └── style.css          # Custom styles for the dashboard
│   ├── js
│   │   ├── main.js            # Main JavaScript functionalities
│   │   └── charts.js          # Chart rendering functionalities
│   └── images                 # Directory for image assets
├── Presentation
│   ├── Produit
│   │   ├── afficherProduits.php  # Displays the list of products
│   │   ├── modifierProduit.php    # Handles product modification
│   │   └── supprimerProduit.php    # Processes product deletion
│   └── Dashboard
│       └── dashboard.php         # Main dashboard interface
├── templates
│   ├── header.php                # Header section of the pages
│   └── footer.php                # Footer section of the pages
├── src
│   ├── Produit.php               # Defines the Produit class
│   └── Categorie.php             # Defines the Categorie class
├── README.md                     # Project documentation
└── index.php                     # Entry point for the application
```

## Features
- **Product Management**: View, edit, and delete products with ease.
- **Category Management**: Manage product categories effectively.
- **Responsive Design**: The dashboard is designed to be responsive and user-friendly.
- **Data Visualization**: Charts are integrated to provide visual insights into product metrics.

## Setup Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Ensure you have a local server environment (e.g., XAMPP, WAMP) set up.
4. Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
5. Access the application via your web browser at `http://localhost/dashboard-project/`.

## Usage
- Navigate to the dashboard to view product metrics and charts.
- Use the product management section to add, edit, or delete products.
- Explore the categories to manage product classifications.

## Technologies Used
- PHP for server-side scripting
- MySQL for database management
- HTML, CSS, and JavaScript for front-end development
- Chart.js for rendering charts

## License
This project is licensed under the MIT License. Feel free to modify and distribute as needed.