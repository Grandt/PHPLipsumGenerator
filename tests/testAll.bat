@echo off
SETLOCAL ENABLEDELAYEDEXPANSION

IF EXIST output goto :outputFound
mkdir output
:outputFound

FOR %%A IN (*.php) DO (
	set title=%%~nA
	echo.
	echo ***
	echo *** Running %%A
	php %%~nA.php > output\%%~nA.html
)

