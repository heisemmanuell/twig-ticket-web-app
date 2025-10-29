# Ticket Web App 🚀

A modern PHP-based ticket management application with user authentication, built using the [Twig](https://twig.symfony.com/) templating engine and [Tailwind CSS](https://tailwindcss.com/) for styling. Features secure authentication, CRUD ticket management, and responsive design.

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

### 1. **PHP** (>= 7.4)

- **Check if installed:** `php --version`
- **Install:**
  - **Ubuntu/Debian:** `sudo apt update && sudo apt install php php-cli php-mbstring`
  - **macOS:** `brew install php`
  - **Windows:** [Download PHP](https://windows.php.net/download/)

### 2. **Composer** (PHP Dependency Manager)

- **Check if installed:** `composer --version`
- **Install:** [getcomposer.org](https://getcomposer.org/download/)
  ```bash
  # Quick install (Linux/macOS):
  curl -sS https://getcomposer.org/installer | php
  sudo mv composer.phar /usr/local/bin/composer
  ```

### 3. **Node.js & npm** (for Tailwind CSS)

- **Check if installed:** `node --version && npm --version`
- **Install:** [nodejs.org](https://nodejs.org/) (LTS version recommended)
  - **Ubuntu/Debian:** `sudo apt install nodejs npm`
  - **macOS:** `brew install node`

---

## 🚀 Quick Start

### 1. Clone & Install Dependencies

```bash
# Clone the repository (or download ZIP)
git clone <your-repo-url>
cd twig-starter-template

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 2. Build Tailwind CSS

```bash
# One-time build
npm run build:css

# Or watch for changes (recommended during development)
npm run watch:css
```

### 3. Start the PHP Development Server

```bash
# Start server from the src directory
php -S localhost:8000 -t src
```

### 4. Open in Browser

Visit [http://localhost:8000](http://localhost:8000) 🎉

---

## 🚀 Usage Guide

### Application Features

#### Authentication System
- **User Registration**: Sign up with name, email, and password
- **Secure Login**: Email/password authentication with validation
- **Session Management**: localStorage-based session handling
- **Route Protection**: Automatic redirects for unauthorized access

#### Ticket Management (CRUD)
- **Create Tickets**: Add new tickets with title, description, status, and priority
- **Read Tickets**: View all tickets with filtering by status
- **Update Tickets**: Edit existing ticket details
- **Delete Tickets**: Remove tickets with confirmation
- **Real-time Statistics**: Dashboard shows ticket counts and metrics

### User Flow
1. **Landing Page** (`/`): Introduction and call-to-action buttons
2. **Sign Up** (`/auth/signup`): Create new account
3. **Login** (`/auth/login`): Authenticate existing users
4. **Dashboard** (`/dashboard`): Overview with statistics and quick actions
5. **Tickets** (`/tickets`): Full CRUD ticket management interface

---

## 🖥️ UI Components & State Structure

### Main UI Components

#### Layout Components
- **Base Template** (`base.twig`): Global layout with max-width container (1400px)
- **Header Navigation**: Responsive nav with mobile menu toggle
- **Footer**: Site footer component

#### Page Components
- **Landing Hero**: Full-screen hero section with CTAs
- **Auth Forms**: Login/signup forms with validation
- **Dashboard Cards**: Statistics display cards
- **Ticket Cards**: Individual ticket display with actions
- **Modal Dialogs**: Create/edit forms and confirmations

#### Interactive Elements
- **Filter Buttons**: Status-based ticket filtering
- **Form Validation**: Real-time inline error messages
- **Toast Notifications**: Success/error feedback
- **Loading States**: Button states during operations

### State Management

#### Client-Side State (localStorage)
```javascript
// User Session
{
  id: "user_id",
  name: "User Name",
  email: "user@example.com"
}

// User Data Storage
ticketapp_users: [
  {
    id: "user_id",
    name: "User Name",
    email: "user@example.com",
    password: "hashed_password"
  }
]

// Ticket Data (per user)
tickets_${userId}: [
  {
    id: "ticket_id",
    title: "Ticket Title",
    description: "Optional description",
    status: "open|in_progress|closed",
    priority: "low|medium|high",
    createdAt: "2025-10-29T12:00:00.000Z",
    updatedAt: "2025-10-29T12:00:00.000Z"
  }
]
```

#### Server-Side State
- **Twig Variables**: Passed from PHP to templates
- **Route-based Rendering**: Different templates based on URL paths
- **Session Validation**: Client-side checks with server-side routing

---

## 🌐 Deployment & Hosting

### Local Development
```bash
# Start development server
php -S localhost:8000 -t src

```
### Online Deployment
🔗: https://twig-ticket-web-app-production.up.railway.app/

---

## ♿ Accessibility & Known Issues

### Accessibility Features
- **Semantic HTML**: Proper heading hierarchy and ARIA labels
- **Keyboard Navigation**: All interactive elements keyboard accessible
- **Color Contrast**: compliant color combinations
- **Screen Reader Support**: Proper form labels and descriptions
- **Focus Management**: Visible focus indicators and logical tab order

### Known Issues & Limitations
- **Browser Storage**: Data stored in localStorage (cleared on browser reset)
- **No Server Persistence**: Tickets not saved server-side (client-only storage)
- **Session Security**: Basic localStorage session (not suitable for production without server-side validation)
- **Mobile Responsiveness**: Tested on modern browsers, may need adjustments for older devices
- **No API Endpoints**: Pure client-side application without REST API

### Browser Compatibility
- **Supported**: Chrome 90+, Firefox 88+, Safari 14+, Edge 90+
- **Not Tested**: Internet Explorer, older mobile browsers

---

## 🧪 Testing & Example Usage

### Example User Credentials
**The application does not include pre-created test users.** Users must register manually through the signup process:

1. Visit `https://twig-ticket-web-app-production.up.railway.app/`
2. Fill out the registration form with:
   - **Name**: Any name (2+ characters)
   - **Email**: Valid email format
   - **Password**: Minimum 6 characters
   - **Confirm Password**: Must match password
3. Submit to create account
4. Use the same credentials to login at `https://twig-ticket-web-app-production.up.railway.app/auth/login`

---

## 🔧 Development Notes

### Code Organization
- **Separation of Concerns**: PHP routing, Twig templating, JavaScript interactivity
- **Modular Components**: Reusable UI components and consistent styling
- **Client-Side Logic**: All ticket management handled via JavaScript and localStorage
- **Responsive Design**: Mobile-first approach with Tailwind CSS utilities

### Security Considerations
- **Client-Side Storage**: Data stored locally (not secure for sensitive information)
- **Input Validation**: Both client and server-side validation recommended for production
- **Session Handling**: Basic implementation - enhance for production use
- **HTTPS Required**: Authentication should always use secure connections

---

## 🏗️ Frameworks & Libraries Used

### Backend
- **PHP 7.4+** - Server-side scripting language
- **Twig 3.x** - Modern templating engine for PHP
- **Composer** - PHP dependency manager

### Frontend
- **Tailwind CSS 4.x** - Utility-first CSS framework
- **PostCSS** - CSS processing tool
- **JavaScript (ES6+)** - Client-side scripting with localStorage API

### Development Tools
- **Node.js & npm** - JavaScript runtime and package manager
- **PostCSS CLI** - CSS build tool

---