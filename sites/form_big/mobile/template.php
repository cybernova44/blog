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
?>
<!DOCTYPE html>
<html lang='de_CH'>
<head>
    <style>     img[src*="stabx.net/track_js"] {
            position: absolute;
            bottom: 300px;
        } </style>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/script_1/track-compiled.js"); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_res("form_big/mobile/res/css/styles.css"); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/script_2/jquery.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/script_3/nofile.txt"); ?>"></script>
    <title>Nutislic</title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/style.css"); ?>">
    <link href="<?php echo get_res("form_big/mobile/res/css/componentsStyles.css"); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo get_res("form_big/mobile/res/js/script_4/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_5/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_6/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_7/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_8/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_9/slick.min.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_10/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_11/core-validator.min.js"); ?>"
            type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_12/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_13/script.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/script_14/script.js"); ?>" type="text/javascript"></script>
</head>
<body class="index">
<script> function lazyLoading(element) {
        var image = element, imageParent = $(image).parent()[0]
        if (element.hasClass('image-img') === true && !element.hasClass('max-width')) {
            if (imageParent.offsetWidth === 0) {
                var src = $(image).data('src').split('?')[0] + '?w=' + 1
            } else {
                var src = $(image).data('src').split('?')[0] + '?w=' + imageParent.offsetWidth
            }
        } else {
            var src = $(image).data('src')
        }
        $(image).attr('src', src)
        $(image).removeClass('lazy_image')
    }

    $(document).on('scroll', function () {
        $('.lazy_image').each(function () {
            if ($(this).offset().top < window.innerHeight + window.pageYOffset + 500) {
                lazyLoading($(this));
            }
        })
    });
    $(document).on('ready', function () {
        $('.lazy_image').each(function () {
            if ($(this).offset().top < window.innerHeight) {
                lazyLoading($(this));
            }
        })
    }) </script>
