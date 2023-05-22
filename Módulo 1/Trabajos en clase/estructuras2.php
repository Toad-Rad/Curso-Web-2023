<!DOCTYPE html>

<form action="./actividad.php" method="post">
        <label for="valor">Elige un valor entre 1 y 3:</label>
        <input type="text" id="valor" name="valor">
        <br><br>
        <label for="palabras">Elige una palabra:</label>
        <select name="palabras">
                <option value="sus">sus</option>
                <option value="papu">papu</option>
                <option value="krunker">krunker</option>
            </select>
        <button type="submit">Enviar</button>
        <br><br>
    </form>