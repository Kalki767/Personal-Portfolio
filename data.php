<?php
// Navigation items
$navItems = [
    ['href' => '#about', 'text' => 'About'],
    ['href' => '#skills', 'text' => 'Skills'],
    ['href' => '#projects', 'text' => 'Projects'],
    ['href' => '#contact', 'text' => 'Contact']
];

// Skills data
$programmingLanguages = [
    ['name' => 'Golang', 'level' => 'Advanced', 'icon' => 'bxl-golang', 'color' => '#00ACD7'],
    ['name' => 'Python', 'level' => 'Advanced', 'icon' => 'bxl-python', 'color' => '#FFD43B'],
    ['name' => 'JavaScript', 'level' => 'Intermediate', 'icon' => 'bxl-javascript', 'color' => '#F7DF1E'],
    ['name' => 'Flutter', 'level' => 'Intermediate', 'icon' => 'bxl-flutter', 'color' => '#0468D7']
];

$backendSkills = [
    ['name' => 'PostgreSQL', 'icon' => 'bx-data', 'color' => '#336791'],
    ['name' => 'MongoDB', 'icon' => 'bxl-mongodb', 'color' => '#47A248'],
    ['name' => 'AWS', 'icon' => 'bx-cloud', 'color' => '#FF9900'],
    ['name' => 'RESTful APIs', 'icon' => 'bx-server', 'color' => '#00ADD8']
];

$tools = [
    ['name' => 'Git', 'icon' => 'bxl-git'],
    ['name' => 'Docker', 'icon' => 'bxl-docker'],
    ['name' => 'Kubernetes', 'icon' => 'bxl-kubernetes'],
    ['name' => 'CI/CD', 'icon' => 'bx-terminal'],
    ['name' => 'Firebase', 'icon' => 'bxl-firebase'],
    ['name' => 'Testing', 'icon' => 'bx-test-tube']
];

$projects = [
    [
        'title' => 'E-commerce App',
        'description' => 'A Flutter mobile application for an e-commerce platform. Features include user authentication, product management, cart functionality, and order processing with payment integration.',
        'image' => 'https://images.pexels.com/photos/5632402/pexels-photo-5632402.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'tech' => ['Flutter', 'Firebase', 'Bloc'],
        'github' => 'https://github.com/Kalki767/2024-internship-mobile-tasks/tree/985bd1c62c744dc8e4a42c1512c13bdd6515bc5b/e_commerce_app'
    ],
    [
        'title' => 'Task Management API',
        'description' => 'A RESTful API built with Golang and PostgreSQL that powers task management. Includes features like task creation, due dates, priority levels, notifications, and synchronization across devices.',
        'image' => 'https://images.pexels.com/photos/3243/pen-calendar-to-do-checklist.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'tech' => ['Golang', 'MongoDB', 'JWT'],
        'github' => 'https://github.com/Kalki767/Learning-Go/tree/main/Implementing_Authentication_and_Authorization_with_JWT_tokens'
    ],
    [
        'title' => 'Real-time Chat Service',
        'description' => 'A real-time chat application built with Golang and WebSockets. Features include private messaging, group chats, message encryption, and file sharing with cloud storage integration.',
        'image' => 'https://images.pexels.com/photos/7014766/pexels-photo-7014766.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'tech' => ['Golang', 'WebSockets', 'PostgreSQL', 'JWT'],
        'github' => 'https://github.com/Kalki767/Real-Time-Chat-Application'
    ]
];
?>