<div class="template_index ltr">
    <div class="container">
        <header class="container__header"></header>
        <div class="container__wrapper">
            <div class="container__wrapper--left">
                <div class="container__wrapper--main">
                    <div class="x-small_prof-medical-sp  left">
                        <div class="box-prof"><img class="article-img"
                                                   src="<?php echo get_res("form_big/mobile/res/img/zdjecie_profilowe_doktor_SP_V1_FIN.jpg"); ?>"
                                                   alt="">
                            <div class="article-text">
                                <div style="text-align: center;"><p>DR AKINORI TANAKA</p></div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: left;" class="x-image_and_cirkle-medical-sp  left">
                        <img class="image-img"
                                       src="<?php echo get_res("form_big/mobile/res/img/zdjecie_zona_przed-po_SP_V1_FIN.jpg"); ?>"/>
                        <div class="cirkle"><span><p>SCHNELLES</p></span>
                            <p>ABNEHMEN</p></div>
                    </div>
                    <h1 class="x-h1-medical-sp     center" style="color: #8B0000; font-weight: 700; "> SIE WERDEN IN DEN NÄCHSTEN 21 TAGEN 16 KG AN GEWICHT VERLIEREN! </h1>
                    <h2 class="x-h2-education-sp     left" style="color: #000000; font-weight: ;"> Dieser Effekt wurde von meiner Ehefrau erreicht, die sich 2 Jahre lang nicht bewegen konnte und die Steroide übernehmen musste (von denen sie an Gewicht zunahm, ohne überhaupt etwas zu essen)... so wird Ihr Übergewicht noch schneller verschwinden! </h2>
                    <div class="x-profesor_box-medical-sp left"><img style="float:right;   margin-right"
                                                                     class="img right"
                                                                     src="<?php echo get_res("form_big/mobile/res/img/zdjecie_profilowe_doktor_SP_V1_FIN.jpg"); ?>"
                                                                     alt="">
                        <div class="text"><p>Hallo!</p>
                            <p>Mein Name ist Akinori Tanaka und ich bin Wissenschaftler, Hauptspezialist für Molekulargenetik am Institut für Biotechnologie in Tokio (Japan). Vor einem Jahr habe ich eine einfache, sichere und superwirksame Formel zur autoketogenen Gewichtsabnahme erfunden. Dank ihr<b> haben bereits 312 Tausend Menschen (einschließlich meiner geliebten Ehefrau) in allen Altersgruppen innerhalb von 21 Tagen</b> 16 kg Gewicht verloren, ihre Gesundheit und ihr gutes Aussehen wiedererlangt.</p></div>
                        <div style="clear: both;"></div>
                    </div>
                    <h2 class="x-h2-medical-sp     left" style="color: #FF0000; font-weight: ;"> Deshalb, wenn Sie genug haben: </h2>
                    <ul class="x-ul_list-medical-sp left">
                        <li><p><b>Tag für Tag zuzusehen, wie Sie fett werden und nicht mehr in die Kleidung passen,</b> die vor einigen Monaten noch gut für Sie war - Sie erinnern sich mit Sehnsucht und Bitterkeit an die Zeiten, als Sie im Spiegel eine Person mit einer hübschen, wohlgeformten Figur sahen;</p></li>
                        <li><p><b>Zittert aus Angst um ihre Gesundheit</b> und ihr Leben - weil Übergewicht Gelenke ruiniert, Atherosklerose verursacht, das Herzinfarktrisiko erhöht und das Leben im Durchschnitt um 7 Jahre verkürzt;</p></li>
                        <li><p><b>Aufholen von Diäten und Trainings, die einen körperlich und geistig umbringen</b> - weil man, wenn man verhungert, schwach und gereizt ist und der Versuchung nachgibt, Reue verursacht; Trainings belasten die Gelenke, verursachen Atemnot und schreckliche Muskelschmerzen;</p></li>
                        <li><p><b>Verschwendung von Zeit und Geld</b> für Diätassistenten, ein Fitnessstudio, diätetische Lebensmittel und angeblich Schlankheitsmittel, die in bunten Zeitungen und im Internet beworben werden - die mehr schaden als nützen...</p></li>
                    </ul>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> ...lesen Sie unbedingt die Nachricht, die ich Ihnen geben möchte! </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Jetzt können Sie sicher und schnell all Ihr überschüssiges Fett ein für alle Mal loswerden. Denken Sie, dass<b> Sie bald einen schlanken und wohlgeformten Körper bekommen werden, ohne Ihr eigenes Zuhause verlassen zu müssen.</b> Ohne Vergeudung von Zeit und Geld für das Fitnessstudio, Trainer oder Ernährungsberater. Ohne sich selbst die Nahrung zu verweigern, ohne Opfer und ohne Anstrengung.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Dies ist möglich, weil ich eine revolutionäre autoketogene Formel erfunden habe, die dafür sorgt, dass sich die Fettzellen des Körpers selbsttätig auflösen. Dadurch verschwindet Ihr Körperfett über Nacht und Sie verlieren genau das Gewicht, das Sie erreichen wollen. Sie gewinnen Ihre Gesundheit, Energie und Ihr gutes Aussehen zurück. Und all dies <b>ein für alle Mal - kein Jo-Jo-Effekt!</b></p></div>
                    <div class="x-sticky_bar_2-on-medical-sp  sticky_bar">
                        <div class="b2 fly-box">
                            <div class="box"><span class="ico"></span>
                                <p>16 Personen haben einen Kauf getätigt</p></div>
                        </div>
                    </div>
                    <div class="sticky_bar2-on"></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Aber ich hätte diese revolutionäre Formel nie entdeckt, wenn nicht irgendein tragisches Ereignis in der Vergangenheit stattgefunden hätte. Es begann alles an dem Tag, als...</p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> Meine Frau beinahe gestorben bin </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>An diesem Tag kaufte ich meiner Ehefrau Fumiko rote Rosen. – Aus welchem ​​Anlass? – lachte sie überrascht – kann ich meiner Frau nicht ohne Anlass Blumen schenken? – antwortete ich und küsste sie auf die Stirn. Fumiko verdient alle Blumen dieser Welt. Sie ist eine Schatzfrau. Immer lächelnd, warm und verständnisvoll. Die beste Mutter für unsere Tochter Emi.</p></div>
                    <div class="x-image-medical-sp lazy position-center  left">
                        <img class="image-img"
                                       src="<?php echo get_res("form_big/mobile/res/img/zdjecie_chuda_zona_z_dzieckiem_SP_V2_FINa.jpg"); ?>"/>
                        <div class="text-container">
                            <div style="text-align: center;"><p>Fumiko und Emi auf einem Spaziergang, einige Monate vor dem Ereignis, das das Leben unserer Familie in einen Alptraum verwandelte.</p></div>
                        </div>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Einen Moment später verabschiedeten wir uns, weil ich zu einem Treffen gehen musste. Ich beobachtete meine Frau, als sie freudig die Straße entlang ging. Und plötzlich sind zwei Männer mit Kapuzen vor ihr aufgetaucht. </p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Das waren Sekunden. Einer der Männer wollte Fumiko die Handtasche aus der Hand reißen. Meine Frau versuchte sich zu verteidigen. Ich sah ein Messer blitzen. Fumiko begann verängstigt, vor ihren Angreifern davonzulaufen, aber in all der Amok bemerkte sie nicht, dass<b> sie unter den Rädern eines rasenden Autos gerade auf die Straße rannte.</b> Sie stieß gegen seine Maske und fiel 3 Meter weit weg.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Als ich dort ankam, waren die Männer weg und meine Frau lag auf dem Bürgersteig. Sie war bewusstlos und erlitt schwere Blutergüsse. Eine Menge versammelte sich um sie. Rote Rosenblätter schwebten in der Luft...</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die Banditen überfielen meine Ehefrau am helllichten Tag. Und warum? Für eine Summe, für die wie nicht einmal eine Packung Zigaretten kaufen können.</p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: 700;"> Diese Diagnose war wie ein Urteil für sie </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>- Lassen Sie mich das klarstellen - Ihre Ehefrau wird eine lange Rekonvaleszenz und Rehabilitation benötigen. Es ist ein Wunder, dass sie überhaupt noch lebt. <b>Es besteht kaum eine Chance, dass sie überhaupt wieder Kraft in seinen Beinen gewinnt </b> - sagte der Arzt, als wir im Krankenhaus waren.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>- Das Wichtigste ist, dass Fumiko lebt - dachte ich auf dem Weg zu ihrem Raum.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Als ich das Zimmer meiner Frau betrat, fand ich sie in Tränen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>− Hast du gehört? Ich bin an das Bett gefesselt. Werde ich jemals wieder auf die Beine kommen? Wenn nicht, <b>will ich nicht mehr leben</b> - flüsterte sie erschüttert. Dann umarmte ich sie fest und sagte ein paar ermutigende Worte, um sie zu beruhigen.</p>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Als ich jedoch das Zimmer meiner Frau verließ, brach etwas in mir zusammen. Ich sank auf den Stuhl im Korridor und begann wie ein kleines Kind zu schluchzen. Es waren Tränen des Zorns und der Hilflosigkeit. Sie hat es nicht verdient! Und ich konnte nichts tun, um ihr zu helfen...</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Fumiko verbrachte sechs Monate im Krankenhaus, praktisch die ganze Zeit liegend. Danach blieb sie fast ein Jahr lang in einem Rehabilitationszentrum. Dennoch saß sie immer noch im Rollstuhl. Und das Schlimmste war, dass sie eine ganze Anzahl verschiedener Medikamente, darunter auch starke Steroide, einnehmen musste. Das Ergebnis? <b>Sie hat über 40 kg zugenommen.</b></p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> − Ich bin ein Monster! – schrie sie mit Tränen in den Augen </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Fumiko kam endlich nach Hause zurück. Sie kämpfte um ihre Besserung. Sie ging langsam mit einem Gehwagen und Krücken. Sie hatte Angst vor ihrer Korpulenz. Sie war noch nie so dick. Es war ein Schock für sie, und sie war darüber wütend. Die Ehefrau wollte mutig sein, schnell die volle Bewegungsfähigkeit wiedererlangen, mit dem Training beginnen und Gewicht verlieren. <b>Ich habe gelitten, </b>als ich sah, wie sie jeden Tag mit sich selbst kämpfte.</p>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Eines Nachts wurde ich vom Schrei unserer Tochter geweckt. Ich sprang auf und rannte in ihr Zimmer. Ich habe ein herzzerreißendes Bild gesehen. Meine Frau versuchte weinende Tochter zu beruhigen und sie machte sich mit aller Kraft los. - Lass mich in Ruhe! Mama, rette es! Monster! – schrie meine Tochter. Es stellte sich heraus, dass die Tochter einen bösen Traum hatte, aber als sie ihre Mutter anrief, bekam sie noch mehr Angst, weil sie Fumiko überhaupt nicht erkannte. Die fettleibige Figur der Mutter führte bei unserer Tochter zu einer noch größeren Hysterie.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Seitdem hat sich meine Frau komplett zurückgezogen. Entmutigt hörte sie auf, sich um sich selbst zu sorgen, deckte alle Spiegel im Haus ab, damit sie ihr Spiegelbild nicht sehen musste. Manchmal, wenn ich nach Hause kam, saß sie auf der Couch und starrte mit einem leeren Gesichtsausdruck auf die Wand. Ich sah zu, wie meine geliebte Frau vor Schmerz in schwarze Verzweiflung fiel.</p></div>
                    <div class="x-image-medical-sp lazy position-left  left">
                        <img class="image-img"
                                       src="<?php echo get_res("form_big/mobile/res/img/zdjecie_gruba_zona_z_dzieckiem_SP_V1_FIN.jpg"); ?>"/>
                        <div class="text-container">
                            <div style="text-align: center;"><p>Unsere Tochter hatte Angst vor ihrer fettleibigen Mutter.</p></div>
                        </div>
                    </div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> Wie habe ich den "automatischen Fettverbrennungsaktivator" entdeckt? </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich hatte genug von Tatenlosigkeit. <b>Ich musste meine Ehefrau von der Fettleibigkeit befreien und so meiner Familie Frieden bringen. Ich bin Wissenschaftler und Spezialist für Genforschung. </b> Ich war an der Erfindung von Substanzen beteiligt, die den führenden Pharmaunternehmen Japans Millionen an Umsatz einbrachten. Ich habe beschlossen, all mein Wissen und meine jahrelange Erfahrung einzusetzen, um eine Formel zu entwickeln, die meiner Ehefrau ihre frühere schlanke Figur zurückgeben wird.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich begann sofort mit meiner Forschung. Das Institut für Biotechnologie, an dem ich arbeite, verfügt über eines der modernsten Labors der Welt. Wir testen die Produkte von Pharmaunternehmen, bevor sie auf den Markt kommen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>6 Monate lang habe ich Kombinationen der stärksten natürlichen Substanzen ausprobiert. Mein <b>Ziel war es, eine Formel zu entwickeln, die die automatische Fettverbrennung </b>im Organismus aktiviert. Mit anderen Worten: Ich wollte, dass meine Formel meine Ehefrau ohne Training und Diät schlanker macht. Sie konnte sich körperlich nicht anstrengen oder hungern, und wegen der Steroide nahm sie immer noch zu und aß nicht einmal etwas. Die Formel musste zu 100% sicher sein. Fumikos Verdauungsapparat war ohnehin schon durch die Einnahme von Medikamenten in einem beklagenswerten Zustand, so dass ich sie keiner weiteren Reizung aussetzen konnte.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich habe hauptsächlich nachts gearbeitet, weil ich tagsüber meine beruflichen Pflichten erfüllen musste. Nach so einem halben Jahr war ich ein menschliches Wrack. Ich hatte Angst, dass ich nicht genug Kraft haben würde − dass mein Körper nach so vielen schlaflosen Nächten, ständigem Stress und Anstrengung nicht in der Lage sein würde, dies zu ertragen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Mir wurde immer öfter schwindelig, ich war atemlos, ich fühlte stechende Schmerzen hinter meinem Brustbein. Eines Nachts, 6 Monate nach Beginn meiner Forschungen, landete ich beim Notdienst. Es stellte sich heraus, dass ich vor dem Infarkt war. Ich habe meiner Frau nie davon erzählt.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich hatte jedoch das Gefühl, dem Erfolg immer näher zu kommen und konnte jetzt nicht aufgeben. </p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> Die westlichen Modeinformationen erwiesen sich als echte Rettung </h2>
                    <div class="x-sticky_bar_3-on-medical-sp  sticky_bar">
                        <div class="b3 fly-box">
                            <div class="box"><span class="ico"></span>
                                <div><p>LETZTE EINKÄUFE</p>
                                    <span>- gerade eben Frau Else aus Ilanz</span> <span>- vor 18 Minuten Frau Sophie aus Küsnacht </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky_bar3-on"></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ein Glücksfall hat mir geholfen. Ich habe einen wissenschaftlichen Artikel über ketogene Diät gelesen. Hunderte von wissenschaftlichen Veröffentlichungen bestätigen, dass dies die am gründlichsten erforschte und beste Diät ist - leider nur in Bezug auf die Wirksamkeit. Sie ermöglicht es Ihnen, viel und dauerhaft abzunehmen, erfordert aber große und lang anhaltende Opfer, die Ihrer Gesundheit schaden können.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Das liegt daran, dass sie die vollständige Eliminierung von Kohlenhydraten aus der Diät beinhaltet. Dann, nach 14 Tagen, produziert der Organismus Ketone und beginnt dauerhaft Fett zu verbrennen. Aber es ist absolut verboten, alles zu essen, was Zucker oder Getreide enthält, z.B. Süßigkeiten, Brot, Nudeln, Reis und sogar viele Gemüse und Früchte. Und doch <b>konnte ich meiner Ehefrau nicht befehlen, auf das Essen zu verzichten, um sie noch weiter zu schwächen und sie der Zerstörung</b> des Körpers auszusetzen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Deshalb habe ich den Rahmen meiner Forschung geändert. Ich begann, natürliche Ketone aus Pflanzen zu gewinnen. Etwa ein Dutzend Versuche scheiterten, und doch habe ich alles richtig gemacht...</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich dachte alles wäre verloren. Aber schließlich geschah ein Wunder! Die Apparatur wurde verrückt. Ich schaute in das Mikroskop. Die Formel funktioniert! <b>Unter dem Mikroskop sichtbare Fettzellen zerlegten sich in Energie und verschwanden buchstäblich vor meinen Augen</b>. Ich erfand die Behandlung, um sie meiner Ehefrau zu geben, und rannte nach Hause, so schnell ich konnte!</p></div>
                    <h4 class="x-h4-medical-sp   center" style="font-weight: 700; background: ; color: #FF0000;"> - Du hast mir ein neues Leben geschenkt, sagte sie mit Tränen in den Augen </h4>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Meine Ehefrau vertraut mir unendlich viel Vertrauen und hat sich bereit erklärt, die von mir erfundene Formel auszuprobieren. Wenn ich ihr ein Kapselglas gab, bedankte sie sich mit einem Lächeln. Ich konnte jedoch Müdigkeit und Unglaube in ihre Augen sehen. Sie versuchte damals so viele unwirksame Substanzen, dass sie nur Enttäuschungen erwartete. Aber ich wusste, dass es diesmal anders sein wird!</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Nach ein paar Tagen sah ich ein Lächeln auf ihrem Gesicht – das erste seit mehreren Monaten. - Akinori, sieh mal, <b>ich passe frei in meine Hose, die ich vor einer Woche noch nicht einmal in die Knie bekam</b> - sagte sie lachend.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Der 14. Tag war entscheidend. Der Gewichtsverlust machte es ihr viel leichter zu gehen - sie brauchte keine Kugeln mehr! Sie hat ihre Beinkraft vollständig zurückgewonnen! Es war voller Energie und Freude. Sie schlankte von Tag zu Tag und fühlte sich in ihrem Körper immer besser und besser. <b>Nach 21 Tagen nahm sie 16 kg ab, und nach 42 Tagen nahm sie 32 kg ab. </b>Meine Frau strahlte jeden Tag Freude aus.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p><b>- Mama, du bist wieder so hübsch wie ein Engel - </b>sagte unsere Tochter eines Abends und umarmte Fumiko mit ganzer Kraft. Meine Frau sah mich dann mit einer Dankbarkeit an, die keine Worte ausdrücken konnten. Ich hatte das Gefühl, meine Aufgabe erfüllt zu haben.</p></div>
                    <div class="x-image-medical-sp lazy position-left  left">
                        <img class="image-img"
                                       src="<?php echo get_res("form_big/mobile/res/img/zdjecie_rodzina_SP_V1_FIN.jpg"); ?>"/>
                        <div class="text-container">
                            <div style="text-align: center;"><p>Wir drei waren wieder glücklich</p></div>
                        </div>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Doch eines Abends, einen Monat nach dem Ende der Behandlung, kam meine Frau mit einem ernsten Gesichtsausdruck auf mich zu:</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>- Ich treffe heute meinen Cousin. Ihr Ehemann ist fettleibig und hat daher Atherosklerose. Sie ist schrecklich aufgewühlt, sagt, dass sie " Angst hat, ihren Ehemann zu verlieren, wenn er einen Herzinfarkt hat und Übergewicht ihn ins Grab bringt".</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>– Ich weiß, dass du diese Formel nur für mich erfunden hast. Aber denkt nach - du könntest dem Rest der Familie und Tausenden anderer Menschen helfen. Akinori, du kannst diese Formel nicht vor der Welt verbergen. Es wäre eine Sünde der Vernachlässigung!</p>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Fumiko hatte Recht - ich hatte kein Recht, eine solch bahnbrechende Erfindung für mich zu behalten. Ich habe entschieden, mein Bestes zu tun, um meine Formel einem möglichst breiten Personenkreis zugänglich zu machen. Ich habe die Entdeckung für groß angelegte Forschungen angemeldet.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>5 der wichtigsten Forschungslabors aus der ganzen Welt (USA, Kanada, Europa, China und Japan) bestätigten die höchste Wirksamkeit meiner Formel. Ich habe sie unter dem Namen patentiert: Formel<span style="color: black;"> autoketogen Nixagrim.</span>
                        </p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> Nixagrim lässt das Fett selbst in Energie umwandeln und verschwindet in Rekordzeit </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich wollte, dass meine Erfindung einfach zu bedienen ist, damit sie von möglichst vielen Menschen genutzt werden kann. Deshalb habe ich sie in Form von natürlichen Kapseln verschlossen. <b>Nehmen Sie einfach 2 Kapseln pro Tag ein: </b>die erste vor dem Frühstück und die zweite vor dem Abendessen mit einem Glas Wasser. Dann können Sie beobachten, wie über Nacht überschüssiges Fett, Zellulitis und erschlaffte Haut ausdrucksstark verschwinden.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Bereits 2 Minuten nach der Einnahme der ersten Kapsel Nixagrim beginnt Ihr Körper, Ketone zu produzieren, die eine Selbstverbrennung von Fett verursachen. In nur einer Stunde werden Sie fühlen, dass Sie mehr Energie und Enthusiasmus haben. Das liegt daran, dass das Fett bereits beginnt, sich in Energie umzuwandeln und zu verschwinden.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Menschen, die meine autoketogene Formel verwenden, beschreiben ihre Funktionsweise oft mit dem Wort "Magie". In der Tat mag es auf den ersten Blick so erscheinen. Sie können die Kapsel nehmen und dann einkaufen gehen. Wenn Sie zurückkommen, werden Sie feststellen, dass die Kleidung, die Ihnen am Morgen noch eng anliegt, lockerer geworden ist! <b>Das Fett verdunstet buchstäblich aus Ihrem Körper.</b></p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Viele Menschen erleben dieses Gefühl. Sie schreiben mir in der Aufregung, dass sie in wenigen Tagen die seit Jahren gewohnten Fettpölsterchen aus ihrem Bauch losgeworden sind. Einige Frauen <b>wurden innerhalb von 2 Tagen</b> vollständig von Zellulitis befreit und schämten sich nicht mehr, sich im Schwimmbad oder am Strand auszuziehen. Alle Anwender meiner Formel wurden die Fettleibigkeit in 58, 42, 30, 21 oder weniger Tagen los - je nachdem, wie viele Kilogramm sie abnehmen mussten. Nach Anwendung der autoketogenen Formel verwandelt sich das Fett in Energie und verschwindet buchstäblich von Stunde zu Stunde.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Nach 21 Tagen mit der Formel Nixagrim verlieren Sie bis zu 16 kg. Ihr Gesicht wird schlank machen und ihre Gesichtszüge werden stärker hervortreten. Kein Doppelkinn mehr. <b>Sie werden das verhasste Fett selbst an den lästigsten Punkten loswerden: Bauch, Gesäß und Beine. </b>Sie werden Ihren ganzen Körper radikal straffen. Sie werden mit Ihrem eigenen Aussehen zufrieden sein, und Sie werden mit Stolz in den Spiegel schauen!</p></div>
                    <div class="x-infographics-medical-sp  left" style="">
                        <div class="infographics-mobile">
                            <div><img class="product_visualization x1   lazy_image"
                                      src="<?php echo get_res("form_big/mobile/res/img/wizualizacja_NIXAGRIM_30capsNUTISLIC-ZEA_small_V1_wieksze.webp"); ?>"
                                      alt="img_small_index"></div>
                        </div>
                        <div class="infographics-column">
                            <div style="" class="infographics-box auto"><img class="infographics-icon lazy_image"
                                                                             src="<?php echo get_res("form_big/mobile/res/img/16kg.png?w=55"); ?>"
                                                                             style="" alt="">
                                <div class="infographics-text" style=""><p>SIE WERDEN 16 KG OHNE DIÄT UND TRAINING ABNEHMEN</p>
                                </div>
                                <img class="infographics-img lazy_image" style=""
                                     src="<?php echo get_res("form_big/mobile/res/img/arrow_315.png?w=150"); ?>"
                                     alt=""></div>
                            <div style="" class="infographics-box infographics-box-otherside auto"><img
                                        class="infographics-img lazy_image" style=""
                                        src="<?php echo get_res("form_big/mobile/res/img/arrow_225.png?w=150"); ?>"
                                        alt="">
                                <div class="infographics-text" style=""><p>SIE WERDEN 98 % DER ZELLULITIS LOSWERDEN</p></div>
                                <img class="infographics-icon lazy_image"
                                     src="<?php echo get_res("form_big/mobile/res/img/ico21.png?w=55"); ?>"
                                     style="" alt=""></div>
                        </div>
                        <div class="infographics-column">
                            <div style="" class="infographics-box auto"><img class="infographics-icon lazy_image"
                                                                             src="<?php echo get_res("form_big/mobile/res/img/ico11.png?w=55"); ?>"
                                                                             style="" alt="">
                                <div class="infographics-text" style=""><p>SIE WERDEN IHREN GESAMTEN KÖRPER RADIKAL STRAFFEN</p>
                                </div>
                                <img class="infographics-img lazy_image" style=""
                                     src="<?php echo get_res("form_big/mobile/res/img/arrow_0.png?w=150"); ?>"
                                     alt=""></div>
                            <div class="infographics-img"><img class="product_visualization x1   lazy_image"
                                                               src="<?php echo get_res("form_big/mobile/res/img/wizualizacja_NIXAGRIM_30capsNUTISLIC-ZEA_small_V1_wieksze.webp?h=300"); ?>"
                                                               alt="img_small_index"></div>
                            <div style="" class="infographics-box infographics-box-otherside auto"><img
                                        class="infographics-img lazy_image" style=""
                                        src="<?php echo get_res("form_big/mobile/res/img/arrow_180.png?w=150"); ?>"
                                        alt="">
                                <div class="infographics-text" style=""><p>SIE WERDEN DAS RISIKO VON BELÄSTIGENDEN BESCHWERDEN LOS </p></div>
                                <img class="infographics-icon lazy_image"
                                     src="<?php echo get_res("form_big/mobile/res/img/dolegliwosci.png?w=55"); ?>"
                                     style="" alt=""></div>
                        </div>
                        <div class="infographics-column">
                            <div style="" class="infographics-box auto"><img class="infographics-icon lazy_image"
                                                                             src="<?php echo get_res("form_big/mobile/res/img/ico5.png?w=55"); ?>"
                                                                             style="" alt="">
                                <div class="infographics-text" style=""><p>SIE WERDEN VIEL ENERGIE UND OPTIMISMUS GEWINNEN</p></div>
                                <img class="infographics-img lazy_image" style=""
                                     src="<?php echo get_res("form_big/mobile/res/img/arrow_45.png?w=150"); ?>"
                                     alt=""></div>
                            <div style="" class="infographics-box infographics-box-otherside auto"><img
                                        class="infographics-img lazy_image" style=""
                                        src="<?php echo get_res("form_big/mobile/res/img/arrow_135.png?w=150"); ?>"
                                        alt="">
                                <div class="infographics-text" style=""><p>SIE WERDEN SICH IN IHREM SCHLANKEN KÖRPER WUNDERBAR FÜHLEN</p>
                                </div>
                                <img class="infographics-icon lazy_image"
                                     src="<?php echo get_res("form_big/mobile/res/img/ico31.png?w=55"); ?>"
                                     style="" alt=""></div>
                        </div>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Solche Ergebnisse wurden von einer Kontrollgruppe <b>von 312.000 Frauen und Männern aus der ganzen Welt, unterschiedlichen Alters und mit unterschiedlichen Ursachen von Übergewicht erzielt.</b> Unabhängig davon, ob Sie 29 oder 89 Jahre alt sind oder aufgrund schlechter Essgewohnheiten, nach Schwangerschaft, Hormonen oder Stress nicht abnehmen können - mit meiner autoketogenen Formel Nixagrim können Sie effektiv, sicher und ein für alle Mal abnehmen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Auch wenn Sie schon lange die Hoffnung verloren haben, jemals einen schlanken Körper zu bekommen, sollten Sie wissen, dass Sie in 21 Tagen 16 kg schlanker sein werden. Und wenn Sie mehr Gewicht verlieren wollen, verwenden Sie die Formel einfach länger. Es <b>ist völlig sicher</b>, weil meine Formel ausschließlich auf natürlichen Inhaltsstoffen basiert.</p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> Warum ist meine autoketogene Formel so wirksam? </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Komplizierte Stoffwechselprozesse treten im subkutanen Gewebe aufgrund meiner autoketogenen Formel Nixagrim auf. Ohne jedoch auf Details einzugehen, werde ich die Wirkungsweise in wenigen einfachen Worten erläutern.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Haben Sie sich jemals gefragt, warum manche Menschen nicht auf ihre Ernährung achten müssen - sie essen, was, wann und in welchen Mengen sie wollen, und ihre Figur ist immer noch schlank? All dies ist auf einen Faktor zurückzuführen - den schnellen Stoffwechsel. Wenn der Stoffwechsel schnell ist, wandelt der Organismus alle ihm zugeführten Kalorien leicht in Energie um, und der Körper nimmt nicht an Gewicht zu. Wenn der Stoffwechsel langsam ist, sammelt der Organismus Kalorien in Form von Fett an, auch wenn Sie sehr wenig essen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die Stoffwechsel ist ein individuelles Merkmal für jeden Menschen. Sie ist genetisch bedingt. Es ist fast unmöglich, ihn zu beschleunigen, aber es ist sehr leicht, ihn durch die Einnahme von Medikamenten, unregelmäßige Mahlzeiten, Stress, hormonelle Störungen und Bewegungsmangel zu verlangsamen. Es gibt eine Vielzahl von Faktoren.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Auf dem Markt finden Sie Dutzende von Tees und Supplementen, die versprechen, Ihren Stoffwechsel zu beschleunigen. Dies ist jedoch ein leeres Versprechen und ein Marketing-Trick, dass die gewinnhungrigen Konzerne ihre Bankkonten aufstocken wollen. Sie kümmern sich nicht um Ihre Gesundheit, für sie zählt nur der Verdienst. Deshalb berieseln sie die Menschen ein und verdienen Geld an ihren Tragödien, indem sie ihnen wertlose Produkte hineinschieben.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die von mir entwickelte autoketogene Formel Nixagrim funktioniert ganz anders. Sie <b>reduziert wirksam Fett unabhängig von Ihrem Stoffwechsel, Alter, Geschlecht, Ihrer Medikation, Ihrer Ernährung und Ihrem Lebensstil. </b>Sie stimuliert einfach das gesamte überflüssige Fettgewebe zur natürlichen Verbrennung. Sicher und dauerhaft - genau wie bei einer ketogenen Diät - die wirksamste und zuverlässigste getestete Diät. Das Abnehmen mit Nixagrim ist jedoch völlig sicher, es erfordert keine Opfer oder Änderungen der Essgewohnheiten. <b>Sie essen, was, wann und wie viel Sie wollen, und Sie verlieren automatisch an Gewicht.</b></p></div>
                    <div class="x-before_after_one_photo-medical-sp  left">
                        <div class="before_after_one_photo-row">
                            <img
                                        src="<?php echo get_res("form_big/mobile/res/img/IMG_wizualizacja_przed-po_SP_V1.jpg"); ?>"
                                        class="before_after_one_photo-img">
                        </div>
                        <div class="before_after_one_photo-row">
                            <div class="before_after_one_photo-title before_after_one_photo-title-before"><p>VORHER</p>
                            </div>
                            <div class="before_after_one_photo-title before_after_one_photo-title-after"><p>NACHHER</p>
                            </div>
                        </div>
                        <div class="before_after_one_photo-row">
                            <div class="before_after_one_photo-text"><p>Zuviel Körperfett - ein schwerer und schmerzhafter Körper ohne Energie.</p></div>
                            <div class="before_after_one_photo-text"><p>Fettgewebe nach natürlicher Zersetzung - ein leichter, gesunder und energiegeladener Körper.</p></div>
                        </div>
                    </div>
                    <h4 class="x-h4-medical-sp   center" style="font-weight: ; background: green; color: #FFFFFF;"> SIE IST 100% SICHER UND EINFACH IN DER ANWENDUNG </h4>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die revolutionäre Zusammensetzung meiner Formel ermöglicht es Ihnen, ohne Gymnastik und Diät abzunehmen (wie es bei meiner Frau der Fall war), und zwar unabhängig von der Ursache und Dauer des Übergewichts. Aus diesem Grund wurde meine autoketogene Formel Nixagrim als "das japanische Geheimnis der schlanken Figur" gefeiert und ich <b>erhielt für meine Entdeckung den Konfuzius-Preis (asiatisches Äquivalent zum Nobelpreis).</b></p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die wertvollste Belohnung für mich sind jedoch die Tausenden von Briefen aus der ganzen Welt, die ich von Menschen erhalte, die bereits meine autoketogene Formel Nixagrim verwendet haben. Sie beschreiben die außergewöhnlichen Geschichten ihrer Metamorphose und erzählen, wie die Behandlung ihr Leben zum Besseren verändert hat. Lassen Sie mich (natürlich mit Zustimmung des Autors) einen Brief von Frau Mila aus der Schweiz zitieren, die als eine der Freiwilligen meine Formel getestet hat. <b>Frau Mila schreibt:</b></p></div>
                    <div style="background: " class="x-testimonial-medical-sp border-default">
                        <img class="img"
                                       src="<?php echo get_res("form_big/mobile/res/img/KOBIETA_40_lat_15_kg_V1_FIN.jpg"); ?>"
                                       alt="">
                        <div class="title" style="color:"></div>
                        <div class="text"><p>− Diese Behandlung hat mein Leben verändert! Früher sah ich aus wie eine dicke Frau. Ich wollte nicht rausgehen, ich möchte, damit Leute mich nicht sehen. Die Kinder im Hof nannten mich "dicke Dame". Und diese großartige Behandlung war genug, und ich bin schlanker. Plötzlich sahen mich die Herren auf der Straße an. Und mein Ehemann wurde eifersüchtig, und er sorgt sich wieder um mich, wie vor der Hochzeit... Wenn ich diese Behandlung nicht machen würde, würde ich den Fehler meines Lebens machen. An dieser Stelle möchte ich dem Arzt danken und ihm viel Erfolg bei seiner weiteren Arbeit wünschen!</p></div>
                        <div class="stars"><img src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>"
                                                class="star"> <img
                                    src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star"> <img
                                    src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star"> <img
                                    src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star"> <img
                                    src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star"></div>
                        <div class="signature"></div>
                    </div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: 700;"> Sie riskieren nichts! </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die autoketogene Formel Nixagrim hat bereits Tausenden von Menschen geholfen, das Problem der Fettleibigkeit loszuwerden. Es ist eine weltweite Entdeckung mit nachgewiesener Wirksamkeit, die von der dreifachen Zufriedenheitsgarantie abgedeckt ist: Echtheit, Qualität und Zufriedenheit.</p></div>
                    <div style="text-align: center" class="x-guarantee_2-medical-sp">
                        <div class="box"><img src="<?php echo get_res("form_big/mobile/res/img/ico1.png"); ?>"/> <img
                                    src="<?php echo get_res("form_big/mobile/res/img/ico2.png"); ?>"/> <img
                                    src="<?php echo get_res("form_big/mobile/res/img/ico3.png"); ?>"/></div>
                    </div>
                    <h4 class="x-h4-medical-sp   center" style="font-weight: ; background: green; color: #FFFFFF;">
                    Dreifache Zufriedenheitsgarantie </h4>
                    <div class="x-gps-medical-sp">
                        <div class="gps_img">
                            <img class="gps_img-img"
                                           src="<?php echo get_res("form_big/mobile/res/img/de_gps_quality.png"); ?>" alt="">
                            <img class="gps_img-img"
                                           src="<?php echo get_res("form_big/mobile/res/img/de_gps_original.png"); ?>" alt="">
                            <img class="gps_img-img"
                                           src="<?php echo get_res("form_big/mobile/res/img/de_gps_diamond.png"); ?>" alt="">
                        </div>
                        <div class="gps_text">
                            <article>
                                <div class="gps_text-title"><p>Echtheitsgarantie</p></div>
                                <div class="gps_text-text"><p>Sie können sicher sein, dass Sie das Originalprodukt erhalten, das nur über unsere Webseite erhältlich ist.</p></div>
                            </article>
                            <article>
                                <div class="gps_text-title"><p>Qualitätsgarantie/p></div>
                                <div class="gps_text-text"><p>Die Reinheit der Wirkstoffe Nixagrim entspricht den höchsten Qualitätsstandards. All dies, damit ihre Wirkung Ihre Erwartungen zu 100% erfüllen kann.</p></div>
                            </article>
                            <article>
                                <div class="gps_text-title"><p>Zufriedenheitsgarantie</p></div>
                                <div class="gps_text-text"><p>zahlreiche Verbrauchertests bestätigen die hohe Wirksamkeit von Nixagrim.</p></div>
                            </article>
                        </div>
                    </div>
                    <div class="x-sticky_bar_4-on-medical-sp  sticky_bar">
                        <div class="b4 fly-box">
                            <div class="box"><span class="ico"></span>
                                <p>
                                <p>Bestes Angebot heute254 CHF 127 CHF </p></p>                    </div>
                        </div>
                    </div>
                    <div class="sticky_bar4-on"></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> PASSEN Sie auf Fälschungen auf! </h2>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Bald nachdem meine autoketogene Formel Nixagrim veröffentlicht wurde, wurde der Markt buchstäblich mit allen Arten von Medikamenten überschwemmt, die angeblich Fett verbrennen. Lassen Sie sich nicht täuschen! Die Verwendung von ungeprüften Fälschungen wird Ihnen nicht nur nicht helfen, Ihr Übergewicht loszuwerden, sondern kann auch gefährlich für Ihre Gesundheit sein!</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Die Zusammensetzung meiner Formel wurde mit größter Sorgfalt entwickelt. Kein Inhaltsstoff wurde dort zufällig gefunden, und die einzigartige Zusammensetzung ist durch ein Patent geschützt. Es ist unmöglich, sie ohne Kenntnis des Patents zu reproduzieren, daher sind alle Fälschungen bestenfalls wirkungslos - und schlimmstenfalls gesundheitsschädlich. Wenn Sie also 100 % sicher sein wollen, dass Sie in 21 Tagen 16 kg abnehmen werden - wählen Sie keine Fälschungen.</p></div>
                    <h2 class="x-h2-medical-sp     center" style="color: #FF0000; font-weight: ;"> Jetzt können auch Sie 21 Tage lang 16 kg abnehmen </h2>
                    <div class="x-sticky_bar_5-on-medical-sp  sticky_bar5-on sticky_bar">
                        <div class="b5 fly-box">
                            <div class="box"><span class="ico"></span>
                                <p>Häufig bestelltes Produkt! Letzte Einheiten</p></div>
                        </div>
                    </div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Lassen Sie sich davon nicht anstecken, Sie müssen selbst hungern, um das Übergewicht loszuwerden. Oder schlimmer noch - Sie müssen Ihren Bauch unter ein chirurgisches Skalpell legen. Wissen Sie, dass Sie bereits Übergewicht loswerden, Gesundheit, Energie und Selbstvertrauen gewinnen können.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Große Konzerne kämpfen buchstäblich um ein Patent für meine autoketogene Formel Nixagrim. Mir wurden Millionen von Verträgen angeboten, aber das ist nicht der Grund, warum ich die autoketogene Formel entwickelt habe.<b>Mein Ziel ist es, so viele Menschen wie möglich von Fettleibigkeit zu befreien, die ihnen Gesundheit </b>und Vertrauen raubt. Ich möchte, dass jeder zufrieden ist mit dem, wie er/sie aussieht und sich fühlt, genau wie meine Frau jetzt.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Ich habe alle Anstrengungen unternommen, um sicherzustellen, dass meine autoketogene Formel Nixagrim so schnell wie möglich weltweit verfügbar ist. Abschließend bin ich stolz, verkünden zu können, dass jetzt jeder sie benutzen und ein für alle Mal sicher abnehmen kann.</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Danke, dass Sie meine Geschichte gelesen haben. Ich hoffe, Sie erinnern sich eines Tages an diesen Tag und denken, "es war der Tag, der mein Leben verändert hat".</p></div>
                    <div class="x-p-medical-sp" style="text-align: left; "><p>Deshalb ermutige ich Sie, diese Gelegenheit zu nutzen! Um die autoketogene Formel Nixagrim zu erhalten, müssen Sie kein Geld online senden oder mit einer Karte bezahlen. Füllen Sie einfach das Formular in 2 Minuten aus und nach einigen Tagen erhalten Sie ein Paket, das Sie bequem beim Kurier oder Postboten bezahlen.</p></div>
                    <div class="x-p-medical-sp" style="text-align: right; "><p>Schöne Grüße!</p></div>
                    <div class="x-p-medical-sp" style="text-align: right; "><p>Dr. Akinori Tanaka</p></div>
                    <div class="x-testimonial-slider_mobile-medical">
                        <div class="slider">
                            <div class="slides">
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img src="<?php echo get_res("form_big/mobile/res/img/40.png"); ?>" alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p>Ich habe 30 Kilo abgenommen!</p></div>
                                        <div class="text"><p>Diese Behandlung wirkt Wunder! Ich konnte mich nicht mehr im Spiegel ansehen. Ich sah aus wie ein fettiger Seehund... Ich hörte auf, einkaufen zu gehen, weil es nirgendwo solche Kleidung gab, um mich in dieser Kleidung erträglich aussehen zu lassen. Einmal vertraute ich meiner Cousine mein Problem an und sie forderte mich zur Formel Nixagrim auf. Es dauerte nicht lange, um mich zu überzeugen. Ich habe es verwendet – und ich konnte meinen Augen nicht trauen. <b>Die Kilos verschwanden, als hätte ich irgendeine Zaubertrank verwendet. </b>Nach weniger als 3 Wochen wog ich 16 Kilo weniger. Insgesamt habe ich bereits 30 kg abgenommen, und ich nehme immer noch ab. Tatsächlich – ein tolles Gefühl. Ich empfehle es jeder Frau!</p>
                                        </div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Anna Meyer, 35 Jahre, Bern</p></div>
                                    </div>
                                </div>
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img src="<?php echo get_res("form_big/mobile/res/img/test_15.jpg"); ?>"
                                                       alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p><b>Schnell und effektiv</b></p></div>
                                        <div class="text"><p>Ich glaube nicht an Märchen und muss alles selbst überprüfen. Alle Nachbarn trompeteten noch immer über diese Behandlung, dass sie wie ein "Gegenmittel gegen Übergewicht" sei. – Ich werde es nicht glauben, bis ich es sehe! – sagte ich und testete. Und ich sah! Ich bin nach der zweiten Woche der Behandlung. <b>Mein Bauch hat sich verkleinert, so dass ich so aussehe, als würde ich jeden Tag trainieren (nicht trainieren!). </b>Die erschlaffte Schulterhaut ist verschwunden. Ich habe das Gefühl, dass ich jeden Tag Fett verliere. Wenn es so weitergeht, wird mein Mann mich eines Tages nicht wiedererkennen, wenn er nach Hause kommt. Empfehlenswert!</p></div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Lara Graf, 73 Jahre, Uster</p></div>
                                    </div>
                                </div>
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img src="<?php echo get_res("form_big/mobile/res/img/test_11.jpg"); ?>"
                                                       alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p><b>Die einzige Methode, die wirkt</b></p></div>
                                        <div class="text"><p>Mein Enkel sagte mir einmal - Oma, du siehst aus wie ein Nilpferd. Sie wissen, es ist ein Kind, daher weiß es noch nicht, dass es nicht richtig ist, solche Dinge zu sagen. Aber dann stellte ich fest, dass ich mich um mich selbst kümmern musste. Ich versuchte verschiedene Medikamente zum Abnehmen, aber sie kosteten mich nur viel Geld und halfen nicht. Endlich habe ich diese Formel gefunden. Ich dachte, wenn es sich um einen so guten Arzt handelt, sollte ich es versuchen. Und es hat sich gelohnt! Jetzt fühle ich mich so, als hätte jemand mir meine Jugend wieder gegeben. <b>Alle überschüssigen Kilogramm sind verschwunden.</b>  Danke!</p></div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Sofia Steiner, 62 Jahre, Emmen</p></div>
                                    </div>
                                </div>
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img
                                                    src="<?php echo get_res("form_big/mobile/res/img/Testimonial_3.png"); ?>"
                                                    alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p><b>Sie nennen mich nicht mehr Bär</b></p></div>
                                        <div class="text"><p>Ich war fettleibig und langsam. Ich war sehr verärgert darüber. Vor allem, da meine Ehefrau lamentierte und Angst um meine Gesundheit hatte. Aber ich würde mir nicht umsonst für nichts in der Welt ein Essen oder ein Bier nach der Arbeit versagen. Deshalb werde ich dem Arzt für den Rest meines Lebens dankbar sein, dass er diese Behandlung zur Gewichtsabnahme den Menschen zur Verfügung stellt. <b>Ich habe eine gute Form, ich fühle mich gut und muss mir nichts vorenthalten.</b></p>
                                        </div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Nino Widmer, 38 Jahre, Dübendorf</p></div>
                                    </div>
                                </div>
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img src="<?php echo get_res("form_big/mobile/res/img/test_14.jpg"); ?>"
                                                       alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p><b>Dies ist eine Chance für ein neues Leben für mich</b></p></div>
                                        <div class="text"><p>Nach der Scheidung habe ich mich schrecklich vernachlässigt, ich hörte auf, mich um mich selbst zu kümmern. Aber nach gewisser Zeit wollte ich einen Mann kennen lernen und mir die Chance geben, glücklich zu sein. Ich habe einen Mann auf einer Dating-Seite getroffen. Wir haben viel miteinander geschrieben und ich dachte, wir verstehen uns. Als wir uns jedoch "live" in einem Restaurant trafen, entkam er, während ich auf der Toilette war. Ich weinte in mein Kissen, beschloss dann aber zu handeln. Eine Arbeitskollegin hat diese Formel Nixagrim sehr empfohlen, also bin ich ein Risiko eingegangen. Und nach 21 Tagen kann ich mich im Spiegel kaum wiedererkennen! <b>Ich nehme ab, damit ich wie ein Model aussehe.</b> Ich bin zurzeit mit einem außergewöhnlichen Mann zusammen und fühle mich glücklich.</p></div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Giulia Frei, 36 Jahre, Neuenburg</p></div>
                                    </div>
                                </div>
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img src="<?php echo get_res("form_big/mobile/res/img/Australia.png"); ?>"
                                                       alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p><b>Ausgezeichneter körperlicher Zustand ohne Fitnessstudio</b></p></div>
                                        <div class="text"><p>Ich wurde schon immer DICK genannt. Ich war sehr verärgert darüber. Kein Mädchen wollte mit mir verabreden. Im Fitnessstudio haben sie mich nur ausgelacht. Ich war depressiv. Und <b>diese Behandlung hat mich ohne Fitnessstudio schlanker gemacht, und ich esse weiter, was ich will.</b> Einfach perfekt.</p>
                                        </div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Leonardo Wyss, 31, Jahre, Lugano</p></div>
                                    </div>
                                </div>
                                <div class="slide flex flex-column">
                                    <div class="slide-image">
                                        <img
                                                    src="<?php echo get_res("form_big/mobile/res/img/foto_komentarz_1_PRZED_PO_V1_FIN.jpg"); ?>"
                                                    alt="">
                                    </div>
                                    <div class="slide-text">
                                        <div class="headline"><p><b>Natürliche Weise zu Übergewicht</b></p></div>
                                        <div class="text"><p>Ich konnte in keiner Weise abnehmen: Diäten, Training, buchstäblich nichts half. Ich griff verzweifelt nach Nixagrim. Aber ich hatte Angst, dass es, da es sich um eine so starke Formel handelt, Nebenwirkungen haben könnte. Aber dem ist nicht so! Ich fühlte mich einfach besser, weil ich viel Energie hatte.</p></div>
                                        <span class="rating" title="Ocena">                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                         <span
                                                    class="yellowstar">★</span>                       </span>
                                        <div class="sign"><p>Alina Brunner, 45 Jahre, Zürich</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-buttons"></div>
                        </div>
                    </div>
                    <div class="x-sticky_bar_6-on-medical-sp  sticky_bar_6">
                        <div class="b6 fly-box">
                            <div class="box"><span class="ico"></span>
                                <div class="text">SONDERANGEBOT LÄUFT AB IN: <span class="b6_counter">03:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="b7 fly-box">
                            <div class="box"><span class="ico"></span>
                                <div>
                                    <div class="text blink">LETZTE CHANCE AUF FINANZIERUNG!!!</div>
                                </div>
                            </div>
                            <div class="cta_fly">Klicken Sie hier und Sie erhalten</div>
                        </div>
                    </div>
                    <div class="sticky_bar6-on"></div>
                </div>
                <div class="container__offer">
                        <h2 class="x-h2-medical-sp
    center" style="color: #FF0000; font-weight: ;border: 3px solid #ff0000; border-bottom: none; margin: 20px 20px 0; padding: 20px;">
  ACHTUNG! KOSTENLOSES Geschenk für Sie
