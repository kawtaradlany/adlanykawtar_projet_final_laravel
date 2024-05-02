@extends('layouts.index')
@section('content')
    @include('home.components.navbar')
<style>

    .h{
            margin-top: 20vh
        }
</style>
{{-- <section class="section1" style="background-image: url('img/image.png'); background-size: cover; background-position: center; height: 50vh;">
    <div class="container mx-auto flex flex-col items-center justify-center h-full text-white">
        <h1 class="text-3xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 hover:text-[#48230e]">Ce que les gens disent
        </h1>
        <p class="text-lg md:text-xl mb-8 text-center px-4 hover:text-[#48230e]">Faites des réservations, explorez nos
            menus et profitez d'une
            excellente expérience culinaire !</p>
    </div>
</section> --}}
<section class="section1 h-96 relative font-playfair"
        style="background-image: url('img/image.png'); background-size: cover; background-position: center;">
        <div class="absolute inset-0">
            <div class="bg-black bg-opacity-50 absolute inset-0"></div>
            <div class="container mx-auto flex flex-col items-center justify-center h-full text-white relative">
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 ">Ce que les gens disent
                </h1>
                <div class=" text-lg font-bold"><a href="/" rel="v:url" property="v:title">Home</a> » <span class="current">Review</span></div>
            </div>
        </div>
    </section>

{{-- <h1 class="text-3xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 hover:text-[#48230e]">Ce que les gens disent.
</h1> --}}
<div class="h grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800 font-playfair">
    
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Expérience Culinaire Exceptionnelle
            </h3>
            <p class="my-4">""Les plats sont un véritable enchantement pour les papilles, préparés avec minutie et débordant de saveurs. L'ambiance chaleureuse ajoute à cette expérience un caractère inoubliable."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Bonnie Green</div>
                {{-- <div class="text-sm text-gray-500 dark:text-gray-400 ">Developer at Open AI</div> --}}
            </div>
        </figcaption>    
    </figure>
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Un Délice pour les Sens
            </h3>
            <p class="my-4">"Chaque plat est un chef-d'œuvre gastronomique, savamment élaboré pour ravir les amateurs de bonne cuisine. L'atmosphère conviviale complète parfaitement cette expérience gustative."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Roberta Casas</div>
                {{-- <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div> --}}
            </div>
        </figcaption>    
    </figure>
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Saveurs Exquises à Déguster
            </h3>
            <p class="my-4">"La qualité des mets est remarquable, avec une harmonie parfaite de saveurs. L'ambiance agréable et accueillante fait de cet endroit une destination de choix pour les fins gourmets."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Jese Leos</div>
                {{-- <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div> --}}
            </div>
        </figcaption>    
    </figure>
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Une Explosion de Saveurs
            </h3>
            <p class="my-4">"Chaque bouchée est une découverte de délices, préparés avec passion et créativité. L'ambiance unique de ce lieu ajoute une dimension supplémentaire à cette expérience culinaire mémorable."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Joseph McFall</div>
                {{-- <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div> --}}
            </div>
        </figcaption>    
    </figure>
</div>
@include('home.components.footer')

@endsection
