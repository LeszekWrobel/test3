# test3
Zmiany w wersji:
1.Zmieny przy tworzeniu nowego zamówienia karty produkcji.
  a)pozostały tylko trzy pola obowiązkowe do zapisu nowego zamówienia (KOD, KLIENT, WZÓR).
  b)przycisk zakończenia zamówienia "Zamów" pojawi się dopiero po prawidłowym zapisaniu wprowadzonych do formularza danych poprzez użycie przycisku "Zmień, Przelicz i Zapisz".
  c)program informuje o pustych polach formularza, jednak nie zablokuje dokończenia zamówienia jeśli tylko są wypełnione pola obowiązkowe.
  d)niewypełnione pola obowiązkowe spowodują wyświetlenie komunikatu o konieczności ich wypełnienia.
  e)pola "Nakład" i "Termin" nie są wymagane.
  f)w trakcie tworzenia nowego zamówienia karty produkcji dane są zapisywane do pamięci podręcznej. Użycie przycisku "Edycja karty" z zakładki "Zamówienia" lub "Karty Produkcji" wczyta ponownie zapisane dane do formularza.
  g)pamięć podręczna jest kasowana:
    - po wylogowaniu
    - po ukończeniu procedury zapisu nowego zamówienia karty produkcji
    - po uzyciu przycisku "Czysta karta"
2.Możliwa edycja karty produkcji z listy na każdym etapie produkcji (wszystkie, drukarki, przewijarki, zrealizowane). 
  a)Tak edytowaną kartę można poprawić w każdej pozycji i zapisać zmiany.
  b)Ponieważ edycja karty produkcji odbywa się w identycznym oknie jak przy tworzeniu nowej karty, program powiadamia komunikatem o trybie pracy w edycji.
  c)Procedura zapisu poprawek w edycji jest identyczna jak przy tworzeniu nowej karty produkcji.