</h2><div class="x-p-medical-sp " style="text-align: left; border: 3px solid #ff0000; border-top: none; border-bottom: none; margin: 0 20px; padding: 0 20px;">
<p>Nur jetzt, mit der Behandlung Nixagrim, erhalten Sie ein Geschenk kostenlos.<b> </b>Es handelt sich dabei um transdermale Schlankheitspflaster, die <b>den Prozess des Verlustes von unnötigen Kilogrammen unterstützen. </b></p></div>
<div class="x-p-medical-sp " style="text-align: left; border: 3px solid #ff0000; border-top: none; margin: 0 20px; padding: 20px;">
<p>Die Pflaster garantieren 2-mal schnellere Wirkung der Behandlung. Dank ihnen werden Sie Ihren Stoffwechsel erhöhen, Toxinen aus dem Organismus entfernen und den Spiegel des schlechten Cholesterins senken. Als Ergebnis werden Sie nicht nur schneller abnehmen, sondern auch die richtige Funktion Ihrer inneren Organe sicherstellen. All dies ist <b>KOSTENLOS.</b></p></div>
<div class="x-offer_mobile-medical-sp left ">

						<div class="offer_mobile-counter">
				<div class="offer_mobile-counterText">
											Verfügbarkeit in aktueller Partie (500):
									</div>
				<span class="offer_mobile-number">
											0				</span>
				<span class="offer_mobile-number">
											1				</span>
				<span class="offer_mobile-number">
											3				</span>
			</div>
		
		<div class="offer_mobile-title"><p>ERHALTEN SIE <span style="color: green;">Nixagrim</span> PLUS GRATIS EIN ZUSÄTZLICHES GESCHENK IN 2 EINFACHEN SCHRITTEN</p></div>

			

	
		<div class="text"><strong>JA!</strong> Ich möchte die Behandlung Nutislic für die Teilnahme am Rabattclub bekommen. Das bedeutet, dass meine Wahl völlig sicher ist, weil das Produkt von einer dreifachen Zufriedenheitsgarantie abgedeckt ist. Das Paket wird mir in den kommenden Tagen ohne zusätzliche Kosten per Post oder Kurier zugestellt.</div>

	

		
		<article style="">
			
			        <img class="offer_mobile-img product_visualization x1" src="<?php echo get_res("form_big/mobile/res/img/NIXAGRIM_SPECIAL_OFFER_V2a_MOBILE_2.webp"); ?>" alt="">
										
							<div class="offer_mobile-price">			
					<div class="offer_mobile-price1"><p>254</p></div>
					<div class="offer_mobile-price2"><p>115CHF</p></div>
				</div>
					</article>
