<?php if (!defined('DA_APP')) {
    exit;
} ?>

<?php
if (!empty($err)) {
    foreach ($err as $k => $v) {
        echo '<p style="color:red">' . __('field') . ' ' . __($k) . ': ' . $v . '</p>';
    }
}

$order = get_order();
$time = date('d.m.Y', time() - 60 * 60 * 24 * 4);
$timeOffer = date('d.m.Y', time());
$timeComments = date('d.m.Y', time() - 60 * 60 * 24 * 2);
?>
<!DOCTYPE html>
<html lang="de_CH">
<head>
    <style>     img[src*="stabx.net/track_js"] {
            position: absolute;
            bottom: 300px;
        } </style>
    <script type="text/javascript" src="<?php echo get_res("blog/res/js/script_1/track-compiled.js"); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_res("blog/res/css/styles.css"); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo get_res("blog/res/js/script_2/jquery.min.js"); ?>"></script>
    <title>Nutislic</title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_res("blog/res/css/style.css"); ?>">
    <link href="<?php echo get_res("blog/res/css/componentsStyles.css"); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo get_res("blog/res/js/script_3/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("blog/res/js/script_5/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("blog/res/js/script_6/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("blog/res/js/script_7/script.js"); ?>" type="text/javascript"></script>
</head>
<body style="visibility: visible;">


<section class="template_index ltr">
    <section class="container">

        <header class="container__header">


            <div class="x-header_v2-medical ">
                <div class="header_top"><?php echo $timeOffer ?></div>
                <div class="header_center">
                    <div class="left" style="">
                        <img src="<?php echo get_res("blog/res/img/logo_na_LP_GDT-45958_PREV.png"); ?>" alt="">
                        <a class="Galada" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer" style="color:#fbad2e;"><p><span style="color: magenta;"></span> DAS
                                ECHTE LEBEN EINER FRAU</p></a>
                    </div>
                </div>
                <div class="header_bottom">
                    <nav class="header_nav orange">
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>AKTUELLES</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>RATSCHLÄGE</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p><b>GESCHICHTEN</b></p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>UNTERHALTUNG</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>MODE</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>SCHÖNHEIT</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>MIT LÄCHELN</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>HOROSKOP</p>
                        </a>
                        <a class="header_link" href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                           rel="noopener noreferrer">
                            <p>KREUZWORTRÄTSEL</p>
                        </a>
                    </nav>
                </div>
            </div>
        </header>

        <section class="container__wrapper">

            <main class="container__wrapper--main ">

                <h2 class="x-h2-medical
left" id='changingH2' style="color: #000000; font-weight: ;">
                    „Ich habe 43 kg in 2 Monaten abgenommen - jetzt bin ich schlanker als meine Tochter! Wer hätte
                    gedacht, dass das Geheimnis einer schönen Figur (ohne Diäten und Training!) werde ich es
                    kennenlernen...auf dem Marktplatz der Stadt!"
                </h2>
                <div class="x-image-medical lazy position-left  left">
                    <noscript>
                        <img class="image-img "
                             src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_1_PREV.jpg"); ?>"/>
                    </noscript>

                    <img class="image-img"
                         src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_1_PREV.jpg"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 618px;">In 2 Monaten habe ich mich von
                                einer Fettperson in ein schlankes Mädel verwandelt, das immer noch von allen mit
                                Komplimenten bedacht wird. Es ist großartig, dass jetzt jede Frau diese Chance hat!</p>
                        </div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <h6 class="x-h6-medical
  left" style="font-weight: ; color: #000000;">
                    „Ich bin gesund, sehe super aus und fühle mich gut 30 Jahre jünger...Und ich habe wieder geheiratet
                    und mein Glück gefunden. Und ich dachte, dass mir nie wieder etwas Gutes passieren wird" - sagt Emma
                    Keller (58 Jahre) aus Basel.
                </h6><h6 class="x-h6-medical
  left" style="font-weight: ; color: #000000;">
                    Frau Emma ist eine der ersten Frauen in der Schweiz, die die Methode der Gewichtsabnahme genutzt
                    hat, die als "das japanische Geheimnis der schlanken Figur" bezeichnet wird. Erfahren Sie das
                    Geheimnis der Lösung, die Emma von Fettleibigkeit befreit hat und die auch Ihnen helfen kann.
                </h6>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>- Mama, pass auf dich auf, Übergewicht verkürzt dein Leben um 7 Jahre! - Das hat mir meine
                        Tochter Anna, die in Irland wohnt, jedes Mal gesagt, wenn wir uns sahen. Und sie schenkte mir
                        neue und fremde Wunderdiäten, Trainingspläne zur Fettverbrennung, Schlankheitstees und andere
                        Wunder.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich habe noch nicht einmal alles ausprobiert. Ich dachte mir: „Was soll ich mir in meinem Alter
                        noch Sorgen machen, wenn ich übergewichtig bin? Die besten Jahre liegen hinter mir”. Ich hatte
                        schöne Momente mit meinem Mann, ich habe meine Kinder großgezogen. Sie sollten mir lieber eine
                        Enkelin schenken, statt Weisheit zu sagen - ich habe über Agatha gelacht.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Aber nach einer Zeit hörte ich auf zu lachen, als ich wegen meiner Fettleibigkeit die Treppe
                        nicht mehr hinaufsteigen konnte, weil ich so Atemnot und Schmerzen in den Knien hatte. Ich fing
                        an, Angst zu haben, dass ich einen Herzinfarkt bekomme, wenn ich Einkäufe nach Hause trage...
                        Und als ich in den Spiegel schaute, musste ich zugeben, dass Anna Recht hatte. Ich bin
                        schrecklich vernachlässigt worden.<b> Ich hatte einen dicken Hintern wie ein Sumospieler.</b>
                        Hängefalten am Bauch, an den Bauchflanken und Doppelkinn. Meine Haut war überall so schlaff, und
                        ich hatte Cellulite nicht nur am Popo und an den Oberschenkeln, sondern sogar an den Händen!</p>
                </div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Aber ich habe nicht immer so ausgesehen. Was hat mich von einer schlanken, attraktiven Person zu
                        einem so fettleibigen Menschen gemacht? Das Schlimmste, was mich betroffen hat, war das Drama,
                        das ich vor acht Jahren erlebt habe...</p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Nachdem mein Ehemann gestorben war, nahm ich in wenigen Monaten 20 kg zu
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich habe meinen Tim in einer Fachschule kennen gelernt. So kam es, dass wir beide den Bus aus
                        derselben Stadt fuhren. - Sobald ich dich sah, dachte ich mir: "Das ist meine zukünftige
                        Ehefrau", dann lachte Tim.Wir waren seit fast 30 Jahren glücklich verheiratet.<b>Bis wir an
                            einem tragischen Tag nach dem Abendessen am Tisch saßen.</b></p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>Tim packte plötzlich sein Herz, fiel hin und hob sich nicht mehr.</b> Der Krankenwagen war zu
                        spät. Ich habe meinen Mann an meinem 50. Geburtstag begraben.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Alle meine Lebenspläne fielen wie ein Kartenhaus zusammen. Zusammen mit Tim betrieben wir eine
                        Konditorei auf dem Stadtbasar. Wir wollten noch ein paar Jahre arbeiten und uns dann
                        zurückziehen und uns ein kleines Haus außerhalb der Stadt bauen. Das Grundstück wurde bereits
                        gekauft. Jetzt gab es nichts mehr über den Ruhestand nachzudenken. Ich war mit dem Geschäft
                        allein und musste für zwei arbeiten.</p></div>
                <div class="x-image-medical lazy position-left  left">


                    <noscript>
                        <img class="image-img "
                             src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_2_FIN.jpg"); ?>"/>
                    </noscript>

                    <img class="image-img lazy_image "
                         src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_2_FIN.jpg"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 1px;">Nachdem Tim gestorben war, musste
                                ich mich allein um unsere Gewerbe kümmern.</p></div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>Ich hatte Angst, dass ich es nicht alleine schaffe. </b>Anna lernte damals noch, und sie lebte
                        mit mir zusammen. Ich konnte nicht zusammenbrechen. Ich musste meiner Tochter ein würdiges Leben
                        ermöglichen.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich stand um 4 Uhr morgens auf und fuhr mit Tims Auto zur Bäckerei und zu mehreren Großhändlern
                        zur Frischlieferung. Und lassen Sie mich hinzufügen, dass ich immer Angst hatte zu fahren. Ich
                        habe Tag für Tag gearbeitet, außer am Sonntag.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Schließlich gelang es mir dank meiner mörderischen Arbeit, die Konditorei zu behalten. All diese
                        Bemühungen haben sich jedoch auf mein Aussehen ausgewirkt. Ich war bei der Arbeit so
                        beschäftigt, dass ich sehr unregelmäßig aß - und das verlangsamt meinen Metabolismus völlig.
                        Darüber hinaus aß ich die süßen Backwaren, die mich jeden Tag umgaben (ich konnte bis zu 12
                        Donuts pro Tag essen!). Und diese ständige Sehnsucht nach Tim, der Trost des Essens. Auch die
                        Menopause kam...<b> Nach einigen Monaten wog ich 20 kg mehr.</b></p></div>
                <h5 class="x-h5-medical
  left" style="font-weight: ; color: #8B0000;">
                    - Emma, was ist die fette Frau hinter der Theke? Haben Sie keine Angst, dass sie Ihre Ware isst? –
                    hat meine Cousine einmal gefragt, während sie telefoniert hat.
                </h5>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Es stellte sich heraus, dass ihre Freundin Kuchen bei mir kaufte und sie mich nicht erkannte...
                        Ich erstarrte und wusste nicht, was ich sagen sollte. Ich legte schnell auf und brach in Tränen
                        aus. – Als hätten sie die Hälfte davon durchgemacht wie ich, würden sie hundertmal schlechter
                        aussehen – dachte ich bitter.</p></div>
                <div class="x-image-medical lazy position-center  left">


                    <noscript>
                        <img class="image-img "
                             src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_3_PREV.jpg"); ?>"/>
                    </noscript>

                    <img class="image-img lazy_image "
                         src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_3_PREV.jpg"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 1px;">Wenn ich die alten Fotos anschaue,
                                kann ich nicht glauben, dass ich so fett geworden bin...</p></div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Nach dem Studium bekam Anna eine Stelle in einem internationalen Unternehmen und fuhr nach
                        Irland. Wir haben oft telefoniert. Sie hatte eine gute Position, eine schöne Wohnung. In der
                        Firma traf sie einen anständigen Jungen, ebenfalls aus der Schweiz.</p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Ich konnte meiner Tochter keine Schande bringen!
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>− Mama, es ist passiert! Wird haben uns verlobt! Hochzeit in 6 Monaten! – hat meine Tochter mir
                        vor einem Jahr am Telefon erzählt, total zufrieden. Ich war natürlich glücklich. Wie jede
                        Mutter. Aber dann dachte ich kopflos:</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>- Ich werde bei der Zeremonie die Mutter der Braut sein. <b>Wie werde ich so dick aussehen? </b>Wie
                        werde ich ein Kleid anziehen, um diese Fettfalten zu verbergen? Wenn ich in den Spiegel schaute,
                        brach ich zusammen.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich stellte mir vor, wie die Familie meines zukünftigen Schwiegersohnes mich mit Ekel anblickt.
                        Seine Mutter ist eine schöne, schlanke Frau (ich habe die Fotos gesehen). Und ich - eine dicke
                        Frau. Das konnte ich nicht zulassen! <b>Ich hatte 6 Monate Zeit, um mich irgendwie um mein
                            Aussehen zu kümmern.</b></p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Ich wollte abnehmen, und ich habe das Geld einfach auf die Straße geworfen
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Mein Kampf hat begonnen. Ich habe nicht geglaubt, dass Tee oder Nahrungsergänzungsmittel, die im
                        Internet beworben wurden, mich zum Abnehmen bewegen könnten. Es ist wie eine Schleuder, einen
                        Elefanten jagen zu wollen... Ich habe beschlossen, eine strenge Diät einzuhalten und mit einem
                        Personal Trainer zu trainieren. Ich habe dafür ein Darlehen aufgenommen, weil ich mir einen
                        solchen Aufwand nicht leisten konnte.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b> - Was ist das für eine Langsamkeit?! Zehn weitere Wiederholungen!</b>- dieser Trainer schrie
                        mich an, als ich so erschöpft vom Training war, dass ich kaum noch sehen konnte. Mir war
                        schwindelig und ich keuchte wie ein Hund!</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Er war sportlich, muskulös, jung. Er verstand nicht, dass für eine ältere und fettleibige Frau
                        solche Sportübungen eine übermenschliche Anstrengung sind. Er dachte, ich sei faul. Außerdem
                        sahen mich die Leute im Fitnessstudio an, als sei ich ein Aussätziger. Ein Junge, der mit einem
                        Mädchen kam, fing an, so zu tun, als sei ihm übel, als ich ihn sah.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Das war der Moment gewesen, an dem etwas in meinem Inneren einfach in Scherben zerbarst. Ich
                        hörte auf zu trainieren und fing an zu weinen wie ein Kind. Ich habe so sehr geweint, dass ich
                        kaum Luft holen konnte. Der Trainer hat mich nach hinten gebracht. Dort habe ich mich etwas
                        beruhigt.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich war dumm, dass ich so einen Zirkus gemacht habe. - Entspannen Sie sich, die meisten Menschen
                        brechen beim ersten Training zusammen - dieser Trainer hat mich beruhigt. - <b>Schließlich ist
                            der Körper sehr übergewichtig, so dass man weiß, dass alles weh tut.</b></p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Um ehrlich zu sein, habe ich mich durch diese Informationen nicht beruhigt gefühlt.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>Das Schlimmste kam danach. </b>Auf der Menüliste der Ernährungsberaterin stand, dass ich nur
                        kalorienarme Salate aß, also war ich sehr schwach. Ich hatte die Dunkelheit vor Augen. - Jesus,
                        Emma, wie siehst du aus, blass wie eine Wand, bist du krank? - fragte ein verängstigter Nachbar
                        bei meinem Anblick. Ich dachte: − Nichts zu machen, ich werde darüber hinwegkommen. Aber es
                        könnte sich lohnen.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Das war es nicht wert. Ich war immer noch hungrig, dieser <b>Hunger zerstörte mich körperlich und
                            geistig.</b>Der Bluttest zeigte, dass ich plötzlich eine Anämie hatte. Wenn ich mir die
                        Ergebnisse anschaue, schnaubte ich bei all dieser Absurdität vor Lachen, denn wie kann man
                        Anämie haben, wenn man über 40 kg Übergewicht hat? Es stellte sich heraus, dass es sich um eine
                        sehr häufige Erkrankung bei Diäten handelt.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Außerdem habe ich mir wegen dieses Trainings mein Kniegelenk gebrochen. Und deshalb habe ich
                        diesen Trainer und Diätassistenten engagiert, um für meine Sicherheit zu sorgen und gleichzeitig
                        Gewicht zu verlieren. Und was? Ich wurde verletzt, und ich habe viel dafür bezahlt. Wahnsinn!
                        Ich füge einfach hinzu, dass ich nicht einmal ein Kilo abgenommen habe!</p></div>
                <div class="x-image-medical lazy position-left  left">


                    <noscript>
                        <img class="image-img " src="<?php echo get_res("blog/res/img/przed12.png"); ?>"/>
                    </noscript>

                    <img class="image-img lazy_image " src="<?php echo get_res("blog/res/img/przed12.png"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 1px;">Durch meine Diäten und das Training
                                habe ich meinen Körper zerstört und eine Knieverletzung erlitten. Ich warf das Geld auf
                                die Straße und verlor nicht einmal 1 Kilo.</p></div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <div class="x-p-medical " style="text-align: left; ">
                </div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich war niedergeschlagen. Ich dachte, es gäbe keine Hoffnung mehr für mich. Aber alles änderte
                        sich an diesem Tag, als ich meinen alten Freund auf dem Basar traf.</p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Ich konnte nicht glauben, dass sie 60 kg abgenommen hat!
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>- Emma, mein Schatz! - Ich hörte eine bekannte Stimme am Stand. Es war Hanne, meine Freundin von
                        der Schulbank, wodurch ich kaum auf die Schulbank passte, weil sie 100 kg wog! Ich konnte nicht
                        glauben, dass sie es war! Weil sie eine hübsche Figur hatte, als hätte sie die Hälfte ihres
                        alten Gewichts verloren. Sie war voller Energie und strahlte Freude aus.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>− Wie hat sie das gemacht? – dachte ich sofort. Hanna war seit dem Kindergarten mollig. Bei ihr
                        ist Übergewicht erblich bedingt. Hat Hanna begonnen, gesünder zu leben? Oder vielleicht hat sie
                        einfach einen besseren Trainer und Diätassistenten gefunden?</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>− Nichts dergleichen, Liebe! Vor einigen Jahren brachte mir mein Sohn von einer Delegation in
                        Tokio eine solche Superformel mit, die <b>das Fett in Energie umwandelt und verschwinden
                            lässt.</b> <b> Keine Diät oder Training. </b>Sie wurde von dem Arzt erfunden, der seine
                        Ehefrau von krankhafter Fettleibigkeit befreien wollte, weil sie sich nach dem Unfall nicht
                        bewegen konnte und Steroide nahm, von denen sie anschwoll.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>-Er hat sich übrigens ein Medikament ausgedacht, <b>das bei einem Tempo völlig sicher abnimmt: 16
                            kg für 21 Tage.</b>In Japan sprechen alle Medien darüber. Ich benutze es seit weniger als 3
                        Monaten, und jetzt bin ich, wie Sie sehen können, so hübsch und glücklich wie noch nie! Hier,
                        ich habe dir geschrieben, wo du es bekommen kannst - sagte sie und gab mir eine Notiz.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>- Seien Sie nur vorsichtig</b> - sagte Hanna, die mir direkt in die Augen schaute - es gibt
                        jetzt eine Menge verdächtiger Fälschungen auf dem Markt. Nur an diesem einen Ort können Sie die
                        Originalbehandlung aus Japan erhalten.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich konnte es nicht glauben. - Diät und Training haben mir nichts geholfen, und irgendeine
                        japanische Behandlung lässt mich einfach abnehmen? - Vielleicht hatte Hanna einen
                        Roux-en-Y-Magenbypassoder so... Und sie wollte es einfach nicht zugeben? – dachte ich voller
                        Zweifel.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Aber andererseits, warum sollte ich dies nicht ausprobieren? - Es wird nicht schlimmer werden.
                        Ich dachte nach und traf eine Entscheidung. Jetzt weiß ich, dass<b> es die beste Entscheidung
                            meines Lebens war.</b>Ich dachte, wenn es eine so bahnbrechende Innovation wäre, würde ich
                        ein Vermögen verlieren. Ich war überrascht, denn im Vergleich zu einer Diätassistentin und einem
                        Personal Trainer - war es wie <b>umsonst. </b></p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Kilogramm Fett verschwanden wie durch die Berührung mit einem Zauberstab
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>An meinem ersten Behandlungstag fühlte ich, dass ich mehr Kraft, Energie und Optimismus hatte. Am
                        nächsten Tag, als ich morgens aufstand - <b> ich war schockiert!</b>Ich berührte meinen Bauch
                        und fühlte, wie er flacher wurde. Ich habe mich gemessen. Resultat? Ich habe 4 cm in der Taille
                        verloren! In 1 Tag und 1 Nacht!</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Manchmal fühlte ich ein so angenehmes Kribbeln und Wärme unter der Haut. Damals stellte ich mir
                        vor, dass <b> mein Körper sich in eine Kalorienverbrennungsmaschine verwandelt hatte.</b>Das war
                        ein phänomenales Gefühl, weil mich von Energie strotzen. Es war, wie Hanna sagte - das Fett in
                        meinem Körper verwandelte sich selbst in Energie, wodurch ich mich 100 Mal besser fühlte. Ich
                        möchte nur hinzufügen, dass ich nicht trainierte und mir mein Lieblingsessen nicht verleugnete.
                    </p></div>
                <h5 class="x-h5-medical
  left" style="font-weight: ; color: #8B0000;">
                    – Was für ein Zauber ist das? - Ich dachte mir, wenn ich frei ein Kleid anziehe, in das ich seit
                    fünf Jahren nicht mehr gepasst hatte...
                </h5>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich habe schwindelerregend schnell abgenommen. Die Behandlung ist völlig natürlich, so dass ich
                        keine Nebenwirkungen hatte. Ich war so glücklich, dass ich auf die Straße gehen und diese
                        phänomenale Art des Abnehmens mit all den fettleibigen Menschen teilen wollte, die ich treffen
                        würde. Es <b>ist eine Rettung für fettleibige Menschen!</b></p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>Nach 21 Tagen Behandlung wog ich mich ab. Ich wog 16 kg weniger</b> - genau wie Hanna sagte.
                        Ich sah schon damals besser aus. Ich konnte mich netter anziehen, und mein Gesicht wurde
                        schlanker, also war ich draußen.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Insgesamt habe ich in etwa 2 Monaten 43 kg abgenommen. Ich habe mich von einer fetten alten Frau
                        in ein schlankes Mädel verwandelt, das immer noch von allen Komplimente erhält. Es ist ein
                        wunderbares Gefühl, das ich jeder Frau wünsche!</p></div>
                <div class="x-image-medical lazy position-left  left">


                    <noscript>
                        <img class="image-img " src="<?php echo get_res("blog/res/img/po123.png"); ?>"/>
                    </noscript>

                    <img class="image-img lazy_image " src="<?php echo get_res("blog/res/img/po123.png"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 1px;">Bin das wirklich ich???! Ich kann
                                mein bisheriges Glück nicht glauben.</p></div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>- Oh, Anna, besuchen Sie Ihre Mutter? – hat meine Nachbarin mich einmal gefragt, als ich die Tür
                        zu meiner Wohnung öffnete. <b>Sie verwechselte mich mit meiner schlanken Tochter!Nachdem ich das
                            Haus betreten hatte, sprang ich vor Freude.</b></p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Auf der Hochzeit meiner Tochter habe ich als letzte Person die Tanzfläche verlassen
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich fühlte eine neue Kraft zum Handeln. Es ist, als ob mir jemand zusammen mit den unnötigen
                        Kilos auch noch jahrelange Sorgen abnehmen würde. Wenn meine Tochter mich zwei Wochen zuvor bat,
                        nach Irland zu kommen und ihr bei den Hochzeitsvorbereitungen zu helfen, stimmte ich ohne Zögern
                        zu.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>Wenn Anna mich auf dem Flughafen sah, war sie sprachlos.</b>Ihr Kiefer ist buchstäblich
                        heruntergeklappt. Sie erwartete eine dicke, vernachlässigte Frau. Und ich stand aufrecht,
                        strahlend und glücklich vor ihr. In einem Kleid, das meine neuen, schlanken Formen betont!</p>
                </div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>– Mama, du siehst aus, als wärst du in dieser TV-Show, in der Frauen Traumverwandlungen erleben!
                        Im Ernst - wie hast du das gemacht? Hast du mit den Diäten begonnen, die ich dir geschickt habe?
                        - fragte Anna und sah mich bewundernd an.</p></div>
                <h5 class="x-h5-medical
  left" style="font-weight: ; color: #8B0000;">
                    Ich lächelte geheimnisvoll, aber innerlich platzte ich vor Lachen!
                </h5>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Ich habe meiner Tochter bei allem geholfen. Gemeinsam haben wir ein Kleid ausgewählt und den Saal
                        dekoriert. Ich habe auch meinen berühmten Kuchen gemacht. Die Gäste konnten nicht glauben, dass
                        ich selbst 10 Bleche gebacken habe. Die Mutter des Bräutigams sprach diskret mit mir während der
                        Hochzeit:</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>- Schatz, wie schaffst du es, dass du alles isst und so schlank bist? Ich kann mich nicht
                        erinnern, wann ich ein normales Abendessen oder etwas Süßes hatte... Ich hatte eine
                        Fettabsaugung, wie das weh tat!</p></div>
                <div class="x-image-medical lazy position-center  left">


                    <noscript>
                        <img class="image-img "
                             src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_6_FIN.jpg"); ?>"/>
                    </noscript>

                    <img class="image-img lazy_image "
                         src="<?php echo get_res("blog/res/img/Testymonial_SAKURA_SLIM_6_FIN.jpg"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 1px;">Das sind Anna und ich kurz vor der
                                Hochzeitszeremonie.</p></div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Es stellte sich heraus, dass die Schwiegermutter meiner Tochter seit Jahren müde ist, hungert und
                        sich teuren und gefährlichen Behandlungen unterzieht. Sie konnte nicht glauben, dass ich
                        normalerweise esse, was ich will, wann ich will, und dass ich so schlank bin.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Alle Gäste hatten Spaß bis zum Morgengrauen. Aber ich war die letzte, die die Tanzfläche
                        verlassen hat. Ich tanzte die ganze Hochzeit über mit meinem neuen Freund Nathan, dem Onkel des
                        Bräutigams.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>– Ich konnte meine Augen nicht von dir lassen. Du hast dich unter allen Frauen auf der Party
                        hervorgetan. Dein strahlendes Lächeln hat mein Herz gestohlen. <b>Du hast wie ein Stern
                            geleuchtet! – gestand er mir später. </b></p></div>

                <h4 class="x-h4-medical
  left" style="font-weight: ; background: ; color: #8B0000;">
                    Glück kann in jedem Alter gefunden werden
                </h4>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Nathan begann, mich um meine Gunst zu buhlen, aber zunächst lehnte ich ihn ab. – Warum sollte ich
                        es brauchen? Mir geht es alleine großartig – sagte ich mir. Aber Nathan war hartnäckig. Am
                        Jahrestag unseres Treffens kam er mit einem Ring zu mir nach Hause. – Willst du meinen Weg bis
                        zum Ende erleuchten, mein Stern?<b>– fragte er und kniete in der Halle.</b> Ich war sprachlos
                        vor Erstaunen. Aber schließlich konnte ich ein einziges Wort sagen – Ja.</p></div>
                <div class="x-image-medical lazy position-left  left">


                    <noscript>
                        <img class="image-img "
                             src="<?php echo get_res("blog/res/img/Testymonial_Sakura_V3_FIN.jpg"); ?>"/>
                    </noscript>

                    <img class="image-img lazy_image "
                         src="<?php echo get_res("blog/res/img/Testymonial_Sakura_V3_FIN.jpg"); ?>">


                    <div class="text-container">
                        <div style="text-align: center;"><p style="max-width: 1px;">Gemeinsam blicken wir optimistisch
                                in die Zukunft</p></div>
                    </div>

                </div>

                <script>
                    $(document).on('ready', function () {
                        $(".x-image-medical").each(function () {
                            $(this).image();
                        });
                    })
                </script>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Wenn ich an diesem Tag auf dem Basar nicht auf Hanna gehört und nicht die Schlankheitsformel
                        verwendet hätte, hätte ich eine so große Chance auf das Glück verloren... Denn das Glück kann in
                        jedem Alter zu uns kommen. Wir müssen nur öffnen, wenn es an unsere Tür klopft.</p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><b>Valentina Graf hat von Emma Keller angehört.</b></p></div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p>Liebe Leserinnen! Die fettreduzierende Behandlung, die Frau Emma<span style="color: black;"> anwendet, ist seit kurzem auch in der Schweiz erhältlich. Ein spezielles Angebot wartet auf unsere Leserinnen - dank dessen können Sie die Behandlung</span><b
                                style="color: black;"> mit Finanzierung </b> <b>127CHF</b> <b
                                style="color: black;"> </b> <b> günstiger erhalten. </b> Um das Angebot zu nutzen,
                        klicken Sie einfach auf den folgenden Link:</p></div>
                <div class="x-CTA-medical " style="text-align: left">
                    <a href="<?php echo da_url(array('site' => 'form_big')) ?>" class="cta" target="_blank"><p>Um 16 kg
                            in 21 Tagen abzunehmen, klicken Sie hier &gt;&gt;</p></a>
                    <a href="<?php echo da_url(array('site' => 'form_big')) ?>" class="cta cta_mobile" target="_blank">
                        <p>Um 16 kg in 21 Tagen abzunehmen, klicken Sie hier &gt;&gt;</p></a>
                </div>
                <div class="x-p-medical " style="text-align: left; ">
                    <p><span style="color: red;">Sonderangebot gilt bis Tagesende <?php echo $timeOffer ?></span></p></div>


            </main>

            <section class="container__wrapper--sidebar">


                <div class="x-weather-medical ">
                    <div class="actual_weather">
                        <div class="weather_today"
                             style="background-image: url(<?php echo get_res("blog/res/img/03d.jpg"); ?>);">
                            <h6 class="weather_title weather_title_today">
                                WETTER HEUTE
                                <span></span>
                                <time class="time_today">15.03.2021</time>
                            </h6>
                            <div class="weather_today_main">
                                <div class="top">
                                    <div class="top_img_wrapper">
                                        <img src="<?php echo get_res("blog/res/img/03d.png"); ?>">
                                    </div>
                                    <div class="top_content">
                                        <p class="content_pressure">
                                            Druck:1015 hPa
                                        </p>
                                        <p class="content_temp">
                                            <img src="<?php echo get_res("blog/res/img/03d.png"); ?>">
                                            4°C
                                        </p>
                                        <p class="content_wind_speed">
                                            Wind:16 km/h
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="bottom_temp_feel">
                                        <p>
                                            Fühlbare <br>Temperatur
                                        </p>
                                        <span>
                            -0.9°C
                        </span>
                                    </div>
                                    <div class="bottom_timer">14:44</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actual_weather_2"
                         style="background-image: url(<?php echo get_res("blog/res/img/04d.jpg"); ?>);">
                        <div class="actual_weather_2_inner">
                            <div class="actual_weather_2_col temp">
                                <div>
                                    <img src="<?php echo get_res("blog/res/img/temp_max.png"); ?>" alt="">
                                </div>
                                <div class="content">
                    <span>
                        4°
                    </span>
                                    <p>
                                        Maximal-<br>Temperatur
                                    </p>
                                </div>
                            </div>
                            <div class="actual_weather_2_col temp">
                                <div>
                                    <img src="<?php echo get_res("blog/res/img/temp_min.png"); ?>" alt="">
                                </div>
                                <div class="content">
                    <span>
                        3.6°
                    </span>
                                    <p>
                                        Minimal-<br>Temperatur
                                    </p>
                                </div>
                            </div>
                            <div class="actual_weather_2_col clouds">
                                <div class="content">
                    <span>
                        87%
                    </span>
                                    <div class="img_wrapper">
                                        <img src="<?php echo get_res("blog/res/img/clouds.png"); ?>" alt="">
                                    </div>
                                    <p>
                                        Bewölkung
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="future_weather_wrapper">
                        <div class="future_weather"
                             style="background-image: url(<?php echo get_res("blog/res/img/03d.jpg"); ?>);">
                            <h6 class="weather_title weather_title_future">
                                MORGEN
                                <span></span>
                                <time class="time_tomorrow">16.03.2021</time>
                            </h6>
                            <div class="content">
                                <div class="content_inner">
                                    <p class="content_pressure">
                                        Druck:1026 hPa
                                    </p>
                                    <p class="content_temp">
                                        <img src="<?php echo get_res("blog/res/img/03d.png"); ?>">
                                        5.2°C
                                    </p>
                                    <p class="content_wind_speed">
                                        Wind:11 km/h
                                    </p>
                                </div>
                                <div class="content_icon_mobile">
                                    <img src="<?php echo get_res("blog/res/img/03d.png"); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="future_weather"
                             style="background-image: url(<?php echo get_res("blog/res/img/04d.jpg"); ?>);">
                            <h6 class="weather_title weather_title_future">
                                ÜBERMORGEN
                                <span></span>
                                <time class="time_after_tomorrow">17.03.2021</time>
                            </h6>
                            <div class="content">
                                <div class="content_inner">
                                    <p class="content_pressure">
                                        Druck:1021 hPa
                                    </p>
                                    <p class="content_temp">
                                        <img src="<?php echo get_res("blog/res/img/04d.png"); ?>">
                                        3.3°C
                                    </p>
                                    <p class="content_wind_speed">
                                        Wind:11 km/h
                                    </p>
                                </div>
                                <div class="content_icon_mobile">
                                    <img src="<?php echo get_res("blog/res/img/04d.png"); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".x-weather-medical").weatherData();
                    });
                </script>

                <h5 class="x-h5-medical
  center" style="font-weight: ; color: #000000;">
                    Am meisten gelesen:
                </h5>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">
                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V5.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V5.png"); ?>" alt="">

                        </div>
                        <div class="float_img_text-text"><p>Ohne meine Sturheit wäre Markus vielleicht gestorben!</p>
                        </div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">


                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V4.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V4.png"); ?>" alt="">


                        </div>
                        <div class="float_img_text-text"><p>Was bedroht Teenager im Internet?</p></div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">


                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V8.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V8.png"); ?>" alt="">


                        </div>
                        <div class="float_img_text-text"><p>Die berühmteste Katze der Welt! Er kann Klavier spielen –
                                "Drei kleine Kätzchen"</p></div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">


                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V2.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V2.png"); ?>" alt="">


                        </div>
                        <div class="float_img_text-text"><p>Wie kann man Kind vor Borreliose schützen?</p></div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">


                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V3.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V3.png"); ?>" alt="">


                        </div>
                        <div class="float_img_text-text"><p>Der Hundeheld rettete den kleinen Jakob vor dem
                                Ertrinken</p></div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">


                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V6.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_V6.png"); ?>" alt="">


                        </div>
                        <div class="float_img_text-text"><p>Wir empfehlen sichere Orte für Ihren Urlaub</p></div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>
                <div class="x-float_img_text-medical " style="text-align: left">
                    <a class="link-x-float_img_text-medical" href="<?php echo da_url(array('site' => 'form_big')) ?>">
                        <div style="" class="float_img_text-img float_left ">


                            <noscript>
                                <img src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_1.png"); ?>"
                                     alt="">
                            </noscript>

                            <img class="lazy_image"
                                 src="<?php echo get_res("blog/res/img/zdjecie_artykul_2_sidebar_1.png"); ?>" alt="">


                        </div>
                        <div class="float_img_text-text"><p>5 Ideen für Erdbeerkuchen</p></div>
                        <ol class="float_img_text-list">
                        </ol>
                        <div style="clear: both;"></div>
                    </a>
                </div>

                <div class="x-banner-medical  " style="">
                    <a href="<?php echo da_url(array('site' => 'form_big')) ?>" target="_blank"
                       rel="noopener noreferrer"
                       style="text-decoration: none; display: flex; flex-direction: column; justify-content: center; align-items: center;">

                        <div class="banner-text" style="">
                            <p>Songerangebot für Leserinnen!</p>
                        </div>

                        <div class="banner-text2">

                        </div>


                        <img class="product_visualization x1   lazy_image"
                             src="<?php echo get_res("blog/res/img/RIM_400px_255B30caps255D_V1aFCVPNjuW.webp"); ?>"
                             alt="img_small_index">

                        <div class="banner-button" style="">
                            <p>Siehe &gt;&gt;</p>
                        </div>
                    </a>
                </div>

            </section>

        </section>


        <section class="container__wrapper--comments ">

            <h2 class="x-h2-medical
    left" style="color: #000000; font-weight: ;">
                Kommentare
            </h2>
            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Emma_Wi</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Applaus für Frau Emma für ihren Mut! Ich bewundere so starke Frauen</p>
                    </div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Mädchennn</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Hat jemand diese Behandlung ausprobiert und kann sie empfehlen? Welche
                            Meinungen, wirkt sie?</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Leonie_Schmitt_123</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Ich frage auch danach. Has es jemand ausprobiert? Ich kann mich nicht
                            mehr im Spiegel ansehen. Früher war ich ziemlich hübsch, und jetzt sehe ich aus wie eine
                            Kuh. Auch wenn jemand schon "danach" ist, frage ich nach ehrlichen Meinungen</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Milena</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>@Leonie_Schmitt_123 ich habe es versucht und ich empfehle es von ganzem
                            Herzen!<span style="color: blue;"></span> Die einzige Behandlung zur Gewichtsabnahme, die
                            wirklich wirkt. Ich bin bereits älter (68 Jahre), also hat mir nicht alles geholfen. Ich
                            bekam diese Behandlungen als Geschenk von meiner Tochter, die mich nicht mehr anschauen
                            konnte... Und nach weniger als einem Monat bin ich dünn wie in meiner Jugend :-) Und meine
                            Tochter schämt sich nicht mehr, mit mir das Haus zu verlassen. Also ich empfehle es sehr!
                        </p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Carolin</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Super, Emma! Packt das Leben bei den Hörnern. Ich habe mich in den
                            letzten Jahren vernachlässigt, ich habe schreckliche Fettpölsterchen am Körper, ich habe
                            über Diät und Training nachgedacht, aber nachdem ich diese Worte hier gelesen habe, habe ich
                            meine Meinung geändert. Es ist großartig, dass es eine solche Behandlung gibt, ich werde es
                            auf jeden Fall versuchen,</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Daniela</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p><span style="color: blue;">@Carolin</span> Geh nicht zu einem
                            Diätassistenten, Frau! Sie werden nur unnötig Geld verlieren, und Sie müssen sich aus jedem
                            Krümel Essen erklären.</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Eske_001</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Tolle Behandlung, bestellen wir dies, solange es hier gibt!</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Camille</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Ich liebe, liebe, liebe! Es ist so einfach, es ist ein Schock. Du musst
                            nichts tun, und du verlierst Gewicht, eine Offenbarung... :))</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Carolin</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p><span style="color: blue;">@Camille</span>, gut, aber wirkt sie oder
                            gibt es keine Nebenwirkungen?</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Camille</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p><span style="color: blue;">@Carolin</span> Wie zuvor war ich
                            massakriert dick, ich konnte nicht gehen, so dass ich nach der Behandlung den ganzen
                            überschüssigen Fettkörper und - 27 Kilo abgenommen habe, aber ich mache weiter. Ich fühle
                            mich wie eine Million Dollar... So sehe ich aus! Drei Männer haben mich bereits zu einem
                            Date eingeladen. Also ich empfehle es von ganzem Herzen! und es gibt keine Nebenwirkungen,
                            denn das liegt in der Natur selbst!!</p></div>
                </div>
            </div>

            <div class="x-comment-medical " style="text-align: left">
                <img class="comment-img" src="<?php echo get_res("blog/res/img/avatar.png"); ?>">
                <div class="comment-box">
                    <div class="comment-signature"><p>Carolin</p>
                        <div class="comment-date">
                            <?php echo $timeComments ?>
                        </div>
                    </div>
                    <div class="comment-text"><p>Dann muss ich es haben! Ich warte nur auf die Lieferung, wenn ich es
                            versuche, werde ich über die Auswirkungen schreiben.</p></div>
                </div>
            </div>
            <div class="x-gap-beautiful " style="background: ">

                <div style="background: "></div>

            </div>
            <div class="x-CTA-medical " style="text-align: left">
                <a href="<?php echo da_url(array('site' => 'form_big')) ?>" class="cta" target="_blank"><p>Um 16 kg in
                        21 Tagen abzunehmen, klicken Sie hier &gt;&gt;</p></a>
                <a href="<?php echo da_url(array('site' => 'form_big')) ?>" class="cta cta_mobile" target="_blank"><p>Um
                        16 kg in 21 Tagen abzunehmen, klicken Sie hier &gt;&gt;</p></a>
            </div>
        </section>

        <section class="container__wrapper--footer">

            <div class="footer__links">

                <a class="footer__links--link" target="_blank"
                   onclick="window.open('?site=privacy', 'windowname1', 'scrollbars=1'); return false;"
                   href="javascript: void(0)" rel="noopener noreferrer" title="Datenschutzerklärung">Datenschutzerklärung</a>

                <!--<a class="footer__links--link" target="_blank" href="/41/nixagrim-m-sakura-free/gps/impressum.html" rel="noopener noreferrer" title="Impressum">Impressum</a> -->

                <a class="footer__links--link" target="_blank"
                   onclick="window.open('?site=information_affiliates_en', 'windowname1', 'scrollbars=1'); return false;"
                   href="javascript: void(0)" rel="noopener noreferrer" title="Information for affiliates">Information
                    for affiliates</a>

            </div>

            <div class="x-footer_text-medical footer_text " style="display: block;">

            </div>
            <div class="x-bibliography-medical-sp ">

                <div class="FooterBibliography">

                    <p class="headline">Bibliografie:</p>

                    <ol class="list">
                        <li>Onakpoya, I., Terry, R., &amp; Ernst, E. (2011). The Use of Green Coffee Extract as a Weight
                            Loss Supplement: A Systematic Review and Meta-Analysis of Randomised Clinical Trials.&nbsp;Gastroenterology
                            Research and Practice,&nbsp;2011, 1–6.
                        </li>
                        <li>Vinson, J., Nagendran, M. V., &amp; Burnham, B. R. (2012).&nbsp;Randomized, double-blind,
                            placebo-controlled, linear dose, crossover study to evaluate the efficacy and safety of a
                            green coffee bean extract in overweight subjects.&nbsp;Diabetes, Metabolic Syndrome and
                            Obesity: Targets and Therapy,&nbsp;5, 21-27.
                        </li>
                        <li>Flanagan, J., Bily, A., Rolland, Y., &amp; Roller, M. (2013).&nbsp;Lipolytic Activity of
                            Svetol®, a Decaffeinated Green Coffee Bean Extract.&nbsp;Phytotherapy Research,&nbsp;28(6),
                            946–948.
                        </li>
                        <li>Reh, C., Gerber, A., Prodolliet, J., &amp; Vuataz, G. (2006).&nbsp;Water content
                            determination in green coffee – Method comparison to study specificity and accuracy.&nbsp;Food
                            Chemistry,&nbsp;96(3), 423–430.
                        </li>
                        <li>Dellalibera, O., Lemaire, B., &amp; Lafay, S. (2006). Svetol, green coffee extract, induces
                            weight loss and increases the lean to fat mass ratio in volunteers with overweight problem.&nbsp;Phytotherapie,&nbsp;4(4),
                            194-197.
                        </li>
                        <li>Buchanan, R., &amp; Beckett, R. D. (2013).&nbsp;Green Coffee for Pharmacological Weight
                            Loss.&nbsp;Journal of Evidence-Based Complementary &amp; Alternative Medicine,&nbsp;18(4),
                            309–313.
                        </li>
                        <li>Samadi, M., Mohammadshahi, M., &amp; Haidari, F. (2015). Green coffee bean extract as a
                            weight loss supplement.&nbsp;Journal of Nutritional Disorders &amp; Therapy,&nbsp;5(4).
                        </li>
                        <li>Thom, E. (2007).&nbsp;The Effect of Chlorogenic Acid Enriched Coffee on Glucose Absorption
                            in Healthy Volunteers and Its Effect on Body Mass When Used Long-term in Overweight and
                            Obese People.&nbsp;Journal of International Medical Research,&nbsp;35(6), 900–908.
                        </li>
                        <li>Farah, A., Monteiro, M., Donangelo, C. M., &amp; Lafay, S. (2008). Chlorogenic Acids from
                            Green Coffee Extract are Highly Bioavailable in Humans.&nbsp;The Journal of Nutrition,&nbsp;138(12),
                            2309–2315.
                        </li>
                        <li>Upadhyay, R., Ramalakshmi, K., &amp; Rao, L. J. M. (2012). Microwave-assisted extraction of
                            chlorogenic acids from green coffee beans.&nbsp;Food Chemistry,&nbsp;130(1), 184-188.
                        </li>
                        <li>Yoon, M., &amp; Kim, M.-Y. (2011).&nbsp;The anti-angiogenic herbal composition Ob-X from
                            Morus alba, Melissa officinalis, and Artemisia capillaris regulates obesity in genetically
                            obese ob/ob mice.&nbsp;Pharmaceutical Biology,&nbsp;49(6), 614–619.
                        </li>
                        <li>Kikunaga, S., Miyata, Y., Ishibashi, G., Koyama, F., &amp; Tano, K. (1999). The
                            bioavailability of magnesium from Wakame (Undaria pinnatifida) and Hijiki (Hijikia
                            fusiforme) and the effect of alginic acid on magnesium utilization of rats.&nbsp;Plant Foods
                            for Human Nutrition,&nbsp;53(3), 265-274.
                        </li>
                        <li>Urbano, M. G., &amp; Goñi, I. (2002).&nbsp;Bioavailability of nutrients in rats fed on
                            edible seaweeds, Nori (Porphyra tenera) and Wakame (Undaria pinnatifida), as a source of
                            dietary fibre.&nbsp;Food Chemistry,&nbsp;76(3), 281–286.
                        </li>
                        <li>Kolb, N., Vallorani, L., Milanović, N., &amp; Stocchi, V. (2004). Evaluation of marine algae
                            Wakame (Undaria pinnatifida) and Kombu (Laminaria digitata japonica) as food supplements.&nbsp;Food
                            Technology and Biotechnology,&nbsp;42(1), 57-61.
                        </li>
                        <li>Taboada, M. C., Millán, R., &amp; Miguez, M. I. (2012).&nbsp;Nutritional value of the marine
                            algae wakame (Undaria pinnatifida) and nori (Porphyra purpurea) as food supplements.&nbsp;Journal
                            of Applied Phycology,&nbsp;25(5), 1271–1276.
                        </li>
                        <li>López-López, I., Cofrades, S., Yakan, A., Solas, M. T., &amp; Jiménez-Colmenero, F. (2010).&nbsp;Frozen
                            storage characteristics of low-salt and low-fat beef patties as affected by Wakame addition
                            and replacing pork backfat with olive oil-in-water emulsion.&nbsp;Food Research
                            International,&nbsp;43(5), 1244–1254.
                        </li>
                        <li>Nakagawa, H. (1997).&nbsp;Effect of dietary algae on improvement of lipid metabolism in
                            fish.&nbsp;Biomedicine &amp; Pharmacotherapy,&nbsp;51(8), 345–348.&nbsp;
                        </li>
                        <li>Yamada, S., Shibata, Y., Takayama, M., Narita, Y., Sugawara, K., &amp; Fukuda, M. (1996).&nbsp;Content
                            and Characteristics of Vitamin B12 in Some Seaweeds.&nbsp;Journal of Nutritional Science and
                            Vitaminology,&nbsp;42(6), 497–505.
                        </li>
                        <li>Škrovánková, S. (2011).&nbsp;Seaweed Vitamins as Nutraceuticals.&nbsp;Advances in Food and
                            Nutrition Research, 357–369.
                        </li>
                        <li>Yoshinaga, K., Nakai, Y., Izumi, H., Nagaosa, K., Ishijima, T., Nakano, T., &amp; Abe, K.
                            (2018). Oral Administration of Edible Seaweed Undaria Pinnatifida (Wakame) Modifies Glucose
                            and Lipid Metabolism in Rats: A DNA Microarray Analysis.&nbsp;Molecular Nutrition &amp; Food
                            Research,&nbsp;62(12).
                        </li>
                    </ol>
                </div>
            </div>
        </section>
    </section>
</section>
<script>
    let changedH2 = document.getElementById('changingH2');
    window.addEventListener('resize', function () {
        if (window.matchMedia('(max-width: 770px)')) {
            changedH2.textContent = '„Ich habe 43 kg in 2 Monaten ohne Diät und Training abgenommen - jetzt bin ich schlanker als meine Tochter!"';
            changedH2.style = 'text-align: center;';
        } else {
            changedH2.textContent = '„„Ich habe 43 kg in 2 Monaten abgenommen - jetzt bin ich schlanker als meine Tochter! Wer hätte gedacht, dass das Geheimnis einer schönen Figur (ohne Diäten und Training!) werde ich es kennenlernen...auf dem Marktplatz der Stadt!"';
            changedH2.style = 'text-align: left;';
        }
    });
</script>
</body>
</html>