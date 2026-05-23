<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Réservations — AfriVols</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="page2.css">
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="page-header">

        <div class="container">
            <div class="badge badge-gold" style="margin-bottom:12px">📋 Espace voyageur</div>
            <h1>Mes réservations</h1>
            <p>Consultez et gérez tous vos billets d'avion</p>
        </div>
        
    </div>

    <div class="container" style="padding-top:40px;padding-bottom:80px;">

        <div class="login-box">
            <div class="login-icon">🔐</div>
            <h2>Accéder à mes billets</h2>
            <p>Connectez-vous avec votre email ou votre numéro de réservation</p>

            <div class="form-group">
                <label class="form-label">📧 Adresse email</label>
                <input type="email" class="form-input" placeholder="exemple@email.com">
            </div>

            <div class="form-group">
                <label class="form-label">🔑 Mot de passe</label>
                <input type="password" class="form-input" placeholder="••••••••">
            </div>

            <button class="login-btn">Se connecter</button>

            <div class="login-divider">ou</div>

            <div class="form-group">
                <label class="form-label">🎫 Numéro de réservation</label>
                <div class="ref-input-wrap">
                    <input type="text" class="form-input" placeholder="ex: AFV-2024-XXXX">
                    <button class="ref-btn">Rechercher</button>
                </div>
            </div>
        </div>

        <div style="margin-top:60px;">
            <h2 style="font-family:'Playfair Display',serif;font-size:26px;margin-bottom:6px;">Aperçu des réservations</h2>
            <p style="color:var(--muted);margin-bottom:28px;">Exemple de ce que vous verrez après connexion</p>

            <div class="booking-tabs">
                <button class="booking-tab active">À venir (2)</button>
                <button class="booking-tab">Passés (5)</button>
                <button class="booking-tab">Annulés (1)</button>
            </div>

            <?php
            $bookings = [
                [
                    "ref"=>"AFV-2024-8821","status"=>"confirmed","status_label"=>"Confirmé",
                    "from"=>"DKR","from_city"=>"Dakar","to"=>"ABJ","to_city"=>"Abidjan",
                    "date"=>"15 Juin 2026","time_d"=>"08:45","time_a"=>"10:15",
                    "airline"=>"Air Sénégal","dur"=>"1h 30","pax"=>"2 passagers","prix"=>"120 000 FCFA"
                ],
                [
                    "ref"=>"AFV-2024-9103","status"=>"pending","status_label"=>"En attente",
                    "from"=>"DKR","from_city"=>"Dakar","to"=>"CMN","to_city"=>"Casablanca",
                    "date"=>"02 Juillet 2026","time_d"=>"18:20","time_a"=>"22:00",
                    "airline"=>"Royal Air Maroc","dur"=>"3h 40","pax"=>"1 passager","prix"=>"250 000 FCFA", 
                ],
            ];
            ?>

            <?php foreach($bookings as $b): ?>
            <div class="booking-card">
                <div class="booking-header">
                    <div>
                        <div class="booking-ref">Réf. <?= $b['ref'] ?> <span>• <?= $b['airline'] ?></span></div>
                    </div>
                    <span class="status-badge status-<?= $b['status'] ?>">
                        <?= $b['status'] === 'confirmed' ? '✅' : '⏳' ?> <?= $b['status_label'] ?>
                    </span>
                </div>

                <div class="booking-body">
                    <div>
                        <div class="booking-city-big"><?= $b['from'] ?></div>
                        <div class="booking-city-name"><?= $b['from_city'] ?></div>
                        <div class="booking-date"><?= $b['time_d'] ?> • <?= $b['date'] ?></div>
                    </div>

                    <div class="booking-mid">
                        <div class="booking-airline">✈ <?= $b['airline'] ?></div>
                        <div class="booking-dur">⏱ <?= $b['dur'] ?></div>
                        <div style="margin-top:8px;font-size:20px;color:var(--gold)">→</div>
                    </div>

                    <div>
                        <div class="booking-city-big"><?= $b['to'] ?></div>
                        <div class="booking-city-name"><?= $b['to_city'] ?></div>
                        <div class="booking-date"><?= $b['time_a'] ?></div>
                    </div>

                    <div class="booking-actions">
                        <button class="btn-sm btn-sm-gold">🎫 Billet</button>
                        <button class="btn-sm btn-sm-outline">⋯</button>
                    </div>
                </div>

                <div class="booking-footer">
                    <div class="booking-pax">👤 <?= $b['pax'] ?></div>
                    <div class="booking-price"><?= $b['prix'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div style="text-align:center;padding:24px 0 0;">
            <a href="index.php" class="btn-secondary">← Retour à l'accueil</a>
        </div>

    </div>

    <footer class="site-footer">
        <div class="footer-logo">✈ AfriVols</div>
        <p class="footer-copy">© <?php echo date('Y'); ?> AfriVols — Tous droits réservés.</p>
    </footer>

    <script>
        document.querySelectorAll('.booking-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.booking-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>

</body>
</html>
