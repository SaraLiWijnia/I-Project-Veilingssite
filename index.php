<?php include 'template/header.php'; ?>

    <div class="jumbotron">
        <h1 class="display-4">Eenmaal, Andermaal... Verkocht!</h1>
        <p class="lead">EenmaalAndermaal is voor de kopers en verkopers. Samen creëeren wij een duurzame samenleving!</p>
        <hr class="my-4">
    </div>
    <section>
        <form class="row">
            <div class="input-group col-12">
                <input type="text" class="form-control form-control-lg" placeholder="Zoek een artikel" aria-label="Username" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Test</a>
                </div>
            </div>
        </form>
    </section>

    <section class="row home-section">
            <h2 class="col-12 section-header">Uitgelichte artikelen</h2>
            <?php for($i = 0; $i < 4; $i++): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="card">
                        <a href="#"><img class="card-img-top" src="./assets/images/placeholder.png" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="colored-link">Artikel</a></h5>
                            <h6 class="card-subtitle">Laatste bod: &euro;5.00</h6>
                            <p class="card-text text-muted"><small>Geplaatst op 23-04-2019 om 12:12</small></p>
                            <a class="btn btn-primary btn" href="#" role="button">Bekijk artikel</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Veiling sluit op 24-04-2019 om 12:00</small>
                        </div>
                    </article>
                </div>
            <?php endfor; ?>

    </section>

    <section class="row home-section">
        <h2 class="col-12 section-header">Meest gezochte termen</h2>
        <img class="col-12" src="assets/images/bubbles-placeholder.png">
    </section>

    <section class="row home-section">
        <h2 class="col-12 section-header">Recent aangeboden</h2>
        <?php for($i = 0; $i < 8; $i++): ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <article class="card">
                <a href="#"><img class="card-img-top" src="./assets/images/placeholder.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title"><a href="#" class="colored-link">Artikel</a></h5>
                    <h6 class="card-subtitle">Laatste bod: &euro;5.00</h6>
                    <p class="card-text text-muted"><small>Geplaatst op 23-04-2019 om 12:12</small></p>
                    <a class="btn btn-primary btn" href="#" role="button">Bekijk artikel</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Veiling sluit op 24-04-2019 om 12:00</small>
                </div>
            </article>
        </div>
        <?php endfor; ?>
    </section>

<?php include 'template/footer.php'; ?>