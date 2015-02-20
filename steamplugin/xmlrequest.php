<?php
$url = 'http://steamcommunity.com/groups/gamesgeneral/memberslistxml/?xml=1';
$xml = simplexml_load_file($url, 'SimpleXMLElement', LIBXML_NOCDATA) or die ("error loading xml");

$membercount = $xml->memberCount;
$membersInGame = $xml->groupDetails->membersInGame;
$membersOnline = $xml->groupDetails->membersOnline;
$image = $xml->groupDetails->avatarMedium;
?>

<script>

    var memberCount = <?php echo $membercount ?>;
    var membersInGame = <?php echo $membersInGame ?>;
    var membersOnline = <?php echo $membersOnline ?>;
    var image = '<?php echo $image ?>';
    
    $(document).ready(function(){
        document.getElementById('img').innerHTML="<img src=" + image + "></img>"; 
        
        document.getElementById('members').innerHTML= "<div id=\"numbermembers\">" + memberCount + "</div> <br /> Members"; 
        
        document.getElementById('online').innerHTML= "<div id=\"numberonline\">" + membersOnline + "</div> <br /> Online"; 
        
        document.getElementById('ingame').innerHTML= "<div id=\"numberingame\">" + membersInGame + "</div><br /> In Game"; 
    });

    
    
</script>
