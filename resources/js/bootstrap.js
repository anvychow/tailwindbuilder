import 'alpinejs';

var drake = dragula(
  [document.querySelector('#draggable'), document.querySelector('#droppable')],
  {
    copy: true
  }
);

drake.on('drop', function(el){
  console.log(el.dataset.component);
  window.livewire.emit('postAdded', el.dataset.component)
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
