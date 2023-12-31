<?php

use JobMarket\Http\Controllers\AdminController;
use JobMarket\Http\Controllers\ApplicationController;
use JobMarket\Http\Controllers\AuthenticationController;
use JobMarket\Http\Controllers\CategoryController;
use JobMarket\Http\Controllers\CompanyController;
use JobMarket\Http\Controllers\DeveloperController;
use JobMarket\Http\Controllers\FavoriteController;
use JobMarket\Http\Controllers\HomeController;
use JobMarket\Http\Controllers\JobController;
use JobMarket\Http\Controllers\LocationController;
use JobMarket\Http\Controllers\NotificationController;
use JobMarket\Http\Controllers\ProfileController;
use JobMarket\Http\Controllers\ReportController;
use JobMarket\Http\Controllers\ReviewController;
use JobMarket\Http\Controllers\SearchController;
use JobMarket\Http\Controllers\SkillController;
use JobMarket\Http\Controllers\StatisticController;
use JobMarket\Http\Controllers\SubscriptionController;

return [
    // testing
    ["GET", "/", [HomeController::class, "index"]], //

    // Retrieve a list of all companies
    ["GET", "/companies", [CompanyController::class, "index"]],

    // Create a new company
    ["POST", "/companies", [CompanyController::class, "store"]],

    // Retrieve a specific company by ID
    ["GET", "/companies/{id:[0-9a-zA-Z]+}", [CompanyController::class, "show"]],

    // Update a specific company by ID
    ["PUT", "/companies/{id:[0-9a-zA-Z]+}", [CompanyController::class, "update"]],

    // Delete a specific company by ID
    ["DELETE", "/companies/{id:[0-9a-zA-Z]+}", [CompanyController::class, "destroy"]],

    // Retrieve a list of all jobs
    ["GET", "/jobs", [JobController::class, "index"]],

    // Create a new job
    ["POST", "/jobs", [JobController::class, "store"]],

    // Retrieve a specific job by ID
    ["GET", "/jobs/{id:[0-9a-zA-Z]+}", [JobController::class, "show"]],

    // Update a specific job by ID
    ["PUT", "/jobs/{id:[0-9a-zA-Z]+}", [JobController::class, "update"]],

    // Delete a specific job by ID
    ["DELETE", "/jobs/{id:[0-9a-zA-Z]+}", [JobController::class, "destroy"]],

    // Retrieve all applications for a specific job
    ["GET", "/jobs/{id:[0-9a-zA-Z]+}/applications", [ApplicationController::class, "index"]],

    // Create a new application for a specific job
    ["POST", "/jobs/{id:[0-9a-zA-Z]+}/applications", [ApplicationController::class, "store"]],

    // Retrieve a specific application by ID
    ["GET", "/applications/{id:[0-9a-zA-Z]+}", [ApplicationController::class, "show"]],

    // Update a specific application by ID
    ["PUT", "/applications/{id:[0-9a-zA-Z]+}", [ApplicationController::class, "update"]],

    // Delete a specific application by ID
    ["DELETE", "/applications/{id:[0-9a-zA-Z]+}", [ApplicationController::class, "destroy"]],

    // Retrieve a list of all developers
    ["GET", "/developers", [DeveloperController::class, "index"]],

    // Create a new developer
    ["POST", "/developers", [DeveloperController::class, "store"]],

    // Retrieve a specific developer by ID
    ["GET", "/developers/{id:[0-9a-zA-Z]+}", [DeveloperController::class, "show"]],

    // Update a specific developer by ID
    ["PUT", "/developers/{id:[0-9a-zA-Z]+}", [DeveloperController::class, "update"]],

    // Delete a specific developer by ID
    ["DELETE", "/developers/{id:[0-9a-zA-Z]+}", [DeveloperController::class, "destroy"]],

    // Register a new user (developer or company)
    ["POST", "/register", [AuthenticationController::class, "register"]],

    // Authenticate a user and obtain an access token
    ["POST", "/login", [AuthenticationController::class, "login"]],

    // Logout the user and invalidate the access token
    ["POST", "/logout", [AuthenticationController::class, "logout"]],

    // Retrieve the user's profile information
    ["GET", "/profile", [ProfileController::class, "index"]],

    // Update the user's profile information
    ["PUT", "/profile", [ProfileController::class, "update"]],

    // Update the user's password
    ["PUT", "/profile/password", [ProfileController::class, "passUpdate"]],

    // Retrieve a list of all available skills
    ["GET", "/skills", [SkillController::class, "index"]],

    // Create a new skill
    ["POST", "/skills", [SkillController::class, "store"]],

    // Retrieve a specific skill by ID
    ["GET", "/skills/{id:[0-9a-zA-Z]+}", [SkillController::class, "show"]],

    // Update a specific skill by ID
    ["PUT", "/skills/{id:[0-9a-zA-Z]+}", [SkillController::class, "update"]],

    // Delete a specific skill by ID
    ["DELETE", "/skills/{id:[0-9a-zA-Z]+}", [SkillController::class, "destroy"]],

    // Retrieve a list of favorited jobs by the user
    ["GET", "/favorites/jobs", [FavoriteController::class, "index"]],

    // Add a job to the user's favorites
    ["POST", "/favorites/jobs/{id:[0-9a-zA-Z]+}", [FavoriteController::class, "store"]],

    // Remove a job from the user's favorites
    ["DELETE", "/favorites/jobs/{id:[0-9a-zA-Z]+}", [FavoriteController::class, "destroy"]],

    // Retrieve a list of saved searches by the user
    ["GET", "/saved-searches", [SearchController::class, "index"]],

    // Save a search with specified criteria
    ["POST", "/saved-searches", [SearchController::class, "store"]],

    // Delete a saved search by ID
    ["DELETE", "/saved-searches/{id:[0-9a-zA-Z]+}", [SearchController::class, "destroy"]],

    // Retrieve a list of all job categories
    ["GET", "/categories", [CategoryController::class, "index"]],

    // Create a new job category
    ["POST", "/categories", [CategoryController::class, "store"]],

    // Retrieve a specific job category by ID
    ["GET", "/categories/{id:[0-9a-zA-Z]+}", [CategoryController::class, "show"]],

    // Update a specific job category by ID
    ["PUT", "/categories/{id:[0-9a-zA-Z]+}", [CategoryController::class, "update"]],

    // Delete a specific job category by ID
    ["DELETE", "/categories/{id:[0-9a-zA-Z]+}", [CategoryController::class, "destory"]],

    // Retrieve a list of all available locations
    ["GET", "/locations", [LocationController::class, "index"]],

    // Create a new location
    ["POST", "/locations", [LocationController::class, "store"]],

    // Retrieve a specific location by ID
    ["GET", "/locations/{id:[0-9a-zA-Z]+}", [LocationController::class, "show"]],

    // Update a specific location by ID
    ["PUT", "/locations/{id:[0-9a-zA-Z]+}", [LocationController::class, "update"]],

    // Delete a specific location by ID
    ["DELETE", "/locations/{id:[0-9a-zA-Z]+}", [LocationController::class, "destroy"]],

    // Retrieve all reviews for a specific company
    ["GET", "/companies/{id:[0-9a-zA-Z]+}/reviews", [ReviewController::class, "index"]],

    // Create a new review for a specific company
    ["POST", "/companies/{id:[0-9a-zA-Z]+}/reviews", [ReviewController::class, "store"]],

    // Retrieve a specific review by ID
    ["GET", "/reviews/{id:[0-9a-zA-Z]+}", [ReviewController::class, "show"]],

    // Update a specific review by ID
    ["PUT", "/reviews/{id:[0-9a-zA-Z]+}", [ReviewController::class, "update"]],

    // Delete a specific review by ID
    ["DELETE", "/reviews/{id:[0-9a-zA-Z]+}", [ReviewController::class, "destroy"]],

    // Retrieve statistical data related to jobs (e.g., total jobs, top categories)
    ["GET", "/statistics/jobs", [StatisticController::class, "jobs"]],

    // Retrieve statistical data related to companies (e.g., total companies, top
    ["GET", "/statistics/companies", [StatisticController::class, "companies"]],

    // Retrieve a list of notifications for the authenticated user
    ["GET", "/notifications", [NotificationController::class, "index"]],

    // Create a new notification for the authenticated user
    ["POST", "/notifications", [NotificationController::class, "store"]],

    // Retrieve a specific notification by ID
    ["GET", "/notifications/{id:[0-9a-zA-Z]+}", [NotificationController::class, "show"]],

    // Update a specific notification by ID
    ["PUT", "/notifications/{id:[0-9a-zA-Z]+}", [NotificationController::class, "update"]],

    // Delete a specific notification by ID
    ["DELETE", "/notifications/{id:[0-9a-zA-Z]+}", [NotificationController::class, "destroy"]],

    // Subscribe to receive notifications for new job postings based on specific criteria
    ["POST", "/subscriptions/jobs", [SubscriptionController::class, "store"]],

    // Unsubscribe from notifications for a specific job subscription
    ["DELETE", "/subscriptions/jobs/{id:[0-9a-zA-Z]+}", [SubscriptionController::class, "destroy"]],

    // Generate a report of job postings based on various criteria (e.g., date range, category)
    ["GET", "/reports/jobs", [ReportController::class, "jobs"]],

    // Generate a report of companies based on various criteria (e.g., location, industry)
    ["GET", "/reports/companies", [ReportController::class, "companies"]],

    // Retrieve a list of all job postings (admin access)
    ["GET", "/admin/jobs", [AdminController::class, "jobs"]],

    // Retrieve a list of all companies (admin access)
    ["GET", "/admin/companies", [AdminController::class, "companies"]],

    // Retrieve a list of all users (admin access)
    ["GET", "/admin/users", [AdminController::class, "users"]],

    // Update a user's profile or permissions (admin access)
    ["PUT", "/admin/users/{id:[0-9a-zA-Z]+}", [AdminController::class, "update"]],

    // Delete a user's account (admin access)
    ["DELETE", "/admin/users/{id:[0-9a-zA-Z]+}", [AdminController::class, "destroy"]]
];
