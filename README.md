# Multi-Vendor Marketplace Platform

## Overview
This project is a full-stack web application built with Laravel, designed to support a scalable multi-vendor marketplace with an integrated post-purchase ticketing system.

The platform is structured for long-term growth, modular expansion, and production deployment, initially focused on digital products with future support for physical goods.

This repository is private and intended for internal development and commercial deployment.

---

## Technical Stack

### Backend
- PHP 8.2+
- Laravel (MVC Architecture)
- Eloquent ORM
- Event & Listener Architecture
- Middleware-based Authorization
- Role-Based Access Control (RBAC)

### Frontend
- Blade Templating Engine
- TailwindCSS
- Vite (Asset Bundling)
- NPM ecosystem

### Database
- MySQL / MariaDB
- Relational schema with normalized structure
- Migration-based version control

### Infrastructure
- Composer (PHP dependency manager)
- Node.js + NPM
- Designed for shared hosting (initially)
- Migration-ready for VPS or dedicated environments

---

## System Architecture

The application follows a clean MVC structure with clear separation of concerns.
```
app/
├── Models
├── Http/
│ ├── Controllers
│ ├── Requests
│ ├── Middleware
├── Services
├── Policies
├── Events
├── Listeners
```

---

## Architectural Principles

- Thin Controllers  
- Business logic isolated in Services  
- Event-driven actions (e.g., OrderCompleted → TicketCreated)  
- Policy-based authorization  
- Modular domain separation  

### Logical Domains
- User Management  
- Marketplace Core  
- Order Processing  
- Ticket System  
- Admin Management  

---

## User Roles & Authorization

The system implements role-based access control.

### Roles

#### Admin
- Full system access
- Manage areas, vendors, and users
- Global ticket visibility
- Marketplace configuration

#### Vendor
- Manage products assigned to their area
- Respond to tickets associated with their area
- View related orders

#### Customer
- Purchase products
- View order history
- Open and track support tickets

Authorization is enforced using:
- Middleware
- Policies
- Role checks at route and controller level

---

## Marketplace Structure

Products are grouped by **Area**.

Each Area:
- Can contain multiple vendors
- Owns multiple products
- Controls ticket visibility for vendors

### Example Structure

```
Area A
├── Vendor 1
├── Vendor 2
└── Vendor 3

Area B
├── Vendor 4
└── Vendor 5
```

---

## Order Flow

1. Customer completes purchase  
2. Order is persisted  
3. OrderCompleted event is dispatched  
4. Ticket is automatically created  

The ticket is linked to:
- Customer
- Area
- Order

Vendors of that area gain access to respond.

This event-driven approach ensures scalability and maintainability.

---

## Ticket System

The ticket system is tightly integrated with marketplace logic.

### Ticket Structure
- Linked to Order
- Linked to Area
- Linked to Customer
- Status-based lifecycle

### Ticket Statuses
- Open
- In Progress
- Resolved
- Closed

Only vendors assigned to the ticket’s area may interact with it.

---

## Authentication System

Supports:
- Traditional Email/Password login
- Email verification enforcement
- Social login (Google & Discord)
- Secure password hashing (bcrypt/argon)

Unverified users have restricted access to certain features.

---

## Database Design (High-Level)

### Core Tables
- users
- roles
- permissions
- areas
- vendors
- products
- orders
- order_items
- tickets
- ticket_messages

### Key Relationships

**User**
- hasMany Orders
- hasMany Tickets

**Area**
- hasMany Vendors
- hasMany Products

**Order**
- belongsTo User
- hasMany OrderItems

**Ticket**
- belongsTo Area
- belongsTo User
- belongsTo Order

---

## Security Considerations

- CSRF protection
- Request validation via Form Requests
- Hashed passwords
- Policy-based access control
- Guard-based authentication
- Secure session management
- Mass assignment protection

---

## Scalability Strategy

The project is structured to allow:
- Migration to VPS
- Queue-based processing
- Cache integration
- API extraction (future REST version)
- Horizontal scaling
- Payment gateway integration
- Modular expansion

The architecture avoids tight coupling between domains.

---

## Deployment Strategy

Designed to support:

**Shared hosting (initial phase)**  
Environment-based configuration via `.env`

### Production optimizations:
- config caching
- route caching
- optimized autoload

### Future-ready for:
- CI/CD pipelines
- Docker containerization
- Reverse proxy setups (Nginx/Apache)

---

## Development Workflow

## Recommended commands:
```bash

composer install
npm install
npm run build
php artisan migrate
php artisan serve
```

## For production:
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
```