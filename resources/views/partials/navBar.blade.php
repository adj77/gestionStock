<div class="flex flex-row justify-between items-center">
    <div class="font-bold text-lg">
        <h1>Stockpro</h1>
    </div>
    <ul class="flex flex-row items-center mb-3 md:mb-0">
        <li class="md:mr-5 py-2 md:py-0"><a href="#" class="hover:text-gray-480">Mon compte</a></li>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="md:mr-5 py-2 md:py-0" type="submit">Deconnexion</button>
            <li><a href="" class="hover:text-gray-480"></a></li>
        </form>
    </ul>
</div>
