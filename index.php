<?php 

$faqs = [
    [
        'title' => 'CGUE',
        'question' => '<h2 class="SbNcad">Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?</h2>',

        'answer' => '<p>La recente <a href="http://curia.europa.eu/juris/document/document.jsf?text=&amp;docid=152065&amp;amppageIndex=0&amp;doclang=it&amp;mode=lst&amp;dir=&amp;occ=first&amp;part=1&amp;cid=276332">decisione della Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p><p>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p><p>Per presentare una richiesta di rimozione, compila questo <a href="https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it">modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.</p><p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>'
        ],
    [
        'title' => 'Privacy',
        'question' => '<h2 class="SbNcad">Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>',

        'answer' => '<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p><p>Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p><p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href="https://www.google.com/safetycenter/">Centro Google per la sicurezza online</a>.</p>'
        ],
    [
        'title' => 'Country ass.',
        'question' => '<h2 class="SbNcad">Perché il mio account è associato a un paese?</h2>',

        'answer' => '<p>Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p><ol><li class="smANld">La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:<ol type="a"><li class="smANld">Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li><li class="smANld">Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol></li><li class="smANld">La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li></ol><p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.</p>'
    ],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"> 
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($faqs as $faq) : ?>
        <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo $faq['title'] ?></a>
        </li >
        <?php endforeach ?>
    
      </ul> 
          
    </div>
  </div>
</nav>

    </header>
    <main>
        <div class="container">

            <?php foreach ($faqs as $faq) : ?>
                <?php echo $faq['question'] ?>
                <?php echo $faq['answer'] ?>
            <?php endforeach ?>
            
        </div>

    </main>
    <footer>

    </footer>
</body>
</html>