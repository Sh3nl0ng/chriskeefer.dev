@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Icons" {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h2>Icons</h1>
    <div class="flex flex-wrap">
        <lever class="w-32 p-4"></lever>
        <knob-lever class="w-32 p-4"></knob-lever>
        <floor-lever class="w-32 p-4"></floor-lever>
    </div>
    

    <h2>Scenes</h2>


    <showcase class="mb-8">
        <h3 class="text-sm mb-2 text-gray-500 font-black">The robots are our friend.</h3>
        <p class="mt-0 text-lg">Harness the power of modern technology to automate away the boring part of your job.</p>
        <div class="text-left">            
            <button class="w-full text-2xl text-gray-400 font-bold flex bg-gray-700 rounded-lg shadow-xl text-left items-center pr-4"><lever class="w-24 h-24"></lever> Start saving time with automation at work</button>
        </div>
        <template v-slot:component>
            <automation class="techno"></automation>
        </template>
    </showcase>

    <showcase>
        <h3 class="text-sm mb-2 text-gray-500 font-black">Data is the new oil.</h3>
        <p class="mt-0 text-lg">I can help you pipe your crude data from source to refined analytic dashboards.</p>
        <div class="text-left">            
            <button class="w-full text-2xl bg-gray-500 text-gray-200 font-bold flex rounded-lg text-left items-center pr-4"><knob-lever class="self-top w-16"></knob-lever> Cash in on your data</button>
        </div>
        <template v-slot:component>
            <pipeline class="gears"></pipeline>
        </template>
    </showcase>
@endsection
