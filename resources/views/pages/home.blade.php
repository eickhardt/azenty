@extends('app')

@section('title', 'Velkommen')

@section('content')

	<div id="home_carousel_wrapper">
	    <div id="home_carousel" data-carousel-3d>
	        <img selected onclick="document.location = '{{ route('omnichannel') }}'" width="769" height="330" src="img/carousel/azentykeyboard.jpg" />
	        <img onclick="document.location = '{{ route('webshops') }}'" width="769" height="330" src="img/carousel/webshop.jpg" />
	        <img onclick="document.location = '{{ route('google-infrastructure') }}'" width="769" height="330" src="img/carousel/go.jpg" />
	        <img onclick="document.location = '{{ route('hardware') }}'" width="769" height="330" src="img/carousel/hardware.jpg" />
	        <img selected onclick="document.location = '{{ route('omnichannel') }}'" width="769" height="330" src="img/carousel/azentykeyboard.jpg" />
	        <img onclick="document.location = '{{ route('webshops') }}'" width="769" height="330" src="img/carousel/webshop.jpg" />
	        <img onclick="document.location = '{{ route('google-infrastructure') }}'" width="769" height="330" src="img/carousel/go.jpg" />
	        <img onclick="document.location = '{{ route('hardware') }}'" width="769" height="330" src="img/carousel/hardware.jpg" />
	    </div>
	</div>

	<div class="page_container">
		<div id="home_page_content" class="container">

			<div class="row">
				<div class="three_box col-sm-4 col-sm-12">
					<div class="box_wrapper">
						<a href="{{ route('webshops') }}"><img src="/img/menu1_1.png" alt="Prestashop"></a>
					</div>
					<p>
					Vi tilbyder blandt andet specialtilpassede webshops baseret på det meget populære og open source system Prestashop. Prestashop har alt hvad man kunne ønske sig af funktionalitet til online handel, inklusive et hav af moduler der kan dække selv de mest krævende behov. Vi skræddersyr en løsning til dig! 
					{{-- Nulla nec sem sed eros commodo euismod. Phasellus massa lorem, ornare a velit non, pharetra porta metus. Duis ac mi malesuada, iaculis lectus id, cursus odio. Phasellus eu metus sit amet nulla tristique aliquet eget nec lorem. Maecenas ultricies finibus lectus, nec blandit orci porttitor non. Suspendisse lectus arcu, luctus nec tempor scelerisque, tempor a lacus. Donec in lobortis turpis. --}}</p>
				</div>
					
				<div class="three_box col-sm-4 col-sm-12">
					<div class="box_wrapper">
						<a href="{{ route('webshops') }}"><img src="/img/menu1_2.png" alt="Shop"></a>
					</div>
					<p>I dag styrer teknologisk kyndige virksomheder kunder til deres hjemmeside ved hjælp af søgemaskineoptimering. Men hvordan får du så dine online besøgende til at købe? Selvfølgelig kan du betale en masse for statistik, der giver dig indsigt i de potentielle kundernes indkøbsadfærd. Ikke her - hos Azenty får du Prestashop's berømte statistik direkte i "back-office" af din shop, hvor du kan følge med i dine kunders adfærd!
					{{-- Nulla nec sem sed eros commodo euismod. Phasellus massa lorem, ornare a velit non, pharetra porta metus. Duis ac mi malesuada, iaculis lectus id, cursus odio. Phasellus eu metus sit amet nulla tristique aliquet eget nec lorem. Maecenas ultricies finibus lectus, nec blandit orci porttitor non. Suspendisse lectus arcu, luctus nec tempor scelerisque, tempor a lacus. Donec in lobortis turpis. --}}</p>
				</div>

				<div class="three_box col-sm-4 col-sm-12">
					<div class="box_wrapper">
						<a href="{{ route('webshopb2b') }}"><img src="/img/menu1_3.png" alt="B2B"></a>
					</div>
					<p>Hos Azenty har vi også stor erfaring med Business to Business. Vi tilpasser vores løsninger så de dækker bredt - dette gælder selvfølgelig også det anderledes Business to Business marked. Kontakt os og lær mere om hvad vi kan tilbyde!
					{{-- Nulla nec sem sed eros commodo euismod. Phasellus massa lorem, ornare a velit non, pharetra porta metus. Duis ac mi malesuada, iaculis lectus id, cursus odio. Phasellus eu metus sit amet nulla tristique aliquet eget nec lorem. Maecenas ultricies finibus lectus, nec blandit orci porttitor non. Suspendisse lectus arcu, luctus nec tempor scelerisque, tempor a lacus. Donec in lobortis turpis. --}}</p>
				</div>
			</div>

			<div class="row">
				<div class="one_box col-md-12">
					<a href="{{ route('omnichannel') }}"><img src="/img/menu2_1.png" alt=""></a>
					<p id="frontpage_bottom_paragraph">
						Set fra kundens synsvinkel er det ikke bare interessant, hvad dit produkt kan gøre, men også hvorvidt du adskiller dig fra eksisterende løsninger på markedet. Din position handler naturligvis om selve produktets egenskaber, men det handler også om, hvordan du definerer det marked, du går ind i overfor kunden. Hvilken position ønsker du at indtage online? Hos Azenty hjælper vi dig på vej.
					</p>
				</div>
			</div>

		</div>
	</div>
@endsection

@section('scripts')
	<script src="/bower_components/javascript-detect-element-resize/jquery.resize.js"></script>
	<script src="/bower_components/waitForImages/dist/jquery.waitforimages.js"></script>
	<script src="/bower_components/modernizr/modernizr.js"></script>
	<script src="/bower_components/carousel-3d/dist/jquery.carousel-3d.js" ></script>

	<script>
		$(function() {
			setTimeout(function() {
		    	$('#home_carousel').fadeIn();
			}, 500);
		});
	</script>
@endsection