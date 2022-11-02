<div class="container">
    <div class="card-deck">
    @component('components.cards.cardgallery',
            [
                'imagecard' => 'https://images.pexels.com/photos/8634582/pexels-photo-8634582.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
            ])
    @endcomponent
        @component('components.cards.cardgallery',
          [
              'imagecard' => 'https://images.pexels.com/photos/4392662/pexels-photo-4392662.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
          ])
        @endcomponent
        @component('components.cards.cardgallery',
              [
                  'imagecard' => 'https://images.pexels.com/photos/6730472/pexels-photo-6730472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
              ])
        @endcomponent
        @component('components.cards.cardgallery',
              [
                  'imagecard' => 'https://images.pexels.com/photos/6784575/pexels-photo-6784575.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
              ])
        @endcomponent
    </div>

</div>
