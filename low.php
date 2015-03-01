 <?
   //This reverses and then swaps every other char
    function SwapOrder($in){
        $Split = str_split(strrev($in));
        $x=;
        for ($i = 0; $i < count($Split); $i+=2) {
            $x .= $Split[$i+1].$Split[$i];
        } 
        return $x;
    }
    
    //makes the littleEndian
    function littleEndian($value){
        return implode (unpack('H*',pack("V*",$value)));
    }
    
    $version = littleEndian(1);
    $prevBlockHash = SwapOrder('00000000000008a3a41b85b8b29ad444def299fee21793cd8b9e567eab02cd81');
    $rootHash = SwapOrder('2b12fcf1b09288fcaff797d71e950e71ae42b91e8bdb2304758dfcffc2b620e3');
    $time = littleEndian(1305998791);
    $bits =littleEndian( 440711666); 
    $nonce = littleEndian(2504433986); 
   
    //concat it all
    $header_hex = $version . $prevBlockHash . $rootHash . $time . $bits . $nonce;
   
    //convert from hex to binary 
    $header_bin  = hex2bin($header_hex);
     //hash it then convert from hex to binary 
    $pass1 = hex2bin(  hash('sha256', $header_bin )  );
    //Hash it for the seconded time
	echo("hi");
	echo $pass1;

    $pass2 = hash('sha256', $pass1);
    //fix the order
    $FinalHash = SwapOrder($pass2);
 
    echo   $FinalHash;
  ?>
