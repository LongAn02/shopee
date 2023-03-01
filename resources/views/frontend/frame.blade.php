<!doctype html>
<html lang="en">
    <head>
        @include('head.frontend.head')
    </head>
    <body>
    <header>
        @include('frontend.common.header')
    </header>

    @php
        $infoCard = [
            'name' => 'XXX',
            'description' => '456',
            'price' => '50K'
        ]
    @endphp
    <x-card
        :name="$infoCard['name']"
        :description="$infoCard['description']"
        :price="$infoCard['price']"
    />
    </body>
    @include('scripts.frontend.scripts')
</html>


