<?php
$dict = array("I","have"," become ","so"," numb"," I"," can"," not"," feel"," you"," there",
	"Become"," so"," tired"," so ","much"," more"," aware",
	"I"," am ","becoming"," this"," all"," I ","want"," to"," do","Is"," be"," more"," like"," me"," and ","be ","less ","like ","you","
Can"," not ","you"," see"," that ","you"," are ","smothering"," me","
Holding ","too ","tightly ","afraid"," to ","lose"," control","
Cause"," everything"," that"," you ","thought"," I"," would"," be","
Has ","fallen"," apart"," right"," in"," front"," of ","you","
Caught ","in"," the"," undertow"," just"," caught"," in"," the"," undertow","
Every"," step"," that"," I"," take"," is"," another"," mistake"," to"," you","
Caught ","in"," the"," undertow"," just"," caught"," in"," the"," undertow","
And ","every"," second"," I"," waste"," is"," more"," than"," I"," can"," take","
I ","have"," become"," so"," numb"," I"," can"," not"," feel"," you"," there","
Become"," so"," tired"," so"," much"," more"," aware","
I ","am"," becoming"," this"," all"," I"," want"," to"," do","
Is"," be"," more"," like"," me"," and"," be"," less"," like"," you","
And"," I"," know","I ","may"," end"," up"," failing"," too","
But ","I"," know","
You ","were"," just"," like"," me"," with"," someone"," disappointed"," in"," you","
I"," have"," become"," so"," numb"," I"," can"," not"," feel"," you"," there","
Become"," so"," tired"," so"," much"," more"," aware","
I ","am"," becoming"," this"," all"," I"," want"," to"," do","
Is ","be"," more"," like"," me"," and"," be"," less"," like"," you","
I"," have"," become"," so"," numb"," I"," can"," not ","feel"," you"," there","
I"," am"," tired"," of"," being"," what"," you"," want"," me"," to"," be","
I"," have"," become"," so"," numb"," I"," can"," not"," feel"," you"," there","
I"," am"," tired"," of"," being"," what"," you"," want"," me"," to"," be");

for ($i = 0; $i < count($dict); ++$i) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"http://127.0.0.1/d4rk/lupa/lupa.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS,"cek=$dict[$i]");
    echo $dict[$i];
    curl_exec ($curl);
    curl_close ($curl);
}


?>
