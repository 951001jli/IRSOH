if('serviceWorker' in navigator) {
    navigator.serviceWorker.register('Service_Worker.js')
        .then(reg => console.log('Registro de SW concluido', reg))
        .catch(err => console.warn('Error de registro de SW', err))
}