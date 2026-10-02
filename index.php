<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon CV</title>
    <link rel="stylesheet" href="CV.css">
</head>
<body>
    <h1>
        <?php echo "Bienvenue sur mon CV"; ?>
    </h1>
    <nav>
        <a href="index.php?page=presentation">Présentation</a>
        <a href="index.php?page=contact">Contact</a>
        <a href="index.php?page=competence">Compétences</a>
        <a href="index.php?page=formation">Formations et diplômes</a>
        <a href="index.php?page=experience">Expériences</a>
        <a href="index.php?page=langue">Langues</a>
        <a href="index.php?page=centreinteret">Centres d'intérêt</a>
        <a href="CV.html" target="_blank">Mon CV (HTML)</a>
    </nav>
    
    <main>
        <?php $page = isset($_GET["page"]) ? $_GET["page"] : "presentation";
        switch ($page) {
            case "presentation":
                include "pages/presentation.php";
                break;
            case "contact":
                include "pages/contact.php";
                break;
            case "competence":
                include "pages/competence.php";
                break;
            case "formation":
                include "pages/formation.php";
                break;
            case "experience":
                include "pages/experience.php";
                break;
            case "langue":
                include "pages/langue.php";
                break; 
            case "centreinteret": 
                include "pages/centreInteret.php"; 
                break; 
            default:
                echo "<h1>Page introuvable</h1>";
                break;
        }
        ?>
    </main>
</body>
</html>
