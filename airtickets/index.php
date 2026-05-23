<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfriVols — Billets d'avion pas chers en Afrique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <?php include 'menu.php'; ?>

    <section class="hero">

        <div class="hero-bg"></div>
        <div class="hero-map">🌍</div>
        <div class="hero-content">

            <div class="hero-eyebrow">
                <div class="hero-line"></div>
                <span class="hero-eyebrow-text">Meilleurs prix garantis</span>
            </div>

            <h1>Volez partout<br>en <em>Afrique</em><br>pour moins cher.</h1>
            <p class="hero-sub">
                Comparez des centaines de vols sur toutes les destinations africaines
                et trouvez le meilleur tarif en quelques secondes.
            </p>

            <div class="hero-actions">
                <a href="page1.php" class="btn-primary">✈ Rechercher un vol</a>
                <a href="page2.php" class="btn-secondary">📋 Mes réservations</a>
            </div>

        </div>
    </section>

    <div class="stats-bar">
        <div class="stats-inner">
            <div class="stat-item">
                <div class="stat-value">54</div>
                <div class="stat-label">Pays africains couverts</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">200+</div>
                <div class="stat-label">Destinations disponibles</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">-40%</div>
                <div class="stat-label">vs prix habituels</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">24/7</div>
                <div class="stat-label">Service client disponible</div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="badge badge-gold" style="margin-bottom:16px">🔥 Offres du moment</div>
            <h2 class="section-title">Destinations populaires</h2>
            <p class="section-sub">Cliquez sur une destination pour voir les compagnies disponibles</p>

            <?php
            $destinations = 
            [
                [
                    "from"=>"Dakar","to"=>"Abidjan","emoji"=>"","image"=>"image/AbidAir.png",
                    "price"=>"220 000","bg"=>"linear-gradient(135deg,#1a3a2a,#0d2015)","dur"=>"1h 30min",
                    "airlines"=>[
                        ["name"=>"Air Sénégal","desc"=>"Compagnie nationale du Sénégal","logo"=>"🇸🇳","color"=>"#00853F","url"=>"https://flyairsenegal.com"],
                        ["name"=>"Air Côte d'Ivoire","desc"=>"Compagnie nationale ivoirienne","logo"=>"🇨🇮","color"=>"#F77F00","url"=>"https://www.aircotedivoire.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Casablanca","emoji"=>"","image"=>"image/CasabAir.png",
                    "price"=>"180 000","bg"=>"linear-gradient(135deg,#1a1a3a,#0d0d20)","dur"=>"3h 10min",
                    "airlines"=>[
                        ["name"=>"Air Sénégal","desc"=>"Vol direct Dakar–Casablanca","logo"=>"🇸🇳","color"=>"#00853F","url"=>"https://www.flyairsenegal.com"],
                        ["name"=>"Royal Air Maroc","desc"=>"Compagnie nationale du Maroc","logo"=>"🇲🇦","color"=>"#C1272D","url"=>"https://www.royalairmaroc.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Lagos","emoji"=>"","image"=>"image/DakAir.png",
                    "price"=>"329 000","bg"=>"linear-gradient(135deg,#3a1a0d,#20100d)","dur"=>"2h 45min",
                    "airlines"=>[
                        ["name"=>"Air Sénégal","desc"=>"Liaison Dakar–Lagos","logo"=>"🇸🇳","color"=>"#00853F","url"=>"https://flyairsenegal.com"],
                        ["name"=>"Air Peace","desc"=>"Compagnie nigériane low-cost","logo"=>"🇳🇬","color"=>"#008751","url"=>"https://www.flyairpeace.com"],
                        ["name"=>"Ethiopian Airlines","desc"=>"Via Addis-Abeba","logo"=>"🇪🇹","color"=>"#078930","url"=>"https://www.ethiopianairlines.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Nairobi","emoji"=>"","image"=>"image/NairAir.png",
                    "price"=>"135 000","bg"=>"linear-gradient(135deg,#1a2a0d,#0f1a0a)","dur"=>"7h 20min",
                    "airlines"=>[
                        ["name"=>"Ethiopian Airlines","desc"=>"Leader africain, via Addis","logo"=>"🇪🇹","color"=>"#078930","url"=>"https://www.ethiopianairlines.com"],
                        ["name"=>"Kenya Airways","desc"=>"Compagnie nationale du Kenya","logo"=>"🇰🇪","color"=>"#BB0000","url"=>"https://www.kenya-airways.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Accra","emoji"=>"","image"=>"image/AccAir.jpg",
                    "price"=>"210 000","bg"=>"linear-gradient(135deg,#2a1a0d,#1a0d05)","dur"=>"2h 05min",
                    "airlines"=>[
                        ["name"=>"Air Sénégal","desc"=>"Vol direct Dakar–Accra","logo"=>"🇸🇳","color"=>"#00853F","url"=>"https://flyairsenegal.com/en/welcome/"],
                        ["name"=>"Africa World Airlines","desc"=>"Compagnie ghanéenne","logo"=>"🇬🇭","color"=>"#006B3F","url"=>"https://www.airghana.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Johannesburg","emoji"=>"","image"=>"image/johAir.jpg",
                    "price"=>"378 000","bg"=>"linear-gradient(135deg,#0d1a2a,#050d1a)","dur"=>"10h 40min",
                    "airlines"=>[
                        ["name"=>"Ethiopian Airlines","desc"=>"Via Addis-Abeba","logo"=>"🇪🇹","color"=>"#078930","url"=>"https://www.ethiopianairlines.com"],
                        ["name"=>"South African Airways","desc"=>"Compagnie nationale sud-africaine","logo"=>"🇿🇦","color"=>"#007A4D","url"=>"https://www.flysaa.com"],
                        ["name"=>"Air France","desc"=>"Via Paris CDG","logo"=>"🇫🇷","color"=>"#002157","url"=>"https://www.airfrance.fr"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Brazzaville","emoji"=>"","image"=>"image/BrazzAir.jpg",
                    "price"=>"395 000","bg"=>"linear-gradient(135deg,#1a2f3a,#0d1820)","dur"=>"5h 15min",
                    "airlines"=>[
                        ["name"=>"Ecair","desc"=>"Compagnie nationale congolaise","logo"=>"🇨🇬","color"=>"#009543","url"=>"https://www.fly-ecair.com"],
                        ["name"=>"Ethiopian Airlines","desc"=>"Via Addis-Abeba","logo"=>"🇪🇹","color"=>"#078930","url"=>"https://www.ethiopianairlines.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Douala","emoji"=>"","image"=>"image/DoualAir.png",
                    "price"=>"234 000","bg"=>"linear-gradient(135deg,#3a2a1a,#20150d)","dur"=>"4h 20min",
                    "airlines"=>[
                        ["name"=>"Camair-Co","desc"=>"Compagnie nationale du Cameroun","logo"=>"🇨🇲","color"=>"#007A3D","url"=>"https://www.camair-co.cm"],
                        ["name"=>"Air Sénégal","desc"=>"Vol Afrique centrale","logo"=>"🇸🇳","color"=>"#00853F","url"=>"https://flyairsenegal.com"],
                    ]
                ],
                [
                    "from"=>"Dakar","to"=>"Libreville","emoji"=>"","image"=>"image/DakarAIR.png",
                    "price"=>"278 000","bg"=>"linear-gradient(135deg,#102a3a,#081520)","dur"=>"4h 50min",
                    "airlines"=>[
                        ["name"=>"Afrijet","desc"=>"Compagnie gabonaise","logo"=>"🇬🇦","color"=>"#0055A4","url"=>"https://www.flygabon.online"],
                        ["name"=>"Air Sénégal","desc"=>"Vol Afrique centrale","logo"=>"🇸🇳","color"=>"#00853F","url"=>"https://flyairsenegal.com"],
                    ]
                ]
            ];
        
            ?>

            <div class="destinations-grid">
                <?php foreach($destinations as $i => $d): ?>
                <div class="dest-card" onclick="openModal(<?= $i ?>)">
                    <div class="dest-img"
                        style="
                            background-image:url('<?= $d['image'] ?>');
                            background-size:cover;
                            background-position:center;
                            background-repeat: no-repeat;
                        ">
                    
                        <div class="dest-overlay"
                            style="
                                background:
                                linear-gradient(to top, rgba(0,0,0,0.65), rgba(0,0,0,0.2));
                            ">
                        </div>

                        <span class="dest-emoji"><?= $d['emoji'] ?></span>
                    </div>
                    <div class="dest-info">
                        <div class="dest-route">
                            <?= $d['from'] ?>
                            <span class="dest-arrow">→</span>
                            <?= $d['to'] ?>
                        </div>
                        <div style="font-size:13px;color:var(--muted)">⏱ <?= $d['dur'] ?> &nbsp;|&nbsp; <?= count($d['airlines']) ?> compagnie<?= count($d['airlines'])>1?'s':'' ?></div>
                        <div class="dest-footer">
                            <div class="dest-price"><?= $d['price'] ?> FCFA <span>/ pers.</span></div>
                            <span class="badge badge-green">Voir les vols</span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div class="modal-overlay" id="modalOverlay" onclick="closeOnOverlay(event)">
        <div class="modal" id="modal">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-route">
                <span id="modalFrom"></span>
                <span class="arrow">✈</span>
                <span id="modalTo"></span>
            </div>
            <div class="modal-subtitle" id="modalSubtitle"></div>
            <div class="modal-question">🏢 Choisissez votre compagnie aérienne :</div>
            <div class="airline-list" id="airlineList"></div>
            <p class="modal-note">
                🔒 Vous serez redirigé vers le site officiel de la compagnie pour finaliser votre réservation.
            </p>
        </div>
    </div>

    <section class="section" style="background:var(--dark-2);padding:64px 24px;">
        <div class="container">
            <div class="DD">
                <div class="badge badge-gold" style="margin-bottom:16px">Notre engagement</div>
                 <h2 class="section-title">Pourquoi choisir AfriVols ?</h2>
                <p class="section-sub">Des avantages pensés pour les voyageurs africains</p>
                 <div class="why-grid">
                    <div class="why-card">
                       <div class="why-icon">💰</div>
                       <div class="why-title">Prix les plus bas</div>
                       <div class="why-desc">Nous comparons toutes les compagnies africaines pour vous garantir le meilleur tarif du marché.</div>
                 </div>
                     <div class="why-card">
                            <div class="why-icon">⚡</div>
                            <div class="why-title">Réservation rapide</div>
                            <div class="why-desc">Réservez votre billet en moins de 3 minutes. Paiement sécurisé par Mobile Money, carte ou virement.</div>
                        </div>
                        <div class="why-card">
                            <div class="why-icon">🔒</div>
                            <div class="why-title">Paiement sécurisé</div>
                            <div class="why-desc">Vos transactions sont protégées. Nous acceptons Orange Money, Wave, MTN, Visa et bien plus.</div>
                        </div>
                        <div class="why-card">
                            <div class="why-icon">🛎</div>
                            <div class="why-title">Support 24h/24</div>
                            <div class="why-desc">Notre équipe est disponible à toute heure pour vous assister avant, pendant et après votre voyage.</div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="cta-banner">
                <h2>Prêt à décoller ? ✈</h2>
                <p>Trouvez votre vol et économisez jusqu'à 40% sur votre prochain voyage en Afrique.</p>
                <a href="page1.php" class="btn-primary" style="font-size:16px;padding:16px 36px;">Rechercher un vol maintenant</a>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-logo">✈ AfriVols</div>
        <p class="footer-copy">© <?php echo date('Y'); ?> AfriVols — Billets d'avion pas chers en Afrique. Tous droits réservés.</p>
    </footer>

    <script>

        const destinations = <?php echo json_encode($destinations); ?>;

        function openModal(index) {
            const d = destinations[index];
            document.getElementById('modalFrom').textContent = d.from;
            document.getElementById('modalTo').textContent = d.to;
            document.getElementById('modalSubtitle').textContent = '⏱ ' + d.dur + ' · À partir de ' + d.price + ' FCFA';

            const list = document.getElementById('airlineList');
            list.innerHTML = '';

            d.airlines.forEach(airline => {
                const a = document.createElement('a');
                a.href = airline.url;
                a.target = '_blank';
                a.rel = 'noopener noreferrer';
                a.className = 'airline-btn';
                a.innerHTML = `
                    <div class="airline-logo" style="background:${airline.color}22;border:1px solid ${airline.color}44">
                        ${airline.logo}
                    </div>
                    <div class="airline-info">
                        <div class="airline-name">${airline.name}</div>
                        <div class="airline-desc">${airline.desc}</div>
                    </div>
                    <div class="airline-arrow">→</div>
                `;
                list.appendChild(a);
            });

            document.getElementById('modalOverlay').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('modalOverlay').classList.remove('open');
            document.body.style.overflow = '';
        }

        function closeOnOverlay(e) {
            if (e.target === document.getElementById('modalOverlay')) closeModal();
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeModal();
        });
    </script>

</body>
</html>