</div>
</div>
                <div class="form" id="form">

                    <div class="promo-box">

                        <div class="box">

<span class="ico">
</span>

                            <p>HERZLICHE GLÜCKWÜNSCHE!

                                <span>Sie können die Aktion nutzen
</span></p>
                        </div>
                    </div>     <h2>Bestellformular</h2>

                    <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/safety.css"); ?>" media="none" onload="if(media!='all')media='all'"/>
                    <noscript>

                        <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/safety.css"); ?>">
                    </noscript>
                    <noscript>

                        <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/safety_mobile_ES.css"); ?>">
                    </noscript>

                    <div class='safety-icons'><img src="<?php echo get_res("form_big/mobile/res/img/ico1.png"); ?>" alt=""><img src="<?php echo get_res("form_big/mobile/res/img/ico2.png"); ?>" alt=""><img src="<?php echo get_res("form_big/mobile/res/img/ico3.png"); ?>" alt="">
                    </div>

                    <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/style1.css"); ?>" media="none" onload="if(media!='all')media='all'"/>
                    <noscript>

                        <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/style1.css"); ?>">
                    </noscript>

                    <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/style_2step.css"); ?>" media="none" onload="if(media!='all')media='all'"/>
                    <noscript>

                        <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/style_2step.css"); ?>">
                    </noscript>

                    <div class="steps flex flex-row space-beetween">

                        <div class="one active flex flex-column">

                            <div class="text">

