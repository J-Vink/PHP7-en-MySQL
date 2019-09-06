# 5.1: meerkeuzevragen
1. Waar staat de afkorting PHP voor?
  - a. Hypertext PreProcessor
2. Hoe kun je met PHP tekst weergeven?
  - a. echo "Hier de tekst";
3. Met welke schrijfwijze plaats je commentaar in een PHP-script?
  - d. // hier het commentaar
4. Met welk teken begint een variabele?
  - b. $-teken
5. Wat is de output van de volgende code?
  - a. Hoi ik ben Scott
6. Wat voor functie heeft de backslash (\\) in een string?
  - a. Escapen van 'verboden' karakters
7. Hoeveel regels mag een PHP-script maximaal hebben?
  - e. Dit is niet vastgesteld.
8. Welke uitspraak is juist?
  - a. Met PHP kun je HTML-code echoën.

# 5.2: Logica opdrachten
1. Wat is het antwoord van de volgende code? (Stel dat $x = 1)
  - a. ($x > 5) = true
  - b. ($x > 0) && ($x < 10) = true
  - c. ($x != 1) || ($x <= 1) = true
  - d. ($x >= 2) && ($x <= 1) = false
  - e. ($x > 1) && ($x < 10) = false
  - f. ($x > 0) || ($x < 0) = true
  - g. ($x != 0) || ($x > 200) = true
  - h. ($x != 1) && ($x <= 10) = false

2. Wat is het antwoord van de volgende code? (Stel dat $a = 1 en $b = 1.0)
  - a. $a = 5 + 5 * 2 - -$a = 16
  - b. $a = 4 + 1 + 4 * 5 - (+$a + 1) = 23
  - c. $b += 1.5 * 3 + ($b + 1) = 7.5
  - d. $b -= 3 / 1.5 + ($b + 1) = -3
  - e. $b \*= 2.5 * 6 / 5 + ($b + $b) = 5

3. Welk van de volgende codefragmenten zijn qua werking identiek?
  - a en c zijn identiek qua werking.

4. Zijn de volgende twee codefagmenten gelijk?
  - De codefragmenten zijn niet gelijk, in de laatste regel vindt de vermenigvuldiging op een ander moment plaats wat resulteert in een iets andere uitkomst.

5. Wat is de waarde van de variabele $y als het volgende codefragment wordt uitgevoerd?
  - $y = 2, omdat er zich geen break statements bevinden na elke case.

6. Herschrijf de volgende coderegels door geen gebruik te maken van if-else statements maar een switch.
  - $x = 1;
  - $y = 0;
  - switch(true){
  - case ($x == 1):
  -   $y += 5;
  -   break;
  - case ($x == 2):
  -   $y += 10;
  -   break;
  - case ($x == 3):
  -   $y += 15;
  -   break;
  - case ($x == 4):
  -   $y += 20;
  -   break;
  - case ($x == 5):
  -   $y += 25;
  -   break;
  - default:
  -   $y += 0;
  -   break;
  - }

7. Bekijk de volgende twee code voorbeelden. Hoeveel keer wordt de code in de loop uitgevoerd? En wat is de uitvoer?
  - a. De code wordt 0 keer uitgevoerd omdat het al lager dan 10 is. Tevens is hier geen uitvoer.
  - b. De code wordt 9 keer uitgevoerd, en de uitkomst is 13579

8. Herschrijf de volgende coderegels door geen gebruik te maken van een for-loop maar door gebruik te maken van een while-loop.
  - $optelling = 0;
  - while($optelling <= 1000){
  -   $optelling += 1;
  - }

9. Herschrijf de volgende coderegels door geen gebruik te maken van een while-loop maar door gebruik te maken van een for-loop.
  - $saldo = 0;
  - for($x = 1; $saldo < 10000; $x++){
  -   $saldo += $x;
  - }

## 5.3: Verdiepingsopdrachten
1. Het getal e
  - [x] a. Maak een script dat het getal e kan benaderen.
  - b. Voor welke waarde n wordt het getal e op 7 decimalen nauwkeurig benaderd?
    - Het getal 103376074 benadert e correct tot de 7e decimaal.

2. Opdracht 2: het getal pi
  - [x] a. Maak een script dat de waarde van pi weergeeft als i (de noemer) 10.000 is
  - [x] b. Doe dit ook voor i = 100.000

3. Opdracht 3: Een patroon
  - [x] a. Maak een script dat als uitvoer dit patroon heeft.

4. Opdracht 4: De driehoek van Pascal
