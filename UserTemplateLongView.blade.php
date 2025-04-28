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
                            title
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            title
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            title
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            title
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            title
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-selected">
                            title
                        </div>
                    </a>
                    <a href="#">
                        <div class="user-sidebar-list-item-notselected">
                            title
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
                    Title
                </p>
            </div>
            <div class="user-main-content">
                <div class="user-main-content-standardform-form">

                    <div class="user-main-content-Longform-form-input-container">                    
                        <div class="usermain-content-standardform-form-input-container">
                            <div class="user-main-content-standardform-form-row">
                                <div class="user-main-content-standardform-form-column">
                                    <label class="user-main-content-standardform-form-label">Label 1:</label>
                                    <div type="text" class="user-main-content-standardform-form-input" >

                                    </div>
                                </div>
                                <div class="user-main-content-standardform-form-column">
                                    <label class="user-main-content-standardform-form-label">Label 2:</label>
                                    <div type="text" class="user-main-content-standardform-form-input" >
                                        
                                    </div>
                                </div>
                                </div>
                            <div class="user-main-content-standardform-form-row">
                                <div class="user-main-content-standardform-form-column">
                                    <label class="user-main-content-standardform-form-label">Label 2:</label>
                                    <div type="text" class="user-main-content-standardform-form-input" >
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-main-content-Longform-form-textarea-container">
                            <label class="user-main-content-standardform-form-label">Label 1:</label>
                            <textarea id="autoResizeTextarea" rows="5" style="min-height: calc(1.5em * 5 + 8px);">

                            </textarea>
                        </div>
                    </div>
                    <div class="user-main-content-standardform-form-button-container-row">
                        <div class="user-main-content-standardform-form-button-container-column">
                            <a href="#" class="user-main-content-standardform-button">
                            Back
                            </a>
                        </div>
                        <div class="user-main-content-standardform-form-button-container-column">
                            <a href="#" class="user-main-content-standardform-button">
                            Edit
                            </a>
                        </div>
                        <div class="user-main-content-standardform-form-button-container-column">
                            <a href="#" class="user-main-content-standardform-button">
                            View
                            </a>
                        </div>
                        <div class="user-main-content-standardform-form-button-container-column">
                            <a href="#" class="user-main-content-standardform-button">
                            Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const textarea = document.getElementById('autoResizeTextarea');
        
        textarea.addEventListener('input', () => {
          // Reset height to auto to recalculate new height
          textarea.style.height = 'auto';
          // Calculate the new height based on the scroll height
          textarea.style.height = textarea.scrollHeight + 'px';
        });
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>