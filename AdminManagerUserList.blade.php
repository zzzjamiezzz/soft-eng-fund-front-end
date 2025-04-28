<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="/css/base.css">
    <link rel="Stylesheet" href="/css/userinterface.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="page">
        <div class="user-sidebar">
            <div class="user-sidebar-top-container">
                    <img src="assets/cat database logo.jpg" class="user-sidebar-logo">
                <div class="user-sidebar-list">
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            Dashboard
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-selected">
                            Manage Users
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            Feedback
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            Admin's Activity History
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            System Setting
                        </div>
                    </a>
                </div>
            </div>
            <div class="user-sidebar-logout">
                Log Out
            </div>
        </div>
        <div class="user-main">
            <div class="user-main-pagetitle-container">
                <p class="user-main-pagetitle-text">
                    Manage User
                </p>
            </div>
            <div class="user-main-content">
                <div class="user-main-content-searchbar-container-for-21rowtable">
                    <form class="user-main-content-searchbar-form">
                            <input type="text" placeholder="Search" class="user-main-content-searchbar-input">
                    </form>
                </div>
                <!-- with create searchbar container -->
                <!-- <div class="user-main-content-searchbar-container-for-21rowtable">
                    <form class="user-main-content-searchbar-form">
                            <input type="text" placeholder="Search" class="user-main-content-searchbar-input">
                    </form>
                    <a>
                        <div class="user-main-content-create-button">
                            Create
                        </div>
                    </a>
                </div> -->
                <table class="user-main-content-21rowtable">
                    <tr class="user-main-content-21rowtable-tablehead admin-manageuserlsit-21rowtable">
                        <th>
                            Email
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                            Last Updated On
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="user-main-content-21rowtable-tabledata admin-manageuserlsit-21rowtable">
                        <td>
                            elson2002@gmail.com
                        </td>
                        <td>
                            Elson Tey
                        </td>
                        <td>
                            Medical Staff
                        </td>
                        <td>
                            2024-12-29 12:30:00
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path d="M4.64099 16.7759C9.02602 7.0314 22.1811 7.0314 26.5661 16.7759" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.6036 21.6482C13.5854 21.6482 11.9494 20.0122 11.9494 17.994C11.9494 15.9759 13.5854 14.3398 15.6036 14.3398C17.6217 14.3398 19.2578 15.9759 19.2578 17.994C19.2578 20.0122 17.6217 21.6482 15.6036 21.6482Z" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                    <path d="M4.12164 26.5205L15.0842 26.5205L26.0468 26.5205" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.3544 8.04061L18.7996 4.5954L24.8287 10.6245L21.3835 14.0697M15.3544 8.04061L8.5252 14.8698C8.29676 15.0982 8.16843 15.4081 8.16843 15.7311L8.16844 21.2557L13.693 21.2557C14.0161 21.2557 14.3259 21.1273 14.5543 20.8989L21.3835 14.0697M15.3544 8.04061L21.3835 14.0697" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path d="M25.3094 11.043L22.8793 24.8635C22.6746 26.0283 21.6627 26.8778 20.4801 26.8778H10.6496C9.46697 26.8778 8.45514 26.0283 8.25033 24.8635L5.82034 11.043" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.5274 7.38861H19.6758M4.60229 7.38861H11.4539M11.4539 7.38861V4.95248C11.4539 3.60705 12.5446 2.51636 13.89 2.51636H17.2397C18.5852 2.51636 19.6758 3.60705 19.6758 4.95248V7.38861M11.4539 7.38861H19.6758" stroke="black" stroke-width="1.8271" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </table>
                <!-- Pagination from simple-bootstrap-5.blade -->
                    <nav role="navigation" aria-label="Pagination Navigation">
                        <ul class="pagination">
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" rel="next">Next</a>
                            </li>
                        </ul>
                    </nav>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>