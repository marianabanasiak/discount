<?php
/*Załóżmy, że piszesz program w PHP, który ma na celu ocenienie, czy osoba jest 
uprawniona do zniżki na bilet w parku rozrywki. Uczeń musi napisać program, 
który akceptuje następujące dane:

    Wiek osoby.
    Płeć osoby (mężczyzna lub kobieta).
    Czy osoba jest uczniem lub studentem (tak lub nie).

Warunki dostępu do zniżki:

    Osoba musi mieć co najmniej 12 lat.
    Dla mężczyzn nie ma specjalnych wymagań dotyczących zniżki.
    Dla kobiet, jeśli mają mniej niż 18 lat, mogą otrzymać zniżkę.
    Jeśli osoba jest uczniem lub studentem, niezależnie od wieku lub płci, 
	otrzymuje zniżkę.

Uczeń musi napisać program, który na podstawie podanych danych określa, 
czy osoba ma prawo do zniżki w parku rozrywki.

To zadanie wymaga użycia instrukcji warunkowych if 
z wieloma warunkami, aby sprawdzić wiek, płeć i status zawodowy osoby 
i na tej podstawie udzielić zniżki lub nie.
*/
	#piszemy warunek, czy wpisana liczba istnieje i jest większa od 0
	if (!empty($_GET['number']) && $_GET['number'] > 0) {
		#piszemy warunek, czy wpisana liczba jest większa od 11 i jest większa od 18 i osoba jest kobietą lub ma status studenta
		if ($_GET['number'] > 11 && $_GET['number'] < 18 && $_GET['people'] =='women' || ($_GET['student'] =='yes')) {
			echo 'Hurra! You can get your discount 10%!';
		#piszemy warunek, czy osoba jest mężczyzną
		} elseif ($_GET['people'] =='men') {
			echo 'Cool! You can get your discount 10%!';
		#wpisujemy elsa, jeli nie spełniasz ifa czy elseifa
		} else {
			echo 'You have no discount';
		}
	#piszemy elsa jeśli nie są spełnione warunki ifa
	} else {
		echo 'Fill all fields correctly';
	}
?>
<html>
	<head>
	</head>
	<body>
		<form method="get" action="index.php">
			<label>Age</label>
			<input type="number" name="number">
			<label>Sex</label>
			<input type="radio" id="women" name="people" value="women">
			<label for="women">Women</label>
			<input type="radio" id="Men" name="people" value="men" checked>
				<label for="men">Men</label>
			<br><label>Are you a student?</label>
			<select name="student">
				  <option value="yes">Yes</option>
				  <option value="No">No</option>
			</select>
			<input type="submit" value="Przelicz">
		</form>
	</body>
</html>