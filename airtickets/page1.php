<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher un vol — AfriVols</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="page1.css">
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="page-header">
        
        <div class="container">
            <div class="badge badge-gold" style="margin-bottom:12px">✈ Recherche de vols</div>
            <h1>Trouvez votre vol <br>au meilleur prix</h1>
            <p>Comparez des centaines d'offres sur toutes les destinations africaines</p>
        </div>
    </div>

    <div class="container">

        <div class="search-box">
            <div class="trip-tabs">
                <button class="trip-tab active">Aller-Retour</button>
                <button class="trip-tab">Aller Simple</button>
                <button class="trip-tab">Multi-destinations</button>
            </div>

            <form method="GET" action="page1.php">
                <div class="form-grid">

                    <div class="form-group">
                        <label class="form-label">🛫 Ville de départ</label>
                        <select name="from" class="form-input">
                            <option value="">Choisir une ville...</option>
                            <option value="DKR" <?= isset($_GET['from']) && $_GET['from']=='DKR' ? 'selected':'' ?>>Dakar (DKR)</option>
                            <option value="ABJ">Abidjan, Côte d’Ivoire (ABJ)</option>
                            <option value="ACC">Accra, Ghana (ACC)</option>
                            <option value="ADD">Addis-Abeba, Éthiopie (ADD)</option>
                            <option value="ALG">Alger, Algérie (ALG)</option>
                            <option value="LAD">Luanda, Angola (LAD)</option>
                            <option value="BKO">Bamako, Mali (BKO)</option>
                            <option value="BGF">Bangui, Centrafrique (BGF)</option>
                            <option value="BJM">Bujumbura, Burundi (BJM)</option>
                            <option value="COO">Cotonou, Bénin (COO)</option>
                            <option value="BZV">Brazzaville, Congo (BZV)</option>
                            <option value="BJM">Bujumbura, Burundi (BJM)</option>
                            <option value="CAI">Le Caire, Égypte (CAI)</option>
                            <option value="CMN">Casablanca, Maroc (CMN)</option>
                            <option value="DKR">Dakar, Sénégal (DKR)</option>
                            <option value="DAR">Dar es Salaam, Tanzanie (DAR)</option>
                            <option value="DJI">Djibouti, Djibouti (DJI)</option>
                            <option value="DLA">Douala, Cameroun (DLA)</option>
                            <option value="FIH">Kinshasa, RDC (FIH)</option>
                            <option value="FNA">Freetown, Sierra Leone (FNA)</option>
                            <option value="GBE">Gaborone, Botswana (GBE)</option>
                            <option value="HRE">Harare, Zimbabwe (HRE)</option>
                            <option value="JNB">Johannesburg, Afrique du Sud (JNB)</option>
                            <option value="KGL">Kigali, Rwanda (KGL)</option>
                            <option value="KIN">Kinshasa, RDC (KIN)</option>
                            <option value="LOS">Lagos, Nigeria (LOS)</option>
                            <option value="LBV">Libreville, Gabon (LBV)</option>
                            <option value="LFW">Lomé, Togo (LFW)</option>
                            <option value="LUN">Lusaka, Zambie (LUN)</option>
                            <option value="MPM">Maputo, Mozambique (MPM)</option>
                            <option value="MBA">Mombasa, Kenya (MBA)</option>
                            <option value="NBO">Nairobi, Kenya (NBO)</option>
                            <option value="NDJ">N'Djamena, Tchad (NDJ)</option>
                            <option value="NSI">Yaoundé, Cameroun (NSI)</option>
                            <option value="OUA">Ouagadougou, Burkina Faso (OUA)</option>
                            <option value="PNR">Pointe-Noire, Congo (PNR)</option>
                            <option value="ROB">Monrovia, Liberia (ROB)</option>
                            <option value="TNR">Antananarivo, Madagascar (TNR)</option>
                            <option value="TIP">Tripoli, Libye (TIP)</option>
                            <option value="TUN">Tunis, Tunisie (TUN)</option>
                            <option value="WDH">Windhoek, Namibie (WDH)</option>
                            <option value="ZNZ">Zanzibar, Tanzanie (ZNZ)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">🛬 Destination</label>
                        <select name="to" class="form-input">
                            <option value="">Choisir une ville...</option>
                            <option value="ABJ">Abidjan, Côte d’Ivoire (ABJ)</option>
                            <option value="ACC">Accra, Ghana (ACC)</option>
                            <option value="ADD">Addis-Abeba, Éthiopie (ADD)</option>
                            <option value="ALG">Alger, Algérie (ALG)</option>
                            <option value="LAD">Luanda, Angola (LAD)</option>
                            <option value="BKO">Bamako, Mali (BKO)</option>
                            <option value="BGF">Bangui, Centrafrique (BGF)</option>
                            <option value="BZV">Brazzaville, Congo (BZV)</option>
                            <option value="BJM">Bujumbura, Burundi (BJM)</option>
                            <option value="COO">Cotonou, Bénin (COO)</option>
                            <option value="CAI">Le Caire, Égypte (CAI)</option>
                            <option value="CMN">Casablanca, Maroc (CMN)</option>
                            <option value="DKR">Dakar, Sénégal (DKR)</option>
                            <option value="DAR">Dar es Salaam, Tanzanie (DAR)</option>
                            <option value="DJI">Djibouti, Djibouti (DJI)</option>
                            <option value="DLA">Douala, Cameroun (DLA)</option>
                            <option value="FIH">Kinshasa, RDC (FIH)</option>
                            <option value="FNA">Freetown, Sierra Leone (FNA)</option>
                            <option value="GBE">Gaborone, Botswana (GBE)</option>
                            <option value="HRE">Harare, Zimbabwe (HRE)</option>
                            <option value="JNB">Johannesburg, Afrique du Sud (JNB)</option>
                            <option value="KGL">Kigali, Rwanda (KGL)</option>
                            <option value="KIN">Kinshasa, RDC (KIN)</option>
                            <option value="LOS">Lagos, Nigeria (LOS)</option>
                            <option value="LBV">Libreville, Gabon (LBV)</option>
                            <option value="LFW">Lomé, Togo (LFW)</option>
                            <option value="LUN">Lusaka, Zambie (LUN)</option>
                            <option value="MPM">Maputo, Mozambique (MPM)</option>
                            <option value="MBA">Mombasa, Kenya (MBA)</option>
                            <option value="NBO">Nairobi, Kenya (NBO)</option>
                            <option value="NDJ">N'Djamena, Tchad (NDJ)</option>
                            <option value="NSI">Yaoundé, Cameroun (NSI)</option>
                            <option value="OUA">Ouagadougou, Burkina Faso (OUA)</option>
                            <option value="PNR">Pointe-Noire, Congo (PNR)</option>
                            <option value="ROB">Monrovia, Liberia (ROB)</option>
                            <option value="TNR">Antananarivo, Madagascar (TNR)</option>
                            <option value="TIP">Tripoli, Libye (TIP)</option>
                            <option value="TUN">Tunis, Tunisie (TUN)</option>
                            <option value="WDH">Windhoek, Namibie (WDH)</option>
                            <option value="ZNZ">Zanzibar, Tanzanie (ZNZ)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">📅 Date aller</label>
                        <input type="date" name="depart" class="form-input"
                               value="<?= isset($_GET['depart']) ? htmlspecialchars($_GET['depart']) : date('Y-m-d', strtotime('+3 days')) ?>"
                               min="<?= date('Y-m-d') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label">📅 Date retour</label>
                        <input type="date" name="retour" class="form-input"
                               value="<?= isset($_GET['retour']) ? htmlspecialchars($_GET['retour']) : date('Y-m-d', strtotime('+10 days')) ?>"
                               min="<?= date('Y-m-d') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label">👤 Passagers</label>
                        <select name="passagers" class="form-input">
                            <?php for($i=1;$i<=9;$i++): ?>
                            <option value="<?=$i?>" <?= (isset($_GET['passagers']) && $_GET['passagers']==$i) ? 'selected':'' ?>>
                                <?=$i?> passager<?= $i>1?'s':'' ?>
                            </option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">💺 Classe</label>
                        <select name="classe" class="form-input">
                            <option value="eco">Économique</option>
                            <option value="biz">Affaires</option>
                            <option value="first">Première classe</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <button type="submit" class="search-btn">🔍 Rechercher les vols disponibles</button>
                    </div>

                </div>
            </form>
        </div>

        <?php
        $vols = [
            ["company"=>"Air Sénégal","depart"=>"07:30","arrivee"=>"09:00","duree"=>"1h 30","escales"=>"Direct","prix"=>"133000","promo"=>true],
            ["company"=>"Ethiopian Airlines","depart"=>"10:15","arrivee"=>"11:55","duree"=>"1h 40","escales"=>"Direct","prix"=>"533300","promo"=>false],
            ["company"=>"Air Côte d'Ivoire","depart"=>"14:00","arrivee"=>"15:45","duree"=>"1h 45","escales"=>"Direct","prix"=>"483500","promo"=>false],
            ["company"=>"Royal Air Maroc","depart"=>"19:20","arrivee"=>"23:10","duree"=>"3h 50","escales"=>"1 escale","prix"=>"33000","promo"=>true],
            ["company"=> "RwandAir","depart"=> "16:30","arrivee"=> "22:00","duree"=> "5h 30","escales"=> "1 escale","prix"=> "683000","promo"=> false],
            ["company"=>"Trans Air Congo","depart"=>"06:50","arrivee"=>"09:30","duree"=>"2h 40","escales"=>"Direct","prix"=>"413000","promo"=>false],
        ];
        $from = isset($_GET['from']) ? $_GET['from'] : 'DKR';
        $to   = isset($_GET['to'])   ? $_GET['to']   : 'ABJ';
        ?>

        <div class="results-header">
            <div class="results-title">
                <?= count($vols) ?> vols trouvés •
                <span style="color:var(--muted);font-size:16px;font-weight:400"><?=$from?> → <?=$to?></span>
            </div>
            <div class="filter-bar">
                <button class="filter-chip active">Tous</button>
                <button class="filter-chip">Prix croissant</button>
                <button class="filter-chip">Direct uniquement</button>
                <button class="filter-chip">Matin</button>
            </div>
        </div>

        <?php foreach($vols as $vol): ?>
        <div class="flight-card">
            <div class="flight-side">
                <div class="flight-time"><?= $vol['depart'] ?></div>
                <div class="flight-city"><?= $from ?></div>
                <div class="flight-company"><?= $vol['company'] ?></div>
            </div>

            <div class="flight-mid">
                <div class="flight-duration">⏱ <?= $vol['duree'] ?></div>
                <div class="flight-line">
                    <div class="flight-dot"></div>
                    <div class="flight-dash"></div>
                    <div class="flight-plane">✈</div>
                    <div class="flight-dash"></div>
                    <div class="flight-dot"></div>
                </div>
                <div class="flight-stops"><?= $vol['escales'] ?></div>
            </div>

            <div class="flight-side">
                <div class="flight-time"><?= $vol['arrivee'] ?></div>
                <div class="flight-city"><?= $to ?></div>
            </div>

            <div class="flight-price-block">
                <?php if($vol['promo']): ?>
                <div class="promo-badge">PROMO</div><br>
                <?php endif; ?>
                <div class="flight-price"><?= $vol['prix'] ?> F</div>
                <div class="flight-price-label">par personne</div>
                <button class="btn-book">Réserver →</button>
            </div>
        </div>
        <?php endforeach; ?>

        <div style="text-align:center;padding:40px 0;">
            <a href="index.php" class="btn-secondary">← Retour à l'accueil</a>
        </div>

    </div>

    <footer class="site-footer">
        <div class="footer-logo">✈ AfriVols</div>
        <p class="footer-copy">© <?php echo date('Y'); ?> AfriVols — Tous droits réservés.</p>
    </footer>

    <script>
        
        document.querySelectorAll('.trip-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.trip-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
        
        document.querySelectorAll('.filter-chip').forEach(chip => {
            chip.addEventListener('click', () => {
                document.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
                chip.classList.add('active');
            });
        });
    </script>

</body>
</html>
