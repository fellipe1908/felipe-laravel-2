<?php
/** @var $posts Illuminate\Pagination\LengthAwarePaginator  */
?>

 <x-app-layout :meta-title="'UFC - PRPPG - BLOG' . $category->title" meta-description="Um pouco da UFC, para você">

 <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            @foreach($posts as $post)
                <x-post-item :post="$post"> </x-post-item>
            @endforeach



            {{$posts->onEachSide(1)->links()}}
        </section>
        <x-sidebar/>
</x-app-layout>
