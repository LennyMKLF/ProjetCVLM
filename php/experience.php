<?php
$data=yaml_parse_file('data/experience.yaml');

echo "<br>";
echo '<h2 id="titre">'.$data["titre"].'</h2>';
echo "<p id='paragraphe'>".$data['paragraphe']."</p>"; 
echo "<p id='paragraphe'>".$data['paragraphe2']."</p>";
echo "<p id='paragraphe'>".$data['paragraphe3']."</p>";
echo "<p id='paragraphe'>".$data['paragraphe4']."</p>"; 
echo "<br>";
echo '<h2 id="titre">'.$data["titre2"].'</h2>';
echo "<p id='paragraphe2'>".$data['paragraphe5']."</p>";

?>
<br>


<div class="boite2">
        <div class="article2">
            <a  target="_blank" href="https://secnumacademie.gouv.fr/"><img
                    class="carre2" src="img/logo_secnum.png" alt="article2"></a>
            <h1>SecNum Academie</h1>
        </div>
        <div class="article2">
          <img 
                    class="carre2" src="img/op.png" alt="article2"></a>
            <h1>One Piece</h1>
        </div>
        <div class="article2">
            <a target="_blank"
            href="https://www.netacad.com/fr/courses/packet-tracer"><img 
            class="carre2" src="img/Packet.png" alt="article2"></a>
            <h1>Cisco Packet Tracer</h1>
        </div>
    </div>
