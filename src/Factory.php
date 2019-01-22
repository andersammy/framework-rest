<?php

class Factory{

    /*Bug conhecido: Se o parâmetro da classe a ser instaciado é um array,
      temos que passá-lo dentre de outro array.
      Ex. loadClass('app','ControlllerPadrao',array($_GET));
    */

	public static function loadClass($sPath, $sClasse, $aArguments = null){
		if(!class_exists($sClasse)){
			$sFile = 'src/' . $sPath .'/'. $sClasse .'.php';
			if(!file_exists($sFile)){
				throw new Exception("Arquivo não existe!", 1);
			}
			require $sFile;
		}
        if (!isset($aArguments)){
        	return new $sClasse;
        }
        if (is_array($aArguments)) {
    		switch (count($aArguments)) {    			
                case 1:
                    return new $sClasse($aArguments[0]);
                    break;
    			case 2:
    			    return new $sClasse($aArguments[0],$aArguments[1]);
    				break;        			
    			case 3:
    				return new $sClasse($aArguments[0],$aArguments[1],$aArguments[2]);
                    break;
    			default:        				
    				break;
    		}
    		throw new Exception("Não foi possível instanciar o objeto", 1);
        } else {
            return new $sClasse($aArguments);
        }
        
	}
	
}

?>