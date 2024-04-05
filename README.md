# Interior Design Project Management Application

This project is a web application developed using the Laravel framework for managing projects,categories and their constituent products. It encompasses three main pages:

- **Projects**: Displays a table listing projects along with their associated products.
- **Products**: Lists all the products, with an option to view detailed information and direct access to each product's details page. Additionally, it shows which project each product is associated with.
- **Categories**: Lists all the categories and their associated products.

## Development

### Requirements
- Laravel Framework
- Bootstrap

### Installation
After cloning the repository, make sure to install the required dependencies using npm:

```bash
npm install
```

### Architecture
The software architecture is based on Laravel with authentication and Bootstrap for styling.

### Master Page
A master page serves as the foundational template for each of the application's pages.

### Database Setup
- Utilizes migrations to create necessary tables (`Projects`, `Products`, `Categories`) and establish relationships.
- Includes a seed file to populate the `Categories` table with predefined records (e.g., Bedroom, Living Room, Kitchen, Bathroom).
- Factory classes are used to generate 100 products and 20 projects, ensuring each project has at least one associated product.

### Pages and Functionality
1. **Project Listing**: Accessible at `/projects`, displays a list of projects.
2. **Category Listing**: Accessible at `/categories`, displays a list of categories.
3. **Product Listing**: Accessible at `/products`, shows all products with associated project information.
4. **CRUD Operations**:
   - Complete CRUD operations are implemented for the `Project`, `Product`, and `Category` models, following Laravel conventions for routes and HTTP verbs.

### Usage
- Ensure proper setup of Laravel environment.
- Run migrations to set up the database schema.
- Seed the database to populate categories.
- Access the application through appropriate routes to manage projects, products, and categories.

## License
This project is licensed under the [MIT License](LICENSE).