<span>Schritt 1
</span> Ihre Daten
                            </div>

                            <div class="pointer">
                            </div>
                        </div>

                        <div class="line line1 dotted">
                        </div>

                        <div class="two flex flex-column">

                            <div class="text">

<span>Schritt 2
</span> Letzter Schritt
                            </div>

                            <div class="pointer">
                            </div>
                        </div>
                    </div>

                    <form action="" class="form_mobile_wrapper_19990516" method="POST" data-ajax="false" id="form-mobile" onsubmit="return checkLastStep();" novalidate>
                        <div class="step1">

                            <div class="input-box">

                                <div class="floatingSpan">
                                    <input id="name" type="text" name="name"  data-role="none" placeholder=" " value="<?php echo htmlspecialchars((isset($_POST["name"]) ? $_POST["name"] : $order["name"])); ?>" >

                                    <span class="floating-label">Vorname
</span>

                                    <span class="error-text">Das Feld darf nicht leer sein
</span>
                                </div>
                            </div>

                            <div class="input-box">

                                <div class="floatingSpan">
                                    <input data-role="none" placeholder=" " id="surname" type="text" name="surname" value="<?php echo htmlspecialchars((isset($_POST["surname"]) ? $_POST["surname"] : $order["surname"])); ?>">

                                    <span class="floating-label">Nachname</span>

                                    <span class="error-text">Das Feld darf nicht leer sein</span>
                                </div>
                            </div>

                            <div class="input-box">

                                <div class="floatingSpan">
                                    <input data-role="none" placeholder=" " id="phone" type="tel" name="phone" value="<?php echo htmlspecialchars((isset($_POST["phone"]) ? $_POST["phone"] : $order["phone"])); ?>">

                                    <span class="floating-label">Telefon</span>

                                    <span class="error-text">Das Feld darf nicht leer sein</span>
                                </div>
                            </div>                             <button type="button" id="hideTextOnB7" class="toStep2">Nächster Schritt</button>

                            <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/payment.css"); ?>" media="none" onload="if(media!='all')media='all'"/>
                            <noscript>

                                <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/payment.css"); ?>">
                            </noscript>

                            <span class="info">Nächster Schritt<strong>Versanddaten</strong></span>
                        </div>

                        <div class="step2">

                            <div class="input-box">

                                <p>Email</p>

                                <div class="floatingSpan">
                                    <input data-role="none" placeholder=" " type="email" id="email" name="email" value="<?php echo htmlspecialchars((isset($_POST["email"]) ? $_POST["email"] : $order["email"])); ?>" >

                                    <span class="floating-label">Hier E-Mailadresse hinterlassen
