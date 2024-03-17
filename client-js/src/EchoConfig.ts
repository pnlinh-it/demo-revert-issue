import Echo from 'laravel-echo';

import Pusher from 'pusher-js';

// @ts-ignore
window.Pusher = Pusher
export const EchoInstance = new Echo({
    broadcaster: 'reverb',
    key: "websocket-app-key",
    wsHost: "localhost",
    wsPort: 9000,
    wssPort: 443,
    forceTLS: false,
    enabledTransports: ['ws'],
    // authEndpoint: '/broadcasting/auth',
    authEndpoint: 'http://localhost:8000/api/broadcasting/auth?user_id=1'
});