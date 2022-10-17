<div class="bg-indigo-500 text-gray-100">
		<div class="flex justify-between px-20 py-7">
				<div class="">
						<span class="font-black uppercase">VideoStore</span>
				</div>
				<div class="space-x-4">
						@guest
								<a href="{{ route('login') }}">Connexion</a>
								<a href="{{ route('register') }}">Inscription</a>
						@endguest
						@auth
								<a href="{{ route('dashboard') }}">Dashboard</a>
								<a href="{{ route('logout') }}">Déconnexion</a>
						@endauth
				</div>
		</div>
</div>
