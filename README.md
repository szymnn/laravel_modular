## O APLIKACJI

Aplikacja została stworzona na potrzeby rekrutacji
- 
Wykorzystane biblioteki:
- Spatie permissions
- sweet alert 
- FE - Creative Tim styl: Material kit v2

## Pierwsze uruchomienie:

W celu uruchomienia aplikacji poraz pierwszy należy:

- Skonfigurować połączenie bazy danych w ENV
- Wykonać polecenie:: php artisan migrate:fresh --seed --seeder=CreatePermissions
## Działanie

Na sam początek w aplikacji są stworzeni użytkownicy z prawami: Admin, Moderator, User  
- Logowanie administratora:   adm:adm
  - Logowanie Moderatora:mod:mod
  - Logowanie Usera: user:user

Dodatkowo istnieje możliwość stworzenia własnego użytkownika.
W celu rozrywkowo-edukacyjnym powstały również statytyki, użytkownik zbiera tzw. exp za logowanie się oraz dodawnie postów - w tym przypadku tylko moderator i admin
##Podziękowanie
Dziękuję za sprawdzenie aplikacji proszę o informację zwrotną chociażby w postaci codereview
