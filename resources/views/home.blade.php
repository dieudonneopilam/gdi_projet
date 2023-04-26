@extends('layouts.app')

@section('main')
<div class="container">

    <!-- ------- left-sidebar ------- -->
    <div id="left-sidebar" class="left-sidebar">

        <ul class="nav-links">
            <li>

                <a href="#Acceuil"> <i class='bx bxs-home'></i>
                    <span class="Link_name">Acceuil</span>
                </a>
                <!--<ul class="sub-menu blank">
                <li> <a class="Link_name" href="#">A propos</a>  </li>
            </ul> -->
            </li>

            <li>
                <a href="#apropos">
                    <i class='bx bx-universal-access'></i>
                    <span class="Link_name">A propos</span>
                </a>
            </li>

            <li>
                <!-- <div class="iocn-links"> -->

                <a href="#Actualite">
                    <i class='bx bxl-angular'></i>
                    <span class="Link_name">Actualité</span>
                </a>
                <!-- <i class='bx bxs-chevron-down arrow'></i> -->

                <!-- </div> 
            <ul class="sub-menu">
                <li> <a class="Link_name" href="#">A propos</a>  </li>
                <br>
                <li> <a href="#">Historique</a>  </li> <br>
                <li ><a href="#">Objectifs</a>  </li> <br>
                <li> <a href="#">Missions</a> </li>
                
            </ul> -->

            </li>

            <li>
                <a href="#Evenement">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="Link_name">Evenements</span>
                </a>
            </li>

            {{-- <li>
                <a href="#Annuaire">
                    <i class='bx bx-font-color'></i>
                    <span class="Link_name">Annuaire </span>
                </a>
            </li> --}}

            <li>
                <a href="#Financespubliques">
                    <i class='bx bx-line-chart'></i>
                    <span class="Link_name">Finance publique</span>
                </a>
            </li>

            <li>
                <a href="#partenaire">
                    <i class='bx bxl-paypal'></i>
                    <span class="Link_name">Partenaire</span>
                </a>
            </li>

            <li>
                <a href="#Lexiques">
                    <i class='bx bxl-xing'></i>
                    <span class="Link_name">Lexiques de la Fisc</span>
                </a>
            </li>

            <li>
                <a href="#Analyse">
                    <i class='bx bxs-book-reader'></i>
                    <span class="Link_name">Analyse/prospective</span>
                </a>
            </li>

            <li>

                <a href="#Documentation">
                    <i class='bx bx-book-alt'></i>
                    <span class="Link_name"> Documentation </span>
                </a>

            </li>

            <li>

                <a href="#Documentheque">
                    <i class='bx bxl-firebase'></i>
                    <span class="Link_name"> Documentheque </span>
                </a>

            </li>
        </ul>
        <div class="rejoind">
            <a href="{{ route('user.index') }}" class="logout" style="background-color: rgb(59, 59, 241);color: white">
                <span class="Link_name">ANNUAIRE</span>
            </a>
        </div>
        @isset(auth()->user()->id)
        @else
        <div class="rejoind">
            <a href="{{ route('register') }}" class="logout">
                <i class='bx bxs-group'></i>
                <span class="Link_name"> REJOIGNEZ-NOUS</span>
            </a>
        </div>
        @endisset
    </div>

    <!-- ------- main-content ------- -->

    <div class="main-content" id="main-content">

        <!-- ------------------ACCEUIL---------------- -->

        <div class="Acceuil" id="Acceuil">
            <h1 class="heading "> <span>ACCEUIL</span></h1>
            <div class="img-desc">
                <div class="left">
                    <img src="images/im200.jpg">

                </div>

                <div class="right">
                    <P>La Direction Générale des Impôts de la République démocratique du Congo est le service public
                        dont la
                        mission est de percevoir les impôts qui sont des prestations pécuniaires exigées des
                        contribuables sans
                        contrepartie au profit du trésor public congolais. Elle est placée sous la tutelle du
                        Ministre ayant les
                        Finances dans ses attributions. Elle est située dans la ville province de KINSHASA. <br>
                        Selon le Code des Impôts de la RDC, la DGI perçoit des impôts cédulaires sur les
                        revenus(impôt sur le
                        bénéfice des sociétés, impôt cédulaire sur les rémunérations, impôt exceptionnel sur la
                        rémunération des
                        expatriés, impôt mobilier sur le dividende),des impôts réels(impôt sur les véhicules ou
                        vignette, impôt
                        foncier sur les surfaces bâties et non bâties, impôt sur les concessions minières et des
                        hydrocarbures)
                        et des impôts sur la dépense(impôt sur le chiffre d'affaires l'équivalent de la TVA-taxe sur
                        la valeur
                        ajoutée).En effet, depuis mai 2007, un comité a été mis sur pieds pour étudier les voies et
                        moyens de
                        procéder à l'instauration de la TVA en RDC.<br>
                        Selon le Décret n°017/2003 du 02 mars 2003 portant création de la Direction Générale des
                        Impôts tel que
                        modifié et complété par le Décret n°011/43 du 22 novembre 2011). La DGI comprend une
                        Administration
                        Centrale, une Direction des Grandes Entreprises, une Direction Urbaine dans la Ville de
                        Kinshasa ainsi
                        qu’une Direction Provinciale dans chaque province. La Direction Générale des Impôts dispose
                        d’une
                        Inspection des Services placée sous l’autorité directe du Directeur Général.<br>
                        Les Directions Urbaine et Provinciales des Impôts disposent, chacune, d’une Inspection des
                        Services.
                        Voici une représentation schématique de l'organigramme:
                    </P>

                </div>

            </div>

        </div>

        <!-- ------------------A PROPOS---------------- -->

        <div class="a-propos" id="apropos">
            <h1 class="heading "> <span>A PROPOS</span></h1>
            <div class="img-desc">
                <div class="left">
                    <img src="images/im6.jpg">

                </div>

                <div class="right">
                    <div class="box">
                        <div class="text">
                            <h3>HISTORIQUE</h3>
                            <p> L’observatoire de la fiscalité congolaise a été créé en 1995. il était constitué à
                                l’origine par quelques fiscalistes congolais, soucieux d’échanger sur les aspects
                                techniques et scientifiques de la fiscalité et des finances publiques de la RDC.

                                A l’origine, il avait uniquement pour finalité, d’enrichir les travaux respectifs de
                                ses membres, de la manière la plus objective qui soit et se livrer à des analyses
                                prospectives. A force de sollicitations, progressivement, l’observatoire a voulu
                                qu’un plus grand nombre possible, puisse bénéficier de ses éclairages. Il a de ce
                                fait permis à un nombre de plus en plus croissant de chercheurs et d’autres acteurs
                                de la finance et de la fiscalité, contribuables, politiques, agents de l’état ou
                                investisseurs potentiels, d’échanger en toute objectivité, sur les aspects les plus
                                variés de la fiscalité ainsi que des finances publiques de la République
                                Démocratique du Congo.
                            </p>

                            <h3>MISSIONS</h3>
                            <p> L'observatoire de la fiscalité et des finances publiques mène des travaux sur les
                                enjeux de la fiscalité et des finances de la RDC, il contribue à un débat
                                démocratique et inclusif sur la modernisation de la fiscalité ainsi que la gestion
                                des finances publiques. <br> <br>
                                L'observatoire promeut ainsi un dialogue ouvert avec tous les acteurs de la société
                                en créant des liens avec la communauté scientifique, les décideurs politiques et la
                                société civile. ..De ce fait, il collecte, analyse et met à jour les données et les
                                statistiques portant sur la fiscalité et les finances publiques sur le territoire de
                                la RDC et diffuse ses travaux, afin de favoriser le développement des bonnes
                                pratiques. Il constitue aussi un espace d'expertise par excellence. De ce fait, il
                                organise tous les évènements susceptibles de contribuer à l'optimisation des
                                finances de la RDC, en adéquation avec les principes démocratiques et le respect des
                                droits des contribuables. Il organise notamment des formations, des programmes
                                d’étude et de recherche ainsi que des débats, des tables rondes, dans les champs des
                                finances publiques et de la fiscalité.

                            </p>

                            <h3>ORGANISATION</h3>
                            <p> L'observatoire de la fiscalité congolaise est organisé en réseau. Il s'appuie sur :
                                <ul>
                                    <li> Une équipe pluridisciplinaire avec du personnel permanent</li>
                                    <li> Un conseil d'orientation de 9 membres, qui se réunit périodiquement sous la
                                        présidence de M.LUMINI, son président. Il comprend des représentants des
                                        ministères, de la société civile, de divers organismes acteurs du
                                        développement économique du Congo, ainsi que d'une ou deux personnes
                                        qualifiées issues du champ universitaire.</li>
                                    <li> Un réseau de partenaires, composé des représentants des organismes
                                        concernés par l'amélioration de la fiscalité et des finances publiques
                                        congolaises (FMI, Banque mondiale ...)</li>
                                </ul>

                            </p>

                            <h3>DEONTOLOGIE</h3>
                            <p> Afin d’assurer crédibilité et reconnaissance à ses travaux et publications,
                                l’Observatoire de la fiscalité Congolaise (OFIC) s’est doté d’une charte éthique.
                                Cette charte garantie l'impartialité, l'indépendance et l’objectivité scientifique
                                des activités de l'observatoire, ainsi que de ses publications.</p>

                            <h3>FINANCEMENT</h3>
                            <p> L'Observatoire de la fiscalité congolaise est un essentiellement financé par des
                                institutions publiques et privées à but non lucratif.</p>

                            <div class="imbox">
                                <img src="images/im02.jpg">
                            </div>

                            <p>

                                Elle est situé dans la ville province de <strong>KINSHASA</strong>
                            </p>

                            <h3> Voici une representation schematique de l'organigramme</h3>
                            <img src="images/Screenshot 2023-02-07 172758.png" class="organigramme">

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!--..............................ACTUALITE.......................... -->

        <div class="Actualité" id="Actualite">
            <h1 class="heading "> <span>ACTUALITE</span></h1>
            <div class="img-desc">
                <div class="left">
                    <img src="images/im10.jpg">

                </div>

                <div class="right">
                    <p> <STRONG> par la Redaction - 13 novembre 2022 Dans economie</STRONG> <BR>
                        Le gouvernement congolais vient d’honorer ses engagements pris dans le cadre du programme de
                        Facilité élargie de crédit (FEC), conclu avec le Fonds monétaire international (FMI). Il
                        s’agit de la restructuration de la Direction générale des impôts (DGI) et la Direction
                        générale des recettes administratives, judiciaires, domaniales et de participations
                        (DGRAD).<br>
                        Vendredi au conseil des ministres, l’exécutif a adopté deux projets de décret. Le premier
                        texte modifie et complète le décret n°0058 du 27 décembre 1995 portant création,
                        organisation et fonctionnement de la DGRAD. <br>
                        « Ce texte adapte les structures de cette régie financière à la réforme globale des finances
                        publiques et à la réforme de l’Administration publique, d’une part ; et à la réforme de la
                        décentralisation financière et territoriale en République démocratique du Congo, d’autre
                        part », a expliqué le ministre des Finances, Nicolas Kazadi.
                    </p> <br>
                    <a href="#">Lire plus</a> <br><br>

                </div>

            </div>

        </div>

        <!--..............................EVENEMENT................................... -->

        <div class="Evenement" id="Evenement">
            <h1 class="heading "> <span>EVENEMENT</span></h1>
            <div class="img-desc">
                <div class="right">
                    <div class="text">
                        <h3>A savoir sur les événements à venir sur l'observatoire</h3>
                        <p>Prochainement, l’observatoire de la fiscalité congolaise organisera des conférences et
                            des tables rondes sur les thématiques suivantes :</p>

                        <ul>
                            <li> L’état congolais peut-il se permettre le luxe de surtaxer certains contribuables et
                                de ne pas collecter certains impôts?
                            </li>
                            <li>
                                Le Congo RDC a t-il les moyens d’avoir une fiscalité efficiente?
                            </li>
                            <li>
                                La fiscalité congolaise est-elle en adéquation avec les préoccupations sociales?

                            </li>
                            <li>
                                La fiscalité congolaise est-elle adaptée aux réalités de la société congolaise
                                actuelle ?

                            </li>
                            <li>
                                La maximisation de l’impôt peut-elle tenir lieu de politique fiscale?

                            </li>
                            <li>
                                L’impact de la fraude fiscale.

                            </li>
                            <li>
                                La fiscalité agricole de la RDC, est-ce un outil au service du développement ou un
                                carcan?

                            </li>
                            <li>
                                Les modalités de contrôle des fonctionnaires de l’administration fiscale.

                            </li>
                            <li>
                                Les débats budgétaires, pertinence et efficacité.

                            </li>
                            <li>
                                A quoi peut-on apprécier l’efficacité d’une politique fiscale?

                            </li>
                            <li>
                                L’organisation de l’administration fiscale est-elle efficiente?
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- ----------------------------------FINANCES PUBLIQUES------------------------------------- -->

        <div class="finances" id="Financespubliques">
            <h1 class="heading "> <span>FINANCES PUBLIQUES CONGOLAIS EN CHIFFRE</span></h1>
            <div class="img-desc">
                <div class="right">
                    <div class="text">
                        <h3>LA LOI DE FINANCES 2021 EN RDC</h3>
                        <p>En effet, la Loi des Finances 2021 de la RDC a été publiée le 23 décembre 2020. Il s’agit
                            de Loi des Finances N°20/020 du 23 décembre 2020 pour l’exercice 2021. Cette Loi des
                            Finances présente le budget du pouvoir central l’exercice 2021 et introduit certaines
                            modifications et changements des certaines dispositions fiscales applicables en RDC. Par
                            rapport au Budget du Pouvoir central de l’exercice 2021, nous avons noté que ce Budget
                            est présenté en équilibre, en recettes et en dépenses, à 14 620,5 milliards de Francs
                            Congolais équivalant à 7,1 milliards de USD. Quant aux dispositions clés, nous pouvons
                            citer entre autres : </p>
                        <ul>
                            <li><strong>L’article 14 </strong></li>
                            <p>« Le point 19 de l’article 15 de l’Ordonnance-loi n° 10/001 du 20 août 2010 portant
                                institution de la taxe sur la valeur ajoutée, relatif à l’exonération de la taxe sur
                                la valeur ajoutée à l’importation des marchandises par les entreprises minières, à
                                l’exclusion des produits pétroliers, est supprimé. » Avec les dispositions de
                                l’article 13 de la Loi des Finances 2021, l’importation des marchandises par les
                                entreprises minières est désormais soumise à la TVA en RDC . Seule l’importation des
                                marchandises par les entreprises pétrolières reste non soumise à la TVA. </p>
                            <li><strong>L’article 23</strong></li>
                            <p> « Le retard dans le paiement de tout ou partie des impôts et autres droits déclarés
                                ou mis en recouvrement dans le délai donne lieu à l'application d'une majoration
                                égale à 2 %, par mois de retard, des droits dus. La majoration est décomptée du
                                premier jour du mois au cours duquel l’impôt aurait dû être payé au jour du mois du
                                paiement effectif, tout mois commencé étant compté intégralement. » C’est-à-dire
                                qu’avec la Loi des Finances 2021, tout paiement tardif d’impôts ou autres droits
                                donne lieu à l’application d’une majoration égale à 2% par mois de retard des droits
                                dus et non à l’application d’une majoration égale à <strong> 2% du
                                    principal</strong>, par mois de retard, comme c’était prévu par les anciennes
                                dispositions de l’article 91 de la Loi N°004/2003 du 13 mars 2003 portant réforme
                                des procédures fiscales.</p>
                            <li><strong>Les articles 24, 25, 27 et 28</strong></li>
                            <p> Les articles 24, 25, 27 et 28 de la Loi des finances 2021 modifient d’une part le
                                délai d’introduction d’une réclamation contentieuse par le contribuable qui passe de
                                6 mois à 3 mois, et de l’autre l’échéance de la réponse de l’administration fiscale
                                qui est aussi réduite de 6 à 3 mois. <strong> Article 24</strong> L’alinéa 4 de
                                l’article 104 de la Loi n° 004/2003 du 13 mars 2003 portant réforme des procédures
                                fiscales est modifié comme suit : « Article 104, alinéa 4 : Sous peine de déchéance,
                                la réclamation doit être introduite dans les trois (3) mois à partir de la date de
                                la déclaration ou de la réception de l’avis de mise en recouvrement. Il est délivré
                                reçu de sa réclamation au redevable ».<strong> Article 25 </strong> L’alinéa 1er de
                                l’article 105 de la Loi n° 004/2003 du 13 mars 2003 portant réforme des procédures
                                fiscales est modifié comme suit : « Article 105, alinéa 1er : La décision de
                                l’Administration des Impôts doit être notifiée dans les trois (3) mois qui suivent
                                la date de réception de la réclamation. L’absence de décision dans le délai est
                                considérée comme une décision de rejet de la réclamation ». <strong> Article
                                    27</strong> L’article 108 de la Loi n° 004/2003 du 13 mars 2003 portant réforme
                                des procédures fiscales est modifié comme suit : « Article 108 : 9 La décision de
                                rejet total ou partiel peut faire l’objet d’un recours devant la Cour administrative
                                d’appel. Le recours visé ci-dessus doit, sous peine de déchéance, être introduit
                                dans un délai de trois (3) mois à partir de la notification de la décision au
                                redevable ou, en l’absence de décision, à compter de la date d’expiration du délai
                                prévu à l’article 105 ci-dessus. Aucune demande nouvelle ne peut être présentée à
                                l’occasion de ce recours ». </p>
                        </ul> <br>

                        <a href="https://www.taxenrdc.com/actualites/la-loi-de-finances-2021-en-rdc">Lire
                            plus</a><br><br>

                    </div>

                </div>

            </div>

        </div>

        <!-- ----------------ANALYSE ET PROSPECTIVE------------------ -->

        <div class="Analyse" id="Analyse">
            <h1 class="heading "> <span>ANALYSE ET PROSPECTIVE DE L'OBSERVATOIRE</span></h1>
            <div class="img-desc">
                <div class="right">
                    <div class="text">
                        <h3>L’IMPOSITION DES ENTREPRISES AU CONGO, UN FREIN OU UN LEVIER POUR LE DÉVELOPPEMENT
                            ÉCONOMIQUE ET SOCIAL</h3>
                        <aside>
                            <blockquote>
                                L’impôt peut entraver l’industrie du peuple et le détourner de s’adonner à certaines
                                branches de commerce ou de travail (Adam Smith : Economiste et philosophe 1776)
                                </p>
                            </blockquote>
                        </aside>

                        <p>
                            L’état congolais ne pourrait-il pas laisser les entrepreneurs et les industriels créer
                            de la richesse, en étant attentif à l’impact des impôts auxquels sont soumises les
                            entreprises? <br>

                            Une telle démarche est-elle dans l’intérêt de l’administration fiscale congolaise?
                            Certainement, ce n’est pas ceux qui prônent la maximisation de l’impôt à Kinshasa, qui
                            me diront le contraire. Il est probable que ceux qui croulent sous les tracasseries de
                            l’administration fiscale, au marché de Mokali ou dans les territoire les plus éloigné de
                            la République, ne trouveront pas non plus à redire. <br>

                            En effet, une telle démarche permettrait aux contribuables les plus nantis, d’amasser
                            une richesse encore plus grande, de créer plus d’emplois, de contribuer davantage au
                            bonheur de ceux à qui la chance n’a pas encore sourit. <br>

                            A l’autre extrémité de l’échelle sociale, une telle approche permettrait aux plus
                            pauvres, de prétendre à plus de richesse. L’état en dernier lieu, pourrait collecter un
                            peu plus d’impôts, sans ruiner personne. <br>

                            Un peuple riche, c’est plus d’impôts à collecter, une richesse pour l’état , si
                            l’administration fiscale est mieux organisée. <br>

                            Pour ce faire, que faut-il envisager ? <br>

                            La fiscalité n’est pas qu’un art oratoire , c’est d’abord une science et une technique.
                            La solution à envisager n’est certes pas la maximisation de l’impôt mais plutôt une
                            optimisation raisonnée, qui exige une approche scientifique et moderne de l’impôt.
                            <br>

                            Cette approche consiste à quantifier l’impact de l’impôt, d’une manière la plus
                            pertinente possible, sur les activités des contribuables ciblés. D’établir un vrai
                            dialogue destiné à permettre une adhésion à l’impôt, tout en mettant en place des outils
                            garantissant la transparence dans la collecte ainsi que dans l’affectation. <br>

                            L’histoire regorge de nombreux exemples où la fiscalité s’est avéré être un élément
                            primordial, dans le développement de certains états ou une source de frustrations et de
                            difficultés majeures. <br>

                            La non prise en compte des facteurs socio-économiques, ainsi que des impacts de la
                            fiscalité sur l’activité économique, font des dégâts considérables, sans pour autant
                            qu’il y ait des changements notables permettant de réaliser que ce phénomène est pris en
                            compte. <br>

                            Combien d’investisseurs de grande envergure, du secteur privé , ont préféré s’installer
                            au Congo, ces dernières décennies, plutôt que dans un autre pays d’Afrique subsaharienne
                            ? <br>

                            Quel qualificatif les investisseurs potentiels, multinationales ou les grandes enseignes
                            du négoce , peuvent-ils donner au système fiscal congolais. <br>
                            Peut-on dire que la fiscalité congolaise est incitative ou dirons-nous plutôt qu’elle
                            est dissuasive ? <br>
                            La pression fiscale y est faible ou dirons-nous plutôt qu’elle est confiscatoire ?
                            Est-ce un pays dans lequel la sécurité fiscale est assurée ? <br>
                            Autant d’aspects auxquels doivent répondre les investisseurs ou les entrepreneurs, avant
                            de faire le choix d’investir leurs capitaux en RDC. <br>

                            La fiscalité congolaise ne saurait être un levier que si elle répond d’une manière qui
                            préserve autant l’intérêt de ses entreprises que ceux du Trésor public. <br>

                            Pour aider les entreprises à créer de la richesse, l’administration fiscale doit
                            questionner le phénomène fiscal, sous l’angle du contribuable, et pas simplement rester
                            omnibulée par les caisses de l’état qu’il faut remplir ou la part des sommes collectées,
                            susceptible de lui revenir. <br>

                            Trop d’impôt tue l’impôt. Cet adage véhiculé depuis des siècles est toujours d’actualité
                            et constitue un principe intemporel, pour un état qui souhaite optimiser sa collecte
                            d’impôts.
                            En 1974, l’économiste Arthur LAFFER, alors conseiller du président américain Ronald
                            Reagan, a remis en évidence ce principe, avec la fameuse courbe éponyme, qui démontre
                            clairement, qu’une administration fiscale ne peut pas avoir pour finalité la
                            maximisation de l’impôt.
                            <br>
                            En procédant au recouvrement fiscal, sans se préoccuper de la capacité contributive des
                            contribuables, à terme, les entreprises les plus florissantes où les plus intègres s’en
                            iront ou feront faillite, ce qui réduira d’autant la quantité d’impôts collectés.
                            <br>
                            Le système fiscal congolais doit, à l’instar de la main invisible, à laquelle faisait
                            allusion l’économiste Adam SMITH, pour réguler le marché , permettre que l’impôt puisse
                            retrouver sa vertu essentielle. C’est à dire être un outil qui puisse contribuer à
                            financer des infrastructures de première nécessité et à payer les salaires de tous ceux
                            qui participent aux prérogatives régaliennes de l’état.
                            <br>
                            Le Congo a amorcé depuis quelques décennies un virage indéniable, vers plus de stabilité
                            politique et une croissance économique, des facteurs importants pour son essor et le
                            bien-être de son peuple.
                            <br>
                            Il a néanmoins besoin pour cela d’attirer une quantité considérable de grandes
                            entreprises et multinationales, afin d’en faire les piliers de son économie.
                            <br>
                            Celles-ci pourront par le phénomène de sous-traitance, induire un développement
                            considérable, des petites entreprises sur le plan local.
                            <br>
                            L’entreprenariat local a un rôle important dans ce pays où les infrastructures sociales
                            sont quasi inexistantes, mais leur surface financière ainsi que leur morcellement ne
                            sont pas assez consistants, pour constituer un levier susceptible de faire basculer le
                            Congo, dans un cercle vertueux sur le plan économique.
                            <br>
                            Il faut desserrer l’étau fiscal et administratif, d’une manière plus générale, afin de
                            se doter des outils susceptibles de mesurer l’impact de la fiscalité sur le
                            développement, le progrès social et la viabilité des entreprises.
                            <br>

                            Le Congo a déjà eu par le passé, des leaders qui avaient des velléités de se servir de
                            la fiscalité comme d’un levier, force est de constater qu’actuellement le résultat
                            attendu n’est pas encore au rendez-vous. L’administration fiscale doit redoubler
                            d’efforts et d’ingéniosité, pour rendre au phénomène fiscal au Congo RDC, ses lettres de
                            noblesse et en faire un pilier de la politique économique congolaise. <br>
                            <aside>
                                <p>LUMINI Hermen <br>
                                    Président de l’Observatoire de la Fiscalité Congolaise
                                </p>
                            </aside>

                    </div>

                </div>

            </div>

        </div>

        <div class="partenaire" id="partenaire">
            <h1 class="heading "> <span>PARTENAIRE</span></h1>
            <div class="img-desc">

                <div class="right">
                    <p>MINISTERE DE FINANCE RDC <br><a href="www.finances.gouv.cd">www.finances.gouv.cd</a></p>
                    <p>BANQUE MONDIAL<br><a href="www.banquemondiale.org">www.banquemondiale.org</a></p>
                    <p>FOND MONETAIRE INTERNATIONAL<br><a href="www.imf.org">www.imf.org</a></p>
                    <p>ORGANISATION DES NATIONS UNIES POUR L'ALIMENTATION ET L'AGRICULTURE (FAO)<br><a
                            href="www.fao.org">www.fao.org</a></p>
                    <p>CELLULE D'APPUI A L'ORDONATEUR NATIONAL DU FOND EUROPEEN EUROPEEN DE DEVELOPPEMENTEN RDC
                        (COFED)
                        <br><a href="www.cofed.cd">www.cofed.cd</a></p>
                    <p>AGENCE FRANCAISE DE DEVELOPPEMENT<br><a href="www.afd.fr">www.afd.fr</a></p>
                    <p>BANQURE AFRICAINE DE DEVELOPPEMENT<br><a href="www.afdb.org">www.afdb.org</a></p>
                    <p>AGENCE NATIONALE POUR LA PROMOTION DES INVESTISSEMENTS RDC<br><a
                            href="www.investindrc.cd">www.investindrc.cd</a></p>
                    <p>DIRECTION GENERALE DES IMPOTS RDC <br><a href="www.dgi.gouv.cd">www.dgi.gouv.cd</a></p>
                    <p>INSTITUT NATIONAL DE STATISTIQUE RDC<br><a href="www.ins.cd">www.ins.cd</a></p>
                    <p>BANQUE CENTRALE DU CONGO RDC <br><a href="www.bcc.cd">www.bcc.cd</a></p>
                    <p>COUR DES COMPTES RDC<br><a href="www.coursdecomptes.cd">www.coursdecomptes.cd</a></p>
                    <p>UNION EUROPEENNE<br><a href="www.european-union.eu">www.european-union.eu</a></p>

                </div>

            </div>

        </div>

        <!-- -----------------------------------LEXIQUE---------------------------------------------- -->

        <div class="Lexique" id="Lexiques">
            <h1 class="heading "> <span>LEXIQUE DE LA FISCALITE</span></h1>
            <div class="img-desc">
                <div class="right">
                    <div class="text">
                        <h2>Lexique des concepts fiscaux</h2>
                        <ol type="A">
                            <li>
                                <h3> Abattement</h3>
                            </li>
                            <aside>
                                <ul>
                                    <li>Lexique des concepts fiscaux </li>
                                    <li>LEXIQUE </li>
                                    <li>Diminution pratiquée sur le montant de l’assiette imposable.</li>
                                </ul>
                            </aside>
                            <br>

                            <ol type="1">
                                <li>Acompte contemporain</li>
                                <p>
                                    Les revenus des travailleurs indépendants et des agriculteurs, les revenus
                                    fonciers, les rentes viagères à titre onéreux, les pensions alimentaires, les
                                    revenus des gérants et associés (article 62 du CGI), les salaires, pensions ou
                                    rentes viagères de source étrangère imposables en France lorsqu’ils sont versés
                                    par des débiteurs établis à l’étranger, les revenus sans tiers collecteurs
                                    perçus par les personnes à charges du foyer fiscal, font l’objet d’acomptes dans
                                    le cadre du prélèvement à la source. Ces acomptes mensuels (ou trimestriels sur
                                    option pour certaines catégories) calculés par l'administration fiscale sur la
                                    base de la dernière déclaration de revenus souscrite par le contribuable sont
                                    prélevés directement sur leur compte bancaire.
                                </p>
                                <li>Action en recouvrement forcé / Recouvrement forcé</li>
                                <p>
                                    Ensemble des actions engagées par les comptables publics pour recouvrer les
                                    créances publiques. Il s’agit des actions de masse (avis à tiers détenteur,
                                    saisie-vente, ...) et des actions lourdes (saisie immobilière, mise en cause de
                                    dirigeants, ...). Cette expression englobe aussi bien les actions qui peuvent
                                    être engagées directement par le comptable public que celles qui nécessitent
                                    l’intervention du juge.
                                </p>
                                <li>Action de masse</li>
                                <p>
                                    Action pouvant être engagée par les comptables publics pour recouvrer les
                                    créances publiques sans nécessiter l’intervention du juge.
                                </p>
                                <li>Action lourde</li>
                                <p>
                                    Action ne pouvant être engagée par les comptables publics pour recouvrer les
                                    créances publiques qu’avec intervention du juge.
                                </p>
                                <li>Amende</li>
                                <p>
                                    Les amendes et condamnations pécuniaires et autres produits recouvrés comme en
                                    matière d’amendes sont gérés par les comptables de la DGFiP sur la base d’un
                                    titre exécutoire :
                                </p>

                                <p>
                                    <ul>
                                        <li><dfn>amende forfaitaire majorée: </dfn></li>
                                        <p>
                                            l’amende forfaitaire correspond à une procédure simplifiée de jugement
                                            de certaines contraventions des 4 premières classes et de certains
                                            délits. L'amende forfaitaire est majorée par l'officier du ministère
                                            public en matière contraventionnelle, et par le Procureur de la
                                            République de Rennes en matière délictuelle, si l'amende forfaitaire
                                            n'est pas réglée dans les délais prévus par le code de procédure pénale
                                            ;
                                        </p>
                                        <li><dfn>l'ordonnance pénale:</dfn></li>
                                        <p>
                                            l'ordonnance pénale est une procédure de jugement simplifié. C’est une
                                            procédure écrite et non contradictoire, donc sans audience (le prévenu
                                            n’est en principe pas entendu). Elle peut être rendue en matière
                                            contraventionnelle et correctionnelle ;
                                        </p>
                                        <li><dfn>jugement du tribunal de police: </dfn></li>
                                        <p>
                                            décision rendue par le tribunal de police qui est la juridiction qui
                                            juge les contraventions de cinquième classe ;
                                        </p>
                                        <li><dfn>jugement du tribunal correctionnel :</dfn></li>
                                        <p>
                                            décision rendue par le tribunal correctionnel qui est la juridiction qui
                                            juge les délits. Il juge également les contraventions connexes à un
                                            délit ;
                                        </p>
                                        <li><dfn>arrêt de la cour d'appel: </dfn></li>
                                        <p>
                                            décision rendue par la cour d'appel qui est la juridiction qui réexamine
                                            les affaires déjà jugées en premier degré (1er ressort ou 1ère instance)
                                            en matière civile, commerciale, sociale ou pénale ;
                                        </p>
                                        <li><dfn>arrêt de la cour d'assises: </dfn></li>
                                        <p>
                                            décision rendue par la cour d'assises qui est la juridiction compétente
                                            pour tous les crimes de droit commun ;
                                        </p>
                                        <li><dfn>􏰀 autres condamnations 􏰁 : </dfn></li>
                                        <p>cette catégorie vise par exemple les amendes civiles prononcées par les
                                            juridictions ou les réparations civiles accordées à l’État
                                        </p>
                                        <li><dfn>forfait de post stationnement majoré: </dfn> </li>
                                        <p>
                                            institué dans le cadre de la dépénalisation du stationnement payant, un
                                            forfait de post- stationnement peut être acquitté dans les 3 mois
                                            suivant le constat de non-paiement. Au terme de ce délai, un titre
                                            exécutoire (forfait post stationnement majoré) émis par l’ANTAI (Agence
                                            Nationale du Traitement Automatisé des Infractions), fait l’objet d’un
                                            recouvrement forcé par les comptables, comme en matière d’amendes.
                                        </p>
                                    </ul>

                                    <li>Article de rôle</li>
                                    <p>
                                        Élément de rôle d’impôt en vertu duquel les comptables publics assurent le
                                        recouvrement des impôts qu’ils ont pris en charge. Il indique pour chaque
                                        contribuable son identification, les bases d’imposition, les éléments de
                                        liquidation de l’impôt et le montant à payer. On dénombre en général un
                                        article d'imposition par foyer fiscal pour l'impôt sur le revenu (en cas de
                                        décès du conjoint dans l'année, il peut y avoir plusieurs articles
                                        d'imposition), un article d'imposition pour chaque local d'habitation ou
                                        dépendance (par exemple, un garage lorsqu'il est imposé distinctement) pour
                                        la taxe d'habitation et un article d’imposition par établissement pour la
                                        cotisation foncière des entreprises (y compris taxes annexes et imposition
                                        forfaitaire sur les entreprises de réseau (IFER)).
                                    </p>

                                    <li>Article majoré</li>
                                    <p>
                                        Article de rôle non acquitté par le redevable à la date d’échéance et soumis
                                        à majoration de 10 % (5% pour la cotisation foncière des entreprises) ou
                                        acquitté totalement ou partiellement mais par un mode de paiement non
                                        dématérialisé alors que le montant dû relève de l’obligation de paiement
                                        dématérialisé et soumis à majoration de 0,2%.
                                    </p>
                                    <li>Auto-entrepreneur</li>
                                    <p>
                                        Les contribuables relevant du régime micro BIC, ou du régime spécial BNC (cf
                                        􏰀 Micro : régimes micro 􏰁) bénéficient automatiquement du régime micro
                                        social dit régime de 􏰀 l'auto-entrepreneur 􏰁 caractérisé par un
                                        prélèvement libératoire des cotisations sociales. <br>
                                        Deux options sont possibles :
                                        <ul>
                                            <li><dfn>option sociale : </dfn></li>
                                            <p>
                                                paiement des cotisations sociales calculées sur la base des
                                                assiettes minimales ;
                                            </p>
                                            <li><dfn>option fiscale :</dfn> </li>
                                            <p>
                                                versements libératoires de l'impôt sur le revenu.
                                            </p>
                                        </ul>
                                        À compter de 2016, l’auto-entrepreneur devient le micro-entrepreneur (voir
                                        Micro-entrepreneur).
                                    </p>
                                    <li>Avis à tiers détenteur</li>
                                    <p>
                                        Acte de poursuite de masse, de nature fiscale, permettant au comptable de la
                                        Direction Générale des Finances Publiques d’appréhender, sur simple demande,
                                        entre les mains d’un tiers (banquier, employeur...), des fonds dont il est
                                        détenteur ou débiteur à l’égard d’un redevable de l’administration fiscale.
                                    </p>
                                    <li>Avis de mise en recouvrement</li>
                                    <p>
                                        Titre exécutoire par lequel le comptable public compétent authentifie la
                                        créance fiscale non acquittée à la date d’exigibilité et qui lui permet de
                                        procéder à l’action en recouvrement forcé. Voir 􏰀 Rôle 􏰁.
                                    </p>

                                    <li>Avis d’imposition</li>
                                    <p>
                                        Document adressé à chaque redevable d’impôts directs recouvrés par voie de
                                        rôle ou sur option exclusivement disponible sous forme dématérialisée dans
                                        son compte fiscal en ligne, lui précisant les éléments servant de base au
                                        calcul de l’impôt, le montant des sommes à payer, la date de mise en
                                        recouvrement et la date limite de paiement. <br>
                                        Les avis d'imposition de CFE ne sont pas envoyés par courrier mais sont mis
                                        en ligne dans l'espace professionnel sur le site impots.gouv.fr. Les usagers
                                        doivent les consulter avant la date limite de paiement.
                                    </p>
                            </ol>
                            <li>
                                <h3> Abattement</h3>
                            </li>
                            <ol type="1">
                                <li>Bases brutes pour les impôts locaux</li>
                                <p>
                                    Il s’agit de la valeur locative revalorisée chaque année des locaux situés sur
                                    un territoire après application des abattements et réductions afférents à divers
                                    dispositifs.
                                </p>
                                <li>Bases nettes pour les impôts locaux</li>
                                <p>
                                    Elles correspondent aux bases brutes après des exonérations propres à chaque
                                    collectivité.
                                </p>
                                <li>Bénéfices agricoles</li>
                                <p>
                                    Revenus que l’exploitation des biens ruraux procure soit aux propriétaires
                                    exploitants eux-mêmes, soit aux fermiers, métayers.
                                </p>
                                <li>Bénéfices industriels et commerciaux</li>
                                <p>
                                    Bénéfices provenant de l'exercice à titre habituel d'une profession commerciale,
                                    industrielle ou artisanale par une personne physique et bénéfices provenant des
                                    locations en meublé.
                                </p>
                                <li>Bénéfices non commerciaux</li>
                                <p>
                                    Bénéfices comprenant : <br>
                                    <ul>
                                        <li>les bénéfices des professions libérales (médecins, avocats, architectes,
                                            peintres...) ;</li>
                                        <li>les revenus des charges et offices (notaires, huissiers, commissaires-
                                            priseurs...) ; </li>
                                        <li>les profits ne se rattachant pas à une autre catégorie de revenus
                                            (produits des opérations de bourse, produits perçus par les inventeurs,
                                            ...). </li>
                                    </ul>
                                </p>

                                <li>Bien ordinaire (local ordinaire)</li>
                                <p>
                                    Tout local ne pouvant être qualifié de maison exceptionnelle (voir définition)
                                    ou d’établissement industriel.
                                </p>
                            </ol>
                            <li>
                                <h3> Catégorie de local (en matière de propriétés bâties) </h3>
                            </li>
                            <p>
                                Groupe auquel appartient le local selon une répartition effectuée en fonction de
                                modalités d’évaluation foncière spécifiques. Les immeubles sont répartis en trois
                                catégories :
                                <ul>
                                    <li>catégorie des locaux d’habitation et des locaux à usage professionnel ;</li>
                                    <li>catégorie des locaux commerciaux et biens divers ;</li>
                                    <li>catégorie des établissements industriels.</li>
                                </ul>
                            </p>
                            <ol type="1">
                                <li>Conciliation</li>
                                <p>
                                    La procédure de conciliation, instituée par la loi n°2005-845 du 26 juillet 2005
                                    de sauvegarde des entreprises, entrée en vigueur le 1er janvier 2006, est
                                    applicable lorsque le débiteur éprouve une difficulté juridique, économique ou
                                    financière, avérée ou prévisible, et ne se trouve pas depuis plus de
                                    quarante-cinq jours en cessation des paiements, c’est-à-dire, dans
                                    l’impossibilité de faire face au passif exigible avec son actif disponible. Elle
                                    ne peut être ouverte qu’à l’initiative du débiteur et prend fin dès que celui-ci
                                    en fait la demande.
                                </p>
                                <li>Contentieux du recouvrement</li>
                                <p>
                                    Ensemble des contestations d’un redevable à l’encontre des poursuites engagées
                                    par l’administration : oppositions à poursuites et revendication d’objet saisis.
                                    Appel des décisions portant sur les actions lourdes (action paulienne, action en
                                    simulation, mise en cause de dirigeant, ...).
                                </p>
                                <li>Contribution additionnelle à la contribution exceptionnelle</li>
                                <p>
                                    Les redevables de l'impôt sur les sociétés réalisant un chiffre d'affaires égal
                                    ou supérieur à trois milliards d'euros sont assujettis à la contribution
                                    additionnelle à la contribution exceptionnelle. <br> Elle est due au titre des
                                    exercices clos à compter du 31 décembre 2017 et jusqu’au 30 décembre 2018. <br>
                                    Elle ne s’applique plus aux exercices clos à compter du 31 décembre 2018.
                                </p>

                                <li>Contribution à l’audiovisuel public</li>
                                <p>
                                    Contribution due par les particuliers (adossée à la taxe d’habitation) et par
                                    les professionnels (adossée à la TVA) en cas de détention au 1er janvier de
                                    l’année d’imposition d’un appareil récepteur de télévision ou d’un dispositif
                                    assimilé permettant la réception de la télévision.
                                </p>
                                <li>Contribution annuelle sur les revenus locatifs</li>
                                <p>
                                    Contribution s'appliquant aux revenus locatifs perçus depuis le 1er janvier
                                    2001. Elle a remplacé la contribution additionnelle représentative du droit de
                                    bail. Cette contribution est supprimée depuis le 1er janvier 2006 pour les
                                    seules personnes physiques ainsi que, sous certaines conditions, pour certaines
                                    sociétés de personnes.</p>
                                <li>Contribution économique territoriale (CET)</li>
                                <p>Contribution instituée depuis le 1er janvier 2010, composée de deux éléments
                                    distincts :
                                    <ul>
                                        <li>la cotisation foncière des entreprises (CFE)</li>
                                        <li>la cotisation sur la valeur ajoutée des entreprises (CVAE)</li>
                                    </ul>
                                    La contribution économique territoriale est plafonnée pour chaque entreprise en
                                    fonction de la valeur ajoutée produite lorsque le montant des cotisations CFE et
                                    CVAE excède 3 % de la valeur ajoutée et peut donner lieu à un dégrèvement sur
                                    demande du redevable.
                                </p>

                                <li>Contribution exceptionnelle sur l’impôt sur les sociétés</li>
                                <p>
                                    Les redevables de l'impôt sur les sociétés réalisant un chiffre d'affaires
                                    supérieur à un milliard d'euros sont assujettis à une contribution
                                    exceptionnelle égale à une fraction de cet impôt calculé sur leurs résultats
                                    imposables, aux taux mentionnés à l'article 219 du code général des impôts, des
                                    exercices clos à compter du 31 décembre 2017 et jusqu'au 30 décembre 2018.
                                </p>

                                <li>Contribution exceptionnelle sur les hauts revenus</li>
                                <p>Contribution additionnelle à l’impôt sur le revenu à la charge des contribuables
                                    dont le revenu fiscal de référence excède 250 000 € pour une personne
                                    célibataire, veuve ou divorcée ou 500 000 € pour un couple soumis à une
                                    imposition commune.</p>
                                <li>Contributions sociales</li>
                                <p>Voir prélèvements sociaux</p>
                                <li>Cote</li>
                                <p>Élément détaillé d'un article de taxation. Par exemple, un article de taxes
                                    foncières peut comprendre une cote relative à la taxe foncière sur les
                                    propriétés bâties et une cote relative à la taxe foncière sur les propriétés non
                                    bâties.</p>
                                <li>Cotisation foncière des entreprises (CFE)</li>
                                <p>Imposition due par les personnes physiques ou morales ou les sociétés non dotées
                                    de la personnalité morale qui exercent à titre habituel en France une activité
                                    professionnelle non salariée. <br>
                                    La base d’imposition est constituée par la valeur locative des biens passibles
                                    de taxe foncière dont a disposé le redevable pour les besoins de sa profession
                                    durant la période de référence. <br>
                                    Le cas échéant, une cotisation minimum est susceptible de s’appliquer. <br>
                                    La période de référence retenue est généralement constituée par l’avant-
                                    dernière année précédant celle de l’imposition. <br>
                                    Cette imposition est une composante de la contribution économique territoriale
                                    (voir définition), recouvrée par voie de rôle. <br>
                                    Les avis d'imposition de CFE ne sont pas envoyés par courrier mais sont mis en
                                    ligne dans l'espace professionnel sur le site impots.gouv.fr. Les usagers
                                    doivent les consulter avant la date limite de paiement.</p>

                                <li>Cotisation minimum de CFE (base mini)</li>
                                <p>Les redevables de la CFE sont assujettis à une cotisation minimum établie au lieu
                                    de leur principal établissement. Cette cotisation est due lorsque la base nette
                                    de la CFE est inférieure à une base minimum fixée par la collectivité locale.
                                    <br>
                                    Le montant de la base minimum est fixé par l'organe délibérant de la commune ou
                                    de l’établissement public de coopération intercommunale (EPCI) à fiscalité
                                    propre, selon un barème qui dépend du montant du chiffre d'affaires ou de
                                    recettes hors taxes réalisé au cours de la période de référence.
                                </p>
                                <li>Cotisation sur la valeur ajoutée des entreprises</li>
                                <p>
                                    Imposition due par les personnes physiques ou morales ou les sociétés non dotées
                                    de la personnalité morale qui exercent une activité imposable à la cotisation
                                    foncière des entreprises et ont un chiffre d’affaires hors taxes supérieur à 152
                                    500 €. Elle est déterminée à partir du chiffre d’affaires réalisé et de la
                                    valeur ajoutée produite au cours de l’année d’imposition. Composante de la
                                    contribution économique territoriale (voir définition), cette imposition est
                                    liquidée spontanément par les entreprises.
                                </p>
                                <li>Crédit d'impôt</li>
                                <p>
                                    Somme qui est soustraite du montant de l'impôt dû par une entreprise ou un
                                    particulier. Un crédit d'impôt est un dispositif généralement incitatif visant à
                                    favoriser certaines activités ou dépenses (les dépenses en faveur de la
                                    recherche donnant lieu au crédit d'impôt recherche ; dépenses en faveur des
                                    emplois à domicile qui permettent aux foyers fiscaux de bénéficier d'un crédit
                                    d'impôt emploi à domicile...). Un crédit d'impôt peut être accordé pour
                                    différents types d'impôts (impôt sur le revenu, impôt sur les sociétés...). Il
                                    s'impute sur l'impôt dû et peut faire l'objet d'un remboursement total ou
                                    partiel si le montant de l'impôt est nul ou inférieur à celui du crédit.
                                </p>

                                <li>Crédit d'impôt modernisation du recouvrement (CIMR)</li>
                                <p>Le CIMR, calculé automatiquement par l'administration, vise à effacer l’impôt dû
                                    au titre des revenus courants perçus en 2018 et inclus dans le champ de la
                                    réforme du prélèvement à la source. En revanche, les revenus exceptionnels ainsi
                                    que les autres revenus exclus du champ du PAS (les RCM, les plus-values
                                    mobilières...) perçus en 2018 resteront imposés en 2019 selon les modalités
                                    habituelles. <br>
                                    Par ailleurs, les prélèvements sociaux dus au titre des revenus perçus en 2018
                                    seront annulés par un crédit d’impôt 􏰀 prélèvements sociaux 􏰁 (CIPS) dans les
                                    mêmes conditions.
                                </p>
                                <li>Crédit d'impôt prélèvements sociaux (CIPS)</li>
                                <p>Le crédit d'impôt en matière de contributions et prélèvements sociaux est accordé
                                    dans les mêmes conditions que celles prévues en matière d'impôt sur le revenu
                                    pour le bénéfice du crédit d’impôt pour la modernisation du recouvrement (CIMR)
                                    et, le cas échéant, de son crédit d'impôt complémentaire.</p>
                            </ol>
                            <li>
                                <h3>Décharge </h3>
                            </li>
                            <p>
                                Suppression prononcée par l’administration de la totalité de l’imposition, après que
                                celle-ci ait été contestée par voie contentieuse.
                            </p>
                            <ol type="1">
                                <li>Déclaratif spécial</li>
                                <p>Voir 􏰀 Micro-BNC 􏰁.</p>
                                <li>Déclaration contrôlée</li>
                                <p>Régime s’appliquant aux contribuables qui perçoivent des bénéfices non
                                    commerciaux ou revenus assimilés. <br>
                                    <ul>
                                        <li>à titre obligatoire :</li>
                                        <ul>
                                            <li>lorsque le montant annuel de leurs recettes de l'année civile
                                                précédente ou de la pénultième année excède 70 000 € hors taxes ;
                                            </li>
                                            <li>
                                                quel que soit le montant de leurs recettes, aux officiers publics et
                                                ministériels pour les bénéfices provenant de leur charge ou office
                                                et aux contribuables dont les bénéfices proviennent de la production
                                                littéraire, scientifique ou artistique ou de la pratique d’un sport
                                                et qui
                                                optent pour l’imposition selon un revenu moyen ;
                                            </li>
                                            <li>aux contribuables qui sont exclus du régime de la franchise en base
                                                de
                                                TVA ;</li>
                                            <li>
                                                aux contribuables qui, réalisant dans une même entreprise, des
                                                recettes non commerciales et des recettes commerciales, optent pour
                                                un régime réel d’imposition de leur bénéfice commercial ;
                                            </li>
                                        </ul>
                                        <li> sur option : </li>
                                        <ul>
                                            <li>aux contribuables relevant de plein droit du régime micro-BNC (voir
                                                définition).</li>
                                        </ul>
                                    </ul>

                                    <p>Le bénéfice est déclaré par le contribuable.</p>

                                </p>
                                <li>Déclaration en ligne</li>
                                <p>
                                    A compter des revenus de l’année 2018, les contribuables dont la résidence
                                    principale est équipée d’un accès internet doivent souscrire par voie
                                    électronique. Toutefois, les personnes qui ne sont pas en mesure de souscrire
                                    cette déclaration par internet peuvent déposer une déclaration sur papier.
                                    <li>Déclaration PAS revenus autres (PASRAU)</li>
                                    <p>La déclaration 􏰀 PAS revenus autres 􏰁 est le support déclaratif qui permet
                                        de collecter les données fiscales relatives à l’impôt sur le revenu
                                        (rémunération nette fiscale, prélèvement à la source) de manière pérenne,
                                        pour tous les revenus autres que les salaires et de manière transitoire,
                                        pour tous les salaires d’employeurs du secteur public tant qu’ils ne sont
                                        pas entrés dans le périmètre de la déclaration sociale nominative.
                                    </p>
                                    <li>Déclaration sociale nominative (DSN)</li>
                                    <p>La déclaration sociale nominative, mesure de simplification majeure pour les
                                        entreprises, vise à remplacer progressivement toutes les déclarations
                                        sociales mais aussi à collecter des données permettant d'alimenter le
                                        système d'information de la DGFiP, notamment en matière d’impôt sur le
                                        revenu (rémunération nette fiscale, prélèvement à la source).</p>
                                    <li>Dégrèvement</li>
                                    <p>Suppression ou atténuation d'un impôt prononcée par l’administration,
                                        d'office, par voie contentieuse (décharge ou réduction) ou par voie
                                        gracieuse (remise ou modération). Selon les règles comptables en vigueur, le
                                        dégrèvement est considéré non pas comme une diminution des prises en charge
                                        mais comme une recette d’ordre.</p>
                                    <li>Document d'arpentages</li>
                                    <p>Document modificatif du parcellaire cadastral, le document d’arpentage est
                                        établi aux frais et à la diligence des parties. Il sert à assurer
                                        l'identification des nouvelles <br>parcelles issues de tout changement de
                                        limite de propriété (division, partage, lotissement ...) et la mise à jour
                                        du plan cadastral. Les documents d'arpentage sont établis par des personnes
                                        agréées par la Direction générale des Finances publiques.</p>

                                    <li>Domaine non cadastré</li>
                                    <p>Parties du plan cadastral non divisées en parcelles. Il s'agit principalement
                                        des routes et des cours d'eau, ainsi que de certaines portions du territoire
                                        (terrains militaires, zones de haute montagne inaccessibles).</p>
                                </p>
                            </ol>
                            <li>
                                <h3> Émission </h3>
                            </li>
                            <p>Montant de l'impôt mis à la charge d’une personne ou d’une société sur la base des
                                montants qu’elle a déclarés (cas de l’impôt sur le revenu et des prélèvements
                                sociaux sur les revenus du patrimoine et assimilés), des valeurs foncières des
                                locaux qu'elle habite ou détient (cas des impôts locaux) ou suite à une
                                rectification.</p>
                            <ol>
                                <li>Enregistrement</li>
                                <p>Formalité ayant pour fonction de donner date certaine à un acte et impôt perçu à
                                    cette occasion. La formalité est accomplie par le comptable public compétent
                                    lors d'opérations juridiques (ventes, échanges, ...) ou lors de l'ouverture des
                                    successions. Les droits sont perçus lors de l'enregistrement de ces actes.</p>
                                <li>Escroquerie</li>
                                <p>Infraction qui consiste à faire usage de procédés (usage de faux noms ou de
                                    manœuvres frauduleuses, par exemple) afin de tromper une personne pour la
                                    déterminer à remettre des fonds. Ce délit est prévu par les articles 313-1 et
                                    suivants du Code pénal.</p>
                                <li>Examen de comptabilité</li>
                                <p>Cette procédure permet à l'administration fiscale de réaliser du bureau des
                                    opérations de contrôle à partir du fichier des écritures comptables (FEC)
                                    communiqué par l'entreprise. Elle présente, pour le contribuable, les mêmes
                                    garanties qu’une vérification sur place tout en limitant la charge pesant sur
                                    les entreprises.</p>
                                <li>Exclus de la mensualisation</li>
                                <p>Contribuables qui bénéficiaient d’un contrat de mensualisation mais ont été
                                    exclus du système suite à deux incidents de prélèvement pour cause de provision
                                    insuffisante.</p>

                                <li>Exercice</li>
                                <p>Notion comptable qui désigne la période de temps limitée au cours de laquelle une
                                    entreprise mentionne tous les faits économiques qui la concernent et lui
                                    serviront à établir un bilan comptable à l'issue de la période délimitant
                                    l'exercice. Sont généralement distingués :
                                    <ul>
                                        <li>l’exercice courant ;</li>
                                        <li>l’exercice précédent ;</li>
                                        <li>les exercices antérieurs.</li>
                                    </ul>
                                </p>
                                <li>Exonération</li>
                                <p>Allègement total ou partiel des bases d’imposition et se traduisant par une perte
                                    de recettes fiscales. Elle peut être de droit, facultative ou de droit compensée
                                    par l’État.</p>
                            </ol>
                            <li>
                                <h3> Fichier des redevables permanents <h3>
                            </li>
                            <p>Fichier des redevables permanents</p>

                            <ol>
                                <li>Forfait</li>
                                <p>L'article 33 de la loi n° 1786 du 29 décembre 2015 de finances rectificative pour
                                    2015 a abrogé, à compter de l'imposition des revenus de 2016, le régime du
                                    forfait agricole pour le remplacer par un régime dit 􏰀 micro BA 􏰁, codifié à
                                    l'article 64 bis du code général des impôts (CGI). <br>
                                    Le régime 􏰀 micro BA 􏰁 s'applique de plein droit aux exploitants agricoles
                                    dont la moyenne des recettes sur troisannées consécutives, pour l'ensemble des
                                    exploitations, ne dépasse pas 82 800 €, hors taxes.</p>

                                <li>Foyer fiscal (impôt sur le revenu)</li>
                                <p>Ensemble des personnes dont les ressources font l’objet d’une seule déclaration
                                    de revenus. L’impôt est établi sur l’ensemble des revenus du foyer fiscal
                                    (déclarant, conjoint, personnes à charge).

                                    <ol type="a">
                                        <li>Foyers fiscaux imposables (à l’impôt sur le revenu)</li>
                                        <p>Foyers fiscaux dont l’impôt avant imputation de tout crédit ou réduction
                                            d’impôt est strictement positif.</p>
                                        <li>Foyers fiscaux non imposables (à l’impôt sur le revenu)</li>
                                        <p>Foyers fiscaux dont l’impôt avant imputation de tout crédit ou réduction
                                            d’impôt est nul.</p>
                                        <li>Foyers fiscaux imposés (à l’impôt sur le revenu)</li>
                                        <p>Foyers fiscaux pour lesquels l'impôt sur le revenu indiqué est
                                            strictement positif.</p>
                                        <li>Foyers fiscaux non imposés (à l’impôt sur le revenu)</li>
                                        <p>Foyers fiscaux pour lesquels aucun montant d’impôt n’est mis en
                                            recouvrement.</p>
                                    </ol>
                                </p>
                                <li>Franchise en base de TVA</li>
                                <p>Dispositif qui dispense les entreprises de la déclaration et du paiement de la
                                    TVA sur les prestations ou ventes qu'elles réalisent. Quels que soient la forme
                                    juridique et le régime d'imposition des bénéfices, ce régime fiscal s'applique
                                    aux entreprises dont le chiffre d'affaires de l'année précédente n'a pas dépassé
                                    :
                                    <ul>
                                        <li class="aaa">82 800 € l'année civile précédente pour les activités de
                                            commerce et d'hébergement (hôtels, chambres d'hôtes, gîtes ruraux,
                                            meublés de tourisme) ou 91 000 € l'année civile précédente, lorsque le
                                            chiffre d'affaires de l'avant dernière année a été inférieur à 82 800 €
                                            ;</li>
                                        <li class="aaa">33 200 € l'année civile précédente pour les prestations de
                                            service et les professions libérales relevant des BNC et des BIC ou 35
                                            200 € l'année civile précédente, lorsque le chiffre d'affaires de
                                            l'avant dernière année a été inférieur à 33 200 €.</li>
                                    </ul>
                                </p>
                                <li>Fraude fiscale (délit de)</li>
                                <p>Infraction qui consiste pour un contribuable à se soustraire ou tenter de se
                                    soustraire frauduleusement à l'établissement ou au paiement de l'impôt. <br> La
                                    répression pénale de la fraude fiscale suit une procédure spéciale qui prévoit
                                    notamment que les poursuites ne peuvent être engagées que sur plainte préalable
                                    de l'administration fiscale déposée après avis favorable de la Commission des
                                    infractions fiscales. Ce délit est prévu à l'article 1741 du Code général des
                                    impôts.</p>

                            </ol>
                            <li>
                                <h3>Gestion</h3>
                            </li>
                            <p>Notion comptable qui coïncide avec l’année civile. Les recettes recouvrées en gestion
                                comprennent l’ensemble des sommes perçues quelle que soit l’année d’émission des
                                rôles ou l’exercice comptable. Ainsi, la gestion comprend l’exercice courant,
                                l’exercice précédent et les exercices antérieurs.</p>
                            <li>
                                <h3>Homologation</h3>
                            </li>
                            <p>Acte du directeur général des finances publiques ou du Préfet (ou par délégation de
                                pouvoir de ce dernier, les agents placés sous l’autorité des directeurs
                                départementaux
                                des finances publiques ou des responsables de services à compétence nationale ayant
                                au moins le grade d’administrateur des finances publiques adjoint) qui rend les
                                rôles d’impôts directs exécutoires et permet ainsi aux comptables publics d’en
                                assurer le recouvrement.
                            </p>
                            <li>
                                <h3>Imposition forfaitaire sur les entreprises de réseaux </h3>
                            </li>
                            <p>Imposition forfaitaire à laquelle sont assujetties certaines entreprises de réseaux.
                                Elle vise certaines installations ou matériels (éoliennes, centrales nucléaires ou
                                thermiques à flamme, stations radioélectriques, centrales photovoltaïques ou
                                hydrauliques, matériels roulants destinés au transport de voyageurs, transformateurs
                                électriques, installations gazières et canalisations de gaz naturel liquéfié...). Le
                                produit est affecté au profit des collectivités locales, de leurs établissements
                                publics de coopération intercommunale ou de l’établissement public du grand Paris.
                            </p>
                            <ol>

                                <li>Impositions ordinaires</li>
                                <p>Impositions qui ne résultent pas d’un contrôle fiscal sur place effectué par les
                                    services de vérification de l’administration fiscale.</p>
                                <li>Impôt direct</li>
                                <p>Impôt payé et supporté par la même personne. Il s'agit notamment de l'impôt sur
                                    le revenu ou de la taxe d'habitation.</p>
                                <ol type="a">
                                    <li>Impôts directs recouvrés par voie de rôle :
                                        <ul>
                                            <li class="aaa"> impôt sur le revenu et prélèvements sociaux sur le
                                                patrimoine;</li>
                                            <li class="aaa">impôt sur la fortune immobilière (à compter du
                                                01/01/2018) lorsque le
                                                patrimoine net imposable au 1er janvier est supérieur à 1 300 000 ;
                                            </li>
                                            <li class="aaa">impôts directs locaux :</li>
                                            <li class="aaa">taxe d'habitation, contribution à l’audiovisuel public
                                                et taxe d’habitation sur les logements vacants ;</li>
                                            <li class="aaa">taxe annuelle sur les logements vacants ;</li>
                                            <li class="aaa">taxes foncières sur les propriétés bâties et non bâties
                                                ;</li>
                                            <li class="aaa">cotisation foncière des entreprises (en remplacement de
                                                la taxe professionnelle), taxes additionnelles et redevances
                                                principales (taxe d'enlèvement des ordures ménagères, taxe pour
                                                frais de chambres de commerce et d'industrie, taxe pour frais de
                                                chambres de métiers, taxe sur les friches commerciales et imposition
                                                forfaitaire sur les entreprises de réseaux).</li>
                                        </ul>
                                    </li>
                                    <li>Autres impôts directs recouvrés sans rôle / par voie d’avis de mise en
                                        recouvrement(les principaux):
                                        <ul>
                                            <li class="aaa">impôt sur les sociétés ;</li>
                                            <li class="aaa">impôt de solidarité sur la fortune lorsque le patrimoine
                                                net imposable</li>
                                        </ul>
                                    </li>
                                    <li>au 1er janvier 2017 est supérieur à 2 570 000 € ;
                                        <ul>
                                            <li class="aaa">cotisation sur la valeur ajoutée des entreprises ;</li>
                                            <li class="aaa">taxe sur les véhicules de sociétés ;</li>
                                            <li class="aaa">taxe sur les salaires ;</li>
                                            <li class="aaa">taxe sur les locaux à usage de bureaux (Île-de-France).
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Impôt indirect</li>
                                    <p>Impôt distinguant le redevable de l'impôt (celui qui verse le montant de
                                        l'impôt) du contribuable effectif (celui qui supporte effectivement
                                        l'impôt). Le principal impôt indirect est la taxe sur la valeur ajoutée.</p>
                                    <li>Impôt de solidarité sur la fortune (IFI)</li>
                                    <p>Impôt annuel dû par une personne physique propriétaire d'un patrimoine
                                        immobilier excédant le seuil d'imposition au 1er janvier de l'année
                                        d'imposition (1 300 000 € à compter du 1er janvier 2013). L’IFI a remplacé
                                        l’ISF depuis 2018.</p>

                                    <li>Impôt sur le revenu</li>
                                    <p>Impôt établi sur l'ensemble des revenus catégoriels (voir définition) dont
                                        bénéficient les personnes physiques au cours d'une année déterminée.</p>
                                </ol>
                                <li>Impôt de solidarité sur la fortune (ISF)</li>
                                <p>Impôt annuel dû par une personne physique propriétaire d'un patrimoine excédant
                                    le seuil d'imposition au 1er janvier de l'année d'imposition (1 300 000 € à
                                    compter du 1er janvier 2013). <br>
                                    L'article 31 de la loi n° 2017-1837 du 30 décembre 2017 de finances pour 2018 a
                                    supprimé les dispositions portant sur l'ISF. <br>
                                    L’ISF a été remplacé par l’impôt sur la fortune immobilière (IFI).
                                </p>
                                <li>Intégration fiscale progressive</li>
                                <p>Lorsque l’écart de taux communal est significatif, la fusion de deux ou plusieurs
                                    communes peut s’accompagner du maintien pendant une période d’au plus 12 ans, de
                                    taux d’imposition distincts sur les territoires des anciennes communes. Cette
                                    opération est dite avec 􏰀 intégration fiscale progressive 􏰁 (IFP) des taux.
                                </p>
                            </ol>
                            <li>
                                <h3> Jour-amende <h3>
                            </li>
                            <p>
                                Peine substituant une sanction pécuniaire à une peine privative de liberté ou peine
                                complémentaire qu'une juridiction peut prononcer lorsqu'un prévenu est passible
                                d'une peine d'emprisonnement. <br>
                                Le montant global de la peine résulte de la fixation par le juge d'une contribution
                                quotidienne pendant un certain nombre de jours. Le montant de chaque jour- amende
                                est déterminé en tenant compte des ressources et des charges du prévenu, sans
                                pouvoir excéder 1 000 euros par jour-amende. Le nombre de jours-amende est déterminé
                                en tenant compte des circonstances de l’infraction, sans pouvoir excéder trois cent
                                soixante (article 131-5 du Code pénal). <br>
                                Le défaut total ou partiel de paiement à l'expiration d'un délai égal au nombre de
                                jours-amende peut entraîner, sous certaines conditions, un emprisonnement pour une
                                durée correspondant au nombre de jours-amendes impayés (article 131-25 du Code
                                pénal). <br>
                            </p>

                            <li>
                                <h3>Liquidation judiciaire </h3>
                            </li>
                            <p>Procédure instituée par la loi n° 85-98 du 25 janvier 1985. <br>
                                La liquidation judiciaire est destinée à mettre fin à l’activité de l’entreprise et
                                à réaliser le patrimoine du débiteur soit par une cession globale soit par des
                                cessions séparées de ses droits et biens. <br>
                                Elle est applicable au débiteur qui est en cessation des paiements et dont le
                                redressement est manifestement impossible. L'ouverture de cette procédure doit être
                                demandée par le débiteur au plus tard dans les quarante-cinq jours qui suivent la
                                cessation des paiements s'il n'a pas, dans ce délai, demandé l'ouverture d'une
                                procédure de conciliation. Lorsqu’il n’y a pas de procédure de conciliation en
                                cours, le tribunal peut être saisi par le ministère public ou encore par un
                                créancier.
                            </p>
                            <li>
                                <h3>Local</h3>
                            </li>
                            <p>Unité d'évaluation des propriétés bâties. Le local peut comprendre une partie
                                principale, une ou plusieurs dépendances et une ou plusieurs constructions
                                accessoires.</p>
                            <li>
                                <h3>Maison exceptionnelle </h3>
                            </li>
                            <p>Propriété bâtie qui peut être affectée, soit à usage d'habitation ou à usage
                                professionnel, soit à usage commercial ou assimilé. <br>
                                Sont ainsi rangés sous la rubrique 􏰀 maisons exceptionnelles 􏰁 :</p>
                            <ul>
                                <li class="aaa">les locaux d'habitation présentant un caractère exceptionnel,
                                    c'est-à-dire les immeubles que leur caractère architectural, leurs dimensions,
                                    leur mode de construction placent hors de la classification générale prévue pour
                                    les locaux d'habitation. Tel est le cas de certains châteaux, abbayes,
                                    monastères, etc., et plus spécialement, des bâtiments classés parmi les
                                    monuments historiques ou inscrits à l'inventaire des monuments historiques ;
                                </li>
                                <li class="aaa">les locaux à usage professionnel qui sont spécialement aménagés pour
                                    l’exercice d'une activité particulière (gymnases, par exemple) ;</li>
                                <li class="aaa">les 􏰀 établissements spéciaux 􏰁 ayant un caractère 􏰀 hors du
                                    commun 􏰁 (grands magasins, grands hôtels, grands cinémas, etc.) et les biens
                                    divers présentant ce même caractère.</li>
                            </ul>

                            <ol>

                                <li>Méthode comptable</li>
                                <p>Règles d’évaluation de la valeur locative des établissements industriels à partir
                                    des données du bilan de l’entreprise. La valeur locative est déterminée en
                                    appliquant au
                                    prix de revient de leurs différents éléments constitutifs, corrigé dans les
                                    conditions prévues à l'article 1499 du Code général des impôts, les taux
                                    d'intérêt prévus à l'article 310 L de l'annexe II au code précité, soit :</p>
                                <ul>
                                    <li class="aaa">8 % pour les terrains et les sols ;</li>
                                    <li class="aaa">12 % pour les constructions et installations soumises à la taxe
                                        foncière sur les propriétés bâties.</li> <br>
                                </ul>
                                <li>Méthode particulière</li>
                                <p>Règles d’évaluation de la valeur locative cadastrale des établissements
                                    industriels dont les propriétés ne relèvent pas de la méthode comptable (voir
                                    définition), effectuées suivant les règles prévues pour les locaux commerciaux
                                    et biens divers. Ceci conduit à déterminer la valeur locative cadastrale :</p>
                                <ul>
                                    <li class="aaa">soit à partir du prix de loyer qui ressort du bail pour les
                                        biens donnés en location à des conditions de prix normales ;</li>
                                    <li class="aaa">soit par comparaison ou, à défaut, par voie d'appréciation
                                        directe sur la base de la valeur vénale, pour les biens loués à des
                                        conditions de prix anormales, occupés par leur propriétaire ou par un tiers
                                        à un autre titre que la location, vacants ou concédés à titre gratuit.</li>
                                </ul>
                                <li>Micro-entrepreneur</li>
                                <p>À compter de 2016, 􏰀 l’auto-entrepreneur 􏰁 devient le 􏰀 micro-entrepreneur 􏰁
                                    en raison de l’évolution de ce régime. <br>
                                    Pour les entreprises créées à compter du 1er janvier 2016, les contribuables
                                    relevant du régime micro BIC, ou du régime spécial BNC bénéficient
                                    automatiquement du régime micro social caractérisé par un prélèvement
                                    libératoire des cotisations sociales. <br>
                                    Ce régime simplifié de paiement libératoire des charges sociales peut être
                                    complété par une option pour le versement libératoire de l’impôt sur le revenu.
                                    Le micro-entrepreneur, placé sous le régime fiscal de la micro-entreprise dans
                                    la catégorie micro-BIC ou micro-BNC, doit déclarer son chiffre d'affaires ou ses
                                    recettes de façon mensuelle ou trimestrielle (en fonction de la période
                                    choisie), pour permettre le calcul des cotisations et contributions sociales.
                                </p>
                                <li>Micro : régimes micro</li>
                                <p>Régime déclaratif spécial BNC (article 102 ter du CGI) dit 􏰀 micro-BNC 􏰁 <br>
                                    Régime de droit commun pour les contribuables relevant des bénéfices non
                                    commerciaux dont les recettes annuelles hors taxes n'excèdent pas l'année civile
                                    précédente (N-1) ou la pénultième année (N-2) 70 000 € hors taxes. Seul le
                                    montant des recettes est à déclarer directement sur la déclaration de l’impôt
                                    sur le revenu (des abattements spécifiques sont appliqués à ces recettes).
                                </p>

                                <li>Régime des micro-entreprises (article 50-0 du CGI) dit 􏰀 micro-BIC 􏰁</li>
                                <ul>
                                    <li class="aaa">Régime de droit commun pour les personnes exerçant une activité
                                        industrielle, commerciale ou artisanale assujetties à l’impôt sur le revenu
                                        dans la catégorie des bénéfices industriels ou commerciaux, dont le chiffre
                                        d'affaires annuel hors taxe n'excède pas l'année civile précédente (N-1) ou
                                        la pénultième année (N-2) :</li>
                                    <li class="aaa">170 000 € lorsque le commerce principal est de vendre des
                                        marchandises, objets, fournitures et denrées à emporter ou à consommer sur
                                        place ou de fournir le logement (à l'exclusion de la location meublée autre
                                        que les meublés de tourisme et les chambres d'hôtes) ;</li>
                                    <li class="aaa">70 000 € pour les autres entreprises.</li>
                                </ul>
                                <p>Seul le chiffre d’affaires est à reporter directement sur la déclaration de
                                    l’impôt sur le revenu (des abattements spécifiques sont appliqués à ce chiffre
                                    d’affaires).</p>
                                <li>Micro BA</li>
                                <p>Le régime du micro BA remplace le régime du bénéfice forfaitaire agricole. Le
                                    bénéfice imposable des exploitants relevant du régime du micro BA est égal à la
                                    moyenne des recettes hors taxe de l'année d'imposition et des deux années
                                    précédentes diminué d'un abattement représentatif des charges de 87%. La moyenne
                                    calculée sur les trois dernières années qui précèdent l'année d'imposition ne
                                    doit pas excéder 82 800 €. Seules les recettes sont à reporter directement sur
                                    la déclaration de l'impôt sur le revenu.</p>
                                <li>Mise en demeure de payer</li>
                                <p>Acte de poursuites interruptif de prescription, préalable nécessaire à
                                    l’engagement de procédures génératrices de frais (saisie-vente notamment).</p>
                                <li>Mise en recouvrement</li>
                                <p>Date à partir de laquelle le comptable public est chargé de recouvrer l’impôt et
                                    le redevable reçoit l’avis d’imposition s’agissant des impôts directs recouvrés
                                    par voie de rôle. Elle est fixée, en règle générale, au trentième jour suivant
                                    celui de l’homologation. Ce délai peut être cependant raccourci (pas moins de 8
                                    jours) ou rallongé (au maximum 60 jours) selon les impératifs du recouvrement.
                                    <br>
                                    S’agissant des impôts recouvrés par voie d’avis de mise en recouvrement, cette
                                    date correspond à la date de l’avis de mise en recouvrement notifié au
                                    redevable.
                                </p>
                                <li>Mutation à titre gratuit</li>
                                <p>Succession ou donation qui ne comporte, en principe, la fourniture d'aucune
                                    contrepartie par leur bénéficiaire.</p>

                                <li>Mutation à titre onéreux</li>
                                <p>Vente de biens meubles ou immeubles.</p>
                            </ol>
                            <li>
                                <h3>Non diffusable (information)</h3>
                            </li>
                            <p>Information non communiquée en application des règles du secret statistique. Les
                                seuils appliqués sont les suivants : <br>
                                règle du nombre des unités
                            </p>
                            <ul>
                                <li>cas général</li>
                                <p>Une donnée agrégée n’est pas communiquée lorsqu’elle concerne moins
                                    de trois unités.</p>
                                <li>- cas particulier</li>
                                <p>En matière de fiscalité des personnes (IR, BIC, BNC, BA, TH, ISF), ce seuil
                                    est porté à onze unités. règle du poids des unités
                                    Une donnée agrégée n’est pas communiquée lorsqu’elle comprend un élément
                                    dominant qui représente plus de 85 % du montant agrégé.
                                </p>
                            </ul>
                            <li>
                                <h3>Paiement dématérialisé</h3>
                            </li>
                            <p>Le paiement dématérialisé des impôts autoliquidés des professionnels (TVA, impôt sur
                                les sociétés, taxe sur les salaires, cotisation sur la valeur ajoutée des
                                entreprises, prélèvement sur les revenus de capitaux mobiliers) peut être effectué
                                soit en mode EDI (envoi de fichiers comportant les informations de paiement), soit
                                en mode EFI (paiement en ligne sur internet). Dans les deux cas, ces paiements sont
                                effectués au format de prélèvement SEPA interentreprises (B2B). <br>
                                En matière d’impôts sur rôle des particuliers, et de cotisation foncière des
                                entreprises,
                                taxes annexes et imposition forfaitaire sur les entreprises de réseau pour les
                                professionnels, le paiement dématérialisé regroupe le prélèvement mensuel, le
                                prélèvement à l’échéance et le paiement en ligne
                                Jusqu’en 2013, le taux de paiement dématérialisé exprime le rapport entre le nombre
                                d’adhésions au prélèvement mensuel, au prélèvement à l’échéance ou paiement en ligne
                                (hors acomptes provisionnels d’IR et à effet en N) et le nombre de contribuables
                                imposés (ou d’articles de rôles émis) en N-1. <br>
                                A partir de 2014, le taux de paiement dématérialisé exprime le rapport entre le
                                nombre de contrats de prélèvement (mensuel ou à l’échéance) et de paiements en ligne
                                (hors acomptes provisionnels d’IR et à effet en N), permettant de solder une
                                imposition au nombre de contribuables imposés sur l’année N. Ce taux ne prend en
                                compte que les contrats de prélèvement mensuel permettant de solder les impositions
                                par prélèvement mensuel en N, soit les contrats actifs, ce qui a pour effet de
                                neutraliser les contrats existants pour des contribuables non imposés.
                            </p>
                            <ol type="1">

                                <li>Paiement en ligne</li>
                                <p>Moyen de paiement qui permet le règlement à distance des impôts par des voies
                                    télématiques (Internet, terminaux mobiles, smartphones, tablettes...). Le
                                    contribuable adhère au paiement en ligne et donne ensuite son ordre de paiement
                                    au coup par coup. <br>
                                    A partir de 2019, en raison de la mise en place du prélèvement à la source,
                                    l'impôt sur les revenus n’est plus intégré au suivi du paiement dématérialisé.
                                </p>
                                <li>Parcelle</li>
                                <p>Une parcelle s’entend de l'ensemble des terrains contigus, situés dans une même
                                    section et un même lieu-dit, appartenant à un même propriétaire et formant un
                                    tout dont l'indépendance est évidente en raison de l'agencement de la propriété
                                </p>
                                <li>Part</li>
                                <p>Chiffre tenant compte de la situation et des charges de famille de chaque
                                    contribuable, divisant le revenu imposable pour le calcul de l'impôt sur le
                                    revenu.</p>
                                <li>Pensions et rentes</li>
                                <p>Allocations périodiques dont le paiement est, le plus souvent, garanti aux
                                    bénéficiaires leur vie durant.
                                    <br> À l’exception de quelques cas précis, ces sommes sont soumises à l'impôt
                                    sur le revenu. </p>
                                <li>Plafonnement de la contribution économique territoriale en fonction de la valeur
                                    ajoutée </li>
                                <p>Demande du redevable effectuée dans le délai légal de réclamation prévu pour la
                                    CFE afin de bénéficier d'un plafonnement fixé à 3 % de la valeur ajoutée.</p>
                                <li>Plus-value/moins-value</li>
                                <p>Augmentation (plus-value) ou diminution (moins-value) de la valeur d’un bien
                                    mobilier ou immobilier par rapport à sa valeur initiale, calculée au moment de
                                    la vente de ce bien.</p>

                                <li>Plus-value à long terme</li>
                                <p>En fiscalité professionnelle, constat d’un excédent du prix de cession sur le
                                    prix de revient de certains biens détenus depuis deux ans au moins. Ces
                                    plus-values sont susceptibles de bénéficier d'un taux réduit d'imposition, sous
                                    certaines conditions.</p>
                                <li>Plus-value à taux proportionnel</li>
                                <p>Plus-value réalisée sur les ventes de biens meubles ou immeubles, les gains suite
                                    à la clôture d’un PEA ou PEA-PME (avant le délai de 5 ans), les gains de levée
                                    d’option sur titres taxées à l’impôt sur le revenu ou à l’impôt sur les sociétés
                                    à différents taux (0 % , 8 %, 16 % ,18 %, 19 %...).</p>
                                <li>Prélèvement à l’échéance</li>
                                <p>Mode de paiement par lequel le redevable autorise l‘administration fiscale à
                                    prélever sur le compte indiqué le montant de l’impôt dû (sans limitation de
                                    durée).</p>
                                <li>Prélèvement à la source</li>
                                <p>
                                    Mode de recouvrement contemporain de l'impôt sur les revenus selon la nature des
                                    revenus :
                                    <ul>
                                        <li>pour les traitements, salaires, pensions de retraites et revenus de
                                            remplacement, par prélèvement par le tiers payeur (employeur, caisse de
                                            retraite, banque, etc.) au moment du versement des revenus en fonction
                                            d’un taux calculé et transmis par l’administration fiscale ;</li>
                                        <li>pour les revenus sans tiers collecteur (revenus des indépendants et des
                                            gérants majoritaires de société, revenus fonciers, etc.), par
                                            prélèvement mensuel ou trimestriel sur le compte du foyer fiscal,
                                            d’acomptes calculés par l’administration fiscale.</li>
                                    </ul>
                                </p>
                                <li>Prélèvement à la source de l’impôt sur le revenu</li>
                                <p>Entré en vigueur en 2019, le prélèvement à la source consiste à faire payer
                                    l’impôt en même temps que la perception des revenus. L’impôt est prélevé
                                    directement sur le revenu versé par le collecteur (employeur ou organisme
                                    prestataire) selon un taux de prélèvement calculé et transmis par
                                    l’administration fiscale. En l’absence de tiers verseur (travailleur
                                    indépendant, agriculteur, revenus fonciers), l’impôt sur le revenu est payé par
                                    des acomptes prélevés directement par l’administration fiscale sur le compte
                                    bancaire du particulier.</p>

                                <li>Prélèvements sociaux</li>
                                <p>Pour les revenus 2018, ils sont constitués des éléments suivants qui sont retenus
                                    sur les revenus du patrimoine et les produits de placement des personnes
                                    domiciliées en France :
                                    <ul>
                                        <li>la contribution sociale généralisée (CSG) de 9,2 %,</li>
                                        <li>la contribution au remboursement de la dette sociale (CRDS) de 0,5 %,
                                        </li>
                                        <li>le prélèvement de solidarité de 7,5 %.</li>
                                    </ul>
                                </p>
                                <li>Prise en charge</li>
                                <p>Impôts mis en recouvrement par voie de rôle : transformation d’un titre de
                                    recettes en pièce comptable constatant le montant des produits à recouvrer. Les
                                    prises en charge comprennent le montant des rôles émis par l’administration
                                    fiscale (􏰀 principal de l’impôt 􏰁) et le montant des majorations de 10 % (5 %
                                    pour la CFE et/ou IFER) liquidées pour paiement tardif, de 0,2% liquidées pour
                                    non-respect de l'obligation de paiement dématérialisé et des frais de poursuites
                                    (􏰀 les accessoires 􏰁). <br>
                                    Impôts mis en recouvrement par voie d’avis de mise en recouvrement : opération
                                    administrative d’ordre interne qui constate les sommes, droits, taxes et
                                    redevances de toute nature, dont le paiement n’est pas effectué à la date
                                    d’exigibilité, afin de les authentifier par la notification d’un avis de mise en
                                    recouvrement. Il peut s’agir :
                                    <ul>
                                        <li>de droits dus suite à un dépôt sans paiement ;</li>
                                        <li>d’une déclaration sans paiement (TVA, TVS, FPC, TSCA,...) ;</li>
                                        <li>d’un bordereau d’acomptes (IS, TS) ;</li>
                                        <li>d’un relevé de solde (IS ou TS) ;</li>
                                        <li>de droits dus suite à un contrôle sur pièces ou sur place, de frais de
                                            poursuites.
                                        </li>
                                    </ul>
                                </p>
                            </ol>
                            <li>
                                <h3> Recettes budgétaires </h3>
                            </li>
                            <ol>
                                <li>Recettes perçues au profit du budget de l'État.</li>
                                <p>Un montant de recettes ne porte pas nécessairement sur un exercice unique ; il
                                    peut également inclure des recettes relatives à des exercices antérieurs.</p>
                                <li>Recettes non budgétaires</li>
                                <p>Recettes perçues au profit des collectivités locales, des organismes de sécurité
                                    sociale ou d'organismes divers.</p>
                                <li>Réclamation contentieuse</li>
                                <p>Demande par laquelle un contribuable conteste le montant des impositions mises à
                                    sa charge, avant de porter le litige, le cas échéant, devant le juge de l’impôt.
                                </p>
                                <ul>

                                </ul>
                                <li>Réclamation gracieuse</li>
                                <p>Demande présentée par un contribuable en vue d’obtenir de l’administration une
                                    mesure de bienveillance portant abandon ou atténuation des impositions ou des
                                    pénalités mises à sa charge.</p>
                                <li>Recouvrement</li>
                                <p>Encaissement.</p>
                                <li>Redevable</li>
                                <p>Terme désignant une personne passible d'un impôt.</p>
                                <li>Redressement judiciaire</li>
                                <p>Procédure instituée par la loi n° 85-98 du 25 janvier 1985 qui se substitue à la
                                    procédure de règlement judiciaire. <br>
                                    Cette procédure est applicable au débiteur qui, dans l'impossibilité de faire
                                    face au passif exigible avec son actif disponible, est en cessation des
                                    paiements. L'ouverture doit être demandée par le débiteur au plus tard dans les
                                    quarante-cinq jours qui suivent la cessation des paiements s'il n'a pas, dans ce
                                    délai, demandé l'ouverture d'une procédure de conciliation. Lorsqu’il n’y a pas
                                    de procédure de conciliation en cours, le tribunal peut être saisi par le
                                    ministère public ou encore par un créancier.
                                </p>
                                <li>Réduction d’impôt</li>
                                <p>Somme qui est soustraite du montant de l'impôt dû par une entreprise ou un
                                    particulier. Une réduction d'impôt est un dispositif généralement incitatif
                                    visant à favoriser certaines activités ou dépenses. Dans le cas où le montant de
                                    la réduction d'impôt est supérieur au montant de l'impôt dû, il ne peut y avoir
                                    de remboursement, ni de report de cette différence sur l’impôt dû au titre des
                                    années suivantes sauf exceptions. En conséquence, la réduction d'impôt ne
                                    pouvant excéder le montant de l'impôt dû, la différence n’est pas restituée au
                                    contribuable. <br>Les dépenses permettant de réduire son impôt sont multiples.
                                    <br>Il peut s’agir notamment :</p>
                                <ul>
                                    <li>de certains placements (investissements en logement locatif neuf tels que le
                                        dispositif Scellier, le dispositif Duflot, la location meublée non
                                        professionnelle, les investissements forestiers, les actions Sofica...) ;
                                    </li>
                                    <li>de l'embauche d'un salarié à domicile ;</li>
                                    <li>des frais d' hébergement d'une personne dépendante ;</li>
                                    <li>des frais de scolarisation ;</li>
                                    <li>des parts prises dans une PME (petite ou moyenne entreprise) ;</li>
                                    <li>de certains dons ;</li>
                                    <li>de sommes versées par les entreprises au titre du mécénat.</li>
                                </ul>

                                <li>Réel normal</li>
                                <p>Régime d'imposition applicable de plein droit pour l'impôt sur les sociétés,
                                    l'impôt sur le revenu (bénéfices industriels et commerciaux) et la taxe sur la
                                    valeur ajoutée aux entreprises dont le chiffre d'affaires annuel réalisé excède
                                    :</p>
                                <ul>
                                    <li>789 000 € hors taxes en 2017 pour les entreprises dont le commerce principal
                                        est de vendre des marchandises, objets, fournitures et denrées à emporter ou
                                        à consommer sur place ou de fournir le logement ;</li>
                                    <li>238 000 € hors taxes en 2017 pour les autres entreprises. Réel simplifié
                                    </li>
                                </ul>
                                <p>
                                    Régime d'imposition applicable de plein droit pour l'impôt sur les sociétés,
                                    l'impôt sur le revenu (bénéfices industriels et commerciaux) dont le chiffre
                                    d'affaires excède les limites du régime micro-entreprise (soit 170 000 € pour
                                    les activités d'achat-revente, vente à consommer sur place et fourniture de
                                    logement et 70 000 € pour les activités de prestations de services)
                                    et la taxe sur la valeur ajoutée aux entreprises dont le chiffre d'affaires
                                    excède les limites du régime micro-entreprise (soit 82 800 € pour les activités
                                    d'achat-revente, vente à consommer sur place et fourniture de logement et 33 200
                                    € pour les activités de prestations de services) et est inférieur aux limites du
                                    régime réel normal d'imposition (voir définition). <br>
                                    Certaines entreprises pourront donc être assujetties à la TVA sous le régime
                                    simplifié tout en restant au régime micro-entreprise. <br>
                                    Les contribuables soumis de plein droit au régime simplifié d'imposition peuvent
                                    opter pour le régime réel normal.
                                </p>
                                <li>Remboursement de crédits de TVA</li>
                                <p>Remboursement opéré lorsque le montant de la TVA déductible est supérieur au
                                    montant de la TVA collectée. L'entreprise peut demander, en fonction de son
                                    régime d’imposition, le remboursement de cette différence. En principe annuel,
                                    le remboursement peut être demandé mensuellement ou trimestriellement suivant
                                    certaines conditions (régime d’imposition, montant annuel de la taxe exigible,
                                    périodicité de dépôt de la déclaration de TVA).</p>
                                <li>Remboursement forfaitaire agricole</li>
                                <p>Compensation de la charge de la TVA ayant grevé les achats des exploitants
                                    agricoles qui ne sont pas redevables de la TVA.</p>
                                <li>Rétablissement professionnel</li>
                                <p>Ce dispositif est institué par l’ordonnance du 12 mars 2014 qui porte la réforme
                                    de la prévention des difficultés des entreprises et des procédures collectives.
                                    Inspiré de la procédure de rétablissement personnel du code de la consommation
                                    vise à favoriser et accélérer le traitement des situations irrémédiablement
                                    compromises pour les entrepreneurs dont l’actif ne permet pas de couvrir les
                                    frais d’une procédure ou de désintéresser les créanciers, et ainsi, de donner à
                                    ces derniers une nouvelle chance. Le rétablissement professionnel n’entre pas
                                    dans la catégorie des procédures collectives, ce qui explique qu’il n’y ait ni
                                    dessaisissement du débiteur durant les quatre mois que dure la procédure, ni
                                    suspension provisoire des poursuites individuelles.</p>

                                <li>Retenue à la source des non-résidents</li>
                                <p>Retenue opérée sur certains revenus de source française versés à des personnes
                                    domiciliées hors de France, c’est-à-dire :
                                    <ul>
                                        <li>les revenus de capitaux mobiliers,</li>
                                        <li>certains revenus non salariaux :</li>
                                        <ul>
                                            <li>sommes versées en rémunération des activités professionnelles
                                                relevant de la catégorie des bénéfices non commerciaux ;</li>
                                            <li>droits d’auteur ; </li>
                                            <li>produits de la propriété industrielle ou commerciale ;</li>
                                            <li>les traitements, salaires, pensions et rentes viagères.</li>
                                        </ul>
                                    </ul>
                                    <li>Retenue à la source</li>
                                    <p>Dans le cadre du prélèvement à la source, la retenue à la source est
                                        effectuée par l’organisme qui verse les salaires, les pensions, les rentes
                                        viagères à titre gratuit et les revenus de remplacement (indemnités
                                        journalières de maladie, allocations de chômage...). La retenue à la source
                                        est effectuée chaque mois par le débiteur des revenus en appliquant un taux
                                        calculé sur la base de la dernière déclaration de revenus des contribuables
                                        et transmis automatiquement par l’administration fiscale</p>
                                    <li>Revenu brut global</li>
                                    <p>Revenu intermédiaire dans le calcul de l’impôt sur le revenu, correspondant à
                                        la somme des différents revenus catégoriels nets (par exemple, salaires
                                        après déduction des 10 % ou revenus de capitaux mobiliers après abattements)
                                        et de laquelle il convient de soustraire les déficits des années
                                        antérieures. Il est calculé avant imputation des charges à déduire du revenu
                                        (par exemple, pensions alimentaires versées) pour le calcul de l’impôt.</p>
                                    <li>Revenus de capitaux mobiliers</li>
                                    <p>Revenus produits par des placements d'argent. Les modalités de ces placements
                                        sont variables : actions, obligations, etc.</p>

                                    <li>Revenus catégoriels</li>
                                    <p>Catégories de revenus déclarés par des foyers fiscaux en matière d’impôt sur
                                        le revenu : traitements et salaires, pensions et retraites, gains de cession
                                        de valeurs mobilières, droits sociaux et gains assimilés, revenus de
                                        capitaux mobiliers, revenus fonciers, bénéfices agricoles, bénéfices
                                        industriels et commerciaux, bénéfices non commerciaux.</p>
                                    <ul>
                                        <li>Revenus déclarés</li>
                                        <p>Revenus indiqués sur la déclaration de revenus avant toute déduction.</p>
                                        <li>Revenus fonciers</li>
                                        <p>Revenus provenant de la location des propriétés bâties (appartements,
                                            maisons...) et non bâties (terrains...), lorsqu'ils ne sont pas inclus
                                            dans les bénéfices d'une entreprise commerciale, industrielle ou
                                            artisanale, d'une exploitation agricole ou d'une profession non
                                            commerciale.</p>
                                        <li>Revenu moyen</li>
                                        <p>Revenu net imposable total divisé par le nombre d'articles.</p>
                                    </ul>
                                    <li>Rôle</li>
                                    <p>Titre exécutoire établi par l’administration fiscale en vertu duquel les
                                        comptables publics assurent le recouvrement de certains impôts directs. Le
                                        rôle est rendu exécutoire par la formule d’homologation (voir définition)
                                        apposée par le directeur général des Finances Publiques, par le Préfet ou
                                        les agents délégataires. Au plan matériel, le rôle est composé d’articles ;
                                        c’est une liste des contribuables imposés dans une même commune, à la même
                                        date et pour une même catégorie d’impôts (par exemple : rôle de taxe
                                        d’habitation, d’impôt sur le revenu, etc.).</p>
                                    <p>
                                        <ul>
                                            <li>Rôle général</li>
                                            <p>Regroupement des émissions faites pour l’ensemble des contribuables
                                                suivant un calendrier pré-établi.</p>
                                            <li>Rôle supplémentaire</li>
                                            <p>Imposition particulière d'un contribuable faisant suite, par exemple,
                                                à une rectification pour insuffisance de base déclarée.</p>
                                        </ul>

                                    </p>
                            </ol>
                            <li>
                                <h3> Saisie administrative à tiers détenteur </h3>
                            </li>
                            <p>La saisie administrative à tiers détenteur (SATD) est une procédure permettant aux
                                comptables publics d’obtenir le paiement des impositions dues par les contribuables
                                défaillants en saisissant les créances que ces derniers détiennent sur des tiers
                                (dépositaires, détenteurs ou débiteurs). (cf article L. 262 du LPF).</p>
                            <ol type="a">
                                <li>Sauvegarde</li>
                                <p>Procédure collective instituée par la loi n° 2005-845 du 26 juillet 2005 de
                                    sauvegarde des entreprises, entrée en vigueur le 1er janvier 2006. Elle est
                                    applicable au débiteur qui, sans être en cessation des paiements, justifie de
                                    difficultés qu’il n’est pas en mesure de surmonter. Elle est ouverte à
                                    l’initiative exclusive du débiteur en amont de la cessation des paiements et, en
                                    cela, constitue une procédure de prévention volontaire.</p>
                                <li>Seuils de mise en recouvrement</li>
                                <p>Il existe deux seuils de mise en recouvrement pour les impositions recouvrées par
                                    voie de rôle :</p>
                                <ul>
                                    <li class="aaa">Seuil de 61 €: la cotisation initiale d’impôt sur le revenu
                                        n’est pas mise en recouvrement lorsque son montant, avant imputation de tout
                                        crédit d’impôt, est inférieur à 61 € ; il en va de même en matière de
                                        prélèvements sociaux sur les revenus du patrimoine ;ss</li>
                                    <li class="aaa">Seuil de 12 € : si le montant de l’impôt sur le revenu est
                                        supérieur ou égal au seuil de recouvrement de 61 €, avant imputation des
                                        crédits d’impôt, mais devient inférieur à ce seuil après imputation, ce
                                        montant n’est pas mis en recouvrement s’il est inférieur à 12 €. Le seuil de
                                        mise en recouvrement de 12 € s’applique également à la cotisation foncière
                                        des entreprises (y compris les taxes annexes et l’imposition forfaitaire sur
                                        les entreprises de réseau (IFER), aux taxes foncières (TF), à la taxe
                                        d'habitation (TH), à la taxe d'habitation sur les logements vacants (THLV),
                                        ainsi qu'à la taxe sur les logements vacants (TLV).</li>

                                    <li class="aaa">Seuil de restitution</li>
                                    <p>Les dégrèvements ou restitutions de toutes impositions ou créances fiscales
                                        d’un montant inférieur à 8 € ne sont pas effectués. <br>Ce montant
                                        s’apprécie par cote, exercice ou affaire.</p>
                                </ul>

                            </ol>
                            <li>
                                <h3>Taxe agents généraux d’assurance</h3>
                            </li>
                            <p>Lorsque la plus-value afférente à la perception de l’indemnité compensatrice versée à
                                un agent général d’assurance lors de la cessation de son mandat est exonérée d’impôt
                                sur le revenu (exonération sous conditions), l’indemnité compensatrice est soumise à
                                une taxe spécifique : la taxe agent général d’assurance.</p>
                            <ol>
                                <li>Taxe additionnelle à la CVAE</li>
                                <p>Une taxe additionnelle à la CVAE est encaissée, en sus du montant de CVAE, au
                                    profit des chambres de commerce et d'industrie de région, en complément à la
                                    taxe additionnelle à la CFE (article 1600 du CGI). <br>
                                    Son taux est déterminé chaque année.
                                </p>
                                <li>Taxe additionnelle à la taxe sur le foncier non bâti</li>
                                <p>Cette taxe compense la suppression en 2011 des parts départementale et régionale
                                    de la taxe foncière sur les propriétés non bâties. Elle est instituée au profit
                                    des communes et des intercommunalités à fiscalité propre. Elle concerne les
                                    propriétés relevant des terres non agricoles.</p>
                                <li>Taxe d’enlèvement des ordures ménagères</li>
                                <p>La taxe d’enlèvement des ordures ménagères est une taxe facultative au profit des
                                    communes et des établissements publics de coopération intercommunale qui
                                    assurent au moins la collecte des déchets des ménages. Le montant de la
                                    cotisation ne dépend pas du service rendu. <br>
                                    Les communes et les intercommunalités ont la possibilité d’instituer une part
                                    incitative à la taxe sur les ordures ménagères. Elle s’ajoute à la part fixe
                                    déjà existante. Elle est calculée en fonction de la quantité de déchets par
                                    local produits l’année précédente, multipliée par un ou des tarifs votés par la
                                    collectivité.</p>
                                <li>Taxe foncière sur les propriétés bâties</li>
                                <p>Taxe établie annuellement sur les propriétés bâties (appartements, maisons,
                                    locaux commerciaux, établissements industriels...) sises en France. Sont
                                    imposables les propriétés bâties fixées au sol à perpétuelle demeure et
                                    présentant le caractère de véritables constructions.</p>
                                <li>Taxe foncière sur les propriétés non bâties</li>
                                <p>Taxe établie annuellement sur les propriétés non bâties en France. Ce sont
                                    essentiellement les terrains agricoles, les forêts, carrières, étangs, ...</p>

                                <li>Taxe pour frais de chambre d’agriculture</li>
                                <p>Cette taxe est établie dans la circonscription territoriale de chaque chambre.
                                    Elle est due à raison de toutes les parcelles imposables à la taxe foncière sur
                                    les propriétés non bâties et d’une partie de celles qui en sont exonérées.</p>
                                <li>Taxe sur les friches commerciales</li>
                                <p>Taxe établie annuellement sur les locaux commerciaux et biens divers qui ne sont
                                    plus affectés à une activité entrant dans le champ d’application de la
                                    cotisation foncière des entreprises depuis au moins deux ans au 1er janvier de
                                    l'année d'imposition, et qui sont restés inexploités au cours de la même
                                    période. Cette taxe est instituée depuis le 1er janvier 2008 dans les communes
                                    et certains établissements publics de coopération intercommunale ayant délibéré.
                                </p>
                                <li>Taxe pour la gestion des milieux aquatiques et la prévention des inondations
                                </li>
                                <p>Depuis 2018, cette taxe peut être instituée par les intercommunalités qui
                                    justifient de l’exercice de la compétence de gestion des milieux aquatiques et
                                    de prévention des inondations. <br>
                                    (Pour mémoire : jusqu'en 2017, cette taxe pouvait être instituée par les
                                    intercommunalités ou par les communes justifiant de cette compétence.).
                                </p>
                                <li>Taxe d’habitation</li>
                                <p>Taxe établie au nom des personnes qui ont la disposition ou la jouissance d’un
                                    local à usage d’habitation au 1er janvier de l’année d’imposition.</p>
                                <li>Taxe d’habitation sur les logements vacants</li>
                                <p>Taxe due par toute personne physique ou morale propriétaire (ou usufruitier ou
                                    preneur à bail ou emphytéote) d’au moins un local d’habitation non meublé et
                                    vacant depuis cinq années consécutives au 1er janvier de l’année d’imposition.
                                    Cette taxe est instituée sur délibération des communes et, sous conditions, des
                                    EPCI à fiscalité propre et n’est pas applicable sur le territoire des communes
                                    situées dans le périmètre de la taxe annuelle sur les logements vacants (TLV).
                                </p>
                                <li>Taxe sur les locaux à usage de bureaux</li>
                                <p>Taxe payée annuellement par les propriétaires de locaux à usage de bureaux et
                                    assimilés, de locaux commerciaux ou de locaux de stockage situés dans la région
                                    d’Ile-de-France. Cette taxe est instituée depuis le 1er janvier 1999.</p>

                                <li>Taxe annuelle sur les logements vacants</li>
                                <p>Taxe payée annuellement par toute personne physique ou morale propriétaire (ou
                                    usufruitier ou preneur à bail ou emphytéote) d’au moins un local d’habitation
                                    non meublé et vacant depuis deux années consécutives au 1er janvier de l’année
                                    d’imposition. Le produit de la taxe est versé à l’Agence nationale de l’habitat
                                    (ANAH). Cette taxe est instituée depuis le 1er janvier 1999 dans certaines
                                    communes dont la liste est fixée par décret et où il existe un déséquilibre
                                    marqué entre l’offre et la demande de logements au détriment des personnes à
                                    revenus modestes et des personnes défavorisées. <br>
                                    Cette taxe n’est pas due pour les logements détenus par les organismes d’HLM et
                                    les sociétés d’économie mixte (SEM).</p>
                                <li>Taxe professionnelle</li>
                                <p>Taxe qui était due par les personnes physiques ou morales exerçant à titre
                                    habituel une activité professionnelle non salariée. La base d’imposition de la
                                    taxe professionnelle était constituée de la valeur locative des immobilisations
                                    corporelles dont a disposé le redevable pour les besoins de sa profession et
                                    d’une partie des recettes pour les titulaires de BNC. Cette taxe a été supprimée
                                    en 2010.</p>
                                <li>Taxe sur les loyers élevés des logements de petite surface</li>
                                <p>Taxe due pour les logements de faible superficie situés dans certaines zones du
                                    territoire se caractérisant par un déséquilibre important entre l’offre et la
                                    demande de logement. La taxe est due pour les logements dont la surface
                                    habitable ne dépasse pas 14m2 donnés en location nue ou meublé (pour une durée
                                    de 9 mois minimum) lorsque le loyer mensuel, charges non comprises, excède un
                                    loyer mensuel de référence par m2 habitable fixé par décret.</p>
                                <li>Taxe sur les salaires</li>
                                <p>Taxe acquittée par les personnes ou organismes qui versent des traitements,
                                    salaires, indemnités et émoluments, lorsqu’ils ne sont pas assujettis à la TVA
                                    l’année du versement des rémunérations ou ne l’ont pas été sur au moins 90 % de
                                    leur chiffre d’affaires au titre de l’année civile précédant celle du paiement
                                    desdites rémunérations.
                                    La taxe sur les salaires n’est exigible que si l’employeur est domicilié ou
                                    établi en France, quel que soit le lieu du domicile du bénéficiaire ou le lieu
                                    de son activité.
                                </p>

                                <li>Taxes spéciales d’équipement</li>
                                <p>Taxes additionnelles à quatre taxes directes locales (taxe foncière sur les
                                    propriétés bâties, taxe foncière sur les propriétés non-bâties, taxe
                                    d’habitation et cotisation foncière des entreprises) perçues au profit de
                                    certains établissements publics locaux.</p>
                                <li>Taxe sur les surfaces commerciales</li>
                                <p>Taxe due par les commerces de détail, quelle que soit leur forme juridique et
                                    répondant aux conditions suivantes :</p>
                                <ul>
                                    <li>date d’ouverture initiale postérieure au 1er janvier 1960 ;</li>
                                    <li>réalisation d’un chiffre d’affaires hors taxes supérieur ou égal à 460 000 €
                                        (par
                                        établissement) ;
                                    </li>
                                </ul>
                                <p>surface de vente au détail des espaces clos et couverts supérieure à 400 m2
                                    ou, quelle que soit la surface de vente de l’établissement, si celui-ci est
                                    contrôlé directement ou indirectement et exploité sous une même enseigne
                                    commerciale appartenant à une tête de réseau dont la surface cumulée des
                                    établissements est supérieure à 4 000 m2.
                                </p>
                                <li>Taxe sur la valeur ajoutée collectée</li>
                                <p>La TVA collectée est le montant de la TVA qu’un redevable facture directement à
                                    ses clients sur les biens qu’ils consomment ou les services qu’ils utilisent.
                                </p>
                                <li>Taxe sur la valeur ajoutée déductible</li>
                                <p>La TVA déductible est le montant de la TVA qu’un redevable peut récupérer sur les
                                    biens consommés ou les services utilisés dans le cadre de son activité
                                    professionnelle.</p>
                                <li>Taxe sur la valeur ajoutée nette</li>
                                <p>Différence entre la TVA collectée et la TVA déductible. Les entreprises dont la
                                    TVA déductible excède la TVA collectée bénéficient d’une créance sur l’État,
                                    susceptible d’être remboursée.</p>
                                <li>Télé-règlement</li>
                                <p>S’agissant des impôts des professionnels: moyen de paiement qui permet le
                                    règlement à distance des paiements par des voies télématiques (Internet,
                                    terminaux mobiles, téléphone, ...). <br> Le contribuable adhère au
                                    télé-règlement et donne ensuite son ordre de paiement au coup par coup. Le
                                    télé-règlement des impôts professionnels autoliquidés (TVA, impôt sur les
                                    sociétés, taxe sur les salaires, cotisation sur la valeur ajoutée des
                                    entreprises, prélèvement sur les revenus de capitaux mobiliers) est effectué
                                    sous forme de virement SEPA interentreprises (B2B), en mode EDI (envoi de
                                    fichiers comprenant les informations de paiement) ou EFI (paiement en ligne sur
                                    internet).
                                    S’agissant des impôts des particuliers : voir 􏰀 Paiement en ligne 􏰁.
                                </p>

                                <li>Titre interbancaire de paiement</li>
                                <p>Formule datée et signée par le redevable qui autorise ponctuellement
                                    l’administration fiscale à prélever sur le compte indiqué le montant de l’impôt
                                    dû.</p>
                            </ol>
                            <li>
                                <h3> Valeur locative </h3>
                            </li>
                            <p>Il s’agit de la valeur locative cadastrale utilisée seule ou avec d’autres éléments
                                pour le calcul de la base de chacun des impôts directs locaux. Cette valeur locative
                                représente le loyer annuel théorique que pourrait produire un immeuble bâti ou non
                                bâti en le louant à des conditions normales.</p>
                            <ul>
                                <li>Valeur vénale</li>
                                <p>Somme d'argent estimée contre laquelle un immeuble serait échangé, à la date de
                                    l'évaluation, entre un acheteur consentant et un vendeur consentant dans une
                                    transaction équilibrée, après une commercialisation adéquate, et où les parties
                                    ont l'une et l'autre agi en toute connaissance, prudemment et sans pression.</p>
                            </ul>
                        </ol>

                    </div>

                </div>

            </div>

        </div>

        <!-- ------------------DOCUMENTATION---------------- -->

        <div class="Documentation" id="Documentation">
            <h1 class="heading "> <span>DOCUMENTATION</span></h1>
            <div class="img-desc">
                <div class="right">
                    <embed src="https://drive.google.com/file/d/1PovKsMwK26QBCGIctgu1Dq8bZeNQD95n/view?usp=drivesdk"
                        width="100px" height="80px"> <a href="images/071 Loi des Finances 2023.pdf">telechargez le
                        document 071 Loi des Finances 2023</a></embed> <br>
                    <embed src="https://drive.google.com/file/d/1Q4_CarDw6xyATpXTmuX7mssvHDvp7_08/view?usp=drivesdk"
                        width="100px" height="80px"> <a
                        href="images/statistiques-recettes-publiques-afrique-congo-rep-dem.pdf">telechargez le
                        document statistiques-recettes-publiques-afrique-congo-rep-dem </a></embed>
                    <br>

                </div>

            </div>

        </div>

        <!-- ---------------------DOCUMENTHEQUE ET BIBLIOGRAPHIE----------------------- -->

        <div class="Documentheque" id="Documentheque">
            <h1 class="heading "> <span>DOCUMENTHEQUE ET BIBLIOGRAPHIE</span></h1>
            <div class="img-desc">
                <div class="right">
                    <table>
                        <caption>DOCUMENTHEQUE ET BIBLIOGRAPHIE</caption>
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        Étude sur les écarts fiscaux en République Démocratique du Congo <br>
                                        Groupe de la banque mondiale région Afrique <br>
                                        Avril 2017
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Rapport annuel d'activités de la Direction Générale des Impôts <br>
                                        Rapport annuel 2021. . <br>
                                        <a href="https://www.dgi.gouv.cd"> https://www.dgi.gouv.cd
                                            rapports-d-activites </a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Statistiques-recettes-publiques-afrique-congo-rep-dem.pdf <br>
                                        <a href="https://www.oecd.org"> https://www.oecd.org › fiscalite ›
                                            politiques-fiscales </a>

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><dfn>Réforme fiscale:</dfn> tendances récentes et implication pour la RDC
                                        <br>
                                        forum national sur la réforme fiscal de la RDC <br>
                                        kinshasa 11 – 14 septembre 2017 <br>
                                        Nicholas Staines <br>
                                        Patrick Petit <br>
                                        Fond monétaire international / Département des finances publiques
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Revue de la gestion des dépenses publiques et de la responsabilité
                                        financière (PEMFAR) <br>
                                        Mettre en œuvre des réformes de la gestion des finances publiques pour
                                        stimuler la croissance et assurer le partage de la prospérité. 2015 <br>
                                        Département de la gestion macro économique et budgétaire <br>
                                        Groupe de la banque mondiale
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Analyse du budget 2021 de la République Démocratique du Congo
                                        Note technique | Programme de développement des Nations Unie
                                        <a href="	https://www.undp.org"> https://www.undp.org › drcongo ›
                                            publications › note-t...</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>Rapport du FMI No. 22/211</strong> <br>
                                        République Démocratique du Congo <br>
                                        Question générale <br>
                                        Ce document sur la République démocratique du Congo a été préparé par
                                        le personnel du Fond monétaire international comme document de référence
                                        pour la consultation périodique avec les pays membres. Il est basé sur les
                                        informations disponibles au moment de sa finalisation le 13 juin 2022.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Renforcer l’efficacité du soutien extérieur au renforcement des capacités
                                        fiscales dans les pays en développement <br>
                                        Rapport destiné à être présenté aux ministres des finances du G20 <br>
                                        OCDE Juillet 2016

                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

        <div class="footer" id="footer">
            <footer>
                <div class="footer-content">
                     <div class="footer-bottom">
                    <p> copyright &copy;2023 codeOpacity. designed by developper <a
                            href="mailto:justinsafari2206@gmail.com">GGLJ</a></p>
                </div>
                    {{-- <h3> Obsevoitoires fiscales</h3>
                    <ul class="socials">
                        <li><a href="#"><i class="bx bxl-facebook"></i> </a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i> </a></li>
                        <li><a href="#"><i class="bx bxl-google-plus"></i> </a></li>
                        <li><a href="#"><i class="bx bxl-youtube"></i> </a></li>
                        <li><a href="#"><i class="bx bxl-linkedin-square"></i> </a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i> </a></li>
                    </ul> --}}
                </div>
               
            </footer>
        </div>

    </div>

    <!-- ------- right-sidebar ------- -->
    <div id="right-sidebar" class="right-sidebar">
        <div class="lg">
            <img src="images/logo.jpeg">
        </div>
        @isset(auth()->user()->id)
        @livewire('content')
        @else
        @livewire('comment')
        @endisset
    </div>
</div>
@endsection