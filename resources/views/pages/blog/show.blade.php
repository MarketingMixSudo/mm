<x-layouts.app title="title" description="desc">

    <section class="pt-32 pb-12 max-w-screen-lg mx-auto">

        <div class="flex flex-col justify-center items-center text-center gap-6">

            <x-breadcrumbs.nav>
                <x-breadcrumbs.item title="blog" />
                <x-breadcrumbs.item title="tytuł" />
            </x-breadcrumbs.nav>

            <h2 class="text-5xl font-bold leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consectetur, voluptatem.</h2>

            <span>21 marzec 2025</span>

            <img src="{{asset('dummy/blog.jpg')}}" alt="" class="w-full rounded-2xl max-h-[500px] object-cover">


        </div>

    </section>

    <article class="prose dark:prose-invert max-w-screen-lg mx-auto">
        <p>Proin ullamcorper pretium orci. Donec nec scelerisque leo. Nam massa dolor, imperdiet nec consequat a, congue
            id sem. Maecenas malesuada faucibus finibus. Donec vitae libero porttitor, laoreet sapien a, ultrices leo.
            Duis dictum vestibulum ante vitae ullamcorper. Phasellus ullamcorper, odio vitae eleifend ultricies, lectus
            orci congue magna, in egestas nulla libero non nisl. Etiam efficitur in arcu ut lacinia.

           </p>
<p>
     Donec scelerisque enim non dictum aliquet. Sed ec nunc. Suspendisse volutpat elit nec nisi congue tristique
            eu at velit. Curabitur pharetra ex non ullamcorper condimentum. Morbi sit amet dui convallis, mattis augue
            id, ullamcorper massa. Fusce vulputate sodales hendrerit.

         
</p>


<p>   Duis dictum vestibulum ante vitae ullamcorper. Phasellus ullamcorper, odio vitae eleifend ultricies, lectus
            orci congue magna, in egestas nulla libero non nisl. Etiam efficitur in arcu ut lacinia.</p>

    </article>


   @include('pages.home.partials.blog')

</x-layouts.app>