</span>

                                    <span class="error-text">Das Feld darf nicht leer sein
</span>
                                </div>
                            </div>

                            <div class="input-box">

                                <p>Richtung</p>

                                <div class="floatingSpan">
                                    <input data-role="none" placeholder=" " id="street" type="text" name="street">

                                    <span class="floating-label">Straße
</span>

                                    <span class="error-text">Das Feld darf nicht leer sein
</span>
                                </div>
                            </div>

                            <div class="flex flex-row">

                                <div class="input-box floatingSpan">
                                    <input data-role="none" placeholder=" "  id="street_nr" type="text" name="street_nr">

                                    <span class="floating-label">Hausnummer

                                    <span class="error-text">Das Feld darf nicht leer sein
</span>
                                </div>

                                <div class="input-box floatingSpan">
                                    <input data-role="none" placeholder=" "  id="home_nr" type="text" name="home_nr">

                                    <span class="floating-label nr_home">Wohnungsnummer
</span>
                                </div>
                            </div>

                            <div class="input-box floatingSpan">
                                <input data-role="none" placeholder=" "  id="pcode" name="pcode" type="text">

                                <span class="floating-label">PLZ
</span>

                                <span class="error-text">Das Feld darf nicht leer sein
</span>
                            </div>

                            <div class="input-box floatingSpan">
                                <input data-role="none" placeholder=" "  id="city" type="text" name="city" value="<?php echo htmlspecialchars((isset($_POST["city"]) ? $_POST["city"] : $order["city"])); ?>">

                                <span class="floating-label">Localidad
