<div class="card-deck">

    @component('components.cards.card',
        [
            'imgcard' => 'https://images.pexels.com/photos/8376593/pexels-photo-8376593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'buttom'  =>''
        ])
    @endcomponent
        @component('components.cards.card',
            [
                'imgcard' => 'https://images.pexels.com/photos/10566940/pexels-photo-10566940.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'buttom'  =>''
            ])
        @endcomponent
        @component('components.cards.card',
            [
                'imgcard' => 'https://images.pexels.com/photos/1035108/pexels-photo-1035108.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'buttom'  =>''
            ])
        @endcomponent

</div>
