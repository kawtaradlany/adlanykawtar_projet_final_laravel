<section class="section1"
    style="background-image: url('img/image.png'); background-size: cover; background-position: center; height: 100vh;">
    <div class="container mx-auto flex flex-col items-center justify-center h-full text-white">
        <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 hover:text-[#48230e]">On se retrouve
            pour bien manger !
        </h1>
        <p class="text-lg md:text-xl mb-8 text-center px-4 hover:text-[#48230e]">Faites des réservations, explorez nos
            menus et profitez d'une
            excellente expérience culinaire !</p>
        {{-- <a href="#menu" class="bg-white text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Voir le Menu</a> --}}
    </div>
</section>












<!-- Section Contactez-nous -->

<div id="contact" class=" flex justify-center items-center bg-white">
    <!-- COMPONENT CODE -->
    <div class="container mx-auto my-4 px-4 lg:px-20">

        <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
            <div class="flex">
                <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="First Name*" />
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Last Name*" />
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="email" placeholder="Email*" />
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="number" placeholder="Phone*" />
            </div>
            <div class="my-4">
                <textarea placeholder="Message*"
                    class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="my-2 w-1/2 lg:w-1/4">
                <button
                    class="uppercase text-sm font-bold tracking-wide bg-[#ca8920]  text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                    Send Message
                </button>
            </div>
        </div>

        <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-[#ca8920]  rounded-2xl">
            <div class="flex flex-col text-white">
                <h1 class="font-bold uppercase text-4xl my-4">Opning hour</h1>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                    tincidunt arcu diam,
                    eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
                </p>

                <div class="flex my-4 w-2/3 lg:w-1/2">
                    <div class="flex flex-col">
                        {{-- <i class="fas fa-map-marker-alt pt-2 pr-2" > --}}
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-2xl">Adresse</h2>
                        <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
                    </div>
                </div>

                <div class="flex my-4 w-2/3 lg:w-1/2">
                    <div class="flex flex-col">
                        {{-- <i class="fas fa-phone-alt pt-2 pr-2" > --}}
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-2xl">Call Us</h2>
                        <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
                        <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- COMPONENT CODE -->
</div>







<!-- Section À Propos de Nous -->



<section id="aboutus" class="py-8 md:py-16 bg-gray-100">
    <div class="container mx-auto">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4 md:mb-8">About US</h2>
        <p class="text-base md:text-lg text-center mb-4 md:mb-8">Découvrez notre restaurant et notre engagement envers
            une cuisine et un service excellents.</p>
        <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4 md:mb-8">Our story</h3>

        <p class="text-base md:text-lg text-center mb-4 md:mb-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam iste enim nulla tempora laboriosam reprehenderit. Voluptatibus unde molestiae cum dicta.</p>
    
        <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4 md:mb-8">We are here</h3>


        <div class="flex justify-center mb-4 md:mb-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106357.32777873718!2d-7.73597075418062!3d33.588007469609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cdb2f812837f%3A0xbbcfc74fbc11b2d9!2sLionsGeek!5e0!3m2!1sen!2sma!4v1714122932608!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
