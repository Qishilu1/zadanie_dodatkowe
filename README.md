# zadanie_dodatkowe
 
Zadanie: Tworzenie Systemu ERP z Zarządzaniem Pracownikami w
HTML, PHP oraz MySQL
Twórcy zadania: Karol Lach, Karol Madej
Część 1: Tworzenie Struktury HTML
1. Stwórz stronę HTML z formularzami do dodawania produktów, klientów
pracowników.
oraz
2. Na stronie dodaj również sekcje do przeglądania produktów, klientówi
pracowników.
Część 2: Tworzenie Bazy Danych
1. Utwórz bazę danych o nazwie ERPDatabase.
W bazie danych utworz pięć tabel:
Products zawierającą informacje o produktach (np. ID, nazwa, opis, cena,
dostępność itp.).
Customers zawierającą dane klientów (np. ID, imię, nazwisko, adres, e-mail
itp.).
Orders zawierającą informacje o zamówieniach (np. ID zamówienia, data
zamówienia, klient, produkt itp.).
Employees zawierającą dane pracowników (np. ID, imię, nazwisko,
stanowisko, wynagrodzenie itp.).
EmployeeActions zawierającą informacje 0 akcjach pracowników na
produktach iklientach (np. ID akcji, ID pracownika, typ akcji, ID
produktu/klienta itp.).
Pamiętaj, aby odpowiednio dobrać typy danych dla kazdej kolumny.
3. Wypelnij tabele przykładowymi danymi.
Część 3: Tworzenie PHP Backend
1. Stwórz pliki PHP do obstugi formularzy oraz przetwarzania danych:
add_product.php dla dodawania produktu.
edit_product.php dla edycji produktu.
delete_product.php dla usuwania produktu.
add_customer.php dla dodawania klienta.
edit_customer.php dla edycji klienta.
delete_customer.php dla usuwania klienta.
view_products.phpdla przeglądania produktów.
view_customers.php dla przeglądania klientów.
add_employee.php dla dodawania pracownika.
view_history.php_ dla przeglądania historii akcji pracowników.
Część 4: Implementacja Akcji Pracownika
1. W plikach PHP obsługujących akcje pracownika (np. add -product.php,
add_customer.php), dodaj kod, który będzie zapisywał akcje pracownika w tabeli
EmployeeActions.
Część 5: Logowanie i Rejestracja Klienta
1. Stwórz stronę logowania rejestracji dla klienta w HTML.
2. Dodaj formularze logowania i rejestraçji oraz ich obstuge w plikach PHP
(login.php i register.php).
3. Po zalogowaniu klienta, umozliw mu składanie zamówień.
