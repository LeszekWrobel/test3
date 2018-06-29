# test3
Zmiany w wersji z 29-06-18r:
1.Wykrojniki - podgląd kształtu wykrojnika z kolumny kształt.

Zmiany w wersji z 26-06-18r:
1.Zmiany przy tworzeniu nowego zamówienia karty produkcji.
  a)pozostały tylko trzy pola obowiązkowe do zapisu nowego zamówienia (KOD, KLIENT, WZÓR).
  b)przycisk zakończenia zamówienia "Zamów" pojawi się dopiero po prawidłowym zapisaniu wprowadzonych do formularza danych poprzez użycie przycisku "Zmień, Przelicz i Zapisz".
  c)program informuje o pustych polach formularza, jednak nie zablokuje dokończenia zamówienia jeśli tylko są wypełnione pola obowiązkowe.
  d)niewypełnione pola obowiązkowe spowodują wyświetlenie komunikatu o konieczności ich wypełnienia. Należy wówczas powrócić do edycji zamówienia karty produkcji za pomocą przycisku "Edycja karty" w zakładce "Zamówienia" lub "Karty Produkcji".
  e)pola "Nakład" i "Termin" nie są wymagane.
  f)w trakcie tworzenia nowego zamówienia karty produkcji dane są zapisywane do pamięci podręcznej. Użycie przycisku "Edycja karty" z zakładki "Zamówienia" lub "Karty Produkcji" wczyta ponownie zapisane dane do formularza.
  g)pamięć podręczna jest kasowana:
    - po wylogowaniu
    - po ukończeniu procedury zapisu nowego zamówienia karty produkcji
    - po użyciu przycisku "Czysta karta"
2.Możliwy podgląd i edycja zamówienia karty produkcji z listy na każdym etapie produkcji (wszystkie, drukarki, przewijarki, zrealizowane).
  a)Tak edytowane zamówienie karty można poprawić w każdej pozycji i zapisać zmiany.
  b)Ponieważ edycja zamówienia karty produkcji odbywa się w identycznym oknie jak przy tworzeniu nowego zamówienia karty, program powiadamia komunikatem o trybie pracy w edycji "Tryb podglądu i edycji".
  c)Procedura zapisu poprawek w edycji jest identyczna jak przy tworzeniu nowego zamówienia karty produkcji.
