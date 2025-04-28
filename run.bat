@echo off
:: Batch file to rename .html files to .blade.php

setlocal

:: Loop through all .html files in the current directory
for %%f in (*.html) do (
    :: Rename each .html file to .blade.php
    ren "%%f" "%%~nf.blade.php"
)

echo All .html files have been renamed to .blade.php.

:: Pause to show the result (optional)
pause
endlocal