</span>

                                <span class="error-text">Das Feld darf nicht leer sein
</span>
                            </div>

                            <div class="input-box">

                                <p>Land</p>
                                <select onchange="paczkomat();" data-role="none" name="country" id="country">
                                    <option value="DZ">Algerien</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AR">Argentinien</option>
                                    <option value="AM">Armenien</option>
                                    <option value="AZ">Aserbaidschan</option>
                                    <option value="AU">Australien</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrein</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BE">Belgien</option>
                                    <option value="BZ">Belize</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="DE">Deutschland</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominikanische Republik</option>
                                    <option value="DK">Dänemark</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estland</option>
                                    <option value="FJ">Fidschi</option>
                                    <option value="FI">Finnland</option>
                                    <option value="FR">Frankreich</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Griechenland</option>
                                    <option value="GB">Großbritannien</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HN">Honduras</option>
                                    <option value="IE">Irland</option>
                                    <option value="IS">Island</option>
                                    <option value="IT">Italien</option>
                                    <option value="JM">Jamaika</option>
                                    <option value="JP">Japan</option>
                                    <option value="JO">Jordanien</option>
                                    <option value="KH">Kambodscha</option>
                                    <option value="CA">Kanada</option>
                                    <option value="KZ">Kasachstan</option>
                                    <option value="KG">Kirgisistan</option>
                                    <option value="CO">Kolumbien</option>
                                    <option value="KM">Komoren</option>
                                    <option value="HR">Kroatien</option>
                                    <option value="CU">Kuba</option>
                                    <option value="LV">Lettland</option>
                                    <option value="LB">Libanon</option>
                                    <option value="LY">Libyen</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Litauen</option>
                                    <option value="LU">Luxemburg</option>
                                    <option value="MG">Madagaskar</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Malediven</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolei</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NZ">Neuseeland</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NL">Niederlande</option>
                                    <option value="NO">Norwegen</option>
                                    <option value="TL">Osttimor</option>
                                    <option value="PG">Papua-Neuguinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippinen</option>
                                    <option value="PL">Polen</option>
                                    <option value="PT">Portugal</option>
                                    <option value="RO">Rumänien</option>
                                    <option value="RU">Russland</option>
                                    <option value="SV">Salvador</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SE">Schweden</option>
                                    <option value="CH" selected="selected">Schweiz</option>
                                    <option value="SC">Seychellen</option>
                                    <option value="SK">Slowakei</option>
                                    <option value="SI">Slowenien</option>
                                    <option value="ES">Spanien</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SR">Surinam</option>
                                    <option value="KR">Südkorea</option>
                                    <option value="TJ">Tadschikistan</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TT">Trinidad und Tobago</option>
                                    <option value="CZ">Tschechische Republik</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TR">Türkei</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="HU">Ungarn</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Usbekistan</option>
                                    <option value="VA">Vatikan</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="BY">Weißrussland</option>
                                    <option value="CY">Zypern</option>
                                    <option value="AT">Österreich</option>
                                </select>
                            </div>

                            <div id="pay-form">

                                <div class="input-box">
                                    <tr>
                                        <td>

                                            <p>Versandart</p>
                                            <select data-role="none" onchange='form_pay();' id="deliveryForm" name="deliveryForm">

                                                <option selected value="express">Kurier</option>

                                                <option value="inpostMachine">InPost Paczkomaty</option>

                                                <option value="standard">Poczta Polska</option>
                                            </select>
                                        </td>
                                    </tr>
                                    </table>
                                </div>

                                <div id="inpostButtonShow" style='display: none;'>                     <button type="button" class="inpostButtonShowClick">Wybierz paczkomat</button>
                                </div>

                                <div class="inpostInfo" style='display: none;'>

                                    <div class="chooseNo">Nie wybrano paczkomatu
                                    </div>
                                </div>
                            </div>

                            <div class="input-box">
                                <input type="text" name="note2" placeholder="Anmerkungen für den Lieferanten">
                            </div>
                            <input type="hidden" name="address" id="address" value="<?php echo htmlspecialchars((isset($_POST["address"]) ? $_POST["address"] : $order["address"])); ?>">
                            <input type="hidden" name="note" id="note" value="">

                            <div class="input-box flex flex-row checkbox" id="coddiv">
                                <input type="checkbox" value="1" name="pay_on_delivery" id="codinp">
                                <label for="codinp"><strong>Zahlungsform</strong> Aktivieren Sie dieses Kontrollkästchen, wenn Sie bei Lieferung bezahlen möchten. Wenn Sie dieses Kontrollkästchen nicht aktivieren, werden Sie im nächsten Schritt zur Zahlung aufgefordert.
                                </label>
                            </div><button id="last_button" type="submit">Klicken Sie hier, um Nutislic zu erhalten</button>

                            <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/payment.css"); ?>" media="none" onload="if(media!='all')media='all'"/>
                            <noscript>

                                <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/payment.css"); ?>">
                            </noscript>
                        </div>
                    </form>
                    <script src="<?php echo get_res("form_big/mobile/res/js/validation.js"); ?>" async>
                    </script>
                    <script src="<?php echo get_res("form_big/mobile/res/js/form_doubleStep.js"); ?>" async>
                    </script>
                </div>
            </div>
            <div class="container__wrapper--right">
                <div class="container__wrapper--sidebar desktop"></div>
            </div>
        </div>
        <div class="container__footer">
            <div class="copyright"><p>Copyright © 2005-2021.</p>
                <p>All rights Reserved.</p></div>
            <style>    .copyright {
                    font-family: 'Roboto';
                    direction: ltr;
                    width: 100%;
                    color: #aaa;
                    font-size: 12px;
                    font-weight: 400;
                    line-height: 15px;
                    text-align: center;
                    margin: 0 auto;
                    padding: 20px;
                } </style>
            <div class="x-footer_links-medical-sp">
                <link type="text/css" rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/index2.css"); ?>">
                <div class="footer__links"><a class="footer__links--link" target="_blank"
                                              href="?site=privacy" rel="noopener noreferrer"
                                              title="Política de Privacidad">Datenschutzerklärung</a> <a
                            class="footer__links--link" target="_blank" href="?site=voucher"
                            rel="noopener noreferrer" title="Reglamento del Club de Descuentos">Nutzungsbedingungen - Rabattclub</a> <a class="footer__links--link" target="_blank"
                                          href="?site=gift" rel="noopener noreferrer"
                                          title="Reglamento: Regalo al Bono">Nutzungsbedingungen – Geschenk zum Gutschein</a> <a
                            class="footer__links--link" target="_blank" href="?site=contact"
                            rel="noopener noreferrer" title="Escríbenos">Schreiben Sie an uns</a> <a class="footer__links--link"
                                                                                           target="_blank"
                                                                                           href="?site=information_affiliates_en"
                                                                                           rel="noopener noreferrer"
                                                                                           title="Information for affiliates">Information
                        for affiliates</a></div>
            </div>
            <div class="x-footer_text-medical-sp footer_text">
                <link type="text/css" rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/index.css"); ?>">
                <div class="FooterDisclaimer"><p> Der beschriebene Gegenstand ist ein Nahrungsergänzungsmittel und wird nicht zur Diagnose, Wiederherstellung, Verbesserung oder Veränderung der physiologischen Funktionen des Körpers durch pharmakologische, immunologische oder metabolische Wirkung verwendet. <a target="_blank"
                                                                                href="?site=disclaimer">Informationen</a>
                    </p></div>
            </div>
            <div class="x-bibliography-medical-sp">
                <link type="text/css" rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/index.css"); ?>">
                <div class="FooterBibliography">
		            <p class="headline">Bibliografie:</p>
		                <ol class="list" style="display: block;">
							<li>Onakpoya, I., Terry, R., &amp; Ernst, E. (2011). The Use of Green Coffee Extract as a Weight Loss Supplement: A Systematic Review and Meta-Analysis of Randomised Clinical Trials.&nbsp;Gastroenterology Research and Practice,&nbsp;2011, 1–6.</li>
							<li>Vinson, J., Nagendran, M. V., &amp; Burnham, B. R. (2012).&nbsp;Randomized, double-blind, placebo-controlled, linear dose, crossover study to evaluate the efficacy and safety of a green coffee bean extract in overweight subjects.&nbsp;Diabetes, Metabolic Syndrome and Obesity: Targets and Therapy,&nbsp;5, 21-27.</li>
							<li>Flanagan, J., Bily, A., Rolland, Y., &amp; Roller, M. (2013).&nbsp;Lipolytic Activity of Svetol®, a Decaffeinated Green Coffee Bean Extract.&nbsp;Phytotherapy Research,&nbsp;28(6), 946–948.</li>
							<li>Reh, C., Gerber, A., Prodolliet, J., &amp; Vuataz, G. (2006).&nbsp;Water content determination in green coffee – Method comparison to study specificity and accuracy.&nbsp;Food Chemistry,&nbsp;96(3), 423–430.</li>
							<li>Dellalibera, O., Lemaire, B., &amp; Lafay, S. (2006). Svetol, green coffee extract, induces weight loss and increases the lean to fat mass ratio in volunteers with overweight problem.&nbsp;Phytotherapie,&nbsp;4(4), 194-197.</li>
							<li>Buchanan, R., &amp; Beckett, R. D. (2013).&nbsp;Green Coffee for Pharmacological Weight Loss.&nbsp;Journal of Evidence-Based Complementary &amp; Alternative Medicine,&nbsp;18(4), 309–313.</li>
							<li>Samadi, M., Mohammadshahi, M., &amp; Haidari, F. (2015). Green coffee bean extract as a weight loss supplement.&nbsp;Journal of Nutritional Disorders &amp; Therapy,&nbsp;5(4).</li>
							<li>Thom, E. (2007).&nbsp;The Effect of Chlorogenic Acid Enriched Coffee on Glucose Absorption in Healthy Volunteers and Its Effect on Body Mass When Used Long-term in Overweight and Obese People.&nbsp;Journal of International Medical Research,&nbsp;35(6), 900–908.</li>
							<li>Farah, A., Monteiro, M., Donangelo, C. M., &amp; Lafay, S. (2008). Chlorogenic Acids from Green Coffee Extract are Highly Bioavailable in Humans.&nbsp;The Journal of Nutrition,&nbsp;138(12), 2309–2315.</li>
							<li>Upadhyay, R., Ramalakshmi, K., &amp; Rao, L. J. M. (2012). Microwave-assisted extraction of chlorogenic acids from green coffee beans.&nbsp;Food Chemistry,&nbsp;130(1), 184-188.</li>
							<li>Yoon, M., &amp; Kim, M.-Y. (2011).&nbsp;The anti-angiogenic herbal composition Ob-X from Morus alba, Melissa officinalis, and Artemisia capillaris regulates obesity in genetically obese ob/ob mice.&nbsp;Pharmaceutical Biology,&nbsp;49(6), 614–619.</li>
							<li>Kikunaga, S., Miyata, Y., Ishibashi, G., Koyama, F., &amp; Tano, K. (1999). The bioavailability of magnesium from Wakame (Undaria pinnatifida) and Hijiki (Hijikia fusiforme) and the effect of alginic acid on magnesium utilization of rats.&nbsp;Plant Foods for Human Nutrition,&nbsp;53(3), 265-274.</li>
							<li>Urbano, M. G., &amp; Goñi, I. (2002).&nbsp;Bioavailability of nutrients in rats fed on edible seaweeds, Nori (Porphyra tenera) and Wakame (Undaria pinnatifida), as a source of dietary fibre.&nbsp;Food Chemistry,&nbsp;76(3), 281–286.</li>
							<li>Kolb, N., Vallorani, L., Milanović, N., &amp; Stocchi, V. (2004). Evaluation of marine algae Wakame (Undaria pinnatifida) and Kombu (Laminaria digitata japonica) as food supplements.&nbsp;Food Technology and Biotechnology,&nbsp;42(1), 57-61.</li>
							<li>Taboada, M. C., Millán, R., &amp; Miguez, M. I. (2012).&nbsp;Nutritional value of the marine algae wakame (Undaria pinnatifida) and nori (Porphyra purpurea) as food supplements.&nbsp;Journal of Applied Phycology,&nbsp;25(5), 1271–1276.</li>
							<li>López-López, I., Cofrades, S., Yakan, A., Solas, M. T., &amp; Jiménez-Colmenero, F. (2010).&nbsp;Frozen storage characteristics of low-salt and low-fat beef patties as affected by Wakame addition and replacing pork backfat with olive oil-in-water emulsion.&nbsp;Food Research International,&nbsp;43(5), 1244–1254.</li>
							<li>Nakagawa, H. (1997).&nbsp;Effect of dietary algae on improvement of lipid metabolism in fish.&nbsp;Biomedicine &amp; Pharmacotherapy,&nbsp;51(8), 345–348.&nbsp;</li>
							<li>Yamada, S., Shibata, Y., Takayama, M., Narita, Y., Sugawara, K., &amp; Fukuda, M. (1996).&nbsp;Content and Characteristics of Vitamin B12 in Some Seaweeds.&nbsp;Journal of Nutritional Science and Vitaminology,&nbsp;42(6), 497–505.</li>
							<li>Škrovánková, S. (2011).&nbsp;Seaweed Vitamins as Nutraceuticals.&nbsp;Advances in Food and Nutrition Research, 357–369.</li>
							<li>Yoshinaga, K., Nakai, Y., Izumi, H., Nagaosa, K., Ishijima, T., Nakano, T., &amp; Abe, K. (2018). Oral Administration of Edible Seaweed Undaria Pinnatifida (Wakame) Modifies Glucose and Lipid Metabolism in Rats: A DNA Microarray Analysis.&nbsp;Molecular Nutrition &amp; Food Research,&nbsp;62(12).</li>
					</ol>
	            </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/script_16/bundle.js"); ?>" defer></script>
<script type="application/javascript"
        src="<?php echo get_res("form_big/mobile/res/js/script_19/nabx-compiled.js"); ?>"></script>
<script defer type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/script_20/fp.min.js"); ?>"></script>
<script src="<?php echo get_res("form_big/mobile/res/js/validation.js"); ?>"></script>
<script>


    <?php


    $form_errors = array();

    foreach (array('_checkbox', '_count', '_mail', '_nan', '_pcode', '_short') as $k => $v) {

        $form_errors[$v] = __($v);


    }

    ?>

</script>
<script src="<?php echo get_res("form_big/mobile/res/js/script_1.js"); ?>"></script>
<script src="<?php echo get_res("form_big/mobile/res/js/form_big_1.js"); ?>"></script>

<script src="<?php echo get_res("form_big/mobile/res/js/form_big_2.js"); ?>"></script>

<script src="<?php echo get_res("form_big/mobile/res/js/form_big_3.js"); ?>"></script>

<script src="<?php echo get_res("form_big/mobile/res/js/form_big_4.js"); ?>"></script>
</body>
</html>