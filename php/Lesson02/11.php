
<?php
    $userName = "fanny karlsson";
    $userNameArray = explode(" ", $userName);
    $lastName = $userNameArray[1];
    $firstName = $userNameArray[0];

    $firstnameInitial = substr($firstName, 0, 1);
    $lastnameInitial = substr($lastName,0, 1);
    $firstNameUppercase = ucfirst($firstName);
    $lastNameUppercase = ucfirst($lastName);

    $wovelArray = array("a","e","i","o","u","y","å","ä","ö");
    $nameArray = str_split($userName);
    $wovelCounter = 0;


    echo "<h1>Namnet vi skall analysera är: $userName</h1>";


    if (str_contains($lastName, "son")){
        echo "Det är ett -son-namn ";
        echo "<br />";
    } else {
        echo "Det är inte ett -son-namn ";
        echo "<br />";
    };

    echo "Det har initialerna $firstnameInitial $lastnameInitial";
    echo "<br />";

    echo "$firstNameUppercase $lastNameUppercase ";
    echo "<br />";

    foreach($nameArray as $value){
            if(in_array($value,$wovelArray)){
                $wovelCounter++;
            }
    };
    echo "Det har $wovelCounter vokaler i namnet";

?>