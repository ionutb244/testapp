@extends('layouts.app')

@section('content')
    <h1>Description</h1>
    <p>Acest site, dupa cum se poate observa la prima vedere, contine login/register dupa cum a fost cerinta,
    am realizat o mica baza de date pentru utilizatori, atunci cand se vor inregistra ,se va crea o intrare cu datele specificate ,
    astfel incat atunci cand utilizatorul se va loga, datele vor fi preluate din baza de date fara a mai necesita inregistrarea.
    Mai departe m-am gandit sa fac o aplicatie unde ultilizatorii dupa logare pot face urmatoarele operatii :
    </p>
    <br>
    <p> - adaugare/editare/stergere postare </p>
    <p> - vizualizare postari (atat cele proprii cat si cele ale altor useri)</p>
    <p> - un utlizitator nu are posibilitatea de a sterge/modifica postarile ce apartin altor utilizatori </p>
    <p> - postarile pot contine imagini alese de catre utilizator </p>
    <br>
    <p> Voi incerca sa fiu cat mai scurt si explicit aici in ce consta codul din spate. <p>
        <p>Pentru inceput , bara de navigare prin care putem comunica cu celelalte pagini, am creat un view pentru bara de navigare denumit navbar
          ce contine numele aplicatiei, paginile cate description, services, blog , home si in partea dreapta sus link-urile pentru login
          si register. Pentru pagina description , pagina in care introduc acum acest text pur si simplu e o pagina ce contine doar aceste detalii despre
          aplicatie. Pagina Services contine un tablou de elemente si grupate. Pentru toate acestea am creat un PageController cu functiile acestor pagini 
          care returneaza view-ul specific fiecarei pagini.
        </p>
    <p> Pentru baza de date am folosit xampp, am folosit comenzi in composer pentru a creea o tabela si apoi a migra acea tabela in phpmyadmin.
        Am creat tabela pentru postari si utilizatori. Pentru postari am creat 4 view-uri si anume : index, create , edit, show si bineinteles un controller pentru postari.
        Pentru baza de date am preluat/introdus date prin numele coloanei respective unde dorim sa introducem date.
    </p>
    <p> Am creat un layout numit app pentru a nu mai rescrie din nou bucatile lungi de cod repetitive pentru pagini. Am creat un folder ce include
        bara de navigare si mesajele de succes/erorr atunci cand se adauga o postare. In routes/web.php am setat rutele paginilor create. Laravel include
        metoda de logare/inregistrare.
    </p>
    <p> Cam asta contine codul din spate, pentru mai multe detalii puteti sa aruncati o privire pe codul din spate.</p>
    <h2> This is the end of description! </h2>

@endsection