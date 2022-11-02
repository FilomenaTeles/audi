<div class="container">
<div class="card-deck align-items-center">
    @component('components.cards.cardgallery',
            [
                'imagecard' => 'https://images.pexels.com/photos/11960307/pexels-photo-11960307.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
            ])
    @endcomponent
        @component('components.cards.cardgallery',
          [
              'imagecard' => 'https://images.pexels.com/photos/10313689/pexels-photo-10313689.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
          ])
        @endcomponent
        @component('components.cards.cardgallery',
              [
                  'imagecard' => 'https://images.pexels.com/photos/1397751/pexels-photo-1397751.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
              ])
        @endcomponent
        @component('components.cards.cardgallery',
              [
                  'imagecard' => 'https://images.pexels.com/photos/5063634/pexels-photo-5063634.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
              ])
        @endcomponent
</div>
</div>
