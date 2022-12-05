<!DOCTYPE html>
<html lang="fr-FR">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('layout.entete')
</head>


<style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
        .w3-sidebar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
        }
    </style>
    
    <body>

    @include('layout.menu')
	@include('layout.navigation')

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
    <div class="w3-row w3-padding-64">
    <div id="content" class="w3-rest w3-container">

					@yield('content')
					</div>
</div>
   
   
@include('layout.pied')

</body>
</html>
