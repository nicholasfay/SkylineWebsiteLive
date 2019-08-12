<?php
if(!isset($_POST["submit"]))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

if(IsInjected($visitor_address))
{
    echo "Bad address value!";
    exit;
}

$address_from = "skylalnl@skylinegiantschnauzer.com";
$address_subject = "Puppy Questionnaire";
$address_body = "";
$address_body .= "Name: ".$_POST["name"]."\n\n";
$address_body .= "Address: ".$_POST["address"]."\n\n";
$address_body .= "Email Address: ".$_POST["emailaddress"]."\n\n";
$address_body .= "City: ".$_POST["city"]."\n\n";
$address_body .= "State: ".$_POST["state"]."\n\n";
$address_body .= "Zip: ".$_POST["zip"]."\n\n";
$address_body .= "Country: ".$_POST["country"]."\n\n";
$address_body .= "Phone: ".$_POST["phone"]."\n\n";
$address_body .= "Your work hours: ".$_POST["workHours"]."\n\n";
$address_body .= "Your significant others' work hours: ".$_POST["sigHours"]."\n\n";
$address_body .= "Ages of children: ".$_POST["childAge"]."\n\n";
$address_body .= "Ages of adults: ".$_POST["adultAge"]."\n\n";
$address_body .= "Other Adult(s) in Household and Work Hours: ".$_POST["otherHours"]."\n\n";
$address_body .= "Hobbies and Activities: ".$_POST["hobbies"]."\n\n";
$address_body .= "Pets in household, past experience with pets, what happened to them/where are they now, breeders, and contact information for references: ".$_POST["pets"]."\n\n";
$address_body .= "Check the appropriate box that best describes your pets living quarters: ".$_POST["living"]."\n\n";
if(strcmp($_POST["living"],"Other") == 0){
    $address_body .= "If Other: ".$_POST["ifOther"]."\n\n";
}
$address_body .= "Are you aware that Giants are active and intelligent dogs and require a great deal of training, activity and socialization? ".$_POST["intelli"]."\n\n";
$address_body .= "Are you prepared to commit to this puppy fully in all respects for the dog's entire life (Giants live on average 10-13 years)?".$_POST["commit"]."\n\n";
$address_body .= "Check the appropriate boxes that best describes your plans/goals for your Giant Schnauzer: ";

if(!empty($_POST['goals'])) {
    foreach($_POST['goals'] as $goal) {
            $address_body .= "".$goal." ";
    }
}

$address_body .= "\n\n";

$address_body .= "Where will this puppy/dog reside primarily? ".$_POST["primaryReside"]."\n\n";
$address_body .= "Where will the puppy reside when alone?".$_POST["aloneReside"]."\n\n";
$address_body .= "How many hours a day do you expect the puppy to be alone?".$_POST["aloneHours"]."\n\n";
$address_body .= "Does your schedule have the flexibility to accommodate a puppy? ".$_POST["flexible"]."\n\n";
$address_body .= "Who will be the primary caretaker of the puppy? ".$_POST["primaryCare"]."\n\n";
$address_body .= "Do you have the necessary resources to ensure the best life for your dog?".$_POST["resources"]."\n\n";
$address_body .= "If you can’t keep the dog for any reason, will you return him to the breeder? ".$_POST["cantKeep"]."\n\n";
$address_body .= "Have you ever been a breeder or co-breeder of any litters of puppies? ".$_POST["breeder"]."\n\n";
if(strcmp($_POST["breeder"],"Yes") == 0){
    $address_body .= "If yes, what breeds? ".$_POST["yesBreeds"]."\n\n";
}
$address_body .= "How did you hear about Skyline Giant Schnauzers? ".$_POST["hearAbout"]."\n\n";
$address_body .= "What made you choose a Giant Schnauzer? ".$_POST["chooseSchnauz"]."\n\n";
$address_body .= "Have you owned a Giant Schnauzer before? ".$_POST["ownBefore"]."\n\n";
if(strcmp($_POST["ownBefore"], "Yes") == 0){
    $address_body .= "If Yes, who was the breeder? ".$_POST["whoBreed"]."\n\n";
}
$address_body .= "May I contact them for a reference? ".$_POST["mayContact"]."\n\n";
$address_body .= "Veterinary Reference? ".$_POST["vetRef"]."\n\n";
$address_body .= "Which would you prefer? ".$_POST["puppyGender"]." ".$_POST["puppyAge"]." ".$_POST["puppyEar"]."\n\n";
$address_body .= "Is there an interest in a show quality puppy? ".$_POST["showQual"]."\n\n";
if(strcmp($_POST["showQual"], "Yes") == 0){
    $address_body .= "If you are interested in a show quality puppy, do you have previous show experience? ".$_POST["prevShow"]."\n\n";
    if(strcmp($_POST["prevShow"], "Yes") == 0){
        $address_body .= "If Yes, explain: ".$_POST["prevShowExplain"]."\n\n";
    }
}
$address_body .= "Have you inquired about Puppy kindergarten classes or obedience classes available in your area? ".$_POST["kinder"]."\n\n";
$address_body .= "Are you willing to sign a puppy contract before buying this puppy? ".$_POST["pupContract"]."\n\n";
$address_body .= "Do you understand that a deposit will be required if you passed the interview part in order for us to put you on our puppy waiting list? ".$_POST["interview"]."\n\n";
$address_body .= "Do you also understand that a deposit does not guarantee a puppy, that all puppies will be placed in what we feel is the best suitable home for them as individuals, and that all show homes will be given priority?".$_POST["priority"]."\n\n";
$address_body .= "Your Additional Notes and/or Comments: ".$_POST["additional"]."\n\n";

$to = "skylinefay@aol.com";
$headers = "From: $address_from \r\n";
$headers .= "Reply-To: $visitor_address \r\n";
$spam = $_POST["bot-trap"];
if($spam || !$_POST["state"]){
  echo "Robot detected";
}
else{
  mail($to,$address_subject,$address_body,$headers);
  header("Location: /");
}



// Function to validate against any address injection attempts
function IsInjected($str)
{
  $injections = array("(\n+)",
              "(\r+)",
              "(\t+)",
              "(%0A+)",
              "(%0D+)",
              "(%08+)",
              "(%09+)"
              );
  $inject = join("|", $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>