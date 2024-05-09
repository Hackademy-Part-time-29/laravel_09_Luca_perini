<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::Class, 'view'])->name('welcome');
Route::get('/articles', [ArticleController::Class, 'view'])->name('articles');
Route::get('/article/id={id}',[ArticleController::class,'show'])->name('article');
Route::get('/contact',[ContactController::class,'view'])->name('contact');
Route::get('/thankYou',[ContactController::class,'thankYou'])->name('thankYou');
Route::post('/save-contact',[ContactController::class,'save'])->name('save-contact');
Route::get('/seeder', function(){

    $pageArticles = [
        [
            'id' => 0,
            'title' => 'PlayStation 5',
            'description' => 'La nuova console di gioco di Sony, con grafica avanzata e velocità di caricamento ultraveloci.'
        ],
        [
            'id' => 1,
            'title' => 'Xbox Series X',
            'description' => 'La potente console di gioco di Microsoft, con prestazioni di gioco eccezionali e compatibilità retroattiva.'
        ],
        [
            'id' => 2,
            'title' => 'Nintendo Switch',
            'description' => 'La versatile console ibrida di Nintendo, che consente di giocare sia in modalità portatile che su un televisore.'
        ],
        [
            'id' => 3,
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'description' => 'Un avventura epica nel vasto mondo aperto di Hyrule, piena di misteri da scoprire e nemici da sconfiggere.'
        ],
        [
            'id' => 4,
            'title' => 'FIFA 22',
            'description' => 'Il popolare simulatore di calcio che offre una grafica realistica, modalità di gioco coinvolgenti e licenze ufficiali.'
        ],
        [
            'id' => 5,
            'title' => 'Call of Duty: Warzone',
            'description' => 'Un intenso sparatutto online gratuito che offre battaglie epiche con una vasta gamma di armi e mappe.'
        ],
        [
            'id' => 6,
            'title' => 'Super Mario Odyssey',
            'description' => 'Un avventura platform piena di colori con Mario e Cappy, esplora mondi incredibili e risolvi enigmi impegnativi.'
        ],
        [
            'id' => 7,
            'title' => 'Assassin\'s Creed Valhalla',
            'description' => 'Esplora l epica saga degli assassini in un avventura vichinga ricca di azione, mitologia e esplorazione.'
        ],
        [
            'id' => 8,
            'title' => 'Fortnite',
            'description' => 'Il popolare gioco battle royale che permette ai giocatori di combattere per la sopravvivenza in un mondo dinamico e in continua evoluzione.'
        ],
        [
            'id' => 9,
            'title' => 'Minecraft',
            'description' => 'Un mondo sandbox infinito dove i giocatori possono costruire, esplorare e combattere in un ambiente pieno di creatività e avventure.'
        ],
        [
            'id' => 10,
            'title' => 'Grand Theft Auto V',
            'description' => 'Un avventura criminale open-world ricca di azione, personaggi memorabili e possibilità di esplorare una vasta città.'
        ],
        [
            'id' => 11,
            'title' => 'Cyberpunk 2077',
            'description' => 'Immergiti in un futuro distopico con una storia avvincente, personaggi intriganti e un mondo aperto ricco di dettagli.'
        ],
        [
            'id' => 12,
            'title' => 'Pokémon Spada e Scudo',
            'description' => 'Esplora la regione di Galar, cattura Pokémon e diventa il campione della lega in questa nuova avventura Pokémon.'
        ],
        [
            'id' => 13,
            'title' => 'Overwatch',
            'description' => 'Un gioco di squadra online che offre una vasta gamma di personaggi con abilità uniche e intensi combattimenti a squadre.'
        ],
        [
            'id' => 14,
            'title' => 'The Witcher 3: Wild Hunt',
            'description' => 'Una avventura epica di caccia ai mostri con Geralt di Rivia, piena di scelte morali, combattimenti e magia.'
        ],
        [
            'id' => 15,
            'title' => 'League of Legends',
            'description' => 'Il famoso gioco MOBA che offre intense partite multiplayer online con una vasta gamma di campioni e strategie.'
        ],
        [
            'id' => 16,
            'title' => 'Apex Legends',
            'description' => 'Un battle royale frenetico che offre personaggi unici, abilità speciali e un gameplay tattico.'
        ],
        [
            'id' => 17,
            'title' => 'World of Warcraft',
            'description' => 'Esplora Azeroth e affronta avventure epiche in uno dei MMORPG più popolari al mondo.'
        ],
        [
            'id' => 18,
            'title' => 'Valorant',
            'description' => 'Un gioco tattico di sparatutto in prima persona che offre personaggi unici, abilità speciali e partite competitive.'
        ],
        [
            'id' => 19,
            'title' => 'Rocket League',
            'description' => 'Un mix esplosivo di calcio e auto da corsa, dove i giocatori si sfidano in partite frenetiche e divertenti.'
        ]
    ];

    Article::create([    
        'title' => 'PlayStation 5',
        'body' => 'La nuova console di gioco di Sony, con grafica avanzata e velocità di caricamento ultraveloci.'
    ]);
    Article::create([    
        'title' => 'Xbox Series X',
        'body' => 'La potente console di gioco di Microsoft, con prestazioni di gioco eccezionali e compatibilità retroattiva.'
    ]);
    Article::create([    
        'title' => 'The Legend of Zelda: Breath of the Wild',
        'body' => 'Un avventura epica nel vasto mondo aperto di Hyrule, piena di misteri da scoprire e nemici da sconfiggere.'
    ]);
    Article::create([    
        'title' => 'FIFA 22',
        'body' => 'Il popolare simulatore di calcio che offre una grafica realistica, modalità di gioco coinvolgenti e licenze ufficiali.'
    ]);
    Article::create([    
        'title' => 'Call of Duty: Warzone',
        'body' => 'Un intenso sparatutto online gratuito che offre battaglie epiche con una vasta gamma di armi e mappe.'
    ]);
    Article::create([    
        'title' => 'Super Mario Odyssey',
        'body' => 'Un avventura platform piena di colori con Mario e Cappy, esplora mondi incredibili e risolvi enigmi impegnativi.'
    ]);
    Article::create([    
        'title' => 'Assassin s Creed Valhalla',
        'body' => 'Esplora l epica saga degli assassini in un avventura vichinga ricca di azione, mitologia e esplorazione.'
    ]);
    Article::create([    
        'title' => 'Fortnite',
        'body' => 'Il popolare gioco battle royale che permette ai giocatori di combattere per la sopravvivenza in un mondo dinamico e in continua evoluzione.'
    ]);
    Article::create([    
        'title' => 'Minecraft',
        'body' => 'Un mondo sandbox infinito dove i giocatori possono costruire, esplorare e combattere in un ambiente pieno di creatività e avventure.'
    ]);
    Article::create([    
        'title' => 'Grand Theft Auto V',
        'body' => 'Un avventura criminale open-world ricca di azione, personaggi memorabili e possibilità di esplorare una vasta città.'
    ]);
    Article::create([    
        'title' => 'Cyberpunk 2077',
        'body' => 'Immergiti in un futuro distopico con una storia avvincente, personaggi intriganti e un mondo aperto ricco di dettagli.'
    ]);
    Article::create([    
        'title' => 'Pokémon Spada e Scudo',
        'body' => 'Esplora la regione di Galar, cattura Pokémon e diventa il campione della lega in questa nuova avventura Pokémon.'
    ]);
    Article::create([    
        'title' => 'Overwatch',
        'body' => 'Un gioco di squadra online che offre una vasta gamma di personaggi con abilità uniche e intensi combattimenti a squadre.'
    ]);
    Article::create([    
        'title' => 'The Witcher 3: Wild Hunt',
        'body' => 'Una avventura epica di caccia ai mostri con Geralt di Rivia, piena di scelte morali, combattimenti e magia.'
    ]);
    Article::create([    
        'title' => 'League of Legends',
        'body' => 'Il famoso gioco MOBA che offre intense partite multiplayer online con una vasta gamma di campioni e strategie.'
    ]);
    Article::create([    
        'title' => 'Apex Legends',
        'body' => 'Un battle royale frenetico che offre personaggi unici, abilità speciali e un gameplay tattico.'
    ]);
    Article::create([    
        'title' => 'World of Warcraft',
        'body' => 'Esplora Azeroth e affronta avventure epiche in uno dei MMORPG più popolari al mondo.'
    ]);
    Article::create([    
        'title' => 'Valorant',
        'body' => 'Un gioco tattico di sparatutto in prima persona che offre personaggi unici, abilità speciali e partite competitive.'
        
    ]);
    Article::create([    
        'title' => 'Rocket League',
        'body' => 'Un mix esplosivo di calcio e auto da corsa, dove i giocatori si sfidano in partite frenetiche e divertenti.'
    ]);
});
