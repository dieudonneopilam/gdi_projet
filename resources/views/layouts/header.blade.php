<nav>
    <div class="nav-left">
        <div class="menu-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
        </div>
        <i class='bx bxs-bullseye'></i>
        <p class="logo-name">observatoires des Fiscalités</p>
    </div>
    <div class="div-right">
        <div class="nav-right">
            <div class="nav-user-icon">
                <img src="images/president.jpg" class="logo">
            </div>
    
        </div>
        @isset(auth()->user()->id)
        <div class="nav-right-login">
            <a href="{{ route('logout') }}">
                <img src="{{ Storage::url(auth()->user()->file) }}" class="logo">
            </a>
        </div>
        @else
        <div class="nav-right-login">
            <a href="{{ route('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
            </a>
        </div>
        @endisset
    </div>

    <!------------ PROFIL PRESIDENT----------------- -->

    <div class="setting-menu" id="subMenu">
        <div class="nav-user-icon1">
            <img src="images/president.jpg" class="logo-img">
            <h2> LUMINI Hermen </h2>
        </div>
        <p>
            Doctorant, avocat près la Cour d’appel de Paris, enseignant chercheur à l’université d’Auvergne
            (France),

            Cadre dirigeant dans plusieurs entreprises dans le domaine du social, l’actuel président de
            l’observatoire dispose d’une expérience riche et variée, en plus de l’approche théorique. <br>

            Après une formation de 3ème cycle, couronnée par un diplôme d’études approfondies <span>(DEA)</span> en
            finances publiques et fiscalité et une année de formation pratique à l’école d’avocat de Versailles
            (France), il a exercé ces fonctions dans tous les domaines du droit, notamment en tant qu’avocat,
            consultant et salarié.<br>

            Il a eu à plusieurs reprises l’opportunité de côtoyer et de travailler avec des sommités universitaires,
            en matière de finances publiques et fiscalité, notamment le professeur <span><strong> Pierre
                    BELTRAME</strong></span> ainsi que le professeur <span><strong> Marie-Christine
                    ESCLASSAN</strong></span>, entre autres , tous deux auteurs de nombreux ouvrages , sur la
            technique et la science fiscale. <br>

            Il est féru des grands maîtres de la finance et de l’économie, tels que Adam SMITH et plus près de nous
            , il reste un adepte fervent des théories du professeur VitoTANZI. <br>

            <span><strong> Son leitmotiv </strong></span>: toute technique ou pratique fiscale doit être fondée sur
            la science, respecter la démocratie ainsi que les nécessités sociologiques et les besoins vitaux des
            contribuables. D’après lui, sans cet équilibre , un état ne peut prétendre à l’optimisation de la
            recette fiscale , sans s’exposer à terme, à des revers susceptibles de saper complètement l’édifice d’un
            pays. L’histoire regorge hélas d’exemples démontrant l’impact de la fiscalité sur une société. <br>

            Son ambition pour l’observatoire de la fiscalité congolaise, est de contribuer modestement à doter la
            RDC, pays qui l’a vu naître , des outils scientifiques et modernes, destinés à éclairer tous ceux qui
            veulent œuvrer à l’émergence d’une administration fiscale, digne des plus grands états démocratiques.
            <br>

            Promouvoir un contexte qui permet de créer des liens et des échanges entre tous ceux qui œuvrent à la
            rationalisation et l’optimisation des recettes fiscale au Congo , tout en étant attentif aux exigences
            du développement économique et aux besoins les plus élémentaires du peuple congolais. Dans un monde
            interconnecté, la fiscalité congolaise doit se penser et se concevoir en lien également avec les
            priorités des acteurs économiques des pays tiers, qui sont indispensables au développement de la
            République Démocratique du Congo.

        </p>

    </div>

</nav>


<!-- -------SUBDIVISION DE PAGE EN TROIS PARTIE------- -->

<!-- <div class="container">
     <div class="left-sidebar"></div>
     <div class="main-content"></div>
     <div class="right-sidebar"></div>
 </div> -->