const CACHE_NAME = 'IRSOH',
urlsToCache = [
    './',
    'index.php',
    'css/style.css',
    'css/estilo.css',
    'css/bootstrap.min.css',
    'css/home.css',
    'lib/',
    'login/',
    'loginbrandon/',
    'menus/lib/',
    
    'js/bootstrap.bundle.min.js',
    'js/jquery-3.6.0.js',
    'js/main.js',
    'js/script.js',
    'mail/',

    'regist_serviceWorker.js',
    'pwa/images/icons/icon-512x512.png',
    'pwa/images/icons/icon-72x72.png'
]

self.addEventListener('install', e => {
    e.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(urlsToCache)
                    .then(() => self.skypWaiting())
            })

            .catch(err => console.log('Fallo Registro CACHE', err))
    )
})

self.addEventListener('activate', e => {
    const cacheWhitelist = [CACHE_NAME]

    e.waitUntil(
        caches.keys()
            .then(cacheNames => {
                return Promise.all(
                    cacheNames.map(cacheName => {

                        if(cacheWhitelist.indexOf(cacheName) === -1){
                            return caches.delete(cacheName)
                        }
                    })
                )
            })

            .then(() => self.clients.claim())
    )
})

self.addEventListener('fetch', e => {
    e.responWith(
        caches.match(e.request)
            .then(res => {
                if(res) {
                    return res
        }
                return fetch(e.request)
            })
    )
})
