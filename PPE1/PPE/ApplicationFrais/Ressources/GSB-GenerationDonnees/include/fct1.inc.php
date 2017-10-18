<?php
function Decrypter($pdo){
            
            
            
            
            $req = "select * from visiteur";
		$res = $pdo->query($req);
		$lesLignes = $res->fetchAll();
		
		foreach($lesLignes as $unVisiteur){
                    
		
			
			$id = $unVisiteur['id'];
                        
			
                            $mdp=$unVisiteur['mdp'];
                            $mdpc=md5($mdp);
                            $req = "update visiteur set crypter ='$mdpc' where visiteur.id ='$id' ";
                            $pdo->exec($req);
                        
                
}
}
?>
