<html>
<body>
<form method='post'>
    <select name='subject[]' multiple size=5>
        <option value='mercedes'>Mercedes</option>
        <option value='ferrari'>Ferrari</option>
        <option value='audi'>Audi</option>
        <option value='ford'>Ford</option>
        <option value='opel'>Opel</option>
    </select>
    <input type='submit' name='submit' value='Click Here'>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: tdilr
 * Date: 27/03/2019
 * Time: 00:51
 */
if (isset($_POST["submit"])) {
    if (isset($_POST["subject"])) {
        foreach ($_POST['subject'] as $subject)
            echo '<img src="img/' . $subject . '.jpg">';
    }
    {
    }
}
?>
</body>
</html>
