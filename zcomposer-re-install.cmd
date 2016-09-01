@echo off
mode con:cols=180
@echo off
echo. && @echo - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

echo. && CALL:ECHORED "$ del composer.lock" && echo.
del "composer.lock"

echo. && @echo - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

echo. && CALL:ECHORED "$ del /vendor" && echo.
rmdir "vendor" /s /q

echo. && @echo - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

echo. && CALL:ECHORED "$ composer install" && echo.
composer install

echo. && @echo - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

:ECHORED
%Windir%\System32\WindowsPowerShell\v1.0\Powershell.exe write-host -foregroundcolor Red %1
goto:eof