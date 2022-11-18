  <?php
if ($_POST["personalnummer"] === "11257967" & $_POST["passwort"] === "1234") {
  session_start();
        $_SESSION["vname"] = "André";
        $_SESSION["nname"] = "Müller";
        $_SESSION["dienstgrad"] = "HptFw";
        $_SESSION["personalnummer"] = 11257967;
        $_SESSION["rolle"] = "Admin";
  header('Location: seite_1.php');
  exit;
}
elseif ($_POST["personalnummer"] === "99999999" & $_POST["passwort"] === "9999") {
  session_start();
        $_SESSION["vname"] = "Achim";
        $_SESSION["nname"] = "Dr. med. Brown";
        $_SESSION["dienstgrad"] = "OStArzt";
        $_SESSION["personalnummer"] = 99999999;
        $_SESSION["rolle"] = "Arzt";
  header('Location: arzt.php');
  exit;
}

?>
