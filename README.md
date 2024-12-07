# GasFinder - LP Gas Cylinder Tracking Application
![Screenshot (176)](https://github.com/user-attachments/assets/3c984d2f-4d88-4846-94fc-3812126d2ae1)

GasFinder is a web-based application designed to help customers find LP gas cylinders from local shops in Sri Lanka. The application provides real-time inventory tracking and an interactive map interface to locate nearby gas shops.

## Features

- **Interactive Map Interface**

  - Real-time visualization of gas shops
  - Click markers to view shop details
  - Responsive map that adjusts to search results

- **Shop Search**
  - Real-time shop name search with autocomplete
  - Display shop details including:
    - Shop name and owner
    - Current gas cylinder inventory
    - Contact information
    - Complete address

- **Shop Management**
  - Secure shop registration and login
  - Inventory management dashboard
  - Profile management
  - Real-time inventory updates

## Technologies Used

- **Frontend**
  - HTML5
  - CSS3 (Bootstrap 5)
  - JavaScript
  - jQuery & jQuery UI
  - Google Maps JavaScript API

- **Backend**
  - PHP
  - MySQL/MariaDB
  - XAMPP Server

## Prerequisites

- XAMPP (with PHP 7.4 or higher)
- MySQL/MariaDB
- Web Browser (Chrome/Firefox/Safari)
- Internet connection (for Google Maps)

## Installation

1. **Clone the Repository**
   ```
   git clone [repository-url]
   ```

2. **Database Setup**
   - Create a new database named 'gascount'
   - Import the dummy_data.sql file:
     ```
     mysql -u root gascount < dummy_data.sql
     ```

3. **Configuration**
   - Update config.php with your database credentials
   - Ensure your Google Maps API key is set in the relevant files

4. **Web Server**
   - Place the project in your XAMPP's htdocs directory
   - Start Apache and MySQL services
   - Access the application at: http://localhost/gascount

## Project Structure

```
gascount/
├── api/                    # API endpoints
│   ├── search_shops.php
│   ├── get_shop_suggestions.php
│   └── get_all_shops.php
├── css/                    # Stylesheets
│   └── style.css
├── js/                     # JavaScript files
│   ├── main.js
│   └── register.js
├── config.php             # Database configuration
├── index.php              # Main application page
├── shop_register.php      # Shop registration page
├── shop_login.php         # Shop login page
├── dashboard.php          # Shop dashboard
└── dummy_data.sql         # Sample database data
```

## Test Accounts

You can use any of these test accounts to log in:

- Email: sampath@email.com (or any email from dummy_data.sql)
- Password: 123

## API Documentation

### Search Shops
- Endpoint: `/api/search_shops.php`
- Method: GET
- Parameters: `query` (shop name)

### Get Shop Suggestions
- Endpoint: `/api/get_shop_suggestions.php`
- Method: GET
- Parameters: `term` (partial shop name)

### Get All Shops
- Endpoint: `/api/get_all_shops.php`
- Method: GET
- No parameters required

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## Security Considerations

- All passwords are hashed using PHP's password_hash()
- SQL injection prevention using prepared statements
- XSS protection
- CSRF protection for forms
- Secure session management

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- Google Maps JavaScript API
- Bootstrap Team
- jQuery Team
- XAMPP Development Team
