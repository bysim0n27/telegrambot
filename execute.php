		<?php
		//file necessari ad inviare foto, doc e audio
		require 'class-http-request.php';
		require 'functions.php';
		
		//TokenTelegram
		$api ='1837431022:AAHPSMGhLLRny45mib5-KSVuSXtg8uBPjtk';

		
		
		//prendo quello che mi è arrivato e lo salvo nella variabile content
		$content = file_get_contents("php://input");
		//decodifico quello che mi è arrivato
		$update = json_decode($content, true);
		//se non sono riuscito a decodificarlo mi fermo
		if(!$update)
		{
		  exit;
		}
		//echo "ciao";
        //altrimenti proseguo e vado a leggere il messaggio salvandolo nella variabile 
		//message
		$message = isset($update['message']) ? $update['message'] : "";
		//facciamo la stessa cosa anche per l'id del mess.
		$messageId = isset($message['message_id']) ? $message['message_id'] : "";
		//l'id della chat che servirà al nostro bot per sapere a chi risponder
		$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
		//il nome dell'utente che ha scritto
		$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
		//il cognome
		$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
		//lo username
		$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
		//la data
		$date = isset($message['date']) ? $message['date'] : "";
		//ed il testo del messaggio
		$text = isset($message['text']) ? $message['text'] : "";
        //eliminiamo gli spazi con trim e convertiamo in minuscolo con la funz strtolower
		
		$text = trim($text);
		$text = strtolower($text);
        
		//$text = json_encode($message);
		 //costruiamo la risposta del nostro bot
		 //l'header è sempre uguale ed indica che sarà un messaggio con codifica
		 //JSON
		header("Content-Type: application/json");
		//i parametri sono cosa voglio mandare indietro al mio utente
		$parameters = array('chat_id' => $chatId, "text" => $text);
		
		<?php

if(&text == "ciao"){
    &risp= "benvenuto sulla pagia del bot del IIS8marzo";
    $parameters= array('chat_id' => $risp);

}

if($text == "data)}
    $risp = " la data odierna è:.date("d.m.y");
    &parameters = array('chat_id' => $chatid, "text" => $risp);
}
if(&text == "foto"){
    $foto[0] = "foto.jpg";
    $foto[1] = "foto.jpg";

    $i = rand (0,1);



    sendfoto(&chatId, &foto[$i], false, "descrizione foto",&api);

}

if(&text == "barze"){
    //salvo all'interno del vettore $barze 4 barzelette in posizioni differenti
    &barze[0] = "che cos'è una zebra? un  cavallo evaso dal carcere!";
    &barze[1] = " qual'è il colmo per un tuffatore? fare un buco nell'acqua."
    &barze[2] = "chi la fa la vende, chi la compra non lo usa, chi la usa non la vede, cosa è???? la tomba."
    $barze[3] = "qual è il colmo per un giardiniere? piantare la fidanzata.";
    //genero un numero randoma tra 0 e 3 e lo salvo nella variabile $
    $i = rand(0,3);



    $parameters = array('chat_id" => $chatId, "text" => $barze[&i]);
    ?>
		
		
		//aggiungo il comando di invio
		//e lo invio
		
		$parameters["method"] = "sendMessage";
        echo json_encode($parameters);
		
		
		
		
		
		
		?>
		
		
		
		
		
		

		
		
		
