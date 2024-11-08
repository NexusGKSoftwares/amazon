user_panel/
├── app/                             # Core application directory
│   ├── controllers/                 # Controllers for handling user panel logic
│   │   ├── AuthController.php       # Handle user login, registration, and logout
│   │   ├── ProductController.php    # Fetch and display products, handle search and filters
│   │   ├── CartController.php       # Manage cart (add, update, remove items)
│   │   ├── OrderController.php      # Manage orders, view order history, status updates
│   │   ├── WishlistController.php   # Handle wishlist operations
│   │   ├── ProfileController.php    # Manage user profile (update details, password)
│   │   ├── ReviewController.php     # Handle product reviews
│   │   └── NotificationController.php # Manage notifications (email, in-app)
│   ├── models/                      # Data models with SQL interactions
│   │   ├── UserModel.php            # Manage user data (authentication, profile)
│   │   ├── ProductModel.php         # Handle product-related queries
│   │   ├── CartModel.php            # Handle cart data and operations
│   │   ├── OrderModel.php           # Manage orders and transaction details
│   │   ├── WishlistModel.php        # Wishlist data handling
│   │   ├── ReviewModel.php          # Manage product reviews
│   │   └── NotificationModel.php    # Handle notifications for users
│   ├── views/                       # Views (UI templates)
│   │   ├── header.php               # Site header with navigation
│   │   ├── footer.php               # Site footer
│   │   ├── home.php                 # Home page (user dashboard with products and recommendations)
│   │   ├── login.php                # Login page
│   │   ├── register.php             # Registration page
│   │   ├── product_details.php      # Detailed product view page
│   │   ├── cart.php                 # Cart overview and checkout page
│   │   ├── order_history.php        # Order history and status page
│   │   ├── wishlist.php             # Wishlist page
│   │   ├── profile.php              # User profile page (update details)
│   │   ├── review.php               # Product review submission page
│   │   ├── recommendations.php      # Personalized product recommendations
│   │   └── search.php               # Product search results page
│   ├── resources/                   # Common resources (reusable components)
│   │   ├── templates/               # Reusable templates (header, footer, sidebar)
│   │   └── components/              # UI components (product cards, search bar, etc.)
│   ├── config/                      # Application-wide configuration
│   │   ├── database.php             # Database connection and config
│   │   └── app.php                  # General app config (error handling, debugging)
│   └── routes/                      # Routing configuration
│       ├── web.php                  # Routes for user pages
│       └── api.php                  # API routes for AJAX requests
├── public/                          # Public assets (images, CSS, JS)
│   ├── index.php                    # Main entry point, handles routing to appropriate controller
│   ├── assets/                      # Static assets (images, stylesheets, JavaScript)
│   │   ├── css/                     # Stylesheets for the user panel
│   │   ├── js/                      # JavaScript files (dynamic features, form handling)
│   │   └── images/                  # Product images, icons
├── sql/                             # SQL schema and data
│   ├── schema.sql                   # SQL schema (tables and relationships)
│   ├── seed.sql                     # Sample data for users, products, etc.
│   └── migrations/                  # SQL migration files for database updates
├── storage/                         # Temporary files, logs
│   ├── cache/                       # Caching for product data, user sessions
│   └── logs/                        # Logs for debugging and application errors
├── tests/                           # Unit and integration tests
│   ├── Unit/                        # Unit tests for models and controllers
│   └── Integration/                 # Integration tests for user flows (e.g., checkout)
├── vendor/                          # External libraries and dependencies (via Composer)
├── .env                             # Environment variables (DB credentials, API keys)
├── .gitignore                       # Files to ignore in version control
├── composer.json                    # Composer dependencies and configuration
└── README.md                        # Documentation on how to set up, run, and deploy the app
