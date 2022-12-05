 <!-- Sidebar -->
 <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
                <i class="fa fa-remove"></i>
            </a>
            
            <h4 class="w3-bar-item"><b>Menu</b></h4>

   
               
                <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('accueil') }}">
                    <img class="img_menu" src="{{ asset('/images/accueil.png') }}" width="50px" alt="Aller à l'accueil"/>
                    <span>Accueil  </span>                  
                 </a> 

                 <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('ouvrages') }}">
                    <img class="img_menu" src="{{ asset('/images/livres.png') }}" width="50px" alt="Cliquez ici pour voir les ouvrages"/>
                    <span>Liste des ouvrages  </span>                  
                 </a> 

                 <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('inscrits') }}">
                    <img class="img_menu" src="{{ asset('/images/emprunteurs.png') }}" width="50px" alt="Cliquez ici pour voir les inscrits"/>
                    <span>Voir les inscrits  </span>                  
                 </a> 

                 <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('prets') }}">
                    <img class="img_menu" src="{{ asset('/images/prets.png') }}" width="50px" alt="Cliquez ici pour voir les prêts"/>
                    <span>Gestions des prêts  </span>                  
                 </a> 

            {{--     <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('historique') }}">
                    <img class="img_menu" src="{{ asset('/images/historique.png') }}" width="50px" alt="Cliquez ici pour voir l'historique"/>
                    <span>Hsitoire de...  </span>                  
                 </a> 

                 <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('evenements') }}">
                    <img class="img_menu" src="{{ asset('/images/evenements.png') }}" width="50px" alt="Cliquez ici pour voir les événements"/>
                    <span>Evénements  </span>                  
                 </a> 

                 <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('commandes') }}">
                    <img class="img_menu" src="{{ asset('/images/commandes.png') }}" width="50px" alt="Cliquez ici pour voir les commandes"/>
                    <span>Commandes  </span>                  
                 </a> 
                 --}} 
          
        </nav>
