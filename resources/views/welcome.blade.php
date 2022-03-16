<h1>Töltse ki a mezőket</h1>

@if( session()->has( "success "))
    <h3>{{ session( "success" ) }}</h3>
@endif
 
<form action="store-employee" method="post">
   
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name">
        <br>
    </p>
    <p>
        <label for=""> Város: </label>
        <input type="text" name="city">
        <br>
    </p>
    <p>
        <label for=""> Születés: </label>
        <input type="date" name="date">
    </p>
    <p>
        <label for=""> Fizetés: </label>
        <input type="text" name="salary">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>