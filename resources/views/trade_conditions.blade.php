<x-app-layout>
    <style>
        main {
            /* max-height: 100vh; */
            background-color: #efe9e9;
        }
        
    </style>
    
    @include('layouts.agents_navigation')
    
    <main>
        <div>
          <div class="pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
            <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:max-h-96" style="max-width: 100%;">
              <img src="/img/buildings_ud.png" alt="" style="max-width: 100%">
            </div>
          </div>
            <div class="w-10/12 mx-auto text-center">
                <div class="bg-white">
                    <div class="flex justify-center w-60 h-28 mx-auto mb-4">
                        <img src="/img/venando_logo.png" alt="">
                    </div>
                    <div class="lg:col-span-2">
                        <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                    </div>
                    <div class="container">
                        <div class="text-left">
                            <h5>{{ __('Handelsbetingelser hos Venando IVS') }}</h5>
                        </div>
                            {{ __('1. GENEREL INFORMATION
                            Venando IVS
                            Hovedvagtsgade 8, 5
                            1103 København K
                            CVR nr.: 39578581
                            Telefon: 60172014
                            E-mail: rasmus@venando.dk
                            
                            2 VORES AFTALE 			
                            Nedenfor følger en sammenfatning af de trin, som du skal følge for at bestille eller købe produkter på Hjemmesiden. Der indgås samtidig en juridisk bindende aftale mellem os vedrørende dit køb af de pågældende produkter. Selvom en række væsentlige oplysninger er indeholdt i bekræftelsesmailen, anbefaler vi dig at downloade en kopi af Betingelserne her. Aftalen kan ikke indgås på andre sprog end dansk.
                            
                            3. AFGIVELSE AF EN BESTILLING		 
                            3.1 	Første trin:
                             Log-in eller registrering. Du kan kun benytte vores hjemmeside som en registreret bruger. Ved registrering undgår du at skulle indtaste din adresse eller 	leveringsdetaljer og betalingsmetoder, hver gang du bestiller produkter på hjemmesiden, og 	registrering giver dig også muligheden for at blive registreret til kun at modtage helt udvalgte meddelelser fra os. Vær venligst opmærksom på, at vores registreringssystem opbevarer dine betalingsdetaljer. Du er forpligtet til at registrerer for at kunne handle på hjemmesiden. 	For flere vilkår i relation til registrering, se venligst punkt længere nede. 
                            3.2	Andet trin: 
                            Indtast adresseinformation for fakturering. Hvis du er registreret bruger, vil din fakturerings- og leveringsdetaljer automatisk komme frem ved din bestilling, og du vil have mulighed for at redigere i disse oplysninger, hvis der er behov for det. Hvis du ikke er en 	registreret bruger, vil du blive bedt om at indtaste disse detaljer, hver gang du køber en ydelse på hjemmesiden. 
                            3.3	Tredje trin: 
                            Gennemgang og bekræftelse Du vil få mulighed for at gennemgå og bekræfte dine bestillingsoplysninger, herunder din leveringsadresse, foretrukne betalingsform og produktdetaljer. Du skal ikke give betalingsoplysninger på dette trin. Bemærk venligst, at din bekræftelse medfører, at der er indgået en bindende aftale mellem os på aftalte bindingsperiode. 
                            3.4	 Fjerde trin: 
                            Betaling Du vil blive bedt om at indtaste betalingsoplysninger vedrørende den måde, som du ønsker at betale på, og du vil få mulighed for at acceptere eller afvise yderligere henvendelser fra Venando.dk, for mere info læs videre her https://pensopay.com/gdpr/, som indeholder information om det firma, som varetager betaling for os, eller læs videre ved afsnit 6.
                            3.5	Når du klikker på “Gennemfør betaling”, opkræver vi betaling for din ordre.
                            
                            4. REGISTRERING 			
                            Hos Venando.dk opbevare vi dine oplysninger så længe du er registreret og er en bruger på platformen. Du kan også vælge, om du ønsker at vi sender dig nyhedsbreve og andre meddelelser. Du kan herefter logge ind, besøge Hjemmesiden og foretage bestillinger som normalt. Når du først er logget ind, kan du til enhver tid vælge at opdatere dit brugernavn, kodeord eller andre detaljer. Du indestår for, at de oplysninger og detaljer, som du giver os, er rigtige og opdaterede i enhver henseende og til enhver tid. Du er ansvarlig for enhver brug af Hjemmesiden med dit brugernavn og kodeord. Det er alene dit ansvar at holde dit brugernavn og kodeord fortroligt. Du skal give os øjeblikkelig besked, så snart du bliver opmærksom på enhver uautoriseret brug af din konto eller ethvert sikkerhedsbrud. Vi er ikke ansvarlige for andres uberettigede brug af din konto.
                            
                            5. MODTAGELSE AF EN BESTILLING 		
                            Når du bestiller en ydelse fra hjemmesiden, sender vi dig en kvittering, som indeholder dit tilbud til os og dit bestillingsnummer, som du kan bruge som reference. Vi anbefaler, at du udskriver og gemmer en kopi af kvitteringen sammen med en kopi af disse Betingelser. Din bestilling udgør dit tilbud til os om køb af den pågældende vare. Din bestilling er først accepteret af os, når der er betaling godkendt. Uanset af hvilken årsag, vi ikke kan levere din bestilling, giver vi dig besked via e-mail, og din bestilling vil blive annulleret. I tilfælde af at vi ikke kan levere din bestilling, og hvor vi har modtaget din betaling, vil vi tilbyde dig refundering via den ved købet anvendte betalingsmetode. 
                            
                            6. BETALING 				
                            Du vil også modtage en e-mail vedrørende validering af din betalingsmetode fra Pensopay som administrerer behandling af betalingskort for os. Hvis din betalingsmetode bliver godkendt, vil din betaling blive debiteret. Hvis din betalingsmetode bliver afvist, og din betalingsmetode ikke bliver godkendt, vil din bestilling ikke blive behandlet. Vi bruger Pensopay til at validere din onlinebetaling, før du modtager en ordrebekræftelse fra os med din bestilling og ordrenummer. Pensopay bruger software til at kontrollere misbrug og links til pengeinstitutterne for kreditgrænser og underretning af tabte og stjålne kort. Du kan lære mere om Pensopay og deres fortrolighedserklæring på deres hjemmeside.
                            
                            7. Afmelding				
                            Du kan afmelde dit Venando-medlemskab når som helst. Du vil fortsat have adgang til Venando-tjenesten frem til udgangen af din faktureringsperiode. Betalinger vil ikke blive refunderet, og vi yder ikke refusion eller kredit for delvist brugte medlemsperioder eller ubrugt forbrug af leads. For at afmelde medlemskabet skal du gå til siden "Konto" og følge afmeldingsinstruktionerne. Hvis du afmelder medlemskabet, lukkes din konto automatisk ved udgangen af denne faktureringsperiode. Klik på "Faktureringsdetaljer" på siden "Konto" for at se, hvornår din konto vil blive lukket. 
                            
                            8. PERSONLIGGJORTE VARER 		
                            Tjek venligst dine personlige informationer, inden du afgiver din bestilling. Gennemgå grundigt stavning og dine navne. Hvis du har spørgsmål vedrørende specialtilpassede varer, så kontakt venligst Venando på info@venando.dk. Vær venligst opmærksom på, at afbestillingsret ikke gælder for specialtilpassede varer, medmindre der er tale om IT-fejl eller produktfejl. Vi forbeholder os retten til efter vores frie skøn at afvise bestilling af specialtilpassede varer. I tilfælde af upassende brug af denne service, vil din bestilling blive annulleret og fuldt ud refunderet. 
                            
                            9. BEKRÆFTELSESEMAIL			
                            Når vi har modtaget din valgte bestilling, sender vi dig en bekræftelsesmail med vores accept af din bestilling. Aftalen mellem dig og os vedrørende dit køb vil herefter blive indgået, og vores aftale er bindende med det samme, alt efter aftalte binding. Denne bekræftelsesmail er bindende og vil i enhver henseende blive anset for at være afsendt retmæssigt til dig på det tidspunkt, hvor vi sender bekræftelsesmailen til dig (uanset om du har modtaget e-mailen eller ej).
                            
                            10. ANNULLERING/ FORTRYDELSE AF DIN ORDRE 		
                            Vi ønsker, at du skal være tilfreds, hver gang, du handler hos os. Vi har dog forståelse for, at du i visse tilfælde ønsker at annullere din bestilling. 
                            For at yde den bedste service så har vi ikke binding på vores valgte produkter, ønsker du at annullere din ordre så er du bundet til at betale første måned af abn jo mindre andet er skriftligt aftalt og efterfølgende bliver din aftale opsagt hos Venando. Ønsker du yderligere forklaring, eller står du i en given situation, så er du velkommen til at kontakte Venando på info@venando.dk
                            
                            11. ANSVARSFRASKRIVELSE		 	
                            Vi gør vores bedste for at sikre, at varernes priser på vores Hjemmeside er korrekte, men fejl kan opstå, og nogle gange opdager vi, at prisen for en vare er forkert. Hvis vi opdager, at vi har lavet en fejl med prisen for en vare på vores Hjemmeside, giver vi dig besked hurtigt muligt, og vi er ikke forpligtet til at sælge dig varen til den forkert anførte pris. Vi vil informere dig om den korrekte pris på varen og give dig mulighed for at købe varen til den korrekte pris eller annullere din bestilling. Hvis vi ikke er i stand til at kontakte dig for at orientere dig om den forkerte prissætning, vil vi automatisk annullere din ordre. 
                            
                            12. JURIDISKE OG KOMMERCIELLE GARANTIER	 
                            Bemærk, at den gældende lovgivning kræver, at en vare svarer til produktbeskrivelsen på Hjemmesiden, er af en tilfredsstillende kvalitet og i stand til at opfylde det formål, som vi er blevet oplyst om af dig på købstidspunktet. Intet i disse Betingelser skal anses for at udelukke eller begrænse disse garantier eller andre rettigheder, som gældende lov direkte eller indirekte giver forbrugere i forbindelse med sådanne varer. 
                            
                            13. FORCE MAJEURE 			
                            Vi kan ikke holdes ansvarlige for forsinkelser eller manglende opfyldelse af vores forpligtigelser i henhold til Betingelserne, hvis forsinkelsen er opstået som følge af en årsag, der ligger uden for vores rimelige kontrol. Dette påvirker dog ikke dine ufravigelige rettigheder som forbruger.
                            
                            14. FRAFALDELSE 			
                            Hvis du overtræder disse Betingelser, og vi ikke i den forbindelse retter et krav mod dig, anses dette ikke for at være en afskrivelse af vores rettigheder i forbindelse med din misligholdelse, og vi vil fortsat være berettigede til at anvende vores rettigheder og retsmidler i enhver situation, hvor du overtræder Betingelserne.
                            
                            15. SPØRGSMÅL, KOMMENTARER OG KLAGER 	
                            Hvis du har spørgsmål, kommentarer eller klager vedrørende behandlingen af din bestilling, bedes du kontakte Venando.dk (info@venando.dk).
                            
                            16. AFTALENS FULDSTÆNDIGHED 		
                            Disse Betingelser erstatter alle tidligere aftaler mellem os, eller aftaler som har eksisteret imellem os, forudsat at den information, som du har givet os, er korrekt og ikke svigagtig.
                            
                            17. VILKÅRENES INDBYRDES UAFHÆNGIGHED 	
                            Hvis en eller flere af bestemmelserne i disse Betingelser måtte blive erklæret helt eller delvist ugyldige, finder de øvrige bestemmelser fortsat anvendelse.
                            
                            18. OVERDRAGELSE 			
                            Vi kan overdrage eller uddelegere vores rettigheder eller forpligtelser i henhold til disse Betingelser til en tredjepart. Ved at acceptere disse vilkår accepterer du, at vi kan gøre dette, forudsat at dette ikke påvirker standarden af den service, som du modtager i henhold til disse Betingelser. Ved at acceptere disse Betingelser, accepterer du desuden, at dine rettigheder efter disse Betingelser i tilfælde af en overdragelse eller uddelegering vil være mod det selskab, som vi har overdraget vores rettigheder og forpligtelser til, fra det tidspunkt, hvor vi har givet dig besked om overdragelsen eller uddelegeringen.
                            
                            19. PERSONOPLYSNINGER 			
                            Din fortrolighed er vigtig for os. Læs venligst vores fortrolighedspolitik, som angiver, hvordan vi bruger de personoplysninger, som du giver os i forbindelse med din brug af Hjemmesiden, og når du foretager en bestilling. Det er forbudt at videredele oplysninger af boligsøgende på platformen og hvis en privatbruger opdager dette, fratræder vi ansvaret da du har pligt til at passe på personfølsomme data på brugerne. Læs mere om dette på vores GDPR-regler. 
                            
                            20. LOVVALG OG VÆRNETING 		
                            Disse Betingelser og enhver anden aftale indgået mellem os, som beskrevet her, skal fortolkes i henhold til dansk ret, og en eventuel tvist i henhold til disse Betingelser skal afgøres ved de danske domstole.
                            
                            21. BETINGELSER FOR BRUG 			
                            Når du bruger denne Hjemmeside, gælder vores Betingelser for brug, som du kan finde her.
                            
                            22. Priser				
                            Hos Venando IVS tager vi forbehold for eventuelle fejl i vores angivne priser. Desuden forbeholder vi os ret til at ændre i priserne uden forudgående samtykke. 
                            
                            23. Refusion				
                            Hvis der er tale om refusion, bedes du medsende bankoplysninger i form af regnr og kontonr, så det aftalte beløb kan overføres. Disse oplysninger kan uden risiko oplyses pr. mail eller anden elektronisk form, da det ikke er følsomme oplysninger og kun vil blive anvendt til vores opfyldelse af refusionen.
                            
                            24. Fortrydelsesret			
                            Venando yder ikke fortrydelsesret. 
                            Når først et produkt er købt, så er man bundet til aftalen måneden ud, da abonnementet går fra måned til måned. Du er velkommen til at annullere handel (se mere på afsnit 10) så betaler man kun for 1 måned abn. da vi ikke har binding på vores aftaler. 
                            
                            25. Adgangskoder og kontoadgang 		
                            Det medlem, der oprettede Venando kontoen, og hvis betalingsmåde bliver debiteret ("kontoejer"), har adgang til og kontrol over Venando kontoen og de Venando kompatible enheder, der bruges til at tilgå vores tjeneste, og er ansvarlig for enhver aktivitet, der foregår via Venando kontoen. For at bevare kontrollen over kontoen og undgå, at andre opnår adgang til den (hvilket vil omfatte oplysninger om aktivitet på kontoen), bør kontoejeren bevare kontrollen over de Venando kompatible enheder, der bruges til at tilgå tjenesten og ikke afsløre adgangskoden eller detaljer om betalingsmåden, som er tilknyttet kontoen, over for andre. Du er ansvarlig for at opdatere og sørge for nøjagtigheden af de oplysninger, du giver til os om din konto. Vi kan opsige din konto eller sætte din konto i bero for at beskytte dig, Venando eller vores partnere mod identitetstyveri eller anden svigagtig aktivitet.
                            
                            26. Afregningsperiode			
                            Perioden regnes fra den dag;
                            Du registrerer bruger og oplyser betalingsoplysninger og har valgt din abn. pakke. Du betaler for en måned ad gangen. Tilkøber du ekstra produkter på siden, så trækker den først på din næste kommende regning,
                            
                            27. Persondatapolitik			
                            For at du kan indgå aftale med os, og handle på vores hjemmeside, har vi brug for følgende oplysninger om dig:
                            
                            Navn
                            Adresse
                            Telefonnummer
                            E-mailadresse
                            Oplysning om hvad du har købt
                            
                            Vi behandler dine personoplysninger med det formål at kunne levere varen til dig, og for at kunne behandle henvendelser vedrørende dit køb. Behandlingen sker efter reglerne i vores persondatapolitik for Venando IVS. Heri kan du læse mere om, hvordan dine oplysninger behandles, hvornår de slettes, og hvilke rettigheder du har som registreret.
                            ') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>